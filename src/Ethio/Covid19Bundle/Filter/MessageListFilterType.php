<?php

namespace Ethio\Covid19Bundle\Filter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MessageListFilterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
 ->add('gain_framed_messages')
  ->add('loss_framed_messages')
   ->add('description')
        ->add('created_at')

                       ;
    }/**
     * {@inheritdoc}
     */
   public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
         'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
  
   public function getName() {
        return 'ethio_covid19bundle_messagelist';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ethio_covid19bundle_messagelist_filter';
    }

}
