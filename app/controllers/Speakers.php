<?php

class Speakers extends BaseController
{
    private $SpeakersModel;

    public function __construct()
    {
         $this->SpeakersModel = $this->model('SpeakersModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle smartphones op uit de database
        */
       $result = $this->SpeakersModel->getAllSpeakers();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Overzicht Speakers',
            'Speakers' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('speakers/index', $data); 
    }

}