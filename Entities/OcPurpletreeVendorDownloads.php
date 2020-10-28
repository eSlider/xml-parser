<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorDownloads
 *
 * @ORM\Table(name="oc_purpletree_vendor_downloads")
 * @ORM\Entity
 */
class OcPurpletreeVendorDownloads
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
     * @ORM\Column(name="download_id", type="integer", nullable=false)
     */
    private $downloadId;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;


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
     * Set downloadId.
     *
     * @param int $downloadId
     *
     * @return OcPurpletreeVendorDownloads
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

    /**
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorDownloads
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
}
