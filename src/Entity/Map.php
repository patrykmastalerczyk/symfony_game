<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Map
 *
 * @ORM\Table(name="maps")
 * @ORM\Entity
 */
class Map
{
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Member
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Member", inversedBy="maps")
     * @ORM\JoinColumn(name="gid", referencedColumnName="member_id")
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var GameObject[]|Collection
     *
     * @ORM\OneToMany(targetEntity="GameObject", mappedBy="map", cascade={"persist", "remove"})
     */
    private $objects;

    /**
     * @var GameRemoveBuilding[]|Collection
     *
     * @ORM\OneToMany(targetEntity="GameRemoveBuilding", mappedBy="map", cascade={"persist", "remove"})
     */
    private $removeBuildings;

    public function __construct()
    {
        $this->objects = new ArrayCollection();
        $this->removeBuildings = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Member
     */
    public function getOwner(): ?Member
    {
        return $this->owner;
    }

    /**
     * @param Member $owner
     */
    public function setOwner(Member $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getName(): ?string
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

    /**
     * @return Collection|GameObject[]
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * @param Collection|GameObject[] $objects
     */
    public function setObjects($objects): void
    {
        $this->objects = $objects;

        foreach($objects as $object) {
            $object->setMap($this);
        }
    }

    /**
     * @return int
     */
    public function getObjectsCount(): int
    {
        return $this->objects->count();
    }

    /**
     * @return GameRemoveBuilding[]|Collection
     */
    public function getRemoveBuildings()
    {
        return $this->removeBuildings;
    }

    /**
     * @param Collection|GameRemoveBuilding[] $removeBuildings
     */
    public function setRemoveBuildings($removeBuildings): void
    {
        $this->removeBuildings = $removeBuildings;

        foreach ($removeBuildings as $building) {
            $building->setMap($this);
        }
    }

    public function getRemoveBuildingsCount(): int
    {
        return $this->removeBuildings->count();
    }
}
