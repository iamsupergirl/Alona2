<?php
//include 'Eyes.php';
/**
 * Created by PhpStorm.
 * User: helen
 * Date: 2.7.17
 * Time: 23.03
 */
class Head

{
    /**
     * @var Eyes
     */
 public   $eyes;
    /**
     * @var Brain
     */
 public $brain;
    /**
     * @var Ears
     */
 public $ears;
    /**
     * @var Lips
     */
 public $lips;
    /**
     * @var Tongue
     */
 public $tongue;
    /**
     * @var Teeth
     */
 public $teeth;
    /**
     * @var Nose
     */
 public $nose;

    /**
     * @return Eyes
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * @param Eyes $eyes
     */
    public function setEyes($eyes)
    {
        $this->eyes = $eyes;
    }
    /*
     * @var string
     */
private $hair=' ';
    /**
     * @var int
     */
private $circle=0;
    /**
     * @var string
     */
private $typeOfSkin=' ';

    /**
     * @return string
     */
    public function getHair()
    {
        return $this->hair;
    }

    /**
     * @param string $hair
     */
    public function setHair($hair)
    {
        $this->hair = $hair;
    }

    /**
     * @return int
     */
    public function getCircle()
    {
        return $this->circle;
    }

    /**
     * @param int $circle
     */
    public function setCircle($circle)
    {
        $this->circle = $circle;
    }

    /**
     * @return string
     */
    public function getTypeOfSkin()
    {
        return $this->typeOfSkin;
    }

    /**
     * @param string $typeOfSkin
     */
    public function setTypeOfSkin($typeOfSkin)
    {
        $this->typeOfSkin = $typeOfSkin;
    }
public function circleOfHead($HeadCircle){
        $this->circle=$this->circle+$HeadCircle;
}

    /**
     * @return string
     */
public function hairAndType (){
    return 'волосы:'. $this->hair.'; тип кожи'.$this->typeOfSkin;
}


}
$head=new Head();
$head->eyes=new Eyes();
