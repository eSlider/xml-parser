<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorTemplateProducts
 *
 * @ORM\Table(name="oc_purpletree_vendor_template_products")
 * @ORM\Entity
 */
class OcPurpletreeVendorTemplateProducts
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
     * @ORM\Column(name="template_id", type="integer", nullable=false)
     */
    private $templateId;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $price = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="stock_status_id", type="integer", nullable=false)
     */
    private $stockStatusId;

    /**
     * @var bool
     *
     * @ORM\Column(name="subtract", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subtract = true;

    /**
     * @var string
     *
     * @ORM\Column(name="t_description", type="text", length=65535, nullable=false)
     */
    private $tDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';


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
     * Set templateId.
     *
     * @param int $templateId
     *
     * @return OcPurpletreeVendorTemplateProducts
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * Get templateId.
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorTemplateProducts
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
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return OcPurpletreeVendorTemplateProducts
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
     * Set price.
     *
     * @param string $price
     *
     * @return OcPurpletreeVendorTemplateProducts
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
     * Set stockStatusId.
     *
     * @param int $stockStatusId
     *
     * @return OcPurpletreeVendorTemplateProducts
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
     * Set subtract.
     *
     * @param bool $subtract
     *
     * @return OcPurpletreeVendorTemplateProducts
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
     * Set tDescription.
     *
     * @param string $tDescription
     *
     * @return OcPurpletreeVendorTemplateProducts
     */
    public function setTDescription($tDescription)
    {
        $this->tDescription = $tDescription;

        return $this;
    }

    /**
     * Get tDescription.
     *
     * @return string
     */
    public function getTDescription()
    {
        return $this->tDescription;
    }

    /**
     * Set comment.
     *
     * @param string $comment
     *
     * @return OcPurpletreeVendorTemplateProducts
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcPurpletreeVendorTemplateProducts
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
