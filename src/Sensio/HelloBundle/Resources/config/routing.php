<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('homepage', new Route('/', array(
    '_controller' => 'HelloBundle:Hello:welcome',
)));
$collection->add('hello', new Route('/hello/{name}', array(
    '_controller' => 'HelloBundle:Hello:index',
)));

return $collection;
