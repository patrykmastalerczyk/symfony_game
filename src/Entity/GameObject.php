<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 *
 * @ORM\Table(name="objects")
 * @ORM\Entity
 */
class GameObject
{
    /**
     * @var int
     *
     * @ORM\Column(name="object_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="object_type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="object_ownertype", type="integer", nullable=false)
     */
    private $ownerType;

    /**
     * @var int
     *
     * @ORM\Column(name="object_owner", type="integer", nullable=false)
     */
    private $owner;

    /**
     * @var Map
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map", inversedBy="objects")
     * @ORM\JoinColumn(name="object_map", referencedColumnName="uid")
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="object_material", type="string", length=100, nullable=false)
     */
    private $material = '';

    /**
     * @var int
     *
     * @ORM\Column(name="object_model", type="integer", nullable=false)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="object_world", type="integer", nullable=false)
     */
    private $world = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="object_stream", type="float", precision=10, scale=0, nullable=false)
     */
    private $stream = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="object_posx", type="float", precision=10, scale=0, nullable=false)
     */
    private $posX;

    /**
     * @var float
     *
     * @ORM\Column(name="object_posy", type="float", precision=10, scale=0, nullable=false)
     */
    private $posY;

    /**
     * @var float
     *
     * @ORM\Column(name="object_posz", type="float", precision=10, scale=0, nullable=false)
     */
    private $posZ;

    /**
     * @var float
     *
     * @ORM\Column(name="object_rotx", type="float", precision=10, scale=0, nullable=false)
     */
    private $rotX;

    /**
     * @var float
     *
     * @ORM\Column(name="object_roty", type="float", precision=10, scale=0, nullable=false)
     */
    private $rotY;

    /**
     * @var float
     *
     * @ORM\Column(name="object_rotz", type="float", precision=10, scale=0, nullable=false)
     */
    private $rotZ;

    /**
     * @var float
     *
     * @ORM\Column(name="object_gatex", type="float", precision=10, scale=0, nullable=false)
     */
    private $gateX = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="object_gatey", type="float", precision=10, scale=0, nullable=false)
     */
    private $gateY = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="object_gatez", type="float", precision=10, scale=0, nullable=false)
     */
    private $gateZ = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="object_gaterotx", type="float", precision=10, scale=0, nullable=false)
     */
    private $gateRotX = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="object_gateroty", type="float", precision=10, scale=0, nullable=false)
     */
    private $gateRotY = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="object_gaterotz", type="float", precision=10, scale=0, nullable=false)
     */
    private $gateRotZ = 0.0;

    /**
     * @var int
     *
     * @ORM\Column(name="object_gate", type="smallint", nullable=false)
     */
    private $gate = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="object_value1", type="integer", nullable=false)
     */
    private $value1 = 0.0;

    /**
     * @var int
     *
     * @ORM\Column(name="object_value2", type="integer", nullable=false)
     */
    private $value2 = 0.0;

    /**
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOwnerType(): int
    {
        return $this->ownerType;
    }

    /**
     * @param int $ownerType
     */
    public function setOwnerType(int $ownerType): void
    {
        $this->ownerType = $ownerType;
    }

    /**
     * @return int
     */
    public function getOwner(): int
    {
        return $this->owner;
    }

    /**
     * @param int $owner
     */
    public function setOwner(int $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return Map
     */
    public function getMap(): Map
    {
        return $this->map;
    }

    /**
     * @param Map $map
     */
    public function setMap(Map $map): void
    {
        $this->map = $map;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * @param string $material
     */
    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }

    /**
     * @return int
     */
    public function getModel(): int
    {
        return $this->model;
    }

    /**
     * @param int $model
     */
    public function setModel(int $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getWorld(): int
    {
        return $this->world;
    }

    /**
     * @param int $world
     */
    public function setWorld(int $world): void
    {
        $this->world = $world;
    }

    /**
     * @return float
     */
    public function getStream(): float
    {
        return $this->stream;
    }

    /**
     * @param float $stream
     */
    public function setStream(float $stream): void
    {
        $this->stream = $stream;
    }

    /**
     * @return float
     */
    public function getPosX(): float
    {
        return $this->posX;
    }

    /**
     * @param float $posX
     */
    public function setPosX(float $posX): void
    {
        $this->posX = $posX;
    }

    /**
     * @return float
     */
    public function getPosY(): float
    {
        return $this->posY;
    }

    /**
     * @param float $posY
     */
    public function setPosY(float $posY): void
    {
        $this->posY = $posY;
    }

    /**
     * @return float
     */
    public function getPosZ(): float
    {
        return $this->posZ;
    }

    /**
     * @param float $posZ
     */
    public function setPosZ(float $posZ): void
    {
        $this->posZ = $posZ;
    }

    /**
     * @return float
     */
    public function getRotX(): float
    {
        return $this->rotX;
    }

    /**
     * @param float $rotX
     */
    public function setRotX(float $rotX): void
    {
        $this->rotX = $rotX;
    }

    /**
     * @return float
     */
    public function getRotY(): float
    {
        return $this->rotY;
    }

    /**
     * @param float $rotY
     */
    public function setRotY(float $rotY): void
    {
        $this->rotY = $rotY;
    }

    /**
     * @return float
     */
    public function getRotZ(): float
    {
        return $this->rotZ;
    }

    /**
     * @param float $rotZ
     */
    public function setRotZ(float $rotZ): void
    {
        $this->rotZ = $rotZ;
    }

    /**
     * @return float
     */
    public function getGateX(): float
    {
        return $this->gateX;
    }

    /**
     * @param float $gateX
     */
    public function setGateX(float $gateX): void
    {
        $this->gateX = $gateX;
    }

    /**
     * @return float
     */
    public function getGateY(): float
    {
        return $this->gateY;
    }

    /**
     * @param float $gateY
     */
    public function setGateY(float $gateY): void
    {
        $this->gateY = $gateY;
    }

    /**
     * @return float
     */
    public function getGateZ(): float
    {
        return $this->gateZ;
    }

    /**
     * @param float $gateZ
     */
    public function setGateZ(float $gateZ): void
    {
        $this->gateZ = $gateZ;
    }

    /**
     * @return float
     */
    public function getGateRotX(): float
    {
        return $this->gateRotX;
    }

    /**
     * @param float $gateRotX
     */
    public function setGateRotX(float $gateRotX): void
    {
        $this->gateRotX = $gateRotX;
    }

    /**
     * @return float
     */
    public function getGateRotY(): float
    {
        return $this->gateRotY;
    }

    /**
     * @param float $gateRotY
     */
    public function setGateRotY(float $gateRotY): void
    {
        $this->gateRotY = $gateRotY;
    }

    /**
     * @return float
     */
    public function getGateRotZ(): float
    {
        return $this->gateRotZ;
    }

    /**
     * @param float $gateRotZ
     */
    public function setGateRotZ(float $gateRotZ): void
    {
        $this->gateRotZ = $gateRotZ;
    }

    /**
     * @return int
     */
    public function getGate(): int
    {
        return $this->gate;
    }

    /**
     * @param int $gate
     */
    public function setGate(int $gate): void
    {
        $this->gate = $gate;
    }

    /**
     * @return int
     */
    public function getValue1(): int
    {
        return $this->value1;
    }

    /**
     * @param int $value1
     */
    public function setValue1(int $value1): void
    {
        $this->value1 = $value1;
    }

    /**
     * @return int
     */
    public function getValue2(): int
    {
        return $this->value2;
    }

    /**
     * @param int $value2
     */
    public function setValue2(int $value2): void
    {
        $this->value2 = $value2;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
