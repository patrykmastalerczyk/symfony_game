<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items", indexes={@ORM\Index(name="owner", columns={"item_owner"})})
 * @ORM\Entity
 */
class Items
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemUid;

    /**
     * @var int
     *
     * @ORM\Column(name="item_model", type="integer", nullable=false)
     */
    private $itemModel;

    /**
     * @var string
     *
     * @ORM\Column(name="item_name", type="string", length=32, nullable=false)
     */
    private $itemName;

    /**
     * @var int
     *
     * @ORM\Column(name="item_value1", type="integer", nullable=false)
     */
    private $itemValue1;

    /**
     * @var int
     *
     * @ORM\Column(name="item_value2", type="integer", nullable=false)
     */
    private $itemValue2;

    /**
     * @var bool
     *
     * @ORM\Column(name="item_type", type="boolean", nullable=false)
     */
    private $itemType;

    /**
     * @var float
     *
     * @ORM\Column(name="item_posx", type="float", precision=10, scale=0, nullable=false)
     */
    private $itemPosx;

    /**
     * @var float
     *
     * @ORM\Column(name="item_posy", type="float", precision=10, scale=0, nullable=false)
     */
    private $itemPosy;

    /**
     * @var float
     *
     * @ORM\Column(name="item_posz", type="float", precision=10, scale=0, nullable=false)
     */
    private $itemPosz;

    /**
     * @var float
     *
     * @ORM\Column(name="item_rotx", type="float", precision=10, scale=0, nullable=false)
     */
    private $itemRotx;

    /**
     * @var float
     *
     * @ORM\Column(name="item_roty", type="float", precision=10, scale=0, nullable=false)
     */
    private $itemRoty;

    /**
     * @var float
     *
     * @ORM\Column(name="item_rotz", type="float", precision=10, scale=0, nullable=false)
     */
    private $itemRotz;

    /**
     * @var int
     *
     * @ORM\Column(name="item_world", type="integer", nullable=false)
     */
    private $itemWorld;

    /**
     * @var int
     *
     * @ORM\Column(name="item_amount", type="integer", nullable=false)
     */
    private $itemAmount;

    /**
     * @var int
     *
     * @ORM\Column(name="item_amountmax", type="integer", nullable=false, options={"default"="1000"})
     */
    private $itemAmountmax = '1000';

    /**
     * @var int
     *
     * @ORM\Column(name="item_price", type="integer", nullable=false)
     */
    private $itemPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="item_interior", type="smallint", nullable=false)
     */
    private $itemInterior;

    /**
     * @var int
     *
     * @ORM\Column(name="item_ownertype", type="smallint", nullable=false)
     */
    private $itemOwnertype;

    /**
     * @var int
     *
     * @ORM\Column(name="item_owner", type="integer", nullable=false)
     */
    private $itemOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="item_group", type="integer", nullable=false)
     */
    private $itemGroup;

    /**
     * @var bool
     *
     * @ORM\Column(name="item_used", type="boolean", nullable=false)
     */
    private $itemUsed;

    /**
     * @var int
     *
     * @ORM\Column(name="item_created", type="integer", nullable=false)
     */
    private $itemCreated;


}
