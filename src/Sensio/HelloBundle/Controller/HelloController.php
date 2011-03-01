<?php

namespace Sensio\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelloBundle:Hello:index.html.twig', array('name' => $name));

        // render a PHP template instead
        // return $this->render('HelloBundle:Hello:index.html.php', array('name' => $name));
    }

    public function welcomeAction()
    {
        return $this->render('HelloBundle:Hello:welcome.html.twig');
    }

    public function editAction()
    {

    }
}
