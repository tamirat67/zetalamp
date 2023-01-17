<?php

namespace Ethio\Covid19Bundle\Entity;

/**
 * RecievedLetter
 */
class RecievedLetter
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
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $ref_number;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var \Ethio\Covid19Bundle\Entity\OrganizationName
     */
    private $organizationnames;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return RecievedLetter
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set refNumber
     *
     * @param string $refNumber
     *
     * @return RecievedLetter
     */
    public function setRefNumber($refNumber)
    {
        $this->ref_number = $refNumber;

        return $this;
    }

    /**
     * Get refNumber
     *
     * @return string
     */
    public function getRefNumber()
    {
        return $this->ref_number;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return RecievedLetter
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
     * Set organizationnames
     *
     * @param \Ethio\Covid19Bundle\Entity\OrganizationName $organizationnames
     *
     * @return RecievedLetter
     */
    public function setOrganizationnames(\Ethio\Covid19Bundle\Entity\OrganizationName $organizationnames = null)
    {
        $this->organizationnames = $organizationnames;

        return $this;
    }

    /**
     * Get organizationnames
     *
     * @return \Ethio\Covid19Bundle\Entity\OrganizationName
     */
    public function getOrganizationnames()
    {
        return $this->organizationnames;
    }
    /**
     * @var string
     */
    private $upload_letter;


    /**
     * Set uploadLetter
     *
     * @param string $uploadLetter
     *
     * @return RecievedLetter
     */
    public function setUploadLetter($uploadLetter)
    {
        $this->upload_letter = $uploadLetter;

        return $this;
    }

    /**
     * Get uploadLetter
     *
     * @return string
     */
    public function getUploadLetter()
    {
        return $this->upload_letter;
    }
}
