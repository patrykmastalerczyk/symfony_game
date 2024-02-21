<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AntyCrasher
 *
 * @ORM\Table(name="anty_crasher")
 * @ORM\Entity
 */
class AntyCrasher
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
     * @ORM\Column(name="update", type="integer", nullable=false)
     */
    private $update;


}
