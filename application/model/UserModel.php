<?php

/**
 * UserModel
 * Handles all the PUBLIC profile stuff. This is not for getting data of the logged in user, it's more for handling
 * data of all the other users. Useful for display profile information, creating user lists etc.
 */
class UserModel
{
    /**
     * Gets an array that contains all the users in the database. The array's keys are the user ids.
     * Each array element is an object, containing a specific user's data.
     * The avatar line is built using Ternary Operators, have a look here for more:
     * @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
     *
     * @return array The profiles of all users
     */
    public static function countAllUsers()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id FROM users";
        $query = $database->prepare($sql);
        $query->execute();
        return $query->rowCount();

    }

    public static function countConnectedUsers()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id FROM users WHERE session_id IS NOT NULL";
        $query = $database->prepare($sql);
        $query->execute();
        return $query->rowCount();

    }

    public static function countAdminUsers()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id FROM users WHERE user_account_type = '2'";
        $query = $database->prepare($sql);
        $query->execute();
        return $query->rowCount();

    }

    public static function getPublicProfilesOfAllUsers()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, user_name, first_name, last_name, user_email, user_active, user_has_avatar, user_deleted FROM users";
        $query = $database->prepare($sql);
        $query->execute();

        $all_users_profiles = array();

        foreach ($query->fetchAll() as $user) {

            // all elements of array passed to Filter::XSSFilter for XSS sanitation, have a look into
            // application/core/Filter.php for more info on how to use. Removes (possibly bad) JavaScript etc from
            // the user's values
            array_walk_recursive($user, 'Filter::XSSFilter');

            $all_users_profiles[$user->user_id] = new stdClass();
            $all_users_profiles[$user->user_id]->user_id = $user->user_id;
            $all_users_profiles[$user->user_id]->user_name = $user->user_name;
            $all_users_profiles[$user->user_id]->user_realname = $user->first_name. ' ' . $user->last_name;
            $all_users_profiles[$user->user_id]->user_email = $user->user_email;
            $all_users_profiles[$user->user_id]->user_active = $user->user_active;
            $all_users_profiles[$user->user_id]->user_deleted = $user->user_deleted;
            $all_users_profiles[$user->user_id]->user_avatar_link = (Config::get('USE_GRAVATAR') ? AvatarModel::getGravatarLinkByEmail($user->user_email) : AvatarModel::getPublicAvatarFilePathOfUser($user->user_has_avatar, $user->user_id));
        }

        return $all_users_profiles;
    }

    /**
     * Gets a user's profile data, according to the given $user_id
     * @param int $user_id The user's id
     * @return mixed The selected user's profile
     */
    public static function getPublicProfileOfUser($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, user_name, user_email, user_active, user_sentence ,user_has_avatar, user_deleted, first_name, last_name
                FROM users WHERE user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => $user_id));

        $user = $query->fetch();

        if ($query->rowCount() == 1) {
            if (Config::get('USE_GRAVATAR')) {
                $user->user_avatar_link = AvatarModel::getGravatarLinkByEmail($user->user_email);
            } else {
                $user->user_avatar_link = AvatarModel::getPublicAvatarFilePathOfUser($user->user_has_avatar, $user->user_id);
            }
        } else {
            Session::add('feedback_negative', Text::get('FEEDBACK_USER_DOES_NOT_EXIST'));
        }

        // all elements of array passed to Filter::XSSFilter for XSS sanitation, have a look into
        // application/core/Filter.php for more info on how to use. Removes (possibly bad) JavaScript etc from
        // the user's values
        array_walk_recursive($user, 'Filter::XSSFilter');

        return $user;
    }

    /**
     * @param $user_name_or_email
     *
     * @return mixed
     */
    public static function getUserDataByUserNameOrEmail($user_name_or_email)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("SELECT user_id, user_name, user_email, first_name, last_name FROM users
                                     WHERE (user_name = :user_name_or_email OR user_email = :user_name_or_email)
                                           AND user_provider_type = :provider_type LIMIT 1");
        $query->execute(array(':user_name_or_email' => $user_name_or_email, ':provider_type' => 'DEFAULT'));

        return $query->fetch();
    }

    /**
     * @param $user_name_or_email
     *
     * @return mixed
     */
    public static function getUserLvlTwoDataByUserNameOrEmail($user_name_or_email)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("SELECT user_id, user_name, user_email, first_name, last_name FROM users
                                     WHERE (user_name = :user_name_or_email OR user_email = :user_name_or_email)
                                           AND user_provider_type = :provider_type AND user_account_type = :user_account_type LIMIT 1");
        $query->execute(array(':user_name_or_email' => $user_name_or_email, ':provider_type' => 'DEFAULT', ':user_account_type' => '2'));

        return $query->fetch();
    }

    /**
     * Checks if a username is already taken
     *
     * @param $user_name string username
     *
     * @return bool
     */
    public static function doesUsernameAlreadyExist($user_name)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("SELECT user_id FROM users WHERE user_name = :user_name LIMIT 1");
        $query->execute(array(':user_name' => $user_name));
        if ($query->rowCount() == 0) {
            return false;
        }
        return true;
    }

    /**
     * Checks if a email is already used
     *
     * @param $user_email string email
     *
     * @return bool
     */
    public static function doesEmailAlreadyExist($user_email)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("SELECT user_id FROM users WHERE user_email = :user_email LIMIT 1");
        $query->execute(array(':user_email' => $user_email));
        if ($query->rowCount() == 0) {
            return false;
        }
        return true;
    }

    /**
     * Writes new username to database
     *
     * @param $user_id int user id
     * @param $new_user_name string new username
     *
     * @return bool
     */
    public static function saveNewUserName($user_id, $new_user_name)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_name = :user_name WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_name' => $new_user_name, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }
    /**
     * Writes new firstName to database
     *
     * @param $user_id int user id
     * @param $new_first_name string new username
     *
     * @return bool
     */
    public static function saveNewFirstName($user_id, $new_first_name)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET first_name = :first_name WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':first_name' => $new_first_name, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }
    /**
     * Writes new firstName to database
     *
     * @param $user_id int user id
     * @param $new_last_name string new username
     *
     * @return bool
     */
    public static function saveNewLastName($user_id, $new_last_name)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET last_name = :last_name WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':last_name' => $new_last_name, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }

    /**
     * Writes new sentence to database
     *
     * @param $user_id int user id
     * @param $sentence string new username
     *
     * @return bool
     */
    public static function saveNewSentence($user_id, $sentence)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_sentence = :user_sentence WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_sentence' => $sentence, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }


        /**
     * Writes new sentence to database
     *
     * @param $user_id int user id
     * @param $sentence string new username
     *
     * @return bool
     */
    public static function saveNewNumeroSimulaciones($user_id, $cantSimulaciones )
    {


        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_numero_simulaciones = :user_numero_simulaciones WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_numero_simulaciones' => $cantSimulaciones, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }



        /**
     * Writes new point to database
     *
     * @param $user_id int user id
     * @param $point string new ppint
     *
     * @return bool
     */
    public static function saveNewPoint($point, $user_id)
    {

        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_point = :user_point WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_point' => $point, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }


        /**
     * Writes new rNKING to database
     *
     * @param $user_id int user id
     * @param $ranking string new ppint
     *
     * @return bool
     */
    public static function saveNewRanking($ranking, $user_id)
    {

        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_ranking = :user_ranking WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_ranking' => $ranking, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }


           /**
     * Guarda el mejor puntaje
     *
     * @param $user_id int user id
     * @param $point string new ppint
     *
     * @return bool
     */
    public static function saveNewHigherScore($score, $user_id)
    {

        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_higher_score = :user_higher_score WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_higher_score' => $score, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }

               /**
     * Guarda las rondas
     *
     * @param $user_id int user id
     * @param $round string new round
     *
     * @return bool
     */
    public static function saveNewRound($user_id, $round )
    {

          $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_round = :user_round WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_round' => $round, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }


                 /**
     * Guarda el tiempo simulado
     *
     * @param $user_id int user id
     * @param $round string new round
     *
     * @return bool
     */
    public static function saveNewTime($user_id, $time)
    {

          $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_time = :user_time WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_time' => $time, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }

    /**
     * Writes new email address to database
     *
     * @param $user_id int user id
     * @param $new_user_email string new email address
     *
     * @return bool
     */
    public static function saveNewEmailAddress($user_id, $new_user_email)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_email = :user_email WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_email' => $new_user_email, ':user_id' => $user_id));
        $count = $query->rowCount();
        if ($count == 1) {
            return true;
        }
        return false;
    }

    /**
     * Edit the user's name, provided in the editing form
     *
     * @param $new_first_name string The new username
     *
     * @return bool success status
     */
    public static function editFirstName($new_first_name)
    {
      $new_first_name = substr(strip_tags($new_first_name), 0, 64); 
      $status_of_action = self::saveNewFirstName(Session::get('user_id'), $new_first_name);
        if ($status_of_action) {
            Session::set('first_name', $new_first_name);
            Session::add('feedback_positive', Text::get('FEEDBACK_FIRSTNAME_CHANGE_SUCCESSFUL'));
            return true;
        } else {
            Session::add('feedback_negative', Text::get('FEEDBACK_UNKNOWN_ERROR'));
            return false;
        }
    }
    /**
     * Edit the user's name, provided in the editing form
     *
     * @param $new_last_name string The new username
     *
     * @return bool success status
     */
    public static function editLastName($new_last_name)
    {
      $new_last_name = substr(strip_tags($new_last_name), 0, 64); 
      $status_of_action = self::saveNewLastName(Session::get('user_id'), $new_last_name);
        if ($status_of_action) {
            Session::set('last_name', $new_last_name);
            Session::add('feedback_positive', Text::get('FEEDBACK_LASTNAME_CHANGE_SUCCESSFUL'));
            return true;
        } else {
            Session::add('feedback_negative', Text::get('FEEDBACK_UNKNOWN_ERROR'));
            return false;
        }
    }
       /**
     * Edit the user's sentence, provided in the editing form
     *
     * @param $new_sentence string The new username
     *
     * @return bool success status
     */
    public static function editSentence($new_sentence)
    {
      
      $status_of_action = self::saveNewSentence(Session::get('user_id'), $new_sentence);
        if ($status_of_action) {
            Session::set('new_sentence', $new_sentence);
            Session::add('feedback_positive', Text::get('FEEDBACK_SENTENCE_CHANGE_SUCCESSFUL'));
            return true;
        } else {
            Session::add('feedback_negative', Text::get('FEEDBACK_UNKNOWN_ERROR'));
            return false;
        }
    }


        /**
     * Edit the user's sentence, provided in the editing form
     *
     * @param $new_sentence string The new username
     *
     * @return bool success status
     */
    public static function editNumeroSimulaciones($team, $simulacion)
    {
        $users =  TeamModel::getAllUserInTeam($team);

        for ($i=0; $i < count($users); $i++) { 
            $cantSimulaciones = intval((self::getEstadisticas($users[$i]->id_user))->user_numero_simulaciones);

            if ($simulacion) {
                $cantSimulaciones++;
            }else {
                if ($cantSimulaciones > 0) {
                    $cantSimulaciones--;
                }
            }

            self::saveNewNumeroSimulaciones($users[$i]->id_user, $cantSimulaciones);

        }
    }

        /**
     * Edit the user's sentence, provided in the editing form
     *
     * @param $new_sentence string The new username
     *
     * @return bool success status
     */
    public static function editTiempo($team, $simulacion, $tiempo)
    {
        $users =  TeamModel::getAllUserInTeam($team);

        for ($i=0; $i < count($users); $i++) { 
            
      
            $cantTiempo = intval((self::getEstadisticas($users[$i]->id_user))->user_time);

            if ($simulacion) {
                $cantTiempo = $cantTiempo + intval($tiempo);
            }else {
                if ($cantTiempo > 0) {
                    $cantTiempo = $cantTiempo - $tiempo;
                }
            }

            self::saveNewTime($users[$i]->id_user, $cantTiempo);

        }
    }

        /**
     * Edit the user's sentence, provided in the editing form
     *
     * @param $new_sentence string The new username
     *
     * @return bool success status
     */
    public static function editNumeroRondas($team, $simulacion, $rondas)
    {
        $users =  TeamModel::getAllUserInTeam($team);

        for ($i=0; $i < count($users); $i++) { 
            
      
            $cantRondas = intval((self::getEstadisticas($users[$i]->id_user))->user_round);

            if ($simulacion) {
                $cantRondas = $cantRondas + intval($rondas);
            }else {
                if ($cantRondas > 0) {
                    $cantRondas= $cantRondas - intval($rondas);
                }
            }

            self::saveNewRound($users[$i]->id_user, $cantRondas);

        }
    }

        /**
     * Edit the user's point, provided in the editing form
     *
     * @param $point string The new username
     *
     * @return bool success status
     */
    public static function editPoint($user_id, $points)
    {
        $puntosActuales =  self::getEstadisticas($user_id)->user_point;

        $puntos = $puntosActuales + $points;
        
        $status_of_action = self::saveNewPoint($puntos, $user_id);
        if ($status_of_action) {
            Session::set('new_points', $puntos);

            return true;
        } else {

            return false;
        }

    }

            /**
     * Edit the user's ranking, provided in the editing form
     *
     * @param $ranking string The new username
     *
     * @return bool success status
     */
    public static function editRankingAll()
    {
        $pointsArray = self::getAllPointUsersDesc();

        for ($i=0; $i <= count($pointsArray); $i++) { 

            $status_of_action = self::saveNewRanking($i+1, $pointsArray[$i]->user_id);

        }

    }



            /**
     * Edit the user's ranking, provided in the editing form
     *
     * @param $ranking string The new username
     *
     * @return bool success status
     */
    public static function editHigherScore($point ,$user_id)
    {

        $lastScore = self::getEstadisticas($user_id)->user_higher_score;
        
       if ($lastScore < $point) {
            $status_of_action = self::saveNewHigherScore($point, $user_id);
            if ($status_of_action) {
            Session::set('score', $point);

            return true;
            } else {

                return false;
            }

       }

    }



    /**
     * Edit the user's name, provided in the editing form
     *
     * @param $new_user_name string The new username
     *
     * @return bool success status
     */
    public static function editUserName($new_user_name)
    {
        // new username same as old one ?
        if ($new_user_name == Session::get('user_name')) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USERNAME_SAME_AS_OLD_ONE'));
            return false;
        }

        // username cannot be empty and must be azAZ09 and 2-64 characters
        if (!preg_match("/^[a-zA-Z0-9]{2,64}$/", $new_user_name)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USERNAME_DOES_NOT_FIT_PATTERN'));
            return false;
        }

        // clean the input, strip usernames longer than 64 chars (maybe fix this ?)
        $new_user_name = substr(strip_tags($new_user_name), 0, 64);

        // check if new username already exists
        if (self::doesUsernameAlreadyExist($new_user_name)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USERNAME_ALREADY_TAKEN'));
            return false;
        }

        $status_of_action = self::saveNewUserName(Session::get('user_id'), $new_user_name);
        if ($status_of_action) {
            Session::set('user_name', $new_user_name);
            Session::add('feedback_positive', Text::get('FEEDBACK_USERNAME_CHANGE_SUCCESSFUL'));
            return true;
        } else {
            Session::add('feedback_negative', Text::get('FEEDBACK_UNKNOWN_ERROR'));
            return false;
        }
    }

    /**
     * Edit the user's email
     *
     * @param $new_user_email
     *
     * @return bool success status
     */
    public static function editUserEmail($new_user_email)
    {
        // email provided ?
        if (empty($new_user_email)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_EMAIL_FIELD_EMPTY'));
            return false;
        }

        // check if new email is same like the old one
        if ($new_user_email == Session::get('user_email')) {
            Session::add('feedback_negative', Text::get('FEEDBACK_EMAIL_SAME_AS_OLD_ONE'));
            return false;
        }

        // user's email must be in valid email format, also checks the length
        // @see http://stackoverflow.com/questions/21631366/php-filter-validate-email-max-length
        // @see http://stackoverflow.com/questions/386294/what-is-the-maximum-length-of-a-valid-email-address
        if (!filter_var($new_user_email, FILTER_VALIDATE_EMAIL)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_EMAIL_DOES_NOT_FIT_PATTERN'));
            return false;
        }

        // strip tags, just to be sure
        $new_user_email = substr(strip_tags($new_user_email), 0, 254);

        // check if user's email already exists
        if (self::doesEmailAlreadyExist($new_user_email)) {
            Session::add('feedback_negative', Text::get('FEEDBACK_USER_EMAIL_ALREADY_TAKEN'));
            return false;
        }

        // write to database, if successful ...
        // ... then write new email to session, Gravatar too (as this relies to the user's email address)
        if (self::saveNewEmailAddress(Session::get('user_id'), $new_user_email)) {
            Session::set('user_email', $new_user_email);
            Session::set('user_gravatar_image_url', AvatarModel::getGravatarLinkByEmail($new_user_email));
            Session::add('feedback_positive', Text::get('FEEDBACK_EMAIL_CHANGE_SUCCESSFUL'));
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_UNKNOWN_ERROR'));
        return false;
    }

    /**
     * Gets the user's id
     *
     * @param $user_name
     *
     * @return mixed
     */
    public static function getUserIdByUsername($user_name)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id FROM users WHERE user_name = :user_name AND user_provider_type = :provider_type LIMIT 1";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_name' => $user_name, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        return $query->fetch()->user_id;
    }

    /**
     * Gets the user's name
     *
     * @param $user_id
     *
     * @return mixed
     */
    public static function getUserRealNameById($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT first_name, last_name FROM users WHERE user_id = :user_id AND user_provider_type = :provider_type LIMIT 1";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_id' => $user_id, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        $data = $query->fetch();
        $a = $data->first_name;

        $b = $data->last_name;
        return $a . " " . $b;
    }
/**
     * Gets the user's name
     *
     * @param $user_id
     *
     * @return mixed
     */
    public static function getUserNameById($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_name FROM users WHERE user_id = :user_id AND user_provider_type = :provider_type LIMIT 1";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_id' => $user_id, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        $data = $query->fetch();
        return $data->user_name;
    }


        /**
     * Gets the imagen's name
     *
     * @param $user_id
     *
     * @return mixed
     */
    public static function getUserAvatar($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_has_avata FROM users WHERE user_id = :user_id AND user_provider_type = :provider_type LIMIT 1";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_id' => $user_id, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        $data = $query->fetch();
        return $data->user_has_avata;
    }

    /**
     * Gets the sentence's name
     *
     * @param $user_id
     *
     * @return mixed
     */
    public static function getUserSentence($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_sentence FROM users WHERE user_id = :user_id AND user_provider_type = :provider_type LIMIT 1";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_id' => $user_id, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        $data = $query->fetch();
        return $data->user_sentence;
    }


        public static function getUserEmailById($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_email FROM users WHERE user_id = :user_id AND user_provider_type = :provider_type LIMIT 1";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_id' => $user_id, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        $data = $query->fetch();

        return $data->user_email;;
    }

    /**
     * Gets the user's data
     *
     * @param $user_name string User's name
     *
     * @return mixed Returns false if user does not exist, returns object with user's data when user exists
     */
    public static function getUserDataByUsername($user_name)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, user_name, user_email, user_password_hash, user_active,user_deleted, user_suspension_timestamp, user_account_type, user_failed_logins, user_last_failed_login, user_tutorial
                  FROM users
                 WHERE (user_name = :user_name OR user_email = :user_name)
                       AND user_provider_type = :provider_type
                 LIMIT 1";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_name' => $user_name, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        return $query->fetch();
    }

    /**
     * Gets the user's data by user's id and a token (used by login-via-cookie process)
     *
     * @param $user_id
     * @param $token
     *
     * @return mixed Returns false if user does not exist, returns object with user's data when user exists
     */
    public static function getUserDataByUserIdAndToken($user_id, $token)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        // get real token from database (and all other data)
        $query = $database->prepare("SELECT user_id, user_name, user_email, user_password_hash, user_active,
                                          user_account_type,  user_has_avatar, user_failed_logins, user_last_failed_login
                                     FROM users
                                     WHERE user_id = :user_id
                                       AND user_remember_me_token = :user_remember_me_token
                                       AND user_remember_me_token IS NOT NULL
                                       AND user_provider_type = :provider_type LIMIT 1");
        $query->execute(array(':user_id' => $user_id, ':user_remember_me_token' => $token, ':provider_type' => 'DEFAULT'));

        // return one row (we only have one result or nothing)
        return $query->fetch();
    }
     /**
     * Gets the user's data by user's id and a token (used by login-via-cookie process)
     *
     * @param $user_id
     *
     * @return mixed Returns false if user does not exist, returns object with user's data when user exists
     */
    public static function endtutorial($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        // get real token from database (and all other data)
        $query = $database->prepare("UPDATE users SET user_tutorial = :user_tutorial WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_tutorial' => 1, ':user_id' => $user_id));
        $count = $query->rowCount();
        if ($count == 1) {
            return true;
        }
        Session::add('feedback_negative', Text::get('FEEDBACK_UNKNOWN_ERROR'));
        return false;
    }


         /**
     * Gets the user's data by user's id and a token (used by login-via-cookie process)
     *
     * @param $user_id
     *obtenermos todos los datos de un equipo
     * @return mixed Returns false if user does not exist, returns object with user's data when user exists
     */

    public static function getUserPerTeam ($team_id) {

        $database = DatabaseFactory::getFactory()->getConnection();
        $query = $database->prepare("SELECT users.first_name, users.last_name FROM users_team INNER JOIN users ON (users_team.id_user = users.user_id) WHERE users_team.id_user = :team_id");
        $query->execute(array(":team_id" => $team_id));
        return $query->fetchAll();
    }
     /**
     * Gets the user's data by user's id and a token (used by login-via-cookie process)
     *
     * @param $user_id
     *
     * @return mixed Returns false if user does not exist, returns object with user's data when user exists
     */
    public static function getEstadisticas ($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        // get real token from database (and all other data)
        $query = $database->prepare("SELECT user_numero_simulaciones, user_ranking, user_round, user_time, user_point, user_higher_score FROM users WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(':user_id' => $user_id));
        $estaditicas =  $query->fetch();

        $estaditicas->user_timeTransform = self::trasnStringTiempo(intval($estaditicas->user_time));



        return $estaditicas;

    }

    /**
        Gets all to points for users desc*
    *
    *
    */
    public static function getAllPointUsersDesc () 
    {
        $database = DatabaseFactory::getFactory()->getConnection();
        $query = $database->prepare("SELECT user_id, user_point FROM users ORDER BY user_point DESC");
        $query->execute();
        return $query->fetchAll();
    }

    /**
        Guarda las estadisticas de un team al finalizar la simulacion
    */
    public static function setStatsForTeamEndMatch ($team_id, $point) {

        //obtengo los uauarios de un equipo
        $users =  TeamModel::getAllUserInTeam($team_id);

        for ($i=0; $i < count($users); $i++) { 
            
            //Puntaje 
            self::editPoint($users[$i]->id_user, $point);
      
           //mejor puntaje
            self::editHigherScore($point, $users[$i]->id_user);

        }

         //ranking 

        self::editRankingAll();
    } 

    public static function trasnStringTiempo ($tiempo) {

         $horas = 0;
         $minutos = 0;


         $horas = intval(intval($tiempo) / 60);


         $minutos = $tiempo % 60; 


         if (strlen($horas) == 1 ) {
            $horas = '0' . $horas;
         }

         if (strlen($minutos) == 1) {
            $minutos = '0' . $minutos;
         }

         return $horas . ':' . $minutos;


    }



    /**
        Guarda las estadisticas de un team al finalizar la simulacion
    */
    public static function setStatsForTeamCreateSimulation ($team, $simulacion) {

        $users =  TeamModel::getAllUserInTeam($team);

        for ($i=0; $i < count($users); $i++) { 
            
            // obtiene la cantidad de simulaciones
            $cantSimulaciones = intval((self::getEstadisticas($users[$i]->id_user))->user_numero_simulaciones);
             // obtiene la cantidad de tondas actuales
            // $cantrondas = intval((self::getEstadisticas($users[$i]->id_user))->user_round);
            //  // obtiene la cantidad de tiempo actual
            // $cantTiempo = intval((self::getEstadisticas($users[$i]->id_user))->user_time);

            //comparamos si es valido o no
            if ($simulacion) {
                $cantSimulaciones++;
                // $cantrondas = $cantrondas + $rondas;
                // $cantTiempo = $cantTiempo + $tiempo;
                if ($simulacion > 0) {
                    $cantSimulaciones--;
                    // $cantrondas= $cantrondas - $rondas;
                    // $cantTiempo = $cantTiempo - $tiempo;
                }
            }
            // guardamos los nuevos datos
            self::saveNewNumeroSimulaciones($users[$i]->id_user, $cantSimulaciones);
            // self::saveNewRound($users[$i]->id_user, $cantrondas);
            // self::saveNewNumeroSimulaciones($users[$i]->id_user, $cantTiempo);

        }
    } 

 }

