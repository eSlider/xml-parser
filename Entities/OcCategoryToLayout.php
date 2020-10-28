<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCategoryToLayout
 *
 * @ORM\Table(name="oc_category_to_layout")
 * @ORM\Entity
 */
class OcCategoryToLayout
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
     * Set categoryId.
     *
     * @param int $categoryId
     *
     * @return OcCategoryToLayout
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
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcCategoryToLayout
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
     * @return OcCategoryToLayout
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
