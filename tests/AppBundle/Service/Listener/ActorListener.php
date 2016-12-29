<?php

namespace AppBundle\Service\Listener;

use AppBundle\Entity\Actor;
use AppBundle\Service\Utils\StringUtils;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\Form\Util\StringUtil;

class ActorListener{

    private $stringUtils;
    private $pathUpload;

    public function __construct(StringUtils $stringUtils,$pathUpload)
    {
        $this->stringUtils = $stringUtils;
        $this->pathUpload = $pathUpload;
    }




    public function prePersist(Actor $actor, LifecycleEventArgs $event){
        $lastname = $event->getObject()->getLastname();
        $firstname = $event->getObject()->getFirstname();
        $actor->setSlug($this->stringUtils->getSlug($lastname.$firstname));
    }

    public function postLoad(Actor $actor, LifecycleEventArgs $event){

    }

    public function preUpdate(Actor $actor, PreUpdateEventArgs $event){
        $lastname = $event->getObject()->getLastname();
        $firstname = $event->getObject()->getFirstname();
        $actor->setSlug($this->stringUtils->getSlug($lastname.$firstname));

        $img = $event->getObject()->getPortrait();
        if(!$img){
            //$oldPoster =
            $actor->setPortrait($actor->oldimg);
        }else{
            unlink($this->pathUpload.$actor->oldimg);
        }
    }

    public function postRemove(Actor $actor, LifecycleEventArgs $event){
        $img = $actor->getPortrait();
        if($img && file_exists($this->pathUpload.$actor->getPortrait())){
            unlink($this->pathUpload.$img);
        }
    }

}