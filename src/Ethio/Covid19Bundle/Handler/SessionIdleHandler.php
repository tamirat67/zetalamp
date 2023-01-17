<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Ethio\Covid19Bundle\Handler;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use OST\UABundle\Entity\User;
/**
 * Description of SessionIdleHandler
 *
 */
class SessionIdleHandler {
    protected $session;
    protected $securityContext;
    protected $router;
    protected $maxIdleTime;


    public function __construct(SessionInterface $session, SecurityContextInterface $securityContext, RouterInterface $router, $maxIdleTime = 0)
    {
        $this->session = $session;
        $this->securityContext = $securityContext;
        $this->router = $router;
        $this->maxIdleTime = $maxIdleTime;        
    }
private function closeCurrentSession(TokenStorageInterface $tokenStorage, Request $request)
{
        $token = new AnonymousToken('default', 'anon.');
        $tokenStorage->setToken($token);
        $request->getSession()->invalidate();
        throw new AccessDeniedException();
}

    public function onKernelRequest(GetResponseEvent $event)
    {                
        if (HttpKernelInterface::MASTER_REQUEST != $event->getRequestType()) {

            return;
        }

        if ($this->maxIdleTime > 0) {

            $this->session->start();
            $lapse = time() - $this->session->getMetadataBag()->getLastUsed();

            if ($lapse > $this->maxIdleTime) {

                $this->securityContext->setToken(null);
                $this->session->getFlashBag()->set('info', 'You have been logged out due to inactivity.');

                //Redirect URL to logout               
                $event->setResponse(new RedirectResponse($this->router->generate('logout')));
            }
        }
    }
}
