<?php declare(strict_types=1);

namespace App\Form\Field\Type;

use Crp\CarshopCategories;
use Crp\VehicleFuelTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehicleFuelTypeChoiceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $types = array_flip(VehicleFuelTypes::NAMES);
        ksort($types);

        foreach($types as $key => $type)
        {
            if( empty($key) ) unset($types[$key]);
        }

        $resolver->setDefaults([
            'choices' => $types,
            'required' => false
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}