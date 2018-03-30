<?php

/**
 * LoginController
 * Controls everything that is authentication-related
 */
class LoginController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class. The parent::__construct thing is necessary to
     * put checkAuthentication in here to make an entire controller only usable for logged-in users (for sure not
     * needed in the LoginController).
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index, default action (shows the login form), when you do login/index
     */
    public function index()
    {
        // if user is logged in redirect to main-page, if not show the view
        if (LoginModel::isUserLoggedIn()) {
            if (session::get("user_account_type") == 7){
                Redirect::to("admin");
            }
            else{
                Redirect::home();
            }
        } else {

            $data = array('redirect' => Request::get('redirect') ? Request::get('redirect') : NULL);
            $this->View->render('login/index', $data);
        }
    }

    /**
     * The login action, when you do login/login
     */
    public function login()
    {
        // check if csrf token is valid
        if (!Csrf::isTokenValid()) {
            LoginModel::logout();
            Redirect::home();
            exit();
        }

        // perform the login method, put result (true or false) into $login_successful
        $login_successful = LoginModel::login(
            Request::post('user_name'), Request::post('user_password'), Request::post('set_remember_me_cookie')
        );

        // check login status: if true, then redirect user to user/index, if false, then to login form again
        if ($login_successful) {
            $user = UserModel::getUserDataByUsername(Session::get('user_name'));
            $tutorial = $user->user_tutorial;
            if($tutorial == 1){
                if (Request::post('redirect')) {
                    Redirect::toPreviousViewedPageAfterLogin(ltrim(urldecode(Request::post('redirect')), '/'));
                } else {
                    if (session::get("user_account_type") == 7){
                        Redirect::to("admin");
                    }
                    else{
                        Redirect::to('learning');
                    }
                }
            }else{
                Redirect::to('tour');
            }
            
        } else {

            $data = array('redirect' => Request::get('redirect') ? Request::get('redirect') : NULL);            
            $this->View->render('login/index', $data);

        }
    }

    public function loginapp()
    {
        // check if csrf token is valid
        $token = Csrf::isTokenValid();
        if (!$token) {
            LoginModel::logout();
            $this->View->renderJSON('{"value":false}');
            exit();
        }
        else{
            // perform the login method, put result (true or false) into $login_successful
            $login_successful = LoginModel::login(
                Request::post('user_name'), Request::post('user_password'), Request::post('set_remember_me_cookie')
            );
            
            // check login status: if true, then redirect user to user/index, if false, then to login form again
            if ($login_successful) {
                $user = UserModel::getUserDataByUsername(Session::get('user_name'));
                $tutorial = $user->user_tutorial;
                if($tutorial == 1){
                    $this->View->renderJSON('{"value":true, "tuto": true}');
                }else{
                    $this->View->renderJSON('{"value":true, "tuto": false}');
                }                
            } else {
                $this->View->renderJSON('{"value":false}');

            }
        }
    }

    public function csrf(){
        $this->View->renderJSON(Csrf::makeToken());
    }

    public function islogin(){
        $this->View->renderJSON(LoginModel::isUserLoggedIn());
    }

    /**
     * The logout action
     * Perform logout, redirect user to main-page
     */
    public function logout()
    {
        LoginModel::logout();
        Redirect::home();
        exit();
    }

    /**
     * Login with cookie
     */
    public function loginWithCookie()
    {
        // run the loginWithCookie() method in the login-model, put the result in $login_successful (true or false)
         $login_successful = LoginModel::loginWithCookie(Request::cookie('remember_me'));

        // if login successful, redirect to dashboard/index ...
        if ($login_successful) {
            Redirect::to('tour/index');
        } else {
            // if not, delete cookie (outdated? attack?) and route user to login form to prevent infinite login loops
            LoginModel::deleteCookie();
            Redirect::to('login/index');
        }
    }

    /**
     * Show the request-password-reset page
     */
    public function requestPasswordReset()
    {
        if (LoginModel::isUserLoggedIn()) {
            Redirect::to('profile/showProfile/'.Session::get('user_id'));
        } else {
            $this->View->render('login/requestPasswordReset');
        }
    }

    /**
     * The request-password-reset action
     * POST-request after form submit
     */
    public function requestPasswordReset_action()
    {
        PasswordResetModel::requestPasswordReset(Request::post('user_name_or_email'));
        Redirect::to('login/index');
    }
    public function requestPasswordReset_action_mobile()
    {
        PasswordResetModel::requestPasswordReset(Request::post('user_name_or_email'));
        $this->View->renderJSON('{"value":true}');
    }

    /**
     * Verify the verification token of that user (to show the user the password editing view or not)
     * @param string $user_name username
     * @param string $verification_code password reset verification token
     */
    public function verifyPasswordReset($user_name, $verification_code)
    {
        // check if this the provided verification code fits the user's verification code
        if (PasswordResetModel::verifyPasswordReset($user_name, $verification_code)) {
            // pass URL-provided variable to view to display them
            $this->View->renderWithoutHeaderAndFooter('login/resetPassword', array(
                'user_name' => $user_name,
                'user_password_reset_hash' => $verification_code
            ));
        } else {
            Redirect::to('login/index');
        }
    }

    /**
     * Set the new password
     * Please note that this happens while the user is not logged in. The user identifies via the data provided by the
     * password reset link from the email, automatically filled into the <form> fields. See verifyPasswordReset()
     * for more. Then (regardless of result) route user to index page (user will get success/error via feedback message)
     * POST request !
     * TODO this is an _action
     */
    public function setNewPassword()
    {
        PasswordResetModel::setNewPassword(
            Request::post('user_name'), Request::post('user_password_reset_hash'),
            Request::post('user_password_new'), Request::post('user_password_repeat')
        );
        Redirect::to('login/index');
    }
    public function setNewPasswordMobile()
    {
        PasswordResetModel::setNewPassword(
            Request::post('user_name'), Request::post('user_password_reset_hash'),
            Request::post('user_password_new'), Request::post('user_password_repeat')
        );
        Redirect::to('login/index');
    }
}
