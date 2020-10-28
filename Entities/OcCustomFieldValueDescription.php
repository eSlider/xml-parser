<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomFieldValueDescription
 *
 * @ORM\Table(name="oc_custom_field_value_description")
 * @ORM\Entity
 */
class OcCustomFieldValueDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_value_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customFieldValueId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     */
    private $customFieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;


    /**
     * Set customFieldValueId.
     *
     * @param int $customFieldValueId
     *
     * @return OcCustomFieldValueDescription
     */
    public function setCustomFieldValueId($customFieldValueId)
    {
        $this->customFieldValueId = $customFieldValueId;

        return $this;
    }

    /**
     * Get customFieldValueId.
     *
     * @return int
     */
    public function getCustomFieldValueId()
    {
        return $this->customFieldValueId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcCustomFieldValueDescription
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
     * Set customFieldId.
     *
     * @param int $customFieldId
     *
     * @return OcCustomFieldValueDescription
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
     * Set name.
     *
     * @param string $name
     *
     * @return OcCustomFieldValueDescription
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
