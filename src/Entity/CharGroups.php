<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharGroups
 *
 * @ORM\Table(name="char_groups", indexes={@ORM\Index(name="char_uid", columns={"char_uid"})})
 * @ORM\Entity
 */
class CharGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var int
     *
     * @ORM\Column(name="char_uid", type="integer", nullable=false)
     */
    private $charUid;

    /**
     * @var int
     *
     * @ORM\Column(name="group_belongs", type="integer", nullable=false)
     */
    private $groupBelongs;

    /**
     * @var int
     *
     * @ORM\Column(name="group_perm", type="smallint", nullable=false)
     */
    private $groupPerm;

    /**
     * @var string
     *
     * @ORM\Column(name="group_title", type="string", length=32, nullable=false, options={"default"="-"})
     */
    private $groupTitle = '-';

    /**
     * @var int
     *
     * @ORM\Column(name="group_payment", type="integer", nullable=false)
     */
    private $groupPayment;

    /**
     * @var int
     *
     * @ORM\Column(name="group_skin", type="smallint", nullable=false)
     */
    private $groupSkin;

    /**
     * @var string
     *
     * @ORM\Column(name="group_rank", type="string", length=50, nullable=false)
     */
    private $groupRank;

    /**
     * @var bool
     *
     * @ORM\Column(name="group_payday", type="boolean", nullable=false)
     */
    private $groupPayday = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="group_duty_time", type="integer", nullable=false)
     */
    private $groupDutyTime;

    /**
     * @var int
     *
     * @ORM\Column(name="group_wydatki", type="integer", nullable=false)
     */
    private $groupWydatki;

    /**
     * @var int
     *
     * @ORM\Column(name="group_premia", type="integer", nullable=false)
     */
    private $groupPremia;


}
