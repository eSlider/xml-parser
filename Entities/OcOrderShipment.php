<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderShipment
 *
 * @ORM\Table(name="oc_order_shipment")
 * @ORM\Entity
 */
class OcOrderShipment
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_shipment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderShipmentId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_courier_id", type="string", length=255, nullable=false)
     */
    private $shippingCourierId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tracking_number", type="string", length=255, nullable=false)
     */
    private $trackingNumber = '';


    /**
     * Get orderShipmentId.
     *
     * @return int
     */
    public function getOrderShipmentId()
    {
        return $this->orderShipmentId;
    }

    /**
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcOrderShipment
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId.
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcOrderShipment
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set shippingCourierId.
     *
     * @param string $shippingCourierId
     *
     * @return OcOrderShipment
     */
    public function setShippingCourierId($shippingCourierId)
    {
        $this->shippingCourierId = $shippingCourierId;

        return $this;
    }

    /**
     * Get shippingCourierId.
     *
     * @return string
     */
    public function getShippingCourierId()
    {
        return $this->shippingCourierId;
    }

    /**
     * Set trackingNumber.
     *
     * @param string $trackingNumber
     *
     * @return OcOrderShipment
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * Get trackingNumber.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
}
