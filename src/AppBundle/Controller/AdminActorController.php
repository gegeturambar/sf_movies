<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Actor;
use AppBundle\Form\ActorType;
use AppBundle\Service\Handler\FormHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/actor")
 */
class AdminActorController extends Controller
{
    /**
     * @Route("/", name="app.admin.actor.index")
     */
    public function indexAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Actor");
        $records = $rc->findAll();

        // replace this example code with whatever you need
        return $this->render('admin/actor/index.html.twig', ['records'=>$records
        ]);
    }

    /**
     * @Route("/form", name="app.admin.actor.form")
     * @Route("/form/update/{id}", name="app.admin.actor.form.update",requirements={"id"="\d+"})
     */
    public function formAction(Request $request,$id = null){

        $doctrine = $this->getDoctrine();

        // pour INSERT, DELETE, UPDATE
        $em  = $doctrine->getManager();

        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Actor");

        // create form
        $entity = is_null($id) ? new Actor() : $rc->find($id);
        $entityType = ActorType::class;

        $formHandler = $this->get('app.services.handler');

        $form = $this->createForm($entityType,$entity);

        // prends en charge la requête
        $form->handleRequest($request);

        if($formHandler->check($form)){

            if($formHandler->process()) {
                $msgType = 'notice';
                $msg = is_null($id) ? ucfirst($this->get('translator')->trans("actor.flash_messages.add")) : ucfirst($this->get('translator')->trans("actor.flash_messages.update"));
            }else{
                $msgType = 'error';
                $msg = is_null($id) ? ucfirst($this->get('translator')->trans("actor.flash_messages.add")) : ucfirst($this->get('translator')->trans("actor.flash_messages.update"));
            }
            $this->addFlash($msgType,$msg);
            return $this->redirectToRoute('app.admin.actor.index');
        }

        // envoi du formulaire sous form de html
        return $this->render('admin/actor/form.html.twig', array('form'=>$form->createView()

        ));
    }

    /**
     * @Route("/form/delete/{id}", name="app.admin.actor.form.delete",requirements={"id"="\d+"})
     */
    public function deleteAction(Request $request,$id = null)
    {
        $doctrine = $this->getDoctrine();

        // pour INSERT, DELETE, UPDATE
        $em  = $doctrine->getManager();

        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Actor");

        // create form
        $entity = $rc->find($id);

        $formHandler = $this->get('app.services.handler');

        if($formHandler->delete($entity)){
            $msgtype = "notice";
            $msg = ucfirst($this->get('translator')->trans("actor.flash_messages.delete"));
        }else{
            $msgtype = "error";
            $msg = ucfirst($this->get('translator')->trans("actor.flash_messages.delete_fail"));

        }
        $this->addFlash($msgtype,$msg);
        return $this->redirectToRoute('app.admin.actor.index');
    }
}
