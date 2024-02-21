<?php

namespace App\Form\Field\Type\Configurator;

use App\Form\Field\Type\GroupTypesChoiceType;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TypeConfiguratorInterface;
use Symfony\Component\Form\FormConfigInterface;

class GroupTypesConfigurator implements TypeConfiguratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function configure($name, array $options, array $metadata, FormConfigInterface $parentConfig)
    {
        // Supported associations are displayed using advanced JavaScript widgets
        $options['attr']['data-widget'] = 'select2';

        // Configure "placeholder" option for entity fields
        /*if (($metadata['associationType'] & ClassMetadata::TO_ONE)
            && !isset($options['placeholder'])
            && isset($options['required']) && false === $options['required']
        ) {
            $options['placeholder'] = 'label.form.empty_value';
        }*/

        return $options;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($type, array $options, array $metadata)
    {
        return \in_array($type, [GroupTypesChoiceType::class], true);
    }
}
