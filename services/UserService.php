<?php

interface UserServices {

    public function checkUserExist($username);
    public function loginUser($username, $password);
    public function registerUser($username, $password);
    public function getUserByUsername($username);

}

?>