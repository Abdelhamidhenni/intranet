<?php

namespace Futur\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text', array('label' => 'titre :   '))
            ->add('probleme')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Futur\TicketBundle\Entity\Ticket'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'futur_ticketbundle_ticket';
    }
}
