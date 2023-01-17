<?php

namespace OST\UABundle\Form;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use OST\UABundle\OSTUABundle;
use OST\UABundle\Repository\UserRepository;
use PhpOption\Tests\Repository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('mail_from',TextType::class,array('attr'=>array('class'=>'form-control')))
//            ->add('mail_to',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('mail_to', EntityType::class, array(
                'class'=> 'OSTUABundle:User',
                'required' => true,
//                'placeholder' => 'Choose mail',
                'attr' => array('class' => 'form-control', 'style' => 'width: 100%','autocomplete'=>'off', 'data-provide'=>'typeahead')
            ))
            ->add('mail_subject',TextType::class,array('attr'=>array('class'=>'form-control')))
//            ->add('mail_body',CKEditorType::class, array("required"=>false))
            ->add('mail_body', TextareaType::class, array('attr' => array('class' => 'ckeditor'),"required"=>false))
//            ->add('mail_date_gregorian',DateTimeType::class,array('attr'=>array('class'=>'form-control')))
//            ->add('mail_date_ethiopian',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('mail_tag',TextType::class,array('attr'=>array('class'=>'form-control')))
//            ->add('is_draft')
//            ->add('is_sent')
//            ->add('is_read')
//            ->add('created_at')
//            ->add('updated_at')
//            ->add('created_by')
//            ->add('updated_by')
            ->add('send', SubmitType::class, array('attr'=>array('class'=>'btn btn-danger'),'label' => 'Send'))
            ->add('draft', SubmitType::class, array('attr'=>array('class'=>'btn btn-default'),'label' => 'Draft'))
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OST\UABundle\Entity\Mail',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ost_uabundle_mail';
    }


}