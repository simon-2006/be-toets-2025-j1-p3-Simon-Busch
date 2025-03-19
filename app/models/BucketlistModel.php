<?php

class BucketlistModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllBucketlist()
    {
        $sql = 'SELECT  BUCK.Doel
                        ,BUCK.Omschrijving
                        ,BUCK.Land
                        

                FROM  Bucketlist as BUCK
                
                ORDER BY BUCK.Doel DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}

