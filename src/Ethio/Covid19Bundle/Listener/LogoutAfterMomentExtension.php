<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ethio\Covid19Bundle\Listener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Logout\LogoutHandlerInterface;
use FOS\UserBundle\Model\UserManagerInterfaceuse;
use OST\UABundle\Entity\User;

use Twig\Extension\AbstractExtension; 
use Twig\TwigFunction; 

class LogoutAfterMomentExtension extends AbstractExtension { 
 
 public function getFunctions() 
  { 
   return [ new TwigFunction('logoutAfter', [$this, 'logoutAfter']), ]; 
  }
public function logoutAfter(int $seconds)
 { 
return header( "refresh:".$seconds.";url=/logout" ); 
} 
} 

