<?php

namespace Ethio\Covid19Bundle\Entity;

/**
 * VisitorLog
 */
class VisitorLog
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
    private $host_ip;

    /**
     * @var string
     */
    private $visitor_username;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;


    /**
     * Set hostIp
     *
     * @param string $hostIp
     *
     * @return VisitorLog
     */
    public function setHostIp($hostIp)
    {
        $this->host_ip = $hostIp;

        return $this;
    }

    /**
     * Get hostIp
     *
     * @return string
     */
    public function getHostIp()
    {
        return $this->host_ip;
    }

    /**
     * Set visitorUsername
     *
     * @param string $visitorUsername
     *
     * @return VisitorLog
     */
    public function setVisitorUsername($visitorUsername)
    {
        $this->visitor_username = $visitorUsername;

        return $this;
    }

    /**
     * Get visitorUsername
     *
     * @return string
     */
    public function getVisitorUsername()
    {
        return $this->visitor_username;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return VisitorLog
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return VisitorLog
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return VisitorLog
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
     public function setCreatedAtValue() {
        if (!$this->getCreatedAt()) {
            $this->created_at = new \DateTime();
        }
    }

    public function setUpdatedAtValue() {
        $this->updated_at = new \DateTime();
    }
}
