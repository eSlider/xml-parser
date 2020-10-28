<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcBannerImage
 *
 * @ORM\Table(name="oc_banner_image")
 * @ORM\Entity
 */
class OcBannerImage
{
    /**
     * @var int
     *
     * @ORM\Column(name="banner_image_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bannerImageId;

    /**
     * @var int
     *
     * @ORM\Column(name="banner_id", type="integer", nullable=false)
     */
    private $bannerId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';


    /**
     * Get bannerImageId.
     *
     * @return int
     */
    public function getBannerImageId()
    {
        return $this->bannerImageId;
    }

    /**
     * Set bannerId.
     *
     * @param int $bannerId
     *
     * @return OcBannerImage
     */
    public function setBannerId($bannerId)
    {
        $this->bannerId = $bannerId;

        return $this;
    }

    /**
     * Get bannerId.
     *
     * @return int
     */
    public function getBannerId()
    {
        return $this->bannerId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcBannerImage
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
     * Set title.
     *
     * @param string $title
     *
     * @return OcBannerImage
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set link.
     *
     * @param string $link
     *
     * @return OcBannerImage
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
     * Set image.
     *
     * @param string $image
     *
     * @return OcBannerImage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return OcBannerImage
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}
