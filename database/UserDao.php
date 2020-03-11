<?php

interface UserDao {

    public function UserExist($username);
    public function GetUserByUsername($username);
    public function RegisterUser($username, $password);

}

?>