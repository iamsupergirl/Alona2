<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 21.11
 */
class Spleen
{
    /**
     * @var int
     */
    private $spleenSpine=0;
    /**
     * @var int
     */
    private $weightOfSpleen=0;
    /**
     * @var int
     */
    private $widthOfSpleen=0;

    /**
     * @return int
     */
    public function getSpleenSpine()
    {
        return $this->spleenSpine;
    }

    /**
     * @param int $spleenSpine
     */
    public function setSpleenSpine($spleenSpine)
    {
        $this->spleenSpine = $spleenSpine;
    }

    /**
     * @return int
     */
    public function getWeightOfSpleen()
    {
        return $this->weightOfSpleen;
    }

    /**
     * @param int $weightOfSpleen
     */
    public function setWeightOfSpleen($weightOfSpleen)
    {
        $this->weightOfSpleen = $weightOfSpleen;
    }

    /**
     * @return int
     */
    public function getWidthOfSpleen()
    {
        return $this->widthOfSpleen;
    }

    /**
     * @param int $widthOfSpleen
     */
    public function setWidthOfSpleen($widthOfSpleen)
    {
        $this->widthOfSpleen = $widthOfSpleen;
    }
public function presenceOfTheSpleen(){
        if($this->spleenSpine==false && $this->weightOfSpleen==false && $this->widthOfSpleen==false){
            return'Селезенка была удалена';
        }
        else return'';
}

    /**
     * @param $weightSpleen
     */
public function spleenWeight($weightSpleen){
    $this->weightOfSpleen=$this->weightOfSpleen+$weightSpleen;
}
}