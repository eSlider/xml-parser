<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorPlanDescription
 *
 * @ORM\Table(name="oc_purpletree_vendor_plan_description", indexes={@ORM\Index(name="plan_id", columns={"plan_id"})})
 * @ORM\Entity
 */
class OcPurpletreeVendorPlanDescription
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
     * @ORM\Column(name="plan_name", type="string", length=30, nullable=false)
     */
    private $planName;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_description", type="text", length=65535, nullable=false)
     */
    private $planDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_short_description", type="text", length=65535, nullable=false)
     */
    private $planShortDescription;

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
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcPurpletreeVendorPlanDescription
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
     * Set planName.
     *
     * @param string $planName
     *
     * @return OcPurpletreeVendorPlanDescription
     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;

        return $this;
    }

    /**
     * Get planName.
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * Set planDescription.
     *
     * @param string $planDescription
     *
     * @return OcPurpletreeVendorPlanDescription
     */
    public function setPlanDescription($planDescription)
    {
        $this->planDescription = $planDescription;

        return $this;
    }

    /**
     * Get planDescription.
     *
     * @return string
     */
    public function getPlanDescription()
    {
        return $this->planDescription;
    }

    /**
     * Set planShortDescription.
     *
     * @param string $planShortDescription
     *
     * @return OcPurpletreeVendorPlanDescription
     */
    public function setPlanShortDescription($planShortDescription)
    {
        $this->planShortDescription = $planShortDescription;

        return $this;
    }

    /**
     * Get planShortDescription.
     *
     * @return string
     */
    public function getPlanShortDescription()
    {
        return $this->planShortDescription;
    }

    /**
     * Set plan.
     *
     * @param \OcPurpletreeVendorPlan|null $plan
     *
     * @return OcPurpletreeVendorPlanDescription
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
