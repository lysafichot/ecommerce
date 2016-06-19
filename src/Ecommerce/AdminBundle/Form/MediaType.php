<?php
namespace Ecommerce\AdminBundle\Form;
use Ecommerce\ProductBundle\Entity\Media;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Doctrine\ORM\EntityRepository;
// ...


class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('files',  FileType::class, array(
            'multiple' => true,
            'data_class' => null,
        ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                                    'data_class' => 'Ecommerce\ProductBundle\Entity\Media',

                                     ));
    }
    public function getBlockPrefix()
    {
        return 'medias';
    }
}