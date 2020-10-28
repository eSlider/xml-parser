<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorStores
 *
 * @ORM\Table(name="oc_purpletree_vendor_stores")
 * @ORM\Entity
 */
class OcPurpletreeVendorStores
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
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var string
     *
     * @ORM\Column(name="store_name", type="string", length=256, nullable=false)
     */
    private $storeName;

    /**
     * @var string
     *
     * @ORM\Column(name="store_logo", type="string", length=150, nullable=false)
     */
    private $storeLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="store_email", type="string", length=200, nullable=false)
     */
    private $storeEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="store_phone", type="string", length=32, nullable=false)
     */
    private $storePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="store_banner", type="string", length=150, nullable=false)
     */
    private $storeBanner;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=150, nullable=false)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="store_description", type="text", length=65535, nullable=false)
     */
    private $storeDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="store_address", type="text", length=65535, nullable=false)
     */
    private $storeAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="store_city", type="string", length=200, nullable=false)
     */
    private $storeCity;

    /**
     * @var int
     *
     * @ORM\Column(name="store_country", type="integer", nullable=false)
     */
    private $storeCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="store_state", type="integer", nullable=false)
     */
    private $storeState;

    /**
     * @var string
     *
     * @ORM\Column(name="store_zipcode", type="string", length=11, nullable=false)
     */
    private $storeZipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="store_shipping_policy", type="text", length=65535, nullable=false)
     */
    private $storeShippingPolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="store_return_policy", type="text", length=65535, nullable=false)
     */
    private $storeReturnPolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="store_meta_keywords", type="text", length=65535, nullable=false)
     */
    private $storeMetaKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="store_meta_descriptions", type="text", length=65535, nullable=false)
     */
    private $storeMetaDescriptions;

    /**
     * @var string
     *
     * @ORM\Column(name="store_bank_details", type="string", length=356, nullable=false)
     */
    private $storeBankDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="store_tin", type="string", length=50, nullable=false)
     */
    private $storeTin;

    /**
     * @var string
     *
     * @ORM\Column(name="store_shipping_type", type="string", length=50, nullable=false)
     */
    private $storeShippingType;

    /**
     * @var string
     *
     * @ORM\Column(name="store_shipping_order_type", type="string", length=50, nullable=false)
     */
    private $storeShippingOrderType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="store_shipping_charge", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $storeShippingCharge;

    /**
     * @var bool
     *
     * @ORM\Column(name="store_live_chat_enable", type="boolean", nullable=false)
     */
    private $storeLiveChatEnable;

    /**
     * @var string
     *
     * @ORM\Column(name="store_live_chat_code", type="text", length=65535, nullable=false)
     */
    private $storeLiveChatCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="store_status", type="boolean", nullable=false)
     */
    private $storeStatus;

    /**
     * @var float|null
     *
     * @ORM\Column(name="store_commission", type="float", precision=6, scale=4, nullable=true)
     */
    private $storeCommission;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_removed", type="boolean", nullable=false)
     */
    private $isRemoved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_created_at", type="date", nullable=false)
     */
    private $storeCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_updated_at", type="date", nullable=false)
     */
    private $storeUpdatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="seller_paypal_id", type="string", length=50, nullable=false)
     */
    private $sellerPaypalId;

    /**
     * @var string
     *
     * @ORM\Column(name="store_image", type="string", length=50, nullable=false)
     */
    private $storeImage;

    /**
     * @var string
     *
     * @ORM\Column(name="store_video", type="text", length=65535, nullable=false)
     */
    private $storeVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="google_map", type="text", length=65535, nullable=false)
     */
    private $googleMap;

    /**
     * @var string
     *
     * @ORM\Column(name="google_map_link", type="text", length=65535, nullable=false)
     */
    private $googleMapLink;

    /**
     * @var string
     *
     * @ORM\Column(name="store_timings", type="text", length=65535, nullable=false)
     */
    private $storeTimings;

    /**
     * @var int
     *
     * @ORM\Column(name="multi_store_id", type="integer", nullable=false)
     */
    private $multiStoreId;

    /**
     * @var bool
     *
     * @ORM\Column(name="vacation", type="boolean", nullable=false)
     */
    private $vacation;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;


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
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorStores
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Get sellerId.
     *
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Set storeName.
     *
     * @param string $storeName
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Get storeName.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Set storeLogo.
     *
     * @param string $storeLogo
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreLogo($storeLogo)
    {
        $this->storeLogo = $storeLogo;

        return $this;
    }

    /**
     * Get storeLogo.
     *
     * @return string
     */
    public function getStoreLogo()
    {
        return $this->storeLogo;
    }

    /**
     * Set storeEmail.
     *
     * @param string $storeEmail
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreEmail($storeEmail)
    {
        $this->storeEmail = $storeEmail;

        return $this;
    }

    /**
     * Get storeEmail.
     *
     * @return string
     */
    public function getStoreEmail()
    {
        return $this->storeEmail;
    }

    /**
     * Set storePhone.
     *
     * @param string $storePhone
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStorePhone($storePhone)
    {
        $this->storePhone = $storePhone;

        return $this;
    }

    /**
     * Get storePhone.
     *
     * @return string
     */
    public function getStorePhone()
    {
        return $this->storePhone;
    }

    /**
     * Set storeBanner.
     *
     * @param string $storeBanner
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreBanner($storeBanner)
    {
        $this->storeBanner = $storeBanner;

        return $this;
    }

    /**
     * Get storeBanner.
     *
     * @return string
     */
    public function getStoreBanner()
    {
        return $this->storeBanner;
    }

    /**
     * Set document.
     *
     * @param string $document
     *
     * @return OcPurpletreeVendorStores
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document.
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set storeDescription.
     *
     * @param string $storeDescription
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreDescription($storeDescription)
    {
        $this->storeDescription = $storeDescription;

        return $this;
    }

    /**
     * Get storeDescription.
     *
     * @return string
     */
    public function getStoreDescription()
    {
        return $this->storeDescription;
    }

    /**
     * Set storeAddress.
     *
     * @param string $storeAddress
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreAddress($storeAddress)
    {
        $this->storeAddress = $storeAddress;

        return $this;
    }

    /**
     * Get storeAddress.
     *
     * @return string
     */
    public function getStoreAddress()
    {
        return $this->storeAddress;
    }

    /**
     * Set storeCity.
     *
     * @param string $storeCity
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreCity($storeCity)
    {
        $this->storeCity = $storeCity;

        return $this;
    }

    /**
     * Get storeCity.
     *
     * @return string
     */
    public function getStoreCity()
    {
        return $this->storeCity;
    }

    /**
     * Set storeCountry.
     *
     * @param int $storeCountry
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreCountry($storeCountry)
    {
        $this->storeCountry = $storeCountry;

        return $this;
    }

    /**
     * Get storeCountry.
     *
     * @return int
     */
    public function getStoreCountry()
    {
        return $this->storeCountry;
    }

    /**
     * Set storeState.
     *
     * @param int $storeState
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreState($storeState)
    {
        $this->storeState = $storeState;

        return $this;
    }

    /**
     * Get storeState.
     *
     * @return int
     */
    public function getStoreState()
    {
        return $this->storeState;
    }

    /**
     * Set storeZipcode.
     *
     * @param string $storeZipcode
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreZipcode($storeZipcode)
    {
        $this->storeZipcode = $storeZipcode;

        return $this;
    }

    /**
     * Get storeZipcode.
     *
     * @return string
     */
    public function getStoreZipcode()
    {
        return $this->storeZipcode;
    }

    /**
     * Set storeShippingPolicy.
     *
     * @param string $storeShippingPolicy
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreShippingPolicy($storeShippingPolicy)
    {
        $this->storeShippingPolicy = $storeShippingPolicy;

        return $this;
    }

    /**
     * Get storeShippingPolicy.
     *
     * @return string
     */
    public function getStoreShippingPolicy()
    {
        return $this->storeShippingPolicy;
    }

    /**
     * Set storeReturnPolicy.
     *
     * @param string $storeReturnPolicy
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreReturnPolicy($storeReturnPolicy)
    {
        $this->storeReturnPolicy = $storeReturnPolicy;

        return $this;
    }

    /**
     * Get storeReturnPolicy.
     *
     * @return string
     */
    public function getStoreReturnPolicy()
    {
        return $this->storeReturnPolicy;
    }

    /**
     * Set storeMetaKeywords.
     *
     * @param string $storeMetaKeywords
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreMetaKeywords($storeMetaKeywords)
    {
        $this->storeMetaKeywords = $storeMetaKeywords;

        return $this;
    }

    /**
     * Get storeMetaKeywords.
     *
     * @return string
     */
    public function getStoreMetaKeywords()
    {
        return $this->storeMetaKeywords;
    }

    /**
     * Set storeMetaDescriptions.
     *
     * @param string $storeMetaDescriptions
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreMetaDescriptions($storeMetaDescriptions)
    {
        $this->storeMetaDescriptions = $storeMetaDescriptions;

        return $this;
    }

    /**
     * Get storeMetaDescriptions.
     *
     * @return string
     */
    public function getStoreMetaDescriptions()
    {
        return $this->storeMetaDescriptions;
    }

    /**
     * Set storeBankDetails.
     *
     * @param string $storeBankDetails
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreBankDetails($storeBankDetails)
    {
        $this->storeBankDetails = $storeBankDetails;

        return $this;
    }

    /**
     * Get storeBankDetails.
     *
     * @return string
     */
    public function getStoreBankDetails()
    {
        return $this->storeBankDetails;
    }

    /**
     * Set storeTin.
     *
     * @param string $storeTin
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreTin($storeTin)
    {
        $this->storeTin = $storeTin;

        return $this;
    }

    /**
     * Get storeTin.
     *
     * @return string
     */
    public function getStoreTin()
    {
        return $this->storeTin;
    }

    /**
     * Set storeShippingType.
     *
     * @param string $storeShippingType
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreShippingType($storeShippingType)
    {
        $this->storeShippingType = $storeShippingType;

        return $this;
    }

    /**
     * Get storeShippingType.
     *
     * @return string
     */
    public function getStoreShippingType()
    {
        return $this->storeShippingType;
    }

    /**
     * Set storeShippingOrderType.
     *
     * @param string $storeShippingOrderType
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreShippingOrderType($storeShippingOrderType)
    {
        $this->storeShippingOrderType = $storeShippingOrderType;

        return $this;
    }

    /**
     * Get storeShippingOrderType.
     *
     * @return string
     */
    public function getStoreShippingOrderType()
    {
        return $this->storeShippingOrderType;
    }

    /**
     * Set storeShippingCharge.
     *
     * @param string|null $storeShippingCharge
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreShippingCharge($storeShippingCharge = null)
    {
        $this->storeShippingCharge = $storeShippingCharge;

        return $this;
    }

    /**
     * Get storeShippingCharge.
     *
     * @return string|null
     */
    public function getStoreShippingCharge()
    {
        return $this->storeShippingCharge;
    }

    /**
     * Set storeLiveChatEnable.
     *
     * @param bool $storeLiveChatEnable
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreLiveChatEnable($storeLiveChatEnable)
    {
        $this->storeLiveChatEnable = $storeLiveChatEnable;

        return $this;
    }

    /**
     * Get storeLiveChatEnable.
     *
     * @return bool
     */
    public function getStoreLiveChatEnable()
    {
        return $this->storeLiveChatEnable;
    }

    /**
     * Set storeLiveChatCode.
     *
     * @param string $storeLiveChatCode
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreLiveChatCode($storeLiveChatCode)
    {
        $this->storeLiveChatCode = $storeLiveChatCode;

        return $this;
    }

    /**
     * Get storeLiveChatCode.
     *
     * @return string
     */
    public function getStoreLiveChatCode()
    {
        return $this->storeLiveChatCode;
    }

    /**
     * Set storeStatus.
     *
     * @param bool $storeStatus
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreStatus($storeStatus)
    {
        $this->storeStatus = $storeStatus;

        return $this;
    }

    /**
     * Get storeStatus.
     *
     * @return bool
     */
    public function getStoreStatus()
    {
        return $this->storeStatus;
    }

    /**
     * Set storeCommission.
     *
     * @param float|null $storeCommission
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreCommission($storeCommission = null)
    {
        $this->storeCommission = $storeCommission;

        return $this;
    }

    /**
     * Get storeCommission.
     *
     * @return float|null
     */
    public function getStoreCommission()
    {
        return $this->storeCommission;
    }

    /**
     * Set isRemoved.
     *
     * @param bool $isRemoved
     *
     * @return OcPurpletreeVendorStores
     */
    public function setIsRemoved($isRemoved)
    {
        $this->isRemoved = $isRemoved;

        return $this;
    }

    /**
     * Get isRemoved.
     *
     * @return bool
     */
    public function getIsRemoved()
    {
        return $this->isRemoved;
    }

    /**
     * Set storeCreatedAt.
     *
     * @param \DateTime $storeCreatedAt
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreCreatedAt($storeCreatedAt)
    {
        $this->storeCreatedAt = $storeCreatedAt;

        return $this;
    }

    /**
     * Get storeCreatedAt.
     *
     * @return \DateTime
     */
    public function getStoreCreatedAt()
    {
        return $this->storeCreatedAt;
    }

    /**
     * Set storeUpdatedAt.
     *
     * @param \DateTime $storeUpdatedAt
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreUpdatedAt($storeUpdatedAt)
    {
        $this->storeUpdatedAt = $storeUpdatedAt;

        return $this;
    }

    /**
     * Get storeUpdatedAt.
     *
     * @return \DateTime
     */
    public function getStoreUpdatedAt()
    {
        return $this->storeUpdatedAt;
    }

    /**
     * Set sellerPaypalId.
     *
     * @param string $sellerPaypalId
     *
     * @return OcPurpletreeVendorStores
     */
    public function setSellerPaypalId($sellerPaypalId)
    {
        $this->sellerPaypalId = $sellerPaypalId;

        return $this;
    }

    /**
     * Get sellerPaypalId.
     *
     * @return string
     */
    public function getSellerPaypalId()
    {
        return $this->sellerPaypalId;
    }

    /**
     * Set storeImage.
     *
     * @param string $storeImage
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreImage($storeImage)
    {
        $this->storeImage = $storeImage;

        return $this;
    }

    /**
     * Get storeImage.
     *
     * @return string
     */
    public function getStoreImage()
    {
        return $this->storeImage;
    }

    /**
     * Set storeVideo.
     *
     * @param string $storeVideo
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreVideo($storeVideo)
    {
        $this->storeVideo = $storeVideo;

        return $this;
    }

    /**
     * Get storeVideo.
     *
     * @return string
     */
    public function getStoreVideo()
    {
        return $this->storeVideo;
    }

    /**
     * Set googleMap.
     *
     * @param string $googleMap
     *
     * @return OcPurpletreeVendorStores
     */
    public function setGoogleMap($googleMap)
    {
        $this->googleMap = $googleMap;

        return $this;
    }

    /**
     * Get googleMap.
     *
     * @return string
     */
    public function getGoogleMap()
    {
        return $this->googleMap;
    }

    /**
     * Set googleMapLink.
     *
     * @param string $googleMapLink
     *
     * @return OcPurpletreeVendorStores
     */
    public function setGoogleMapLink($googleMapLink)
    {
        $this->googleMapLink = $googleMapLink;

        return $this;
    }

    /**
     * Get googleMapLink.
     *
     * @return string
     */
    public function getGoogleMapLink()
    {
        return $this->googleMapLink;
    }

    /**
     * Set storeTimings.
     *
     * @param string $storeTimings
     *
     * @return OcPurpletreeVendorStores
     */
    public function setStoreTimings($storeTimings)
    {
        $this->storeTimings = $storeTimings;

        return $this;
    }

    /**
     * Get storeTimings.
     *
     * @return string
     */
    public function getStoreTimings()
    {
        return $this->storeTimings;
    }

    /**
     * Set multiStoreId.
     *
     * @param int $multiStoreId
     *
     * @return OcPurpletreeVendorStores
     */
    public function setMultiStoreId($multiStoreId)
    {
        $this->multiStoreId = $multiStoreId;

        return $this;
    }

    /**
     * Get multiStoreId.
     *
     * @return int
     */
    public function getMultiStoreId()
    {
        return $this->multiStoreId;
    }

    /**
     * Set vacation.
     *
     * @param bool $vacation
     *
     * @return OcPurpletreeVendorStores
     */
    public function setVacation($vacation)
    {
        $this->vacation = $vacation;

        return $this;
    }

    /**
     * Get vacation.
     *
     * @return bool
     */
    public function getVacation()
    {
        return $this->vacation;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcPurpletreeVendorStores
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
