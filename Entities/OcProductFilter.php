<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcProductFilter
 *
 * @ORM\Table(name="oc_product_filter")
 * @ORM\Entity
 */
class OcProductFilter
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
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filterId;


    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcProductFilter
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
     * Set filterId.
     *
     * @param int $filterId
     *
     * @return OcProductFilter
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;

        return $this;
    }

    /**
     * Get filterId.
     *
     * @return int
     */
    public function getFilterId()
    {
        return $this->filterId;
    }
}
