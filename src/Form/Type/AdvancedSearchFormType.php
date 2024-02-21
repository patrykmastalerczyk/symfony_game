<?php declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvancedSearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('from', DateTimeType::class, ['label' => 'Od', 'widget' => 'single_text', 'required' => false])
            ->add('to', DateTimeType::class, ['label' => 'Do', 'widget' => 'single_text', 'required' => false])
            ->add('sort', ChoiceType::class, ['label' => 'Sortowanie', 'choices' => ['Od najnowszych' => 'DESC', 'Od najstarszych' => 'ASC'], 'required' => false, 'placeholder' => false])
            ->add('save', SubmitType::class, ['label' => 'Szukaj']);
    }

    public function getBlockPrefix()
    {
        return 'crp';
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['crp_form_tabs'] = [];
        $view->vars['crp_form_groups'] = [];
    }
}