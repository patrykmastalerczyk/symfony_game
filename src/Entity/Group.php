<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Group
{
    /**
     * @var int
     *
     * @ORM\Column(name="group_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="group_cash", type="integer", nullable=false)
     */
    private $cash;

    /**
     * @var int
     *
     * @ORM\Column(name="group_dotation", type="integer", nullable=false)
     */
    private $dotation;

    /**
     * @var int
     *
     * @ORM\Column(name="group_master_type", type="smallint", nullable=false)
     */
    private $masterType;

    /**
     * @var int
     *
     * @ORM\Column(name="group_type", type="smallint", nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="group_owner", type="integer", nullable=false)
     */
    private $owner;

    /**
     * @var int
     *
     * @ORM\Column(name="group_value1", type="integer", nullable=false)
     */
    private $value1;

    /**
     * @var int
     *
     * @ORM\Column(name="group_value2", type="integer", nullable=false)
     */
    private $value2;

    /**
     * @var string
     *
     * @ORM\Column(name="group_color", type="decimal", precision=10, scale=0, nullable=false, options={"default"="16777215"})
     */
    private $color = '16777215';

    /**
     * @var int
     *
     * @ORM\Column(name="group_activity", type="integer", nullable=false)
     */
    private $activity;

    /**
     * @var string
     *
     * @ORM\Column(name="group_tag", type="string", length=10, nullable=false, options={"default"="NONE"})
     */
    private $tag = 'NONE';

    /**
     * @var int
     *
     * @ORM\Column(name="group_lasttax", type="integer", nullable=false)
     */
    private $lastTax;

    /**
     * @var int
     *
     * @ORM\Column(name="group_flags", type="integer", nullable=false)
     */
    private $flags;

    /**
     * @var string
     *
     * @ORM\Column(name="group_advertise", type="string", length=64, nullable=false)
     */
    private $advertise;

    /**
     * @var int
     *
     * @ORM\Column(name="group_date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="group_pdtime", type="integer", nullable=false)
     */
    private $pdTime;

    /**
     * @var float
     *
     * @ORM\Column(name="group_posx", type="float", precision=10, scale=0, nullable=false)
     */
    private $posX;

    /**
     * @var float
     *
     * @ORM\Column(name="group_posy", type="float", precision=10, scale=0, nullable=false)
     */
    private $posY;

    /**
     * @var float
     *
     * @ORM\Column(name="group_posz", type="float", precision=10, scale=0, nullable=false)
     */
    private $posZ;

    /**
     * @var float
     *
     * @ORM\Column(name="group_posa", type="float", precision=10, scale=0, nullable=false)
     */
    private $posA;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getCash(): ?int
    {
        return $this->cash;
    }

    public function setCash(int $cash): self
    {
        $this->cash = $cash;

        return $this;
    }

    public function getDotation(): ?int
    {
        return $this->dotation;
    }

    public function setDotation(int $dotation): self
    {
        $this->dotation = $dotation;

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

    public function getColor(): ?int
    {
        return $this->color;
    }

    public function setColor(int $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getFlags(): ?int
    {
        return $this->flags;
    }

    public function setFlags(int $flags): self
    {
        $this->flags = $flags;

        return $this;
    }

    public function __toString()
    {
        return sprintf("%s (%d)", $this->getName(), $this->getId());
    }
}
