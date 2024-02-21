<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefaultInteriors
 *
 * @ORM\Table(name="default_interiors")
 * @ORM\Entity
 */
class DefaultInteriors
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="interior", type="integer", nullable=false)
     */
    private $interior;

    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=false)
     */
    private $z;

    /**
     * @var float
     *
     * @ORM\Column(name="a", type="float", precision=10, scale=0, nullable=false)
     */
    private $a;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;


}
