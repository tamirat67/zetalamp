<?php

namespace Ethio\Covid19Bundle\Entity;

/**
 * AboutUs
 */
class AboutUs
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $Mission;

    /**
     * @var string
     */
    private $Vision;

    /**
     * @var string
     */
    private $CoreValues;

    /**
     * @var string
     */
    private $Strategicthemes;


    /**
     * Set mission
     *
     * @param string $mission
     *
     * @return AboutUs
     */
    public function setMission($mission)
    {
        $this->Mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string
     */
    public function getMission()
    {
        return $this->Mission;
    }

    /**
     * Set vision
     *
     * @param string $vision
     *
     * @return AboutUs
     */
    public function setVision($vision)
    {
        $this->Vision = $vision;

        return $this;
    }

    /**
     * Get vision
     *
     * @return string
     */
    public function getVision()
    {
        return $this->Vision;
    }

    /**
     * Set coreValues
     *
     * @param string $coreValues
     *
     * @return AboutUs
     */
    public function setCoreValues($coreValues)
    {
        $this->CoreValues = $coreValues;

        return $this;
    }

    /**
     * Get coreValues
     *
     * @return string
     */
    public function getCoreValues()
    {
        return $this->CoreValues;
    }

    /**
     * Set strategicthemes
     *
     * @param string $strategicthemes
     *
     * @return AboutUs
     */
    public function setStrategicthemes($strategicthemes)
    {
        $this->Strategicthemes = $strategicthemes;

        return $this;
    }

    /**
     * Get strategicthemes
     *
     * @return string
     */
    public function getStrategicthemes()
    {
        return $this->Strategicthemes;
    }
}
