<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomFieldValue
 *
 * @ORM\Table(name="oc_custom_field_value")
 * @ORM\Entity
 */
class OcCustomFieldValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_value_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customFieldValueId;

    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     */
    private $customFieldId;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;


    /**
     * Get customFieldValueId.
     *
     * @return int
     */
    public function getCustomFieldValueId()
    {
        return $this->customFieldValueId;
    }

    /**
     * Set customFieldId.
     *
     * @param int $customFieldId
     *
     * @return OcCustomFieldValue
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
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcCustomFieldValue
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}
