<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 21.51
 */
class Hand
{
    /**
     * @var Finger
     */
    public $finger;
    /**
     * @var int
     */
    private $longArms=0;
    /**
     * @var int
     */
    private $weightOfArms=0;

    /**
     * @return int
     */
    public function getLongArms()
    {
        return $this->longArms;
    }

    /**
     * @param int $longArms
     */
    public function setLongArms($longArms)
    {
        $this->longArms = $longArms;
    }

    /**
     * @return int
     */
    public function getWeightOfArms()
    {
        return $this->weightOfArms;
    }

    /**
     * @param int $weightOfArms
     */
    public function setWeightOfArms($weightOfArms)
    {
        $this->weightOfArms = $weightOfArms;
    }

    /**
     * @return bool
     */
    public function isHandAvailability()
    {
        return $this->handAvailability;
    }

    /**
     * @param bool $handAvailability
     */
    public function setHandAvailability($handAvailability)
    {
        $this->handAvailability = $handAvailability;
    }
    /**
     * @var bool
     */
    private $handAvailability=true;
    public function availability(){
        if($this->handAvailability==false){
            return'Руки отсутствуют';
        }
        else return'';
    }

    /**
     * @param $long
     */
public function armsLong($long){
        $this->longArms=$this->longArms+$long;
}
}