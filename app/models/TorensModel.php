<?php

class TorensModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllTorens()
    {
        $sql = 'SELECT  TORS.Naam
                        ,TORS.Locatie
                        ,TORS.Hoogte
                        ,TORS.AantalVerdiepingen
                        ,TORS.JaarVoltooid

                FROM  Torens as TORS
                
                ORDER BY TORS.Hoogte DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}