<?php

$loader->import('config_dev.php');

$container->loadFromExtension('framework', array(
    'error_handler' => false,
    'test'          => true,
));

$container->loadFromExtension('web_profiler', array(
    'toolbar' => false,
    'intercept-redirects' => false,
));

$container->loadFromExtension('zend', array(
    'logger' => array('priority' => 'debug'),
));
