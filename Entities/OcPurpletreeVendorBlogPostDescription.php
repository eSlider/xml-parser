<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorBlogPostDescription
 *
 * @ORM\Table(name="oc_purpletree_vendor_blog_post_description")
 * @ORM\Entity
 */
class OcPurpletreeVendorBlogPostDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="idx", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idx;

    /**
     * @var int
     *
     * @ORM\Column(name="blog_post_id", type="integer", nullable=false)
     */
    private $blogPostId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=false)
     */
    private $metaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=false)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_keyword", type="string", length=255, nullable=false)
     */
    private $metaKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="post_tags", type="string", length=255, nullable=false)
     */
    private $postTags;


    /**
     * Get idx.
     *
     * @return int
     */
    public function getIdx()
    {
        return $this->idx;
    }

    /**
     * Set blogPostId.
     *
     * @param int $blogPostId
     *
     * @return OcPurpletreeVendorBlogPostDescription
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
     * Set languageId.
     *
     * @param int $languageId
     *
     * @return OcPurpletreeVendorBlogPostDescription
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
     * Set title.
     *
     * @param string $title
     *
     * @return OcPurpletreeVendorBlogPostDescription
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return OcPurpletreeVendorBlogPostDescription
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
     * Set metaTitle.
     *
     * @param string $metaTitle
     *
     * @return OcPurpletreeVendorBlogPostDescription
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle.
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaDescription.
     *
     * @param string $metaDescription
     *
     * @return OcPurpletreeVendorBlogPostDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription.
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set metaKeyword.
     *
     * @param string $metaKeyword
     *
     * @return OcPurpletreeVendorBlogPostDescription
     */
    public function setMetaKeyword($metaKeyword)
    {
        $this->metaKeyword = $metaKeyword;

        return $this;
    }

    /**
     * Get metaKeyword.
     *
     * @return string
     */
    public function getMetaKeyword()
    {
        return $this->metaKeyword;
    }

    /**
     * Set postTags.
     *
     * @param string $postTags
     *
     * @return OcPurpletreeVendorBlogPostDescription
     */
    public function setPostTags($postTags)
    {
        $this->postTags = $postTags;

        return $this;
    }

    /**
     * Get postTags.
     *
     * @return string
     */
    public function getPostTags()
    {
        return $this->postTags;
    }
}
