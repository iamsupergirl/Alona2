<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 2.7.17
 * Time: 23.44
 */
class Eyes
{
    /**
     * @var string
     */
    private $color=' ';
    /**
     * @var string
     */
    private $slit=' ';
    /**
     * @var float
     */
    private $visual=1.0;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getSlit()
    {
        return $this->slit;
    }

    /**
     * @param string $slit
     */
    public function setSlit($slit)
    {
        $this->slit = $slit;
    }

    /**
     * @return float
     */
    public function getVisual()
    {
        return $this->visual;
    }

    /**
     * @param float $visualAcuity
     */
    public function setVisual($visual)
    {
        $this->visual = $visual;
    }

public function visualAcuity($acuity){
        $this->visual=$this->visual+$acuity;
}
public function ColorAndSlit(){
    return 'цвет глаз'. $this->color.'; разрез газ'.$this->slit;
}
}