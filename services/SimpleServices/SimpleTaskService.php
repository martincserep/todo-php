<?php

include_once __DIR__ . '/../../database/dao/DatabaseTaskDao.php';
include_once __DIR__ . '/../../services/TaskService.php';

class SimpleTaskService implements TaskService
{
    private $taskdao;

    public function __construct()
    {
        $this -> taskdao = new DatabaseTaskDao();
    }
    public function getTasks($uid)
    {
        return $this->taskdao->getTasks($uid);
    }

    public function addTask($uid,$name,$deadline)
    {
        $this->taskdao->addTask($uid,$name,$deadline);
    }

    public function deleteTask($id)
    {
        $this->taskdao->deleteTask($id);
    }
}