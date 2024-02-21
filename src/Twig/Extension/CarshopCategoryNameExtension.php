<?php declare(strict_types=1);

namespace App\Twig\Extension;

use Crp\CarshopCategories;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CarshopCategoryNameExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('carshopCategoryName', [$this, 'getCategoryName'])
        ];
    }

    public function getCategoryName(int $category) : string
    {
        return CarshopCategories::NAMES[$category] ?? "---";
    }
}