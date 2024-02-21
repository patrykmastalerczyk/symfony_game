<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Towary
 *
 * @ORM\Table(name="towary")
 * @ORM\Entity
 */
class Towary
{
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var float
     *
     * @ORM\Column(name="reward_multiplier", type="float", precision=10, scale=0, nullable=false)
     */
    private $rewardMultiplier;

    /**
     * @var int
     *
     * @ORM\Column(name="reward_score", type="integer", nullable=false)
     */
    private $rewardScore;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_type", type="integer", nullable=false)
     */
    private $vehicleType;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_trailer_type", type="integer", nullable=false)
     */
    private $vehicleTrailerType;

    /**
     * @var bool
     *
     * @ORM\Column(name="smuggle", type="boolean", nullable=false)
     */
    private $smuggle;

    /**
     * @var bool
     *
     * @ORM\Column(name="license", type="boolean", nullable=false)
     */
    private $license;

    /**
     * @var bool
     *
     * @ORM\Column(name="premium", type="boolean", nullable=false)
     */
    private $premium;

    /**
     * @var int
     *
     * @ORM\Column(name="delay", type="integer", nullable=false)
     */
    private $delay;


}
