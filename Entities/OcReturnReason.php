<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnReason
 *
 * @ORM\Table(name="oc_return_reason")
 * @ORM\Entity
 */
class OcReturnReason
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_reason_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnReasonId;

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
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;


    /**
     * Set returnReasonId.
     *
     * @param int $returnReasonId
     *
     * @return OcReturnReason
     */
    public function setReturnReasonId($returnReasonId)
    {
        $this->returnReasonId = $returnReasonId;

        return $this;
    }

    /**
     * Get returnReasonId.
     *
     * @return int
     */
    public function getReturnReasonId()
    {
        return $this->returnReasonId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcReturnReason
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
     * @return OcReturnReason
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
