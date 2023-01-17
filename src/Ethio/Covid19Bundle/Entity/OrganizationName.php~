<?php

namespace Ethio\Covid19Bundle\Entity;

/**
 * OrganizationName
 */
class OrganizationName
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
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $letters;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->letters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OrganizationName
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return OrganizationName
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
  public function __toString() {
        return $this->name;
        
        }
    /**
     * Add letter
     *
     * @param \Ethio\Covid19Bundle\Entity\Letter $letter
     *
     * @return OrganizationName
     */
    public function addLetter(\Ethio\Covid19Bundle\Entity\Letter $letter)
    {
        $this->letters[] = $letter;

        return $this;
    }

    /**
     * Remove letter
     *
     * @param \Ethio\Covid19Bundle\Entity\Letter $letter
     */
    public function removeLetter(\Ethio\Covid19Bundle\Entity\Letter $letter)
    {
        $this->letters->removeElement($letter);
    }

    /**
     * Get letters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLetters()
    {
        return $this->letters;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $recievedletters;


    /**
     * Add recievedletter
     *
     * @param \Ethio\Covid19Bundle\Entity\RecievedLetter $recievedletter
     *
     * @return OrganizationName
     */
    public function addRecievedletter(\Ethio\Covid19Bundle\Entity\RecievedLetter $recievedletter)
    {
        $this->recievedletters[] = $recievedletter;

        return $this;
    }

    /**
     * Remove recievedletter
     *
     * @param \Ethio\Covid19Bundle\Entity\RecievedLetter $recievedletter
     */
    public function removeRecievedletter(\Ethio\Covid19Bundle\Entity\RecievedLetter $recievedletter)
    {
        $this->recievedletters->removeElement($recievedletter);
    }

    /**
     * Get recievedletters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecievedletters()
    {
        return $this->recievedletters;
    }
}
