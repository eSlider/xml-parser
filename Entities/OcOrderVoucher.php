<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderVoucher
 *
 * @ORM\Table(name="oc_order_voucher")
 * @ORM\Entity
 */
class OcOrderVoucher
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_voucher_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderVoucherId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="voucher_id", type="integer", nullable=false)
     */
    private $voucherId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="from_name", type="string", length=64, nullable=false)
     */
    private $fromName;

    /**
     * @var string
     *
     * @ORM\Column(name="from_email", type="string", length=96, nullable=false)
     */
    private $fromEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="to_name", type="string", length=64, nullable=false)
     */
    private $toName;

    /**
     * @var string
     *
     * @ORM\Column(name="to_email", type="string", length=96, nullable=false)
     */
    private $toEmail;

    /**
     * @var int
     *
     * @ORM\Column(name="voucher_theme_id", type="integer", nullable=false)
     */
    private $voucherThemeId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $amount;


    /**
     * Get orderVoucherId.
     *
     * @return int
     */
    public function getOrderVoucherId()
    {
        return $this->orderVoucherId;
    }

    /**
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcOrderVoucher
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

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
     * Set voucherId.
     *
     * @param int $voucherId
     *
     * @return OcOrderVoucher
     */
    public function setVoucherId($voucherId)
    {
        $this->voucherId = $voucherId;

        return $this;
    }

    /**
     * Get voucherId.
     *
     * @return int
     */
    public function getVoucherId()
    {
        return $this->voucherId;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return OcOrderVoucher
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcOrderVoucher
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
     * Set fromName.
     *
     * @param string $fromName
     *
     * @return OcOrderVoucher
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;

        return $this;
    }

    /**
     * Get fromName.
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Set fromEmail.
     *
     * @param string $fromEmail
     *
     * @return OcOrderVoucher
     */
    public function setFromEmail($fromEmail)
    {
        $this->fromEmail = $fromEmail;

        return $this;
    }

    /**
     * Get fromEmail.
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * Set toName.
     *
     * @param string $toName
     *
     * @return OcOrderVoucher
     */
    public function setToName($toName)
    {
        $this->toName = $toName;

        return $this;
    }

    /**
     * Get toName.
     *
     * @return string
     */
    public function getToName()
    {
        return $this->toName;
    }

    /**
     * Set toEmail.
     *
     * @param string $toEmail
     *
     * @return OcOrderVoucher
     */
    public function setToEmail($toEmail)
    {
        $this->toEmail = $toEmail;

        return $this;
    }

    /**
     * Get toEmail.
     *
     * @return string
     */
    public function getToEmail()
    {
        return $this->toEmail;
    }

    /**
     * Set voucherThemeId.
     *
     * @param int $voucherThemeId
     *
     * @return OcOrderVoucher
     */
    public function setVoucherThemeId($voucherThemeId)
    {
        $this->voucherThemeId = $voucherThemeId;

        return $this;
    }

    /**
     * Get voucherThemeId.
     *
     * @return int
     */
    public function getVoucherThemeId()
    {
        return $this->voucherThemeId;
    }

    /**
     * Set message.
     *
     * @param string $message
     *
     * @return OcOrderVoucher
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
     * Set amount.
     *
     * @param string $amount
     *
     * @return OcOrderVoucher
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
