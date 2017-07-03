<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 23.15
 */
class Ears
{
    /**
     * @var int
     */
    private $numberOfEars=0;
    /**
     * @var int
     */
    private $sizeOfEars=0;
    /**
     * @var bool
     */
    private $presenceOfEars=0;

    /**
     * @return int
     */
    public function getNumberOfEars()
    {
        return $this->numberOfEars;
    }

    /**
     * @param int $numberOfEars
     */
    public function setNumberOfEars($numberOfEars)
    {
        $this->numberOfEars = $numberOfEars;
    }

    /**
     * @return int
     */
    public function getSizeOfEars()
    {
        return $this->sizeOfEars;
    }

    /**
     * @param int $sizeOfEars
     */
    public function setSizeOfEars($sizeOfEars)
    {
        $this->sizeOfEars = $sizeOfEars;
    }

    /**
     * @return bool
     */
    public function isPresenceOfEars()
    {
        return $this->presenceOfEars;
    }

    /**
     * @param bool $presenceOfEars
     */
    public function setPresenceOfEars($presenceOfEars)
    {
        $this->presenceOfEars = $presenceOfEars;
    }
public function EarsPresence(){
        if($this->presenceOfEars==false){
            return'Ушей нет';
        }
}
public function EarsNumber(){
    if ($this->numberOfEars<1 && $this->numberOfEars>2){
        return'Патология';
    }
}
}