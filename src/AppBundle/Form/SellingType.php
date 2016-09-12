<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SellingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type_id', EntityType::class, array(
                  'class' => 'AppBundle:Itemtype',
                  'choice_label' => 'model'))
            ->add('user_id', EntityType::class, array(
                        'class' => 'AppBundle:User',
                        'choice_label' => 'username'))
            ->add('count')
            ->add('date')
            ->add('save', SubmitType::class, array('label' => 'Add Selling'))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Selling',
            'csrf_protection' => false
        ));
    }
}
