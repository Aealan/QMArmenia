<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepartamentoType
 *
 * @author LuisFernando
 */


namespace Quindimotos\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
class DepartamentoType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('departamento', 'entity',array(               
                 'required' => false, 
                 'empty_value' => 'Seleccione...', 
                 'property_path' => false,
                 'class' => 'QuindimotosProyectoBundle:Departamento'
//                 'data' => $builder->getData()->getDepartamento(), 
//                 
//                 'query_builder' => function(EntityRepository $er){
//                  return $er->createQueryBuilder('c')
//                  ->orderBy('c.nombre');    }
    ));
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Quindimotos\ProyectoBundle\Entity\Departamento',
        );
    }
    public function getName() {
        return 'departamento';
    }


    //put your code here
}

?>
