<?php

interface TaskDao {

    public function getTasks($uid);
    public function addTask($uid,$name,$date);
    public function deleteTask($id);

}