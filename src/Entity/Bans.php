<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bans
 *
 * @ORM\Table(name="bans")
 * @ORM\Entity
 */
class Bans
{
    /**
     * @var int
     *
     * @ORM\Column(name="ban_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $banUid;

    /**
     * @var string
     *
     * @ORM\Column(name="ban_ip", type="string", length=20, nullable=false)
     */
    private $banIp;

    /**
     * @var string
     *
     * @ORM\Column(name="ban_reason", type="string", length=100, nullable=false)
     */
    private $banReason;

    /**
     * @var int
     *
     * @ORM\Column(name="ban_time", type="integer", nullable=false)
     */
    private $banTime;


}
