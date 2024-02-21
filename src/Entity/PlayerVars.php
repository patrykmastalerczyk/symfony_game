<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerVars
 *
 * @ORM\Table(name="player_vars")
 * @ORM\Entity
 */
class PlayerVars
{
    /**
     * @var int
     *
     * @ORM\Column(name="player_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $playerId;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=55, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $key;

    /**
     * @var bool
     *
     * @ORM\Column(name="value_type", type="boolean", nullable=false)
     */
    private $valueType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


}
