<?php

namespace RoyesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RoyesBundle:Default:index.html.twig');
    }
}
