<?php

class Controller_Ajax{

    function __construct()
    {
        $this->model = new Model_ajax();
        $this->view = new View();
    }


    public function action_auth(){
        $params = $_POST;
        if ($params['email'] == '' or $params['password'] == '') {
            echo json_encode(array('valid_data' => 0));

        }else{
            $data = $this->model->get_data($params);
            #$this->view->render('404_view.php', 'template_view.php', 'Регистрация', $data);
            echo json_encode($data);

        }


    }



}

?>
