<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCategoryFilter
 *
 * @ORM\Table(name="oc_category_filter")
 * @ORM\Entity
 */
class OcCategoryFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filterId;


    /**
     * Set categoryId.
     *
     * @param int $categoryId
     *
     * @return OcCategoryFilter
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
     * Set filterId.
     *
     * @param int $filterId
     *
     * @return OcCategoryFilter
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
