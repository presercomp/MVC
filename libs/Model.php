<?php

class Model {
    public $mysql;
    
    function __construct(){
        $this->mysql = new MySQL(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);
    }
}