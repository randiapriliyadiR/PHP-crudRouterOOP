<?php

class Database{

    var $host = 'localhost';
    var $name = 'root';
    var $pass = '';
    var $db   = '';

    function __construct(){
        mysqli_connect($this->host,$this->name,$this->pass,$this->db);
    }
}