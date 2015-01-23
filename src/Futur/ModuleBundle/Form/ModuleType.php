<?php

namespace Futur\ModuleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModuleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('credits')
            ->add('datestart')
            ->add('dateend')
            ->add('description')
            ->add('status')
            ->add('projets')
            ->add('skills')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Futur\ModuleBundle\Entity\Module'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'futur_modulebundle_module';
    }
}
