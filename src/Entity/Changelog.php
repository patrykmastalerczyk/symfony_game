<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Changelog
 *
 * @ORM\Table(name="changelog")
 * @ORM\Entity
 */
class Changelog
{
    /**
     * @var int
     *
     * @ORM\Column(name="change_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $changeUid;

    /**
     * @var int
     *
     * @ORM\Column(name="change_date", type="integer", nullable=false)
     */
    private $changeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="change_desc", type="string", length=80, nullable=false)
     */
    private $changeDesc;


}
