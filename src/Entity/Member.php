<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 *
 * @ORM\Table(name="core_members", indexes={@ORM\Index(name="members_l_username", columns={"members_l_username"}), @ORM\Index(name="blogs_recache", columns={"blogs_recache"}), @ORM\Index(name="twitter_id", columns={"twitter_id"}), @ORM\Index(name="joined", columns={"joined"}), @ORM\Index(name="ip_address", columns={"ip_address"}), @ORM\Index(name="member_banned", columns={"member_banned"}), @ORM\Index(name="bday_day", columns={"bday_day"}), @ORM\Index(name="member_groups", columns={"member_group_id", "mgroup_others"}), @ORM\Index(name="mgroup", columns={"member_group_id", "member_id"}), @ORM\Index(name="members_l_display_name", columns={"members_l_display_name"}), @ORM\Index(name="email", columns={"email"}), @ORM\Index(name="fb_uid", columns={"fb_uid"}), @ORM\Index(name="failed_login_count", columns={"failed_login_count"}), @ORM\Index(name="members_bitoptions", columns={"members_bitoptions"}), @ORM\Index(name="bday_month", columns={"bday_month"})})
 * @ORM\Entity
 */
class Member
{
    /**
     * @var int
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberId;

    /**
     * @var Map[]|Collection
     *
     * @ORM\OneToMany(targetEntity="Map", mappedBy="owner")
     */
    private $maps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="member_group_id", type="smallint", nullable=false)
     */
    private $memberGroupId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="joined", type="integer", nullable=false)
     */
    private $joined = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=46, nullable=true)
     */
    private $ipAddress;

    /**
     * @return int
     */
    public function getMemberId(): int
    {
        return $this->memberId;
    }

    /**
     * @param int $memberId
     */
    public function setMemberId(int $memberId): void
    {
        $this->memberId = $memberId;
    }

    /**
     * @return Map[]|Collection
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * @param Map[]|Collection $maps
     */
    public function setMaps($maps): void
    {
        $this->maps = $maps;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getMemberGroupId(): int
    {
        return $this->memberGroupId;
    }

    /**
     * @param int $memberGroupId
     */
    public function setMemberGroupId(int $memberGroupId): void
    {
        $this->memberGroupId = $memberGroupId;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getJoined(): int
    {
        return $this->joined;
    }

    /**
     * @param int $joined
     */
    public function setJoined(int $joined): void
    {
        $this->joined = $joined;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }



    public function __toString(): string
    {
        return sprintf('%s (ID: %d)', $this->getName(), $this->getMemberId());
    }
}
