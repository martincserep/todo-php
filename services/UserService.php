<?php
interface UserService
{
    public function checkUserExist($username);
    public function registerUser($username, $password);
    public function getUserByUsername($username);
}