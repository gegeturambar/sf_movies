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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;

class KernelEventsSubscriber implements EventSubscriberInterface
{
    private $twig;

    public function __construct(\Twig_Environment $twig){
        $this->twig = $twig;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => 'kernelRequest',
            KernelEvents::RESPONSE => 'kernelResponse'
        ];
    }

    public function kernelRequest(GetResponseEvent $event){
        /*
        $content = $this->twig->render("inc/maintenance.html.twig");
        $response = new Response($content,503);
        $event->setResponse($response);
        */
    }

    public function kernelResponse(FilterResponseEvent $event){
        $response = $event->getResponse();

        $status = $response->getStatusCode();
        $content = $response->getContent();

        $headers = [
            'X-Content-Type-Options' => 'nosniff',
            'X-Frame-Options' => 'DENY',
            'X-XSS-Protection' => '1; mode=block'
        ];
        $response = new Response($content,$status,$headers);
        $event->setResponse($response);
    }
}