<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcGoogleshoppingProductStatus
 *
 * @ORM\Table(name="oc_googleshopping_product_status")
 * @ORM\Entity
 */
class OcGoogleshoppingProductStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="product_variation_id", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productVariationId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="destination_statuses", type="text", length=65535, nullable=false)
     */
    private $destinationStatuses;

    /**
     * @var string
     *
     * @ORM\Column(name="data_quality_issues", type="text", length=65535, nullable=false)
     */
    private $dataQualityIssues;

    /**
     * @var string
     *
     * @ORM\Column(name="item_level_issues", type="text", length=65535, nullable=false)
     */
    private $itemLevelIssues;

    /**
     * @var int
     *
     * @ORM\Column(name="google_expiration_date", type="integer", nullable=false)
     */
    private $googleExpirationDate = '0';


    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcGoogleshoppingProductStatus
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
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcGoogleshoppingProductStatus
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
     * Set productVariationId.
     *
     * @param string $productVariationId
     *
     * @return OcGoogleshoppingProductStatus
     */
    public function setProductVariationId($productVariationId)
    {
        $this->productVariationId = $productVariationId;

        return $this;
    }

    /**
     * Get productVariationId.
     *
     * @return string
     */
    public function getProductVariationId()
    {
        return $this->productVariationId;
    }

    /**
     * Set destinationStatuses.
     *
     * @param string $destinationStatuses
     *
     * @return OcGoogleshoppingProductStatus
     */
    public function setDestinationStatuses($destinationStatuses)
    {
        $this->destinationStatuses = $destinationStatuses;

        return $this;
    }

    /**
     * Get destinationStatuses.
     *
     * @return string
     */
    public function getDestinationStatuses()
    {
        return $this->destinationStatuses;
    }

    /**
     * Set dataQualityIssues.
     *
     * @param string $dataQualityIssues
     *
     * @return OcGoogleshoppingProductStatus
     */
    public function setDataQualityIssues($dataQualityIssues)
    {
        $this->dataQualityIssues = $dataQualityIssues;

        return $this;
    }

    /**
     * Get dataQualityIssues.
     *
     * @return string
     */
    public function getDataQualityIssues()
    {
        return $this->dataQualityIssues;
    }

    /**
     * Set itemLevelIssues.
     *
     * @param string $itemLevelIssues
     *
     * @return OcGoogleshoppingProductStatus
     */
    public function setItemLevelIssues($itemLevelIssues)
    {
        $this->itemLevelIssues = $itemLevelIssues;

        return $this;
    }

    /**
     * Get itemLevelIssues.
     *
     * @return string
     */
    public function getItemLevelIssues()
    {
        return $this->itemLevelIssues;
    }

    /**
     * Set googleExpirationDate.
     *
     * @param int $googleExpirationDate
     *
     * @return OcGoogleshoppingProductStatus
     */
    public function setGoogleExpirationDate($googleExpirationDate)
    {
        $this->googleExpirationDate = $googleExpirationDate;

        return $this;
    }

    /**
     * Get googleExpirationDate.
     *
     * @return int
     */
    public function getGoogleExpirationDate()
    {
        return $this->googleExpirationDate;
    }
}
