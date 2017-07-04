<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 21.03
 */
class Kidneys
{
    /**
     * @var int
     */
    private $sizeOfKidneys1=0;
    /**
     * @var int
     */
    private $sizeOfKidneys2=0;
    /**
     * @var int
     */
    private $weightOfKidnays=0;

    /**
     * @return int
     */
    public function getSizeOfKidneys1()
    {
        return $this->sizeOfKidneys1;
    }

    /**
     * @param int $sizeOfKidneys1
     */
    public function setSizeOfKidneys1($sizeOfKidneys1)
    {
        $this->sizeOfKidneys1 = $sizeOfKidneys1;
    }

    /**
     * @return int
     */
    public function getSizeOfKidneys2()
    {
        return $this->sizeOfKidneys2;
    }

    /**
     * @param int $sizeOfKidneys2
     */
    public function setSizeOfKidneys2($sizeOfKidneys2)
    {
        $this->sizeOfKidneys2 = $sizeOfKidneys2;
    }

    /**
     * @return int
     */
    public function getWeightOfKidnays()
    {
        return $this->weightOfKidnays;
    }

    /**
     * @param int $weightOfKidnays
     */
    public function setWeightOfKidnays($weightOfKidnays)
    {
        $this->weightOfKidnays = $weightOfKidnays;
    }
public function whichKidney(){
        if($this->sizeOfKidneys1>$this->sizeOfKidneys2){
            return'Размер левой почки:'.$this->sizeOfKidneys1;
        }
        else return 'Размер левой почки:'.$this->sizeOfKidneys2;
}
public function kidneysWeight(){
    $this->weightOfKidnays=$this->weightOfKidnays+10;
}
}