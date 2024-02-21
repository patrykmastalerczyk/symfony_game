<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharactersDescriptions
 *
 * @ORM\Table(name="characters_descriptions")
 * @ORM\Entity
 */
class CharactersDescriptions
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
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=100, nullable=false)
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="last_used", type="integer", nullable=false)
     */
    private $lastUsed;


}
