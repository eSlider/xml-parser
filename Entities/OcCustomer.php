<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomer
 *
 * @ORM\Table(name="oc_customer")
 * @ORM\Entity
 */
class OcCustomer
{
    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     */
    private $customerGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=32, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=32, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=96, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=32, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=32, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=9, nullable=false)
     */
    private $salt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cart", type="text", length=65535, nullable=true)
     */
    private $cart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wishlist", type="text", length=65535, nullable=true)
     */
    private $wishlist;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=false)
     */
    private $newsletter = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="address_id", type="integer", nullable=false)
     */
    private $addressId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="custom_field", type="text", length=65535, nullable=false)
     */
    private $customField;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var bool
     *
     * @ORM\Column(name="safe", type="boolean", nullable=false)
     */
    private $safe;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="text", length=65535, nullable=false)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=40, nullable=false)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


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
     * Set customerGroupId.
     *
     * @param int $customerGroupId
     *
     * @return OcCustomer
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

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcCustomer
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId.
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcCustomer
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId.
     *
     * @return int
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return OcCustomer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string $lastname
     *
     * @return OcCustomer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return OcCustomer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone.
     *
     * @param string $telephone
     *
     * @return OcCustomer
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax.
     *
     * @param string $fax
     *
     * @return OcCustomer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return OcCustomer
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt.
     *
     * @param string $salt
     *
     * @return OcCustomer
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt.
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set cart.
     *
     * @param string|null $cart
     *
     * @return OcCustomer
     */
    public function setCart($cart = null)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart.
     *
     * @return string|null
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set wishlist.
     *
     * @param string|null $wishlist
     *
     * @return OcCustomer
     */
    public function setWishlist($wishlist = null)
    {
        $this->wishlist = $wishlist;

        return $this;
    }

    /**
     * Get wishlist.
     *
     * @return string|null
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }

    /**
     * Set newsletter.
     *
     * @param bool $newsletter
     *
     * @return OcCustomer
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter.
     *
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set addressId.
     *
     * @param int $addressId
     *
     * @return OcCustomer
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId.
     *
     * @return int
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set customField.
     *
     * @param string $customField
     *
     * @return OcCustomer
     */
    public function setCustomField($customField)
    {
        $this->customField = $customField;

        return $this;
    }

    /**
     * Get customField.
     *
     * @return string
     */
    public function getCustomField()
    {
        return $this->customField;
    }

    /**
     * Set ip.
     *
     * @param string $ip
     *
     * @return OcCustomer
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
     * Set status.
     *
     * @param bool $status
     *
     * @return OcCustomer
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set safe.
     *
     * @param bool $safe
     *
     * @return OcCustomer
     */
    public function setSafe($safe)
    {
        $this->safe = $safe;

        return $this;
    }

    /**
     * Get safe.
     *
     * @return bool
     */
    public function getSafe()
    {
        return $this->safe;
    }

    /**
     * Set token.
     *
     * @param string $token
     *
     * @return OcCustomer
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcCustomer
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
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcCustomer
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
}
