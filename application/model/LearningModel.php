<?php
class LearningModel{

  /* Obtener todos los cursos */
  public static function getAllLearning()
  {
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "SELECT user_id, learning_id, learning_title, learning_about, learning_author, learning_description, learning_result, learning_category, learning_level, learning_color, learning_image, learning_user FROM learning ";
    $query = $database->prepare($sql);
    $query->execute();

        // fetchAll() is the PDO method that gets all result rows
    $learning = $query->fetchAll();
    foreach($learning as $key => $value) { 
      $value->learning_result = explode(';', $value->learning_result); 
    }

    return $learning;

  }

  public static function getAllPublicLearning($learning_user)
  {
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "SELECT user_id, learning_id, learning_title, learning_about, learning_author, learning_description, learning_result, learning_category, learning_level, learning_color, learning_image, learning_user FROM learning WHERE learning_user <= :learning_user";
    $query = $database->prepare($sql);
    $query->execute(array(':learning_user' => $learning_user));

        // fetchAll() is the PDO method that gets all result rows
    $learning = $query->fetchAll();
    foreach($learning as $key => $value) { 
      $value->learning_result = explode(';', $value->learning_result); 
    }

    return $learning;

  }

  public static function getLearning($learning_id){
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "SELECT * FROM learning WHERE learning_id = :learning_id LIMIT 1";
    $query = $database->prepare($sql);

    $query->execute(array( ':learning_id' => $learning_id));

        // fetch() is the PDO method that gets a single result
    $learning = $query->fetch();

    $learning->learning_result = explode(';', $learning->learning_result); 
    return $learning;
  }

  public static function matricularLearning($learning_id){
    $database = DatabaseFactory::getFactory()->getConnection();
    $sql = "SELECT user_matriculados_learning FROM learning WHERE learning_id = :learning_id LIMIT 1";
    $query = $database->prepare($sql);
    $query->execute(array( ':learning_id' => $learning_id));

    $matricula = file_get_contents(Config::get('PATH_VIEW')."learning/matriculados.json");
    $matricula = json_decode($matricula, true);
    $matriculados = $query->fetch()->user_matriculados_learning;
    if ($matriculados==null) {

            //if ($query->rowCount() == 1) {
              //  return true;
            //}
            //Crear JSON
      $matricula["user_id"] = Session::get('user_id'); 
      $matriculasAll ;
      $matriculasAll[0] = $matricula;
      $matriculasAll = json_encode($matriculasAll);
      $sql = "UPDATE learning SET user_matriculados_learning = :user_id WHERE learning_id = :learning_id";
      $query = $database->prepare($sql);
      $query->execute(array(':learning_id' => $learning_id, ':user_id' => $matriculasAll
    ));

      return Session::get('user_id');
    }else {
            //Modificar JSON
      $matricula["user_id"] = Session::get('user_id');
      $matriculados = json_decode($matriculados, true);
      $matriculados[(sizeof($matriculados))]= $matricula;
      $matriculados = json_encode($matriculados);
            //$matricula = json_encode($matricula);
      $sql = "UPDATE learning SET user_matriculados_learning = :user_id WHERE learning_id = :learning_id";
      $query = $database->prepare($sql);
      $query->execute(array(':learning_id' => $learning_id, ':user_id' => $matriculados
    ));
            //$matriculasAll;
            //$matriculasAll[0] = $matricula;
            //$matriculasAll = json_encode($matriculasAll);

      return  $matriculados;
    }


  }

  public static function getMatriculado($learning_id){
    $database = DatabaseFactory::getFactory()->getConnection();
    $sql = "SELECT user_matriculados_learning FROM learning WHERE learning_id = :learning_id LIMIT 1";
    $query = $database->prepare($sql);
    $query->execute(array( ':learning_id' => $learning_id));
    $matricula = file_get_contents(Config::get('PATH_VIEW')."learning/matriculados.json");

    $matriculados = $query->fetch()->user_matriculados_learning;
    $matriculados = json_decode($matriculados, true);
        //$matriculados = $query->fetch()->user_matriculados_learning;
       // $usuarios(stdClass($matriculados))

    for ($i=0;$i<count($matriculados);$i++) {

      $id_user = $matriculados[$i]["user_id"];
      if ($id_user==Session::get('user_id')) {
        return true;
      }



    }
    return false;
  }


