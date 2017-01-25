<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/user")
 * @Security("has_role('ROLE_USER')")
 */
class UserController extends Controller
{

    /**
     * @Route("/display",name="app_user_display")
     * @Template("AppBundle:User:user_display.html.twig")
     */
    function userDisplayAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("AppBundle:User\User")->findAll();
        $pagination_sketch_number = $this->container->getParameter('page.item.view');
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $users, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, $pagination_sketch_number/* limit per page */
        );
        return array("users" => $pagination);
    }

    /**
     * @Route("/{id}/update",name="app_user_update")
     * @ParamConverter("user", class="AppBundle:User\User") 
     * @Template("AppBundle:User:user_update.html.twig")
     */
    function userUpdateAction($user, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm($this->get('app.form.user.edit'), $user);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $user = $form->getData();
            $this->get('fos_user.user_manager')->updateUser($user, TRUE);
            $em->persist($user);
            $em->flush();
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'کاربر ویرایش شد')
            ;
            return $this->redirectToRoute("app_user_display");
        }
        return array('form' => $form->createView());
    }

}
