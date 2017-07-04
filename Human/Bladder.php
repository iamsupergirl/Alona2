<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 21.38
 */
class Bladder
{
    /**
     * @var int
     */
    private $volumeBladder=0;
    /**
     * @var int
     */
    private $wallThickness=0;
    /**
     * @var int
     */
    private $weightOfBladder=0;

    /**
     * @return int
     */
    public function getVolumeBladder()
    {
        return $this->volumeBladder;
    }

    /**
     * @param int $volumeBladder
     */
    public function setVolumeBladder($volumeBladder)
    {
        $this->volumeBladder = $volumeBladder;
    }

    /**
     * @return int
     */
    public function getWallThickness()
    {
        return $this->wallThickness;
    }

    /**
     * @param int $wallThickness
     */
    public function setWallThickness($wallThickness)
    {
        $this->wallThickness = $wallThickness;
    }

    /**
     * @return int
     */
    public function getWeightOfBladder()
    {
        return $this->weightOfBladder;
    }

    /**
     * @param int $weightOfBladder
     */
    public function setWeightOfBladder($weightOfBladder)
    {
        $this->weightOfBladder = $weightOfBladder;
    }
public function fullness(){
        if ($this->volumeBladder){
            return'Мочевой пузырь наполнен';
        }
        else return'Мочевой пузырь пуст';
}

    /**
     * @return string
     */
public function fullness2(){
    if ($this->wallThickness<=3){
        return'Мочевой пузырь наполнен';
    }
    else if($this->wallThickness>3 && $this->wallThickness<12){
        return'Мочевой пузырь пуст';
    }
    else return'';
}
}