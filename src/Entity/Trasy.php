<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trasy
 *
 * @ORM\Table(name="trasy")
 * @ORM\Entity
 */
class Trasy
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
     * @ORM\Column(name="vmodel", type="integer", nullable=false)
     */
    private $vmodel;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="start", type="integer", nullable=false)
     */
    private $start;

    /**
     * @var int
     *
     * @ORM\Column(name="end", type="integer", nullable=false)
     */
    private $end;


}
