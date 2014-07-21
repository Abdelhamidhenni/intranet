<?php

namespace Futur\SujetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActiviteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('maxinscrit')
            ->add('datedebut')
            ->add('dateliminsc', 'datetime', array('label'=>"date limite d'inscription"))
            ->add('datefin')
            ->add('mingroupesize')
            ->add('maxgroupesize')
            ->add('groupesize')
            ->add('type')
            ->add('module')
            ->add('sujet', new SujetType(), array('required' => false, 'label' => 'Photo'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Futur\SujetBundle\Entity\Activite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'futur_sujetbundle_activite';
    }
}
