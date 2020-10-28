<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomFieldDescription
 *
 * @ORM\Table(name="oc_custom_field_description")
 * @ORM\Entity
 */
class OcCustomFieldDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customFieldId;

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
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;


    /**
     * Set customFieldId.
     *
     * @param int $customFieldId
     *
     * @return OcCustomFieldDescription
     */
    public function setCustomFieldId($customFieldId)
    {
        $this->customFieldId = $customFieldId;

        return $this;
    }

    /**
     * Get customFieldId.
     *
     * @return int
     */
    public function getCustomFieldId()
    {
        return $this->customFieldId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcCustomFieldDescription
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
     * @return OcCustomFieldDescription
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
