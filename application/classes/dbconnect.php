<?php

class DB_Connect{

    public function connect(){
        $host = '127.0.0.1';
        $user = 'root';
        $password = '';
        $db_name = 'skymedia_test';

        $connection = mysqli_connect($host, $user, $password, $db_name);

        return $connection;
    }

}

?>