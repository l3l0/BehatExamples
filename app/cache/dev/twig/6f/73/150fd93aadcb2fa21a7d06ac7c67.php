<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_6f73150fd93aadcb2fa21a7d06ac7c67 extends Twig_Template
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
    <img style=\"margin: 0 5px 0 10px; vertical-align: middle; height: 24px\" width=\"24\" height=\"24\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAApBJREFUeNrsl19oUlEcx+91dp24hgMXhmvYZokaC5Uon+ollk/14JMIw8c9zpfwJeglqMfoVXQw9KknAyNFfagRyNaiB7Mw3VDxz9iG/xH/9D10HSJxJ9oSyh98OOd47u+c7/2ec/AeutPpUOMMHjXm4HN10jTdrc6Ax+AOOATvwWe2PDO4XKY5O38JUIjF4uc2m023vLwsa7Va+XQ6Hdne3m56vV4BK+QD2HO73dn+Mcxm80gCHqhUKvvGxsYNhmEyHo/nVbvdvryysiJUKpW3hEKhtlwuf4pEIgfBYJBJJpMVIoQI2traIiVlsViGF2A0GqMmk+lqvV5/HQqFnAsLC/cFAsFSLpc7TKVSBfzekEqlfIPBcAUu3YZgXjab/er3+8vhcHgKQ/wgYjDH26EEbG5udjBR0eVyxWZnZ79ptdoThULRgohOtVoVgZlisdiOx+P7tVqtgZSGTqebxjMGPHMN7uz7fL5LQDWUAKfTedqZSCSOo9HoUSwWK2KyI41GE1Wr1VWJRMI0m80LlUrlYqlUYrA/8ohjtBvr6+tkf7yxWq30UKcAG+60vri4OEdYXV2l8OaN3d3d64FA4LhQKNTn5+e/6PX6A7lcPiWTyaYzmcxN7BUa+c9GOoa9AnoD9jJk3QmkDVeWdnZ28rC6bLfbLXDkBVf+yAL6A2suIbA538nb/1UB/QEB1L8hAGs5lIDuxIPkTxyYODBZgokD5yKgmzf5L/gTAqwo7oJHQHweAjgvJg6Hw4XBrGAOaMFTsEcm4ILMLRKJ0mzbxXn3OOtesLa29rsuObgHHrJlrzs0jt8TPp//DvWP+LDl/CznD2pnXySBi4XqE0PxeLyXyDsZZLno//5yOnYBPwUYACFn5hv7UNkXAAAAAElFTkSuQmCC\" />
    <span>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '6'), "counterrors", array(), "any", false, 6), "html");
        echo "</span>
</span>
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "<span class=\"count\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "counterrors", array(), "any", false, 11), "html");
        echo "</span>
<img style=\"margin: 0 5px 0 0; vertical-align: middle; width: 32px\" width=\"32\" height=\"32\" alt=\"Logs\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/logger.png"), "html");
        echo "\" />
Logs
";
    }

    // line 16
    public function block_panel($context, array $blocks = array())
    {
        // line 17
        echo "    <h2>Logs</h2>

    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, 'collector', '19'), "logs", array(), "any", false, 19)) {
            // line 20
            echo "        <ul class=\"alt\">
            ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '21'), "logs", array(), "any", false, 21));
            foreach ($context['_seq'] as $context['i'] => $context['log']) {
                // line 22
                echo "                <li class=\"";
                echo ((twig_test_odd($this->getContext($context, 'i', '22'))) ? ("odd") : ("even"));
                if (("ERR" == $this->getAttribute($this->getContext($context, 'log', '22'), "priorityName", array(), "any", false, 22))) {
                    echo " error";
                }
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '23'), "priorityName", array(), "any", false, 23), "html");
                echo "
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '24'), "message", array(), "any", false, 24), "html");
                echo "
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "        </ul>
    ";
        } else {
            // line 29
            echo "        <em>No logs available.</em>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }
}
