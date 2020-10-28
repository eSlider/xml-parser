<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorCoupons
 *
 * @ORM\Table(name="oc_purpletree_vendor_coupons")
 * @ORM\Entity
 */
class OcPurpletreeVendorCoupons
{
    /**
     * @var int
     *
     * @ORM\Column(name="coupon_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $couponId;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;


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
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorCoupons
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Get sellerId.
     *
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }
}
