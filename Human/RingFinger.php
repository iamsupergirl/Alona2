<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 22.15
 */
class RingFinger extends Finger
{
    /**
     * @var int
     */
    public $ringSize=0;
    /**
     * @var int
     */
    public $areaRingFinger=0;
    /**
     * @var string
     */
    public $ringColor=' ';

    /**
     * @return int
     */
    public function getRingSize()
    {
        return $this->ringSize;
    }

    /**
     * @param int $ringSize
     */
    public function setRingSize($ringSize)
    {
        $this->ringSize = $ringSize;
    }

    /**
     * @return int
     */
    public function getAreaRingFinger()
    {
        return $this->areaRingFinger;
    }

    /**
     * @param int $areaRingFinger
     */
    public function setAreaRingFinger($areaRingFinger)
    {
        $this->areaRingFinger = $areaRingFinger;
    }

    /**
     * @return string
     */
    public function getRingColor()
    {
        return $this->ringColor;
    }

    /**
     * @param string $ringColor
     */
    public function setRingColor($ringColor)
    {
        $this->ringColor = $ringColor;
    }
    public function sizeOfRing($ringSize){
        $this->ringSize=$this->ringSize+$ringSize;
    }
    public function colorOfRing(){
        return 'Цвет кольца:'.$this->ringColor;
    }

}