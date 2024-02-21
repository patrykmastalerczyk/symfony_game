<?php

namespace App\Form\Field\Type;


use Crp\ItemTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemTypesChoiceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $itemTypes = array_flip(ItemTypes::NAMES);
        ksort($itemTypes);
        
        foreach($itemTypes as $key => $value)
        {
            if( empty($key) ) unset($itemTypes[$key]);
        }

        $resolver->setDefaults([
            'choices' => $itemTypes,
            'multiple' => false,
            'required' => true
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}