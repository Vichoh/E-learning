<?php

/**
 * Class RegistrationModel
 *
 * Everything registration-related happens here.
 */
class RegistrationModel
{
    /**
     * Handles the entire registration process for DEFAULT users (not for people who register with
     * 3rd party services, like facebook) and creates a new user in the database if everything is fine
     *
     * @return boolean Gives back the success status of the registration
     */
    public static function registerNewUser($movil)
    {
        // clean the input
        $user_realname = strip_tags(Request::post('user_name'));
        $user_apellido = strip_tags(Request::post('user_apellido'));
        $user_email = strip_tags(Request::post('user_email'));
        $user_password_new = Request::post('user_password_new');
        $user_password_repeat = Request::post('user_password_repeat');
        $user_invitation = Request::post('user_invitation');

        // stop registration flow if registrationInputValidation() returns false (= anything breaks the input check rules)
        $validation_result = self::registrationInputValidation($user_realname, $user_apellido, $user_password_new, $user_password_repeat, $user_email);
        if (!$validation_result) {
            return false;
        }

        // crypt the password with the PHP 5.5's password_hash() function, results in a 60 character hash string.
        // @see php.net/manual/en/function.password-hash.php for more, especially for potential options
        $user_password_hash = password_hash($user_password_new, PASSWORD_DEFAULT);

        // make return a bool variable, so both errors can come up at once if needed
        $return = true;

        //make username
        $subNombre = explode(" ", $user_realname);
        $subApellido = explode(" ", $user_apellido);

        $user_name = $subNombre[0]. $subApellido[0] . strval(rand(1000000, 999999999));

        // check if username already exists
        //if (UserModel::doesUsernameAlreadyExist($user_name)) {
        //    Session::add('feedback_negative', Text::get('FEEDBACK_USERNAME_ALREADY_TAKEN'));
        //    $return = false;
        //}

        // check if email already exists
        if (UserModel::doesEmailAlreadyExist($user_email)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USER_EMAIL_ALREADY_TAKEN'));
            $return = false;
        }

        //codigo de invitación
        
        if (!LicenciaModel::getLicencePerKey($user_invitation)) {
            Session::add('feedback_negative', 'CODIGO DE INVITACION INCORRECTO');
            $return = false;
        }


        // limite de usuario
        $licence = LicenciaModel::getLicencePerKey($user_invitation);
        if (!LicenciaModel::validationLicenceLimit($licence->licence_id)) {
            Session::add('feedback_negative', 'LIMITE MAXIMO DE USUARIOS');
            $return = false;
        }


          //licencia caducada 

        $cadudaca = 'Caducada';
        if (LicenciaModel::licenciaCaducada($licence->licence_expiration) == $cadudaca) {
            Session::add('feedback_negative', 'LICENCIA CADUCADA');
            $return = false;
        }


        // if Username or Email were false, return false
        if (!$return) return false;

        // generate random hash for email verification (40 char string)
        $user_activation_hash = sha1(uniqid(mt_rand(), true));

        // write user data to database
        if (!self::writeNewUserToDatabase($user_name, $user_realname, $user_apellido, $user_password_hash, $user_email, time(), $user_activation_hash)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_ACCOUNT_CREATION_FAILED'));
            return false; // no reason not to return false here
        }

        // get user_id of the user that has been created, to keep things clean we DON'T use lastInsertId() here
        $user_id = UserModel::getUserIdByUsername($user_name);


        // write user data to database
        if (!LicenciaModel::createLicence_Users($licence->licence_id, $user_id)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_ACCOUNT_CREATION_FAILED'));
            return false; // no reason not to return false here
        }

        if (!$user_id) {
            Session::add('feedback_negative', Text::get('FEEDBACK_UNKNOWN_ERROR'));
            return false;
        }
        // send verification email
        if($movil == true){
            $hashmov = substr($user_activation_hash, 0, 4);
            if (self::sendVerificationEmail($user_id, $user_email, $hashmov, $movil)) {
                Session::add('feedback_positive', Text::get('FEEDBACK_ACCOUNT_SUCCESSFULLY_CREATED'));
                return true;
            }
        }else{
            if (self::sendVerificationEmail($user_id, $user_email, $user_activation_hash, $movil)) {
                Session::add('feedback_positive', Text::get('FEEDBACK_ACCOUNT_SUCCESSFULLY_CREATED'));
                return true;
            }
        }
        

        // if verification email sending failed: instantly delete the user
        self::rollbackRegistrationByUserId($user_id);
        Session::add('feedback_negative', Text::get('FEEDBACK_VERIFICATION_MAIL_SENDING_FAILED'));
        return true;
    }

