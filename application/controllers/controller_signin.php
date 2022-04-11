<?php

class Controller_Signin extends Controller{
    function  action_index()
    {
        $this->view->render('signin_view.php', 'template_view.php', 'Войти');
    }
}


?>
