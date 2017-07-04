<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 22.08
 */
class LittleFinger extends Finger
{
    /**
     * @var int
     */
public $fingerSize=0;
    /**
     * @var int
     */
public $fingerArea=0;
    /**
     * @var string
     */
public $fingerColor=' ';

    /**
     * @return int
     */
    public function getFingerSize()
    {
        return $this->fingerSize;
    }

    /**
     * @param int $fingerSize
     */
    public function setFingerSize($fingerSize)
    {
        $this->fingerSize = $fingerSize;
    }

    /**
     * @return int
     */
    public function getFingerArea()
    {
        return $this->fingerArea;
    }

    /**
     * @param int $fingerArea
     */
    public function setFingerArea($fingerArea)
    {
        $this->fingerArea = $fingerArea;
    }

    /**
     * @return string
     */
    public function getFingerColor()
    {
        return $this->fingerColor;
    }

    /**
     * @param string $fingerColor
     */
    public function setFingerColor($fingerColor)
    {
        $this->fingerColor = $fingerColor;
    }
    public function sizelittleFinger($sizeLittle){
        $this->fingerSize=$this->fingerSize+$sizeLittle;
    }
    public function colorOfLittleFinger(){
        return'Цвет пальца:'.$this->fingerColor;
    }
}