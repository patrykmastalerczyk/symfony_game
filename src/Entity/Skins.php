<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skins
 *
 * @ORM\Table(name="skins", indexes={@ORM\Index(name="owner", columns={"skin_group", "skin_extraid"}), @ORM\Index(name="skin_id", columns={"skin_id"})})
 * @ORM\Entity
 */
class Skins
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="skin_id", type="smallint", nullable=false)
     */
    private $skinId;

    /**
     * @var string
     *
     * @ORM\Column(name="skin_name", type="string", length=32, nullable=false)
     */
    private $skinName;

    /**
     * @var bool
     *
     * @ORM\Column(name="skin_sex", type="boolean", nullable=false)
     */
    private $skinSex;

    /**
     * @var int
     *
     * @ORM\Column(name="skin_price", type="smallint", nullable=false)
     */
    private $skinPrice = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="skin_group", type="boolean", nullable=false)
     */
    private $skinGroup = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skin_extraid", type="integer", nullable=false)
     */
    private $skinExtraid = '0';


}
