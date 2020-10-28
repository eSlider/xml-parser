<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcModification
 *
 * @ORM\Table(name="oc_modification")
 * @ORM\Entity
 */
class OcModification
{
    /**
     * @var int
     *
     * @ORM\Column(name="modification_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modificationId;

    /**
     * @var int
     *
     * @ORM\Column(name="extension_install_id", type="integer", nullable=false)
     */
    private $extensionInstallId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=64, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=64, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=32, nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="xml", type="text", length=16777215, nullable=false)
     */
    private $xml;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get modificationId.
     *
     * @return int
     */
    public function getModificationId()
    {
        return $this->modificationId;
    }

    /**
     * Set extensionInstallId.
     *
     * @param int $extensionInstallId
     *
     * @return OcModification
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
     * Set name.
     *
     * @param string $name
     *
     * @return OcModification
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcModification
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set author.
     *
     * @param string $author
     *
     * @return OcModification
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set version.
     *
     * @param string $version
     *
     * @return OcModification
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set link.
     *
     * @param string $link
     *
     * @return OcModification
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set xml.
     *
     * @param string $xml
     *
     * @return OcModification
     */
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Get xml.
     *
     * @return string
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcModification
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

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcModification
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
