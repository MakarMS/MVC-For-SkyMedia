<?php

class Controller_Register extends Controller{

    function __construct()
    {
        $this->view = new View();
    }

    function  action_index(){
        $this->view->render('register_view.php', 'template_view.php', 'Регистрация');
    }
}


?>
