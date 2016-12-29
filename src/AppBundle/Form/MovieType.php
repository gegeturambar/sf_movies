<?php

namespace AppBundle\Form;


use AppBundle\Service\Subscriber\MovieFormSubscriber;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class MovieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $years = array();
        $year = "1956-01-01";
        $d = new \DateTime($year);
        do{
            $d = $d->add(\DateInterval::createFromDateString('+1 Year'));

            $year = $d->format('Y');

            $years[] =  $year;
        }while($year <= 2017);

        $builder
            ->add('title')
            //->add('poster')
            ->add('releaseDate',DateType::class,['years' => $years])
            ->add('category',EntityType::class,array(
                "class" =>  "AppBundle\Entity\Category",
                "placeholder"   =>  "labelcategorylist",
                "choice_label"  =>  "name"
            ))
            ->add('price',NumberType::class)
            ->add('actors',EntityType::class,array(
                "class" =>  "AppBundle\Entity\Actor",
                "placeholder"   =>  "labelactorlist",
                "choice_label"  =>  "firstname",
                "expanded"  =>  true,
                "multiple"  =>  true
            ))        ;
        ;
        // ajout d'un subscriber
        $builder->addEventSubscriber(new MovieFormSubscriber());
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Movie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_movie';
    }


}
