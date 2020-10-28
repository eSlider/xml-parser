<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorContact
 *
 * @ORM\Table(name="oc_purpletree_vendor_contact")
 * @ORM\Entity
 */
class OcPurpletreeVendorContact
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
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_from", type="integer", nullable=false)
     */
    private $contactFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=150, nullable=false)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=150, nullable=false)
     */
    private $customerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_message", type="text", length=65535, nullable=false)
     */
    private $customerMessage;

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
     * @return OcPurpletreeVendorContact
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
     * Set customerId.
     *
     * @param int $customerId
     *
     * @return OcPurpletreeVendorContact
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId.
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set contactFrom.
     *
     * @param int $contactFrom
     *
     * @return OcPurpletreeVendorContact
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
     * Set customerName.
     *
     * @param string $customerName
     *
     * @return OcPurpletreeVendorContact
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName.
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set customerEmail.
     *
     * @param string $customerEmail
     *
     * @return OcPurpletreeVendorContact
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get customerEmail.
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set customerMessage.
     *
     * @param string $customerMessage
     *
     * @return OcPurpletreeVendorContact
     */
    public function setCustomerMessage($customerMessage)
    {
        $this->customerMessage = $customerMessage;

        return $this;
    }

    /**
     * Get customerMessage.
     *
     * @return string
     */
    public function getCustomerMessage()
    {
        return $this->customerMessage;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return OcPurpletreeVendorContact
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
     * @return OcPurpletreeVendorContact
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
     * @return OcPurpletreeVendorContact
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
