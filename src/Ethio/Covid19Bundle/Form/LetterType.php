<?php

namespace Ethio\Covid19Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class LetterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder//->add('date')
               ->add('date', DateType::class, [
                    'widget' => 'single_text',
                   'label' => 'Date',
                    'format' => 'yyyy-MM-dd',
                    'required' => false,
                ])
       // ->add('ref_number')
        ->add('ref_number', TextType::class, [
              'label' => 'Ref. Number', 
              'attr' => array('placeholder' => 'Write Ref. Number')
            ]) 
       // ->add('organizationnames')
         ->add('organizationnames', EntityType::class, array(
                      'class' => 'Covid19Bundle:OrganizationName',
                      'placeholder' => 'Select Sent To',
                      'label' => 'Sent To',
        ))  
        ->add('subject')
          ->add('subject', TextType::class, [
              'label' => 'Subject', 
              'attr' => array('placeholder' => 'Write ጉዳዩ/Subject')
            ]) 
      //  ->add('upload_logo', FileType::class, array('label' => 'Logo Zeta',
        //            'mapped' => false,
             //       'required' => false,
            //        'attr' => array('class' => 'btn btn-sm form-group')))
        //->add('letter_header')
        ->add('letter_body')
        //->add('upload_signature')
     // ->add('upload_signature', FileType::class, array('label' => 'Signature',
               //     'mapped' => false,
               //     'required' => false,
                  //  'attr' => array('class' => 'btn btn-sm form-group')))
        //->add('letter_foorer')
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ethio\Covid19Bundle\Entity\Letter'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ethio_covid19bundle_letter';
    }


}
