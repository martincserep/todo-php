<?php

interface UserDao {

    public function UserExist($username);
    public function LoginUser($username, $password);
    public function RegisterUser($username, $password);

}

?>