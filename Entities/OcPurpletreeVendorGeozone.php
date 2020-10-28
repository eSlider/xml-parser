<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorGeozone
 *
 * @ORM\Table(name="oc_purpletree_vendor_geozone")
 * @ORM\Entity
 */
class OcPurpletreeVendorGeozone
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
     * @ORM\Column(name="geo_zone_id", type="integer", nullable=false)
     */
    private $geoZoneId;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_from", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $weightFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_to", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $weightTo;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $price;


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
     * Set geoZoneId.
     *
     * @param int $geoZoneId
     *
     * @return OcPurpletreeVendorGeozone
     */
    public function setGeoZoneId($geoZoneId)
    {
        $this->geoZoneId = $geoZoneId;

        return $this;
    }

    /**
     * Get geoZoneId.
     *
     * @return int
     */
    public function getGeoZoneId()
    {
        return $this->geoZoneId;
    }

    /**
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorGeozone
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
     * Set weightFrom.
     *
     * @param string $weightFrom
     *
     * @return OcPurpletreeVendorGeozone
     */
    public function setWeightFrom($weightFrom)
    {
        $this->weightFrom = $weightFrom;

        return $this;
    }

    /**
     * Get weightFrom.
     *
     * @return string
     */
    public function getWeightFrom()
    {
        return $this->weightFrom;
    }

    /**
     * Set weightTo.
     *
     * @param string $weightTo
     *
     * @return OcPurpletreeVendorGeozone
     */
    public function setWeightTo($weightTo)
    {
        $this->weightTo = $weightTo;

        return $this;
    }

    /**
     * Get weightTo.
     *
     * @return string
     */
    public function getWeightTo()
    {
        return $this->weightTo;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return OcPurpletreeVendorGeozone
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
