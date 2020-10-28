<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorShipping
 *
 * @ORM\Table(name="oc_purpletree_vendor_shipping")
 * @ORM\Entity
 */
class OcPurpletreeVendorShipping
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
     * @ORM\Column(name="shipping_country", type="integer", nullable=false)
     */
    private $shippingCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode_from", type="string", length=11, nullable=false)
     */
    private $zipcodeFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode_to", type="string", length=11, nullable=false)
     */
    private $zipcodeTo;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $shippingPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_from", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $weightFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_to", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $weightTo;

    /**
     * @var int
     *
     * @ORM\Column(name="max_days", type="integer", nullable=false)
     */
    private $maxDays;


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
     * @return OcPurpletreeVendorShipping
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
     * Set shippingCountry.
     *
     * @param int $shippingCountry
     *
     * @return OcPurpletreeVendorShipping
     */
    public function setShippingCountry($shippingCountry)
    {
        $this->shippingCountry = $shippingCountry;

        return $this;
    }

    /**
     * Get shippingCountry.
     *
     * @return int
     */
    public function getShippingCountry()
    {
        return $this->shippingCountry;
    }

    /**
     * Set zipcodeFrom.
     *
     * @param string $zipcodeFrom
     *
     * @return OcPurpletreeVendorShipping
     */
    public function setZipcodeFrom($zipcodeFrom)
    {
        $this->zipcodeFrom = $zipcodeFrom;

        return $this;
    }

    /**
     * Get zipcodeFrom.
     *
     * @return string
     */
    public function getZipcodeFrom()
    {
        return $this->zipcodeFrom;
    }

    /**
     * Set zipcodeTo.
     *
     * @param string $zipcodeTo
     *
     * @return OcPurpletreeVendorShipping
     */
    public function setZipcodeTo($zipcodeTo)
    {
        $this->zipcodeTo = $zipcodeTo;

        return $this;
    }

    /**
     * Get zipcodeTo.
     *
     * @return string
     */
    public function getZipcodeTo()
    {
        return $this->zipcodeTo;
    }

    /**
     * Set shippingPrice.
     *
     * @param string $shippingPrice
     *
     * @return OcPurpletreeVendorShipping
     */
    public function setShippingPrice($shippingPrice)
    {
        $this->shippingPrice = $shippingPrice;

        return $this;
    }

    /**
     * Get shippingPrice.
     *
     * @return string
     */
    public function getShippingPrice()
    {
        return $this->shippingPrice;
    }

    /**
     * Set weightFrom.
     *
     * @param string $weightFrom
     *
     * @return OcPurpletreeVendorShipping
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
     * @return OcPurpletreeVendorShipping
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
     * Set maxDays.
     *
     * @param int $maxDays
     *
     * @return OcPurpletreeVendorShipping
     */
    public function setMaxDays($maxDays)
    {
        $this->maxDays = $maxDays;

        return $this;
    }

    /**
     * Get maxDays.
     *
     * @return int
     */
    public function getMaxDays()
    {
        return $this->maxDays;
    }
}
