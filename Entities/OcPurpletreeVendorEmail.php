<?php


namespace Eslider\XML\Entities;
use
 Doctrine\ORM\Mapping as ORM;

/**
 * OcPurpletreeVendorEmail
 *
 * @ORM\Table(name="oc_purpletree_vendor_email")
 * @ORM\Entity
 */
class OcPurpletreeVendorEmail
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
     * @var string
     *
     * @ORM\Column(name="language_code", type="string", length=256, nullable=false)
     */
    private $languageCode;

    /**
     * @var string
     *
     * @ORM\Column(name="email_code", type="string", length=256, nullable=false)
     */
    private $emailCode;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=256, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=256, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="new_subject", type="string", length=256, nullable=false)
     */
    private $newSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="new_message", type="text", length=65535, nullable=false)
     */
    private $newMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=256, nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="note_subject", type="string", length=256, nullable=false)
     */
    private $noteSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=256, nullable=false)
     */
    private $type;


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
     * Set languageCode.
     *
     * @param string $languageCode
     *
     * @return OcPurpletreeVendorEmail
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get languageCode.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Set emailCode.
     *
     * @param string $emailCode
     *
     * @return OcPurpletreeVendorEmail
     */
    public function setEmailCode($emailCode)
    {
        $this->emailCode = $emailCode;

        return $this;
    }

    /**
     * Get emailCode.
     *
     * @return string
     */
    public function getEmailCode()
    {
        return $this->emailCode;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return OcPurpletreeVendorEmail
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
     * Set subject.
     *
     * @param string $subject
     *
     * @return OcPurpletreeVendorEmail
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set newSubject.
     *
     * @param string $newSubject
     *
     * @return OcPurpletreeVendorEmail
     */
    public function setNewSubject($newSubject)
    {
        $this->newSubject = $newSubject;

        return $this;
    }

    /**
     * Get newSubject.
     *
     * @return string
     */
    public function getNewSubject()
    {
        return $this->newSubject;
    }

    /**
     * Set message.
     *
     * @param string $message
     *
     * @return OcPurpletreeVendorEmail
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
     * Set newMessage.
     *
     * @param string $newMessage
     *
     * @return OcPurpletreeVendorEmail
     */
    public function setNewMessage($newMessage)
    {
        $this->newMessage = $newMessage;

        return $this;
    }

    /**
     * Get newMessage.
     *
     * @return string
     */
    public function getNewMessage()
    {
        return $this->newMessage;
    }

    /**
     * Set note.
     *
     * @param string $note
     *
     * @return OcPurpletreeVendorEmail
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set noteSubject.
     *
     * @param string $noteSubject
     *
     * @return OcPurpletreeVendorEmail
     */
    public function setNoteSubject($noteSubject)
    {
        $this->noteSubject = $noteSubject;

        return $this;
    }

    /**
     * Get noteSubject.
     *
     * @return string
     */
    public function getNoteSubject()
    {
        return $this->noteSubject;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return OcPurpletreeVendorEmail
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
}
