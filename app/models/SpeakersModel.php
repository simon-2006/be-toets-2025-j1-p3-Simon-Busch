<?php

class SpeakersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllSpeakers()
    {
        $sql = 'SELECT  SPKS.Naam
                        ,SPKS.Batterijduur
                        ,SPKS.Waterbestendigheid

                FROM  Speakers as SPKS
                
                ORDER BY SPKS.Batterijduur DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}