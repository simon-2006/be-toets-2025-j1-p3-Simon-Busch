<?php

class ZangeresModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllZangeres()
    {
        $sql = 'SELECT  ZANG.Naam
                        ,ZANG.Nettowaarde
                        ,ZANG.Land
                        ,ZANG.Mobiel
                        ,ZANG.Leeftijd

                FROM  Zangeres as ZANG
                
                ORDER BY ZANG.Nettowaarde DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}

