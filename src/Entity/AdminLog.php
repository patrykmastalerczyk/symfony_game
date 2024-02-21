<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminLog
 *
 * @ORM\Table(name="admin_log")
 * @ORM\Entity
 */
class AdminLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logUid;

    /**
     * @var int
     *
     * @ORM\Column(name="log_admin", type="integer", nullable=false)
     */
    private $logAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="log_cmd", type="string", length=15, nullable=false)
     */
    private $logCmd;

    /**
     * @var string
     *
     * @ORM\Column(name="log_text", type="string", length=300, nullable=false)
     */
    private $logText;

    /**
     * @var int
     *
     * @ORM\Column(name="log_time", type="integer", nullable=false)
     */
    private $logTime;


}
