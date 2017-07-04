<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 0.20
 */
class Tank
{
    /**
     * @var array
     */
private $crew=array();
    /**
     * @var int
     */
private $rangeOfDistance=0;


    /**
     * @return int
     */
    public function getCrew()
    {
        return $this->crew;
    }

    /**
     * @param int $crew
     */
    public function setCrew($crew)
    {
        $this->crew = $crew;
    }

    /**
     * @return int
     */
    public function getRangeOfDistance()
    {
        return $this->rangeOfDistance;
    }

    /**
     * @param int $rangeOfDistance
     */
    public function setRangeOfDistance($rangeOfDistance)
    {
        $this->rangeOfDistance = $rangeOfDistance;
    }
    public function SetHumanInCrew($human){
        $this->crew[]=$human;
    }
    public function Сonsist(){
        return'Состав экипажа:'.$this->crew;
    }
}