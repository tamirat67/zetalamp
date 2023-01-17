<?php

namespace OST\UABundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
// added by firra to try
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
// end try
/**
 * User
 */


class User extends BaseUser
{    /**
     * @var int
     */
    /**
             * @ORM\Id
             * @ORM\Column(type="integer")
             * @ORM\GeneratedValue(strategy="AUTO")
             */
    protected $id;

    /**
     * @var string|null
     */
    private $first_name;

    /**
     * @var string|null
     */
    private $middle_name;

    /**
     * @var string|null
     */
    private $last_name;
 /**
   * @ORMColumn(type="string")
   * @AssertNotBlank(message="Please enter your phone number.", groups={"Registration", "Profile"})
   * @AssertLength(
   *     min=7,
   *     max=25,
   *     minMessage="The phone number is too short.",
   *     maxMessage="The phone number is too long.",
   *     groups={"Registration", “Profile”}
   * )
   */

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var string|null
     */
    private $profile_pic;

    /**
     * @var \DateTime|null
     */
    private $created_at;

    /**
     * @var \DateTime|null
     */
    private $updated_at;

    /**
     * @var string|null
     */
    private $dn;

    /**
     * @var \PMSBundle\Entity\Office
     */
    private $userOffice;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \OST\UABundle\Entity\User
     */
    private $updatedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $groups;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $permissions;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permissions = new \Doctrine\Common\Collections\ArrayCollection();
    }


    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getFirstName()." ".$this->getMiddleName()." ".$this->getLastName()." " . "(".$this->getUsername().")";
    }
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
     * Set firstName.
     *
     * @param string|null $firstName
     *
     * @return User
     */
    public function setFirstName($firstName = null)
    {

        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set middleName.
     *
     * @param string|null $middleName
     *
     * @return User
     */
    public function setMiddleName($middleName = null)
    {
        $this->middle_name = $middleName;

        return $this;
    }

    /**
     * Get middleName.
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->middle_name;
    }

    /**
     * Set lastName.
     *
     * @param string|null $lastName
     *
     * @return User
     */
    public function setLastName($lastName = null)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set phone.
     *
     * @param string|null $phone
     *
     * @return User
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set status.
     *
     * @param string|null $status
     *
     * @return User
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set gender.
     *
     * @param string|null $gender
     *
     * @return User
     */
    public function setGender($gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set profilePic.
     *
     * @param string|null $profilePic
     *
     * @return User
     */
    public function setProfilePic($profilePic = null)
    {
        $this->profile_pic = $profilePic;

        return $this;
    }

    /**
     * Get profilePic.
     *
     * @return string|null
     */
    public function getProfilePic()
    {
        return $this->profile_pic;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return User
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
     * @return User
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
     * Set dn.
     *
     * @param string|null $dn
     *
     * @return User
     */
    public function setDn($dn = null)
    {
        $this->dn = $dn;

        return $this;
    }

    /**
     * Get dn.
     *
     * @return string|null
     */
    public function getDn()
    {
        return $this->dn;
    }

    /**
     * Set userOffice.
     *
     * @param \Ethio\Covid19Bundle\Entity\Office|null $userOffice
     *
     * @return User
     */
    public function setUserOffice(\Ethio\Covid19Bundle\Entity\Office $userOffice)
    {
        $this->userOffice = $userOffice;

        return $this;
    }

    /**
     * Get userOffice.
     *
     * @return \Ethio\Covid19Bundle\Entity\Office|null
     */
    public function getUserOffice()
    {
        return $this->userOffice;
    }

    /**
     * Set createdBy.
     *
     * @param \OST\UABundle\Entity\User|null $createdBy
     *
     * @return User
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
     * @return User
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

//    /**
//     * Add group.
//     *
//     * @param \OST\UABundle\Entity\Group $group
//     *
//     * @return User
//     */
//    public function addGroup(\OST\UABundle\Entity\Group $group)
//    {
//        $this->groups[] = $group;
//
//        return $this;
//    }
//
//    /**
//     * Remove group.
//     *
//     * @param \OST\UABundle\Entity\Group $group
//     *
//     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
//     */
//    public function removeGroup(\OST\UABundle\Entity\Group $group)
//    {
//        return $this->groups->removeElement($group);
//    }

    /**
     * Get groups.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add permission.
     *
     * @param \OST\UABundle\Entity\Permission $permission
     *
     * @return User
     */
    public function addPermission(\OST\UABundle\Entity\Permission $permission)
    {
        $this->permissions[] = $permission;

        return $this;
    }

    /**
     * Remove permission.
     *
     * @param \OST\UABundle\Entity\Permission $permission
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePermission(\OST\UABundle\Entity\Permission $permission)
    {
        return $this->permissions->removeElement($permission);
    }

    /**
     * Get permissions.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
    /**
     * @var \Covid19Bundle\Entity\Office
     */
    private $office;


    /**
     * Set office.
     *
     * @param \Ethio\Covid19Bundle\Entity\Office|null $office
     *
     * @return User
     */
    public function setOffice(\Ethio\Covid19Bundle\Entity\Office $office)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office.
     *
     * @return \Ethio\Covid19Bundle\Entity\Office|null
     */
    public function getOffice()
    {
        return $this->office;
    }
    /**
     * @var string
     */
    private $card_no;

    /**
     * @var string
     */
    private $building_no;

    /**
     * @var string
     */
    private $office_no;


    /**
     * Set cardNo
     *
     * @param string $cardNo
     *
     * @return User
     */
    public function setCardNo($cardNo)
    {
        $this->card_no = $cardNo;

        return $this;
    }

    /**
     * Get cardNo
     *
     * @return string
     */
    public function getCardNo()
    {
        return $this->card_no;
    }

    /**
     * Set buildingNo
     *
     * @param string $buildingNo
     *
     * @return User
     */
    public function setBuildingNo($buildingNo)
    {
        $this->building_no = $buildingNo;

        return $this;
    }

    /**
     * Get buildingNo
     *
     * @return string
     */
    public function getBuildingNo()
    {
        return $this->building_no;
    }

    /**
     * Set officeNo
     *
     * @param string $officeNo
     *
     * @return User
     */
    public function setOfficeNo($officeNo)
    {
        $this->office_no = $officeNo;

        return $this;
    }

    /**
     * Get officeNo
     *
     * @return string
     */
    public function getOfficeNo()
    {
        return $this->office_no;
    }
    /**
     * @var \Ethio\Covid19Bundle\Entity\Store
     */


}
