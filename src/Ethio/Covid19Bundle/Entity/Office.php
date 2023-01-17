<?php

namespace Ethio\Covid19Bundle\Entity;

/**
 * Office
 */
class Office {
    private $localeField;

    public function getLocaleField() {
        return $this->localeField;
    }

    /**
     * Set mission
     *
     * @param string $localeField
     *
     * @return AboutUs
     */
    public function setLocaleField($localeField) {
        $this->localeField = $localeField;

        return $this;
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

     
    /**
     * @var \PMSBundle\Entity\Office
     */
    private $parentOffice;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $updatedBy;

    /**
     * Constructor
     */
    ///////////////////


    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

////////////////////////// end of line added by me to try office to store
    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Office
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Office
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Office
     */
    public function setCreatedAt($createdAt) {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Office
     */
    public function setUpdatedAt($updatedAt) {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updated_at;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Office
     */
    public function addUser(\OST\UABundle\Entity\User $user) {
        $this->users[] = $user;

        return $this;
    }
 
    public function removeUser(\OST\UABundle\Entity\User $user) {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers() {
        return $this->users;
    }

    

    /**
     * Set parentOffice
     *
     * @param \Covid19Bundle\Entity\Office $parentOffice
     *
     * @return Office
     */
    public function setParentOffice(\Ethio\Covid19Bundle\Entity\Office $parentOffice = null) {
        $this->parentOffice = $parentOffice;

        return $this;
    }

    /**
     * Get parentOffice
     *
     * @return \Covid19Bundle\Entity\Office
     */
    public function getParentOffice() {
        return $this->parentOffice;
    }

    public function getFullParentOffice() {
        $parent = $this->parentOffice;
         $full_parent = $this->name;
        while ($parent) {
            $full_parent = $full_parent . " / " . $parent->getName();
            $parent =  $parent->parentOffice;
        }
        return $full_parent;
    }

    /**
     * Set createdBy
     *
     * @param \OST\UABundle\Entity\User $createdBy
     *
     * @return Office
     */
    public function setCreatedBy(\OST\UABundle\Entity\User $createdBy = null) {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \OST\UABundle\Entity\User
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \OST\UABundle\Entity\User $updatedBy
     *
     * @return Office
     */
    public function setUpdatedBy(\OST\UABundle\Entity\User $updatedBy = null) {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \OST\UABundle\Entity\User
     */
    public function getUpdatedBy() {
        return $this->updatedBy;
    }

    public function __toString() {
     return (string) $this->name;
    }

  
}
