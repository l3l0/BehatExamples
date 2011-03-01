<?php

/* HelloBundle:User:profileEditForm.html.twig */
class __TwigTemplate_7c5f89ec1fd4ea7761093dd7e330bf74 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form name=\"userProfile\" action=\"#\" method=\"post\">
  ";
        // line 2
        echo $this->env->getExtension('form')->renderField((isset($context['form']) ? $context['form'] : null));
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
