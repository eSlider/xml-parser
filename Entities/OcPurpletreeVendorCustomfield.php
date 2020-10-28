<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorCustomfield
 *
 * @ORM\Table(name="oc_purpletree_vendor_customfield")
 * @ORM\Entity
 */
class OcPurpletreeVendorCustomfield
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
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     */
    private $customFieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="step_location", type="string", length=30, nullable=false)
     */
    private $stepLocation;


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
     * Set customFieldId.
     *
     * @param int $customFieldId
     *
     * @return OcPurpletreeVendorCustomfield
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
     * Set stepLocation.
     *
     * @param string $stepLocation
     *
     * @return OcPurpletreeVendorCustomfield
     */
    public function setStepLocation($stepLocation)
    {
        $this->stepLocation = $stepLocation;

        return $this;
    }

    /**
     * Get stepLocation.
     *
     * @return string
     */
    public function getStepLocation()
    {
        return $this->stepLocation;
    }
}
