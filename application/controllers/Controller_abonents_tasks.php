<?php

class Controller_abonents_tasks extends Controller {

    function __construct() {

    }

    public function Action_index() {
        $view = new View();
        $view->generate('abonents_tasks');
    }

}
