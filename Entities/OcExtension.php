<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcExtension
 *
 * @ORM\Table(name="oc_extension")
 * @ORM\Entity
 */
class OcExtension
{
    /**
     * @var int
     *
     * @ORM\Column(name="extension_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extensionId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;


    /**
     * Get extensionId.
     *
     * @return int
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return OcExtension
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcExtension
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
