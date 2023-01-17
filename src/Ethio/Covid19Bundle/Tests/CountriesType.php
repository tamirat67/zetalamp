<?php

namespace Ethio\Covid19Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CountriesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('country_name')->add('total_confirmed_cases')->add('total_confirmed_new_cases')->add('total_deaths')->add('total_new_deaths')->add('transmission_classification')->add('days_since_last_reported_case');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ethio\Covid19Bundle\Entity\Countries'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ethio_covid19bundle_countries';
    }


}
