<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcDownload
 *
 * @ORM\Table(name="oc_download")
 * @ORM\Entity
 */
class OcDownload
{
    /**
     * @var int
     *
     * @ORM\Column(name="download_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $downloadId;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=160, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=128, nullable=false)
     */
    private $mask;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


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
     * Set filename.
     *
     * @param string $filename
     *
     * @return OcDownload
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename.
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set mask.
     *
     * @param string $mask
     *
     * @return OcDownload
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask.
     *
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcDownload
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
