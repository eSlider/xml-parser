<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcSeoUrl
 *
 * @ORM\Table(name="oc_seo_url", indexes={@ORM\Index(name="keyword", columns={"keyword"}), @ORM\Index(name="query", columns={"query"})})
 * @ORM\Entity
 */
class OcSeoUrl
{
    /**
     * @var int
     *
     * @ORM\Column(name="seo_url_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seoUrlId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="query", type="string", length=255, nullable=false)
     */
    private $query;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=255, nullable=false)
     */
    private $keyword;


    /**
     * Get seoUrlId.
     *
     * @return int
     */
    public function getSeoUrlId()
    {
        return $this->seoUrlId;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcSeoUrl
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
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcSeoUrl
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
     * Set query.
     *
     * @param string $query
     *
     * @return OcSeoUrl
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query.
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set keyword.
     *
     * @param string $keyword
     *
     * @return OcSeoUrl
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword.
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
}
