<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 23.05
 */
class Toes extends Finger
{
    /**
     * @var int
     */
    private $numberOfFingers=0;
    /**
     * @var int
     */
    private $widthOfThumb=0;
    /**
     * @var int
     */
    private $lengthOfThumb=0;

    /**
     * @return int
     */
    public function getNumberOfFingers()
    {
        return $this->numberOfFingers;
    }

    /**
     * @param int $numberOfFingers
     */
    public function setNumberOfFingers($numberOfFingers)
    {
        $this->numberOfFingers = $numberOfFingers;
    }

    /**
     * @return int
     */
    public function getWidthOfThumb()
    {
        return $this->widthOfThumb;
    }

    /**
     * @param int $widthOfThumb
     */
    public function setWidthOfThumb($widthOfThumb)
    {
        $this->widthOfThumb = $widthOfThumb;
    }

    /**
     * @return int
     */
    public function getLengthOfThumb()
    {
        return $this->lengthOfThumb;
    }

    /**
     * @param int $lengthOfThumb
     */
    public function setLengthOfThumb($lengthOfThumb)
    {
        $this->lengthOfThumb = $lengthOfThumb;
    }
    public function presenceOfFingers(){
        if($this->numberOfFingers==false){
            return'Пальцев нет';
        }
        else return'';
    }

    /**
     * @param $widthThumpFoot
     */
public function thumbWidth($widthThumpFoot){
$this->widthOfThumb=$this->widthOfThumb+$widthThumpFoot;
}
}