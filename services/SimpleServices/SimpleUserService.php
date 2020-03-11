<?php

include_once __DIR__ . '/../../database/dao/DatabaseUserDao.php';
include_once __DIR__ . '/../../services/UserService.php';

class SimpleUserService implements UserService
{
    private $userdao;

    public function __construct()
    {
        $this -> userdao = new DatabaseUserDao();
    }

    public function checkUserExist($username) {
        return $this->userdao->UserExist($username);
    }

    public function registerUser($username, $password) {
        $this->userdao->RegisterUser($username, $password);
    }
    public function getUserByUsername($username) {
        return $this->userdao->GetUserByUsername($username);
    }


}

?>