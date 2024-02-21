<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anim
 *
 * @ORM\Table(name="anim")
 * @ORM\Entity
 */
class Anim
{
    /**
     * @var int
     *
     * @ORM\Column(name="anim_uid", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $animUid;

    /**
     * @var string
     *
     * @ORM\Column(name="anim_command", type="string", length=12, nullable=false)
     */
    private $animCommand;

    /**
     * @var string
     *
     * @ORM\Column(name="anim_lib", type="string", length=16, nullable=false)
     */
    private $animLib;

    /**
     * @var string
     *
     * @ORM\Column(name="anim_name", type="string", length=24, nullable=false)
     */
    private $animName;

    /**
     * @var float
     *
     * @ORM\Column(name="anim_speed", type="float", precision=10, scale=0, nullable=false)
     */
    private $animSpeed;

    /**
     * @var bool
     *
     * @ORM\Column(name="anim_opt1", type="boolean", nullable=false)
     */
    private $animOpt1;

    /**
     * @var bool
     *
     * @ORM\Column(name="anim_opt2", type="boolean", nullable=false)
     */
    private $animOpt2;

    /**
     * @var bool
     *
     * @ORM\Column(name="anim_opt3", type="boolean", nullable=false)
     */
    private $animOpt3;

    /**
     * @var bool
     *
     * @ORM\Column(name="anim_opt4", type="boolean", nullable=false)
     */
    private $animOpt4;

    /**
     * @var bool
     *
     * @ORM\Column(name="anim_opt5", type="boolean", nullable=false)
     */
    private $animOpt5;

    /**
     * @var bool
     *
     * @ORM\Column(name="anim_action", type="boolean", nullable=false)
     */
    private $animAction;


}
