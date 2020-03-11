<?php
class Task{

    private $id;
    private $uid;
    private $name;
    private $deadline;


    public function __construct($id, $uid, $name, $deadline)
    {
        $this->id = $id;
        $this->uid = $uid;
        $this->name = $name;
        $this->deadline = $deadline;
    }

    public function getId()
    {
        return $this->id;
    }


    public function getUid()
    {
        return $this->uid;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getDeadline()
    {
        return $this->deadline;
    }


}