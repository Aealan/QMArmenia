<?php

namespace Quindimotos\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpleadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('telefono')
            ->add('direccion')
            ->add('email')
            ->add('genero', 'choice', array(
                 'choices' => array('1' => 'Masculino', '0' => 'Femenino')))
            ->add('cedula')
            ->add('cargo')
            ->add('departamento', new DepartamentoType())    
            ->add('ciudad')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quindimotos\ProyectoBundle\Entity\Empleado'
        ));
    }

    public function getName()
    {
        return 'form_Empleado';
    }
}
