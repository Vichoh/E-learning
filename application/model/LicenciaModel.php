<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class LicenciaModel
{
    /**
     * Get all licencia (notes are just example data that the user has created)
     * @return array an array with several objects (the results)
     */
    public static function getAllLicencias()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT licence_id, licence_name, licence_key, licence_user, licence_expiration, licence_observacion FROM licence";
        $query = $database->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows


        $licencias = $query->fetchAll();
         foreach($licencias as $key => $value) { 
            $value->valido = self::licenciaCaducada($value->licence_expiration);
            $fecha = $value->licence_expiration;
            $value->licence_expiration = gmdate("Y-m-d", $fecha);
        }

        return $licencias;
    }

    /**
     * Get a single note
     * @param int $licencia_id id of the specific note
     * @return object a single object (the result)
     */
    public static function getLicencia($licence_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT licence_id, licence_name, licence_key, licence_user ,licence_expiration, licence_observacion FROM licence WHERE licence_id = :licence_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id));

        // fetch() is the PDO method that gets a single result
        $licencia = $query->fetch();
        $fecha = $licencia->licence_expiration;
        $licencia->licence_expiration = gmdate("Y-m-d", $fecha);

        return $licencia;
    }

    /**
     * Set a note (create a new one)
     * @param string $licence_name note text that will be created
     * @return bool feedback (was the note created properly ?)
     */
    public static function createLicencia($licence_name, $licence_user, $licence_expiration, $licence_observacion)
    {

        if ((!$licence_name || strlen($licence_name) == 0) && (!$licence_user || strlen($licence_user) == 0)  && (!$licence_expiration || strlen($licence_expiration) == 0))  {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        $licence_key = self::generateRandomString(5);
        $fecha = date_timestamp_get(self::fechaAInt($licence_expiration));



        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO licence (licence_name, licence_key, licence_user, licence_expiration, licence_observacion) VALUES (:licence_name, :licence_key,:licence_user, :licence_expiration, :licence_observacion)";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_name' => $licence_name, ':licence_key' => $licence_key, ':licence_user' => $licence_user, ':licence_expiration' => $fecha, ':licence_observacion' => $licence_observacion));

        if ($query->rowCount() == 1) {
            return $database->lastInsertId();
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;
    }

    /**
     * Update an existing note
     * @param int $licencia_id id of the specific note
     * @param string $licencia_text new text of the specific note
     * @return bool feedback (was the update successful ?)
     */
    public static function updateLicencia($licence_id, $licence_name, $licence_key, $licence_user, $licence_expiration,$licence_observacion)
    {
        if (!$licence_id || !$licence_name) {
            return false;
        }
        $fecha = date_timestamp_get(self::fechaAInt($licence_expiration));
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "UPDATE licence SET licence_name = :licence_name, licence_key = :licence_key, licence_user = :licence_user, licence_expiration = :licence_expiration, licence_observacion = :licence_observacion WHERE licence_id = :licence_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id, ':licence_name' => $licence_name, ':licence_key' => $licence_key, ':licence_user' => $licence_user, ':licence_expiration' => $fecha, ':licence_observacion' => $licence_observacion));

        if ($query->rowCount() == 1) {
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_EDITING_FAILED'));
        return false;
    }

    /**
     * Delete a specific note
     * @param int $licencia_id id of the note
     * @return bool feedback (was the licence deleted properly ?)
     */
    public static function deleteNote($licence_id)
    {
        if (!$licence_id) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "DELETE FROM licence WHERE licence_id = :licence_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_DELETION_FAILED'));
        return false;
    }


      public static function getLicenciaCantUser($licence_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT  licence_user  FROM licence WHERE licence_id = :licence_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id));

        // fetch() is the PDO method that gets a single result
        if ($query->rowCount() == 1) {
            return $query->fetch()->licence_user;
        }
        return 0;
    }

   /**
     * enlaza una licencia donde el administrador envia el usuario y la licencia 
     * @param int $licencia_id id of the note
     * @return bool feedback (was the licence deleted properly ?)
     */
    public static function createLicence_Users($licence_id, $user_id)
    {


        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO licence_users (licence_id, user_id) VALUES (:licence_id, :user_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id, ':user_id' => $user_id));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;

    }

    public static function getLicensesPerUser()
    {
        $database = DatabaseFactory::getFactory()->getConnection();


        $sql = "SELECT licence_users.licence_id, licence_users.user_id, licence.licence_name, licence.licence_key, licence.licence_expiration, licence.licence_observacion FROM licence_users INNER JOIN licence ON (licence_users.licence_id = licence.licence_id) WHERE licence_users.user_id = :user_id ";

        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        // fetch() is the PDO method that gets a single result

        $licencias = $query->fetchAll();
         foreach($licencias as $key => $value) { 
            $value->valido = self::licenciaCaducada($value->licence_expiration);
            $fecha = $value->licence_expiration;
            $value->licence_expiration = gmdate("Y-m-d", $fecha);
        }

        return $licencias;
    }


        public static function getAllLicenciasUsers()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT licence.licence_id, licence.licence_name, licence.licence_key, licence.licence_user, licence.icence_expiration users.user_name, licence.licence_observacion FROM licence INNER JOIN licence_users ON (licence.licence_id = licence_users.licence_id) INNER JOIN users ON (licence_users.user_id = users.users_id)";
        $query = $database->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        $licencias = $query->fetchAll();
         foreach($licencias as $key => $value) { 
            $fecha = $value->licence_expiration;
            $value->licence_expiration = gmdate("Y-m-d", $fecha);

        }

        return $licencias;
    }


    public static function getLicencePerKey ($licence_key) {

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT licence_id, licence_name, licence_key, licence_user ,licence_expiration, licence_observacion FROM licence WHERE licence_key = :licence_key LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_key' => $licence_key));

        //if ($query->rowCount() == 0) {
          //  return false;
        //}
        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }


    public static function validationLicenceLimit ($licence_id) {


        $licencia = self::getLicenciaCantUser($licence_id);

        $cantUsersLicenses = self::countNLicenses($licence_id);

        if (intval($licencia) > intval($cantUsersLicenses)) {
            return true;
        }

        return false;

    }

    public static function validationOneUserPerLicence ($licence_id, $user_id) {

       $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT * FROM licence_users WHERE licence_id = :licence_id AND user_id = :user_id";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id, ':user_id' => $user_id));

        if ($query->rowCount() == 1) {
            return true;
        }

        return false;
    }

    public static function countNLicenses ($licence_id) {

        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT licence_id FROM licence_users WHERE licence_id = :licence_id";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id));

        return $query->rowCount();
    }


    public static function getUsers_idPerLicence_id ($licence_id) {
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT user_id FROM licence_users WHERE licence_id = :licence_id";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id));

        return $query->fetchAll();
    } 


    public static function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function fechaAInt($fecha) {
        return $date = new DateTime($fecha);
    }

    public static function licenciaCaducada ($caducidad) {
            $fecha = new DateTime();
            $fechaActual = $fecha->getTimestamp();

            if (intval($fechaActual) < intval($caducidad)) {
                return 'Activa';
            }

            return 'Caducada';
    }


    public static function getUsersPerLicence_id ($licence_id) {
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT licence_users.estado_eliminacion, licence_users.lu_id ,licence_users.user_id, users.first_name, users.last_name, users.user_email  FROM licence_users INNER JOIN users ON licence_users.user_id = users.user_id WHERE licence_users.licence_id = :licence_id AND users.user_account_type <> :user_account_type";
        $query = $database->prepare($sql);
        $query->execute(array(':licence_id' => $licence_id, ':user_account_type' => Session::get('user_id')));

        return $query->fetchAll();
    } 

    /*
        Trae todas las solicitudes para eliminar un usuario de una licencia

    */

    public static function getLicenceUserDelete () {

        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT licence.licence_name, licence.licence_key,licence_users.lu_id ,licence_users.user_id, users.first_name, users.last_name, users.user_email, licence.licence_observacion  FROM licence INNER JOIN licence_users ON licence.licence_id = licence_users.licence_id INNER JOIN users ON licence_users.user_id = users.user_id WHERE licence_users.estado_eliminacion = :estado";
        $query = $database->prepare($sql);
        $query->execute(array(':estado' => 1));

        return $query->fetchAll();

    }



    public static function solicitudEliminacion($lu_id, $estado)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE licence_users SET estado_eliminacion = :estado_eliminacion WHERE lu_id = :lu_id LIMIT 1");
        $query->execute(array(':estado_eliminacion' => $estado, ':lu_id' => $lu_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }

    public static function estadoValidacionLicenciasUsuario () {

        $resutl = false;
        for ($i=0; $i < count(self::getLicensesPerUser()); $i++) { 
            if (self::getLicensesPerUser()[$i]->valido == 'Activa') {
                $result = true;
            }
        }

        return $resutl;

    }

    public static function deleteUserFromLicence ($lu_id) {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("DELETE FROM licence_users WHERE licence_users.lu_id = :lu_id");
        $query->execute(array( ':lu_id' => $lu_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }
}
