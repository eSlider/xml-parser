<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcFilterDescription
 *
 * @ORM\Table(name="oc_filter_description")
 * @ORM\Entity
 */
class OcFilterDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filterId;

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
     * @ORM\Column(name="filter_group_id", type="integer", nullable=false)
     */
    private $filterGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;


    /**
     * Set filterId.
     *
     * @param int $filterId
     *
     * @return OcFilterDescription
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;

        return $this;
    }

    /**
     * Get filterId.
     *
     * @return int
     */
    public function getFilterId()
    {
        return $this->filterId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcFilterDescription
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
     * Set filterGroupId.
     *
     * @param int $filterGroupId
     *
     * @return OcFilterDescription
     */
    public function setFilterGroupId($filterGroupId)
    {
        $this->filterGroupId = $filterGroupId;

        return $this;
    }

    /**
     * Get filterGroupId.
     *
     * @return int
     */
    public function getFilterGroupId()
    {
        return $this->filterGroupId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcFilterDescription
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
