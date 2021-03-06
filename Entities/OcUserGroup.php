<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcUserGroup
 *
 * @ORM\Table(name="oc_user_group")
 * @ORM\Entity
 */
class OcUserGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="text", length=65535, nullable=false)
     */
    private $permission;


    /**
     * Get userGroupId.
     *
     * @return int
     */
    public function getUserGroupId()
    {
        return $this->userGroupId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcUserGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set permission.
     *
     * @param string $permission
     *
     * @return OcUserGroup
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission.
     *
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
