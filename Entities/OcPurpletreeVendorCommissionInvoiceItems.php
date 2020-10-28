<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorCommissionInvoiceItems
 *
 * @ORM\Table(name="oc_purpletree_vendor_commission_invoice_items")
 * @ORM\Entity
 */
class OcPurpletreeVendorCommissionInvoiceItems
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
     * @ORM\Column(name="commission_id", type="integer", nullable=false)
     */
    private $commissionId;

    /**
     * @var int
     *
     * @ORM\Column(name="link_id", type="integer", nullable=false)
     */
    private $linkId;

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
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

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
     * @var string
     *
     * @ORM\Column(name="commission_shipping", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $commissionShipping = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="total_commission", type="float", precision=8, scale=2, nullable=false)
     */
    private $totalCommission;


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
     * Set commissionId.
     *
     * @param int $commissionId
     *
     * @return OcPurpletreeVendorCommissionInvoiceItems
     */
    public function setCommissionId($commissionId)
    {
        $this->commissionId = $commissionId;

        return $this;
    }

    /**
     * Get commissionId.
     *
     * @return int
     */
    public function getCommissionId()
    {
        return $this->commissionId;
    }

    /**
     * Set linkId.
     *
     * @param int $linkId
     *
     * @return OcPurpletreeVendorCommissionInvoiceItems
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;

        return $this;
    }

    /**
     * Get linkId.
     *
     * @return int
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcPurpletreeVendorCommissionInvoiceItems
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
     * @return OcPurpletreeVendorCommissionInvoiceItems
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
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorCommissionInvoiceItems
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
     * Set commissionFixed.
     *
     * @param int $commissionFixed
     *
     * @return OcPurpletreeVendorCommissionInvoiceItems
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
     * @return OcPurpletreeVendorCommissionInvoiceItems
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
     * @param string $commissionShipping
     *
     * @return OcPurpletreeVendorCommissionInvoiceItems
     */
    public function setCommissionShipping($commissionShipping)
    {
        $this->commissionShipping = $commissionShipping;

        return $this;
    }

    /**
     * Get commissionShipping.
     *
     * @return string
     */
    public function getCommissionShipping()
    {
        return $this->commissionShipping;
    }

    /**
     * Set totalCommission.
     *
     * @param float $totalCommission
     *
     * @return OcPurpletreeVendorCommissionInvoiceItems
     */
    public function setTotalCommission($totalCommission)
    {
        $this->totalCommission = $totalCommission;

        return $this;
    }

    /**
     * Get totalCommission.
     *
     * @return float
     */
    public function getTotalCommission()
    {
        return $this->totalCommission;
    }
}
