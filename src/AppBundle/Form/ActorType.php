<?php

namespace AppBundle\Form;

use AppBundle\AppBundle;
use AppBundle\Service\Subscriber\ActorFormSubscriber;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('portrait',FileType::class,
                array(
                    'data_class' => null
                )
                )
            ->add('birthday')
            ->add('bio')
            ->add('movies',EntityType::class,array(
                "class" =>  "AppBundle\Entity\Movie",
                "placeholder"   =>  "labelmovielist",
                "choice_label"  =>  "title",
                "expanded"  =>  true,
                "multiple"  =>  true
            ))        ;
        $builder->addEventSubscriber(new ActorFormSubscriber());
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Actor'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actor';
    }


}
