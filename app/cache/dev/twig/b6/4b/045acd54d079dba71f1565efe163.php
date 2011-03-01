<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_b64b045acd54d079dba71f1565efe163 extends Twig_Template
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
    <img style=\"margin: 0 5px 0 10px; vertical-align: middle; height: 24px\" width=\"24\" height=\"24\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABJ5JREFUeNrEV1tIo0cUTuJqFH9iTBSjyUq8BVtLV2tLdV/6IiIFwe1LxQuu4mVBiwYfrCiI4KUv4oNdVKS64KX0qQUfKoKwT7WlTatS2sVdbXBXjVhtDPEetd9JZ2TWXExsiwOH/8y5zZmZM+ecX35xcSG7zSEXHZDL5dfJ9wMyGb4AMN9k0dfW9OOARDA1NWXjhI2NjZcJCQkGhr8CfpfzSkpKdPg4Ie8UjYDu1wGFDycltVr92GAwTMJAKinQ9/T0NIxwAsJFHsmSDnCJywRyvXd8Ld7W1vYRvuF9fX1flJaWLptMpkxJklTn5+f/CAEH7UvwFtLT003Nzc337Xb7UXd3twy0+vHxceeNYiAvL8+Un5//Y1xcnIpoR0dHLjKs0+kkbwZsNpuTHMVwb2Zra8sxOzv7Xnl5+TLNKyoqgouBsbExI2iLwFU3DDAHdO8BtdK8srIyuBiAghXH/MHh4eHJ2dmZzAssMPDgkQ7pArdy2nXDaxBWV1c7d3Z2yJhMgG8ASYAsBkmMdilDOqQr0oINQnrnMgTVGzExMRLfwfHx8YxSqXxwRZaO+AF434JXQATSge7ntbW1v9N8cHDQHFQQtrS0/EXfqKiocAJBLonfqZdhBPzBJ3t7e0cEhCcmJkY3NDT4jYHXTkCv16s5zne/u7u7o9ForH42YWUyWvY8wwlEGwHHgLfAOjk5UTY2Nup8BKSMeCTjix9UDLhcrqfMkbSQkBA94dHR0RKOsg28T7wZIB7JgM83sQ7d5/+qGPX29lLB+YXTV1dX/xwZGRkC+hg8d21obW2l3F9fU1PzKDk5OUawmcUKlYzJ3agYpZrNZotWq1WJTkxPT7/Y3t7+leaxsbFvFRYWpoqL4xk6+vv7s7u6ul5wWnt7e9AO6IxG41fI5/fDwsI8agUWced4OOeRmhELrsnJye+sVuvHnZ2d7pPq6OgI/BWw3K2Jj4/PUSgUd/i9igPPU2Lx4hnR0CkuLs7Z3NzUgG8LJAY8HMBT3ICHzxBMbwu5fVVoRK6OBcgk89qB7zOyQS+gp6dHbF4CS8VQslM+xw6WAA6W27MInE6ngz8vhrvpTN5BOhaL5UPYcJFMWlraGIHY4ATckqG+q1mWu/QeCeclEo6B4a+A3xVsZS4uLm7Pz8/30GR/f/832PiMcPQUn0ZGRr7J6PVY0xlwT9jU1HSJowv6PjQ09H2G/wA8R5RdWlrSI4AXsXslHHSmpKTQU5WtrKzY4KyE/HCMAL03Nze37q8jkl3NjkKQPcJczXD71UyXkZGxf3BwcKxSqbSAy2IGp9yOgOcgmWvLsZ/0TH3AUwYePcHAwMDXaFYVAu0JA/eceCQTVFteV1cXVEPEEbRmFrR17w4PD8uKiop+Ap7NeUNDQ/KAryCQpsLbwHHrsXgLx33ZufYEqqqqAl50dHRUKigosOB/wUTztbU1GytYOvYvsTwzM5MtvoL/9ARyc3Oj0AtouQ7+FXSiDeKRDP3A/C8OIOnsY3frVJJxmj+D9JCxnoD+TkREhFsmqCsoKysL9vp5V2XnQTkxMSGHHTXD7T6r4a3/Hd/G+FuAAQDV6k9Ni4q8owAAAABJRU5ErkJggg==\" />
    ";
        // line 6
        if ($this->getAttribute($this->getContext($context, 'collector', '6'), "route", array(), "any", false, 6)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '6'), "route", array(), "any", false, 6), "html");
        } else {
            echo "<span style=\"color: #a33\">NONE</span>";
        }
        echo "<span style=\"margin: 0; padding: 0; color: #aaa\">|</span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '6'), "format", array(), "any", false, 6), "html");
        echo "<span style=\"margin: 0; padding: 0; color: #aaa\">|</span><span style=\"color: ";
        echo (((200 == $this->getAttribute($this->getContext($context, 'collector', '6'), "statuscode", array(), "any", false, 6))) ? ("#3a3") : ("#a33"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '6'), "statuscode", array(), "any", false, 6), "html");
        echo "</span><span style=\"margin: 0; padding: 0; color: #aaa\">|</span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '6'), "contenttype", array(), "any", false, 6), "html");
        echo "
