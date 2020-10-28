<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorBlogPostComment
 *
 * @ORM\Table(name="oc_purpletree_vendor_blog_post_comment")
 * @ORM\Entity
 */
class OcPurpletreeVendorBlogPostComment
{
    /**
     * @var int
     *
     * @ORM\Column(name="blog_comment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blogCommentId;

    /**
     * @var int
     *
     * @ORM\Column(name="blog_post_id", type="integer", nullable=false)
     */
    private $blogPostId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=150, nullable=false)
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

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
     * Get blogCommentId.
     *
     * @return int
     */
    public function getBlogCommentId()
    {
        return $this->blogCommentId;
    }

    /**
     * Set blogPostId.
     *
     * @param int $blogPostId
     *
     * @return OcPurpletreeVendorBlogPostComment
     */
    public function setBlogPostId($blogPostId)
    {
        $this->blogPostId = $blogPostId;

        return $this;
    }

    /**
     * Get blogPostId.
     *
     * @return int
     */
    public function getBlogPostId()
    {
        return $this->blogPostId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return OcPurpletreeVendorBlogPostComment
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
     * Set emailId.
     *
     * @param string $emailId
     *
     * @return OcPurpletreeVendorBlogPostComment
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;

        return $this;
    }

    /**
     * Get emailId.
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return OcPurpletreeVendorBlogPostComment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return OcPurpletreeVendorBlogPostComment
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
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return OcPurpletreeVendorBlogPostComment
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
     * @return OcPurpletreeVendorBlogPostComment
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
}
