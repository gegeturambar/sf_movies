<?php

namespace AppBundle\Service\Listener;

use AppBundle\Entity\Category;
use AppBundle\Service\SlugService;
use AppBundle\Service\Utils\StringUtils;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class CategoryListener{

    private $stringUtil;

    public function __construct(StringUtils $stringUtil)
    {
        $this->stringUtil = $stringUtil;
    }

    public function prePersist(Category $category, LifecycleEventArgs $event){
        $name = $event->getObject()->getName();
        $category->setSlug($this->stringUtil->getSlug($name));
    }

    public function preUpdate(Category $category, PreUpdateEventArgs $event){
        $name = $event->getObject()->getName();
        $category->setSlug($this->stringUtil->getSlug($name));
    }

}