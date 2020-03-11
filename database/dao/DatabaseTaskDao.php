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
        $sql =<<<EOF
            SELECT * FROM tasks WHERE uid=$uid;
        EOF;
        $ret = pg_query($this->conn, $sql);
        $tasks = [];
        while ($row = pg_fetch_row($ret)){
            array_push($tasks,  $this->FetchUser($row));
        }
        return $tasks;
    }

    public function addTask($uid,$task,$deadline)
    {
        $sql =<<<EOF
            INSERT INTO tasks (uid,task,deadline) VALUES ('$uid','$task','$deadline');
        EOF;

        $ret = pg_query($this->conn, $sql);
        if(!$ret) {
            echo pg_last_error($this->conn);
        }
    }

    public function deleteTask($id)
    {
        // TODO: Implement deleteTask() method.
    }

    private function FetchUser($row){
        return new Task($row[0], $row[1], $row[2],$row[3]);
    }
}