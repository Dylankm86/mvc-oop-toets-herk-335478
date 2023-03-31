<?php

class ufcmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getufcinfo()
    {
        $sql = "SELECT name
                        ,ranking
                        ,length
                        ,weight
                        ,age
                        ,winsbyknockout
                        FROM PoundForPound";

             $this ->db->query($sql);
             
             return $this->db->resultSet();
    }
}
