<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Product
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 * @App\Validator\Constraints\ProductHasAnyOwner
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="product_grouptype", type="simple_array", nullable=true)
     */
    private $groupType = [];

    /**
     * @var ArrayCollection|Group[]
     *
     * @ManyToMany(targetEntity="Group")
     * @JoinTable(name="products_groups",
     *      joinColumns={@JoinColumn(name="product_id", referencedColumnName="product_uid", onDelete="cascade")},
     *      inverseJoinColumns={@JoinColumn(name="group_id", referencedColumnName="group_uid", onDelete="cascade")}
     *      )
     */
    private $groups = [];

    /**
     * @var int
     *
     * @ORM\Column(name="product_type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="product_model", type="integer", nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="product_listname", type="string", length=100, nullable=false)
     */
    private $listName;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="product_value1", type="integer", nullable=false)
     */
    private $value1;

    /**
     * @var int
     *
     * @ORM\Column(name="product_value2", type="integer", nullable=false)
     */
    private $value2;

    /**
     * @var int
     *
     * @ORM\Column(name="product_price", type="integer", nullable=false)
     */
    private $price;

    public function __construct()
    {
        $this->groups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupType(): ?array
    {
        array_walk($this->groupType, function(&$val) {
            if( (int)$val == 0 ) $val = null;
            else $val = (int)$val;
        });

        return sizeof($this->groupType) == 1 && $this->groupType[0] == null ? null : $this->groupType;
    }

    public function setGroupType(array $groupType): self
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * @return Collection|Group[]
     */
    public function getGroups(): Collection
    {
        return $this->groups;
    }

    public function addGroup(Group $group): self
    {
        if (!$this->groups->contains($group)) {
            $this->groups[] = $group;
        }

        return $this;
    }

    public function removeGroup(Group $group): self
    {
        if ($this->groups->contains($group)) {
            $this->groups->removeElement($group);
        }

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getModel(): ?int
    {
        return $this->model;
    }

    public function setModel(int $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getListName(): ?string
    {
        return $this->listName;
    }

    public function setListName(string $listName): self
    {
        $this->listName = $listName;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getValue1(): ?int
    {
        return $this->value1;
    }

    public function setValue1(int $value1): self
    {
        $this->value1 = $value1;

        return $this;
    }

    public function getValue2(): ?int
    {
        return $this->value2;
    }

    public function setValue2(int $value2): self
    {
        $this->value2 = $value2;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
