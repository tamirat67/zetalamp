<?php

namespace OST\UABundle\Filter\Type;


use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class UserFilterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

//        $builder->add('groups');
//        $builder->add('name', Filters\TextFilterType::class);
        $builder->add('username', Filters\TextFilterType::class);
        $builder->add('first_name', Filters\TextFilterType::class);
        $builder->add('middle_name', Filters\TextFilterType::class);
        $builder->add('father_name', Filters\TextFilterType::class);
        $builder->add('phone', Filters\TextFilterType::class); 
        $builder->add('userOffice', Filters\TextFilterType::class); 

        $builder->add('gender', ChoiceType::class, array(
                'choices' => array('Male' => 'M', 'Female' => 'F'),
                'required' => false,
                'placeholder' => 'Choose gender',
            ));
        $builder->add('status', Filters\TextFilterType::class);  
        $builder->add('office', EntityType::class, array(
                'class' => 'Covid19Bundle:Office',
                'required' => false,
                'placeholder' => 'Select Office',
                'attr' => array('class' => 'js-example-responsive', 'style' => 'width: 100%')
            ));
 

//            ->add('createdBy')
//            ->add('updatedBy')
        $builder->add('groups', Filters\TextFilterType::class); 
//        $builder->add('userOffice', Filters\EntityFilterType::class , array(
//            'class' => 'PMSBundle:Office',
//            'multiple' => true,
//            'expanded' => false,
//            'query_builder' => function(\PMSBundle\Repository\OfficeRepository $er){
//                return $er->createQueryBuilder('o')
//                    ->orderBy('o.name', 'ASC');
//            }))
        
        $builder->add('is_store_keeper', Filters\TextFilterType::class);
                // 'attr' => array('class' => 'js-example-responsive', 'style' => 'width: 100%');

        $builder->add('is_store_keeper', ChoiceType::class, array(
                'choices' => array('Male' => 'M', 'Female' => 'F'),
                'required' => false,
                'placeholder' => 'Choose status',
                'attr' => array('class' => 'js-example-responsive', 'style' => 'width: 100%')));
    }

    public function getBlockPrefix() {
        return 'user_filter';
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

}
