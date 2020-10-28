<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcProductRelated
 *
 * @ORM\Table(name="oc_product_related")
 * @ORM\Entity
 */
class OcProductRelated
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
     * @ORM\Column(name="related_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $relatedId;


    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcProductRelated
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
     * Set relatedId.
     *
     * @param int $relatedId
     *
     * @return OcProductRelated
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;

        return $this;
    }

    /**
     * Get relatedId.
     *
     * @return int
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }
}
