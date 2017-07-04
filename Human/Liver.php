<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 20.06
 */
class Liver
{
    /**
     * @var int
     */
    private $weightOfLiver=0;
    /**
     * @var int
     */
    private $liverLength=0;
    /**
     * @var int
     */
    private $liverQill=0;

    /**
     * @return int
     */
    public function getWeightOfLiver()
    {
        return $this->weightOfLiver;
    }

    /**
     * @param int $weightOfLiver
     */
    public function setWeightOfLiver($weightOfLiver)
    {
        $this->weightOfLiver = $weightOfLiver;
    }

    /**
     * @return int
     */
    public function getLiverLength()
    {
        return $this->liverLength;
    }

    /**
     * @param int $liverLength
     */
    public function setLiverLength($liverLength)
    {
        $this->liverLength = $liverLength;
    }

    /**
     * @return int
     */
    public function getLiverQill()
    {
        return $this->liverQill;
    }

    /**
     * @param int $liverQill
     */
    public function setLiverQill($liverQill)
    {
        $this->liverQill = $liverQill;
    }
    public function lengthAndQill(){
        if($this->liverLength>=18 && $this->liverQill>=23){
            return'Печень увеличена';
        }
        else return'Возможно, вариант нормы';
    }
    public function liverWeight ($weightOfLiver){
        $this->weightOfLiver=$this->weightOfLiver+$weightOfLiver;
    }

}