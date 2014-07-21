<?php
namespace Futur\SujetBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Futur\SujetBundle\Entity\Activite;

class activiteEditType extends activiteType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);
    $builder->remove('date');
    $builder->remove('name');
  }
  public function getName()
  {
    return 'futur_activitebundle_activiteedittype';
  }
}
