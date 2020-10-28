<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcGoogleshoppingTarget
 *
 * @ORM\Table(name="oc_googleshopping_target", indexes={@ORM\Index(name="store_id", columns={"store_id"})})
 * @ORM\Entity
 */
class OcGoogleshoppingTarget
{
    /**
     * @var int
     *
     * @ORM\Column(name="advertise_google_target_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $advertiseGoogleTargetId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_name", type="string", length=255, nullable=false)
     */
    private $campaignName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="budget", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $budget = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="feeds", type="text", length=65535, nullable=false)
     */
    private $feeds;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="paused"})
     */
    private $status = 'paused';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_added", type="date", nullable=true)
     */
    private $dateAdded;

    /**
     * @var int
     *
     * @ORM\Column(name="roas", type="integer", nullable=false)
     */
    private $roas = '0';


    /**
     * Get advertiseGoogleTargetId.
     *
     * @return int
     */
    public function getAdvertiseGoogleTargetId()
    {
        return $this->advertiseGoogleTargetId;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcGoogleshoppingTarget
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
     * Set campaignName.
     *
     * @param string $campaignName
     *
     * @return OcGoogleshoppingTarget
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;

        return $this;
    }

    /**
     * Get campaignName.
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * Set country.
     *
     * @param string $country
     *
     * @return OcGoogleshoppingTarget
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set budget.
     *
     * @param string $budget
     *
     * @return OcGoogleshoppingTarget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget.
     *
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set feeds.
     *
     * @param string $feeds
     *
     * @return OcGoogleshoppingTarget
     */
    public function setFeeds($feeds)
    {
        $this->feeds = $feeds;

        return $this;
    }

    /**
     * Get feeds.
     *
     * @return string
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return OcGoogleshoppingTarget
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime|null $dateAdded
     *
     * @return OcGoogleshoppingTarget
     */
    public function setDateAdded($dateAdded = null)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime|null
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set roas.
     *
     * @param int $roas
     *
     * @return OcGoogleshoppingTarget
     */
    public function setRoas($roas)
    {
        $this->roas = $roas;

        return $this;
    }

    /**
     * Get roas.
     *
     * @return int
     */
    public function getRoas()
    {
        return $this->roas;
    }
}
