<?php

class VulkaanModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllVulkaan()
    {
        $sql = 'SELECT  VULK.Naam
                        ,VULK.Hoogte
                        ,VULK.Land
                        ,VULK.JaarLaatsteUitbarsting
                        ,VULK.AantalSlachtoffers

                FROM  Vulkaan as VULK
                
                ORDER BY VULK.AantalSlachtoffers DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}

