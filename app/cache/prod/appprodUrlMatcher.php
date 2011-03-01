<?php

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($url)
    {
        $url = $this->normalizeUrl($url);

        if (rtrim($url, '/') === '') {
            if (substr($url, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$url.'/', 'permanent' => true, '_route' => 'homepage');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Sensio\\HelloBundle\\Controller\\HelloController::welcomeAction',)), array('_route' => 'homepage'));
        }

        if (0 === strpos($url, '/hello') && preg_match('#^/hello/(?P<name>[^/\.]+?)$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\HelloBundle\\Controller\\HelloController::indexAction',)), array('_route' => 'hello'));
        }

        if (0 === strpos($url, '/user/profile') && preg_match('#^/user/profile/(?P<slug>[^/\.]+?)$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\HelloBundle\\Controller\\UserController::profileEditFormAction',)), array('_route' => 'user_profile'));
        }

        return false;
    }
}
