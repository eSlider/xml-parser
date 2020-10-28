<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcRecurring
 *
 * @ORM\Table(name="oc_recurring")
 * @ORM\Entity
 */
class OcRecurring
{
    /**
     * @var int
     *
     * @ORM\Column(name="recurring_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recurringId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="frequency", type="string", length=0, nullable=false)
     */
    private $frequency;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $duration;

    /**
     * @var int
     *
     * @ORM\Column(name="cycle", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cycle;

    /**
     * @var bool
     *
     * @ORM\Column(name="trial_status", type="boolean", nullable=false)
     */
    private $trialStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $trialPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_frequency", type="string", length=0, nullable=false)
     */
    private $trialFrequency;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_duration", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trialDuration;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_cycle", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trialCycle;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;


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
     * Set price.
     *
     * @param string $price
     *
     * @return OcRecurring
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set frequency.
     *
     * @param string $frequency
     *
     * @return OcRecurring
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set duration.
     *
     * @param int $duration
     *
     * @return OcRecurring
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set cycle.
     *
     * @param int $cycle
     *
     * @return OcRecurring
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle.
     *
     * @return int
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set trialStatus.
     *
     * @param bool $trialStatus
     *
     * @return OcRecurring
     */
    public function setTrialStatus($trialStatus)
    {
        $this->trialStatus = $trialStatus;

        return $this;
    }

    /**
     * Get trialStatus.
     *
     * @return bool
     */
    public function getTrialStatus()
    {
        return $this->trialStatus;
    }

    /**
     * Set trialPrice.
     *
     * @param string $trialPrice
     *
     * @return OcRecurring
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
     * Set trialFrequency.
     *
     * @param string $trialFrequency
     *
     * @return OcRecurring
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
     * Set trialDuration.
     *
     * @param int $trialDuration
     *
     * @return OcRecurring
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
     * Set trialCycle.
     *
     * @param int $trialCycle
     *
     * @return OcRecurring
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
     * Set status.
     *
     * @param bool $status
     *
     * @return OcRecurring
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
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcRecurring
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}
