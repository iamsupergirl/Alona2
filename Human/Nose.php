<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 23.41
 */
class Nose
{
    /**
     * @var int
     */
private $lengthOfNose=0;
    /**
     * @var string
     */
private $noseShape=' ';
    /**
     * @var int
     */
private $widthOfNose=0;

    /**
     * @return int
     */
    public function getLengthOfNose()
    {
        return $this->lengthOfNose;
    }

    /**
     * @param int $lengthOfNose
     */
    public function setLengthOfNose($lengthOfNose)
    {
        $this->lengthOfNose = $lengthOfNose;
    }

    /**
     * @return string
     */
    public function getNoseShape()
    {
        return $this->noseShape;
    }

    /**
     * @param string $noseShape
     */
    public function setNoseShape($noseShape)
    {
        $this->noseShape = $noseShape;
    }

    /**
     * @return int
     */
    public function getWidthOfNose()
    {
        return $this->widthOfNose;
    }

    /**
     * @param int $widthOfNose
     */
    public function setWidthOfNose($widthOfNose)
    {
        $this->widthOfNose = $widthOfNose;
    }
    public function shapeAndLength(){
        return'Форма носа:'.$this->noseShape.'и длинна носа:'.$this->lengthOfNose;
    }
    public function noseLength($lengthNose){
        $this->lengthOfNose=$this->lengthOfNose+$lengthNose;
    }
}