<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcInformation
 *
 * @ORM\Table(name="oc_information")
 * @ORM\Entity
 */
class OcInformation
{
    /**
     * @var int
     *
     * @ORM\Column(name="information_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $informationId;

    /**
     * @var int
     *
     * @ORM\Column(name="bottom", type="integer", nullable=false)
     */
    private $bottom = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = true;


    /**
     * Get informationId.
     *
     * @return int
     */
    public function getInformationId()
    {
        return $this->informationId;
    }

    /**
     * Set bottom.
     *
     * @param int $bottom
     *
     * @return OcInformation
     */
    public function setBottom($bottom)
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * Get bottom.
     *
     * @return int
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcInformation
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

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcInformation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
}
