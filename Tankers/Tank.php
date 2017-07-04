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
     * @return array
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
    public function setHumanInCrew($human){
        $this->crew[]=$human;
    }
    public function consist(){
        return'Состав экипажа:'.$this->crew;
    }
}