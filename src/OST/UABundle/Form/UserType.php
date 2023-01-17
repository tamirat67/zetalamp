<?php

namespace OST\UABundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('middle_name',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('last_name',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('phone',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('status')
            ->add('gender', ChoiceType::class, array(
                'choices' => array('Male' => 'Male', 'Female' => 'Female'),
                'required' => false,
                'placeholder' => 'Choose gender',
                'attr' => array('class' => 'js-example-responsive', 'style' => 'width: 100%')
            ))
            ->add('username', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('email', EmailType::class, array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle', 'attr' => array('class' => 'form-control')))
           ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
            ])   
            ->add('plainPassword', PasswordType::class, array(
                    'required' => false
                )
            )
//            ->add('profile_pic')
//            ->add('created_at')
//            ->add('updated_at')
//            ->add('dn')
            ->add('office', EntityType::class, array(
                'class' => 'Covid19Bundle:Office',
                'attr' => array(
                    'empty' => 'Select Office',
                    'class' => 'chosen-select form-control',
                )
            ))

//            ->add('createdBy')
//            ->add('updatedBy')
            ->add('groups') 
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OST\UABundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ost_uabundle_user';
    }


}
