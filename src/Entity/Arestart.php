<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arestart
 *
 * @ORM\Table(name="arestart")
 * @ORM\Entity
 */
class Arestart
{
    /**
     * @var int
     *
     * @ORM\Column(name="char_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $charUid;


}
