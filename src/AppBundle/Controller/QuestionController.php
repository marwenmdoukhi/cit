<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Question;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\View\View;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\JsonResponse;






/**
 * @RouteResource("question", pluralize=false)
 */
class QuestionController extends FOSRestController  implements ClassResourceInterface
{
    /**
     *@Rest\get("/question")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('AppBundle:Question')->findAll();

          if ($question == null){

        return  new View("there are no questions", Response::HTTP_NOT_FOUND);
         }
        
        return  $question;
     }

    /**
        * @Rest\Get("/question/{id}")
        */
 public function idAction($id)

    {
        $question = $this->getDoctrine()->getRepository('AppBundle:Question')->find($id);
        if ($question == null) {
        return new View("user not found", Response::HTTP_NOT_FOUND);
     }
        return $question;
        }



    /**
     *@Rest\post("/question/add")
     */
    public function newAction(Request $request)
    {
        $data = new Question();
        $titre = $request->get('titre');
        $question = $request->get('question');
        $type = $request->get('type');
        $parentIdQuestion= $request->get('parentIdQuestion');



     if (empty($titre) || empty($question) || empty($type) || empty($parentIdQuestion))
        {   
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE); 
        }
 
        $data->setTitre($titre);
        $data->setQuestion($question);
        $data->setType($type);
        $data->setParentIdQuestion($parentIdQuestion);
        $em = $this->getDoctrine('AppBundle:Question')->getManager();
        $em->persist($data);
        $em->flush();
         return new View("question Added Successfully", Response::HTTP_OK); 
     }




}