<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcLayoutRoute
 *
 * @ORM\Table(name="oc_layout_route")
 * @ORM\Entity
 */
class OcLayoutRoute
{
    /**
     * @var int
     *
     * @ORM\Column(name="layout_route_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $layoutRouteId;

    /**
     * @var int
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=false)
     */
    private $layoutId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=64, nullable=false)
     */
    private $route;


    /**
     * Get layoutRouteId.
     *
     * @return int
     */
    public function getLayoutRouteId()
    {
        return $this->layoutRouteId;
    }

    /**
     * Set layoutId.
     *
     * @param int $layoutId
     *
     * @return OcLayoutRoute
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
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcLayoutRoute
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
     * Set route.
     *
     * @param string $route
     *
     * @return OcLayoutRoute
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route.
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }
}
