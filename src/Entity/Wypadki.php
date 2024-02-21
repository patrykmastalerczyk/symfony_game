<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wypadki
 *
 * @ORM\Table(name="wypadki")
 * @ORM\Entity
 */
class Wypadki
{
    /**
     * @var int
     *
     * @ORM\Column(name="wypadek_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wypadekUid;

    /**
     * @var string
     *
     * @ORM\Column(name="wypadek_name", type="string", length=150, nullable=false)
     */
    private $wypadekName;


}
