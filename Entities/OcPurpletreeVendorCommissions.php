<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorCommissions
 *
 * @ORM\Table(name="oc_purpletree_vendor_commissions")
 * @ORM\Entity
 */
class OcPurpletreeVendorCommissions
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
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_order_table_id", type="integer", nullable=false)
     */
    private $vendorOrderTableId;

    /**
     * @var int
     *
     * @ORM\Column(name="commission_fixed", type="integer", nullable=false)
     */
    private $commissionFixed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commission_percent", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $commissionPercent = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="commission_shipping", type="float", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $commissionShipping = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="invoice_status", type="integer", nullable=false)
     */
    private $invoiceStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=false)
     */
    private $updatedAt;


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
     * @return OcPurpletreeVendorCommissions
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
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcPurpletreeVendorCommissions
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
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set vendorOrderTableId.
     *
     * @param int $vendorOrderTableId
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setVendorOrderTableId($vendorOrderTableId)
    {
        $this->vendorOrderTableId = $vendorOrderTableId;

        return $this;
    }

    /**
     * Get vendorOrderTableId.
     *
     * @return int
     */
    public function getVendorOrderTableId()
    {
        return $this->vendorOrderTableId;
    }

    /**
     * Set commissionFixed.
     *
     * @param int $commissionFixed
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setCommissionFixed($commissionFixed)
    {
        $this->commissionFixed = $commissionFixed;

        return $this;
    }

    /**
     * Get commissionFixed.
     *
     * @return int
     */
    public function getCommissionFixed()
    {
        return $this->commissionFixed;
    }

    /**
     * Set commissionPercent.
     *
     * @param string $commissionPercent
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setCommissionPercent($commissionPercent)
    {
        $this->commissionPercent = $commissionPercent;

        return $this;
    }

    /**
     * Get commissionPercent.
     *
     * @return string
     */
    public function getCommissionPercent()
    {
        return $this->commissionPercent;
    }

    /**
     * Set commissionShipping.
     *
     * @param float $commissionShipping
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setCommissionShipping($commissionShipping)
    {
        $this->commissionShipping = $commissionShipping;

        return $this;
    }

    /**
     * Get commissionShipping.
     *
     * @return float
     */
    public function getCommissionShipping()
    {
        return $this->commissionShipping;
    }

    /**
     * Set invoiceStatus.
     *
     * @param int $invoiceStatus
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setInvoiceStatus($invoiceStatus)
    {
        $this->invoiceStatus = $invoiceStatus;

        return $this;
    }

    /**
     * Get invoiceStatus.
     *
     * @return int
     */
    public function getInvoiceStatus()
    {
        return $this->invoiceStatus;
    }

    /**
     * Set commission.
     *
     * @param string $commission
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission.
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return OcPurpletreeVendorCommissions
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
