<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcLayout
 *
 * @ORM\Table(name="oc_layout")
 * @ORM\Entity
 */
class OcLayout
{
    /**
     * @var int
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $layoutId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;


    /**
     * Get layoutId.
     *
     * @return int
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcLayout
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
