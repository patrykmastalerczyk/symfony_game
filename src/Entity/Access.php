<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access
 *
 * @ORM\Table(name="access")
 * @ORM\Entity
 */
class Access
{
    /**
     * @var int
     *
     * @ORM\Column(name="access_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accessUid;

    /**
     * @var int
     *
     * @ORM\Column(name="access_model", type="integer", nullable=false)
     */
    private $accessModel;

    /**
     * @var bool
     *
     * @ORM\Column(name="access_bone", type="boolean", nullable=false)
     */
    private $accessBone;

    /**
     * @var float
     *
     * @ORM\Column(name="access_posx", type="float", precision=10, scale=0, nullable=false)
     */
    private $accessPosx;

    /**
     * @var float
     *
     * @ORM\Column(name="access_posy", type="float", precision=10, scale=0, nullable=false)
     */
    private $accessPosy;

    /**
     * @var float
     *
     * @ORM\Column(name="access_posz", type="float", precision=10, scale=0, nullable=false)
     */
    private $accessPosz;

    /**
     * @var float
     *
     * @ORM\Column(name="access_rotx", type="float", precision=10, scale=0, nullable=false)
     */
    private $accessRotx;

    /**
     * @var float
     *
     * @ORM\Column(name="access_roty", type="float", precision=10, scale=0, nullable=false)
     */
    private $accessRoty;

    /**
     * @var float
     *
     * @ORM\Column(name="access_rotz", type="float", precision=10, scale=0, nullable=false)
     */
    private $accessRotz;

    /**
     * @var float
     *
     * @ORM\Column(name="access_scalex", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $accessScalex = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="access_scaley", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $accessScaley = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="access_scalez", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $accessScalez = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="access_price", type="integer", nullable=false)
     */
    private $accessPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="access_name", type="string", length=50, nullable=false)
     */
    private $accessName;


}
