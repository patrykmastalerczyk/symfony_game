<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="staff")
 * @ORM\Entity
 */
class Staff
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
     * @var int
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId;

    /**
     * @var int
     *
     * @ORM\Column(name="group", type="integer", nullable=false)
     */
    private $group;

    /**
     * @var int
     *
     * @ORM\Column(name="gg", type="integer", nullable=false)
     */
    private $gg;

    /**
     * @var string
     *
     * @ORM\Column(name="duties", type="string", length=200, nullable=false)
     */
    private $duties;


}
