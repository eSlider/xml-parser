<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorProducts
 *
 * @ORM\Table(name="oc_purpletree_vendor_products")
 * @ORM\Entity
 */
class OcPurpletreeVendorProducts
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
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="is_featured", type="integer", nullable=false)
     */
    private $isFeatured;

    /**
     * @var int
     *
     * @ORM\Column(name="is_category_featured", type="integer", nullable=false)
     */
    private $isCategoryFeatured;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_address", type="string", length=255, nullable=false)
     */
    private $deliveryAddress;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_approved", type="boolean", nullable=false)
     */
    private $isApproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=false)
     */
    private $updatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="vacation", type="boolean", nullable=false)
     */
    private $vacation;


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
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorProducts
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

    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcPurpletreeVendorProducts
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
     * Set isFeatured.
     *
     * @param int $isFeatured
     *
     * @return OcPurpletreeVendorProducts
     */
    public function setIsFeatured($isFeatured)
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }

    /**
     * Get isFeatured.
     *
     * @return int
     */
    public function getIsFeatured()
    {
        return $this->isFeatured;
    }

    /**
     * Set isCategoryFeatured.
     *
     * @param int $isCategoryFeatured
     *
     * @return OcPurpletreeVendorProducts
     */
    public function setIsCategoryFeatured($isCategoryFeatured)
    {
        $this->isCategoryFeatured = $isCategoryFeatured;

        return $this;
    }

    /**
     * Get isCategoryFeatured.
     *
     * @return int
     */
    public function getIsCategoryFeatured()
    {
        return $this->isCategoryFeatured;
    }

    /**
     * Set deliveryAddress.
     *
     * @param string $deliveryAddress
     *
     * @return OcPurpletreeVendorProducts
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get deliveryAddress.
     *
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set isApproved.
     *
     * @param bool $isApproved
     *
     * @return OcPurpletreeVendorProducts
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    /**
     * Get isApproved.
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return OcPurpletreeVendorProducts
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return OcPurpletreeVendorProducts
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set vacation.
     *
     * @param bool $vacation
     *
     * @return OcPurpletreeVendorProducts
     */
    public function setVacation($vacation)
    {
        $this->vacation = $vacation;

        return $this;
    }

    /**
     * Get vacation.
     *
     * @return bool
     */
    public function getVacation()
    {
        return $this->vacation;
    }
}
