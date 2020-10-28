<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcRecurringDescription
 *
 * @ORM\Table(name="oc_recurring_description")
 * @ORM\Entity
 */
class OcRecurringDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="recurring_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $recurringId;

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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


    /**
     * Set recurringId.
     *
     * @param int $recurringId
     *
     * @return OcRecurringDescription
     */
    public function setRecurringId($recurringId)
    {
        $this->recurringId = $recurringId;

        return $this;
    }

    /**
     * Get recurringId.
     *
     * @return int
     */
    public function getRecurringId()
    {
        return $this->recurringId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcRecurringDescription
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
     * @return OcRecurringDescription
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
