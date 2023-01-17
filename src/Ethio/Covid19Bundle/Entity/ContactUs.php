<?php

namespace Ethio\Covid19Bundle\Entity;

/**
 * ContactUs
 */
class ContactUs
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
    private $email;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $type_of_message;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $updatedBy;

    /**
     * @var \Ethio\Covid19Bundle\Entity\ContactUs
     */
    private $repliedTo;


    /**
     * Set email
     *
     * @param string $email
     *
     * @return ContactUs
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return ContactUs
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return ContactUs
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set typeOfMessage
     *
     * @param string $typeOfMessage
     *
     * @return ContactUs
     */
    public function setTypeOfMessage($typeOfMessage)
    {
        $this->type_of_message = $typeOfMessage;

        return $this;
    }

    /**
     * Get typeOfMessage
     *
     * @return string
     */
    public function getTypeOfMessage()
    {
        return $this->type_of_message;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ContactUs
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ContactUs
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
     * @return ContactUs
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

    /**
     * Set createdBy
     *
     * @param \OST\UABundle\Entity\User $createdBy
     *
     * @return ContactUs
     */
    public function setCreatedBy(\OST\UABundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \OST\UABundle\Entity\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \OST\UABundle\Entity\User $updatedBy
     *
     * @return ContactUs
     */
    public function setUpdatedBy(\OST\UABundle\Entity\User $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \OST\UABundle\Entity\User
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set repliedTo
     *
     * @param \Ethio\Covid19Bundle\Entity\ContactUs $repliedTo
     *
     * @return ContactUs
     */
    public function setRepliedTo(\Ethio\Covid19Bundle\Entity\ContactUs $repliedTo = null)
    {
        $this->repliedTo = $repliedTo;

        return $this;
    }

    /**
     * Get repliedTo
     *
     * @return \Ethio\Covid19Bundle\Entity\ContactUs
     */
    public function getRepliedTo()
    {
        return $this->repliedTo;
    }
}
