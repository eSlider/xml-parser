<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomerSearch
 *
 * @ORM\Table(name="oc_customer_search")
 * @ORM\Entity
 */
class OcCustomerSearch
{
    /**
     * @var int
     *
     * @ORM\Column(name="customer_search_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerSearchId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=255, nullable=false)
     */
    private $keyword;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;

    /**
     * @var bool
     *
     * @ORM\Column(name="sub_category", type="boolean", nullable=false)
     */
    private $subCategory;

    /**
     * @var bool
     *
     * @ORM\Column(name="description", type="boolean", nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="products", type="integer", nullable=false)
     */
    private $products;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get customerSearchId.
     *
     * @return int
     */
    public function getCustomerSearchId()
    {
        return $this->customerSearchId;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcCustomerSearch
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
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcCustomerSearch
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
     * Set customerId.
     *
     * @param int $customerId
     *
     * @return OcCustomerSearch
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId.
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set keyword.
     *
     * @param string $keyword
     *
     * @return OcCustomerSearch
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword.
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set categoryId.
     *
     * @param int|null $categoryId
     *
     * @return OcCustomerSearch
     */
    public function setCategoryId($categoryId = null)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId.
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set subCategory.
     *
     * @param bool $subCategory
     *
     * @return OcCustomerSearch
     */
    public function setSubCategory($subCategory)
    {
        $this->subCategory = $subCategory;

        return $this;
    }

    /**
     * Get subCategory.
     *
     * @return bool
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * Set description.
     *
     * @param bool $description
     *
     * @return OcCustomerSearch
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return bool
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set products.
     *
     * @param int $products
     *
     * @return OcCustomerSearch
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products.
     *
     * @return int
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set ip.
     *
     * @param string $ip
     *
     * @return OcCustomerSearch
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcCustomerSearch
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
}
