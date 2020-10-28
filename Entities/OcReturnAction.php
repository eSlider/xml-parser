<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnAction
 *
 * @ORM\Table(name="oc_return_action")
 * @ORM\Entity
 */
class OcReturnAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_action_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnActionId;

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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;


    /**
     * Set returnActionId.
     *
     * @param int $returnActionId
     *
     * @return OcReturnAction
     */
    public function setReturnActionId($returnActionId)
    {
        $this->returnActionId = $returnActionId;

        return $this;
    }

    /**
     * Get returnActionId.
     *
     * @return int
     */
    public function getReturnActionId()
    {
        return $this->returnActionId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcReturnAction
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
     * @return OcReturnAction
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
