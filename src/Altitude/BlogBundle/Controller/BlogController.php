<?php

namespace Altitude\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltitudeBlogBundle:Blog:index.html.twig');
    }
}
