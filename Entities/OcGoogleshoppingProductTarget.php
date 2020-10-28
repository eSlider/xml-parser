<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcGoogleshoppingProductTarget
 *
 * @ORM\Table(name="oc_googleshopping_product_target")
 * @ORM\Entity
 */
class OcGoogleshoppingProductTarget
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="advertise_google_target_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $advertiseGoogleTargetId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';


    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcGoogleshoppingProductTarget
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
     * Set advertiseGoogleTargetId.
     *
     * @param int $advertiseGoogleTargetId
     *
     * @return OcGoogleshoppingProductTarget
     */
    public function setAdvertiseGoogleTargetId($advertiseGoogleTargetId)
    {
        $this->advertiseGoogleTargetId = $advertiseGoogleTargetId;

        return $this;
    }

    /**
     * Get advertiseGoogleTargetId.
     *
     * @return int
     */
    public function getAdvertiseGoogleTargetId()
    {
        return $this->advertiseGoogleTargetId;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcGoogleshoppingProductTarget
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId.
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
}
