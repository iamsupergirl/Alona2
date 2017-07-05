<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 22.05
 */
include 'Room.php';
include 'Human.php';
class Float12
{
    /**
     * @var array
     */
    private $rooms;
    public function __construct($rooms)
    {
        $this->rooms = [];
    }

    public function addRoom()
    {
        $this->rooms=new Room();

    }

    public function delRoom($i)
    {
          if (count($this->rooms[$i])<$i)
                unset($this->rooms[$i]);


    }
        public function infoRoom()
        {
            $report='';
            foreach ($this->rooms as $value){
            $report=$report.$value->status;
            }
            return 'Количество комнат:' .count ($this->rooms).'Информация о комнате:'.$report;
        }
}