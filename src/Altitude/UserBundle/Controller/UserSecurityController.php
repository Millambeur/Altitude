<?php

namespace Altitude\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserSecurityController extends Controller
{
    public function loginSuccessAction(Request $request)
    {
	    $currentLocale = $request->attributes->get('_locale');
        return $this->render('AltitudeCoreBundle:Core:index.html.twig', array('_locale' => $currentLocale));
    }

    public function logoutSuccessAction(Request $request)
    {
	    $currentLocale = $request->attributes->get('_locale');
        return $this->render('AltitudeCoreBundle:Core:index.html.twig', array('_locale' => $currentLocale));
    }
}
