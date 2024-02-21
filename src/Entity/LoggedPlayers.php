<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoggedPlayers
 *
 * @ORM\Table(name="logged_players", uniqueConstraints={@ORM\UniqueConstraint(name="char_uid", columns={"char_uid"})})
 * @ORM\Entity
 */
class LoggedPlayers
{
    /**
     * @var int
     *
     * @ORM\Column(name="char_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $charUid;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="seen", type="integer", nullable=false)
     */
    private $seen;


}
