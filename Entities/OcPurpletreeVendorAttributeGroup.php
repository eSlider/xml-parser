<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorAttributeGroup
 *
 * @ORM\Table(name="oc_purpletree_vendor_attribute_group")
 * @ORM\Entity
 */
class OcPurpletreeVendorAttributeGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_group_id", type="integer", nullable=false)
     */
    private $attributeGroupId;


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
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorAttributeGroup
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Get sellerId.
     *
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Set attributeGroupId.
     *
     * @param int $attributeGroupId
     *
     * @return OcPurpletreeVendorAttributeGroup
     */
    public function setAttributeGroupId($attributeGroupId)
    {
        $this->attributeGroupId = $attributeGroupId;

        return $this;
    }

    /**
     * Get attributeGroupId.
     *
     * @return int
     */
    public function getAttributeGroupId()
    {
        return $this->attributeGroupId;
    }
}
