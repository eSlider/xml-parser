<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcInformationToStore
 *
 * @ORM\Table(name="oc_information_to_store")
 * @ORM\Entity
 */
class OcInformationToStore
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
     * Set informationId.
     *
     * @param int $informationId
     *
     * @return OcInformationToStore
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
     * @return OcInformationToStore
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
}
