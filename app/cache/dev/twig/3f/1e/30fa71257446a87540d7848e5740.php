<?php

/* FrameworkBundle:Exception:layout.html.twig */
class __TwigTemplate_3f1e30fa71257446a87540d7848e5740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html");
        echo "\"/>
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'exception', '5'), "message", array(), "any", false, 5), "html");
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code', '5'), "html");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text', '5'), "html");
        echo ")</title>
        <style type=\"text/css\">
            html { background: #eee }
            body { font: 11px Verdana, Arial, sans-serif; color: #333 }
            .sf-exceptionreset, .sf-exceptionreset .block, .sf-exceptionreset #message { margin: auto }
        </style>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/css/exception.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
        <script type=\"text/javascript\">
            //<![CDATA[
            function toggle(id, clazz) {
                el = document.getElementById(id);
                current = el.style.display

                if (clazz) {
                    var tags = document.getElementsByTagName('*');
                    for (i = 0; i < tags.length; i++) {
                        if (tags[i].className == clazz) {
                            tags[i].style.display = 'none';
                        }
                    }
                }

                el.style.display = current == 'none' ? 'block' : 'none';
            }
            //]]>
        </script>
    </head>
    <body>
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:layout.html.twig";
    }
}
