<?php

/**
 * This controller shows an area that's only visible for logged in users (because of Auth::checkAuthentication(); in line 16)
 */
class DashboardController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // this entire controller should only be visible/usable by logged in users, so we put authentication-check here
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /dashboard/index in your app.
     */
    public function index()
    {

        $this->View->render('dashboard/index',array(
            'user_name' => UserModel::getUserRealNameById(Session::get('user_id')),
            //'user_name' => Session::get('user_name'),
            'user_id' => Session::get('user_id'),
            'user_sentence' => UserModel::getUserSentence(Session::get('user_id')),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_points' => MatchModel::sumPointForAllMatch(),
            'user_nmatch' => MatchModel::sumAllPlayMatch(),
            'user_level' => Session::get("user_account_type"),
            'groups' => GroupModel::getAllGroupsAndUsers(),
            'teams' => TeamModel::getAllTeamsInGroup(Session::get('user_id')),
            'teams_user' => TeamModel::detalleAllTeamsForUsers(),
            'users_team' => UserModel::getUserPerTeam(Request::get('team_id')),
            'estadisticas' => UserModel::getEstadisticas(Session::get('user_id')),
            'validacion' => LicenciaModel::estadoValidacionLicenciasUsuario()
        ));
    }

    public function prueba(){
        $this->View->renderJSON(TeamModel::detalleAllTeamsForUsers()); 
    }

    public function dashboardApp()
    {
        $matchsGame = MatchModel::getAllPlayMatch();
        $this->View->renderJSON($matchsGame);
    }

    public function estadisticas(){
        $this->View->renderJSON(UserModel::getEstadisticas(Session::get('user_id')));
    }   

}
