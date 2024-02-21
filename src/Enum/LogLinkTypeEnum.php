<?php declare(strict_types=1);

namespace App\Enum;

use App\Entity\Character;

class LogLinkTypeEnum
{
    public const LOG_LINK_TYPES = [
        'p' => Character::class
    ];
}