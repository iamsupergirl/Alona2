<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 0.11
 */
class Son extends Human
{
    /**
     * @var string
     */
    private $colorOfHair=' ';
    /**
     * @var int
     */
    private $footSize=0;
    /**
     * @var string
     */
    private $colorOfEyes=' ';

    /**
     * @return string
     */
    public function getColorOfHair()
    {
        return $this->colorOfHair;
    }

    /**
     * @param string $colorOfHair
     */
    public function setColorOfHair($colorOfHair)
    {
        $this->colorOfHair = $colorOfHair;
    }

    /**
     * @return int
     */
    public function getFootSize()
    {
        return $this->footSize;
    }

    /**
     * @param int $footSize
     */
    public function setFootSize($footSize)
    {
        $this->footSize = $footSize;
    }

    /**
     * @return string
     */
    public function getColorOfEyes()
    {
        return $this->colorOfEyes;
    }

    /**
     * @param string $colorOfEyes
     */
    public function setColorOfEyes($colorOfEyes)
    {
        $this->colorOfEyes = $colorOfEyes;
    }

}