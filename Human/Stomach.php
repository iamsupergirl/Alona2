<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 19.52
 */
class Stomach
{
    /**
     * @var int
     */
    private $volumeOfStomach=0;
    /**
     * @var int
     */
    private $lengthOfTheStomach=0;
    /**
     * @var int
     */
    private $fulness=0;

    /**
     * @return int
     */
    public function getVolumeOfStomach()
    {
        return $this->volumeOfStomach;
    }

    /**
     * @param int $volumeOfStomach
     */
    public function setVolumeOfStomach($volumeOfStomach)
    {
        $this->volumeOfStomach = $volumeOfStomach;
    }

    /**
     * @return int
     */
    public function getLengthOfTheStomach()
    {
        return $this->lengthOfTheStomach;
    }

    /**
     * @param int $lengthOfTheStomach
     */
    public function setLengthOfTheStomach($lengthOfTheStomach)
    {
        $this->lengthOfTheStomach = $lengthOfTheStomach;
    }

    /**
     * @return int
     */
    public function getFulness()
    {
        return $this->fulness;
    }

    /**
     * @param int $fulness
     */
    public function setFulness($fulness)
    {
        $this->fulness = $fulness;
    }
    public function fullnessOfStomach(){
        if ($this->fulness){
            return 'Желудок наполнен';
        }
        else return'Желудок пуст';

    }
    public function volumeOfStomach($volumeOfStomach){
        $this->volumeOfStomach=$this->volumeOfStomach+$volumeOfStomach;
    }

}