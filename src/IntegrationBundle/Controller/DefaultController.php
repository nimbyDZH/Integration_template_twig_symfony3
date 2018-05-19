<?php

namespace IntegrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IntegrationBundle:Default:index.html.twig');
    }
}
