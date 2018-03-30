<?php

/**
 * The note controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class LessonController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions. If all of your pages should only
        // be usable by logged-in users: Put this line into libs/Controller->__construct
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /LearningLesson/index in your app.
     * Gets all notes (of the user).
     */
    public function index($learning)
    {
        $this->View->render('lesson/index', array(
            'learninglesson' => LessonModel::getAllLearningLessonWereLearning($learning),
            'unidad' => LessonModel::getUnidad($learning),
            'learning' => $learning
        ));
    }

    /**
     * This method controls what happens when you move to /dashboard/create in your app.
     * Creates a new note. This is usually the target of form submit actions.
     * POST request.
     */
    public function create()
    {   
        $lesson_id = LessonModel::createLearningLesson(Request::post('lesson_title'),Request::post('lesson_about'), Request::post('lesson_text'), Request::post('lesson_video'), Request::post('videoRadios') , Request::post('lesson_autor'), Request::post('learning_id'));
        ;
        LessonModel::addLessonToUnidad(request::post('lesson_unidad'), $lesson_id );
        Redirect::to('lesson/index/'.Request::post('learning_id'));
    }

    public function unidad($learning){
        $this->View->render('lesson/unidad', array(
            'unidad' => LessonModel::getUnidad($learning),
            'learning' => $learning
        ));
    }
    public function createunidad(){
        if (LessonModel::createUnidad(Request::post('unidad_name'),Request::post('unidad_description'),Request::post('learning_id')) == true){
            Redirect::to('lesson/unidad/'.Request::post('learning_id'));
        }
        else{
            echo 'error benja';
        }
        
    }
    public function editUnidad($unidad_id, $learning_id){
        $this->View->render('lesson/unidadEdit', array(
            'unidad' => LessonModel::getOneUnidad($unidad_id),
            'learning' => $learning_id
        ));
    }

    public function editSaveUnidad(){
        LessonModel::updateUnidad(Request::post('unidad_id'), Request::post('unidad_name'), Request::post('unidad_description'));
        Redirect::to('lesson/unidad/'.Request::post('learning_id'));   
    }


    public function deleteUnidad($unidad_id, $learning_id)
    {
        LessonModel::deleteUnidad($unidad_id);
        Redirect::to('lesson/unidad/'.$learning_id);
    }




    /**
     * This method controls what happens when you move to /note/edit(/XX) in your app.
     * Shows the current content of the note and an editing form.
     * @param $note_id int id of the note
     */
    public function edit($lesson_id, $learning_id)
    {
        $this->View->render('lesson/edit', array(
            'learninglesson' => LessonModel::getLearningLesson($lesson_id),
            'unidad' => LessonModel::getUnidad($learning_id),
            'learning' => $learning_id
        ));
    }

    /**
     * This method controls what happens when you move to /note/editSave in your app.
     * Edits a note (performs the editing after form submit).
     * POST request.
     */
    public function editSave()
    {
        LessonModel::updateLearningLesson(Request::post('lesson_id'), Request::post('lesson_title'), Request::post('lesson_about'), Request::post('lesson_text'), Request::post('lesson_video'), Request::post('videoRadios'), Request::post('lesson_autor'), Request::post('learning_id'));
        LessonModel::UpDateLessonToUnidad(request::post('lesson_unidad'), Request::post('lesson_id'));
         Redirect::to('lesson/index/'.Request::post('learning_id'));
    }

    /**
     * This method controls what happens when you move to /note/delete(/XX) in your app.
     * Deletes a note. In a real application a deletion via GET/URL is not recommended, but for demo purposes it's
     * totally okay.
     * @param int $note_id id of the note
     */
    public function delete($lesson_id, $learning_id)
    {
        LessonModel::deleteLearningLesson($lesson_id);
        Redirect::to('lesson/index/'.$learning_id);
    }
}
