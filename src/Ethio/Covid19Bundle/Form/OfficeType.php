<?php

namespace Ethio\Covid19Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OfficeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
          $builder
            ->add('name',TextType::class,array('attr'=>array('class'=>'form-control'), 'required' => true))
            ->add('description', TextareaType::class, array(
                'attr' => array('class' => 'ckeditor'),
                'required' => false
            ))
             
            ->add('parentOffice', EntityType::class, array(
                'class' => 'Covid19Bundle:Office',
                'placeholder' => 'Select parent Office',
                'attr' => array('class' => 'form-control'),
                'required' => false
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ethio\Covid19Bundle\Entity\Office'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ethio_covid19bundle_office';
    }


}
