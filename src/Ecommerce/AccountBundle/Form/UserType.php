<?php
namespace Ecommerce\AccountBundle\Form;
use Ecommerce\AccountBundle\Entity\Accounts;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('firstname', TextType::class)
        ->add('lastname', TextType::class)
        ->add('civilite', ChoiceType::class, array(
                                                   'choices'  => array(
                                                                       'M' => 'M',
                                                                       'Mme.' => 'Mme'
                                                                       ),
                                                   ))
        ->add('birthday', BirthdayType::class, array(
                                                     'widget' => 'single_text',
                                                     'data' => new \DateTime(),
                                                     'format' => 'yyyy-MM-dd',

                                                     ));


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                                     'data_class' => 'Ecommerce\AccountBundle\Entity\User',
                                     ));
    }
}