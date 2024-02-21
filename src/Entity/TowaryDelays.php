<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TowaryDelays
 *
 * @ORM\Table(name="towary_delays")
 * @ORM\Entity
 */
class TowaryDelays
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
     * @var int
     *
     * @ORM\Column(name="player_uid", type="integer", nullable=false)
     */
    private $playerUid;

    /**
     * @var int
     *
     * @ORM\Column(name="towar_uid", type="integer", nullable=false)
     */
    private $towarUid;

    /**
     * @var int
     *
     * @ORM\Column(name="delay_end", type="integer", nullable=false)
     */
    private $delayEnd;


}
