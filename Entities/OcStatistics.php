<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcStatistics
 *
 * @ORM\Table(name="oc_statistics")
 * @ORM\Entity
 */
class OcStatistics
{
    /**
     * @var int
     *
     * @ORM\Column(name="statistics_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statisticsId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=64, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $value;


    /**
     * Get statisticsId.
     *
     * @return int
     */
    public function getStatisticsId()
    {
        return $this->statisticsId;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcStatistics
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
     * Set value.
     *
     * @param string $value
     *
     * @return OcStatistics
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
