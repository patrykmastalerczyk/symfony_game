<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areas
 *
 * @ORM\Table(name="areas")
 * @ORM\Entity
 */
class Areas
{
    /**
     * @var int
     *
     * @ORM\Column(name="area_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $areaUid;

    /**
     * @var int
     *
     * @ORM\Column(name="area_shape", type="integer", nullable=false)
     */
    private $areaShape;

    /**
     * @var int
     *
     * @ORM\Column(name="area_type", type="integer", nullable=false)
     */
    private $areaType;

    /**
     * @var int
     *
     * @ORM\Column(name="area_ownertype", type="integer", nullable=false)
     */
    private $areaOwnertype;

    /**
     * @var int
     *
     * @ORM\Column(name="area_owner", type="integer", nullable=false)
     */
    private $areaOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="area_objects", type="integer", nullable=false)
     */
    private $areaObjects;

    /**
     * @var int
     *
     * @ORM\Column(name="area_vw", type="integer", nullable=false)
     */
    private $areaVw;

    /**
     * @var float
     *
     * @ORM\Column(name="area_size", type="float", precision=10, scale=0, nullable=false)
     */
    private $areaSize;

    /**
     * @var string
     *
     * @ORM\Column(name="area_point1", type="string", length=100, nullable=false)
     */
    private $areaPoint1;

    /**
     * @var string
     *
     * @ORM\Column(name="area_point2", type="string", length=100, nullable=false)
     */
    private $areaPoint2;


}