       /**
     * Set a note (create a new one)
     * @param string $note_text note text that will be created
     * @return bool feedback (was the note created properly ?)
     */
       public static function createLearning($learning_title, $learning_description, $learning_about, $learning_category, $learning_level, $learning_user, $learning_result, $learning_author, $learning_author_des, $learning_color, $learning_image)
    {   //validar que todos los campos esten rellenos
      if ((!$learning_title || strlen($learning_title) == 0)&&(!$learning_level || strlen($learning_level) == 0)) {
        Session::add('feedback_negative', Text::get('FEEDBACK_LESSON_CREATION_FAILED'));
        return false;
      }

      $database = DatabaseFactory::getFactory()->getConnection();

      $sql = "INSERT INTO learning (learning_title, learning_description, learning_about, learning_category, learning_level, learning_user, learning_result, learning_author, learning_author_des, learning_color, learning_image, user_id) VALUES (:learning_title, :learning_description, :learning_about, :learning_category, :learning_level, :learning_user, :learning_result, :learning_author, :learning_author_des, :learning_color, :learning_image, :user_id)";
      $query = $database->prepare($sql);
      $query->execute(array(':learning_title' => $learning_title, ':learning_description' => $learning_description, ':learning_about' => $learning_about, ':learning_category' => $learning_category, ':learning_level' => $learning_level, ':learning_user' => $learning_user, ':learning_result' => $learning_result, ':learning_author' => $learning_author, ':learning_author_des'=>$learning_author_des, ':learning_color' => $learning_color, ':learning_image' => $learning_image, ':user_id' => Session::get('user_id')));

      if ($query->rowCount() == 1) {
        return true;
      }

        // default return
      Session::add('feedback_negative', Text::get('FEEDBACK_LESSON_CREATION_FAILED'));
      return false;
    }



    public static function updateLearning($learning_id, $learning_title, $learning_description, $learning_about, $learning_result, $learning_category, $learning_level, $learning_user, $learning_author, $learning_author_des, $learning_color, $learning_image)
    {
      if (!$learning_id || $learning_title == "" || $learning_level == "") {
        return false;     
      }
      $database = DatabaseFactory::getFactory()->getConnection();

      $sql = "UPDATE learning SET learning_title = :learning_title, learning_description = :learning_description, learning_about = :learning_about, learning_result = :learning_result, learning_category = :learning_category, learning_level = :learning_level, learning_user = :learning_user, learning_author = :learning_author, learning_author_des = :learning_author_des, learning_color = :learning_color, learning_image = :learning_image WHERE learning_id = :learning_id AND user_id = :user_id LIMIT 1";
      $query = $database->prepare($sql);
      $query->execute(array(':learning_id' => $learning_id, ':learning_title' => $learning_title, ':learning_description' => $learning_description, ':learning_about' => $learning_about, ':learning_result' => $learning_result, ':learning_category' => $learning_category, ':learning_level' => $learning_level, ':learning_user' => $learning_user, ':learning_author' => $learning_author, ':learning_author_des' => $learning_author_des, ':learning_color' => $learning_color, ':learning_image' => $learning_image, ':user_id' => Session::get('user_id')));

      if ($query->rowCount() == 1) {
        return true;
      }
      Session::add('feedback_negative', Text::get('FEEDBACK_LESSON_EDITING_FAILED'));
      return false;
    }

    public static function deleteLearning($learning_id){
      if (!$learning_id) {
        return false;
      }

      $database = DatabaseFactory::getFactory()->getConnection();

      $sql = "DELETE FROM learning WHERE learning_id = :learning_id AND user_id = :user_id LIMIT 1";
      $query = $database->prepare($sql);
      $query->execute(array(':learning_id' => $learning_id, ':user_id' => Session::get('user_id')));

      if ($query->rowCount() == 1) {
        return true;
      }

        // default return
      Session::add('feedback_negative', Text::get('FEEDBACK_LESSON_DELETION_FAILED'));
      return false;
    }



    /* Matricula en un curso*/
    public static function matricular($user_id, $id_curso){
      $database = DatabaseFactory::getFactory()->getConnection();
      switch($id_curso){
       case 1:
       $sql = "UPDATE cintroduccion SET matriculado=:valor_matricula WHERE user_id =:user_id";
       break;
     }
     $query = $database->prepare($sql);
     $query->execute(array(':valor_matricula' => '1', ':user_id'=> $user_id));
     $count =  $query->rowCount();

     if ($count == 1) {
      return true;
    }
    return false;
  }

