<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderRecurring
 *
 * @ORM\Table(name="oc_order_recurring")
 * @ORM\Entity
 */
class OcOrderRecurring
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_recurring_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderRecurringId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=255, nullable=false)
     */
    private $productName;

    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer", nullable=false)
     */
    private $productQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="recurring_id", type="integer", nullable=false)
     */
    private $recurringId;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_name", type="string", length=255, nullable=false)
     */
    private $recurringName;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_description", type="string", length=255, nullable=false)
     */
    private $recurringDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_frequency", type="string", length=25, nullable=false)
     */
    private $recurringFrequency;

    /**
     * @var int
     *
     * @ORM\Column(name="recurring_cycle", type="smallint", nullable=false)
     */
    private $recurringCycle;

    /**
     * @var int
     *
     * @ORM\Column(name="recurring_duration", type="smallint", nullable=false)
     */
    private $recurringDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $recurringPrice;

    /**
     * @var bool
     *
     * @ORM\Column(name="trial", type="boolean", nullable=false)
     */
    private $trial;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_frequency", type="string", length=25, nullable=false)
     */
    private $trialFrequency;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_cycle", type="smallint", nullable=false)
     */
    private $trialCycle;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_duration", type="smallint", nullable=false)
     */
    private $trialDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $trialPrice;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


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
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcOrderRecurring
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
     * Set reference.
     *
     * @param string $reference
     *
     * @return OcOrderRecurring
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
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcOrderRecurring
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
     * Set productName.
     *
     * @param string $productName
     *
     * @return OcOrderRecurring
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productQuantity.
     *
     * @param int $productQuantity
     *
     * @return OcOrderRecurring
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * Get productQuantity.
     *
     * @return int
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * Set recurringId.
     *
     * @param int $recurringId
     *
     * @return OcOrderRecurring
     */
    public function setRecurringId($recurringId)
    {
        $this->recurringId = $recurringId;

        return $this;
    }

    /**
     * Get recurringId.
     *
     * @return int
     */
    public function getRecurringId()
    {
        return $this->recurringId;
    }

    /**
     * Set recurringName.
     *
     * @param string $recurringName
     *
     * @return OcOrderRecurring
     */
    public function setRecurringName($recurringName)
    {
        $this->recurringName = $recurringName;

        return $this;
    }

    /**
     * Get recurringName.
     *
     * @return string
     */
    public function getRecurringName()
    {
        return $this->recurringName;
    }

    /**
     * Set recurringDescription.
     *
     * @param string $recurringDescription
     *
     * @return OcOrderRecurring
     */
    public function setRecurringDescription($recurringDescription)
    {
        $this->recurringDescription = $recurringDescription;

        return $this;
    }

    /**
     * Get recurringDescription.
     *
     * @return string
     */
    public function getRecurringDescription()
    {
        return $this->recurringDescription;
    }

    /**
     * Set recurringFrequency.
     *
     * @param string $recurringFrequency
     *
     * @return OcOrderRecurring
     */
    public function setRecurringFrequency($recurringFrequency)
    {
        $this->recurringFrequency = $recurringFrequency;

        return $this;
    }

    /**
     * Get recurringFrequency.
     *
     * @return string
     */
    public function getRecurringFrequency()
    {
        return $this->recurringFrequency;
    }

    /**
     * Set recurringCycle.
     *
     * @param int $recurringCycle
     *
     * @return OcOrderRecurring
     */
    public function setRecurringCycle($recurringCycle)
    {
        $this->recurringCycle = $recurringCycle;

        return $this;
    }

    /**
     * Get recurringCycle.
     *
     * @return int
     */
    public function getRecurringCycle()
    {
        return $this->recurringCycle;
    }

    /**
     * Set recurringDuration.
     *
     * @param int $recurringDuration
     *
     * @return OcOrderRecurring
     */
    public function setRecurringDuration($recurringDuration)
    {
        $this->recurringDuration = $recurringDuration;

        return $this;
    }

    /**
     * Get recurringDuration.
     *
     * @return int
     */
    public function getRecurringDuration()
    {
        return $this->recurringDuration;
    }

    /**
     * Set recurringPrice.
     *
     * @param string $recurringPrice
     *
     * @return OcOrderRecurring
     */
    public function setRecurringPrice($recurringPrice)
    {
        $this->recurringPrice = $recurringPrice;

        return $this;
    }

    /**
     * Get recurringPrice.
     *
     * @return string
     */
    public function getRecurringPrice()
    {
        return $this->recurringPrice;
    }

    /**
     * Set trial.
     *
     * @param bool $trial
     *
     * @return OcOrderRecurring
     */
    public function setTrial($trial)
    {
        $this->trial = $trial;

        return $this;
    }

    /**
     * Get trial.
     *
     * @return bool
     */
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Set trialFrequency.
     *
     * @param string $trialFrequency
     *
     * @return OcOrderRecurring
     */
    public function setTrialFrequency($trialFrequency)
    {
        $this->trialFrequency = $trialFrequency;

        return $this;
    }

    /**
     * Get trialFrequency.
     *
     * @return string
     */
    public function getTrialFrequency()
    {
        return $this->trialFrequency;
    }

    /**
     * Set trialCycle.
     *
     * @param int $trialCycle
     *
     * @return OcOrderRecurring
     */
    public function setTrialCycle($trialCycle)
    {
        $this->trialCycle = $trialCycle;

        return $this;
    }

    /**
     * Get trialCycle.
     *
     * @return int
     */
    public function getTrialCycle()
    {
        return $this->trialCycle;
    }

    /**
     * Set trialDuration.
     *
     * @param int $trialDuration
     *
     * @return OcOrderRecurring
     */
    public function setTrialDuration($trialDuration)
    {
        $this->trialDuration = $trialDuration;

        return $this;
    }

    /**
     * Get trialDuration.
     *
     * @return int
     */
    public function getTrialDuration()
    {
        return $this->trialDuration;
    }

    /**
     * Set trialPrice.
     *
     * @param string $trialPrice
     *
     * @return OcOrderRecurring
     */
    public function setTrialPrice($trialPrice)
    {
        $this->trialPrice = $trialPrice;

        return $this;
    }

    /**
     * Get trialPrice.
     *
     * @return string
     */
    public function getTrialPrice()
    {
        return $this->trialPrice;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcOrderRecurring
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcOrderRecurring
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
