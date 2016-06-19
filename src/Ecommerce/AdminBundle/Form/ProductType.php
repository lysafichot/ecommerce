<?php
namespace Ecommerce\AdminBundle\Form;
use Ecommerce\ProductBundle\Entity\Product;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Doctrine\ORM\EntityRepository;
// ...

use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class)
        ->add('description', TextareaType::class)
        ->add('summary', TextareaType::class)
        ->add('categories', EntityType::class, array(
                                                     'class' => 'ProductBundle:Category',
                                                     'query_builder' => function(EntityRepository $er) {
                                                        return $er->createQueryBuilder('u')->where('u.idParent is NULL');
                                                    },
                                                     'choice_label' => 'name',
                                                     'multiple' => true

                                                    ))
        ->add('id', HiddenType::class)
        ->add('productsDerived',  CollectionType::class, array(
            'entry_type' => ProductDerivedType::class,
            'allow_add' => true,
            'by_reference' => true,
            'allow_delete' => true,
            'prototype' => true,
            'prototype_name' => 'derived',
                'entry_options' => array(
                ),
        ));


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                                     'data_class' => 'Ecommerce\ProductBundle\Entity\Product',
                                    'attr' => ['id' => 'product_id']

                                     ));
    }
}