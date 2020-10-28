<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcOptionValueDescription
 *
 * @ORM\Table(name="oc_option_value_description")
 * @ORM\Entity
 */
class OcOptionValueDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="option_value_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $optionValueId;

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
     * @ORM\Column(name="option_id", type="integer", nullable=false)
     */
    private $optionId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;


    /**
     * Set optionValueId.
     *
     * @param int $optionValueId
     *
     * @return OcOptionValueDescription
     */
    public function setOptionValueId($optionValueId)
    {
        $this->optionValueId = $optionValueId;

        return $this;
    }

    /**
     * Get optionValueId.
     *
     * @return int
     */
    public function getOptionValueId()
    {
        return $this->optionValueId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcOptionValueDescription
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
     * Set optionId.
     *
     * @param int $optionId
     *
     * @return OcOptionValueDescription
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get optionId.
     *
     * @return int
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcOptionValueDescription
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
