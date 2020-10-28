<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorEnquiries
 *
 * @ORM\Table(name="oc_purpletree_vendor_enquiries")
 * @ORM\Entity
 */
class OcPurpletreeVendorEnquiries
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_from", type="integer", nullable=false)
     */
    private $contactFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=3000, nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="seen", type="integer", nullable=false, options={"default"="1"})
     */
    private $seen = '1';


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sellerId.
     *
     * @param int $sellerId
     *
     * @return OcPurpletreeVendorEnquiries
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Get sellerId.
     *
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Set contactFrom.
     *
     * @param int $contactFrom
     *
     * @return OcPurpletreeVendorEnquiries
     */
    public function setContactFrom($contactFrom)
    {
        $this->contactFrom = $contactFrom;

        return $this;
    }

    /**
     * Get contactFrom.
     *
     * @return int
     */
    public function getContactFrom()
    {
        return $this->contactFrom;
    }

    /**
     * Set message.
     *
     * @param string $message
     *
     * @return OcPurpletreeVendorEnquiries
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return OcPurpletreeVendorEnquiries
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return OcPurpletreeVendorEnquiries
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set seen.
     *
     * @param int $seen
     *
     * @return OcPurpletreeVendorEnquiries
     */
    public function setSeen($seen)
    {
        $this->seen = $seen;

        return $this;
    }

    /**
     * Get seen.
     *
     * @return int
     */
    public function getSeen()
    {
        return $this->seen;
    }
}
