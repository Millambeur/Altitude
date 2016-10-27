<?php

namespace Altitude\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltitudeCoreBundle:Core:index.html.twig');
    }
}
