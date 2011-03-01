<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_7dea8c0468b865cd022c36d2fe298b66 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, 'token', '1'), "html");
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">
    wdt = document.getElementById('sfwdt";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, 'token', '3'), "html");
        echo "');
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else {
        xhr = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xhr.open('GET', '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getUrl("_wdt", array("token" => $this->getContext($context, 'token', '9'))), "html");
        echo "', false);
    xhr.send('');
    wdt.innerHTML = xhr.responseText;
    wdt.style.display = 'block';
</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }
}
