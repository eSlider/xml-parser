<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCouponProduct
 *
 * @ORM\Table(name="oc_coupon_product")
 * @ORM\Entity
 */
class OcCouponProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="coupon_product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $couponProductId;

    /**
     * @var int
     *
     * @ORM\Column(name="coupon_id", type="integer", nullable=false)
     */
    private $couponId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;


    /**
     * Get couponProductId.
     *
     * @return int
     */
    public function getCouponProductId()
    {
        return $this->couponProductId;
    }

    /**
     * Set couponId.
     *
     * @param int $couponId
     *
     * @return OcCouponProduct
     */
    public function setCouponId($couponId)
    {
        $this->couponId = $couponId;

        return $this;
    }

    /**
     * Get couponId.
     *
     * @return int
     */
    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcCouponProduct
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
}
