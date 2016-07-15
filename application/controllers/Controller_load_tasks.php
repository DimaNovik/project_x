<?php

class Controller_load_tasks extends Controller {

    function __construct() {

    }

    public function Action_index() {


        $clerkname = '';
        $password = '';

        if(isset($_POST['submit'])) {
          $clerk = $_POST['clerkname'];
          $password = $_POST['password'];
          $secret_word = 'admin';

            //валидация полей
            if ($password == $secret_word) {

            } else {
              $errors[] = 'Пусто';
              header('Location: /index');
            }

        }

        $view = new View();
        $view->generate('load_tasks');

    }

}
