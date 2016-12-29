<?php

namespace AppBundle\Form;


use AppBundle\Service\Subscriber\MovieFormSubscriber;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class MovieSearchType extends AbstractType
{
    private $doctrine;

    public function __construct(Registry $doctrine){
        $this->doctrine = $doctrine;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        /*
        $years = array();
        $year = "1956-01-01";
        $d = new \DateTime($year);
        do{
            $d = $d->add(\DateInterval::createFromDateString('+1 Year'));

            $year = $d->format('Y');

            $years[] =  $year;
        }while($year <= 2017);
*/

        $rc = $this->doctrine->getRepository("AppBundle:Movie");
        $years = $rc->getMoviesYears();

        //dump($years);die();


        $builder
            ->add('title', TextType::class, [
                // 'data' => $data['title']
            ])

            ->add('releaseDate', ChoiceType::class,[
                    'choices' => $years,
                    'choice_label' => function($year, $key, $index) {
                        return ucfirst($year);
                    }
                ]
            )
            ->add('category',EntityType::class,array(
                "class" =>  "AppBundle\Entity\Category",
                "placeholder"   =>  "labelcategorylist",
                "choice_label"  =>  "name",
            ))
            ->add('actors',EntityType::class,array(
                "class" =>  "AppBundle\Entity\Actor",
                "placeholder"   =>  "labelactorlist",
                "choice_label"  =>  "firstname",
                "expanded"  =>  true,
                "multiple"  =>  true
            ))
            ->add('price',NumberType::class)
        ;

        // ajout d'un subscriber
        //$builder->addEventSubscriber(new MovieSearchFormSubscriber());
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Form\Model\MovieSearchTypeModel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_moviesearch';
    }


}
