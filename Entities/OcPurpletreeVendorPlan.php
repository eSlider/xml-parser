<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorPlan
 *
 * @ORM\Table(name="oc_purpletree_vendor_plan")
 * @ORM\Entity
 */
class OcPurpletreeVendorPlan
{
    /**
     * @var int
     *
     * @ORM\Column(name="plan_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $planId;

    /**
     * @var int
     *
     * @ORM\Column(name="no_of_product", type="integer", nullable=false)
     */
    private $noOfProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="no_of_featured_product", type="integer", nullable=false)
     */
    private $noOfFeaturedProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="no_of_category_featured_product", type="integer", nullable=false)
     */
    private $noOfCategoryFeaturedProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="featured_store", type="integer", nullable=false)
     */
    private $featuredStore;

    /**
     * @var string
     *
     * @ORM\Column(name="joining_fee", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $joiningFee;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription_price", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $subscriptionPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="validity", type="integer", nullable=false)
     */
    private $validity;

    /**
     * @var int
     *
     * @ORM\Column(name="default_subscription_plan", type="integer", nullable=false)
     */
    private $defaultSubscriptionPlan;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

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
     * Get planId.
     *
     * @return int
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * Set noOfProduct.
     *
     * @param int $noOfProduct
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setNoOfProduct($noOfProduct)
    {
        $this->noOfProduct = $noOfProduct;

        return $this;
    }

    /**
     * Get noOfProduct.
     *
     * @return int
     */
    public function getNoOfProduct()
    {
        return $this->noOfProduct;
    }

    /**
     * Set noOfFeaturedProduct.
     *
     * @param int $noOfFeaturedProduct
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setNoOfFeaturedProduct($noOfFeaturedProduct)
    {
        $this->noOfFeaturedProduct = $noOfFeaturedProduct;

        return $this;
    }

    /**
     * Get noOfFeaturedProduct.
     *
     * @return int
     */
    public function getNoOfFeaturedProduct()
    {
        return $this->noOfFeaturedProduct;
    }

    /**
     * Set noOfCategoryFeaturedProduct.
     *
     * @param int $noOfCategoryFeaturedProduct
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setNoOfCategoryFeaturedProduct($noOfCategoryFeaturedProduct)
    {
        $this->noOfCategoryFeaturedProduct = $noOfCategoryFeaturedProduct;

        return $this;
    }

    /**
     * Get noOfCategoryFeaturedProduct.
     *
     * @return int
     */
    public function getNoOfCategoryFeaturedProduct()
    {
        return $this->noOfCategoryFeaturedProduct;
    }

    /**
     * Set featuredStore.
     *
     * @param int $featuredStore
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setFeaturedStore($featuredStore)
    {
        $this->featuredStore = $featuredStore;

        return $this;
    }

    /**
     * Get featuredStore.
     *
     * @return int
     */
    public function getFeaturedStore()
    {
        return $this->featuredStore;
    }

    /**
     * Set joiningFee.
     *
     * @param string $joiningFee
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setJoiningFee($joiningFee)
    {
        $this->joiningFee = $joiningFee;

        return $this;
    }

    /**
     * Get joiningFee.
     *
     * @return string
     */
    public function getJoiningFee()
    {
        return $this->joiningFee;
    }

    /**
     * Set subscriptionPrice.
     *
     * @param string $subscriptionPrice
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setSubscriptionPrice($subscriptionPrice)
    {
        $this->subscriptionPrice = $subscriptionPrice;

        return $this;
    }

    /**
     * Get subscriptionPrice.
     *
     * @return string
     */
    public function getSubscriptionPrice()
    {
        return $this->subscriptionPrice;
    }

    /**
     * Set validity.
     *
     * @param int $validity
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setValidity($validity)
    {
        $this->validity = $validity;

        return $this;
    }

    /**
     * Get validity.
     *
     * @return int
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Set defaultSubscriptionPlan.
     *
     * @param int $defaultSubscriptionPlan
     *
     * @return OcPurpletreeVendorPlan
     */
    public function setDefaultSubscriptionPlan($defaultSubscriptionPlan)
    {
        $this->defaultSubscriptionPlan = $defaultSubscriptionPlan;

        return $this;
    }

    /**
     * Get defaultSubscriptionPlan.
     *
     * @return int
     */
    public function getDefaultSubscriptionPlan()
    {
        return $this->defaultSubscriptionPlan;
    }

    /**
     * Set status.
     *
     * @param int $status
     *
     * @return OcPurpletreeVendorPlan
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
     * Set createdDate.
     *
     * @param \DateTime $createdDate
     *
     * @return OcPurpletreeVendorPlan
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
     * @return OcPurpletreeVendorPlan
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
}
