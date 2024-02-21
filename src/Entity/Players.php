<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Players
 *
 * @ORM\Table(name="players")
 * @ORM\Entity
 */
class Players
{
    /**
     * @var int
     *
     * @ORM\Column(name="char_uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $charUid;

    /**
     * @var int
     *
     * @ORM\Column(name="char_gid", type="integer", nullable=false)
     */
    private $charGid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="char_login", type="string", length=30, nullable=true)
     */
    private $charLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="char_pass", type="string", length=40, nullable=true)
     */
    private $charPass;

    /**
     * @var int
     *
     * @ORM\Column(name="char_verifycode", type="integer", nullable=false)
     */
    private $charVerifycode;

    /**
     * @var int
     *
     * @ORM\Column(name="char_flags", type="integer", nullable=false)
     */
    private $charFlags = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_money", type="integer", nullable=true)
     */
    private $charMoney = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="char_bankmoney", type="integer", nullable=false)
     */
    private $charBankmoney;

    /**
     * @var float
     *
     * @ORM\Column(name="char_health", type="float", precision=10, scale=0, nullable=false, options={"default"="100"})
     */
    private $charHealth = '100';

    /**
     * @var int
     *
     * @ORM\Column(name="char_online", type="integer", nullable=false)
     */
    private $charOnline;

    /**
     * @var int
     *
     * @ORM\Column(name="char_last_join", type="integer", nullable=false)
     */
    private $charLastJoin;

    /**
     * @var int
     *
     * @ORM\Column(name="char_quit_time", type="integer", nullable=false)
     */
    private $charQuitTime;

    /**
     * @var int
     *
     * @ORM\Column(name="char_quit_int", type="integer", nullable=false)
     */
    private $charQuitInt;

    /**
     * @var int
     *
     * @ORM\Column(name="char_quit_vw", type="integer", nullable=false)
     */
    private $charQuitVw;

    /**
     * @var int
     *
     * @ORM\Column(name="char_sex", type="integer", nullable=false)
     */
    private $charSex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_skin", type="smallint", nullable=true)
     */
    private $charSkin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="char_spawn", type="boolean", nullable=false)
     */
    private $charSpawn = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="char_door", type="integer", nullable=false)
     */
    private $charDoor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="char_posx", type="float", precision=10, scale=0, nullable=true)
     */
    private $charPosx = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="char_posy", type="float", precision=10, scale=0, nullable=true)
     */
    private $charPosy = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="char_posz", type="float", precision=10, scale=0, nullable=true)
     */
    private $charPosz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_score", type="integer", nullable=true)
     */
    private $charScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="char_drunk", type="integer", nullable=false)
     */
    private $charDrunk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_tacho", type="integer", nullable=true)
     */
    private $charTacho = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="char_tachomiles", type="float", precision=10, scale=0, nullable=false)
     */
    private $charTachomiles;

    /**
     * @var int
     *
     * @ORM\Column(name="char_jail", type="integer", nullable=false)
     */
    private $charJail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_foto", type="integer", nullable=true)
     */
    private $charFoto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_toll", type="integer", nullable=true)
     */
    private $charToll = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_supp", type="integer", nullable=true)
     */
    private $charSupp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="char_dyzur", type="integer", nullable=true)
     */
    private $charDyzur = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="char_viatoll", type="integer", nullable=false)
     */
    private $charViatoll;

    /**
     * @var int
     *
     * @ORM\Column(name="char_kanister", type="integer", nullable=false)
     */
    private $charKanister;

    /**
     * @var int
     *
     * @ORM\Column(name="char_adr", type="integer", nullable=false)
     */
    private $charAdr;

    /**
     * @var bool
     *
     * @ORM\Column(name="char_defaultchat", type="boolean", nullable=false)
     */
    private $charDefaultchat;

    /**
     * @var int
     *
     * @ORM\Column(name="char_cbkanal", type="integer", nullable=false)
     */
    private $charCbkanal;

    /**
     * @var float
     *
     * @ORM\Column(name="char_zmeczenie", type="float", precision=10, scale=0, nullable=false)
     */
    private $charZmeczenie;

    /**
     * @return int
     */
    public function getCharUid(): int
    {
        return $this->charUid;
    }

    /**
     * @param int $charUid
     */
    public function setCharUid(int $charUid): void
    {
        $this->charUid = $charUid;
    }

    /**
     * @return int
     */
    public function getCharGid(): int
    {
        return $this->charGid;
    }

    /**
     * @param int $charGid
     */
    public function setCharGid(int $charGid): void
    {
        $this->charGid = $charGid;
    }

    /**
     * @return string|null
     */
    public function getCharLogin(): ?string
    {
        return $this->charLogin;
    }

    /**
     * @param string|null $charLogin
     */
    public function setCharLogin(?string $charLogin): void
    {
        $this->charLogin = $charLogin;
    }

    /**
     * @return string|null
     */
    public function getCharPass(): ?string
    {
        return $this->charPass;
    }

    /**
     * @param string|null $charPass
     */
    public function setCharPass(?string $charPass): void
    {
        $this->charPass = $charPass;
    }

    /**
     * @return int
     */
    public function getCharVerifycode(): int
    {
        return $this->charVerifycode;
    }

    /**
     * @param int $charVerifycode
     */
    public function setCharVerifycode(int $charVerifycode): void
    {
        $this->charVerifycode = $charVerifycode;
    }

    /**
     * @return int
     */
    public function getCharFlags(): int
    {
        return $this->charFlags;
    }

    /**
     * @param int $charFlags
     */
    public function setCharFlags(int $charFlags): void
    {
        $this->charFlags = $charFlags;
    }

    /**
     * @return int|null
     */
    public function getCharMoney(): ?int
    {
        return $this->charMoney;
    }

    /**
     * @param int|null $charMoney
     */
    public function setCharMoney(?int $charMoney): void
    {
        $this->charMoney = $charMoney;
    }

    /**
     * @return int
     */
    public function getCharBankmoney(): int
    {
        return $this->charBankmoney;
    }

    /**
     * @param int $charBankmoney
     */
    public function setCharBankmoney(int $charBankmoney): void
    {
        $this->charBankmoney = $charBankmoney;
    }

    /**
     * @return float
     */
    public function getCharHealth(): float
    {
        return $this->charHealth;
    }

    /**
     * @param float $charHealth
     */
    public function setCharHealth(float $charHealth): void
    {
        $this->charHealth = $charHealth;
    }

    /**
     * @return int
     */
    public function getCharOnline(): int
    {
        return $this->charOnline;
    }

    /**
     * @param int $charOnline
     */
    public function setCharOnline(int $charOnline): void
    {
        $this->charOnline = $charOnline;
    }

    /**
     * @return int
     */
    public function getCharLastJoin(): int
    {
        return $this->charLastJoin;
    }

    /**
     * @param int $charLastJoin
     */
    public function setCharLastJoin(int $charLastJoin): void
    {
        $this->charLastJoin = $charLastJoin;
    }

    /**
     * @return int
     */
    public function getCharQuitTime(): int
    {
        return $this->charQuitTime;
    }

    /**
     * @param int $charQuitTime
     */
    public function setCharQuitTime(int $charQuitTime): void
    {
        $this->charQuitTime = $charQuitTime;
    }

    /**
     * @return int
     */
    public function getCharQuitInt(): int
    {
        return $this->charQuitInt;
    }

    /**
     * @param int $charQuitInt
     */
    public function setCharQuitInt(int $charQuitInt): void
    {
        $this->charQuitInt = $charQuitInt;
    }

    /**
     * @return int
     */
    public function getCharQuitVw(): int
    {
        return $this->charQuitVw;
    }

    /**
     * @param int $charQuitVw
     */
    public function setCharQuitVw(int $charQuitVw): void
    {
        $this->charQuitVw = $charQuitVw;
    }

    /**
     * @return int
     */
    public function getCharSex(): int
    {
        return $this->charSex;
    }

    /**
     * @param int $charSex
     */
    public function setCharSex(int $charSex): void
    {
        $this->charSex = $charSex;
    }

    /**
     * @return int|null
     */
    public function getCharSkin(): ?int
    {
        return $this->charSkin;
    }

    /**
     * @param int|null $charSkin
     */
    public function setCharSkin(?int $charSkin): void
    {
        $this->charSkin = $charSkin;
    }

    /**
     * @return bool
     */
    public function isCharSpawn(): bool
    {
        return $this->charSpawn;
    }

    /**
     * @param bool $charSpawn
     */
    public function setCharSpawn(bool $charSpawn): void
    {
        $this->charSpawn = $charSpawn;
    }

    /**
     * @return int
     */
    public function getCharDoor(): int
    {
        return $this->charDoor;
    }

    /**
     * @param int $charDoor
     */
    public function setCharDoor(int $charDoor): void
    {
        $this->charDoor = $charDoor;
    }

    /**
     * @return float|null
     */
    public function getCharPosx(): ?float
    {
        return $this->charPosx;
    }

    /**
     * @param float|null $charPosx
     */
    public function setCharPosx(?float $charPosx): void
    {
        $this->charPosx = $charPosx;
    }

    /**
     * @return float|null
     */
    public function getCharPosy(): ?float
    {
        return $this->charPosy;
    }

    /**
     * @param float|null $charPosy
     */
    public function setCharPosy(?float $charPosy): void
    {
        $this->charPosy = $charPosy;
    }

    /**
     * @return float|null
     */
    public function getCharPosz(): ?float
    {
        return $this->charPosz;
    }

    /**
     * @param float|null $charPosz
     */
    public function setCharPosz(?float $charPosz): void
    {
        $this->charPosz = $charPosz;
    }

    /**
     * @return int|null
     */
    public function getCharScore(): ?int
    {
        return $this->charScore;
    }

    /**
     * @param int|null $charScore
     */
    public function setCharScore(?int $charScore): void
    {
        $this->charScore = $charScore;
    }

    /**
     * @return int
     */
    public function getCharDrunk(): int
    {
        return $this->charDrunk;
    }

    /**
     * @param int $charDrunk
     */
    public function setCharDrunk(int $charDrunk): void
    {
        $this->charDrunk = $charDrunk;
    }

    /**
     * @return int|null
     */
    public function getCharTacho(): ?int
    {
        return $this->charTacho;
    }

    /**
     * @param int|null $charTacho
     */
    public function setCharTacho(?int $charTacho): void
    {
        $this->charTacho = $charTacho;
    }

    /**
     * @return float
     */
    public function getCharTachomiles(): float
    {
        return $this->charTachomiles;
    }

    /**
     * @param float $charTachomiles
     */
    public function setCharTachomiles(float $charTachomiles): void
    {
        $this->charTachomiles = $charTachomiles;
    }

    /**
     * @return int
     */
    public function getCharJail(): int
    {
        return $this->charJail;
    }

    /**
     * @param int $charJail
     */
    public function setCharJail(int $charJail): void
    {
        $this->charJail = $charJail;
    }

    /**
     * @return int|null
     */
    public function getCharFoto(): ?int
    {
        return $this->charFoto;
    }

    /**
     * @param int|null $charFoto
     */
    public function setCharFoto(?int $charFoto): void
    {
        $this->charFoto = $charFoto;
    }

    /**
     * @return int|null
     */
    public function getCharToll(): ?int
    {
        return $this->charToll;
    }

    /**
     * @param int|null $charToll
     */
    public function setCharToll(?int $charToll): void
    {
        $this->charToll = $charToll;
    }

    /**
     * @return int|null
     */
    public function getCharSupp(): ?int
    {
        return $this->charSupp;
    }

    /**
     * @param int|null $charSupp
     */
    public function setCharSupp(?int $charSupp): void
    {
        $this->charSupp = $charSupp;
    }

    /**
     * @return int|null
     */
    public function getCharDyzur(): ?int
    {
        return $this->charDyzur;
    }

    /**
     * @param int|null $charDyzur
     */
    public function setCharDyzur(?int $charDyzur): void
    {
        $this->charDyzur = $charDyzur;
    }

    /**
     * @return int
     */
    public function getCharViatoll(): int
    {
        return $this->charViatoll;
    }

    /**
     * @param int $charViatoll
     */
    public function setCharViatoll(int $charViatoll): void
    {
        $this->charViatoll = $charViatoll;
    }

    /**
     * @return int
     */
    public function getCharKanister(): int
    {
        return $this->charKanister;
    }

    /**
     * @param int $charKanister
     */
    public function setCharKanister(int $charKanister): void
    {
        $this->charKanister = $charKanister;
    }

    /**
     * @return int
     */
    public function getCharAdr(): int
    {
        return $this->charAdr;
    }

    /**
     * @param int $charAdr
     */
    public function setCharAdr(int $charAdr): void
    {
        $this->charAdr = $charAdr;
    }

    /**
     * @return bool
     */
    public function isCharDefaultchat(): bool
    {
        return $this->charDefaultchat;
    }

    /**
     * @param bool $charDefaultchat
     */
    public function setCharDefaultchat(bool $charDefaultchat): void
    {
        $this->charDefaultchat = $charDefaultchat;
    }

    /**
     * @return int
     */
    public function getCharCbkanal(): int
    {
        return $this->charCbkanal;
    }

    /**
     * @param int $charCbkanal
     */
    public function setCharCbkanal(int $charCbkanal): void
    {
        $this->charCbkanal = $charCbkanal;
    }

    /**
     * @return float
     */
    public function getCharZmeczenie(): float
    {
        return $this->charZmeczenie;
    }

    /**
     * @param float $charZmeczenie
     */
    public function setCharZmeczenie(float $charZmeczenie): void
    {
        $this->charZmeczenie = $charZmeczenie;
    }
}
