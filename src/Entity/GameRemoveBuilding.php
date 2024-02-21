<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 *
 * @ORM\Table(name="remove_buildings")
 * @ORM\Entity
 */
class GameRemoveBuilding
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="rb_id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="rb_model", type="integer", nullable=false)
     * @var int
     */
    private $model;

    /**
     * @ORM\Column(name="rb_interior", type="integer", nullable=false)
     * @var int
     */
    private $interior;

    /**
     * @ORM\Column(name="rb_radius", type="float", nullable=false)
     * @var float
     */
    private $radius;

    /**
     * @ORM\Column(name="rb_x", type="float", nullable=false)
     * @var float
     */
    private $x;

    /**
     * @ORM\Column(name="rb_y", type="float", nullable=false)
     * @var float
     */
    private $y;

    /**
     * @ORM\Column(name="rb_z", type="float", nullable=false)
     * @var float
     */
    private $z;

    /**
     * @var Map
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map", inversedBy="removeBuildings")
     * @ORM\JoinColumn(name="rb_map", referencedColumnName="uid")
     */
    private $map;

    /**
     * GameRemoveBuilding constructor.
     * @param int $model
     * @param int $interior
     * @param float $radius
     * @param float $x
     * @param float $y
     * @param float $z
     */
    public function __construct(int $model, int $interior, float $radius, float $x, float $y, float $z)
    {
        $this->model = $model;
        $this->interior = $interior;
        $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
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
}
