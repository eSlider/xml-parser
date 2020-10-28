<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnHistory
 *
 * @ORM\Table(name="oc_return_history")
 * @ORM\Entity
 */
class OcReturnHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $returnHistoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="return_id", type="integer", nullable=false)
     */
    private $returnId;

    /**
     * @var int
     *
     * @ORM\Column(name="return_status_id", type="integer", nullable=false)
     */
    private $returnStatusId;

    /**
     * @var bool
     *
     * @ORM\Column(name="notify", type="boolean", nullable=false)
     */
    private $notify;

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
     * Get returnHistoryId.
     *
     * @return int
     */
    public function getReturnHistoryId()
    {
        return $this->returnHistoryId;
    }

    /**
     * Set returnId.
     *
     * @param int $returnId
     *
     * @return OcReturnHistory
     */
    public function setReturnId($returnId)
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * Get returnId.
     *
     * @return int
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * Set returnStatusId.
     *
     * @param int $returnStatusId
     *
     * @return OcReturnHistory
     */
    public function setReturnStatusId($returnStatusId)
    {
        $this->returnStatusId = $returnStatusId;

        return $this;
    }

    /**
     * Get returnStatusId.
     *
     * @return int
     */
    public function getReturnStatusId()
    {
        return $this->returnStatusId;
    }

    /**
     * Set notify.
     *
     * @param bool $notify
     *
     * @return OcReturnHistory
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
     * @return OcReturnHistory
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
     * @return OcReturnHistory
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
