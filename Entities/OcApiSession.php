<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcApiSession
 *
 * @ORM\Table(name="oc_api_session")
 * @ORM\Entity
 */
class OcApiSession
{
    /**
     * @var int
     *
     * @ORM\Column(name="api_session_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $apiSessionId;

    /**
     * @var int
     *
     * @ORM\Column(name="api_id", type="integer", nullable=false)
     */
    private $apiId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=32, nullable=false)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;


    /**
     * Get apiSessionId.
     *
     * @return int
     */
    public function getApiSessionId()
    {
        return $this->apiSessionId;
    }

    /**
     * Set apiId.
     *
     * @param int $apiId
     *
     * @return OcApiSession
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
     * Set sessionId.
     *
     * @param string $sessionId
     *
     * @return OcApiSession
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId.
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set ip.
     *
     * @param string $ip
     *
     * @return OcApiSession
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

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcApiSession
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified.
     *
     * @param \DateTime $dateModified
     *
     * @return OcApiSession
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified.
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
}
