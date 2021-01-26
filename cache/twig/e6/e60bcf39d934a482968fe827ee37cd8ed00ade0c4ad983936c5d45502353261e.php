<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/services.html.twig */
class __TwigTemplate_e078368f05ad57ddd553583bc7fa3e3d887a595e66d9ffe8d5a38f6fac92643a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"services\">
    <div class=\"modular-row ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
            ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
    </div>
    <div class=\"row text-center\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "           <div class=\"feature four-x\">
                ";
            // line 8
            if ($this->getAttribute($context["service"], "icon", [])) {
                // line 9
                echo "                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-";
                // line 11
                echo $this->getAttribute($context["service"], "icon", []);
                echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                ";
            }
            // line 14
            echo "                ";
            if ($this->getAttribute($context["service"], "header", [])) {
                // line 15
                echo "                    <h4 class=\"service-heading\">";
                echo $this->getAttribute($context["service"], "header", []);
                echo "</h4>
                ";
            }
            // line 17
            echo "                ";
            if ($this->getAttribute($context["service"], "text", [])) {
                // line 18
                echo "                    <p class=\"text-muted\">";
                echo $this->getAttribute($context["service"], "text", []);
                echo "</p>
                ";
            }
            // line 20
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  80 => 20,  74 => 18,  71 => 17,  65 => 15,  62 => 14,  56 => 11,  52 => 9,  50 => 8,  47 => 7,  43 => 6,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\">
    <div class=\"modular-row {{ page.header.class}}\">
            {{ content }}
    </div>
    <div class=\"row text-center\">
        {% for service in page.header.services %}
           <div class=\"feature four-x\">
                {% if service.icon %}
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-{{ service.icon }} fa-stack-1x fa-inverse\"></i>
                    </span>
                {% endif %}
                {% if service.header %}
                    <h4 class=\"service-heading\">{{ service.header }}</h4>
                {% endif %}
                {% if service.text %}
                    <p class=\"text-muted\">{{ service.text }}</p>
                {% endif %}
            </div>
        {% endfor %}
    </div>
</section>
", "modular/services.html.twig", "/Applications/MAMP/htdocs/Spiro2021/user/themes/spiro16/templates/modular/services.html.twig");
    }
}
