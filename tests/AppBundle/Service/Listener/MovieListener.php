<?php

namespace AppBundle\Service\Listener;

use AppBundle\Entity\Movie;
use AppBundle\Service\Utils\StringUtils;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\Form\Util\StringUtil;

class MovieListener{

    private $stringUtils;
    private $pathUpload;

    public function __construct(StringUtils $stringUtils,$pathUpload)
    {
        $this->stringUtils = $stringUtils;
        $this->pathUpload = $pathUpload;
    }

    public function prePersist(Movie $movie, LifecycleEventArgs $event){
        $title = $event->getObject()->getTitle();
        $movie->setSlug($this->stringUtils->getSlug($title));
    }

    public function postLoad(Movie $movie, LifecycleEventArgs $event){

    }

    public function preUpdate(Movie $movie, PreUpdateEventArgs $event){
        $title = $event->getObject()->getTitle();
        $movie->setSlug($this->stringUtils->getSlug($title));

        $poster = $event->getObject()->getPoster();
        if(!$poster){
            //$oldPoster =
            $movie->setPoster($movie->oldPoster);
        }else{
            unlink($this->pathUpload.$movie->oldPoster);
        }
    }

    public function postRemove(Movie $movie, LifecycleEventArgs $event){
        $poster = $movie->getPoster();
        if($poster && file_exists($this->pathUpload.$movie->getPoster())){
            unlink($this->pathUpload.$poster);
        }
    }

}