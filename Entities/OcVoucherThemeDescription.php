<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcVoucherThemeDescription
 *
 * @ORM\Table(name="oc_voucher_theme_description")
 * @ORM\Entity
 */
class OcVoucherThemeDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="voucher_theme_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $voucherThemeId;

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
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;


    /**
     * Set voucherThemeId.
     *
     * @param int $voucherThemeId
     *
     * @return OcVoucherThemeDescription
     */
    public function setVoucherThemeId($voucherThemeId)
    {
        $this->voucherThemeId = $voucherThemeId;

        return $this;
    }

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
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcVoucherThemeDescription
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
     * @return OcVoucherThemeDescription
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
