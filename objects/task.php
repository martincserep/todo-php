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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDeadline()
    {
        return $this->deadline;
    }


}