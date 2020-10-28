<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcDownloadDescription
 *
 * @ORM\Table(name="oc_download_description")
 * @ORM\Entity
 */
class OcDownloadDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="download_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $downloadId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;


    /**
     * Set downloadId.
     *
     * @param int $downloadId
     *
     * @return OcDownloadDescription
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
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcDownloadDescription
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId.
     *
     * @return int
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcDownloadDescription
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
}
