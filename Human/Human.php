<?php


class Human

{
    /**
     * @var Head
     */
    public $head;
    /**
     * @var int
     */
    private $age = 0;
    private $height = 0;
private $wieght = 0;

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWieght()
    {
        return $this->wieght;
    }

    /**
     * @param int $wieght
     */
    public function setWieght($wieght)
    {
        $this->wieght = $wieght;
    }

public function addFiveEars(){
        $this->age=$this->age+5;
}

    /**
     * @param int $toweight
     */
public function addWeight ($toweight=0){
    $this->wieght=$this->wieght+$toweight;
}
}
