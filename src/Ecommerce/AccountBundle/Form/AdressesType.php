<?php
namespace Ecommerce\AccountBundle\Form;
use Ecommerce\AccountBundle\Entity\Adressse;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AdressesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numero', NumberType::class)
            ->add('name', TextType::class)
            ->add('codePostal', NumberType::class)
            ->add('city', TextType::class)
            ->add('type', HiddenType::class)
            ->add('selected', CheckboxType::class, array(
    'label'    => 'Adresses par default',
    'required' => false,
));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\AccountBundle\Entity\Adresse',
        ));
    }
}