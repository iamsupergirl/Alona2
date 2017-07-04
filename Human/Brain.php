<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 2.7.17
 * Time: 23.56
 */
class Brain
{
    /**
     * @var Head
     */
    public $head;
    /**
     * @var int
     */
    private $iq=0;
    /**
     * @var int
     */
    private $mass=0;
    /**
     * @var int
     */
    private $volume=0;

    /**
     * @return int
     */
    public function getIq()
    {
        return $this->iq;
    }

    /**
     * @param int $iq
     */
    public function setIq($iq)
    {
        $this->iq = $iq;
    }

    /**
     * @return int
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * @param int $mass
     */
    public function setMass($mass)
    {
        $this->mass = $mass;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return int
     */
    public function addMass(){
       return $this->mass=$this->mass+10;
    }
public function addIq($IqChange){
        $this->iq=$this->iq+$IqChange;
}
}