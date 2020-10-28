<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcGoogleshoppingCategory
 *
 * @ORM\Table(name="oc_googleshopping_category", indexes={@ORM\Index(name="category_id_store_id", columns={"category_id", "store_id"})})
 * @ORM\Entity
 */
class OcGoogleshoppingCategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="google_product_category", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $googleProductCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;


    /**
     * Set googleProductCategory.
     *
     * @param string $googleProductCategory
     *
     * @return OcGoogleshoppingCategory
     */
    public function setGoogleProductCategory($googleProductCategory)
    {
        $this->googleProductCategory = $googleProductCategory;

        return $this;
    }

    /**
     * Get googleProductCategory.
     *
     * @return string
     */
    public function getGoogleProductCategory()
    {
        return $this->googleProductCategory;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcGoogleshoppingCategory
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

    /**
     * Set categoryId.
     *
     * @param int $categoryId
     *
     * @return OcGoogleshoppingCategory
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
}
