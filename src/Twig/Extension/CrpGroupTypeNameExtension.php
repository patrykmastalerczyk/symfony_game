<?php

namespace App\Twig\Extension;

use Crp\GroupTypes;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CrpGroupTypeNameExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
          new TwigFunction('crpGroupTypeName', [$this, 'getGroupTypeName'])
        ];
    }

    public function getGroupTypeName(int $groupType) : string
    {
        return GroupTypes::NAMES[$groupType] ?? "undefined";
    }
}