<?php

namespace Acme\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdminController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('AcmePageBundle:Admin:index.html.twig');
    }
}
