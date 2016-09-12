<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Stock;
use AppBundle\Form\StockType;
use Symfony\Component\HttpFoundation\Request;

class StockController extends Controller
{
    /**
         * @Route("/stock/", name="stock")
         */
        public function indexAction()
        {
            $stocks = $this->getDoctrine()
                        ->getRepository('AppBundle:Stock')
                        ->findAll();

            return $this->render('stock/index.html.twig', array(
                    'stocks' => $stocks, ));
        }

         /**
          * @Route("/stock/{id}", name="stock_show", requirements={
          *              "id": "\d+"
          *     })
          */
         public function showAction($id)
         {
             $stock = $this->getDoctrine()
                         ->getRepository('AppBundle:Stock')
                         ->find($id);

             if (!$stock) {
                 throw $this->createNotFoundException('Error 404, no stock found !');
             }

             return $this->render('stock/stock_show.html.twig', array(
                                 'stock' => $stock, ));
         }

         /**
          * @Route("manager/stock/add", name="add_stock")
          */
         public function addAction(Request $request)
         {
             $stock = new Stock();
             $form = $this->createForm(StockType::class, $stock);

             $form->handleRequest($request);

             if ($form->isSubmitted() && $form->isValid()) {
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($stock);
                 $em->flush();

                 return $this->redirectToRoute('stock_show', array('id' => $stock->getId()));
             }

             return $this->render('stock/new.html.twig', array(
                 'form' => $form->createView(),
             ));
         }

         /**
          * @Route("seller/stock/inc_stock{id}", name="inc_stock", requirements={
          *              "id": "\d+"
          *     }))
          */
         public function updateAction($id)
         {
             $em = $this->getDoctrine()->getManager();
             $stock = $em->getRepository('AppBundle:Stock')->find($id);

             if (!$stock) {
                 throw $this->createNotFoundException('No product found for id '.$id);
             }
             $ajout = $stock->getCurrentstock() + 1;
             $stock->setCurrentstock($ajout);
             $em->flush();

             return $this->redirectToRoute('stock');
         }

        /**
         * @Route("seller/stock/dim_stock{id}", name="dim_stock", requirements={
         *              "id": "\d+"
         *     }))
         */
        public function updateAction2($id)
        {
            $em = $this->getDoctrine()->getManager();
            $stock = $em->getRepository('AppBundle:Stock')->find($id);

            if (!$stock) {
                throw $this->createNotFoundException('No product found for id '.$id);
            }
            if ($stock->getCurrentstock() > $stock->getMinstock()) {
                $ajout = $stock->getCurrentstock() - 1;
                $stock->setCurrentstock($ajout);
                $em->flush();
            } else {
                throw $this->createNotFoundException('You cannot remove under the minstock value:'.$stock->getMinstock());
            }

            return $this->redirectToRoute('stock');
        }

        /**
         * @Route("/manager/stock/del{id}", name="del_stock", requirements={
         *              "id": "\d+"
         *     })
         */
        public function delAction($id)
        {
            $em = $this->getDoctrine()->getManager();
            $stock = $em->getRepository('AppBundle:Stock')->find($id);
            $em->remove($stock);
            $em->flush();

            return $this->redirectToRoute('stock');
        }
}
