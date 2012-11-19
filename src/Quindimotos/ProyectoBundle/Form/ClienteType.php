<?php

namespace Quindimotos\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ClienteType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('cedula') 
                ->add('nombre')
                ->add('apellido')
                ->add('telefono')
                ->add('direccion')
                ->add('email')
                ->add('departamento', new DepartamentoType())
                ->add('ciudad', 'entity', array(
                    'class' => 'QuindimotosProyectoBundle:ciudad',
//                   'required' => false, 
//                     'label' => 'Ciudad',
//                    'property' => 'nombre',
                   
                    'query_builder' => function(EntityRepository $er){
                    return $er->createQueryBuilder('c')
                    ->orderBy('c.nombre', 'ASC');}

//                     'required' => false, 
//                    'empty_value' => 'Seleccione Ciudad', 
//                    'choices' => array(), 
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
