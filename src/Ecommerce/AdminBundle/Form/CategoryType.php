<?php
namespace Ecommerce\AdminBundle\Form;
use Ecommerce\ProductBundle\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Doctrine\ORM\EntityRepository;


class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array(
            'attr'=>
            array(
                'placeholder'=>'Ajouter une nouvelle categorie',
                'class'=>'field'
        ) ,
        'label_attr' => array(
            'class' => 'label'
        )))
        ->add('preview', CheckboxType::class)
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
                                    'data_class' => 'Ecommerce\ProductBundle\Entity\Category',

                                     ));
    }
     public function getBlockPrefix()
    {
        return 'category';
    }
}