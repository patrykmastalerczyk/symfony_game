<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicles
 *
 * @ORM\Table(name="vehicles", indexes={@ORM\Index(name="owner", columns={"vehicle_owner", "vehicle_ownertype"})})
 * @ORM\Entity
 */
class Vehicles
{
    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vehicleUid;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_model", type="smallint", nullable=false)
     */
    private $vehicleModel;

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_posx", type="float", precision=10, scale=0, nullable=false)
     */
    private $vehiclePosx;

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_posy", type="float", precision=10, scale=0, nullable=false)
     */
    private $vehiclePosy;

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_posz", type="float", precision=10, scale=0, nullable=false)
     */
    private $vehiclePosz;

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_posa", type="float", precision=10, scale=0, nullable=false)
     */
    private $vehiclePosa;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_world", type="integer", nullable=false)
     */
    private $vehicleWorld = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_interior", type="smallint", nullable=false)
     */
    private $vehicleInterior = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_color1", type="smallint", nullable=false)
     */
    private $vehicleColor1;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_color2", type="smallint", nullable=false)
     */
    private $vehicleColor2;

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_fuel", type="float", precision=10, scale=0, nullable=false)
     */
    private $vehicleFuel;

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicle_fueltype", type="boolean", nullable=false)
     */
    private $vehicleFueltype = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_health", type="float", precision=10, scale=0, nullable=false, options={"default"="1000"})
     */
    private $vehicleHealth = '1000';

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_mileage", type="float", precision=10, scale=0, nullable=false)
     */
    private $vehicleMileage;

    /**
     * @var float
     *
     * @ORM\Column(name="vehicle_przeglad_mileage", type="float", precision=10, scale=0, nullable=false)
     */
    private $vehiclePrzegladMileage;

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicle_locked", type="boolean", nullable=false, options={"default"="1"})
     */
    private $vehicleLocked = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_visual", type="string", length=32, nullable=false, options={"default"="0 0 0 0"})
     */
    private $vehicleVisual = '0 0 0 0';

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicle_paintjob", type="boolean", nullable=false, options={"default"="3"})
     */
    private $vehiclePaintjob = '3';

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicle_access", type="boolean", nullable=false)
     */
    private $vehicleAccess = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_blockwheel", type="integer", nullable=false)
     */
    private $vehicleBlockwheel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_register", type="string", length=12, nullable=false)
     */
    private $vehicleRegister;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_owner", type="integer", nullable=false)
     */
    private $vehicleOwner = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_owner_sub", type="integer", nullable=false)
     */
    private $vehicleOwnerSub;

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicle_ownertype", type="boolean", nullable=false)
     */
    private $vehicleOwnertype = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicle_tmp", type="boolean", nullable=false)
     */
    private $vehicleTmp;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_sys_lights", type="string", length=30, nullable=false)
     */
    private $vehicleSysLights;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_sys_brakes", type="string", length=30, nullable=false)
     */
    private $vehicleSysBrakes;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_sys_tires", type="string", length=30, nullable=false)
     */
    private $vehicleSysTires;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_sys_battery", type="string", length=30, nullable=false)
     */
    private $vehicleSysBattery;

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicle_block", type="boolean", nullable=false)
     */
    private $vehicleBlock;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_blockprice", type="integer", nullable=false)
     */
    private $vehicleBlockprice;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_blockgroup", type="integer", nullable=false)
     */
    private $vehicleBlockgroup;


}
