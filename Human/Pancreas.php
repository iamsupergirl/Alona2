<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 20.40
 */
class Pancreas
{
    /**
     * @var float
     */
    private $glycemia=0.0;
    /**
     * @var int
     */
    private $lengthOfPancreas=0;
    /**
     * @var int
     */
    private $weightOfPancreas=0;

    /**
     * @return float
     */
    public function getGlycemia()
    {
        return $this->glycemia;
    }

    /**
     * @param float $glycemia
     */
    public function setGlycemia($glycemia)
    {
        $this->glycemia = $glycemia;
    }

    /**
     * @return int
     */
    public function getLengthOfPancreas()
    {
        return $this->lengthOfPancreas;
    }

    /**
     * @param int $lengthOfPancreas
     */
    public function setLengthOfPancreas($lengthOfPancreas)
    {
        $this->lengthOfPancreas = $lengthOfPancreas;
    }

    /**
     * @return int
     */
    public function getWeightOfPancreas()
    {
        return $this->weightOfPancreas;
    }

    /**
     * @param int $weightOfPancreas
     */
    public function setWeightOfPancreas($weightOfPancreas)
    {
        $this->weightOfPancreas = $weightOfPancreas;
    }
public function LevelOfGlycemia(){
        if ($this->glycemia>5.5){
            return 'Нарушение толерантности к глюкозе';
        }
        if($this->glycemia>3.5 && $this->glycemia<5.5){
            return'Вариант нормы';
        }
        else return'Гипогликемия';
}
public function PancreasWeight(){
    $this->weightOfPancreas=$this->weightOfPancreas+15;
}
}