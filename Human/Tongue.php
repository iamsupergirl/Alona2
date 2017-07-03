<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 23.28
 */
class Tongue
{
    /**
     * @var string
     */
    private $colorOfTongue=' ';
    /**
     * @var int
     */
    private $lengthOfTongue=0;
    /**
     * @var int
     */
    private $widthOfTongue=0;

    /**
     * @return string
     */
    public function getColorOfTongue()
    {
        return $this->colorOfTongue;
    }

    /**
     * @param string $colorOfTongue
     */
    public function setColorOfTongue($colorOfTongue)
    {
        $this->colorOfTongue = $colorOfTongue;
    }

    /**
     * @return int
     */
    public function getLengthOfTongue()
    {
        return $this->lengthOfTongue;
    }

    /**
     * @param int $lengthOfTongue
     */
    public function setLengthOfTongue($lengthOfTongue)
    {
        $this->lengthOfTongue = $lengthOfTongue;
    }

    /**
     * @return int
     */
    public function getWidthOfTongue()
    {
        return $this->widthOfTongue;
    }

    /**
     * @param int $widthOfTongue
     */
    public function setWidthOfTongue($widthOfTongue)
    {
        $this->widthOfTongue = $widthOfTongue;
    }
public function TongueColor(){
        return'Цвет языка:'.$this->colorOfTongue;
}
public function TongueLength(){
    $this->lengthOfTongue=$this->lengthOfTongue+5;
}
}