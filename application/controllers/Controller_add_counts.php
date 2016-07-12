<?php

class Controller_add_counts extends Controller {

    function __construct() {

    }

    public function Action_index() {
        $view = new View();
        $view->generate('add_counts');
    }

}
