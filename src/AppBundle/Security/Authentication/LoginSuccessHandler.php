<?php

namespace AppBundle\Security\Authentication;

use Doctrine\ORM\EntityManager;
use AppBundle\Security\Logger\Authentication;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler;
use Symfony\Component\Security\Http\HttpUtils;
use Symfony\Component\Security\Core\Security;

class LoginSuccessHandler extends DefaultAuthenticationSuccessHandler {

    protected $em;
    protected $container;

    public function __construct(HttpUtils $httpUtils, array $options, $container) {
        $this->container = $container;
        parent::__construct($httpUtils, $options);
    }
    public function setEm(EntityManager $em) {
        $this->em = $em;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {

        
//            if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            // Captcha validation passed, check username and password
            return new RedirectResponse("admin");
//            }else{
//            return new RedirectResponse("list-certificate");
                
            
//        }
    }

    /**
     * 
     * @return EntityManager
     */
    protected function getEm() {
        return $this->em;
    }

}
