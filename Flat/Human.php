<?php
namespace dom;

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 5.7.17
 * Time: 10.37
 */
 class Human
{

    /**
     * @var int
     */
    private $growth=0;
    /**
     * @var int
     */
    private $age=0;
    /**
     * @var int
     */
    private $theWeight=0;
    /**
     * @var string
     */
    private $status=' ';
    /**
     * @var string
     */
    private $name='';

    /**
     * Human constructor.
     * @param $name
     */
    function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getGrowth()
    {
        return $this->growth;
    }

    /**
     * @param int $growth
     */
    public function setGrowth($growth)
    {
        $this->growth = $growth;
    }

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
    public function getTheWeight()
    {
        return $this->theWeight;
    }

    /**
     * @param int $theWeight
     */
    public function setTheWeight($theWeight)
    {
        $this->theWeight = $theWeight;
    }


}