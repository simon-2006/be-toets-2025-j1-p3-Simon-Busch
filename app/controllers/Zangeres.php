<?php

class Zangeres extends BaseController
{
    private $ZangeresModel;

    public function __construct()
    {
         $this->ZangeresModel = $this->model('ZangeresModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle smartphones op uit de database
        */
       $result = $this->ZangeresModel->getAllZangeres();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Top 5 Rijkste Zangeressen',
            'Zangeres' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('Zangeres/index', $data); 
    }

}