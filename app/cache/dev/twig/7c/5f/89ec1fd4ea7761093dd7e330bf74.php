<?php

/* HelloBundle:User:profileEditForm.html.twig */
class __TwigTemplate_7c5f89ec1fd4ea7761093dd7e330bf74 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("HelloBundle::layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div>";
        echo twig_escape_filter($this->env, $this->getContext($context, 'info', '4'), "html");
        echo "</div>
<form name=\"userProfile\" action=\"#\" method=\"post\">
  ";
        // line 6
        echo $this->env->getExtension('form')->renderField($this->getContext($context, 'form', '6'));
        echo "

  <input type=\"submit\" value=\"Save\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "HelloBundle:User:profileEditForm.html.twig";
    }
}
