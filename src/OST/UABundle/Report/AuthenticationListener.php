<?php

namespace OST\UABundle\Report;

use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use \Psr\Container\ContainerInterface;
use \Doctrine\ORM\EntityManagerInterface;
use Ethio\Covid19Bundle\Entity\VisitorLog;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Logout\LogoutHandlerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;


/**
 * Description of AuthenticationListener
 *
 * @author xyz
 */
class AuthenticationListener implements LogoutHandlerInterface {

//    //put your code here
    protected $em;
    protected $container;
    protected $requestStack;
    protected $userManager;
    protected $eventDispatcher;
    
    public function __construct(UserManagerInterface $userManager, EntityManagerInterface $em, ContainerInterface $container, RequestStack $requestStack, EventDispatcherInterface $event_dispatcher) {
        $this->em = $em;
        $this->container = $container;
        $this->requestStack = $requestStack;    
        $this->userManager = $userManager;
    }

    public function onAuthenticationFailure(AuthenticationFailureEvent $event) {
        // executes on failed login
        // Block a user after multiple try
    }

    public function onAuthenticationSuccess(InteractiveLoginEvent $event) {
        $visitor_log = new VisitorLog();

        $user = $event->getAuthenticationToken()->getUser();
        // remove after test
        //error_log("=============================================================", 0);
       // error_log("=============================================================", 0);
        //error_log("===================USER JUST LOGGED IN WITH THE BELLOW DETAIL======================================", 0);
        //error_log("=============================================================", 0);
        //error_log("IP : " . $this->requestStack->getCurrentRequest()->getClientIp(), 0);
        //error_log($user->getUsername() . "=============================================================", 0);
        //error_log("=============================================================", 0);
        //error_log("=============================================================", 0);
        // remove after test
        //$visitor_log->setHostIp($this->requestStack->getCurrentRequest()->getClientIp());
        $visitor_log->setHostIp($this->requestStack->getMasterRequest()->getClientIp());
        $visitor_log->setVisitorUsername($user->getUsername());

        $this->em->persist($visitor_log);
        $this->em->flush();

    return $this->requestStack->getMasterRequest()->getClientIp();
        //return 1;
    }

        public function logout(Request $Request, Response $Response, TokenInterface $Token) {
        // ..
        // Here goes the logic that you want to execute when the user logouts
        $user = $Token->getUser();
    }
}
