<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buses
 *
 * @ORM\Table(name="buses")
 * @ORM\Entity
 */
class Buses
{
    /**
     * @var int
     *
     * @ORM\Column(name="bus_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $busUid;

    /**
     * @var string
     *
     * @ORM\Column(name="bus_name", type="string", length=60, nullable=false)
     */
    private $busName;

    /**
     * @var float
     *
     * @ORM\Column(name="bus_ratio", type="float", precision=10, scale=0, nullable=false)
     */
    private $busRatio;


}
