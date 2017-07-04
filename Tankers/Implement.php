<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 4.7.17
 * Time: 0.29
 */
class Implement
{
    /**
     * @var bool
     */
private $status=0;
    /**
     * @var Shells
     */
public $shell=null;

    /**
     * @return bool
     */
    public function isStatus()
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function ChargeStatus(){
        if($this->status){
            return'Заряжено';
        }
        else 'Разряжено';
    }
    public function Shot($shell){
        if($this->$shell!=null){
            echo'Выстрел';
        }
    }
}