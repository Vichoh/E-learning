<?php  

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class LessonModel
{
    /**
     * Get all notes (notes are just example data that the user has created)
     * @return array an array with several objects (the results)
     */
    public static function getAllLearningLesson()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM lesson";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    public static function createUnidad($unidad_name, $unidad_description, $learning_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();
        
        $sql = "INSERT INTO unidad (unidad_name, learning_id, unidad_description) VALUES (:unidad_name, :learning_id, :unidad_description)";
        $query = $database->prepare($sql);
        $query->execute(array(':unidad_name' => $unidad_name, ':learning_id' => $learning_id, ':unidad_description' => $unidad_description));

        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }

    public static function updateUnidad( $unidad_id, $unidad_name, $unidad_description ){
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "UPDATE unidad SET unidad_name = :unidad_name, unidad_description = :unidad_description 
        WHERE unidad_id = :unidad_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':unidad_name' => $unidad_name, ':unidad_description' => $unidad_description, ':unidad_id' => $unidad_id));
        return true;

    }

    public static function getUnidad($learning_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM unidad WHERE learning_id = :learning_id order BY unidad_name asc";
        $query = $database->prepare($sql);
        $query->execute(array(':learning_id' => $learning_id));
        if ($query->rowCount()>=1) {
            return $query->fetchAll();
        }
        // fetchAll() is the PDO method that gets all result rows
        return false;
    }

    public static function getAllUnidad()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM unidad order BY unidad_name asc";
        $query = $database->prepare($sql);
        $query->execute();
        if ($query->rowCount()>=1) {
            return $query->fetchAll();
        }
        // fetchAll() is the PDO method that gets all result rows
        return false;
    }
    public static function getOneUnidad($unidad_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM unidad WHERE unidad_id = :unidad_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':unidad_id' => $unidad_id));
        if ($query->rowCount()==1) {
            return $query->fetch();
        }
        // fetchAll() is the PDO method that gets all result rows
        return false;
    }


    public static function getUnidadLesson()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM unidad_lesson";
        $query = $database->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }



    public static function getNextLesson ($lesson_id, $learning_id){
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT lesson_id FROM lesson WHERE lesson_id > :lesson_id AND learning_id = :learning_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':lesson_id' => $lesson_id, ':learning_id' => $learning_id));
        if ($query->rowCount() == 1) {
            return $query->fetch();
        }
        return false;

    }

    public static function getAllLearningLessonWereLearning($learning)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT  * FROM lesson WHERE learning_id = :learning_id";
        $query = $database->prepare($sql);
        $query->execute(array(':learning_id' => $learning));
        // fetchAll() is the PDO method that gets all result rows
         
        return $query->fetchAll();
    }

   
    /**
     * Get a single note
     * @param int $note_id id of the specific note
     * @return object a single object (the result)
     */
    public static function getLearningLesson($lesson_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM lesson WHERE  lesson_id = :lesson_id LIMIT 1";
        $query = $database->prepare($sql);

        $query->execute(array(':lesson_id' => $lesson_id));

        // fetch() is the PDO method that gets a single result

        
        return $query->fetch();
    }

    /**
     * Set a note (create a new one)
     * @param string $note_text note text that will be created
     * @return bool feedback (was the note created properly ?)
     */
    public static function createLearningLesson($lesson_title, $lesson_about, $lesson_text, $lesson_video, $lesson_video_cloud, $lesson_author, $learning_id )
    {   //validar que todos los campos esten rellenos
        if ((!$lesson_title || strlen($lesson_title) == 0)&&(!$lesson_text || strlen($lesson_text) == 0)) {
            return false;
        }
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO lesson (lesson_title, lesson_about, lesson_text, lesson_video, lesson_video_cloud, lesson_author, user_id, learning_id) VALUES (:lesson_title, :lesson_about, :lesson_text, :lesson_video, :lesson_video_cloud, :lesson_author, :user_id, :learning_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':lesson_title' => $lesson_title, ':lesson_about' => $lesson_about, ':lesson_text' => $lesson_text, ':lesson_video' => $lesson_video, ':lesson_video_cloud' => $lesson_video_cloud, ':lesson_author' => $lesson_author, ':user_id' => Session::get('user_id'), 'learning_id' => $learning_id));

        if ($query->rowCount() == 1) {
            return $database->lastInsertId();

        // fetchAll() is the PDO method that gets all result rows

        }

        // default return
        Session::add('feedback_negative', Text('FEEDBACK_LESSON_CREATION_FAILED'));
        return false;
    }
    public static function addLessonToUnidad ($unidad_id, $lesson_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "INSERT INTO unidad_lesson (unidad_id, lesson_id) VALUES (:unidad_id, :lesson_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':unidad_id' => $unidad_id, ':lesson_id' => $lesson_id));
        return true;
    }


    public static function UpDateLessonToUnidad ($unidad_id, $lesson_id ){
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "UPDATE unidad_lesson SET unidad_id = :unidad_id
        WHERE lesson_id = :lesson_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':lesson_id' => $lesson_id, ':unidad_id' => $unidad_id));
        return true;
    }


    /**
     * Update an existing note
     * @param int $note_id id of the specific note
     * @param string $note_text new text of the specific note
     * @return bool feedback (was the update successful ?)
     */
    public static function updateLearningLesson($lesson_id, $lesson_title, $lesson_about, $lesson_text, $lesson_video, $lesson_video_cloud, $lesson_author)
    {
        
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "UPDATE lesson SET lesson_title = :lesson_title, lesson_about = :lesson_about, lesson_text = :lesson_text, lesson_video = :lesson_video, lesson_video_cloud = :lesson_video_cloud, lesson_author = :lesson_author WHERE lesson_id = :lesson_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':lesson_id' => $lesson_id, ':lesson_title' => $lesson_title, ':lesson_about' => $lesson_about, ':lesson_text' => $lesson_text, ':lesson_video' => $lesson_video, ':lesson_video_cloud' => $lesson_video_cloud, ':lesson_author' => $lesson_author));
        if ($query->rowCount() == 1) {
            return true;
        }
        Session::add('feedback_negative', Text::get('FEEDBACK_LESSON_EDITING_FAILED'));
        return false;
    }

    /**
     * Delete a specific note
     * @param int $note_id id of the note
     * @return bool feedback (was the note deleted properly ?)
     */
    public static function deleteLearningLesson($lesson_id)
    {
        if (!$lesson_id) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "DELETE FROM lesson WHERE lesson_id = :lesson_id AND user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':lesson_id' => $lesson_id, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_LESSON_DELETION_FAILED'));
        return false;
    }

    public static function deleteUnidad($unidad_id){
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "DELETE FROM unidad WHERE unidad_id = :unidad_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':unidad_id' => $unidad_id));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_LESSON_DELETION_FAILED'));
        return false;
    }
}


