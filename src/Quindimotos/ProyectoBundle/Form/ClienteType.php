<?php

namespace Quindimotos\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ClienteType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('apellido')
                ->add('telefono')
                ->add('direccion')
                ->add('email')
                ->add('departamento', new DepartamentoType())
                ->add('ciudad', 'choice', array(
                    //'class' => 'QuindimotosProyectoBundle:Ciudad',
//                    'label' => 'Ciudad',
//                    'property' => 'nombre',
                   
//                    'query_builder' => function(EntityRepository $er){
//                    return $er->createQueryBuilder('c')
//                    ->orderBy('c.nombre', 'ASC');

                     'required' => false, 
                    'empty_value' => 'Seleccione...', 
                    'choices' => array(), 
                     ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Quindimotos\ProyectoBundle\Entity\Cliente'
        ));
    }

    public function getName() {
        return 'form_departamento';
    }

}
