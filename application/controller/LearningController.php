<?php

class LearningController extends Controller{

    public function __construct(){
        Auth::checkAuthentication();
        parent::__construct();
    }

    public function index(){

        $this->View->render('learning/index',array(
            'user_name' => UserModel::getUserRealNameById(Session::get('user_id')),
            'user_id' => Session::get('user_id'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            //'user_level' => Session::get("user_account_type"),
            'learning' => LearningModel::getAllPublicLearning(Session::get("user_account_type"))

        ));
    }

    public function getAllLearningApp(){
        $this->View->renderJSON(LearningModel::getAllPublicLearning(Session::get("user_account_type")));        
    }

    public function curso($learning_id){
        $this->View->render('learning/curso', array(
            'learningAll' => LearningModel::getLearning($learning_id),
            'learning' => LessonModel::getAllLearningLessonWereLearning($learning_id),
            'matriculado' => LearningModel::getMatriculado($learning_id),
            'unidad' => LessonModel::getUnidad($learning_id),
            'unidad_lesson' => LessonModel::getUnidadLesson(),
            'progress' => LearningModel::getLastLesson($learning_id),
            'progreso' => LearningModel::getProgress($learning_id),
            'cant' => LearningModel::getCountLesson($learning_id),
            'firstLesson' => LearningModel::getfirstLesson($learning_id),
            'listo' => LearningModel::getLessonCheck(),
            'learninglearning' => $learning_id
        ));
    }

    public function cursoapp($learning_id){
        $respuesta = new stdClass();
        $respuesta->lesson = LearningModel::getlessonsApp($learning_id);
        $respuesta->unidad = LessonModel::getUnidad($learning_id);
        $respuesta->unidad_lesson = LessonModel::getUnidadLesson();
        $respuesta->progreso = LearningModel::getProgress($learning_id);
        $respuesta->status = LearningModel::getMatriculado($learning_id);
        $respuesta->listo = LearningModel::getLessonCheck();
        $respuesta->lastless = LearningModel::getLastLesson($learning_id);
        $this->View->renderJSON($respuesta);
    }
    
    public function matricular(){
        
        LearningModel::matricularLearning(Request::post('learning_id'));
        //redireccion a curso
        Redirect::to('learning/curso/'.Request::post('learning_id'));      
    }

    public function matricularApp($learning_id){
        LearningModel::matricularLearning($learning_id);
        $this->View->renderJSON('{"value": "success"}');
    }
    public function leccion($lesson_id, $learning_id){ 
        $lastLesson = LearningModel::getLastLesson($learning_id);

        if ($lastLesson<$lesson_id ) {
            LearningModel::saveProgress($lesson_id);
        }
        $this->View->render('learning/leccion', array(
            'learninglesson' => LessonModel::getLearningLesson($lesson_id),
            'learningAll' => LearningModel::getLearning($learning_id),
            'progreso' => LearningModel::getProgress($learning_id),
            'nextlesson' => LessonModel::getNextLesson($lesson_id, $learning_id)
        ));
    }

    public function saveprogressApp($lesson_id, $learning_id){
        $lastLesson = LearningModel::getLastLesson($learning_id);
        if ($lastLesson<$lesson_id ) {
            LearningModel::saveProgress($lesson_id);
        }
        $respuesta = new stdClass();
        $respuesta->lastlesson = $lastLesson;
        $this->View->renderJSON($respuesta);
    }
    

    public function nextlesson($lesson_id, $learning_id){
        $lastLesson = LearningModel::getLastLesson($learning_id);
    if ($lastLesson < $lesson_id ) {
         LearningModel::saveProgress($lesson_id);
    }
      $this->View->render('learning/leccion', array(
        'learninglesson' => LearningLessonModel::getLearningLesson($lesson_id),
        'nextlesson' => LearningLessonModel::getNextLesson($lesson_id, $learning_id)
    ));
  }

  public function admin(){
    Auth::checkAdminAuthentication();
    $this->View->render('learning/admin',array(
        'learning' => LearningModel::getAllLearning()
    ));
}

    //Funciones CRUD para los cursos ===========/////////////////////////
public function create(){
    LearningModel::createLearning(Request::post('learning_title'),Request::post('learning_description'), Request::post('learning_about'), Request::post('categoryRadios'), Request::post('levelRadios'),Request::post('userRadios'), implode(";", (Request::post('field_name'))), Request::post('learning_author'), Request::post('learning_author_des'), Request::post('learning_color'),Request::post('IconRadios'));
    Redirect::to('learning/admin');
}

public function edit($learning_id){
    $this->View->render('learning/edit', array(
        'learning' => LearningModel::getLearning($learning_id)
    ));
}

public function editSave(){
    LearningModel::updateLearning(Request::post('learning_id'), Request::post('learning_title'), Request::post('learning_description'), Request::post('learning_about'), implode(";", (Request::post('field_name'))), Request::post('categoryRadios'), Request::post('levelRadios'),Request::post('userRadios'), Request::post('learning_author'), Request::post('learning_author_des'), Request::post('learning_color'),Request::post('IconRadios'));
    Redirect::to('learning/admin');
}

public function delete($learning_id){
    LearningModel::deleteLearning($learning_id);
    Redirect::to('learning/admin');
}

public function progreso($user_id){
    $this->View->render('learning/progreso', array(
        'user' => UserModel::getPublicProfileOfUser($user_id),
        'learning' => LearningModel::getAllPublicLearning(1),
        'progress' => LearningModel::getProgressAll($user_id),
        'progressLearning' => LearningModel::getProgressLearning($user_id),
        'cant' => LearningModel::getCountLessonAll(1),
        'lesson' => LearningModel::getAllLesson(1),
        'unidad' => LessonModel::getAllUnidad(),
        'unidad_lesson' => LessonModel::getUnidadLesson(),
        'listo' => LearningModel::getLessonCheckID($user_id)

    ));
}


/************************************** Introducción a CEOSIM (1) **************************************/

function introduccion_ceosim_matricular(){
  LearningModel::matricular(Session::get('user_id'), '1');
  Redirect::to("learning/introduccion_ceosim");         
}

function introduccion_ceosim_guardar_diagnostico(){
    LearningModel::guardar_diagnostico(Session::get('user_id'), '1');
    Redirect::to("learning/introduccion_ceosim");         
}

function introduccion_ceosim_pregunta(){
        LearningModel::guardar_progreso(Session::get('user_id'),'1', '6'); // Cambiar segundo valos corresponde a puntaje de la respuesta
        LearningModel::guardar_pregunta(Session::get('user_id'),'1',Request::post('npreg'),Request::post('resp'));
    }
    
    function introduccion_ceosim_diagnostico(){

        $esta_matriculado = LearningModel::esta_matriculado(Session::get('user_id'),'1');
        
        if ($esta_matriculado == false) {
            $realizo_diagnostico = LearningModel::aprobo_diagnostico(Session::get('user_id'), '1');

            if ($realizo_diagnostico == FALSE) {

                $this->View->render('learning/introduccion_ceosim_diagnostico', array(
                    'user_name' => Session::get('user_name'),
                    'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
                    'user_avatar_file' => Session::get('user_avatar_file'),
                    'total_matriculados' => LearningModel::cuantos_matriculados('1'),
                    'esta_matriculado' => $esta_matriculado,
                ));
            }else{
                Redirect::to('learning/introduccion_ceosim_en_chile');
            }
        }else{
            Redirect::to('learning/introduccion_ceosim_en_chile');
        }
    }

    function introduccion_ceosim(){

        $realizo_diagnostico = LearningModel::aprobo_diagnostico(Session::get('user_id'),'1');
        $esta_matriculado = LearningModel::esta_matriculado(Session::get('user_id'),'1');
        
        if ($esta_matriculado == false) {
            $progreso_anterior = 0;
        }else{
            $progreso_anterior = LearningModel::mi_progreso(Session::get('user_id'), '1');
            if ($progreso_anterior == "") {
                $progreso_anterior = 0;
            }
        }
        $this->View->render('learning/introduccion_ceosim', array(
            'user_name' => Session::get('user_name'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'esta_matriculado' => $esta_matriculado,
            'progreso_anterior' =>$progreso_anterior,
            'realizo_diagnostico' =>$realizo_diagnostico,
            'total_matriculados' => LearningModel::cuantos_matriculados('1'),
            'p1'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '1'),
            'p2'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '2'),
            'p3'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '3'),
            'p4'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '4'),
            'p5'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '5'),
            'p6'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '6'),
            'p7'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '7'),
            'p8'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '8'),
            'p9'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '9'),
            'p10'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '10'),
            'p11'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '11'),
            'p12'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '12'),
            'p13'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '13'),
            'p14'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '14'),
            'p15'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '15'),
        ));
    }  

    function introduccion_ceosim_modulo_1(){

        $esta_matriculado = LearningModel::esta_matriculado(Session::get('user_id'),'1');
        
        if ($esta_matriculado == false) {
            Redirect::to('learning/introduccion_ceosim'); 
        }else{
            $progreso_anterior = LearningModel::mi_progreso(Session::get('user_id'), '1');
            if ($progreso_anterior == "") {
                $progreso_anterior = 0;
            }
            $this->View->render('learning/introduccion_ceosim_modulo_1', array(
                'user_name' => Session::get('user_name'),
                'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
                'user_avatar_file' => Session::get('user_avatar_file'),
                'esta_matriculado' => $esta_matriculado,
                'progreso_anterior' =>$progreso_anterior,
                'total_matriculados' => LearningModel::cuantos_matriculados('1'),
                'p1'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '1'),
                'p2'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '2'),
                'p3'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '3'),
                'p4'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '4'),
                'p5'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '5'),
                'p6'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '6'),
                'p7'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '7'),
                'p8'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '8'),
                'p9'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '9'),
                'p10'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '10'),
                'p11'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '11'),
                'p12'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '12'),
                'p13'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '13'),
                'p14'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '14'),
                'p15'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '15'),
                'resp2' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '2'),
                'resp3' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '3'),
                'resp4' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '4'),
            ));
        }
    }
    
    function introduccion_ceosim_modulo_2(){

        $esta_matriculado = LearningModel::esta_matriculado(Session::get('user_id'),'1');
        
        if ($esta_matriculado == false) {
            Redirect::to('learning/introduccion_ceosim'); 
        }else{
            $progreso_anterior = LearningModel::mi_progreso(Session::get('user_id'), '1');
            if ($progreso_anterior == "") {
                $progreso_anterior = 0;
            }
            $this->View->render('learning/introduccion_ceosim_modulo_2', array(
                'user_name' => Session::get('user_name'),
                'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
                'user_avatar_file' => Session::get('user_avatar_file'),
                'esta_matriculado' => $esta_matriculado,
                'progreso_anterior' =>$progreso_anterior,
                'total_matriculados' => LearningModel::cuantos_matriculados('1'),
                'p1'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '1'),
                'p2'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '2'),
                'p3'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '3'),
                'p4'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '4'),
                'p5'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '5'),
                'p6'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '6'),
                'p7'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '7'),
                'p8'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '8'),
                'p9'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '9'),
                'p10'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '10'),
                'p11'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '11'),
                'p12'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '12'),
                'p13'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '13'),
                'p14'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '14'),
                'p15'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '15'),
                'resp5' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '5'),
                'resp6' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '6'),
                'resp7' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '7'),
            ));
        }
    }
    
    function introduccion_ceosim_modulo_3(){

        $esta_matriculado = LearningModel::esta_matriculado(Session::get('user_id'),'1');
        
        if ($esta_matriculado == false) {
            Redirect::to('learning/introduccion_ceosim'); 
        }else{
            $progreso_anterior = LearningModel::mi_progreso(Session::get('user_id'), '1');
            if ($progreso_anterior == "") {
                $progreso_anterior = 0;
            }
            $this->View->render('learning/introduccion_ceosim_modulo_3', array(
                'user_name' => Session::get('user_name'),
                'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
                'user_avatar_file' => Session::get('user_avatar_file'),
                'esta_matriculado' => $esta_matriculado,
                'progreso_anterior' =>$progreso_anterior,
                'evaluacionfinal' =>LearningModel::realizo_evaluacion_final(Session::get('user_id'), '1'),
                'total_matriculados' => LearningModel::cuantos_matriculados('1'),
                'p1'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '1'),
                'p2'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '2'),
                'p3'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '3'),
                'p4'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '4'),
                'p5'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '5'),
                'p6'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '6'),
                'p7'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '7'),
                'p8'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '8'),
                'p9'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '9'),
                'p10'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '10'),
                'p11'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '11'),
                'p12'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '12'),
                'p13'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '13'),
                'p14'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '14'),
                'p15'=>LearningModel::guardo_pregunta(Session::get('user_id'), '1', '15'),
                'resp8' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '8'),
                'resp9' => LearningModel::obtener_respuesta(Session::get('user_id'), '1', '9'),
            ));
        }
    }

    function introduccion_ceosim_evaluacion_final(){

      $progreso = LearningModel::mi_progreso(Session::get('user_id'), '1');
      $evaluacionfinal = LearningModel::realizo_evaluacion_final(Session::get('user_id'), '1');
      $esta_matriculado = LearningModel::esta_matriculado(Session::get('user_id'),'1');

      if($progreso >= 100 && !$evaluacionfinal && $esta_matriculado){
         $this->View->render('learning/introduccion_ceosim_evaluacion_final', array(
            'user_name' => Session::get('user_name'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'total_matriculados' => LearningModel::cuantos_matriculados('1'),
        ));
     }else{
         Redirect::to('learning/introduccion_ceosim_leccion_3');
     }
 }

 function introduccion_ceosim_guardar_evaluacion_final(){

    LearningModel::guardar_evaluacion_final(Session::get('user_id'), '1');
    Redirect::home();        
}
}