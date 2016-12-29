<?php
/**
 * Created by PhpStorm.
 * User: wamobi10
 * Date: 22/12/16
 * Time: 09:40
 */

namespace AppBundle\Service\Subscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;

class MovieFormSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
           FormEvents::POST_SET_DATA => 'postSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    public function preSubmit(FormEvent $event){

    }

    public function postSetData(FormEvent $event){
//die('postSetData');
        $form = $event->getForm();  // le formulaire
        $data = $form->getData();
        $entity = $event->getData(); // entity présente en bdd

        $entity->oldPoster = $entity->getPoster();

        $id = $entity->getId();
        $constraints = !$id ? array(
            new NotBlank(['message'=>"poster_required"]),
            new Image(['minWidth'=> 100,
                    'maxWidth' => 4000,
                    'minHeight'=> 100,
                    'maxHeight' => 4000,
                    'mimeTypes' => array("image/png","image/jpeg")
                ])
            ) : array();
        $form->add('poster',FileType::class,
            array(
                'constraints'=>$constraints,
                'data_class' => null
            )
        );
    }

}