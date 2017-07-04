<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 22.49
 */
class Thumb extends Finger
{
    /**
     * @var int
     */
private $fingerWidth=0;
    /**
     * @var int
     */
private $nailsWidth=0;
    /**
     * @var int
     */
private $angleOfAFinger=0;

    /**
     * @return int
     */
    public function getFingerWidth()
    {
        return $this->fingerWidth;
    }

    /**
     * @param int $fingerWidth
     */
    public function setFingerWidth($fingerWidth)
    {
        $this->fingerWidth = $fingerWidth;
    }

    /**
     * @return int
     */
    public function getNailsWidth()
    {
        return $this->nailsWidth;
    }

    /**
     * @param int $nailsWidth
     */
    public function setNailsWidth($nailsWidth)
    {
        $this->nailsWidth = $nailsWidth;
    }

    /**
     * @return int
     */
    public function getAngleOfAFinger()
    {
        return $this->angleOfAFinger;
    }

    /**
     * @param int $angleOfAFinger
     */
    public function setAngleOfAFinger($angleOfAFinger)
    {
        $this->angleOfAFinger = $angleOfAFinger;
    }
    public function widthOfNails($nailsWidth){
        $this->nailsWidth=$this->nailsWidth+$nailsWidth;
    }
    public function fingerAngle($angleOfAThumb){
        $this->angleOfAFinger=$this->angleOfAFinger+$angleOfAThumb;
    }
}