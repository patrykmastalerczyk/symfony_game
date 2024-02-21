<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doors
 *
 * @ORM\Table(name="doors", indexes={@ORM\Index(name="uid", columns={"door_uid"})})
 * @ORM\Entity
 */
class Doors
{
    /**
     * @var int
     *
     * @ORM\Column(name="door_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $doorUid;

    /**
     * @var int
     *
     * @ORM\Column(name="door_type", type="integer", nullable=false)
     */
    private $doorType;

    /**
     * @var string
     *
     * @ORM\Column(name="door_name", type="string", length=80, nullable=false)
     */
    private $doorName;

    /**
     * @var int
     *
     * @ORM\Column(name="door_ownertype", type="integer", nullable=false)
     */
    private $doorOwnertype;

    /**
     * @var int
     *
     * @ORM\Column(name="door_owner", type="integer", nullable=false)
     */
    private $doorOwner;

    /**
     * @var float
     *
     * @ORM\Column(name="door_enterx", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorEnterx;

    /**
     * @var float
     *
     * @ORM\Column(name="door_entery", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorEntery;

    /**
     * @var float
     *
     * @ORM\Column(name="door_enterz", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorEnterz;

    /**
     * @var float
     *
     * @ORM\Column(name="door_entera", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorEntera;

    /**
     * @var int
     *
     * @ORM\Column(name="door_entervw", type="integer", nullable=false)
     */
    private $doorEntervw;

    /**
     * @var int
     *
     * @ORM\Column(name="door_enterint", type="integer", nullable=false)
     */
    private $doorEnterint;

    /**
     * @var float
     *
     * @ORM\Column(name="door_exitx", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorExitx;

    /**
     * @var float
     *
     * @ORM\Column(name="door_exity", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorExity;

    /**
     * @var float
     *
     * @ORM\Column(name="door_exitz", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorExitz;

    /**
     * @var float
     *
     * @ORM\Column(name="door_exita", type="float", precision=10, scale=0, nullable=false)
     */
    private $doorExita;

    /**
     * @var int
     *
     * @ORM\Column(name="door_exitvw", type="integer", nullable=false, options={"default"="-1"})
     */
    private $doorExitvw = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="door_exitint", type="integer", nullable=false)
     */
    private $doorExitint;

    /**
     * @var int
     *
     * @ORM\Column(name="door_pickupid", type="integer", nullable=false)
     */
    private $doorPickupid;

    /**
     * @var int
     *
     * @ORM\Column(name="door_mapmodel", type="integer", nullable=false, options={"default"="-1"})
     */
    private $doorMapmodel = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="door_lock", type="integer", nullable=false)
     */
    private $doorLock;

    /**
     * @var int
     *
     * @ORM\Column(name="door_garage", type="integer", nullable=false)
     */
    private $doorGarage;

    /**
     * @var int
     *
     * @ORM\Column(name="door_enterpay", type="integer", nullable=false)
     */
    private $doorEnterpay;

    /**
     * @var int
     *
     * @ORM\Column(name="door_objects", type="integer", nullable=false, options={"default"="100"})
     */
    private $doorObjects = '100';

    /**
     * @var string
     *
     * @ORM\Column(name="door_audiourl", type="string", length=100, nullable=false)
     */
    private $doorAudiourl;

    /**
     * @var int
     *
     * @ORM\Column(name="door_value1", type="integer", nullable=false)
     */
    private $doorValue1;


}
