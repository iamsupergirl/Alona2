<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 22.20
 */
class MiddleFinger extends Finger
{
    /**
     * @var string
     */
    private $colorOfNail=' ';
    /**
     * @var int
     */
    private $lengthOfTheNail=0;
    /**
     * @var string
     */
    private $typeOfRings=' ';

    /**
     * @return string
     */
    public function getColorOfNail()
    {
        return $this->colorOfNail;
    }

    /**
     * @param string $colorOfNail
     */
    public function setColorOfNail($colorOfNail)
    {
        $this->colorOfNail = $colorOfNail;
    }

    /**
     * @return int
     */
    public function getLengthOfTheNail()
    {
        return $this->lengthOfTheNail;
    }

    /**
     * @param int $lengthOfTheNail
     */
    public function setLengthOfTheNail($lengthOfTheNail)
    {
        $this->lengthOfTheNail = $lengthOfTheNail;
    }

    /**
     * @return string
     */
    public function getTypeOfRings()
    {
        return $this->typeOfRings;
    }

    /**
     * @param string $typeOfRings
     */
    public function setTypeOfRings($typeOfRings)
    {
        $this->typeOfRings = $typeOfRings;
    }
public function NailColor(){
        return 'Цвет ногтя:'.$this->colorOfNail;
}
public function NailLength(){
    $this->lengthOfTheNail=$this->lengthOfTheNail+5;
}
}