  /* Verifica si un usuario esta matriculado en un curso */
  public static function esta_matriculado($user_id, $id_curso){
    $database = DatabaseFactory::getFactory()->getConnection();

    switch($id_curso){
     case 1:
     $sql = "SELECT matriculado FROM cintroduccion WHERE user_id = :user_id LIMIT 1";
     break;
   }
   $query = $database->prepare($sql);
   $query->execute(array(':user_id' => $user_id));

   if ($query->rowCount() == 0) {
    return false;
  }else {            
    $realmente_matriculado = $query->fetch()-> matriculado;

    if($realmente_matriculado == "" or $realmente_matriculado == '0'){
      return false;
    }else {
      return true;
    }
  }        
}

/* Retorna el progreso de un individuo en un curso */
public static function mi_progreso($user_id, $id_curso){
  $database = DatabaseFactory::getFactory()->getConnection();

  switch($id_curso){
   case 1:
   $sql = "SELECT progreso FROM cintroduccion WHERE user_id = :user_id LIMIT 1";
   break;
 }

 $query = $database->prepare($sql);
 $query->execute(array(':user_id' => $user_id));

 $valor_progreso = $query->fetch()->progreso;

 return $valor_progreso;
}

/* Almacena el nuevo progreso de un usuario */
public static function guardar_progreso($user_id, $id_curso, $valor_progreso){
  $database = DatabaseFactory::getFactory()->getConnection();

  switch($id_curso){
   case 1:
   $progreso_anterior = self::mi_progreso(Session::get('user_id'), '1');
   if ($progreso_anterior == "") {
     $progreso_anterior = 0;
   }				
   $resultado = $valor_progreso + $progreso_anterior;
   $sql = "UPDATE cintroduccion SET progreso=:valor_progreso WHERE user_id =:user_id";				
   break;
 }
 $query = $database->prepare($sql);
 $query->execute(array(':valor_progreso' => $resultado, ':user_id'=> $user_id));

 if ($query->rowCount() == 1) {
  return true;
}
return false;
}

/* Verifica si se realizo una pregunta */
public static function guardo_pregunta($user_id, $id_curso, $cual_pregunta) {
  $database = DatabaseFactory::getFactory()->getConnection();

  switch($id_curso){
   case 1:
   $sql = "SELECT p".$cual_pregunta." as p FROM cintroduccion WHERE user_id = :user_id LIMIT 1";
   break;
 }
 $query = $database->prepare($sql);
 $query->execute(array(':user_id' => $user_id));

 if ($query->rowCount() == 1) {
   $realmente_guardo = $query->fetch()->p;
   if ($realmente_guardo != null){
    return true;
  }
}
return false;
}

/* Almacena la respuesta de una pregunta */
public static function guardar_pregunta($user_id, $id_curso, $cual_pregunta, $la_respuesta){
  $database = DatabaseFactory::getFactory()->getConnection();		
  switch($id_curso){
   case 1:		
   $sql = "UPDATE cintroduccion SET p".$cual_pregunta."=:valor_pregunta WHERE user_id =:user_id";
   break;
 }		

 $query = $database->prepare($sql);
 $query->execute(array(':valor_pregunta' => $la_respuesta, ':user_id'=> $user_id));
 $count =  $query->rowCount();

 if ($count == 1) {
  return true;
}
return false;
}

/* Verifica si un usuario ya realizo el diagnostico de un curso*/
public static function aprobo_diagnostico($user_id, $id_curso){
  $database = DatabaseFactory::getFactory()->getConnection();
  switch($id_curso){
   case 1:		
   $sql = "SELECT diagnostico FROM cintroduccion WHERE user_id = :user_id LIMIT 1";
   break;
 }	
 $query = $database->prepare($sql);
 $query->execute(array(':user_id' => $user_id));

 if ($query->rowCount() == 0) {
  return false;
}else{
  $realmente_aprobo = $query->fetch()-> diagnostico;

  if($realmente_aprobo == "" or $realmente_aprobo == '0'){
    return false;
  }else {
    return true;
  }
}
}

/* Almacena el diagnostico de un usuario en el curso pertinente */
public static function guardar_diagnostico($user_id, $id_curso){
  $ya_guardo_progreso = self::aprobo_diagnostico($user_id,$id_curso);
  $diagnostico = Request::post('diagnostico');
  if (!$ya_guardo_progreso) {
    $database = DatabaseFactory::getFactory()->getConnection();			
    switch($id_curso){
      case 1:		
      $sql = "INSERT INTO cintroduccion (user_id, diagnostico) VALUES (:user_id, :valor)";
      break;
    }	
    $query = $database->prepare($sql);
    $query->execute(array(':user_id'=> $user_id, ':valor' => $diagnostico));

    if ($query->rowCount() == 1) {
      return $diagnostico;
    }
  }
}

/* retorna la respuesta de una pregunta */
public static function obtener_respuesta($user_id, $id_curso, $cual_pregunta){		
  $database = DatabaseFactory::getFactory()->getConnection();

  switch($id_curso){
   case 1:
   $sql = "SELECT p".$cual_pregunta." as p FROM cintroduccion WHERE user_id = :user_id LIMIT 1";
   break;
 }
 $query = $database->prepare($sql);
 $query->execute(array(':user_id' => $user_id));

 if ($query->rowCount() == 1) {
   $realmente_guardo = $query->fetch()->p;
   if ($realmente_guardo != null){
    return $realmente_guardo;
  }
}
return "";
}

/* cuenta cuantos estudiantes están matriculados en un curso*/
public static function cuantos_matriculados($id_curso){
  $database = DatabaseFactory::getFactory()->getConnection();
  switch($id_curso){
   case 1:
   $sql = "SELECT COUNT(*) FROM cintroduccion";
   break;
 }
 $query = $database->prepare($sql);
 $query->execute();

 if ($query->rowCount() == 0) {
  return '0';
}else {
  $cuantos_son = current($query->fetch());

  if($cuantos_son == "" or $cuantos_son == '0'){
    return '0';
  }else {
    return $cuantos_son;
  }
}
}

/* Almacena el porcentaje obtenido en la evaluacion final de un usuario en el curso pertinente */
public static function guardar_evaluacion_final($user_id, $id_curso){
  $evaluacionfinal = Request::post('evaluacionfinal');

  $database = DatabaseFactory::getFactory()->getConnection();			
  switch($id_curso){
   case 1:		
   $sql = "UPDATE cintroduccion SET evaluacionfinal=:valor_pregunta WHERE user_id =:user_id";
   break;
 }
 $query = $database->prepare($sql);
 $query->execute(array(':user_id'=> $user_id, ':valor_pregunta' => $evaluacionfinal));

 if ($query->rowCount() == 1) {
   return true;
 }        
}

/* Verifica si un usuario ya realizo el diagnostico de un curso*/
public static function realizo_evaluacion_final($user_id, $id_curso){
  $database = DatabaseFactory::getFactory()->getConnection();
  switch($id_curso){
   case 1:		
   $sql = "SELECT evaluacionfinal FROM cintroduccion WHERE user_id = :user_id LIMIT 1";
   break;
 }	
 $query = $database->prepare($sql);
 $query->execute(array(':user_id' => $user_id));

 if ($query->rowCount() == 0) {
  return false;
}else{
  $evaluacionfinal = $query->fetch()->evaluacionfinal;

  if($evaluacionfinal == "" or $evaluacionfinal == '0'){
    return false;
  }else {
    return true;
  }
}
}

public static function saveProgress($lesson_id){
  $database = DatabaseFactory::getFactory()->getConnection();
  $sql = "INSERT INTO lesson_users (lesson_id, user_id) VALUES (:lesson_id, :user_id)";
  $query = $database->prepare($sql);
  $query->execute(array( ':lesson_id' => $lesson_id,':user_id'=> Session::get('user_id')));
  if ($query->rowCount() == 1) {
    return true;
  }
  return false;
}

public static function getProgress($learning_id){
  $database = DatabaseFactory::getFactory()->getConnection();
  $sql = "SELECT lesson_users.user_id FROM lesson_users
  INNER JOIN  lesson ON (lesson_users.lesson_id = lesson.lesson_id)
  WHERE lesson.learning_id = :learning_id AND lesson_users.user_id = :user_id";
  $query = $database->prepare($sql);
  $query->execute(array(':learning_id' => $learning_id, ':user_id' => Session::get("user_id")));
  return $query->rowCount();
}

public static function getProgressAll($user_id){
  $database = DatabaseFactory::getFactory()->getConnection();
  $sql = "SELECT user_id FROM lesson_users
  WHERE user_id = :user_id";
  $query = $database->prepare($sql);
  $query->execute(array(':user_id' => $user_id));
  return $query->rowCount();
}

public static function getProgressLearning($user_id){
    $database = DatabaseFactory::getFactory()->getConnection();
  $sql = "SELECT lesson_id FROM lesson_users
  WHERE user_id = :user_id";
  $query = $database->prepare($sql);
  $query->execute(array(':user_id' => $user_id));
  return $query->fetchAll();
}

public static function getAllLesson($learning_user){
  $database = DatabaseFactory::getFactory()->getConnection();
  $sql = "SELECT lesson_id, lesson_title, lesson.learning_id FROM lesson
  INNER JOIN learning ON (lesson.learning_id = learning.learning_id)
  WHERE learning.learning_user = :learning_user";
  $query = $database->prepare($sql);
  $query->execute(array('learning_user' => $learning_user));
  return $query->fetchAll();
}


public static function getLastLesson($learning_id){
 $database = DatabaseFactory::getFactory()->getConnection();
 $sql = "SELECT lesson_users.lesson_id FROM lesson_users
 INNER JOIN  lesson ON (lesson_users.lesson_id = lesson.lesson_id) 
 WHERE lesson.learning_id = :learning_id AND lesson_users.user_id = :user_id ORDER BY lesson_users.lesson_id DESC LIMIT 1 ";
 $query = $database->prepare($sql);
 $query->execute(array(':learning_id' => $learning_id, ':user_id' => Session::get("user_id")));

 if ($query->rowCount() == 1) {
  return $query->fetch()->lesson_id;
  }
  return 0;
}
public static function getfirstLesson($learning_id){
 $database = DatabaseFactory::getFactory()->getConnection();
 $sql = "SELECT lesson_id FROM lesson
 WHERE learning_id = :learning_id ORDER BY lesson_id ASC LIMIT 1 ";
 $query = $database->prepare($sql);
 $query->execute(array(':learning_id' => $learning_id));

 if ($query->rowCount() == 1) {
  return $query->fetch()->lesson_id;
  }
  return 0;
}

public static function getCountLesson($learning_id){
 $database = DatabaseFactory::getFactory()->getConnection();
 $sql = "SELECT lesson_id FROM lesson
 WHERE learning_id = :learning_id ";
 $query = $database->prepare($sql);
 $query->execute(array(':learning_id' => $learning_id));

  return $query->rowCount();
}

public static function getCountLessonAll($learning_user){
 $database = DatabaseFactory::getFactory()->getConnection();
 $sql = "SELECT lesson_id FROM lesson
 INNER JOIN learning ON (lesson.learning_id = learning.learning_id)
  WHERE learning.learning_user = :learning_user";
 ;
 $query = $database->prepare($sql);
 $query->execute(array('learning_user' => $learning_user));

  return $query->rowCount();
}

public static function getLessonCheck(){
  $database = DatabaseFactory::getFactory()->getConnection();
 $sql = "SELECT lesson_id FROM lesson_users
 WHERE user_id = :user_id ";
 $query = $database->prepare($sql);
 $query->execute(array(':user_id' => Session::get("user_id")));
  return $query->fetchAll(); 
}

public static function getLessonCheckID($user_id){
  $database = DatabaseFactory::getFactory()->getConnection();
 $sql = "SELECT lesson_id FROM lesson_users
 WHERE user_id = :user_id ";
 $query = $database->prepare($sql);
 $query->execute(array(':user_id' => $user_id));
  return $query->fetchAll(); 
}

public static function getlessonsApp($learning_id){
  $database = DatabaseFactory::getFactory()->getConnection();
  $sql = "SELECT * FROM lesson WHERE learning_id = :learning_id";
  $query = $database->prepare($sql);
  $query->execute(array(':learning_id' => $learning_id));
 
  if ($query->rowCount() > 0) {
    return $query->fetchAll();
  }
   return 0;
}

}