<?php declare(strict_types=1);

namespace App\Twig\Extension;

use Crp\CarshopCategories;
use Crp\VehicleNames;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class VehicleNameExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('vehicleName', [$this, 'getVehicleName'])
        ];
    }

    public function getVehicleName(int $model) : string
    {
        return VehicleNames::NAMES[$model] ?? "---";
    }
}