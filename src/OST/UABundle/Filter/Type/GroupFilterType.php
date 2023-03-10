<?php

namespace OST\UABundle\Filter\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;

class GroupFilterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

//        $builder->add('groups');
//        $builder->add('name', Filters\TextFilterType::class);
        $builder->add('name', Filters\TextFilterType::class); 
 
        ;
        
    }

    public function getBlockPrefix() {
        return 'group_filter';
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

}
