<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderHistory
 *
 * @ORM\Table(name="oc_order_history")
 * @ORM\Entity
 */
class OcOrderHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderHistoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_status_id", type="integer", nullable=false)
     */
    private $orderStatusId;

    /**
     * @var bool
     *
     * @ORM\Column(name="notify", type="boolean", nullable=false)
     */
    private $notify = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;


    /**
     * Get orderHistoryId.
     *
     * @return int
     */
    public function getOrderHistoryId()
    {
        return $this->orderHistoryId;
    }

    /**
     * Set orderId.
     *
     * @param int $orderId
     *
     * @return OcOrderHistory
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
     * Set orderStatusId.
     *
     * @param int $orderStatusId
     *
     * @return OcOrderHistory
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
     * Set notify.
     *
     * @param bool $notify
     *
     * @return OcOrderHistory
     */
    public function setNotify($notify)
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * Get notify.
     *
     * @return bool
     */
    public function getNotify()
    {
        return $this->notify;
    }

    /**
     * Set comment.
     *
     * @param string $comment
     *
     * @return OcOrderHistory
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
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return OcOrderHistory
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
