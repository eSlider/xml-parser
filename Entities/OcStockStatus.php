<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcStockStatus
 *
 * @ORM\Table(name="oc_stock_status")
 * @ORM\Entity
 */
class OcStockStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="stock_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stockStatusId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;


    /**
     * Set stockStatusId.
     *
     * @param int $stockStatusId
     *
     * @return OcStockStatus
     */
    public function setStockStatusId($stockStatusId)
    {
        $this->stockStatusId = $stockStatusId;

        return $this;
    }

    /**
     * Get stockStatusId.
     *
     * @return int
     */
    public function getStockStatusId()
    {
        return $this->stockStatusId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcStockStatus
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId.
     *
     * @return int
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcStockStatus
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
