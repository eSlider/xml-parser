<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcTheme
 *
 * @ORM\Table(name="oc_theme")
 * @ORM\Entity
 */
class OcTheme
{
    /**
     * @var int
     *
     * @ORM\Column(name="theme_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $themeId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=64, nullable=false)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=64, nullable=false)
     */
    private $route;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", length=16777215, nullable=false)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get themeId.
     *
     * @return int
     */
    public function getThemeId()
    {
        return $this->themeId;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcTheme
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
     * Set theme.
     *
     * @param string $theme
     *
     * @return OcTheme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme.
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set route.
     *
     * @param string $route
     *
     * @return OcTheme
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route.
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcTheme
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
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcTheme
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
