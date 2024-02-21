<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Files
 *
 * @ORM\Table(name="files")
 * @ORM\Entity
 */
class Files
{
    /**
     * @var int
     *
     * @ORM\Column(name="file_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileUid;

    /**
     * @var int
     *
     * @ORM\Column(name="file_type", type="integer", nullable=false)
     */
    private $fileType;

    /**
     * @var int
     *
     * @ORM\Column(name="file_ownertype", type="integer", nullable=false)
     */
    private $fileOwnertype;

    /**
     * @var int
     *
     * @ORM\Column(name="file_owner", type="integer", nullable=false)
     */
    private $fileOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="file_giver", type="integer", nullable=false)
     */
    private $fileGiver;

    /**
     * @var int
     *
     * @ORM\Column(name="file_time", type="integer", nullable=false)
     */
    private $fileTime;

    /**
     * @var int
     *
     * @ORM\Column(name="file_value", type="integer", nullable=false)
     */
    private $fileValue;

    /**
     * @var int
     *
     * @ORM\Column(name="file_valuescore", type="integer", nullable=false)
     */
    private $fileValuescore;

    /**
     * @var int
     *
     * @ORM\Column(name="file_givergroup", type="integer", nullable=false)
     */
    private $fileGivergroup;

    /**
     * @var int
     *
     * @ORM\Column(name="file_paidtime", type="integer", nullable=false)
     */
    private $filePaidtime;

    /**
     * @var string
     *
     * @ORM\Column(name="file_desc", type="string", length=150, nullable=false)
     */
    private $fileDesc;


}
