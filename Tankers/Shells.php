<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 0.24
 */
class Shells
{
private $caliber=0;

    /**
     * @return int
     */
    public function getCaliber()
    {
        return $this->caliber;
    }

    /**
     * @param int $power
     */
    public function setcaliber($caliber)
    {
        $this->caliber = $caliber;
    }
}