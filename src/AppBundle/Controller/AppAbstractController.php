<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of AppAbstractController
 *
 * @author iman
 */
class AppAbstractController extends Controller {

    /**
     * 
     * @return   \Symfony\Component\EventDispatcher\EventDispatcherInterface 
     */
    protected function getDispatcher() {
        return $this->get('event_dispatcher');
    }

    /**
     * 
     * @return \Symfony\Component\DependencyInjection\Container
     */
    protected function getContainer() {
        return $this->container;
    }

    /**
     * 
     * @return \Doctrine\ORM\EntityManager 
     * \Doctrine\Common\Persistence\ObjectManager
     */
    protected function getEm() {
        return $this->getDoctrine()->getManager();
    }

    /**
     * 
     * @return \AppBundle\Entity\User\User
     */
    public function getUser() {
        return parent::getUser();
    }

    /**
     * 
     * @param string $entityName
     * @return EntityRepository
     */
    protected function getRepository($entityName) {
        return $this->getEm()->getRepository($entityName);
    }

    /**
     * @return \AppBundle\Entity\User\User
     */
    protected function _User($id) {
        return $this->getDoctrine()->getManager()->find('AppBundle:User\User', $id);
    }

    protected function pageNumber($entity, $request) {
        $pagination_sketch_number = $this->container->getParameter('page.item.view');
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entity, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, $pagination_sketch_number/* limit per page */
        );
        return $pagination;
    }


    /**
     * @return array
     */

    public function redirectBack($status = 302) {
        return $this->redirect($this->get('request')->headers->get('referer'), $status);
    }


}
