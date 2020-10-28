<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcVoucherTheme
 *
 * @ORM\Table(name="oc_voucher_theme")
 * @ORM\Entity
 */
class OcVoucherTheme
{
    /**
     * @var int
     *
     * @ORM\Column(name="voucher_theme_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voucherThemeId;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;


    /**
     * Get voucherThemeId.
     *
     * @return int
     */
    public function getVoucherThemeId()
    {
        return $this->voucherThemeId;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return OcVoucherTheme
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
}
