<?php

namespace OST\UABundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;

/**
 * Group
 */
class Group extends BaseGroup
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \DateTime|null
     */
    private $created_at;

    /**
     * @var \DateTime|null
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $permissions;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct($this->getName());
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permissions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getName();
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
     * Set description.
     *
     * @param string|null $description
     *
     * @return Group
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Group
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
     * @return Group
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
     * Set createdBy.
     *
     * @param \OST\UABundle\Entity\User|null $createdBy
     *
     * @return Group
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
     * @return Group
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

    /**
     * Add user.
     *
     * @param \OST\UABundle\Entity\User $user
     *
     * @return Group
     */
    public function addUser(\OST\UABundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user.
     *
     * @param \OST\UABundle\Entity\User $user
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUser(\OST\UABundle\Entity\User $user)
    {
        return $this->users->removeElement($user);
    }

    /**
     * Get users.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add permission.
     *
     * @param \OST\UABundle\Entity\Permission $permission
     *
     * @return Group
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

    public function getRoles() {
        $this->roles=array();
        $permissions = array();
        foreach ($this->getPermissions() as $permission) {
            array_push($permissions, $permission->getName());
        }
        return $this->roles = array_merge($this->roles, $permissions);
    }
}
