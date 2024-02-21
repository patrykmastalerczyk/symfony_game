<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectProto
 *
 * @ORM\Table(name="object_proto")
 * @ORM\Entity
 */
class ObjectProto
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
     * @ORM\Column(name="value1", type="integer", nullable=false)
     */
    private $value1;

    /**
     * @var int
     *
     * @ORM\Column(name="value2", type="integer", nullable=false)
     */
    private $value2;

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
     * @ORM\Column(name="rx", type="float", precision=10, scale=0, nullable=false)
     */
    private $rx;

    /**
     * @var float
     *
     * @ORM\Column(name="ry", type="float", precision=10, scale=0, nullable=false)
     */
    private $ry;

    /**
     * @var float
     *
     * @ORM\Column(name="rz", type="float", precision=10, scale=0, nullable=false)
     */
    private $rz;


}
