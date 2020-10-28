<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomerGroup
 *
 * @ORM\Table(name="oc_customer_group")
 * @ORM\Entity
 */
class OcCustomerGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="approval", type="integer", nullable=false)
     */
    private $approval;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;


    /**
     * Get customerGroupId.
     *
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set approval.
     *
     * @param int $approval
     *
     * @return OcCustomerGroup
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;

        return $this;
    }

    /**
     * Get approval.
     *
     * @return int
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcCustomerGroup
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
