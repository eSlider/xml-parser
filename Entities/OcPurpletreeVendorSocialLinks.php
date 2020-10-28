<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorSocialLinks
 *
 * @ORM\Table(name="oc_purpletree_vendor_social_links")
 * @ORM\Entity
 */
class OcPurpletreeVendorSocialLinks
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
     * @var string
     *
     * @ORM\Column(name="facebook_link", type="string", length=255, nullable=false)
     */
    private $facebookLink;

    /**
     * @var string
     *
     * @ORM\Column(name="google_link", type="string", length=255, nullable=false)
     */
    private $googleLink;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram_link", type="string", length=255, nullable=false)
     */
    private $instagramLink;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_link", type="string", length=255, nullable=false)
     */
    private $twitterLink;

    /**
     * @var string
     *
     * @ORM\Column(name="pinterest_link", type="string", length=255, nullable=false)
     */
    private $pinterestLink;

    /**
     * @var string
     *
     * @ORM\Column(name="wesbsite_link", type="string", length=255, nullable=false)
     */
    private $wesbsiteLink;

    /**
     * @var string
     *
     * @ORM\Column(name="whatsapp_link", type="string", length=255, nullable=false)
     */
    private $whatsappLink;


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
     * @return OcPurpletreeVendorSocialLinks
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
     * Set facebookLink.
     *
     * @param string $facebookLink
     *
     * @return OcPurpletreeVendorSocialLinks
     */
    public function setFacebookLink($facebookLink)
    {
        $this->facebookLink = $facebookLink;

        return $this;
    }

    /**
     * Get facebookLink.
     *
     * @return string
     */
    public function getFacebookLink()
    {
        return $this->facebookLink;
    }

    /**
     * Set googleLink.
     *
     * @param string $googleLink
     *
     * @return OcPurpletreeVendorSocialLinks
     */
    public function setGoogleLink($googleLink)
    {
        $this->googleLink = $googleLink;

        return $this;
    }

    /**
     * Get googleLink.
     *
     * @return string
     */
    public function getGoogleLink()
    {
        return $this->googleLink;
    }

    /**
     * Set instagramLink.
     *
     * @param string $instagramLink
     *
     * @return OcPurpletreeVendorSocialLinks
     */
    public function setInstagramLink($instagramLink)
    {
        $this->instagramLink = $instagramLink;

        return $this;
    }

    /**
     * Get instagramLink.
     *
     * @return string
     */
    public function getInstagramLink()
    {
        return $this->instagramLink;
    }

    /**
     * Set twitterLink.
     *
     * @param string $twitterLink
     *
     * @return OcPurpletreeVendorSocialLinks
     */
    public function setTwitterLink($twitterLink)
    {
        $this->twitterLink = $twitterLink;

        return $this;
    }

    /**
     * Get twitterLink.
     *
     * @return string
     */
    public function getTwitterLink()
    {
        return $this->twitterLink;
    }

    /**
     * Set pinterestLink.
     *
     * @param string $pinterestLink
     *
     * @return OcPurpletreeVendorSocialLinks
     */
    public function setPinterestLink($pinterestLink)
    {
        $this->pinterestLink = $pinterestLink;

        return $this;
    }

    /**
     * Get pinterestLink.
     *
     * @return string
     */
    public function getPinterestLink()
    {
        return $this->pinterestLink;
    }

    /**
     * Set wesbsiteLink.
     *
     * @param string $wesbsiteLink
     *
     * @return OcPurpletreeVendorSocialLinks
     */
    public function setWesbsiteLink($wesbsiteLink)
    {
        $this->wesbsiteLink = $wesbsiteLink;

        return $this;
    }

    /**
     * Get wesbsiteLink.
     *
     * @return string
     */
    public function getWesbsiteLink()
    {
        return $this->wesbsiteLink;
    }

    /**
     * Set whatsappLink.
     *
     * @param string $whatsappLink
     *
     * @return OcPurpletreeVendorSocialLinks
     */
    public function setWhatsappLink($whatsappLink)
    {
        $this->whatsappLink = $whatsappLink;

        return $this;
    }

    /**
     * Get whatsappLink.
     *
     * @return string
     */
    public function getWhatsappLink()
    {
        return $this->whatsappLink;
    }
}
