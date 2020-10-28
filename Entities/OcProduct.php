<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcProduct
 *
 * @ORM\Table(name="oc_product")
 * @ORM\Entity
 */
class OcProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="metal", type="integer", nullable=false)
     */
    private $metal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=64, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=64, nullable=false)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="upc", type="string", length=12, nullable=false)
     */
    private $upc;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=14, nullable=false)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="jan", type="string", length=13, nullable=false)
     */
    private $jan;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=17, nullable=false)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="mpn", type="string", length=64, nullable=false)
     */
    private $mpn;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=128, nullable=false)
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="stock_status_id", type="integer", nullable=false)
     */
    private $stockStatusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturer_id", type="integer", nullable=false)
     */
    private $manufacturerId;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping", type="boolean", nullable=false, options={"default"="1"})
     */
    private $shipping = true;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $price = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="price_extra_type", type="integer", nullable=false)
     */
    private $priceExtraType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="price_extra", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $priceExtra = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tax_class_id", type="integer", nullable=false)
     */
    private $taxClassId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_available", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $dateAvailable = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $weight = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="weight_class_id", type="integer", nullable=false)
     */
    private $weightClassId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $length = '0.00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $width = '0.00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $height = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="length_class_id", type="integer", nullable=false)
     */
    private $lengthClassId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="subtract", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subtract = true;

    /**
     * @var int
     *
     * @ORM\Column(name="minimum", type="integer", nullable=false, options={"default"="1"})
     */
    private $minimum = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="viewed", type="integer", nullable=false)
     */
    private $viewed = '0';

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
     * Get productId.
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set metal.
     *
     * @param int $metal
     *
     * @return OcProduct
     */
    public function setMetal($metal)
    {
        $this->metal = $metal;

        return $this;
    }

    /**
     * Get metal.
     *
     * @return int
     */
    public function getMetal()
    {
        return $this->metal;
    }

    /**
     * Set model.
     *
     * @param string $model
     *
     * @return OcProduct
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set sku.
     *
     * @param string $sku
     *
     * @return OcProduct
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set upc.
     *
     * @param string $upc
     *
     * @return OcProduct
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Get upc.
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * Set ean.
     *
     * @param string $ean
     *
     * @return OcProduct
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean.
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set jan.
     *
     * @param string $jan
     *
     * @return OcProduct
     */
    public function setJan($jan)
    {
        $this->jan = $jan;

        return $this;
    }

    /**
     * Get jan.
     *
     * @return string
     */
    public function getJan()
    {
        return $this->jan;
    }

    /**
     * Set isbn.
     *
     * @param string $isbn
     *
     * @return OcProduct
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn.
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set mpn.
     *
     * @param string $mpn
     *
     * @return OcProduct
     */
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Get mpn.
     *
     * @return string
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Set location.
     *
     * @param string $location
     *
     * @return OcProduct
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return OcProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set stockStatusId.
     *
     * @param int $stockStatusId
     *
     * @return OcProduct
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
     * Set image.
     *
     * @param string|null $image
     *
     * @return OcProduct
     */
    public function setImage($image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set manufacturerId.
     *
     * @param int $manufacturerId
     *
     * @return OcProduct
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId.
     *
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set shipping.
     *
     * @param bool $shipping
     *
     * @return OcProduct
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return bool
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return OcProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceExtraType.
     *
     * @param int $priceExtraType
     *
     * @return OcProduct
     */
    public function setPriceExtraType($priceExtraType)
    {
        $this->priceExtraType = $priceExtraType;

        return $this;
    }

    /**
     * Get priceExtraType.
     *
     * @return int
     */
    public function getPriceExtraType()
    {
        return $this->priceExtraType;
    }

    /**
     * Set priceExtra.
     *
     * @param string $priceExtra
     *
     * @return OcProduct
     */
    public function setPriceExtra($priceExtra)
    {
        $this->priceExtra = $priceExtra;

        return $this;
    }

    /**
     * Get priceExtra.
     *
     * @return string
     */
    public function getPriceExtra()
    {
        return $this->priceExtra;
    }

    /**
     * Set points.
     *
     * @param int $points
     *
     * @return OcProduct
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points.
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set taxClassId.
     *
     * @param int $taxClassId
     *
     * @return OcProduct
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId.
     *
     * @return int
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set dateAvailable.
     *
     * @param \DateTime $dateAvailable
     *
     * @return OcProduct
     */
    public function setDateAvailable($dateAvailable)
    {
        $this->dateAvailable = $dateAvailable;

        return $this;
    }

    /**
     * Get dateAvailable.
     *
     * @return \DateTime
     */
    public function getDateAvailable()
    {
        return $this->dateAvailable;
    }

    /**
     * Set weight.
     *
     * @param string $weight
     *
     * @return OcProduct
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight.
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set weightClassId.
     *
     * @param int $weightClassId
     *
     * @return OcProduct
     */
    public function setWeightClassId($weightClassId)
    {
        $this->weightClassId = $weightClassId;

        return $this;
    }

    /**
     * Get weightClassId.
     *
     * @return int
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }

    /**
     * Set length.
     *
     * @param string $length
     *
     * @return OcProduct
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length.
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set width.
     *
     * @param string $width
     *
     * @return OcProduct
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width.
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height.
     *
     * @param string $height
     *
     * @return OcProduct
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height.
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set lengthClassId.
     *
     * @param int $lengthClassId
     *
     * @return OcProduct
     */
    public function setLengthClassId($lengthClassId)
    {
        $this->lengthClassId = $lengthClassId;

        return $this;
    }

    /**
     * Get lengthClassId.
     *
     * @return int
     */
    public function getLengthClassId()
    {
        return $this->lengthClassId;
    }

    /**
     * Set subtract.
     *
     * @param bool $subtract
     *
     * @return OcProduct
     */
    public function setSubtract($subtract)
    {
        $this->subtract = $subtract;

        return $this;
    }

    /**
     * Get subtract.
     *
     * @return bool
     */
    public function getSubtract()
    {
        return $this->subtract;
    }

    /**
     * Set minimum.
     *
     * @param int $minimum
     *
     * @return OcProduct
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * Get minimum.
     *
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcProduct
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

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcProduct
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

    /**
     * Set viewed.
     *
     * @param int $viewed
     *
     * @return OcProduct
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed.
     *
     * @return int
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcProduct
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
     * @return OcProduct
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
