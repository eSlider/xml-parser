<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorPlanInvoiceHistory
 *
 * @ORM\Table(name="oc_purpletree_vendor_plan_invoice_history", indexes={@ORM\Index(name="invoice_id", columns={"invoice_id"}), @ORM\Index(name="status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class OcPurpletreeVendorPlanInvoiceHistory
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
     * @var string
     *
     * @ORM\Column(name="payment_mode", type="string", length=30, nullable=false)
     */
    private $paymentMode;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_id", type="string", length=30, nullable=false)
     */
    private $transactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_date", type="datetime", nullable=false)
     */
    private $modifiedDate;

    /**
     * @var \OcPurpletreeVendorPlanInvoice
     *
     * @ORM\ManyToOne(targetEntity="OcPurpletreeVendorPlanInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_id", referencedColumnName="invoice_id")
     * })
     */
    private $invoice;

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set paymentMode.
     *
     * @param string $paymentMode
     *
     * @return OcPurpletreeVendorPlanInvoiceHistory
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
     * Set transactionId.
     *
     * @param string $transactionId
     *
     * @return OcPurpletreeVendorPlanInvoiceHistory
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId.
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set comment.
     *
     * @param string $comment
     *
     * @return OcPurpletreeVendorPlanInvoiceHistory
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime $createdDate
     *
     * @return OcPurpletreeVendorPlanInvoiceHistory
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
     * Set modifiedDate.
     *
     * @param \DateTime $modifiedDate
     *
     * @return OcPurpletreeVendorPlanInvoiceHistory
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate.
     *
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * Set invoice.
     *
     * @param \OcPurpletreeVendorPlanInvoice|null $invoice
     *
     * @return OcPurpletreeVendorPlanInvoiceHistory
     */
    public function setInvoice(\OcPurpletreeVendorPlanInvoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice.
     *
     * @return \OcPurpletreeVendorPlanInvoice|null
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set status.
     *
     * @param \OcPurpletreeVendorPlanInvoiceStatus|null $status
     *
     * @return OcPurpletreeVendorPlanInvoiceHistory
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