    /**
     * Validates the registration input
     *
     * @param $user_name
     * @param $user_password_new
     * @param $user_password_repeat
     * @param $user_email
     * @param $user_email_repeat
     *
     * @return bool
     */
    public static function registrationInputValidation($user_name, $user_apellido, $user_password_new, $user_password_repeat, $user_email)
    {
        $return = true;

        // if username, email and password are all correctly validated, but make sure they all run on first sumbit
        if (self::validateUserRealName($user_name) AND self::validateUserRealApellido($user_apellido) AND self::validateUserEmail($user_email) AND self::validateUserPassword($user_password_new, $user_password_repeat) AND $return) {
            return true;
        }

        // otherwise, return false
        return false;
    }

    /**
     * Validates the username
     *
     * @param $user_name
     * @return bool
     */
    public static function validateUserRealName($user_name)
    {
        if (empty($user_name)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USERREALNAME_FIELD_EMPTY'));
            return false;
        }

        // if username is too short (2), too long (64) or does not fit the pattern (aZ09)
        if (!preg_match('/^[a-zA-Z0-9 ]{4,64}$/', $user_name)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USERREALNAME_DOES_NOT_FIT_PATTERN'));
            return false;
        }

        return true;
    }

    /**
     * Validates the username
     *
     * @param $user_name
     * @return bool
     */
    public static function validateUserRealApellido($user_apellido)
    {
        if (empty($user_apellido)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USERAPELLIDO_FIELD_EMPTY'));
            return false;
        }

        // if username is too short (2), too long (64) or does not fit the pattern (aZ09)
        if (!preg_match('/^[a-zA-Z0-9 ]{4,64}$/', $user_apellido)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USERAPELLIDO_DOES_NOT_FIT_PATTERN'));
            return false;
        }

        return true;
    }

    /**
     * Validates the email
     *
     * @param $user_email
     * @param $user_email_repeat
     * @return bool
     */
    public static function validateUserEmail($user_email)
    {
        if (empty($user_email)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_EMAIL_FIELD_EMPTY'));
            return false;
        }

        // validate the email with PHP's internal filter
        // side-fact: Max length seems to be 254 chars
        // @see http://stackoverflow.com/questions/386294/what-is-the-maximum-length-of-a-valid-email-address
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_EMAIL_DOES_NOT_FIT_PATTERN'));
            return false;
        }

