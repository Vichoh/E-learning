<?php

/**
 * RegisterController
 * Register new user
 */
class RegisterController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class. The parent::__construct thing is necessary to
     * put checkAuthentication in here to make an entire controller only usable for logged-in users (for sure not
     * needed in the RegisterController).
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Register page
     * Show the register form, but redirect to main-page if user is already logged-in
     */
    public function index()
    {
        if (LoginModel::isUserLoggedIn()) {
            Redirect::home();
        } else {
            $this->View->render('register/index');
        }
    }

    /**
     * Register page action
     * POST-request after form submit
     */
    public function register_action()
    {
        $registration_successful = RegistrationModel::registerNewUser(false);

        if ($registration_successful) {
            Redirect::to('login/index');
        } else {
            Redirect::to('register/index');
        }
    }

    public function register_action_mobile()
    {
        $registration_successful = RegistrationModel::registerNewUser(true);
        $respuesta = new stdClass();

        if ($registration_successful) {
            $respuesta->value = true;
        } else {
            $respuesta->value = false;
        }

        $this->View->renderJSON($respuesta);
    }


    /**
     * Verify user after activation mail link opened
     * @param int $user_id user's id
     * @param string $user_activation_verification_code user's verification token
     */
    public function verify($user_id, $user_activation_verification_code)
    {
        if (isset($user_id) && isset($user_activation_verification_code)) {
            RegistrationModel::verifyNewUser($user_id, $user_activation_verification_code);
            Redirect::to('login/index');
        } else {
            Redirect::to('login/index');
        }
    }

    public function verify_mobile($user_email, $user_activation_verification_code)
    {

        $respuesta = new stdClass();
       
        if (isset($user_email) && isset($user_activation_verification_code)) {
            
            $respuesta->value = RegistrationModel::verifyNewUserMobile($user_email, $user_activation_verification_code);;
        } else {
            $respuesta->value = false;
        }

        $this->View->renderJSON($respuesta);
    }

    public function verifyGift($gift)
    {

        $gift =  strip_tags($gift);

        $respuesta = new stdClass();
        
        $codigo = LicenciaModel::getLicencePerKey($gift);
            
        if ($codigo){
            $respuesta->return = true;
            $this->View->renderJSON($respuesta); 
        }
        else{
            $respuesta->return = false;
            $respuesta->mensaje = Text::get('FEEDBACK_USER_REGISTER_CODE_FAILED');
            $this->View->renderJSON($respuesta); 
        }
    }
}
