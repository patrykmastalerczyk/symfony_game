<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 13.01.2019
 * Time: 23:46
 */

namespace App\Form\Field\Type;


use Crp\GroupTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupTypesChoiceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $types = array_flip(GroupTypes::NAMES);
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