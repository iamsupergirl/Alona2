<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 22.00
 */
class Finger
{
    /**
     * @var int
     */
    private $lengthOfTheFirstPhalanx=0;
    /**
     * @var int
     */
    private $lengthOfTheSecondPhalanx=0;
    /**
     * @var int
     */
    private $lengthOfFinger=0;

    /**
     * @return int
     */
    public function getLengthOfTheFirstPhalanx()
    {
        return $this->lengthOfTheFirstPhalanx;
    }

    /**
     * @param int $lengthOfTheFirstPhalanx
     */
    public function setLengthOfTheFirstPhalanx($lengthOfTheFirstPhalanx)
    {
        $this->lengthOfTheFirstPhalanx = $lengthOfTheFirstPhalanx;
    }

    /**
     * @return int
     */
    public function getLengthOfTheSecondPhalanx()
    {
        return $this->lengthOfTheSecondPhalanx;
    }

    /**
     * @param int $lengthOfTheSecondPhalanx
     */
    public function setLengthOfTheSecondPhalanx($lengthOfTheSecondPhalanx)
    {
        $this->lengthOfTheSecondPhalanx = $lengthOfTheSecondPhalanx;
    }

    /**
     * @return int
     */
    public function getLengthOfFinger()
    {
        return $this->lengthOfFinger;
    }

    /**
     * @param int $lengthOfFinger
     */
    public function setLengthOfFinger($lengthOfFinger)
    {
        $this->lengthOfFinger = $lengthOfFinger;
    }
    public function FirstPhalanxLength ($firstLength){
        $this->lengthOfTheFirstPhalanx=$this->lengthOfTheFirstPhalanx+$firstLength;
    }
    public function SecondPhalanxLength($secondLength){
        $this->lengthOfTheSecondPhalanx=$this->lengthOfTheSecondPhalanx+$secondLength;
    }

}