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

class RecievedLetterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('date', DateType::class, [
                    'widget' => 'single_text',
                   'label' => 'Date',
                    'format' => 'yyyy-MM-dd',
                    'required' => false,
                ])
    ->add('ref_number', TextType::class, [
              'label' => 'Ref. Number', 
              'attr' => array('placeholder' => 'Write Ref. Number')
            ]) 
         ->add('subject')
     
        
         ->add('upload_letter', FileType::class, array('label' => 'Upload Letter',
                    'mapped' => false,
                    'required' => false,
                    'attr' => array('class' => 'btn btn-sm form-group')))
                    
            ->add('organizationnames', EntityType::class, array(
                      'class' => 'Covid19Bundle:OrganizationName',
                      'placeholder' => 'Select Recieved From',
                      'label' => 'Recieved From',
        ))  ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ethio\Covid19Bundle\Entity\RecievedLetter'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ethio_covid19bundle_recievedletter';
    }


}
