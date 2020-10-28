<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorSellerPlan
 *
 * @ORM\Table(name="oc_purpletree_vendor_seller_plan", indexes={@ORM\Index(name="plan_id", columns={"plan_id"})})
 * @ORM\Entity
 */
class OcPurpletreeVendorSellerPlan
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
     * @ORM\Column(name="invoice_id", type="integer", nullable=false)
     */
    private $invoiceId;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var int
     *
     * @ORM\Column(name="reminder", type="integer", nullable=false)
     */
    private $reminder;

    /**
     * @var int
     *
     * @ORM\Column(name="reminder1", type="integer", nullable=false)
     */
    private $reminder1;

    /**
     * @var int
     *
     * @ORM\Column(name="reminder2", type="integer", nullable=false)
     */
    private $reminder2;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="new_status", type="integer", nullable=false)
     */
    private $newStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="new_end_date", type="datetime", nullable=false)
     */
    private $newEndDate;

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
     * @var \OcPurpletreeVendorPlan
     *
     * @ORM\ManyToOne(targetEntity="OcPurpletreeVendorPlan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plan_id", referencedColumnName="plan_id")
     * })
     */
    private $plan;


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
     * Set invoiceId.
     *
     * @param int $invoiceId
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

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
     * @return OcPurpletreeVendorSellerPlan
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
     * Set reminder.
     *
     * @param int $reminder
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;

        return $this;
    }

    /**
     * Get reminder.
     *
     * @return int
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * Set reminder1.
     *
     * @param int $reminder1
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setReminder1($reminder1)
    {
        $this->reminder1 = $reminder1;

        return $this;
    }

    /**
     * Get reminder1.
     *
     * @return int
     */
    public function getReminder1()
    {
        return $this->reminder1;
    }

    /**
     * Set reminder2.
     *
     * @param int $reminder2
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setReminder2($reminder2)
    {
        $this->reminder2 = $reminder2;

        return $this;
    }

    /**
     * Get reminder2.
     *
     * @return int
     */
    public function getReminder2()
    {
        return $this->reminder2;
    }

    /**
     * Set status.
     *
     * @param int $status
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set newStatus.
     *
     * @param int $newStatus
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setNewStatus($newStatus)
    {
        $this->newStatus = $newStatus;

        return $this;
    }

    /**
     * Get newStatus.
     *
     * @return int
     */
    public function getNewStatus()
    {
        return $this->newStatus;
    }

    /**
     * Set startDate.
     *
     * @param \DateTime $startDate
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate.
     *
     * @param \DateTime $endDate
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set newEndDate.
     *
     * @param \DateTime $newEndDate
     *
     * @return OcPurpletreeVendorSellerPlan
     */
    public function setNewEndDate($newEndDate)
    {
        $this->newEndDate = $newEndDate;

        return $this;
    }

    /**
     * Get newEndDate.
     *
     * @return \DateTime
     */
    public function getNewEndDate()
    {
        return $this->newEndDate;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime $createdDate
     *
     * @return OcPurpletreeVendorSellerPlan
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
     * @return OcPurpletreeVendorSellerPlan
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
     * Set plan.
     *
     * @param \OcPurpletreeVendorPlan|null $plan
     *
     * @return OcPurpletreeVendorSellerPlan
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
}
