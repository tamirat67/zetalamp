<?php

namespace OST\UABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('description',TextareaType::class,array('attr'=>array('class'=>'form-control'), 'required' => false))
//            ->add('created_at')
//            ->add('updated_at')
//            ->add('createdBy')
//            ->add('updatedBy')
//            ->add('groups')
//            ->add('users')
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OST\UABundle\Entity\Permission'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ost_uabundle_permission';
    }


}
