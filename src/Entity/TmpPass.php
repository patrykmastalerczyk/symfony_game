<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmpPass
 *
 * @ORM\Table(name="tmp_pass")
 * @ORM\Entity
 */
class TmpPass
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
     * @ORM\Column(name="hash", type="string", length=100, nullable=false)
     */
    private $hash;


}
