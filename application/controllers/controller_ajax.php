<?php

class Controller_Ajax{

    function __construct()
    {
        $this->model = new Model_ajax();
        $this->view = new View();
    }


    public function action_auth(){
        $params = $_POST;
        if ($params['login'] == '' or $params['password'] == '') {
            echo json_encode(array('valid_data' => 0));

        }else{
            $data = $this->model->get_data($params);
        }

    }
}

?>
