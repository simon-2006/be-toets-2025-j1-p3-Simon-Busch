<?php

class Torens extends BaseController
{
    private $TorensModel;

    public function __construct()
    {
         $this->TorensModel = $this->model('TorensModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle smartphones op uit de database
        */
       $result = $this->TorensModel->getAllTorens();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Overzicht Torens',
            'Torens' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('Torens/index', $data); 
    }

}