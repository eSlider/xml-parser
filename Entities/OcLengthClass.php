<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcLengthClass
 *
 * @ORM\Table(name="oc_length_class")
 * @ORM\Entity
 */
class OcLengthClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="length_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lengthClassId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=8, nullable=false)
     */
    private $value;


    /**
     * Get lengthClassId.
     *
     * @return int
     */
    public function getLengthClassId()
    {
        return $this->lengthClassId;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return OcLengthClass
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
