<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WypadkiResources
 *
 * @ORM\Table(name="wypadki_resources")
 * @ORM\Entity
 */
class WypadkiResources
{
    /**
     * @var int
     *
     * @ORM\Column(name="wr_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wrUid;

    /**
     * @var int
     *
     * @ORM\Column(name="wr_owner", type="integer", nullable=false)
     */
    private $wrOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="wr_type", type="integer", nullable=false)
     */
    private $wrType;

    /**
     * @var float
     *
     * @ORM\Column(name="wr_posx", type="float", precision=10, scale=0, nullable=false)
     */
    private $wrPosx;

    /**
     * @var float
     *
     * @ORM\Column(name="wr_posy", type="float", precision=10, scale=0, nullable=false)
     */
    private $wrPosy;

    /**
     * @var float
     *
     * @ORM\Column(name="wr_posz", type="float", precision=10, scale=0, nullable=false)
     */
    private $wrPosz;

    /**
     * @var float
     *
     * @ORM\Column(name="wr_posa", type="float", precision=10, scale=0, nullable=false)
     */
    private $wrPosa;

    /**
     * @var int
     *
     * @ORM\Column(name="wr_model", type="integer", nullable=false)
     */
    private $wrModel;


}
