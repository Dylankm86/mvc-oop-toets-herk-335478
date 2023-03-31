<?php

class ufcmodel
{
    private $db;

    public function__construct()
    {
       this->db = new Database();
    }


    public function getufinfo()
    {
        $sql = "SELECT name
                        ,ranking
                        ,length";
    }
}