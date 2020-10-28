<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomFieldCustomerGroup
 *
 * @ORM\Table(name="oc_custom_field_customer_group")
 * @ORM\Entity
 */
class OcCustomFieldCustomerGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customFieldId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerGroupId;

    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required;


    /**
     * Set customFieldId.
     *
     * @param int $customFieldId
     *
     * @return OcCustomFieldCustomerGroup
     */
    public function setCustomFieldId($customFieldId)
    {
        $this->customFieldId = $customFieldId;

        return $this;
    }

    /**
     * Get customFieldId.
     *
     * @return int
     */
    public function getCustomFieldId()
    {
        return $this->customFieldId;
    }

    /**
     * Set customerGroupId.
     *
     * @param int $customerGroupId
     *
     * @return OcCustomFieldCustomerGroup
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId.
     *
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set required.
     *
     * @param bool $required
     *
     * @return OcCustomFieldCustomerGroup
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }
}
