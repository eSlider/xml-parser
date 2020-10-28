<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcProductToLayout
 *
 * @ORM\Table(name="oc_product_to_layout")
 * @ORM\Entity
 */
class OcProductToLayout
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
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId;

    /**
     * @var int
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=false)
     */
    private $layoutId;


    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcProductToLayout
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
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcProductToLayout
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
     * Set layoutId.
     *
     * @param int $layoutId
     *
     * @return OcProductToLayout
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    /**
     * Get layoutId.
     *
     * @return int
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }
}
