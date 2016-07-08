<?php

class Controller_load_tasks extends Controller {

    function __construct() {

    }

    public function Action_index() {
        $view = new View();
        $view->generate('load_tasks');
    }

}