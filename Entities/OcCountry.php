<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCountry
 *
 * @ORM\Table(name="oc_country")
 * @ORM\Entity
 */
class OcCountry
{
    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_2", type="string", length=2, nullable=false)
     */
    private $isoCode2;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_3", type="string", length=3, nullable=false)
     */
    private $isoCode3;

    /**
     * @var string
     *
     * @ORM\Column(name="address_format", type="text", length=65535, nullable=false)
     */
    private $addressFormat;

    /**
     * @var bool
     *
     * @ORM\Column(name="postcode_required", type="boolean", nullable=false)
     */
    private $postcodeRequired;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = true;


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
     * Set name.
     *
     * @param string $name
     *
     * @return OcCountry
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

    /**
     * Set isoCode2.
     *
     * @param string $isoCode2
     *
     * @return OcCountry
     */
    public function setIsoCode2($isoCode2)
    {
        $this->isoCode2 = $isoCode2;

        return $this;
    }

    /**
     * Get isoCode2.
     *
     * @return string
     */
    public function getIsoCode2()
    {
        return $this->isoCode2;
    }

    /**
     * Set isoCode3.
     *
     * @param string $isoCode3
     *
     * @return OcCountry
     */
    public function setIsoCode3($isoCode3)
    {
        $this->isoCode3 = $isoCode3;

        return $this;
    }

    /**
     * Get isoCode3.
     *
     * @return string
     */
    public function getIsoCode3()
    {
        return $this->isoCode3;
    }

    /**
     * Set addressFormat.
     *
     * @param string $addressFormat
     *
     * @return OcCountry
     */
    public function setAddressFormat($addressFormat)
    {
        $this->addressFormat = $addressFormat;

        return $this;
    }

    /**
     * Get addressFormat.
     *
     * @return string
     */
    public function getAddressFormat()
    {
        return $this->addressFormat;
    }

    /**
     * Set postcodeRequired.
     *
     * @param bool $postcodeRequired
     *
     * @return OcCountry
     */
    public function setPostcodeRequired($postcodeRequired)
    {
        $this->postcodeRequired = $postcodeRequired;

        return $this;
    }

    /**
     * Get postcodeRequired.
     *
     * @return bool
     */
    public function getPostcodeRequired()
    {
        return $this->postcodeRequired;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcCountry
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
