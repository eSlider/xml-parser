<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorPlanInvoiceStatusLanguge
 *
 * @ORM\Table(name="oc_purpletree_vendor_plan_invoice_status_languge", indexes={@ORM\Index(name="status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class OcPurpletreeVendorPlanInvoiceStatusLanguge
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
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=30, nullable=false)
     */
    private $status;

    /**
     * @var \OcPurpletreeVendorPlanInvoiceStatus
     *
     * @ORM\ManyToOne(targetEntity="OcPurpletreeVendorPlanInvoiceStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="status_id")
     * })
     */
    private $status2;


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
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcPurpletreeVendorPlanInvoiceStatusLanguge
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId.
     *
     * @return int
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return OcPurpletreeVendorPlanInvoiceStatusLanguge
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
     * Set status2.
     *
     * @param \OcPurpletreeVendorPlanInvoiceStatus|null $status2
     *
     * @return OcPurpletreeVendorPlanInvoiceStatusLanguge
     */
    public function setStatus2(\OcPurpletreeVendorPlanInvoiceStatus $status2 = null)
    {
        $this->status2 = $status2;

        return $this;
    }

    /**
     * Get status2.
     *
     * @return \OcPurpletreeVendorPlanInvoiceStatus|null
     */
    public function getStatus2()
    {
        return $this->status2;
    }
}
