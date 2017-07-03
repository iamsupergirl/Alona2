<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 19.21
 */
class Heart
{
    /**
     * @var int
     */
    private $weightOfHeart=0;
    /**
     * @var int
     */
    private $volumeOfHeart=0;
    /**
     * @var int
     */
    private $reductions=0;

    /**
     * @return int
     */
    public function getWeightOfHeart()
    {
        return $this->weightOfHeart;
    }

    /**
     * @param int $weightOfHeart
     */
    public function setWeightOfHeart($weightOfHeart)
    {
        $this->weightOfHeart = $weightOfHeart;
    }

    /**
     * @return int
     */
    public function getVolumeOfHeart()
    {
        return $this->volumeOfHeart;
    }

    /**
     * @param int $volumeOfHeart
     */
    public function setVolumeOfHeart($volumeOfHeart)
    {
        $this->volumeOfHeart = $volumeOfHeart;
    }

    /**
     * @return int
     */
    public function getReductions()
    {
        return $this->reductions;
    }

    /**
     * @param int $reductions
     */
    public function setReductions($reductions)
    {
        $this->reductions = $reductions;
    }
public function HeartReductions(){
        if ($this->reductions>=90){
            return 'Тахикардия';
        }
        if($this->reductions<=50){
            return 'Брадикардия';}
            else return 'Нормосистолия';

}
public function HeartWeight($weightOfHeart){
    $this->weightOfHeart=$this->weightOfHeart+$weightOfHeart;
}
}