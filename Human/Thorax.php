<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 18.34
 */
class Thorax
{
    /**
     * @var int
     */
private $volumeThorax=0;
    /**
     * @var int
     */
private $sizeOfThorax=0;
    /**
     * @var string
     */
private $typeOfThorax=' ';

    /**
     * @return int
     */
    public function getVolumeThorax()
    {
        return $this->volumeThorax;
    }

    /**
     * @param int $VolumeThorax
     */
    public function setVolumeThorax($volumeThorax)
    {
        $this->volumeThorax = $volumeThorax;
    }

    /**
     * @return int
     */
    public function getSizeOfThorax()
    {
        return $this->sizeOfThorax;
    }

    /**
     * @param int $SizeOfThorax
     */
    public function setSizeOfThorax($sizeOfThorax)
    {
        $this->sizeOfThorax = $sizeOfThorax;
    }

    /**
     * @return string
     */
    public function getTypeOfThorax()
    {
        return $this->typeOfThorax;
    }

    /**
     * @param string $TypeOfThorax
     */
    public function setTypeOfThorax($typeOfThorax)
    {
        $this->typeOfThorax = $typeOfThorax;
    }
public function thoraxType(){
        return 'тип грудной клетки:'. $this->typeOfThorax;
}
public function thoraxVolume(){
    $this->volumeThorax=$this->volumeThorax+10;
}
}