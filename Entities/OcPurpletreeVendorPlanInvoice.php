<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorPlanInvoice
 *
 * @ORM\Table(name="oc_purpletree_vendor_plan_invoice", indexes={@ORM\Index(name="plan_id", columns={"plan_id"}), @ORM\Index(name="status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class OcPurpletreeVendorPlanInvoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="invoice_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invoiceId;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_mode", type="string", length=30, nullable=false)
     */
    private $paymentMode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

    /**
     * @var \OcPurpletreeVendorPlan
     *
     * @ORM\ManyToOne(targetEntity="OcPurpletreeVendorPlan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plan_id", referencedColumnName="plan_id")
     * })
     */
    private $plan;

    /**
     * @var \OcPurpletreeVendorPlanInvoiceStatus
     *
     * @ORM\ManyToOne(targetEntity="OcPurpletreeVendorPlanInvoiceStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="status_id")
     * })
     */
    private $status;


    /**
     * Get invoiceId.
     *
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorPlanInvoice
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
     * Set paymentMode.
     *
     * @param string $paymentMode
     *
     * @return OcPurpletreeVendorPlanInvoice
     */
    public function setPaymentMode($paymentMode)
    {
        $this->paymentMode = $paymentMode;

        return $this;
    }

    /**
     * Get paymentMode.
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->paymentMode;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime $createdDate
     *
     * @return OcPurpletreeVendorPlanInvoice
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate.
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set plan.
     *
     * @param \OcPurpletreeVendorPlan|null $plan
     *
     * @return OcPurpletreeVendorPlanInvoice
     */
    public function setPlan(\OcPurpletreeVendorPlan $plan = null)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan.
     *
     * @return \OcPurpletreeVendorPlan|null
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set status.
     *
     * @param \OcPurpletreeVendorPlanInvoiceStatus|null $status
     *
     * @return OcPurpletreeVendorPlanInvoice
     */
    public function setStatus(\OcPurpletreeVendorPlanInvoiceStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return \OcPurpletreeVendorPlanInvoiceStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
}
