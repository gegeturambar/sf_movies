<?php
/**
 * Created by PhpStorm.
 * User: wamobi10
 * Date: 27/12/16
 * Time: 09:53
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Movie;

/**
 * @Route("/movie")
 */
class MovieController extends Controller
{
    /**
     * @Route("/movie/{id}-{slug}", name="app.movie.view",requirements={"id"="\d+","slug"="\D+"})
     */
    public function viewAction(Request $request,$id ,$slug){

        $doctrine = $this->getDoctrine();

        // pour INSERT, DELETE, UPDATE
        $em  = $doctrine->getManager();

        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Movie");

        $record = $rc->find($id);
        return $this->render('movie/index.html.twig', array('mov'=>$record)) ;
    }

}