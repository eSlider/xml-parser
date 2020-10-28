<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderRecurringTransaction
 *
 * @ORM\Table(name="oc_order_recurring_transaction")
 * @ORM\Entity
 */
class OcOrderRecurringTransaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_recurring_transaction_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderRecurringTransactionId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_recurring_id", type="integer", nullable=false)
     */
    private $orderRecurringId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get orderRecurringTransactionId.
     *
     * @return int
     */
    public function getOrderRecurringTransactionId()
    {
        return $this->orderRecurringTransactionId;
    }

    /**
     * Set orderRecurringId.
     *
     * @param int $orderRecurringId
     *
     * @return OcOrderRecurringTransaction
     */
    public function setOrderRecurringId($orderRecurringId)
    {
        $this->orderRecurringId = $orderRecurringId;

        return $this;
    }

    /**
     * Get orderRecurringId.
     *
     * @return int
     */
    public function getOrderRecurringId()
    {
        return $this->orderRecurringId;
    }

    /**
     * Set reference.
     *
     * @param string $reference
     *
     * @return OcOrderRecurringTransaction
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return OcOrderRecurringTransaction
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set amount.
     *
     * @param string $amount
     *
     * @return OcOrderRecurringTransaction
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
     * @return OcOrderRecurringTransaction
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
