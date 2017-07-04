<?php

/**
 * Created by PhpStorm.
 * User: helen
 * Date: 3.7.17
 * Time: 18.50
 */
class Body
{
    /**
     * @var Thorax
     */
    public $thorax;
    /**
     * @var Heart
     */
    public $headt;
    /**
     * @var Lungs
     */
    public $lungs;
    /**
     * @var Stomach
     */
    public $stomach;
    /**
     * @var Liver
     */
    public $liver;
    /**
     * @var Pancreas
     */
    public $pancreas;
    /**
     * @var Kidneys
     */
    public $kidneys;
    /**
     * @var Spleen
     */
    public $spleen;
    /**
     * @var Appendix
     */
    public $appendix;
    /**
     * @var Intestines
     */
    public $intestines;
    /**
     * @var Bladder
     */
    public $bladder;
    /**
     * @var Hand
     */
    public $hand;
    /**
     * @var int
     */
 private $muscleWeight=0;
    /**
     * @var int
     */
    private $bloodVolume=0;
    /**
     * @var int
     */
    private $bonresWeight=0;

    /**
     * @return int
     */
    public function getMuscleWeight()
    {
        return $this->muscleWeight;
    }

    /**
     * @param int $MuscleWeight
     */
    public function setMuscleWeight($muscleWeight)
    {
        $this->muscleWeight = $muscleWeight;
    }

    /**
     * @return int
     */
    public function getBloodVolume()
    {
        return $this->bloodVolume;
    }

    /**
     * @param int $BloodVolume
     */
    public function setBloodVolume($bloodVolume)
    {
        $this->bloodVolume = $bloodVolume;
    }

    /**
     * @return int
     */
    public function getBonresWeight()
    {
        return $this->bonresWeight;
    }

    /**
     * @param int $BonresWeight
     */
    public function setBonresWeight($bonresWeight)
    {
        $this->bonresWeight = $bonresWeight;
    }
    public function volumeBlood(){
        return $this->bloodVolume;
    }
    public function weightBones($bonesWeight){
        $this->bonresWeight=$this->bonresWeight+$bonesWeight;
    }

}