</span>
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "<img style=\"margin: 0 5px 0 0; vertical-align: middle; width: 32px\" width=\"32\" height=\"32\" alt=\"Request\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/request.png"), "html");
        echo "\" />
Request
";
    }

    // line 15
    public function block_panel($context, array $blocks = array())
    {
        // line 16
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 18
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '18'), "requestquery", array(), "any", false, 18), "all", array(), "any", false, 18))) {
            // line 19
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '19'), "requestquery", array(), "any", false, 19)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '19'), "requestquery", array(), "any", false, 19)));
            }
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        <em>No GET parameters</em>
    ";
        }
        // line 23
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 26
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '26'), "requestrequest", array(), "any", false, 26), "all", array(), "any", false, 26))) {
            // line 27
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '27'), "requestrequest", array(), "any", false, 27)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '27'), "requestrequest", array(), "any", false, 27)));
            }
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        <em>No POST parameters</em>
    ";
        }
        // line 31
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 34
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '34'), "requestattributes", array(), "any", false, 34), "all", array(), "any", false, 34))) {
            // line 35
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '35'), "requestattributes", array(), "any", false, 35)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '35'), "requestattributes", array(), "any", false, 35)));
            }
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        <em>No attributes</em>
    ";
        }
        // line 39
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '42'), "requestcookies", array(), "any", false, 42), "all", array(), "any", false, 42))) {
            // line 43
            echo "        ";
            $template = "WebProfilerBundle:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '43'), "requestcookies", array(), "any", false, 43)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '43'), "requestcookies", array(), "any", false, 43)));
            }
            // line 44
            echo "    ";
        } else {
            // line 45
            echo "        <em>No cookies</em>
    ";
        }
        // line 47
        echo "
    <h2>Requests Headers</h2>

    ";
        // line 50
        $template = "WebProfilerBundle:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '50'), "requestheaders", array(), "any", false, 50)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '50'), "requestheaders", array(), "any", false, 50)));
        }
        // line 51
        echo "
    <h2>Requests Server Parameters</h2>

    ";
        // line 54
        $template = "WebProfilerBundle:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '54'), "requestserver", array(), "any", false, 54)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '54'), "requestserver", array(), "any", false, 54)));
        }
        // line 55
        echo "
    <h2>Response Headers</h2>

    ";
        // line 58
        $template = "WebProfilerBundle:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '58'), "responseheaders", array(), "any", false, 58)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '58'), "responseheaders", array(), "any", false, 58)));
        }
        // line 59
        echo "
    <h2>Response Session Attributes</h2>

    ";
        // line 62
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '62'), "sessionattributes", array(), "any", false, 62))) {
            // line 63
            echo "        <table>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>

            ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '69'), "sessionattributes", array(), "any", false, 69));
            foreach ($context['_seq'] as $context['key'] => $context['value']) {
                // line 70
                echo "                <tr>
                    <th>";
                // line 71
                echo twig_escape_filter($this->env, $this->getContext($context, 'key', '71'), "html");
                echo "</th>
                    <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('templating')->dump($this->getContext($context, 'value', '72')), "html");
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo "        </table>
    ";
        } else {
            // line 77
            echo "        <em>No request session attributes</em>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }
}
