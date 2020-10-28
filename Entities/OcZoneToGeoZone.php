<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcZoneToGeoZone
 *
 * @ORM\Table(name="oc_zone_to_geo_zone")
 * @ORM\Entity
 */
class OcZoneToGeoZone
{
    /**
     * @var int
     *
     * @ORM\Column(name="zone_to_geo_zone_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zoneToGeoZoneId;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var int
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=false)
     */
    private $zoneId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="geo_zone_id", type="integer", nullable=false)
     */
    private $geoZoneId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;


    /**
     * Get zoneToGeoZoneId.
     *
     * @return int
     */
    public function getZoneToGeoZoneId()
    {
        return $this->zoneToGeoZoneId;
    }

    /**
     * Set countryId.
     *
     * @param int $countryId
     *
     * @return OcZoneToGeoZone
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId.
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set zoneId.
     *
     * @param int $zoneId
     *
     * @return OcZoneToGeoZone
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId.
     *
     * @return int
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set geoZoneId.
     *
     * @param int $geoZoneId
     *
     * @return OcZoneToGeoZone
     */
    public function setGeoZoneId($geoZoneId)
    {
        $this->geoZoneId = $geoZoneId;

        return $this;
    }

    /**
     * Get geoZoneId.
     *
     * @return int
     */
    public function getGeoZoneId()
    {
        return $this->geoZoneId;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcZoneToGeoZone
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified.
     *
     * @param \DateTime $dateModified
     *
     * @return OcZoneToGeoZone
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified.
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
}
