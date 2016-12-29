<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\MovieSearchTypeModel;
use AppBundle\Form\Model\SearchTypeModel;
use AppBundle\Form\MovieSearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SearchMovieController extends Controller
{
    /**
     * @Route("/searchmovie", name="app.searchmovie.search")
     */
    public function searchAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        $rc = $doctrine->getRepository('AppBundle:Movie');



        $params = $request->request->get('appbundle_moviesearch');
        if($params){
            $search_fields = $params;
            unset($search_fields['_token']);

            //$search_fields['releaseDate'] = new \DateTime($search_fields['releaseDate']['year']."-".$search_fields['releaseDate']['month']."-".$search_fields['releaseDate']['day'] );
            $search_fields['releaseDate'] = new \DateTime($search_fields['releaseDate']."-00-00");

            $results = $rc->getMoviesByParams($search_fields);
        }else {
            $titleMovie = $request->request->get('title');
            $search_fields = array('title'=>$titleMovie);
            if(!$titleMovie ){
                $results = $rc->findAll();
            }else {
                $results = $rc->getMoviesByTitle($titleMovie);
            }
        }

        $doctrine = $this->getDoctrine();

        // pour INSERT, DELETE, UPDATE
        $em  = $doctrine->getManager();

        // Pour select
        $rc = $doctrine->getRepository("AppBundle:Actor");

        // create form
        $entityType = MovieSearchType::class;
        $modelType = new MovieSearchTypeModel();

        //$formHandler = $this->get('app.services.handler');

        //$search_fields['actors'] = array(6,8);
        //dump($search_fields);die();


        $form = $this->createForm($entityType, $modelType,[
            'action'=>'searchmovie'
        ]);

        // prends en charge la requête
        $form->handleRequest($request);

        //if($formHandler->check($form)){
        //}

        // replace this example code with whatever you need
        return $this->render('homepage/searchmovie.html.twig', [
            'form'  =>  $form->createView(),
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'mydate'=> '1934-12-12',
            'records'   =>  $results
        ]);
    }

    /**
     * @Route("/searchajax", name="app.searchmovie.ajax")
     */
    public function ajaxAction(Request $request){
        $doctrine = $this->getDoctrine();
        $rc = $doctrine->getRepository('AppBundle:Movie');

//        $params = $request->request->get('appbundle_moviesearch');
        $search_fields = array();

        $params = $request->request->get('appbundle_moviesearch');
        if($params) {
            $search_fields = $params;
            unset($search_fields['_token']);
            $results = $rc->getMoviesByParams($search_fields);

            $serializer = $this->get('app.serializer');

            $results = $serializer->serialize($results,'json');
            return new JsonResponse(json_decode($results)
            );
        }
        //serialize results , normalizers is an array of all the available input format, and encoders is an array of all the available output format

        /*
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object;
        });

        $normalizers = [ $normalizer ];
        $encoders = [ new JsonEncoder()];

        $serializer = new Serializer($normalizers,$encoders);

        $results = $serializer->serialize($results,'json');
        */



        /*
        $results = $serializer->serialize($results,'xml');
        return new Response($results);
*/
    }
}
