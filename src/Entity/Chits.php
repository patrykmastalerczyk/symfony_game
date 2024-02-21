<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chits
 *
 * @ORM\Table(name="chits")
 * @ORM\Entity
 */
class Chits
{
    /**
     * @var int
     *
     * @ORM\Column(name="chit_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $chitUid;

    /**
     * @var string
     *
     * @ORM\Column(name="chit_text", type="string", length=100, nullable=false)
     */
    private $chitText;


}
