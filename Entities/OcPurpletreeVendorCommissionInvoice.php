<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorCommissionInvoice
 *
 * @ORM\Table(name="oc_purpletree_vendor_commission_invoice")
 * @ORM\Entity
 */
class OcPurpletreeVendorCommissionInvoice
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
     * @ORM\Column(name="total_amount", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $totalAmount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="total_commission", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $totalCommission = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="total_pay_amount", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $totalPayAmount = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;


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
     * Set totalAmount.
     *
     * @param string $totalAmount
     *
     * @return OcPurpletreeVendorCommissionInvoice
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount.
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Set totalCommission.
     *
     * @param string $totalCommission
     *
     * @return OcPurpletreeVendorCommissionInvoice
     */
    public function setTotalCommission($totalCommission)
    {
        $this->totalCommission = $totalCommission;

        return $this;
    }

    /**
     * Get totalCommission.
     *
     * @return string
     */
    public function getTotalCommission()
    {
        return $this->totalCommission;
    }

    /**
     * Set totalPayAmount.
     *
     * @param string $totalPayAmount
     *
     * @return OcPurpletreeVendorCommissionInvoice
     */
    public function setTotalPayAmount($totalPayAmount)
    {
        $this->totalPayAmount = $totalPayAmount;

        return $this;
    }

    /**
     * Get totalPayAmount.
     *
     * @return string
     */
    public function getTotalPayAmount()
    {
        return $this->totalPayAmount;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return OcPurpletreeVendorCommissionInvoice
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
}
