<?php

/* FrameworkBundle:Exception:exception.html.twig */
class __TwigTemplate_4d77cfe152caff6c9fbe5accd65d30ed extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"sf-exceptionreset\">
    <div id=\"message\">
        <div style=\"float: left; margin-right: 20px\">
            <img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABHpJREFUeNrsV1tIY1cUzUvzMJOJk/isjkYnOlLBVE1spjQElXb6U/yyklGL1hedD7FFjDBQbBGrfohfgyhSKgYKLfhX2qotUzrWDnUCo7VgjTA2iI4ZNY+bh1G7Tri3pGn05tKB+egcWJzXPvusu8/e+5zLPzs74z3PIuA95/KCAI/4QCxiym3ge6CDg9oOes1ttr1EbJpmZmaKhUKheXFxsWBqaqoWQxabzRaOJ2uxWIg+W1tbW1V1dfXVk5OTR01NTRfqZyXA5/Otp6enlNls7isvL8/o7u6eQP+9eLJJSUkT4+PjbysUCjFkhrH2Yzb9rATI5qiswGdyuXx9cHCwvrGx8S76l4GrtNhj4GhkZKQeMmTzEvR/T+SsWAnAjEyTKDSmpaUt6fX6KXxlclZWlpRM7Ozs+N1udwhzcsgbE92cKwEezvb68PAw1dnZWRZPdm9vj+rr67sOX/n5mYUhIUCAzW80NDR8pFQqZcxYLMgckSGyzNh/scDrADHp15G46ugw6nS6fDalJpMpH8djhNx9eugtwAv8GNfJ490F8N5ko9G4IpVKRQi/eQx9V1FRccdgMHhLSkrMFxFYX1//YXl5+crKysoHhA/C8R2/3x9eWloqx16hhAiMjY1JUPnpc32ysbHxS1VV1c21tbXd+fn5P0tLSwOwRopEIhETmUAgELTb7b7V1VVJbW1tTllZWTbkviosLKzUaDR5tFppT09PIFEL8EZHRx+iqfN6va79/f2j3NzcfCSkiM+g7wUpF0VRkYQkk8lEWq1WpVar5YyOLRT0L6Go0bX39va+Enev8wiQMjQ0dAtVvcvlMqlUKiWXFI81HqxZQPPL/v7+WSYVJ0pAQz4MIF+YbLVaH6SkpIi5EAiHw6cDAwNash4QAhT22kooCnJycr4Qi8VCePIZztmDFJt8fHwcmfN4PFuHh4cbCDktzKu5KMSLi4u7Q6HQawKBgB8MBkn4GBIi0NzcrGfacDCf0+l0ZGZmFpL+9va2GwrDIOIuKio6d3dsHEIkmbKzs3Wc8wDM50T1UkRAJLLjSPIxFplDjGt2d3dVGRkZCmbsHB1Uenr6b6gZAk4ueeAfCamlpWXuCkqsHMzqRiT8gUjZwSWUhWi4hqNTkLnNzU3H3NxcM5o/Rb8HuKRictPdrays/BBKJeRrY4ELyHFwcPAY/nFMatJn5nBkauSKO0RH1K2ZsAVEMN+9mpqal+GIFCLAj6/7l8M5HI77cNA9pg8e6QUFBTdoZ/0VRK5BP39hYWENCc2EdjghH+jq6hJA2AAiQnKW8IPP4VPvIxGlRcvBMnk+ny8MEkfY/DKI5tGX0BMQnoWOT0lar6ure5VEAicfaG9vn0DzXaCVPLOAN4BvouWQ44MwvQemp+CcstTU1Eu4P0i+eBP4FmgkrzryWJmcnFRyzoSktLa2Rj8qZzFnYXnk2iBzi+lPT0/zLnJCTg8S2iIku+nPEX9Ayzy7/wK876IRBgzAJ8DTqPGn9JiBlvl7Deuj98W/4f+ewF8CDADfMn9DHK75mAAAAABJRU5ErkJggg==\" />
        </div>
        <div style=\"float: left; width: 600px\">
            <h1>";
        // line 7
        echo $this->env->getExtension('templating')->formatFileFromText(twig_strtr($this->getAttribute($this->getContext($context, 'exception', '7'), "message", array(), "any", false, 7), array("
" => "<br />")));
        echo "</h1>
            <h2><strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code', '8'), "html");
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text', '8'), "html");
        echo " - ";
        echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'exception', '8'), "class", array(), "any", false, 8));
        echo "</h2>

            ";
        // line 10
        $context['previous_count'] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'exception', '10'), "previouses", array(), "any", false, 10));
        // line 11
        echo "            ";
        if ($this->getContext($context, 'previous_count', '11')) {
            // line 12
            echo "                <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'previous_count', '12'), "html");
            echo "</strong> linked Exception";
            echo ((($this->getContext($context, 'previous_count', '12') > 1)) ? ("s") : (""));
            echo ":</span>
                    <ul>
                        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception', '14'), "previouses", array(), "any", false, 14));
            foreach ($context['_seq'] as $context['i'] => $context['previous']) {
                // line 15
                echo "                            <li>
                                ";
                // line 16
                echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'previous', '16'), "class", array(), "any", false, 16));
                echo " <a href=\"#traces_link_";
                echo twig_escape_filter($this->env, ($this->getContext($context, 'i', '16') + 1), "html");
                echo "\" onclick=\"toggle('traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, 'i', '16') + 1), "html");
                echo "', 'traces');\">&raquo;</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "                    </ul>
                </div>
            ";
        }
        // line 22
        echo "        </div>

        <div style=\"clear: both\"></div>
    </div>

    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception', '27'), "toarray", array(), "any", false, 27));
        foreach ($context['_seq'] as $context['position'] => $context['e']) {
            // line 28
            echo "        ";
            $template = "FrameworkBundle:Exception:traces.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("exception" => $this->getContext($context, 'e', '28'), "position" => $this->getContext($context, 'position', '28'), "count" => $this->getContext($context, 'previous_count', '28')));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("exception" => $this->getContext($context, 'e', '28'), "position" => $this->getContext($context, 'position', '28'), "count" => $this->getContext($context, 'previous_count', '28')));
            }
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "
    ";
        // line 31
        if ($this->getContext($context, 'logger', '31')) {
            // line 32
            echo "        <div class=\"block\">
            <h3>
                ";
            // line 34
            if ($this->getAttribute($this->getContext($context, 'logger', '34'), "counterrors", array(), "any", false, 34)) {
                // line 35
                echo "                    <span class=\"error\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'logger', '35'), "counterrors", array(), "any", false, 35), "html");
                echo " error";
                echo ((($this->getAttribute($this->getContext($context, 'logger', '35'), "counterrors", array(), "any", false, 35) > 1)) ? ("s") : (""));
                echo "</span>
                ";
            }
            // line 37
            echo "                Logs <a href=\"#\" onclick=\"toggle('logs'); return false;\">&raquo;</a>
            </h3>

            <div id=\"logs\" style=\"display: none\">
                ";
            // line 41
            $template = "FrameworkBundle:Exception:logs.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("logs" => $this->getAttribute($this->getContext($context, 'logger', '41'), "logs", array(), "any", false, 41)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("logs" => $this->getAttribute($this->getContext($context, 'logger', '41'), "logs", array(), "any", false, 41)));
            }
            // line 42
            echo "            </div>

        </div>
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if ($this->getContext($context, 'currentContent', '47')) {
            // line 48
            echo "        <div class=\"block\">
            <h3>Content of the Output <a href=\"#\" onclick=\"toggle('content'); return false;\">&raquo;</a></h3>

            <div id=\"content\" style=\"display: none\">
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->getContext($context, 'currentContent', '52'), "html");
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 58
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.html.twig";
    }
}
