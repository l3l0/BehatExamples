<?php

/* DoctrineMongoDBBundle:Collector:mongodb.html.twig */
class __TwigTemplate_c635477ce0942f4210230b59201c3141 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "<span style=\"white-space: nowrap\">
    <img style=\"margin: 0 5px 0 10px; vertical-align: middle; height: 24px\" width=\"24\" height=\"24\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAASxJREFUeNrsV00KhCAYzaGDzLZbONcIghadoDZtiqJNbVq0Ctq06xjNCTrDnKMfGoVpsFBRqNz4QD7NR77vmZ8E1nU1VOJhKIYWoAUoF2CSAwBAf9E6L3JAHn1ADrquu6Qo2LYNWAJ2DizLYjiOg8lnO9HTnKAKwGjbFl7hhOu6/G9gnud/9DzvFieYAjDquoa3noJpmqhRuQDf99+8l5RlCWV40gKKouBuhSyPKWAcR2qMooibWZZlUIYn7UAcx0KZifKkHcjznJpZGIa7BVk8Fl/YgSAIoEhGLJ6wA4iQ3H0Md9dxVVXpUcCxDcPwQRHg9utLzR+TMmmqUCVMyIpIwrKs5/ac7IvOc7dgQ9M0KUvApZXwCHQ7YieSk9fcvQ/oHxMtQAtQLeArwABN1BHcHlpLnQAAAABJRU5ErkJggg==\" />
    <span style=\"color: ";
        // line 6
        echo ((($this->getAttribute($this->getContext($context, 'collector', '6'), "querycount", array(), "any", false, 6) < 10)) ? ("#000") : ("#d22"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '6'), "querycount", array(), "any", false, 6), "html");
        echo "</span>
</span>
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"count\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "querycount", array(), "any", false, 11), "html");
        echo "</div>
<img style=\"margin: 0 5px 0 0; vertical-align: middle; width: 32px\" width=\"32\" height=\"32\" alt=\"Mongo\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/db.png"), "html");
        echo "\" />
Doctrine MongoDB
";
    }

    // line 16
    public function block_panel($context, array $blocks = array())
    {
        // line 17
        echo "    <h2>Queries</h2>

    ";
        // line 19
        if ((!$this->getAttribute($this->getContext($context, 'collector', '19'), "queries", array(), "any", false, 19))) {
            // line 20
            echo "        <em>Query logging is disabled.</em>
    ";
        } elseif ((!$this->getAttribute($this->getContext($context, 'collector', '21'), "querycount", array(), "any", false, 21))) {
            // line 22
            echo "        <em>No queries.</em>
    ";
        } else {
            // line 24
            echo "        <ul class=\"alt\">
            ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '25'), "queries", array(), "any", false, 25));
            foreach ($context['_seq'] as $context['i'] => $context['query']) {
                // line 26
                echo "                <li class=\"";
                echo ((twig_test_odd($this->getContext($context, 'i', '26'))) ? ("odd") : ("even"));
                echo "\">
                    <div>
                        <code>";
                // line 28
                echo twig_escape_filter($this->env, $this->getContext($context, 'query', '28'), "html");
                echo "</code>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DoctrineMongoDBBundle:Collector:mongodb.html.twig";
    }
}
