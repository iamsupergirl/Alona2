<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 22.05
 */
include 'Room.php';
//include 'Human.php';

class Flat12
{
    /**
     * @var array
     */
    private $rooms;

    /**
     * Flat12 constructor.
     * @param array $rooms
     */
    public function __construct($rooms)
    {
        $this->rooms = $rooms;
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

    /**
     * @return string
     */
        public function informRoom()
        {
            $reports='';
            foreach ($this->rooms as $value){
            $reports=$reports.($value->status());
            }
            return 'Количество комнат: ' .count ($this->rooms).'Информация о комнате: '.$reports;
        }


}

$room1=new Room(0,2);
$room1->addHuman('Human2');

$room1->status();

$room2=new Room(1,1);
$room2->setDoor(0);
$room2->addHuman('New Human');
$room2->status();

$room2->delHuman(1);

$flat=new Flat12([$room1,$room2]);
    echo $flat->informRoom();


