<?php

namespace Quindimotos\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InventariomotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('espejos')
            ->add('direccionales')
            ->add('tapaslaterales')
            ->add('sillin')
            ->add('tabacos')
            ->add('stop')
            ->add('gatos')
            ->add('reflectivas')
            ->add('tapatanqueaceite')
            ->add('emblemas')
            ->add('parrillas')
            ->add('luzdelantera')
            ->add('pito')
            ->add('bateria')
            ->add('velocimetro')
            ->add('guardafango')
            ->add('juegodeherramientas')
            ->add('llaves')
            ->add('tanque')
            ->add('manual')
            ->add('llantas')
            ->add('moto')
            ->add('espejos', 'choice', array(
                 'choices' => array('1' => 'Masculino', '0' => 'Femenino')))
             ->add("cantidad",'text',
                array(
        
                    "property_path" => false,
                )
            );
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quindimotos\ProyectoBundle\Entity\Inventariomoto'
        ));
    }

    public function getName()
    {
        return 'quindimotos_proyectobundle_inventariomototype';
    }
}
