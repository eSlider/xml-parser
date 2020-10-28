<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcAmazonLoginPayOrderTransaction
 *
 * @ORM\Table(name="oc_amazon_login_pay_order_transaction")
 * @ORM\Entity
 */
class OcAmazonLoginPayOrderTransaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="amazon_login_pay_order_transaction_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $amazonLoginPayOrderTransactionId;

    /**
     * @var int
     *
     * @ORM\Column(name="amazon_login_pay_order_id", type="integer", nullable=false)
     */
    private $amazonLoginPayOrderId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amazon_authorization_id", type="string", length=255, nullable=true)
     */
    private $amazonAuthorizationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amazon_capture_id", type="string", length=255, nullable=true)
     */
    private $amazonCaptureId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amazon_refund_id", type="string", length=255, nullable=true)
     */
    private $amazonRefundId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount;


    /**
     * Get amazonLoginPayOrderTransactionId.
     *
     * @return int
     */
    public function getAmazonLoginPayOrderTransactionId()
    {
        return $this->amazonLoginPayOrderTransactionId;
    }

    /**
     * Set amazonLoginPayOrderId.
     *
     * @param int $amazonLoginPayOrderId
     *
     * @return OcAmazonLoginPayOrderTransaction
     */
    public function setAmazonLoginPayOrderId($amazonLoginPayOrderId)
    {
        $this->amazonLoginPayOrderId = $amazonLoginPayOrderId;

        return $this;
    }

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
     * Set amazonAuthorizationId.
     *
     * @param string|null $amazonAuthorizationId
     *
     * @return OcAmazonLoginPayOrderTransaction
     */
    public function setAmazonAuthorizationId($amazonAuthorizationId = null)
    {
        $this->amazonAuthorizationId = $amazonAuthorizationId;

        return $this;
    }

    /**
     * Get amazonAuthorizationId.
     *
     * @return string|null
     */
    public function getAmazonAuthorizationId()
    {
        return $this->amazonAuthorizationId;
    }

    /**
     * Set amazonCaptureId.
     *
     * @param string|null $amazonCaptureId
     *
     * @return OcAmazonLoginPayOrderTransaction
     */
    public function setAmazonCaptureId($amazonCaptureId = null)
    {
        $this->amazonCaptureId = $amazonCaptureId;

        return $this;
    }

    /**
     * Get amazonCaptureId.
     *
     * @return string|null
     */
    public function getAmazonCaptureId()
    {
        return $this->amazonCaptureId;
    }

    /**
     * Set amazonRefundId.
     *
     * @param string|null $amazonRefundId
     *
     * @return OcAmazonLoginPayOrderTransaction
     */
    public function setAmazonRefundId($amazonRefundId = null)
    {
        $this->amazonRefundId = $amazonRefundId;

        return $this;
    }

    /**
     * Get amazonRefundId.
     *
     * @return string|null
     */
    public function getAmazonRefundId()
    {
        return $this->amazonRefundId;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcAmazonLoginPayOrderTransaction
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
     * Set type.
     *
     * @param string|null $type
     *
     * @return OcAmazonLoginPayOrderTransaction
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status.
     *
     * @param string|null $status
     *
     * @return OcAmazonLoginPayOrderTransaction
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set amount.
     *
     * @param string $amount
     *
     * @return OcAmazonLoginPayOrderTransaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
