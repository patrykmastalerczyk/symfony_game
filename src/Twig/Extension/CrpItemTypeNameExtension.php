<?php

namespace App\Twig\Extension;

use Crp\ItemTypes;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CrpItemTypeNameExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('crpItemTypeName', [$this, 'getItemTypeName'])
        ];
    }

    public function getItemTypeName(int $itemType) : string
    {
        return ItemTypes::NAMES[$itemType] ?? "undefined";
    }
}