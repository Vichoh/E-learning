<?php

/**
 * UserController
 * Controls everything that is user-related
 */
class UserController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class.
     */
    public function __construct()
    {
        parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions.
        Auth::checkAuthentication();
    }

    /**
     * Show user's PRIVATE profile
     */
    public function index()
    {
        $this->View->render('user/index', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'first_name' => Session::get('first_name'),
            'last_name' => Session::get('last_name'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type')
        ));
    }

    public function usermobile(){
        $user_id = Session::get('user_id');
        $userdata = UserModel::getPublicProfileOfUser($user_id);
        $user_sent = 
        $respuesta = new stdClass();
        $respuesta->user_name = Session::get('user_name');
        $respuesta->email = Session::get('user_email');
        $respuesta->first_name = $userdata->first_name;
        $respuesta->last_name = $userdata->last_name;
        $respuesta->imagew = Session::get('user_gravatar_image_url');
        $respuesta->userf = Session::get('user_avatar_file');
        $respuesta->user_sentence = UserModel::getUserSentence($user_id);
        $this->View->renderJSON($respuesta);
    }
    /**
     * Show edit-my-username page
     */
    public function editUsername()
    {
        $this->View->render('user/editUsername');
    }

    /**
     * Edit user name (perform the real action after form has been submitted)
     */
    public function editUsername_action()
    {
        // check if csrf token is valid
        if (!Csrf::isTokenValid()) {
            LoginModel::logout();
            Redirect::home();
            exit();
        }

        UserModel::editUserName(Request::post('user_name'));
        Redirect::to('user/editUsername');
    }

    /**
     * Show edit-my-user-email page
     */
    public function editUserEmail()
    {
        $this->View->render('user/editUserEmail');
    }

    /**
     * Edit user email (perform the real action after form has been submitted)
     */
    // make this POST
    public function editUserEmail_action()
    {
        UserModel::editUserEmail(Request::post('user_email'));
        Redirect::to('profile/showProfile/'.Session::get('user_id'));
    }

    /**
     * Edit user firstName (perform the real action after form has been submitted)
     */
    // make this POST
    public function editUserFirstName_action()
    {
        UserModel::editFirstName(Request::post('new_first_name'));
        Redirect::to('profile/showProfile/'.Session::get('user_id'));
    }
    /**
     * Edit user LastName (perform the real action after form has been submitted)
     */
    // make this POST
    public function editUserLastName_action()
    {
        UserModel::editLastName(Request::post('new_last_name'));
        Redirect::to('profile/showProfile/'.Session::get('user_id'));
    }
     /**
     * Edit user sectence (perform the real action after form has been submitted)
     */
    // make this POST
    public function editUserSentence_action()
    {
        UserModel::editSentence(Request::post('new_frase'));
        Redirect::to('profile/showProfile/'.Session::get('user_id'));
    }
    /**
     * Edit avatar
     */
    public function editAvatar()
    {
        $this->View->render('user/editAvatar', array(
        'avatar_file_path' => AvatarModel::getPublicUserAvatarFilePathByUserId(Session::get('user_id')),
        'admin' => Session::get("user_id"),
                
                'user' => UserModel::getPublicProfileOfUser(Session::get('user_id'))
        ));
    }

    /**
     * Perform the upload of the avatar
     * POST-request
     */
    public function uploadAvatar_action()
    {
        AvatarModel::createAvatar();
        Redirect::to('profile/showProfile/'.Session::get('user_id'));
    }
    public function uploadAvatar_action_mobile()
    {
        AvatarModel::createAvatar();
    }

    /**
     * Delete the current user's avatar
     */
    public function deleteAvatar_action()
    {
        AvatarModel::deleteAvatar(Session::get("user_id"));
        Redirect::to('profile/showProfile/'.Session::get('user_id'));
    }

    /**
     * Show the change-account-type page
     */
    public function changeUserRole()
    {
        $this->View->render('user/changeUserRole');
    }

    /**
     * Perform the account-type changing
     * POST-request
     */
    public function changeUserRole_action()
    {
        if (Request::post('user_account_upgrade')) {
            // "2" is quick & dirty account type 2, something like "premium user" maybe. you got the idea :)
            UserRoleModel::changeUserRole(2);
        }

        if (Request::post('user_account_downgrade')) {
            // "1" is quick & dirty account type 1, something like "basic user" maybe.
            UserRoleModel::changeUserRole(1);
        }

        Redirect::to('user/changeUserRole');
    }

    /**
     * Password Change Page
     */
    public function changePassword()
    {
        $this->View->render('user/changePassword');
    }

    /**
     * Password Change Action
     * Submit form, if retured positive redirect to index, otherwise show the changePassword page again
     */
    public function changePassword_action()
    {
        $result = PasswordResetModel::changePassword(
            Session::get('user_name'), Request::post('user_password_current'),
            Request::post('user_password_new'), Request::post('user_password_repeat')
        );
        Redirect::to('profile/showProfile/'.Session::get('user_id'));
    }

    public function changePassword_action_mobile()
    {
        $respuesta = new stdClass();            
        $respuesta->value = PasswordResetModel::changePassword(
            Session::get('user_name'), Request::post('user_password_current'),
            Request::post('user_password_new'), Request::post('user_password_repeat')
        );

        $this->View->renderJSON($respuesta);
    }
    /**
     * Search user
     * Submit form, if retured positive redirect to Adduser, otherwise show the changePassword page again
     */
    public function searchUser($dataSearch, $id_group)
    {
        $this->View->renderJSON(UserModel::getUserDataByUserNameOrEmail($dataSearch));
    }

     public function searchUserLvlTwo($dataSearch)
    {
        $this->View->renderJSON(UserModel::getUserLvlTwoDataByUserNameOrEmail($dataSearch));
    }

    public function  edit_perfil_mobile(){

        $obj = json_decode(Request::post('data'),true);

        $respuesta = new stdClass();

        if ($obj['user'] != ""){
            $respuesta->user = UserModel::editUserName($obj['user']);
        }
        else{
            $respuesta->result = false;
            $respuesta->user = false;
        }

        if ($obj['new_first_name'] != ""){
            $respuesta->new_first_name = UserModel::editFirstName($obj['new_first_name']);
        }
        else{
            $respuesta->result = false;
            $respuesta->new_first_name = false;
        }

        if ($obj['new_last_name'] != ""){
            $respuesta->new_last_name = UserModel::editLastName($obj['new_last_name']);
        }
        else{
            $respuesta->result = false;
            $respuesta->new_last_name = false;
        }

        if ($obj['email'] != ""){
            $respuesta->email = UserModel::editUserEmail($obj['email']);
        }
        else{
            $respuesta->result = false;
            $respuesta->email = false;
        }
        $respuesta->user = UserModel::editSentence($obj['frase']);
        $this->View->renderJSON($respuesta);
        
    }

     public function getEstadisticas () {
        $respuesta = UserModel::getEstadisticas(Session::get('user_id'));
              $this->View->renderJSON($respuesta);
    }

     public function prueba () {
        $respuesta = UserModel::getAllPointUsersDesc();
              $this->View->renderJSON($respuesta);
    }
}
