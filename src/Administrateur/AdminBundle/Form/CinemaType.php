<?php

namespace Administrateur\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CinemaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse')
            ->add('emplacement')
            ->add('nomSalle')
            ->add('coordx')
            ->add('coordy')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Administrateur\AdminBundle\Entity\Cinema'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'administrateur_adminbundle_cinema';
    }
}
