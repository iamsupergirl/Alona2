<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 21.29
 */
class Intestines
{
    /**
     * @var int
     */
    private $totalLengthOfIntestine=0;
    /**
     * @var int
     */
    private $volumeOfIntestine=0;
    /**
     * @var int
     */
    private $weightOfIntestine=0;

    /**
     * @return int
     */
    public function getTotalLengthOfIntestine()
    {
        return $this->totalLengthOfIntestine;
    }

    /**
     * @param int $totalLengthOfIntestine
     */
    public function setTotalLengthOfIntestine($totalLengthOfIntestine)
    {
        $this->totalLengthOfIntestine = $totalLengthOfIntestine;
    }

    /**
     * @return int
     */
    public function getVolumeOfIntestine()
    {
        return $this->volumeOfIntestine;
    }

    /**
     * @param int $volumeOfIntestine
     */
    public function setVolumeOfIntestine($volumeOfIntestine)
    {
        $this->volumeOfIntestine = $volumeOfIntestine;
    }

    /**
     * @return int
     */
    public function getWeightOfIntestine()
    {
        return $this->weightOfIntestine;
    }

    /**
     * @param int $weightOfIntestine
     */
    public function setWeightOfIntestine($weightOfIntestine)
    {
        $this->weightOfIntestine = $weightOfIntestine;
    }
    public function BowelFilling(){
        if ($this->volumeOfIntestine){
            return'Кишечник наполнен';
        }
    }
public function IntestinesWeight ($massOfIntestine){
        $this->weightOfIntestine=$this->weightOfIntestine+$massOfIntestine;
}
}