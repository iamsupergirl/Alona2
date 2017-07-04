<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 22.57
 */
class Leg
{
    /**
     * @var int
     */
    private $volumeOfLeg=0;
    /**
     * @var int
     */
    private $legLength=0;
    /**
     * @var int
     */
    private $footSize=0;

    /**
     * @return int
     */
    public function getVolumeOfLeg()
    {
        return $this->volumeOfLeg;
    }

    /**
     * @param int $volumeOfLeg
     */
    public function setVolumeOfLeg($volumeOfLeg)
    {
        $this->volumeOfLeg = $volumeOfLeg;
    }

    /**
     * @return int
     */
    public function getLegLength()
    {
        return $this->legLength;
    }

    /**
     * @param int $legLength
     */
    public function setLegLength($legLength)
    {
        $this->legLength = $legLength;
    }

    /**
     * @return int
     */
    public function getFootSize()
    {
        return $this->footSize;
    }

    /**
     * @param int $footSize
     */
    public function setFootSize($footSize)
    {
        $this->footSize = $footSize;
    }
    public function sizeOfShoes(){
        if($this->footSize<38 && $this->footSize>35){
            return'Маленький размер ноги';
        }
        else if ($this->footSize<35){
            return'Детский размер ноги';
        }
        else return'Большой размер ноги';
    }
public function legVolume($volumeLeg){
        $this->volumeOfLeg=$this->volumeOfLeg+$volumeLeg;
}
}