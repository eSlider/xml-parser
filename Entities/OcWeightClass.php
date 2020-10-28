<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcWeightClass
 *
 * @ORM\Table(name="oc_weight_class")
 * @ORM\Entity
 */
class OcWeightClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="weight_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $weightClassId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $value = '0.00000000';


    /**
     * Get weightClassId.
     *
     * @return int
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return OcWeightClass
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
