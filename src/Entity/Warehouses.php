<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouses
 *
 * @ORM\Table(name="warehouses")
 * @ORM\Entity
 */
class Warehouses
{
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="owner_type", type="integer", nullable=false)
     */
    private $ownerType;

    /**
     * @var int
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="banned_items", type="string", length=500, nullable=false)
     */
    private $bannedItems;


}
