<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts", indexes={@ORM\Index(name="owner", columns={"contact_owner"})})
 * @ORM\Entity
 */
class Contacts
{
    /**
     * @var int
     *
     * @ORM\Column(name="contact_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactUid;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_number", type="integer", nullable=false)
     */
    private $contactNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=32, nullable=false)
     */
    private $contactName;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_owner", type="integer", nullable=false)
     */
    private $contactOwner;

    /**
     * @var bool
     *
     * @ORM\Column(name="contact_deleted", type="boolean", nullable=false)
     */
    private $contactDeleted;


}
