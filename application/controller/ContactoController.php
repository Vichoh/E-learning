<?php

class ContactoController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens when you move to /admin or /admin/index in your app.
     */

    public function index()
    {
        $this->View->renderWithoutHeaderAndFooter('contacto/index');
    }

    public function consulta()
    {
        $this->View->renderJSON(IndexModel::enviarMensaje());
    }
}
