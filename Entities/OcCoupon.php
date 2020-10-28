<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcCoupon
 *
 * @ORM\Table(name="oc_coupon")
 * @ORM\Entity
 */
class OcCoupon
{
    /**
     * @var int
     *
     * @ORM\Column(name="coupon_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $couponId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $discount;

    /**
     * @var bool
     *
     * @ORM\Column(name="logged", type="boolean", nullable=false)
     */
    private $logged;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping", type="boolean", nullable=false)
     */
    private $shipping;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $dateStart = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $dateEnd = '0000-00-00';

    /**
     * @var int
     *
     * @ORM\Column(name="uses_total", type="integer", nullable=false)
     */
    private $usesTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="uses_customer", type="string", length=11, nullable=false)
     */
    private $usesCustomer;

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
     * Get couponId.
     *
     * @return int
     */
    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcCoupon
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return OcCoupon
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
     * Set type.
     *
     * @param string $type
     *
     * @return OcCoupon
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set discount.
     *
     * @param string $discount
     *
     * @return OcCoupon
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount.
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set logged.
     *
     * @param bool $logged
     *
     * @return OcCoupon
     */
    public function setLogged($logged)
    {
        $this->logged = $logged;

        return $this;
    }

    /**
     * Get logged.
     *
     * @return bool
     */
    public function getLogged()
    {
        return $this->logged;
    }

    /**
     * Set shipping.
     *
     * @param bool $shipping
     *
     * @return OcCoupon
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return bool
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set total.
     *
     * @param string $total
     *
     * @return OcCoupon
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
     * Set dateStart.
     *
     * @param \DateTime $dateStart
     *
     * @return OcCoupon
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart.
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd.
     *
     * @param \DateTime $dateEnd
     *
     * @return OcCoupon
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd.
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set usesTotal.
     *
     * @param int $usesTotal
     *
     * @return OcCoupon
     */
    public function setUsesTotal($usesTotal)
    {
        $this->usesTotal = $usesTotal;

        return $this;
    }

    /**
     * Get usesTotal.
     *
     * @return int
     */
    public function getUsesTotal()
    {
        return $this->usesTotal;
    }

    /**
     * Set usesCustomer.
     *
     * @param string $usesCustomer
     *
     * @return OcCoupon
     */
    public function setUsesCustomer($usesCustomer)
    {
        $this->usesCustomer = $usesCustomer;

        return $this;
    }

    /**
     * Get usesCustomer.
     *
     * @return string
     */
    public function getUsesCustomer()
    {
        return $this->usesCustomer;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcCoupon
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
     * @return OcCoupon
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
