<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcExtensionPath
 *
 * @ORM\Table(name="oc_extension_path")
 * @ORM\Entity
 */
class OcExtensionPath
{
    /**
     * @var int
     *
     * @ORM\Column(name="extension_path_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extensionPathId;

    /**
     * @var int
     *
     * @ORM\Column(name="extension_install_id", type="integer", nullable=false)
     */
    private $extensionInstallId;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get extensionPathId.
     *
     * @return int
     */
    public function getExtensionPathId()
    {
        return $this->extensionPathId;
    }

    /**
     * Set extensionInstallId.
     *
     * @param int $extensionInstallId
     *
     * @return OcExtensionPath
     */
    public function setExtensionInstallId($extensionInstallId)
    {
        $this->extensionInstallId = $extensionInstallId;

        return $this;
    }

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
     * Set path.
     *
     * @param string $path
     *
     * @return OcExtensionPath
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcExtensionPath
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
