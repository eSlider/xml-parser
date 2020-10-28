<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCart
 *
 * @ORM\Table(name="oc_cart", indexes={@ORM\Index(name="cart_id", columns={"api_id", "customer_id", "session_id", "product_id", "recurring_id"})})
 * @ORM\Entity
 */
class OcCart
{
    /**
     * @var int
     *
     * @ORM\Column(name="cart_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cartId;

    /**
     * @var int
     *
     * @ORM\Column(name="api_id", type="integer", nullable=false)
     */
    private $apiId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=32, nullable=false)
     */
    private $sessionId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="recurring_id", type="integer", nullable=false)
     */
    private $recurringId;

    /**
     * @var string
     *
     * @ORM\Column(name="option", type="text", length=65535, nullable=false)
     */
    private $option;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get cartId.
     *
     * @return int
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * Set apiId.
     *
     * @param int $apiId
     *
     * @return OcCart
     */
    public function setApiId($apiId)
    {
        $this->apiId = $apiId;

        return $this;
    }

    /**
     * Get apiId.
     *
     * @return int
     */
    public function getApiId()
    {
        return $this->apiId;
    }

    /**
     * Set customerId.
     *
     * @param int $customerId
     *
     * @return OcCart
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
     * Set sessionId.
     *
     * @param string $sessionId
     *
     * @return OcCart
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId.
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcCart
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
     * Set recurringId.
     *
     * @param int $recurringId
     *
     * @return OcCart
     */
    public function setRecurringId($recurringId)
    {
        $this->recurringId = $recurringId;

        return $this;
    }

    /**
     * Get recurringId.
     *
     * @return int
     */
    public function getRecurringId()
    {
        return $this->recurringId;
    }

    /**
     * Set option.
     *
     * @param string $option
     *
     * @return OcCart
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Get option.
     *
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return OcCart
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
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcCart
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
