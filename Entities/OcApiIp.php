<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcApiIp
 *
 * @ORM\Table(name="oc_api_ip")
 * @ORM\Entity
 */
class OcApiIp
{
    /**
     * @var int
     *
     * @ORM\Column(name="api_ip_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $apiIpId;

    /**
     * @var int
     *
     * @ORM\Column(name="api_id", type="integer", nullable=false)
     */
    private $apiId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;


    /**
     * Get apiIpId.
     *
     * @return int
     */
    public function getApiIpId()
    {
        return $this->apiIpId;
    }

    /**
     * Set apiId.
     *
     * @param int $apiId
     *
     * @return OcApiIp
     */
    public function setApiId($apiId)
    {
        $this->apiId = $apiId;

        return $this;
    }

    /**
     * Get apiId.
     *
     * @return int
     */
    public function getApiId()
    {
        return $this->apiId;
    }

    /**
     * Set ip.
     *
     * @param string $ip
     *
     * @return OcApiIp
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}
