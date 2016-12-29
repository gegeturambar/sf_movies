<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use AppBundle\Service\Handler\FormHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/category")
 */
class AdminCategoryController extends Controller
{
    /**
     * @Route("/", name="app.admin.category.index")
     */
    public function indexAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Category");
        $records = $rc->findAll();

        // replace this example code with whatever you need
        return $this->render('admin/category/index.html.twig', ['records'=>$records
        ]);
    }

    /**
     * @Route("/form", name="app.admin.category.form")
     * @Route("/form/update/{id}", name="app.admin.category.form.update",requirements={"id"="\d+"})
     */
    public function formAction(Request $request,$id = null){

        $doctrine = $this->getDoctrine();

        // pour INSERT, DELETE, UPDATE
        $em  = $doctrine->getManager();

        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Category");

        // create form
        $entity = is_null($id) ? new Category() : $rc->find($id);
        $entityType = CategoryType::class;

        $formHandler = $this->get('app.services.handler');
        $form = $this->createForm($entityType,$entity);

        // prends en charge la requête
        $form->handleRequest($request);

        if($formHandler->check($form)){

            if($formHandler->process()) {
                $msgType = 'notice';
                $msg = is_null($id) ? ucfirst($this->get('translator')->trans("category.flash_messages.add")) : ucfirst($this->get('translator')->trans("category.flash_messages.update"));
            }else{
                $msgType = 'error';
                $msg = is_null($id) ? ucfirst($this->get('translator')->trans("category.flash_messages.add")) : ucfirst($this->get('translator')->trans("category.flash_messages.update"));
            }
            $this->addFlash($msgType,$msg);
            return $this->redirectToRoute('app.admin.category.index');
        }

        // envoi du formulaire sous form de html
        return $this->render('admin/category/form.html.twig', array('form'=>$form->createView()

        ));
    }

    /**
     * @Route("/form/delete/{id}", name="app.admin.category.form.delete",requirements={"id"="\d+"})
     */
    public function deleteAction(Request $request,$id = null)
    {
        $doctrine = $this->getDoctrine();

        // pour INSERT, DELETE, UPDATE
        $em  = $doctrine->getManager();

        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Category");

        // create form
        $entity = $rc->find($id);

        $formHandler = $this->get('app.services.handler');

        if($formHandler->delete($entity)){
            $msgtype = "notice";
            $msg = ucfirst($this->get('translator')->trans("category.flash_messages.delete"));
        }else{
            $msgtype = "error";
            $msg = ucfirst($this->get('translator')->trans("category.flash_messages.delete_fail"));

        }
        $this->addFlash($msgtype,$msg);
        return $this->redirectToRoute('app.admin.category.index');
    }
}
