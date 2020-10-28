<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcExtensionInstall
 *
 * @ORM\Table(name="oc_extension_install")
 * @ORM\Entity
 */
class OcExtensionInstall
{
    /**
     * @var int
     *
     * @ORM\Column(name="extension_install_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extensionInstallId;

    /**
     * @var int
     *
     * @ORM\Column(name="extension_download_id", type="integer", nullable=false)
     */
    private $extensionDownloadId;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get extensionInstallId.
     *
     * @return int
     */
    public function getExtensionInstallId()
    {
        return $this->extensionInstallId;
    }

    /**
     * Set extensionDownloadId.
     *
     * @param int $extensionDownloadId
     *
     * @return OcExtensionInstall
     */
    public function setExtensionDownloadId($extensionDownloadId)
    {
        $this->extensionDownloadId = $extensionDownloadId;

        return $this;
    }

    /**
     * Get extensionDownloadId.
     *
     * @return int
     */
    public function getExtensionDownloadId()
    {
        return $this->extensionDownloadId;
    }

    /**
     * Set filename.
     *
     * @param string $filename
     *
     * @return OcExtensionInstall
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
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcExtensionInstall
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
