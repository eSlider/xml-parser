<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcFilter
 *
 * @ORM\Table(name="oc_filter")
 * @ORM\Entity
 */
class OcFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filterId;

    /**
     * @var int
     *
     * @ORM\Column(name="filter_group_id", type="integer", nullable=false)
     */
    private $filterGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;


    /**
     * Get filterId.
     *
     * @return int
     */
    public function getFilterId()
    {
        return $this->filterId;
    }

    /**
     * Set filterGroupId.
     *
     * @param int $filterGroupId
     *
     * @return OcFilter
     */
    public function setFilterGroupId($filterGroupId)
    {
        $this->filterGroupId = $filterGroupId;

        return $this;
    }

    /**
     * Get filterGroupId.
     *
     * @return int
     */
    public function getFilterGroupId()
    {
        return $this->filterGroupId;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcFilter
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}
