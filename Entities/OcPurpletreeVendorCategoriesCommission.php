<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorCategoriesCommission
 *
 * @ORM\Table(name="oc_purpletree_vendor_categories_commission")
 * @ORM\Entity
 */
class OcPurpletreeVendorCategoriesCommission
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
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $commission;

    /**
     * @var float
     *
     * @ORM\Column(name="commison_fixed", type="float", precision=10, scale=0, nullable=false)
     */
    private $commisonFixed;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_group", type="integer", nullable=false, options={"default"="1"})
     */
    private $sellerGroup = '1';


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
     * Set categoryId.
     *
     * @param int $categoryId
     *
     * @return OcPurpletreeVendorCategoriesCommission
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId.
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set commission.
     *
     * @param string $commission
     *
     * @return OcPurpletreeVendorCategoriesCommission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission.
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set commisonFixed.
     *
     * @param float $commisonFixed
     *
     * @return OcPurpletreeVendorCategoriesCommission
     */
    public function setCommisonFixed($commisonFixed)
    {
        $this->commisonFixed = $commisonFixed;

        return $this;
    }

    /**
     * Get commisonFixed.
     *
     * @return float
     */
    public function getCommisonFixed()
    {
        return $this->commisonFixed;
    }

    /**
     * Set sellerGroup.
     *
     * @param int $sellerGroup
     *
     * @return OcPurpletreeVendorCategoriesCommission
     */
    public function setSellerGroup($sellerGroup)
    {
        $this->sellerGroup = $sellerGroup;

        return $this;
    }

    /**
     * Get sellerGroup.
     *
     * @return int
     */
    public function getSellerGroup()
    {
        return $this->sellerGroup;
    }
}
