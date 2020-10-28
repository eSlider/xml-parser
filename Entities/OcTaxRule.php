<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcTaxRule
 *
 * @ORM\Table(name="oc_tax_rule")
 * @ORM\Entity
 */
class OcTaxRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="tax_rule_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taxRuleId;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_class_id", type="integer", nullable=false)
     */
    private $taxClassId;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_rate_id", type="integer", nullable=false)
     */
    private $taxRateId;

    /**
     * @var string
     *
     * @ORM\Column(name="based", type="string", length=10, nullable=false)
     */
    private $based;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"default"="1"})
     */
    private $priority = '1';


    /**
     * Get taxRuleId.
     *
     * @return int
     */
    public function getTaxRuleId()
    {
        return $this->taxRuleId;
    }

    /**
     * Set taxClassId.
     *
     * @param int $taxClassId
     *
     * @return OcTaxRule
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId.
     *
     * @return int
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set taxRateId.
     *
     * @param int $taxRateId
     *
     * @return OcTaxRule
     */
    public function setTaxRateId($taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }

    /**
     * Get taxRateId.
     *
     * @return int
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * Set based.
     *
     * @param string $based
     *
     * @return OcTaxRule
     */
    public function setBased($based)
    {
        $this->based = $based;

        return $this;
    }

    /**
     * Get based.
     *
     * @return string
     */
    public function getBased()
    {
        return $this->based;
    }

    /**
     * Set priority.
     *
     * @param int $priority
     *
     * @return OcTaxRule
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority.
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }
}
