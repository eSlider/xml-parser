<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorSubscriptionProducts
 *
 * @ORM\Table(name="oc_purpletree_vendor_subscription_products")
 * @ORM\Entity
 */
class OcPurpletreeVendorSubscriptionProducts
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
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_plan_id", type="integer", nullable=false)
     */
    private $productPlanId;

    /**
     * @var int
     *
     * @ORM\Column(name="featured_product_plan_id", type="integer", nullable=false)
     */
    private $featuredProductPlanId;

    /**
     * @var string
     *
     * @ORM\Column(name="category_featured_product_plan_id", type="string", length=255, nullable=false)
     */
    private $categoryFeaturedProductPlanId;


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
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcPurpletreeVendorSubscriptionProducts
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
     * Set productPlanId.
     *
     * @param int $productPlanId
     *
     * @return OcPurpletreeVendorSubscriptionProducts
     */
    public function setProductPlanId($productPlanId)
    {
        $this->productPlanId = $productPlanId;

        return $this;
    }

    /**
     * Get productPlanId.
     *
     * @return int
     */
    public function getProductPlanId()
    {
        return $this->productPlanId;
    }

    /**
     * Set featuredProductPlanId.
     *
     * @param int $featuredProductPlanId
     *
     * @return OcPurpletreeVendorSubscriptionProducts
     */
    public function setFeaturedProductPlanId($featuredProductPlanId)
    {
        $this->featuredProductPlanId = $featuredProductPlanId;

        return $this;
    }

    /**
     * Get featuredProductPlanId.
     *
     * @return int
     */
    public function getFeaturedProductPlanId()
    {
        return $this->featuredProductPlanId;
    }

    /**
     * Set categoryFeaturedProductPlanId.
     *
     * @param string $categoryFeaturedProductPlanId
     *
     * @return OcPurpletreeVendorSubscriptionProducts
     */
    public function setCategoryFeaturedProductPlanId($categoryFeaturedProductPlanId)
    {
        $this->categoryFeaturedProductPlanId = $categoryFeaturedProductPlanId;

        return $this;
    }

    /**
     * Get categoryFeaturedProductPlanId.
     *
     * @return string
     */
    public function getCategoryFeaturedProductPlanId()
    {
        return $this->categoryFeaturedProductPlanId;
    }
}
