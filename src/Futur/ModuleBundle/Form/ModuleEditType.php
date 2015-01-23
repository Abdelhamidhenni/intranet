<?php
namespace Futur\ModuleBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Futur\ModuleBundle\Entity\Module;

class moduleEditType extends moduleType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);
    $builder->remove('date');
  }
  public function getName()
  {
    return 'futur_modulebundle_moduleedittype';
  }
}
