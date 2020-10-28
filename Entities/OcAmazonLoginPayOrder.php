<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcAmazonLoginPayOrder
 *
 * @ORM\Table(name="oc_amazon_login_pay_order", indexes={@ORM\Index(name="amazon_order_reference_id", columns={"amazon_order_reference_id"})})
 * @ORM\Entity
 */
class OcAmazonLoginPayOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="amazon_login_pay_order_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $amazonLoginPayOrderId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="amazon_order_reference_id", type="string", length=255, nullable=false)
     */
    private $amazonOrderReferenceId;

    /**
     * @var string
     *
     * @ORM\Column(name="amazon_authorization_id", type="string", length=255, nullable=false)
     */
    private $amazonAuthorizationId;

    /**
     * @var bool
     *
     * @ORM\Column(name="free_shipping", type="boolean", nullable=false)
     */
    private $freeShipping = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capture_status", type="integer", nullable=true)
     */
    private $captureStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cancel_status", type="integer", nullable=true)
     */
    private $cancelStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="refund_status", type="integer", nullable=true)
     */
    private $refundStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $total;


    /**
     * Get amazonLoginPayOrderId.
     *
     * @return int
     */
    public function getAmazonLoginPayOrderId()
    {
        return $this->amazonLoginPayOrderId;
    }

    /**
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcAmazonLoginPayOrder
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
     * Set amazonOrderReferenceId.
     *
     * @param string $amazonOrderReferenceId
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setAmazonOrderReferenceId($amazonOrderReferenceId)
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;

        return $this;
    }

    /**
     * Get amazonOrderReferenceId.
     *
     * @return string
     */
    public function getAmazonOrderReferenceId()
    {
        return $this->amazonOrderReferenceId;
    }

    /**
     * Set amazonAuthorizationId.
     *
     * @param string $amazonAuthorizationId
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setAmazonAuthorizationId($amazonAuthorizationId)
    {
        $this->amazonAuthorizationId = $amazonAuthorizationId;

        return $this;
    }

    /**
     * Get amazonAuthorizationId.
     *
     * @return string
     */
    public function getAmazonAuthorizationId()
    {
        return $this->amazonAuthorizationId;
    }

    /**
     * Set freeShipping.
     *
     * @param bool $freeShipping
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;

        return $this;
    }

    /**
     * Get freeShipping.
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcAmazonLoginPayOrder
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
     * Set modified.
     *
     * @param \DateTime $modified
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified.
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set captureStatus.
     *
     * @param int|null $captureStatus
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setCaptureStatus($captureStatus = null)
    {
        $this->captureStatus = $captureStatus;

        return $this;
    }

    /**
     * Get captureStatus.
     *
     * @return int|null
     */
    public function getCaptureStatus()
    {
        return $this->captureStatus;
    }

    /**
     * Set cancelStatus.
     *
     * @param int|null $cancelStatus
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setCancelStatus($cancelStatus = null)
    {
        $this->cancelStatus = $cancelStatus;

        return $this;
    }

    /**
     * Get cancelStatus.
     *
     * @return int|null
     */
    public function getCancelStatus()
    {
        return $this->cancelStatus;
    }

    /**
     * Set refundStatus.
     *
     * @param int|null $refundStatus
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setRefundStatus($refundStatus = null)
    {
        $this->refundStatus = $refundStatus;

        return $this;
    }

    /**
     * Get refundStatus.
     *
     * @return int|null
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }

    /**
     * Set currencyCode.
     *
     * @param string $currencyCode
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set total.
     *
     * @param string $total
     *
     * @return OcAmazonLoginPayOrder
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total.
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
}
