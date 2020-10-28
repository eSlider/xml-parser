<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnStatus
 *
 * @ORM\Table(name="oc_return_status")
 * @ORM\Entity
 */
class OcReturnStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnStatusId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;


    /**
     * Set returnStatusId.
     *
     * @param int $returnStatusId
     *
     * @return OcReturnStatus
     */
    public function setReturnStatusId($returnStatusId)
    {
        $this->returnStatusId = $returnStatusId;

        return $this;
    }

    /**
     * Get returnStatusId.
     *
     * @return int
     */
    public function getReturnStatusId()
    {
        return $this->returnStatusId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcReturnStatus
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
     * @return OcReturnStatus
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
