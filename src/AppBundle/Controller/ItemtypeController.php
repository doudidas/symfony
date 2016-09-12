<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Itemtype;

class ItemtypeController extends Controller
{
    /**
         * @Route("/itemtype/", name="item")
         */
        public function indexAction()
        {
            $itemtypes = $this->getDoctrine()
                              ->getRepository('AppBundle:Itemtype')
                              ->findAll();

            return $this->render('itemtype/index.html.twig', array(
                'itemtypes' => $itemtypes, ));
        }

        /**
         * @Route("/itemtype/{id}", name="itemtype_show", requirements={
         *              "id": "\d+"
         *     })
         */
        public function showAction($id)
        {
            $itemtype = $this->getDoctrine()
                        ->getRepository('AppBundle:Itemtype')
                        ->find($id);

            if (!$itemtype) {
                throw $this->createNotFoundException('Error 404, no item type found !');
            }

            return $this->render('itemtype/itemtype_show.html.twig', array(
                                'itemtype' => $itemtype, ));
        }

        /**
         * @Route("/manager/itemtype/add", name="add_itemtype")
         */
        public function addAction(Request $request)
        {
            $new_item = new Itemtype();

            $form = $this->createFormBuilder($new_item)
                ->add('manufacturer')
                ->add('model')
                ->add('description')
                ->add('save', SubmitType::class, array('label' => 'Create itemtype'))
                ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($new_item);
                $em->flush();

                return $this->redirectToRoute('itemtype_show', array('id' => $new_item->getId()));
            }

            return $this->render('itemtype/new.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        /**
         * @Route("/manager/itemtype/del{id}", name="del_type", requirements={
         *              "id": "\d+"
         *     })
         */
        public function delAction($id)
        {
            $em = $this->getDoctrine()->getManager();
            $item = $em->getRepository('AppBundle:Itemtype')->find($id);
            $em->remove($item);
            $em->flush();

            return $this->redirectToRoute('item');
        }

}
