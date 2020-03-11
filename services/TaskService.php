<?php

interface TaskService
{
    public function getTasks($uid);
    public function addTask($uid,$name,$deadline);
    public function deleteTask($id);
}