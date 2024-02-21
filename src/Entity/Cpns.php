<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpns
 *
 * @ORM\Table(name="cpns")
 * @ORM\Entity
 */
class Cpns
{
    /**
     * @var int
     *
     * @ORM\Column(name="cpn_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpnUid;

    /**
     * @var string
     *
     * @ORM\Column(name="cpn_name", type="string", length=50, nullable=false)
     */
    private $cpnName;

    /**
     * @var float
     *
     * @ORM\Column(name="cpn_posx", type="float", precision=10, scale=0, nullable=false)
     */
    private $cpnPosx;

    /**
     * @var float
     *
     * @ORM\Column(name="cpn_posy", type="float", precision=10, scale=0, nullable=false)
     */
    private $cpnPosy;

    /**
     * @var float
     *
     * @ORM\Column(name="cpn_posz", type="float", precision=10, scale=0, nullable=false)
     */
    private $cpnPosz;

    /**
     * @var float
     *
     * @ORM\Column(name="cpn_ratio", type="float", precision=10, scale=0, nullable=false)
     */
    private $cpnRatio;

    /**
     * @var int
     *
     * @ORM\Column(name="cpn_maxfuel", type="integer", nullable=false)
     */
    private $cpnMaxfuel;

    /**
     * @var int
     *
     * @ORM\Column(name="cpn_availablefuel", type="integer", nullable=false)
     */
    private $cpnAvailablefuel;

    /**
     * @var string
     *
     * @ORM\Column(name="cpn_fuels", type="string", length=100, nullable=false)
     */
    private $cpnFuels;


}
