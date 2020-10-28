<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcVoucherHistory
 *
 * @ORM\Table(name="oc_voucher_history")
 * @ORM\Entity
 */
class OcVoucherHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="voucher_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voucherHistoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="voucher_id", type="integer", nullable=false)
     */
    private $voucherId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get voucherHistoryId.
     *
     * @return int
     */
    public function getVoucherHistoryId()
    {
        return $this->voucherHistoryId;
    }

    /**
     * Set voucherId.
     *
     * @param int $voucherId
     *
     * @return OcVoucherHistory
     */
    public function setVoucherId($voucherId)
    {
        $this->voucherId = $voucherId;

        return $this;
    }

    /**
     * Get voucherId.
     *
     * @return int
     */
    public function getVoucherId()
    {
        return $this->voucherId;
    }

    /**
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcVoucherHistory
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
     * Set amount.
     *
     * @param string $amount
     *
     * @return OcVoucherHistory
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

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcVoucherHistory
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
}
