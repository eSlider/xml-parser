<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcInformationToLayout
 *
 * @ORM\Table(name="oc_information_to_layout")
 * @ORM\Entity
 */
class OcInformationToLayout
{
    /**
     * @var int
     *
     * @ORM\Column(name="information_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $informationId;

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
     * Set informationId.
     *
     * @param int $informationId
     *
     * @return OcInformationToLayout
     */
    public function setInformationId($informationId)
    {
        $this->informationId = $informationId;

        return $this;
    }

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
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcInformationToLayout
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
     * @return OcInformationToLayout
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
