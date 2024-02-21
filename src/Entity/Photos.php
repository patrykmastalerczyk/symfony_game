<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos")
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var int
     *
     * @ORM\Column(name="photo_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photoUid;

    /**
     * @var int
     *
     * @ORM\Column(name="photo_owner", type="integer", nullable=false)
     */
    private $photoOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="photo_vehicle_uid", type="integer", nullable=false)
     */
    private $photoVehicleUid;

    /**
     * @var int
     *
     * @ORM\Column(name="photo_speed_limit", type="integer", nullable=false)
     */
    private $photoSpeedLimit;

    /**
     * @var int
     *
     * @ORM\Column(name="photo_speed", type="integer", nullable=false)
     */
    private $photoSpeed;

    /**
     * @var int
     *
     * @ORM\Column(name="photo_date", type="integer", nullable=false)
     */
    private $photoDate;


}
