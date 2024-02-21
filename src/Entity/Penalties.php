<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Penalties
 *
 * @ORM\Table(name="penalties")
 * @ORM\Entity
 */
class Penalties
{
    /**
     * @var int
     *
     * @ORM\Column(name="penalty_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $penaltyUid;

    /**
     * @var int
     *
     * @ORM\Column(name="penalty_owner", type="integer", nullable=false)
     */
    private $penaltyOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="penalty_giver", type="integer", nullable=false)
     */
    private $penaltyGiver;

    /**
     * @var int
     *
     * @ORM\Column(name="penalty_type", type="integer", nullable=false)
     */
    private $penaltyType;

    /**
     * @var string
     *
     * @ORM\Column(name="penalty_reason", type="string", length=250, nullable=false)
     */
    private $penaltyReason;

    /**
     * @var int
     *
     * @ORM\Column(name="penalty_starttime", type="integer", nullable=false)
     */
    private $penaltyStarttime;

    /**
     * @var int
     *
     * @ORM\Column(name="penalty_endtime", type="integer", nullable=false)
     */
    private $penaltyEndtime;

    /**
     * @var int
     *
     * @ORM\Column(name="penalty_disabled", type="integer", nullable=false)
     */
    private $penaltyDisabled;


}
