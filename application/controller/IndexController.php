<?php

class IndexController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    public function index()
    {
        $this->View->renderWithoutHeaderAndFooter('index/index');
    }

    public function company()
    {
        $this->View->renderWithoutHeaderAndFooter('index/company');
    }

    public function functions()
    {
        $this->View->renderWithoutHeaderAndFooter('index/functions');
    }

    public function prices()
    {
        $this->View->renderWithoutHeaderAndFooter('index/prices');
    }

    public function contact()
    {
        $this->View->renderWithoutHeaderAndFooter('index/contact');
    }

    public function faq()
    {
        $this->View->renderWithoutHeaderAndFooter('index/faq');
    }
}
