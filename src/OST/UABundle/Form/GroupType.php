<?php

namespace OST\UABundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('description',TextareaType::class,array('attr'=>array('class'=>'form-control','style' => 'max-height: 180px;background-color: white'), 'required' => false))
            ->add('permissions', EntityType::class, array(
                'class'=> 'OSTUABundle:Permission',
                'attr'=>array('class'=>'chosen-select form-control col-xs-5 row-xs-5','style'=>'height: 200px'),
                'multiple'=>true,
                'required'=>false))
//            ->add('created_at')
//            ->add('updated_at')
//            ->add('createdBy')
//            ->add('updatedBy')
//            ->add('users')
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OST\UABundle\Entity\Group'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ost_uabundle_group';
    }


}
