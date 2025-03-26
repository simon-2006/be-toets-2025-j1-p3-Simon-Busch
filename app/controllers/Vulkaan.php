<?php

class Vulkaan extends BaseController
{
    private $VulkaanModel;

    public function __construct()
    {
         $this->VulkaanModel = $this->model('VulkaanModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle smartphones op uit de database
        */
       $result = $this->VulkaanModel->getAllVulkaan();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'Vulkaan' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('vulkaan/index', $data); 
    }

}