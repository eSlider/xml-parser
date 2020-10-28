<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcModule
 *
 * @ORM\Table(name="oc_module")
 * @ORM\Entity
 */
class OcModule
{
    /**
     * @var int
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moduleId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="setting", type="text", length=65535, nullable=false)
     */
    private $setting;


    /**
     * Get moduleId.
     *
     * @return int
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcModule
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

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcModule
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

    /**
     * Set setting.
     *
     * @param string $setting
     *
     * @return OcModule
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;

        return $this;
    }

    /**
     * Get setting.
     *
     * @return string
     */
    public function getSetting()
    {
        return $this->setting;
    }
}
