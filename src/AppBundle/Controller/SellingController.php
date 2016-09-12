<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Selling;
use AppBundle\Entity\User;
use AppBundle\Entity\Itemtype;
use AppBundle\Form\SellingType;
use Symfony\Component\HttpFoundation\Response;

class SellingController extends Controller
{
        /**
         * @Route("/selling/")
         */
        public function indexAction()
        {
          $sellings = $this->getDoctrine()
                            ->getRepository('AppBundle:Selling')
                            ->findAll();

          return $this->render('selling/index.html.twig', array(
              'sellings' => $sellings, ));
        }

        /**
         * @Route("/selling/{id}", name="selling_show", requirements={
         *              "id": "\d+"
         *     })
         */
        public function showAction($id)
        {
          $selling = $this->getDoctrine()
                      ->getRepository('AppBundle:Selling')
                      ->find($id);

          if (!$selling) {
              throw $this->createNotFoundException('Error 404, no sell found !');
          }

          return $this->render('selling/selling_show.html.twig', array(
                              'selling' => $selling, ));
      }
        /**
         * @Route("/seller/selling/add", name="add_selling")
         */
        public function addAction(Request $request)
        {
            $new_selling = new Selling();

            $form = $this->createForm(SellingType::class, $new_selling);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($new_selling);
                $em->flush();

                return $this->redirectToRoute('selling_show', array('id' => $new_selling->getId()));
            }

            return $this->render('selling/new.html.twig', array(
                'form' => $form->createView(),
            ));
        }


}
