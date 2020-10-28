<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcOrder
 *
 * @ORM\Table(name="oc_order")
 * @ORM\Entity
 */
class OcOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="invoice_no", type="integer", nullable=false)
     */
    private $invoiceNo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_prefix", type="string", length=26, nullable=false)
     */
    private $invoicePrefix;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="store_name", type="string", length=64, nullable=false)
     */
    private $storeName;

    /**
     * @var string
     *
     * @ORM\Column(name="store_url", type="string", length=255, nullable=false)
     */
    private $storeUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     */
    private $customerGroupId = '0';

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
     * @ORM\Column(name="custom_field", type="text", length=65535, nullable=false)
     */
    private $customField;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_firstname", type="string", length=32, nullable=false)
     */
    private $paymentFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_lastname", type="string", length=32, nullable=false)
     */
    private $paymentLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_company", type="string", length=60, nullable=false)
     */
    private $paymentCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_1", type="string", length=128, nullable=false)
     */
    private $paymentAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_2", type="string", length=128, nullable=false)
     */
    private $paymentAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_city", type="string", length=128, nullable=false)
     */
    private $paymentCity;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_postcode", type="string", length=10, nullable=false)
     */
    private $paymentPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_country", type="string", length=128, nullable=false)
     */
    private $paymentCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_country_id", type="integer", nullable=false)
     */
    private $paymentCountryId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_zone", type="string", length=128, nullable=false)
     */
    private $paymentZone;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_zone_id", type="integer", nullable=false)
     */
    private $paymentZoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_format", type="text", length=65535, nullable=false)
     */
    private $paymentAddressFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_custom_field", type="text", length=65535, nullable=false)
     */
    private $paymentCustomField;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=128, nullable=false)
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_code", type="string", length=128, nullable=false)
     */
    private $paymentCode;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_firstname", type="string", length=32, nullable=false)
     */
    private $shippingFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_lastname", type="string", length=32, nullable=false)
     */
    private $shippingLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_company", type="string", length=40, nullable=false)
     */
    private $shippingCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_1", type="string", length=128, nullable=false)
     */
    private $shippingAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_2", type="string", length=128, nullable=false)
     */
    private $shippingAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_city", type="string", length=128, nullable=false)
     */
    private $shippingCity;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_postcode", type="string", length=10, nullable=false)
     */
    private $shippingPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_country", type="string", length=128, nullable=false)
     */
    private $shippingCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_country_id", type="integer", nullable=false)
     */
    private $shippingCountryId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_zone", type="string", length=128, nullable=false)
     */
    private $shippingZone;

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_zone_id", type="integer", nullable=false)
     */
    private $shippingZoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_format", type="text", length=65535, nullable=false)
     */
    private $shippingAddressFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_custom_field", type="text", length=65535, nullable=false)
     */
    private $shippingCustomField;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_method", type="string", length=128, nullable=false)
     */
    private $shippingMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_code", type="string", length=128, nullable=false)
     */
    private $shippingCode;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $total = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="order_status_id", type="integer", nullable=false)
     */
    private $orderStatusId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="affiliate_id", type="integer", nullable=false)
     */
    private $affiliateId;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $commission;

    /**
     * @var int
     *
     * @ORM\Column(name="marketing_id", type="integer", nullable=false)
     */
    private $marketingId;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking", type="string", length=64, nullable=false)
     */
    private $tracking;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=false)
     */
    private $currencyId;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=3, nullable=false)
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_value", type="decimal", precision=15, scale=8, nullable=false, options={"default"="1.00000000"})
     */
    private $currencyValue = '1.00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="forwarded_ip", type="string", length=40, nullable=false)
     */
    private $forwardedIp;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=false)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="accept_language", type="string", length=255, nullable=false)
     */
    private $acceptLanguage;

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
     * Get orderId.
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set invoiceNo.
     *
     * @param int $invoiceNo
     *
     * @return OcOrder
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo = $invoiceNo;

        return $this;
    }

    /**
     * Get invoiceNo.
     *
     * @return int
     */
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * Set invoicePrefix.
     *
     * @param string $invoicePrefix
     *
     * @return OcOrder
     */
    public function setInvoicePrefix($invoicePrefix)
    {
        $this->invoicePrefix = $invoicePrefix;

        return $this;
    }

    /**
     * Get invoicePrefix.
     *
     * @return string
     */
    public function getInvoicePrefix()
    {
        return $this->invoicePrefix;
    }

    /**
     * Set storeId.
     *
     * @param int $storeId
     *
     * @return OcOrder
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
     * Set storeName.
     *
     * @param string $storeName
     *
     * @return OcOrder
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Get storeName.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Set storeUrl.
     *
     * @param string $storeUrl
     *
     * @return OcOrder
     */
    public function setStoreUrl($storeUrl)
    {
        $this->storeUrl = $storeUrl;

        return $this;
    }

    /**
     * Get storeUrl.
     *
     * @return string
     */
    public function getStoreUrl()
    {
        return $this->storeUrl;
    }

    /**
     * Set customerId.
     *
     * @param int $customerId
     *
     * @return OcOrder
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
     * Set customerGroupId.
     *
     * @param int $customerGroupId
     *
     * @return OcOrder
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
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return OcOrder
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
     * @return OcOrder
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
     * @return OcOrder
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
     * @return OcOrder
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
     * @return OcOrder
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
     * Set customField.
     *
     * @param string $customField
     *
     * @return OcOrder
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
     * Set paymentFirstname.
     *
     * @param string $paymentFirstname
     *
     * @return OcOrder
     */
    public function setPaymentFirstname($paymentFirstname)
    {
        $this->paymentFirstname = $paymentFirstname;

        return $this;
    }

    /**
     * Get paymentFirstname.
     *
     * @return string
     */
    public function getPaymentFirstname()
    {
        return $this->paymentFirstname;
    }

    /**
     * Set paymentLastname.
     *
     * @param string $paymentLastname
     *
     * @return OcOrder
     */
    public function setPaymentLastname($paymentLastname)
    {
        $this->paymentLastname = $paymentLastname;

        return $this;
    }

    /**
     * Get paymentLastname.
     *
     * @return string
     */
    public function getPaymentLastname()
    {
        return $this->paymentLastname;
    }

    /**
     * Set paymentCompany.
     *
     * @param string $paymentCompany
     *
     * @return OcOrder
     */
    public function setPaymentCompany($paymentCompany)
    {
        $this->paymentCompany = $paymentCompany;

        return $this;
    }

    /**
     * Get paymentCompany.
     *
     * @return string
     */
    public function getPaymentCompany()
    {
        return $this->paymentCompany;
    }

    /**
     * Set paymentAddress1.
     *
     * @param string $paymentAddress1
     *
     * @return OcOrder
     */
    public function setPaymentAddress1($paymentAddress1)
    {
        $this->paymentAddress1 = $paymentAddress1;

        return $this;
    }

    /**
     * Get paymentAddress1.
     *
     * @return string
     */
    public function getPaymentAddress1()
    {
        return $this->paymentAddress1;
    }

    /**
     * Set paymentAddress2.
     *
     * @param string $paymentAddress2
     *
     * @return OcOrder
     */
    public function setPaymentAddress2($paymentAddress2)
    {
        $this->paymentAddress2 = $paymentAddress2;

        return $this;
    }

    /**
     * Get paymentAddress2.
     *
     * @return string
     */
    public function getPaymentAddress2()
    {
        return $this->paymentAddress2;
    }

    /**
     * Set paymentCity.
     *
     * @param string $paymentCity
     *
     * @return OcOrder
     */
    public function setPaymentCity($paymentCity)
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    /**
     * Get paymentCity.
     *
     * @return string
     */
    public function getPaymentCity()
    {
        return $this->paymentCity;
    }

    /**
     * Set paymentPostcode.
     *
     * @param string $paymentPostcode
     *
     * @return OcOrder
     */
    public function setPaymentPostcode($paymentPostcode)
    {
        $this->paymentPostcode = $paymentPostcode;

        return $this;
    }

    /**
     * Get paymentPostcode.
     *
     * @return string
     */
    public function getPaymentPostcode()
    {
        return $this->paymentPostcode;
    }

    /**
     * Set paymentCountry.
     *
     * @param string $paymentCountry
     *
     * @return OcOrder
     */
    public function setPaymentCountry($paymentCountry)
    {
        $this->paymentCountry = $paymentCountry;

        return $this;
    }

    /**
     * Get paymentCountry.
     *
     * @return string
     */
    public function getPaymentCountry()
    {
        return $this->paymentCountry;
    }

    /**
     * Set paymentCountryId.
     *
     * @param int $paymentCountryId
     *
     * @return OcOrder
     */
    public function setPaymentCountryId($paymentCountryId)
    {
        $this->paymentCountryId = $paymentCountryId;

        return $this;
    }

    /**
     * Get paymentCountryId.
     *
     * @return int
     */
    public function getPaymentCountryId()
    {
        return $this->paymentCountryId;
    }

    /**
     * Set paymentZone.
     *
     * @param string $paymentZone
     *
     * @return OcOrder
     */
    public function setPaymentZone($paymentZone)
    {
        $this->paymentZone = $paymentZone;

        return $this;
    }

    /**
     * Get paymentZone.
     *
     * @return string
     */
    public function getPaymentZone()
    {
        return $this->paymentZone;
    }

    /**
     * Set paymentZoneId.
     *
     * @param int $paymentZoneId
     *
     * @return OcOrder
     */
    public function setPaymentZoneId($paymentZoneId)
    {
        $this->paymentZoneId = $paymentZoneId;

        return $this;
    }

    /**
     * Get paymentZoneId.
     *
     * @return int
     */
    public function getPaymentZoneId()
    {
        return $this->paymentZoneId;
    }

    /**
     * Set paymentAddressFormat.
     *
     * @param string $paymentAddressFormat
     *
     * @return OcOrder
     */
    public function setPaymentAddressFormat($paymentAddressFormat)
    {
        $this->paymentAddressFormat = $paymentAddressFormat;

        return $this;
    }

    /**
     * Get paymentAddressFormat.
     *
     * @return string
     */
    public function getPaymentAddressFormat()
    {
        return $this->paymentAddressFormat;
    }

    /**
     * Set paymentCustomField.
     *
     * @param string $paymentCustomField
     *
     * @return OcOrder
     */
    public function setPaymentCustomField($paymentCustomField)
    {
        $this->paymentCustomField = $paymentCustomField;

        return $this;
    }

    /**
     * Get paymentCustomField.
     *
     * @return string
     */
    public function getPaymentCustomField()
    {
        return $this->paymentCustomField;
    }

    /**
     * Set paymentMethod.
     *
     * @param string $paymentMethod
     *
     * @return OcOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set paymentCode.
     *
     * @param string $paymentCode
     *
     * @return OcOrder
     */
    public function setPaymentCode($paymentCode)
    {
        $this->paymentCode = $paymentCode;

        return $this;
    }

    /**
     * Get paymentCode.
     *
     * @return string
     */
    public function getPaymentCode()
    {
        return $this->paymentCode;
    }

    /**
     * Set shippingFirstname.
     *
     * @param string $shippingFirstname
     *
     * @return OcOrder
     */
    public function setShippingFirstname($shippingFirstname)
    {
        $this->shippingFirstname = $shippingFirstname;

        return $this;
    }

    /**
     * Get shippingFirstname.
     *
     * @return string
     */
    public function getShippingFirstname()
    {
        return $this->shippingFirstname;
    }

    /**
     * Set shippingLastname.
     *
     * @param string $shippingLastname
     *
     * @return OcOrder
     */
    public function setShippingLastname($shippingLastname)
    {
        $this->shippingLastname = $shippingLastname;

        return $this;
    }

    /**
     * Get shippingLastname.
     *
     * @return string
     */
    public function getShippingLastname()
    {
        return $this->shippingLastname;
    }

    /**
     * Set shippingCompany.
     *
     * @param string $shippingCompany
     *
     * @return OcOrder
     */
    public function setShippingCompany($shippingCompany)
    {
        $this->shippingCompany = $shippingCompany;

        return $this;
    }

    /**
     * Get shippingCompany.
     *
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->shippingCompany;
    }

    /**
     * Set shippingAddress1.
     *
     * @param string $shippingAddress1
     *
     * @return OcOrder
     */
    public function setShippingAddress1($shippingAddress1)
    {
        $this->shippingAddress1 = $shippingAddress1;

        return $this;
    }

    /**
     * Get shippingAddress1.
     *
     * @return string
     */
    public function getShippingAddress1()
    {
        return $this->shippingAddress1;
    }

    /**
     * Set shippingAddress2.
     *
     * @param string $shippingAddress2
     *
     * @return OcOrder
     */
    public function setShippingAddress2($shippingAddress2)
    {
        $this->shippingAddress2 = $shippingAddress2;

        return $this;
    }

    /**
     * Get shippingAddress2.
     *
     * @return string
     */
    public function getShippingAddress2()
    {
        return $this->shippingAddress2;
    }

    /**
     * Set shippingCity.
     *
     * @param string $shippingCity
     *
     * @return OcOrder
     */
    public function setShippingCity($shippingCity)
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    /**
     * Get shippingCity.
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Set shippingPostcode.
     *
     * @param string $shippingPostcode
     *
     * @return OcOrder
     */
    public function setShippingPostcode($shippingPostcode)
    {
        $this->shippingPostcode = $shippingPostcode;

        return $this;
    }

    /**
     * Get shippingPostcode.
     *
     * @return string
     */
    public function getShippingPostcode()
    {
        return $this->shippingPostcode;
    }

    /**
     * Set shippingCountry.
     *
     * @param string $shippingCountry
     *
     * @return OcOrder
     */
    public function setShippingCountry($shippingCountry)
    {
        $this->shippingCountry = $shippingCountry;

        return $this;
    }

    /**
     * Get shippingCountry.
     *
     * @return string
     */
    public function getShippingCountry()
    {
        return $this->shippingCountry;
    }

    /**
     * Set shippingCountryId.
     *
     * @param int $shippingCountryId
     *
     * @return OcOrder
     */
    public function setShippingCountryId($shippingCountryId)
    {
        $this->shippingCountryId = $shippingCountryId;

        return $this;
    }

    /**
     * Get shippingCountryId.
     *
     * @return int
     */
    public function getShippingCountryId()
    {
        return $this->shippingCountryId;
    }

    /**
     * Set shippingZone.
     *
     * @param string $shippingZone
     *
     * @return OcOrder
     */
    public function setShippingZone($shippingZone)
    {
        $this->shippingZone = $shippingZone;

        return $this;
    }

    /**
     * Get shippingZone.
     *
     * @return string
     */
    public function getShippingZone()
    {
        return $this->shippingZone;
    }

    /**
     * Set shippingZoneId.
     *
     * @param int $shippingZoneId
     *
     * @return OcOrder
     */
    public function setShippingZoneId($shippingZoneId)
    {
        $this->shippingZoneId = $shippingZoneId;

        return $this;
    }

    /**
     * Get shippingZoneId.
     *
     * @return int
     */
    public function getShippingZoneId()
    {
        return $this->shippingZoneId;
    }

    /**
     * Set shippingAddressFormat.
     *
     * @param string $shippingAddressFormat
     *
     * @return OcOrder
     */
    public function setShippingAddressFormat($shippingAddressFormat)
    {
        $this->shippingAddressFormat = $shippingAddressFormat;

        return $this;
    }

    /**
     * Get shippingAddressFormat.
     *
     * @return string
     */
    public function getShippingAddressFormat()
    {
        return $this->shippingAddressFormat;
    }

    /**
     * Set shippingCustomField.
     *
     * @param string $shippingCustomField
     *
     * @return OcOrder
     */
    public function setShippingCustomField($shippingCustomField)
    {
        $this->shippingCustomField = $shippingCustomField;

        return $this;
    }

    /**
     * Get shippingCustomField.
     *
     * @return string
     */
    public function getShippingCustomField()
    {
        return $this->shippingCustomField;
    }

    /**
     * Set shippingMethod.
     *
     * @param string $shippingMethod
     *
     * @return OcOrder
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * Get shippingMethod.
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * Set shippingCode.
     *
     * @param string $shippingCode
     *
     * @return OcOrder
     */
    public function setShippingCode($shippingCode)
    {
        $this->shippingCode = $shippingCode;

        return $this;
    }

    /**
     * Get shippingCode.
     *
     * @return string
     */
    public function getShippingCode()
    {
        return $this->shippingCode;
    }

    /**
     * Set comment.
     *
     * @param string $comment
     *
     * @return OcOrder
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set total.
     *
     * @param string $total
     *
     * @return OcOrder
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total.
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set orderStatusId.
     *
     * @param int $orderStatusId
     *
     * @return OcOrder
     */
    public function setOrderStatusId($orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }

    /**
     * Get orderStatusId.
     *
     * @return int
     */
    public function getOrderStatusId()
    {
        return $this->orderStatusId;
    }

    /**
     * Set affiliateId.
     *
     * @param int $affiliateId
     *
     * @return OcOrder
     */
    public function setAffiliateId($affiliateId)
    {
        $this->affiliateId = $affiliateId;

        return $this;
    }

    /**
     * Get affiliateId.
     *
     * @return int
     */
    public function getAffiliateId()
    {
        return $this->affiliateId;
    }

    /**
     * Set commission.
     *
     * @param string $commission
     *
     * @return OcOrder
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission.
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set marketingId.
     *
     * @param int $marketingId
     *
     * @return OcOrder
     */
    public function setMarketingId($marketingId)
    {
        $this->marketingId = $marketingId;

        return $this;
    }

    /**
     * Get marketingId.
     *
     * @return int
     */
    public function getMarketingId()
    {
        return $this->marketingId;
    }

    /**
     * Set tracking.
     *
     * @param string $tracking
     *
     * @return OcOrder
     */
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }

    /**
     * Get tracking.
     *
     * @return string
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcOrder
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
     * Set currencyId.
     *
     * @param int $currencyId
     *
     * @return OcOrder
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId.
     *
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set currencyCode.
     *
     * @param string $currencyCode
     *
     * @return OcOrder
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set currencyValue.
     *
     * @param string $currencyValue
     *
     * @return OcOrder
     */
    public function setCurrencyValue($currencyValue)
    {
        $this->currencyValue = $currencyValue;

        return $this;
    }

    /**
     * Get currencyValue.
     *
     * @return string
     */
    public function getCurrencyValue()
    {
        return $this->currencyValue;
    }

    /**
     * Set ip.
     *
     * @param string $ip
     *
     * @return OcOrder
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
     * Set forwardedIp.
     *
     * @param string $forwardedIp
     *
     * @return OcOrder
     */
    public function setForwardedIp($forwardedIp)
    {
        $this->forwardedIp = $forwardedIp;

        return $this;
    }

    /**
     * Get forwardedIp.
     *
     * @return string
     */
    public function getForwardedIp()
    {
        return $this->forwardedIp;
    }

    /**
     * Set userAgent.
     *
     * @param string $userAgent
     *
     * @return OcOrder
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent.
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set acceptLanguage.
     *
     * @param string $acceptLanguage
     *
     * @return OcOrder
     */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;

        return $this;
    }

    /**
     * Get acceptLanguage.
     *
     * @return string
     */
    public function getAcceptLanguage()
    {
        return $this->acceptLanguage;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcOrder
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
     * @return OcOrder
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
