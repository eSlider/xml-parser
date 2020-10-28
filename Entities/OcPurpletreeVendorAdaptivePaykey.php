<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorAdaptivePaykey
 *
 * @ORM\Table(name="oc_purpletree_vendor_adaptive_paykey")
 * @ORM\Entity
 */
class OcPurpletreeVendorAdaptivePaykey
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
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_key", type="string", length=50, nullable=false)
     */
    private $paymentKey;


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
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcPurpletreeVendorAdaptivePaykey
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
     * Set paymentKey.
     *
     * @param string $paymentKey
     *
     * @return OcPurpletreeVendorAdaptivePaykey
     */
    public function setPaymentKey($paymentKey)
    {
        $this->paymentKey = $paymentKey;

        return $this;
    }

    /**
     * Get paymentKey.
     *
     * @return string
     */
    public function getPaymentKey()
    {
        return $this->paymentKey;
    }
}
