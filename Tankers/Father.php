<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 0.14
 */
class Father extends Human
{
    /**
     * @var int
     */
private $sizeOfClothes=0;
    /**
     * @var string
     */
private $colorOfSkin=' ';

    /**
     * @return int
     */
    public function getSizeOfClothes()
    {
        return $this->sizeOfClothes;
    }

    /**
     * @param int $sizeOfClothes
     */
    public function setSizeOfClothes($sizeOfClothes)
    {
        $this->sizeOfClothes = $sizeOfClothes;
    }

    /**
     * @return string
     */
    public function getColorOfSkin()
    {
        return $this->colorOfSkin;
    }

    /**
     * @param string $colorOfSkin
     */
    public function setColorOfSkin($colorOfSkin)
    {
        $this->colorOfSkin = $colorOfSkin;
    }
}