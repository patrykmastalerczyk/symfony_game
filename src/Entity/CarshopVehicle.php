<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * CarshopVehicle
 *
 * @ORM\Table(name="carshop_vehicle")
 * @ORM\Entity
 */
class CarshopVehicle 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @var int
     */
	private $id;

    /**
     * @ORM\Column(name="model", type="integer", nullable=false)
     * @var int
     */
	private $model;

    /**
     * @ORM\Column(name="category", type="integer", nullable=false)
     * @var int
     */
	private $category;

    /**
     * @ORM\Column(name="price", type="integer", nullable=false)
     * @var int
     */
	private $price;

    /**
     * @ORM\Column(name="fuel_type", type="integer", nullable=false)
     * @var int
     */
	private $fuelType;

    /**
     * @ORM\Column(name="min_level", type="integer", nullable=false)
     * @var int
     */
	private $minLevel;

    /**
     * @ORM\Column(name="required_inhabitance", type="integer", nullable=false)
     * @var int
     */
	private $requiredInhabitance;

    /**
     * @ORM\Column(name="group_type", type="integer", nullable=false)
     * @var int
     */
	private $groupType;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getModel(): ?int
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
    public function getCategory(): ?int
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory(int $category): void
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getFuelType(): ?int
    {
        return $this->fuelType;
    }

    /**
     * @param int $fuelType
     */
    public function setFuelType(int $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    /**
     * @return int
     */
    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }

    /**
     * @param int $minLevel
     */
    public function setMinLevel(int $minLevel): void
    {
        $this->minLevel = $minLevel;
    }

    /**
     * @return int
     */
    public function getRequiredInhabitance(): ?int
    {
        return $this->requiredInhabitance;
    }

    /**
     * @param int $requiredInhabitance
     */
    public function setRequiredInhabitance(int $requiredInhabitance): void
    {
        $this->requiredInhabitance = $requiredInhabitance;
    }

    /**
     * @return int
     */
    public function getGroupType(): ?int
    {
        return $this->groupType;
    }

    /**
     * @param int $groupType
     */
    public function setGroupType(int $groupType): void
    {
        $this->groupType = $groupType;
    }
}