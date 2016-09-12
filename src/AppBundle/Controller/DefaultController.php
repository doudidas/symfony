<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/bienvenue.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    /**
    * @Route("/admin/promote", name="promote")
    */
        public function promAction()
        {
            $users = $this->getDoctrine()
                              ->getRepository('AppBundle:User')
                              ->findAll();

            return $this->render('admin/promote.html.twig', array(
                'users' => $users, ));
        }
      /**
      * @Route("/test", name="test")
      */

      public function testAction(){

        $database = $this->getDoctrine()
                          ->getRepository('AppBundle:User')
                          ->findAll();

        return $this->render('default/test.html.twig');
      }


}
