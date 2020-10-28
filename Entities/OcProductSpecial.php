<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcProductSpecial
 *
 * @ORM\Table(name="oc_product_special", indexes={@ORM\Index(name="product_id", columns={"product_id"})})
 * @ORM\Entity
 */
class OcProductSpecial
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_special_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productSpecialId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     */
    private $customerGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"default"="1"})
     */
    private $priority = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $price = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $dateStart = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $dateEnd = '0000-00-00';


    /**
     * Get productSpecialId.
     *
     * @return int
     */
    public function getProductSpecialId()
    {
        return $this->productSpecialId;
    }

    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcProductSpecial
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

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
     * Set customerGroupId.
     *
     * @param int $customerGroupId
     *
     * @return OcProductSpecial
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId.
     *
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set priority.
     *
     * @param int $priority
     *
     * @return OcProductSpecial
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority.
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return OcProductSpecial
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
     * Set dateStart.
     *
     * @param \DateTime $dateStart
     *
     * @return OcProductSpecial
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart.
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd.
     *
     * @param \DateTime $dateEnd
     *
     * @return OcProductSpecial
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd.
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
}
