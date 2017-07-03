<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 22.42
 */
class Forefinger extends Finger
{
    /**
     * @var string
     */
    private $typeOfLacquer=' ';
    /**
     * @var string
     */
    private $colorOfLacquer=' ';
    /**
     * @var int
     */
    private $numberOfColors=0;

    /**
     * @return string
     */
    public function getTypeOfLacquer()
    {
        return $this->typeOfLacquer;
    }

    /**
     * @param string $typeOfLacquer
     */
    public function setTypeOfLacquer($typeOfLacquer)
    {
        $this->typeOfLacquer = $typeOfLacquer;
    }

    /**
     * @return string
     */
    public function getColorOfLacquer()
    {
        return $this->colorOfLacquer;
    }

    /**
     * @param string $colorOfLacquer
     */
    public function setColorOfLacquer($colorOfLacquer)
    {
        $this->colorOfLacquer = $colorOfLacquer;
    }

    /**
     * @return int
     */
    public function getNumberOfColors()
    {
        return $this->numberOfColors;
    }

    /**
     * @param int $numberOfColors
     */
    public function setNumberOfColors($numberOfColors)
    {
        $this->numberOfColors = $numberOfColors;
    }
public function LacquerType(){
        return'Тип лака:'.$this->typeOfLacquer;
}
public function ColorNumber(){
    if($this->numberOfColors==1){
        return'Однотонный';
    }
    else if($this->numberOfColors==0){
        return'Лака нет';
    }
    else return'Многоцветный';
}
}