<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorStoreTime
 *
 * @ORM\Table(name="oc_purpletree_vendor_store_time")
 * @ORM\Entity
 */
class OcPurpletreeVendorStoreTime
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId;

    /**
     * @var int
     *
     * @ORM\Column(name="day_id", type="integer", nullable=false)
     */
    private $dayId;

    /**
     * @var string
     *
     * @ORM\Column(name="day_name", type="string", length=30, nullable=false)
     */
    private $dayName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="open_time", type="time", nullable=false)
     */
    private $openTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="close_time", type="time", nullable=false)
     */
    private $closeTime;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcPurpletreeVendorStoreTime
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
     * Set dayId.
     *
     * @param int $dayId
     *
     * @return OcPurpletreeVendorStoreTime
     */
    public function setDayId($dayId)
    {
        $this->dayId = $dayId;

        return $this;
    }

    /**
     * Get dayId.
     *
     * @return int
     */
    public function getDayId()
    {
        return $this->dayId;
    }

    /**
     * Set dayName.
     *
     * @param string $dayName
     *
     * @return OcPurpletreeVendorStoreTime
     */
    public function setDayName($dayName)
    {
        $this->dayName = $dayName;

        return $this;
    }

    /**
     * Get dayName.
     *
     * @return string
     */
    public function getDayName()
    {
        return $this->dayName;
    }

    /**
     * Set openTime.
     *
     * @param \DateTime $openTime
     *
     * @return OcPurpletreeVendorStoreTime
     */
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;

        return $this;
    }

    /**
     * Get openTime.
     *
     * @return \DateTime
     */
    public function getOpenTime()
    {
        return $this->openTime;
    }

    /**
     * Set closeTime.
     *
     * @param \DateTime $closeTime
     *
     * @return OcPurpletreeVendorStoreTime
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;

        return $this;
    }

    /**
     * Get closeTime.
     *
     * @return \DateTime
     */
    public function getCloseTime()
    {
        return $this->closeTime;
    }
}
