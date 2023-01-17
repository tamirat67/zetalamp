<?php

namespace OST\UABundle\Entity;

/**
 * Mail
 */
class Mail
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $mail_from;

    /**
     * @var string
     */
    private $mail_to;

    /**
     * @var string|null
     */
    private $mail_subject;

    /**
     * @var string|null
     */
    private $mail_body;

    /**
     * @var \DateTime
     */
    private $mail_date_gregorian;

    /**
     * @var string|null
     */
    private $mail_date_ethiopian;

    /**
     * @var string|null
     */
    private $mail_tag;

    /**
     * @var bool|null
     */
    private $is_draft;

    /**
     * @var bool|null
     */
    private $is_sent;

    /**
     * @var bool|null
     */
    private $is_read;

    /**
     * @var \DateTime|null
     */
    private $created_at;

    /**
     * @var \DateTime|null
     */
    private $updated_at;

    /**
     * @var \JU\UABundle\Entity\User
     */
    private $sender;

    /**
     * @var \JU\UABundle\Entity\User
     */
    private $receiver;

    /**
     * @var \OST\UABundle\Entity\Mail
     */
    private $repliedTo;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $updatedBy;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mailFrom.
     *
     * @param string $mailFrom
     *
     * @return Mail
     */
    public function setMailFrom($mailFrom)
    {
        $this->mail_from = $mailFrom;

        return $this;
    }

    /**
     * Get mailFrom.
     *
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mail_from;
    }

    /**
     * Set mailTo.
     *
     * @param string $mailTo
     *
     * @return Mail
     */
    public function setMailTo($mailTo)
    {
        $this->mail_to = $mailTo;

        return $this;
    }

    /**
     * Get mailTo.
     *
     * @return string
     */
    public function getMailTo()
    {
        return $this->mail_to;
    }

    /**
     * Set mailSubject.
     *
     * @param string|null $mailSubject
     *
     * @return Mail
     */
    public function setMailSubject($mailSubject = null)
    {
        $this->mail_subject = $mailSubject;

        return $this;
    }

    /**
     * Get mailSubject.
     *
     * @return string|null
     */
    public function getMailSubject()
    {
        return $this->mail_subject;
    }

    /**
     * Set mailBody.
     *
     * @param string|null $mailBody
     *
     * @return Mail
     */
    public function setMailBody($mailBody = null)
    {
        $this->mail_body = $mailBody;

        return $this;
    }

    /**
     * Get mailBody.
     *
     * @return string|null
     */
    public function getMailBody()
    {
        return $this->mail_body;
    }

    /**
     * Set mailDateGregorian.
     *
     * @param \DateTime $mailDateGregorian
     *
     * @return Mail
     */
    public function setMailDateGregorian($mailDateGregorian)
    {
        $this->mail_date_gregorian = $mailDateGregorian;

        return $this;
    }

    /**
     * Get mailDateGregorian.
     *
     * @return \DateTime
     */
    public function getMailDateGregorian()
    {
        return $this->mail_date_gregorian;
    }

    /**
     * Set mailDateEthiopian.
     *
     * @param string|null $mailDateEthiopian
     *
     * @return Mail
     */
    public function setMailDateEthiopian($mailDateEthiopian = null)
    {
        $this->mail_date_ethiopian = $mailDateEthiopian;

        return $this;
    }

    /**
     * Get mailDateEthiopian.
     *
     * @return string|null
     */
    public function getMailDateEthiopian()
    {
        return $this->mail_date_ethiopian;
    }

    /**
     * Set mailTag.
     *
     * @param string|null $mailTag
     *
     * @return Mail
     */
    public function setMailTag($mailTag = null)
    {
        $this->mail_tag = $mailTag;

        return $this;
    }

    /**
     * Get mailTag.
     *
     * @return string|null
     */
    public function getMailTag()
    {
        return $this->mail_tag;
    }

    /**
     * Set isDraft.
     *
     * @param bool|null $isDraft
     *
     * @return Mail
     */
    public function setIsDraft($isDraft = null)
    {
        $this->is_draft = $isDraft;

        return $this;
    }

    /**
     * Get isDraft.
     *
     * @return bool|null
     */
    public function getIsDraft()
    {
        return $this->is_draft;
    }

    /**
     * Set isSent.
     *
     * @param bool|null $isSent
     *
     * @return Mail
     */
    public function setIsSent($isSent = null)
    {
        $this->is_sent = $isSent;

        return $this;
    }

    /**
     * Get isSent.
     *
     * @return bool|null
     */
    public function getIsSent()
    {
        return $this->is_sent;
    }

    /**
     * Set isRead.
     *
     * @param bool|null $isRead
     *
     * @return Mail
     */
    public function setIsRead($isRead = null)
    {
        $this->is_read = $isRead;

        return $this;
    }

    /**
     * Get isRead.
     *
     * @return bool|null
     */
    public function getIsRead()
    {
        return $this->is_read;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Mail
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return Mail
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set sender.
     *
     * @param \JU\UABundle\Entity\User|null $sender
     *
     * @return Mail
     */
    public function setSender(\OST\UABundle\Entity\User $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender.
     *
     * @return \JU\UABundle\Entity\User|null
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver.
     *
     * @param \JU\UABundle\Entity\User|null $receiver
     *
     * @return Mail
     */
    public function setReceiver(\OST\UABundle\Entity\User $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver.
     *
     * @return \JU\UABundle\Entity\User|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set repliedTo.
     *
     * @param \OST\UABundle\Entity\Mail|null $repliedTo
     *
     * @return Mail
     */
    public function setRepliedTo(\OST\UABundle\Entity\Mail $repliedTo = null)
    {
        $this->repliedTo = $repliedTo;

        return $this;
    }

    /**
     * Get repliedTo.
     *
     * @return \OST\UABundle\Entity\Mail|null
     */
    public function getRepliedTo()
    {
        return $this->repliedTo;
    }

    /**
     * Set createdBy.
     *
     * @param \OST\UABundle\Entity\User|null $createdBy
     *
     * @return Mail
     */
    public function setCreatedBy(\OST\UABundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return \OST\UABundle\Entity\User|null
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy.
     *
     * @param \OST\UABundle\Entity\User|null $updatedBy
     *
     * @return Mail
     */
    public function setUpdatedBy(\OST\UABundle\Entity\User $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return \OST\UABundle\Entity\User|null
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
