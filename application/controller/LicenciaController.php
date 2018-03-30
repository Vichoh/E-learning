<?php

/**
 * The note controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class LicenciaController extends Controller
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
     * This method controls what happens when you move to /licencia/index in your app.
     * Gets all licencias (of the user).
     */
    public function index()
    {
        $this->View->render('licencia/index', array(
            'licencias' => LicenciaModel::getLicensesPerUser()
        ));
    }

    /**
     * This method controls what happens when you move to /dashboard/create in your app.
     * Creates a new note. This is usually the target of form submit actions.
     * POST request.
     */
    public function create()
    {
        LicenciaModel::createLicencia(Request::post('licencia_name'), Request::post('licencia_user'), Request::post('licencia_expiration'), Request::post('licence_observacion'));
        Redirect::to('licencia/createLicence');
    }

    /**
     * This method controls what happens when you move to /note/edit(/XX) in your app.
     * Shows the current content of the note and an editing form.
     * @param $note_id int id of the note
     */
    public function edit($licencia_id)
    {
        $this->View->render('licencia/edit', array(
            'licencia' => LicenciaModel::getLicencia($licencia_id)
        ));
    }

    /**
     * This method controls what happens when you move to /note/editSave in your app.
     * Edits a note (performs the editing after form submit).
     * POST request.
     */
    public function editSave()
    {
        LicenciaModel::updateLicencia(Request::post('licencia_id'), Request::post('licencia_name'), Request::post('licencia_key'), Request::post('licencia_user'), Request::post('licencia_expiration'), Request::post('licence_observacion'));
        Redirect::to('licencia');
    }

    /**
     * This method controls what happens when you move to /note/delete(/XX) in your app.
     * Deletes a note. In a real application a deletion via GET/URL is not recommended, but for demo purposes it's
     * totally okay.
     * @param int $note_id id of the note
     */
    public function delete($licencia_id)
    {
        LicenciaModel::deleteNote($licencia_id);
        Redirect::to('licencia');
    }

    public function createLicence_User(){
         $licence_id = LicenciaModel::createLicencia(Request::post('licencia_name'), Request::post('licencia_user'), Request::post('licencia_expiration'), Request::post('licence_observacion'));

         LicenciaModel::createLicence_Users($licence_id, Request::post('user_id'));

         Redirect::to('licencia');

    }

     public function getAllLicenciasUsers()
    {
        $this->View->render('licencia/index', array(
            'licencias' => LicenciaModel::getAllLicenciasUsers()
        ));
    }

    public function getAllLicencesByUserApp(){
        $this->View->renderJSON(LicenciaModel::getLicensesPerUser());
    }

    public function createLicence_UserPerKey(){

        $licence = LicenciaModel::getLicencePerKey(strip_tags(Request::post('licencia_key')));
        if (empty($licence) ) {
            Session::add('feedback_negative', 'CODIGO DE INVITACION INCORRECTO');
        }else if(!LicenciaModel::validationLicenceLimit(strip_tags($licence->licence_id))){
           Session::add('feedback_negative', 'LIMITE MAXIMO DE USUARIOS');
        }else if (LicenciaModel::validationOneUserPerLicence(strip_tags($licence->licence_id), Session::get('user_id'))) {
            Session::add('feedback_negative', 'SOLO PUEDES ESTAR UNA VEZ EN LA LICENCIA');
        }else{
           LicenciaModel::createLicence_Users($licence->licence_id, Session::get('user_id')); 
           Session::add('feedback_positive', 'LICENCIA APROBADA');
        }
        Redirect::to('licencia/activeLicence/'.Session::get('user_id'));
    }
    public function createLicence_UserPerKeyApp($licencia){

        $licence = LicenciaModel::getLicencePerKey(strip_tags($licencia));
        if (empty($licence) ) {
            $this->View->renderJSON('{"response": "0"}');
        }else if(!LicenciaModel::validationLicenceLimit(strip_tags($licence->licence_id))){
            $this->View->renderJSON('{"response": "1"}');
        }else if (LicenciaModel::validationOneUserPerLicence(strip_tags($licence->licence_id), Session::get('user_id'))) {
            $this->View->renderJSON('{"response": "2"}');
        }else{
           LicenciaModel::createLicence_Users($licence->licence_id, Session::get('user_id')); 

           $this->View->renderJSON('{"response": "7"}');

        }
    }

    public function countNLicenses($licence) {
        $respuesta = LicenciaModel::getUsers_idPerLicence_id($licence);
              $this->View->renderJSON($respuesta);
    }


    //vista para mostrar todos los usuarios de una licencia para el profesor
        public function showUsersTeacher()
    {
          $this->View->render('licencia/showAllUsers', array(
            'licencias' => LicenciaModel::getLicensesPerUser()
        ));
    }

    public function showUsersAdmin()
    {
          $this->View->render('licencia/showAllUsersAdmin', array(
            'licencias' => LicenciaModel::getAllLicencias()
        ));
    }

    //vista para crear administrador crear licencia 
    public function createLicence()
    {
          $this->View->render('licencia/createLicence', array(
            'licencias' => LicenciaModel::getAllLicencias()
        ));
    }


       //vista para crear administrador crear licencia 
    public function navLicence()
    {
          $this->View->render('licencia/licenceNav');
    }


    public function activeLicence()
    {
          $this->View->render('licencia/activateLicence');
    }

    public function getUsersLicence($licence_id)
    {
        $this->View->renderJSON(LicenciaModel::getUsersPerLicence_id($licence_id));
    }


    public function solicitudEliminacion()
    {
        LicenciaModel::solicitudEliminacion(Request::post('id'), Request::post('estado'));
        Redirect::to('licencia/showUsersTeacher');
    }

        /**
     * This method controls what happens when you move to /licencia/index in your app.
     * Gets all licencias (of the user).
     */
    public function getLicenceUserDelete()
    {
        $this->View->render('licencia/removedRequest', array(
            'licencias' => LicenciaModel::getLicenceUserDelete()
        ));
    }


    public function deleteUserFromLicence($licencia_id)
    {
        LicenciaModel::deleteUserFromLicence($licencia_id);
        Redirect::to('licencia/getLicenceUserDelete');
    }


}
