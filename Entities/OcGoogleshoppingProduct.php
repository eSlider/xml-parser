<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcGoogleshoppingProduct
 *
 * @ORM\Table(name="oc_googleshopping_product", uniqueConstraints={@ORM\UniqueConstraint(name="product_id_store_id", columns={"product_id", "store_id"})})
 * @ORM\Entity
 */
class OcGoogleshoppingProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_advertise_google_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productAdvertiseGoogleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_issues", type="boolean", nullable=true)
     */
    private $hasIssues;

    /**
     * @var string
     *
     * @ORM\Column(name="destination_status", type="string", length=0, nullable=false, options={"default"="pending"})
     */
    private $destinationStatus = 'pending';

    /**
     * @var int
     *
     * @ORM\Column(name="impressions", type="integer", nullable=false)
     */
    private $impressions = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="clicks", type="integer", nullable=false)
     */
    private $clicks = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="conversions", type="integer", nullable=false)
     */
    private $conversions = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cost = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_value", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $conversionValue = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_product_category", type="string", length=10, nullable=true)
     */
    private $googleProductCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition", type="string", length=0, nullable=true)
     */
    private $condition;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="adult", type="boolean", nullable=true)
     */
    private $adult;

    /**
     * @var int|null
     *
     * @ORM\Column(name="multipack", type="integer", nullable=true)
     */
    private $multipack;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_bundle", type="boolean", nullable=true)
     */
    private $isBundle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age_group", type="string", length=0, nullable=true)
     */
    private $ageGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=0, nullable=true)
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="size_type", type="string", length=0, nullable=true)
     */
    private $sizeType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="size_system", type="string", length=0, nullable=true)
     */
    private $sizeSystem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_modified", type="boolean", nullable=false)
     */
    private $isModified = '0';


    /**
     * Get productAdvertiseGoogleId.
     *
     * @return int
     */
    public function getProductAdvertiseGoogleId()
    {
        return $this->productAdvertiseGoogleId;
    }

    /**
     * Set productId.
     *
     * @param int|null $productId
     *
     * @return OcGoogleshoppingProduct
     */
    public function setProductId($productId = null)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcGoogleshoppingProduct
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
     * Set hasIssues.
     *
     * @param bool|null $hasIssues
     *
     * @return OcGoogleshoppingProduct
     */
    public function setHasIssues($hasIssues = null)
    {
        $this->hasIssues = $hasIssues;

        return $this;
    }

    /**
     * Get hasIssues.
     *
     * @return bool|null
     */
    public function getHasIssues()
    {
        return $this->hasIssues;
    }

    /**
     * Set destinationStatus.
     *
     * @param string $destinationStatus
     *
     * @return OcGoogleshoppingProduct
     */
    public function setDestinationStatus($destinationStatus)
    {
        $this->destinationStatus = $destinationStatus;

        return $this;
    }

    /**
     * Get destinationStatus.
     *
     * @return string
     */
    public function getDestinationStatus()
    {
        return $this->destinationStatus;
    }

    /**
     * Set impressions.
     *
     * @param int $impressions
     *
     * @return OcGoogleshoppingProduct
     */
    public function setImpressions($impressions)
    {
        $this->impressions = $impressions;

        return $this;
    }

    /**
     * Get impressions.
     *
     * @return int
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Set clicks.
     *
     * @param int $clicks
     *
     * @return OcGoogleshoppingProduct
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks.
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set conversions.
     *
     * @param int $conversions
     *
     * @return OcGoogleshoppingProduct
     */
    public function setConversions($conversions)
    {
        $this->conversions = $conversions;

        return $this;
    }

    /**
     * Get conversions.
     *
     * @return int
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Set cost.
     *
     * @param string $cost
     *
     * @return OcGoogleshoppingProduct
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost.
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set conversionValue.
     *
     * @param string $conversionValue
     *
     * @return OcGoogleshoppingProduct
     */
    public function setConversionValue($conversionValue)
    {
        $this->conversionValue = $conversionValue;

        return $this;
    }

    /**
     * Get conversionValue.
     *
     * @return string
     */
    public function getConversionValue()
    {
        return $this->conversionValue;
    }

    /**
     * Set googleProductCategory.
     *
     * @param string|null $googleProductCategory
     *
     * @return OcGoogleshoppingProduct
     */
    public function setGoogleProductCategory($googleProductCategory = null)
    {
        $this->googleProductCategory = $googleProductCategory;

        return $this;
    }

    /**
     * Get googleProductCategory.
     *
     * @return string|null
     */
    public function getGoogleProductCategory()
    {
        return $this->googleProductCategory;
    }

    /**
     * Set condition.
     *
     * @param string|null $condition
     *
     * @return OcGoogleshoppingProduct
     */
    public function setCondition($condition = null)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition.
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set adult.
     *
     * @param bool|null $adult
     *
     * @return OcGoogleshoppingProduct
     */
    public function setAdult($adult = null)
    {
        $this->adult = $adult;

        return $this;
    }

    /**
     * Get adult.
     *
     * @return bool|null
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Set multipack.
     *
     * @param int|null $multipack
     *
     * @return OcGoogleshoppingProduct
     */
    public function setMultipack($multipack = null)
    {
        $this->multipack = $multipack;

        return $this;
    }

    /**
     * Get multipack.
     *
     * @return int|null
     */
    public function getMultipack()
    {
        return $this->multipack;
    }

    /**
     * Set isBundle.
     *
     * @param bool|null $isBundle
     *
     * @return OcGoogleshoppingProduct
     */
    public function setIsBundle($isBundle = null)
    {
        $this->isBundle = $isBundle;

        return $this;
    }

    /**
     * Get isBundle.
     *
     * @return bool|null
     */
    public function getIsBundle()
    {
        return $this->isBundle;
    }

    /**
     * Set ageGroup.
     *
     * @param string|null $ageGroup
     *
     * @return OcGoogleshoppingProduct
     */
    public function setAgeGroup($ageGroup = null)
    {
        $this->ageGroup = $ageGroup;

        return $this;
    }

    /**
     * Get ageGroup.
     *
     * @return string|null
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * Set color.
     *
     * @param int|null $color
     *
     * @return OcGoogleshoppingProduct
     */
    public function setColor($color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color.
     *
     * @return int|null
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set gender.
     *
     * @param string|null $gender
     *
     * @return OcGoogleshoppingProduct
     */
    public function setGender($gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set sizeType.
     *
     * @param string|null $sizeType
     *
     * @return OcGoogleshoppingProduct
     */
    public function setSizeType($sizeType = null)
    {
        $this->sizeType = $sizeType;

        return $this;
    }

    /**
     * Get sizeType.
     *
     * @return string|null
     */
    public function getSizeType()
    {
        return $this->sizeType;
    }

    /**
     * Set sizeSystem.
     *
     * @param string|null $sizeSystem
     *
     * @return OcGoogleshoppingProduct
     */
    public function setSizeSystem($sizeSystem = null)
    {
        $this->sizeSystem = $sizeSystem;

        return $this;
    }

    /**
     * Get sizeSystem.
     *
     * @return string|null
     */
    public function getSizeSystem()
    {
        return $this->sizeSystem;
    }

    /**
     * Set size.
     *
     * @param int|null $size
     *
     * @return OcGoogleshoppingProduct
     */
    public function setSize($size = null)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size.
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set isModified.
     *
     * @param bool $isModified
     *
     * @return OcGoogleshoppingProduct
     */
    public function setIsModified($isModified)
    {
        $this->isModified = $isModified;

        return $this;
    }

    /**
     * Get isModified.
     *
     * @return bool
     */
    public function getIsModified()
    {
        return $this->isModified;
    }
}
