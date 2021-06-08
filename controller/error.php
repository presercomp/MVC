<?php

class Error extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index(string  $type){
        $this->view->render('error', 'index');
    }
}