<?php

/**
 * LoginController
 * Controls everything that is authentication-related
 */
class TourController extends Controller
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
            $this->View->renderWithoutHeaderAndFooter('tour/index' ,array(
                                                    'user_id' => Session::get('user_id')
            ));
    }

    public function match()
    {
            $data = array('redirect' => Request::get('redirect') ? Request::get('redirect') : NULL);

            $this->View->renderWithoutHeaderAndFooter('tour/match', $data);
    }

    public function endtutorial(){
        $flag = UserModel::endtutorial(Session::get('user_id'));
        if($flag){
            Redirect::to('dashboard');
        }else{
            Redirect::to('tour');
        }
    } 
    public function endtutorialapp(){
        $flag = UserModel::endtutorial(Session::get('user_id'));
        if($flag){
            $this->View->renderJSON('{"value":true}');
        }else{
            $this->View->renderJSON('{"value":false}');
        }
    }   
}
