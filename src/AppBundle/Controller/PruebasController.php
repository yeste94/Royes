<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{

    public function indexAction(Request $request,$name,$page)
    {

        // replace this example code with whatever you need
        return $this->render('AppBundle:Pruebas:index.html.twig', [
            //'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'name' => $name,
            'surname'=> $page
        ]);
    }

}
