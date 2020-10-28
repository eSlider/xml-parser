<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcLayoutModule
 *
 * @ORM\Table(name="oc_layout_module")
 * @ORM\Entity
 */
class OcLayoutModule
{
    /**
     * @var int
     *
     * @ORM\Column(name="layout_module_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $layoutModuleId;

    /**
     * @var int
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=false)
     */
    private $layoutId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=64, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=14, nullable=false)
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;


    /**
     * Get layoutModuleId.
     *
     * @return int
     */
    public function getLayoutModuleId()
    {
        return $this->layoutModuleId;
    }

    /**
     * Set layoutId.
     *
     * @param int $layoutId
     *
     * @return OcLayoutModule
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

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcLayoutModule
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set position.
     *
     * @param string $position
     *
     * @return OcLayoutModule
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcLayoutModule
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
