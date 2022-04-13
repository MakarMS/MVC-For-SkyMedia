<?php

class Db extends DB_Connect{

    private $conn;

    public function __construct() {
        $dbconect = new parent();
        $this->conn = $dbconect->connect();
    }

    public function check_user_for_auth($table, $email, $password){
        $check_user = mysqli_query($this->conn, "SELECT * FROM " . $table . " WHERE `email` = '$email' AND `password` = '$password'");
         if (mysqli_num_rows($check_user) > 0){
             $user = mysqli_fetch_assoc($check_user);

             return $user;
         }else{
             return false;
         }
    }

    public function update_auth_string($auth_string, $table, $email, $password){
        mysqli_query($this->conn, "UPDATE " . $table ." SET `auth_string` = '$auth_string' WHERE `email` = '$email' AND `password` = '$password'");
    }



}

?>
