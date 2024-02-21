<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessions
 *
 * @ORM\Table(name="sessions", indexes={@ORM\Index(name="session_type", columns={"session_type"}), @ORM\Index(name="session_owner", columns={"session_owner"})})
 * @ORM\Entity
 */
class Sessions
{
    /**
     * @var int
     *
     * @ORM\Column(name="session_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionUid;

    /**
     * @var int
     *
     * @ORM\Column(name="session_owner", type="integer", nullable=false)
     */
    private $sessionOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="session_extraid", type="integer", nullable=false)
     */
    private $sessionExtraid;

    /**
     * @var bool
     *
     * @ORM\Column(name="session_type", type="boolean", nullable=false)
     */
    private $sessionType;

    /**
     * @var int
     *
     * @ORM\Column(name="session_start", type="integer", nullable=false)
     */
    private $sessionStart;

    /**
     * @var int
     *
     * @ORM\Column(name="session_end", type="integer", nullable=false)
     */
    private $sessionEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="session_afktime", type="integer", nullable=false)
     */
    private $sessionAfktime;


}
