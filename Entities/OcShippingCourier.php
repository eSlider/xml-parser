<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcShippingCourier
 *
 * @ORM\Table(name="oc_shipping_courier")
 * @ORM\Entity
 */
class OcShippingCourier
{
    /**
     * @var int
     *
     * @ORM\Column(name="shipping_courier_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shippingCourierId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_courier_code", type="string", length=255, nullable=false)
     */
    private $shippingCourierCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_courier_name", type="string", length=255, nullable=false)
     */
    private $shippingCourierName = '';


    /**
     * Get shippingCourierId.
     *
     * @return int
     */
    public function getShippingCourierId()
    {
        return $this->shippingCourierId;
    }

    /**
     * Set shippingCourierCode.
     *
     * @param string $shippingCourierCode
     *
     * @return OcShippingCourier
     */
    public function setShippingCourierCode($shippingCourierCode)
    {
        $this->shippingCourierCode = $shippingCourierCode;

        return $this;
    }

    /**
     * Get shippingCourierCode.
     *
     * @return string
     */
    public function getShippingCourierCode()
    {
        return $this->shippingCourierCode;
    }

    /**
     * Set shippingCourierName.
     *
     * @param string $shippingCourierName
     *
     * @return OcShippingCourier
     */
    public function setShippingCourierName($shippingCourierName)
    {
        $this->shippingCourierName = $shippingCourierName;

        return $this;
    }

    /**
     * Get shippingCourierName.
     *
     * @return string
     */
    public function getShippingCourierName()
    {
        return $this->shippingCourierName;
    }
}
