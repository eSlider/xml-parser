<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcReturn
 *
 * @ORM\Table(name="oc_return")
 * @ORM\Entity
 */
class OcReturn
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $returnId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=32, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=32, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=96, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=32, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="string", length=255, nullable=false)
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=64, nullable=false)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="opened", type="boolean", nullable=false)
     */
    private $opened;

    /**
     * @var int
     *
     * @ORM\Column(name="return_reason_id", type="integer", nullable=false)
     */
    private $returnReasonId;

    /**
     * @var int
     *
     * @ORM\Column(name="return_action_id", type="integer", nullable=false)
     */
    private $returnActionId;

    /**
     * @var int
     *
     * @ORM\Column(name="return_status_id", type="integer", nullable=false)
     */
    private $returnStatusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ordered", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $dateOrdered = '0000-00-00';

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
     * Get returnId.
     *
     * @return int
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcReturn
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId.
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcReturn
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
     * Set customerId.
     *
     * @param int $customerId
     *
     * @return OcReturn
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
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return OcReturn
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string $lastname
     *
     * @return OcReturn
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return OcReturn
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone.
     *
     * @param string $telephone
     *
     * @return OcReturn
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set product.
     *
     * @param string $product
     *
     * @return OcReturn
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product.
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set model.
     *
     * @param string $model
     *
     * @return OcReturn
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
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return OcReturn
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
     * Set opened.
     *
     * @param bool $opened
     *
     * @return OcReturn
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * Get opened.
     *
     * @return bool
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * Set returnReasonId.
     *
     * @param int $returnReasonId
     *
     * @return OcReturn
     */
    public function setReturnReasonId($returnReasonId)
    {
        $this->returnReasonId = $returnReasonId;

        return $this;
    }

    /**
     * Get returnReasonId.
     *
     * @return int
     */
    public function getReturnReasonId()
    {
        return $this->returnReasonId;
    }

    /**
     * Set returnActionId.
     *
     * @param int $returnActionId
     *
     * @return OcReturn
     */
    public function setReturnActionId($returnActionId)
    {
        $this->returnActionId = $returnActionId;

        return $this;
    }

    /**
     * Get returnActionId.
     *
     * @return int
     */
    public function getReturnActionId()
    {
        return $this->returnActionId;
    }

    /**
     * Set returnStatusId.
     *
     * @param int $returnStatusId
     *
     * @return OcReturn
     */
    public function setReturnStatusId($returnStatusId)
    {
        $this->returnStatusId = $returnStatusId;

        return $this;
    }

    /**
     * Get returnStatusId.
     *
     * @return int
     */
    public function getReturnStatusId()
    {
        return $this->returnStatusId;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return OcReturn
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateOrdered.
     *
     * @param \DateTime $dateOrdered
     *
     * @return OcReturn
     */
    public function setDateOrdered($dateOrdered)
    {
        $this->dateOrdered = $dateOrdered;

        return $this;
    }

    /**
     * Get dateOrdered.
     *
     * @return \DateTime
     */
    public function getDateOrdered()
    {
        return $this->dateOrdered;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcReturn
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
     * @return OcReturn
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
