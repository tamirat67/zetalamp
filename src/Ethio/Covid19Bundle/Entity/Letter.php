<?php

namespace Ethio\Covid19Bundle\Entity;

/**
 * Letter
 */
class Letter
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
    private $letter_header;

    /**
     * @var string
     */
    private $letter_body;

    /**
     * @var string
     */
    private $letter_foorer;

    /**
     * @var \Ethio\Covid19Bundle\Entity\OrganizationName
     */
    private $organizationnames;


    /**
     * Set letterHeader
     *
     * @param string $letterHeader
     *
     * @return Letter
     */
    public function setLetterHeader($letterHeader)
    {
        $this->letter_header = $letterHeader;

        return $this;
    }

    /**
     * Get letterHeader
     *
     * @return string
     */
    public function getLetterHeader()
    {
        return $this->letter_header;
    }

    /**
     * Set letterBody
     *
     * @param string $letterBody
     *
     * @return Letter
     */
    public function setLetterBody($letterBody)
    {
        $this->letter_body = $letterBody;

        return $this;
    }

    /**
     * Get letterBody
     *
     * @return string
     */
    public function getLetterBody()
    {
        return $this->letter_body;
    }

    /**
     * Set letterFoorer
     *
     * @param string $letterFoorer
     *
     * @return Letter
     */
    public function setLetterFoorer($letterFoorer)
    {
        $this->letter_foorer = $letterFoorer;

        return $this;
    }

    /**
     * Get letterFoorer
     *
     * @return string
     */
    public function getLetterFoorer()
    {
        return $this->letter_foorer;
    }

    /**
     * Set organizationnames
     *
     * @param \Ethio\Covid19Bundle\Entity\OrganizationName $organizationnames
     *
     * @return Letter
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
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $ref_number;

    /**
     * @var string
     */
    private $upload_logo;

    /**
     * @var string
     */
    private $upload_signature;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Letter
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
     * @param integer $refNumber
     *
     * @return Letter
     */
    public function setRefNumber($refNumber)
    {
        $this->ref_number = $refNumber;

        return $this;
    }

    /**
     * Get refNumber
     *
     * @return integer
     */
    public function getRefNumber()
    {
        return $this->ref_number;
    }

    /**
     * Set uploadLogo
     *
     * @param string $uploadLogo
     *
     * @return Letter
     */
    public function setUploadLogo($uploadLogo)
    {
        $this->upload_logo = $uploadLogo;

        return $this;
    }

    /**
     * Get uploadLogo
     *
     * @return string
     */
    public function getUploadLogo()
    {
        return $this->upload_logo;
    }

    /**
     * Set uploadSignature
     *
     * @param string $uploadSignature
     *
     * @return Letter
     */
    public function setUploadSignature($uploadSignature)
    {
        $this->upload_signature = $uploadSignature;

        return $this;
    }

    /**
     * Get uploadSignature
     *
     * @return string
     */
    public function getUploadSignature()
    {
        return $this->upload_signature;
    }
    /**
     * @var string
     */
    private $subject;


    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Letter
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
}
