<?php
include_once __DIR__ . "/../../Database/AbstractDao.php";
include_once __DIR__ . "/../../Database/TaskDao.php";
include_once __DIR__ . "/../../objects/task.php";

class DatabaseTaskDao extends AbstractDao implements TaskDao
{
    public $conn;

    public function __construct()
    {
        $this->conn = parent::getConnection();
    }

    public function getTasks($uid)
    {
        // TODO: Implement getTasks() method.
    }

    public function addTask($uid,$task,$deadline)
    {
        $sql =<<<EOF
            INSERT INTO tasks (uid,task,deadline) VALUES ('$uid','$task','$deadline');
        EOF;

        $ret = pg_query($this->conn, $sql);
        if(!$ret) {
            echo pg_last_error($this->conn);
        } else {
            echo "Records created successfully\n";
        }
    }

    public function deleteTask($id)
    {
        // TODO: Implement deleteTask() method.
    }
}