<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 23.23
 */
class Lips
{
    /**
     * @var int
     */
    private $sizeOfLips=0;
    /**
     * @var int
     */
    private $volumeOfLips=0;
    /**
     * @var string
     */
    private $colorOfLips=' ';

    /**
     * @return int
     */
    public function getSizeOfLips()
    {
        return $this->sizeOfLips;
    }

    /**
     * @param int $sizeOfLips
     */
    public function setSizeOfLips($sizeOfLips)
    {
        $this->sizeOfLips = $sizeOfLips;
    }

    /**
     * @return int
     */
    public function getVolumeOfLips()
    {
        return $this->volumeOfLips;
    }

    /**
     * @param int $volumeOfLips
     */
    public function setVolumeOfLips($volumeOfLips)
    {
        $this->volumeOfLips = $volumeOfLips;
    }

    /**
     * @return string
     */
    public function getColorOfLips()
    {
        return $this->colorOfLips;
    }

    /**
     * @param string $colorOfLips
     */
    public function setColorOfLips($colorOfLips)
    {
        $this->colorOfLips = $colorOfLips;
    }
public function lipsColor(){
        return'Цвет губ:'.$this->colorOfLips;
}
public function lipsSize($sizeOfLips){
    $this->sizeOfLips=$this->sizeOfLips+$sizeOfLips;
}
}