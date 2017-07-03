<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 23.32
 */
class Teeth
{
    /**
     * @var string
     */
    private $colorOfTeeth=' ';
    /**
     * @var int
     */
private $numberOfTeeth=0;
    /**
     * @var int
     */
private $jawSize=0;

    /**
     * @return string
     */
    public function getColorOfTeeth()
    {
        return $this->colorOfTeeth;
    }

    /**
     * @param string $colorOfTeeth
     */
    public function setColorOfTeeth($colorOfTeeth)
    {
        $this->colorOfTeeth = $colorOfTeeth;
    }

    /**
     * @return int
     */
    public function getNumberOfTeeth()
    {
        return $this->numberOfTeeth;
    }

    /**
     * @param int $numberOfTeeth
     */
    public function setNumberOfTeeth($numberOfTeeth)
    {
        $this->numberOfTeeth = $numberOfTeeth;
    }

    /**
     * @return int
     */
    public function getJawSize()
    {
        return $this->jawSize;
    }

    /**
     * @param int $jawSize
     */
    public function setJawSize($jawSize)
    {
        $this->jawSize = $jawSize;
    }
public function TeethNumber(){
        if($this->numberOfTeeth=32){
            return'Норма';
        }
        else if($this->numberOfTeeth>32){
            return'Патология';
        }
        else return'Неполное количество зубов';
}
public function TeethColor(){
    return'Цвет зубов'.$this->colorOfTeeth;
}
}