        return true;
    }

    /**
     * Validates the password
     *
     * @param $user_password_new
     * @param $user_password_repeat
     * @return bool
     */
    public static function validateUserPassword($user_password_new, $user_password_repeat)
    {
        if (empty($user_password_new) OR empty($user_password_repeat)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_PASSWORD_FIELD_EMPTY'));
            return false;
        }

        if ($user_password_new !== $user_password_repeat) {
            Session::add('feedback_negative', Text::get('FEEDBACK_PASSWORD_REPEAT_WRONG'));
            return false;
        }

        if (strlen($user_password_new) < 6) {
            Session::add('feedback_negative', Text::get('FEEDBACK_PASSWORD_TOO_SHORT'));
            return false;
        }

        return true;
    }

    /**
     * Writes the new user's data to the database
     *
     * @param $user_name
     * @param $user_password_hash
     * @param $user_email
     * @param $user_creation_timestamp
     * @param $user_activation_hash
     *
     * @return bool
     */
    public static function writeNewUserToDatabase($user_name, $user_realname, $user_apellido, $user_password_hash, $user_email, $user_creation_timestamp, $user_activation_hash)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        // write new users data into database
        $sql = "INSERT INTO users (user_name, first_name, last_name, user_password_hash, user_email, user_creation_timestamp, user_activation_hash, user_provider_type)
                    VALUES (:user_name, :first_name, :last_name, :user_password_hash, :user_email, :user_creation_timestamp, :user_activation_hash, :user_provider_type)";
        $query = $database->prepare($sql);
        $query->execute(array(':user_name' => $user_name,
                              ':first_name' => $user_realname,
                              ':last_name' => $user_apellido,
                              ':user_password_hash' => $user_password_hash,
                              ':user_email' => $user_email,
                              ':user_creation_timestamp' => $user_creation_timestamp,
                              ':user_activation_hash' => $user_activation_hash,
                              ':user_provider_type' => 'DEFAULT'));
        $count =  $query->rowCount();
        if ($count == 1) {
            return true;
        }

        return false;
    }

    /**
     * Deletes the user from users table. Currently used to rollback a registration when verification mail sending
     * was not successful.
     *
     * @param $user_id
     */
    public static function rollbackRegistrationByUserId($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("DELETE FROM users WHERE user_id = :user_id");
        $query->execute(array(':user_id' => $user_id));
    }

    /**
     * Sends the verification email (to confirm the account).
     * The construction of the mail $body looks weird at first, but it's really just a simple string.
     *
     * @param int $user_id user's id
     * @param string $user_email user's email
     * @param string $user_activation_hash user's mail verification hash string
     *
     * @return boolean gives back true if mail has been sent, gives back false if no mail could been sent
     */
    public static function sendVerificationEmail($user_id, $user_email, $user_activation_hash, $movil)
    {
        if($movil == false){
            $body = Config::get('EMAIL_VERIFICATION_CONTENT') . Config::get('URL') . Config::get('EMAIL_VERIFICATION_URL')
                . '/' . urlencode($user_id) . '/' . urlencode($user_activation_hash);
        }else{
            $body = 'Ingrese el siguiente código en su aplicación: "' . urlencode($user_activation_hash) . '"';
        }
        $mail = new Mail;
        $mail_sent = $mail->sendMail($user_email, Config::get('EMAIL_VERIFICATION_FROM_EMAIL'),
            Config::get('EMAIL_VERIFICATION_FROM_NAME'), Config::get('EMAIL_VERIFICATION_SUBJECT'), $body
        );

        if ($mail_sent) {
            Session::add('feedback_positive', Text::get('FEEDBACK_VERIFICATION_MAIL_SENDING_SUCCESSFUL'));
            return true;
        } else {
            Session::add('feedback_negative', Text::get('FEEDBACK_VERIFICATION_MAIL_SENDING_ERROR') . $mail->getError() );
            return false;
        }
    }

    /**
     * checks the email/verification code combination and set the user's activation status to true in the database
     *
     * @param int $user_id user id
     * @param string $user_activation_verification_code verification token
     *
     * @return bool success status
     */
    public static function verifyNewUser($user_id, $user_activation_verification_code)
    //public static function verifyNewUser($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "UPDATE users SET user_active = 1, user_activation_hash = NULL
            WHERE user_id = :user_id AND user_activation_hash = :user_activation_hash LIMIT 1";
        /*$sql = "UPDATE users SET user_active = 1, user_activation_hash = NULL
                WHERE user_id = :user_id LIMIT 1";*/
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => $user_id, ':user_activation_hash' => $user_activation_verification_code));
        //$query->execute(array(':user_id' => $user_id));

        if ($query->rowCount() == 1) {
            Session::add('feedback_positive', Text::get('FEEDBACK_ACCOUNT_ACTIVATION_SUCCESSFUL'));
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_ACCOUNT_ACTIVATION_FAILED'));
        return false;
    }
    public static function verifyNewUserMobile($user_email, $user_activation_verification_code)
    //public static function verifyNewUser($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT user_activation_hash FROM users WHERE user_email = :user_email LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_email' => $user_email));
        $hashdb = substr($query->fetch()->user_activation_hash,0,4);

        if($hashdb == $user_activation_verification_code){
            $sql = "UPDATE users SET user_active = 1, user_activation_hash = NULL
            WHERE user_email = :user_email LIMIT 1";
        /*$sql = "UPDATE users SET user_active = 1, user_activation_hash = NULL
                WHERE user_id = :user_id LIMIT 1";*/
            $query = $database->prepare($sql);
            $query->execute(array(':user_email' => $user_email));
            if ($query->rowCount() == 1) {
                Session::add('feedback_positive', Text::get('FEEDBACK_ACCOUNT_ACTIVATION_SUCCESSFUL'));
                return true;
            }
        }        
        //$query->execute(array(':user_id' => $user_id));
        Session::add('feedback_negative', Text::get('FEEDBACK_ACCOUNT_ACTIVATION_FAILED'));
        return false;
    }
}