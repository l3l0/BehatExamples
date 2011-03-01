<?php

$container->loadFromExtension('framework', array(
    'charset'         => 'UTF-8',
    'error_handler'   => null,
    'csrf-protection' => array('enabled' => true, 'secret' => 'xxxxxxxxxx'),
    'router'          => array('resource' => '%kernel.root_dir%/config/routing.php'),
    'validation'      => array('enabled' => true, 'annotations' => true),
    'templating'      => array(
        'engines' => array('twig'),
        #'assets_version' => "SomeVersionScheme",
    ),
    'session' => array(
        'default_locale' => "en",
        'lifetime'       => "3600",
        'auto_start'     => true,
    ),
));

// Twig Configuration
$container->loadFromExtension('twig', array(
    'debug'            => '%kernel.debug%',
    'strict_variables' => '%kernel.debug%',
));

// Doctrine Configuration
/*
$container->loadFromExtension('doctrine', array(
    'dbal' => array(
        'dbname'   => 'xxxxxxxx',
        'user'     => 'xxxxxxxx',
        'password' => '',
        'logging'  => '%kernel.debug%',
    ),
    'orm' => array(
        'auto_generate_proxy_classes' => '%kernel.debug%',
        'mappings' => array('HelloBundle' => array()),
    ),
));
*/

// Swiftmailer Configuration
/*
$container->loadFromExtension('swiftmailer', array(
    'transport'  => "smtp",
    'encryption' => "ssl",
    'auth_mode'  => "login",
    'host'       => "smtp.gmail.com",
    'username'   => "xxxxxxxx",
    'password'   => "xxxxxxxx",
));
*/
