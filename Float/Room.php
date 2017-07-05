<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 22.20
 */
include'Human.php';
class Room
{
    /**
     * @var int
     */
    private $windows = 0;
    /**
     * @var bool
     */
    private $door = 0;
    /**
     * @var int
     */
    private $status = 0;
    /**
     * @var array
     */
    private $human;

    /**
     * @return array
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * @param int $human
     */
    public function setHuman($human)
    {
        $this->human = $human;
    }


    /**
     * @return int
     */
    public function getWindows()
    {
        return $this->windows;
    }

    /**
     * @param int $windows
     */
    public function setWindows($windows)
    {
        $this->windows = $windows;
    }

    /**
     * @return int
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * @param int $door
     */
    public function setDoor($door)
    {
        $this->door = $door;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function addHuman()
    {
        $this->human=new Human();
        }

    public function delHuman($a)
    {
        if ($this->door && count($this->human[$a])<$a) {
            unset($this->human[$a]);
        }

    }
    public function status(){
        if (count($this->human)){
            return'В комнате:'.count($this->human).'человек.Свет горит';
        }
        else return 'В комнате темно и нет людей.';

    }
}


