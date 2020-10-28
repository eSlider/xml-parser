<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcProductToDownload
 *
 * @ORM\Table(name="oc_product_to_download")
 * @ORM\Entity
 */
class OcProductToDownload
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="download_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $downloadId;


    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return OcProductToDownload
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
     * Set downloadId.
     *
     * @param int $downloadId
     *
     * @return OcProductToDownload
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;

        return $this;
    }

    /**
     * Get downloadId.
     *
     * @return int
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }
}
