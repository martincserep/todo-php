<?php

include_once __DIR__ . '/../../database/dao/DatabaseUserDao.php';
include_once __DIR__ . '/../../UserService.php';

class SimpleUserService extends UserService {
    private $dao;

    public function __construct()
    {
        $this -> userdao = new DatabaseUserDao();
    }

    public function checkUserExist($username) {
        return $this->userdao->UserExist($username);
    }

    public function loginUser($username, $password) {
        $this->userdao->LoginUser($username, $password);
    }
    public function registerUser($username, $password) {
        $this->userdao->RegisterUser($email, $password);
    }
    public function getUserByUsername($username, $password) {
        $this->userdao->GetUserByUsername($email, $password);
    }


}

?>