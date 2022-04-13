<?php

class Model_Ajax extends Model{


    function get_data($params){

        $d = new Db();

        $email = $params['email'];
        $password = md5(md5($params['password']));

        $user = $d->check_user_for_auth('users', $email, $password);
        if($user != false){

            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $strlength = strlen($characters);
            $random = '';
            for ($i = 0; $i < 64; $i++) {
                $random .= $characters[rand(0, $strlength - 1)];
            }

            $random_hash = md5($random);

            $d->update_auth_string($random_hash, 'users', $email, $password);

            $_SESSION['id'] = $user['id'];
            $_SESSION['auth_string'] = $random;

            $data = array('valid_data' => 1, 'url' => 'profile');

        }
        else{
            $data = array('valid_data' => 0);
        }


        return $data;
    }
}

?>
