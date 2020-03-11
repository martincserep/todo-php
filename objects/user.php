<?php
class User{

    private $uid;
    private $username;
    private $password;


    public function __construct($uid, $username, $password)
    {
        $this->uid = $uid;
        $this->username = $username;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->uid;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

}