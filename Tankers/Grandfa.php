<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 0.17
 */
class Grandfa extends Human
{
    /**
     * @var int
     */
    private $volumeOfVoice=0;
    /**
     * @var int
     */
    private $lengthOfHair=0;

    /**
     * @return int
     */
    public function getVolumeOfVoice()
    {
        return $this->volumeOfVoice;
    }

    /**
     * @param int $volumeOfVoice
     */
    public function setVolumeOfVoice($volumeOfVoice)
    {
        $this->volumeOfVoice = $volumeOfVoice;
    }

    /**
     * @return int
     */
    public function getLengthOfHair()
    {
        return $this->lengthOfHair;
    }

    /**
     * @param int $lengthOfHair
     */
    public function setLengthOfHair($lengthOfHair)
    {
        $this->lengthOfHair = $lengthOfHair;
    }

}