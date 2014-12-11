<?php

class Db {
   
    private $PDO = null;
    
    function getPDO() {
        return $this->PDO;
    }
    function __construct() {
        $this->setPDO();
    }

    
    
    function setPDO($PDO) {
        $this->PDO = new PDO("mysql:host=localhost;dbname=phpclassfall2014", 'root', '');
    }

    
    
}
