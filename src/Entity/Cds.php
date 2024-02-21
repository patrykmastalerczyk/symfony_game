<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cds
 *
 * @ORM\Table(name="cds")
 * @ORM\Entity
 */
class Cds
{
    /**
     * @var int
     *
     * @ORM\Column(name="cd_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdUid;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_url", type="string", length=64, nullable=false)
     */
    private $cdUrl;


}
