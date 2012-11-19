<?php

namespace Quindimotos\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cliente')
            ->add('placa')
            ->add('color')
            ->add('modelo')
            ->add('kilometraje')
            ->add('marca')
            ->add('tipomoto')
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quindimotos\ProyectoBundle\Entity\Moto'
        ));
    }

    public function getName()
    {
        return 'quindimotos_proyectobundle_mototype';
    }
}
