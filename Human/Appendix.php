<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 21.20
 */
class Appendix
{
    /**
     * @var int
     */
    private $thicknessOfAppendix=0;
    /**
     * @var int
     */
    private $appendixLength=0;
    /**
     * @var int
     */
    private $weightOfAppendix=0;

    /**
     * @return int
     */
    public function getThicknessOfAppendix()
    {
        return $this->thicknessOfAppendix;
    }

    /**
     * @param int $thicknessOfAppendix
     */
    public function setThicknessOfAppendix($thicknessOfAppendix)
    {
        $this->thicknessOfAppendix = $thicknessOfAppendix;
    }

    /**
     * @return int
     */
    public function getAppendixLength()
    {
        return $this->appendixLength;
    }

    /**
     * @param int $appendixLength
     */
    public function setAppendixLength($appendixLength)
    {
        $this->appendixLength = $appendixLength;
    }

    /**
     * @return int
     */
    public function getWeightOfAppendix()
    {
        return $this->weightOfAppendix;
    }

    /**
     * @param int $weightOfAppendix
     */
    public function setWeightOfAppendix($weightOfAppendix)
    {
        $this->weightOfAppendix = $weightOfAppendix;
    }
    public function presenceOfAppendix(){
        if ($this->appendixLength==false && $this->thicknessOfAppendix==false && $this->weightOfAppendix==false){
            return'Аппендикс был удален';
        }
        else return'';
    }

    /**
     * @param int
     */
public function lengthOfAppendix(){
        $this->appendixLength=$this->appendixLength+10;
}
}