<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 19.39
 */
class Lungs
{
    /**
     * @var int
     */
    private $breathingRate=0;
    /**
     * @var int
     */
    private $lobe=0;

    /**
     * @return int
     */
    public function getBreathingRate()
    {
        return $this->breathingRate;
    }

    /**
     * @param int $breathingRate
     */
    public function setBreathingRate($breathingRate)
    {
        $this->breathingRate = $breathingRate;
    }

    /**
     * @return int
     */
    public function getLobe()
    {
        return $this->lobe;
    }

    /**
     * @param int $lobe
     */
    public function setLobe($lobe)
    {
        $this->lobe = $lobe;
    }

    /**
     * @return int
     */
    public function getVolumeOfLungs()
    {
        return $this->volumeOfLungs;
    }

    /**
     * @param int $volumeOfLungs
     */
    public function setVolumeOfLungs($volumeOfLungs)
    {
        $this->volumeOfLungs = $volumeOfLungs;
    }
    /**
     * @var int
     */
    private $volumeOfLungs=0;

    public function LobeOfLungs(){
        if ($this->lobe=2){
            return 'Это левое легкое';
        }
        if ($this->lobe=3){
            return 'Это правое легкое';

        }
        else return'Данные неверны';
    }
    public function Rate(){
        if ($this->breathingRate>=60){
            return 'Тахипноэ';
        }
        if ($this->breathingRate<=12){
            return'Брадипноэ';
        }
        else return 'Вариант нормы';
    }
}