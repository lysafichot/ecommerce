<?php
namespace Ecommerce\AdminBundle\Form;
use Ecommerce\ProductBundle\Entity\Media;
use Ecommerce\ProductBundle\Entity\ProductDerived;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Doctrine\ORM\EntityRepository;
// ...


class ProductDerivedType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name_derived', TextType::class)
        ->add('price', NumberType::class)
        ->add('weight', NumberType::class)
        ->add('status', NumberType::class)
        ->add('id', HiddenType::class)
        ->add('medias',  CollectionType::class, array(
            'entry_type' => MediaType::class,
            'allow_add' => true,
            'by_reference' => true,
            'allow_delete' => true,
            'prototype' => true,
            'prototype_name' => 'files',
                'entry_options' => array(
                ),
        ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                                    'data_class' => 'Ecommerce\ProductBundle\Entity\ProductDerived',
                                    'attr' => ['id' => 'product_derived_id']


                                     ));
    }
    public function getBlockPrefix()
    {
        return 'product_derived';
    }
}