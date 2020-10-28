<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomerAffiliate
 *
 * @ORM\Table(name="oc_customer_affiliate")
 * @ORM\Entity
 */
class OcCustomerAffiliate
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
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=40, nullable=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=false)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking", type="string", length=64, nullable=false)
     */
    private $tracking;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $commission = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="string", length=64, nullable=false)
     */
    private $tax;

    /**
     * @var string
     *
     * @ORM\Column(name="payment", type="string", length=6, nullable=false)
     */
    private $payment;

    /**
     * @var string
     *
     * @ORM\Column(name="cheque", type="string", length=100, nullable=false)
     */
    private $cheque;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal", type="string", length=64, nullable=false)
     */
    private $paypal;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=64, nullable=false)
     */
    private $bankName;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_branch_number", type="string", length=64, nullable=false)
     */
    private $bankBranchNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_swift_code", type="string", length=64, nullable=false)
     */
    private $bankSwiftCode;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_name", type="string", length=64, nullable=false)
     */
    private $bankAccountName;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_number", type="string", length=64, nullable=false)
     */
    private $bankAccountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_field", type="text", length=65535, nullable=false)
     */
    private $customField;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

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
     * Set company.
     *
     * @param string $company
     *
     * @return OcCustomerAffiliate
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company.
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set website.
     *
     * @param string $website
     *
     * @return OcCustomerAffiliate
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website.
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set tracking.
     *
     * @param string $tracking
     *
     * @return OcCustomerAffiliate
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
     * Set commission.
     *
     * @param string $commission
     *
     * @return OcCustomerAffiliate
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
     * Set tax.
     *
     * @param string $tax
     *
     * @return OcCustomerAffiliate
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax.
     *
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set payment.
     *
     * @param string $payment
     *
     * @return OcCustomerAffiliate
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment.
     *
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set cheque.
     *
     * @param string $cheque
     *
     * @return OcCustomerAffiliate
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Get cheque.
     *
     * @return string
     */
    public function getCheque()
    {
        return $this->cheque;
    }

    /**
     * Set paypal.
     *
     * @param string $paypal
     *
     * @return OcCustomerAffiliate
     */
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;

        return $this;
    }

    /**
     * Get paypal.
     *
     * @return string
     */
    public function getPaypal()
    {
        return $this->paypal;
    }

    /**
     * Set bankName.
     *
     * @param string $bankName
     *
     * @return OcCustomerAffiliate
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName.
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set bankBranchNumber.
     *
     * @param string $bankBranchNumber
     *
     * @return OcCustomerAffiliate
     */
    public function setBankBranchNumber($bankBranchNumber)
    {
        $this->bankBranchNumber = $bankBranchNumber;

        return $this;
    }

    /**
     * Get bankBranchNumber.
     *
     * @return string
     */
    public function getBankBranchNumber()
    {
        return $this->bankBranchNumber;
    }

    /**
     * Set bankSwiftCode.
     *
     * @param string $bankSwiftCode
     *
     * @return OcCustomerAffiliate
     */
    public function setBankSwiftCode($bankSwiftCode)
    {
        $this->bankSwiftCode = $bankSwiftCode;

        return $this;
    }

    /**
     * Get bankSwiftCode.
     *
     * @return string
     */
    public function getBankSwiftCode()
    {
        return $this->bankSwiftCode;
    }

    /**
     * Set bankAccountName.
     *
     * @param string $bankAccountName
     *
     * @return OcCustomerAffiliate
     */
    public function setBankAccountName($bankAccountName)
    {
        $this->bankAccountName = $bankAccountName;

        return $this;
    }

    /**
     * Get bankAccountName.
     *
     * @return string
     */
    public function getBankAccountName()
    {
        return $this->bankAccountName;
    }

    /**
     * Set bankAccountNumber.
     *
     * @param string $bankAccountNumber
     *
     * @return OcCustomerAffiliate
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    /**
     * Get bankAccountNumber.
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Set customField.
     *
     * @param string $customField
     *
     * @return OcCustomerAffiliate
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
     * Set status.
     *
     * @param bool $status
     *
     * @return OcCustomerAffiliate
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
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcCustomerAffiliate
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
