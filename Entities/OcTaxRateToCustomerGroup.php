<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcTaxRateToCustomerGroup
 *
 * @ORM\Table(name="oc_tax_rate_to_customer_group")
 * @ORM\Entity
 */
class OcTaxRateToCustomerGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="tax_rate_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $taxRateId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerGroupId;


    /**
     * Set taxRateId.
     *
     * @param int $taxRateId
     *
     * @return OcTaxRateToCustomerGroup
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
     * Set customerGroupId.
     *
     * @param int $customerGroupId
     *
     * @return OcTaxRateToCustomerGroup
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId.
     *
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }
}
