<?php

class Bucketlist extends BaseController
{
    private $BucketlistModel;

    public function __construct()
    {
         $this->BucketlistModel = $this->model('BucketlistModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle smartphones op uit de database
        */
       $result = $this->BucketlistModel->getAllBucketlist();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Overzicht Bucketlist',
            'Bucketlist' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('Bucketlist/index', $data); 
    }

}