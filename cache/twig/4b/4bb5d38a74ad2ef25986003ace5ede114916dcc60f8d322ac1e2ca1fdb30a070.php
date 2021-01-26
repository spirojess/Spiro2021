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

/* modular/specialties.html.twig */
class __TwigTemplate_fcf30a50a43b68534443d0e951a0783c868a210516613c7f690e779ccd94fb81 extends \Twig\Template
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
        echo "<div class=\"modular-row specialties ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    <div class=\"specialty-items\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "specialties", []));
        foreach ($context['_seq'] as $context["_key"] => $context["specialty"]) {
            // line 5
            echo "           <div class=\"specialty\" style=\"background-image: ";
            echo $this->getAttribute($context["specialty"], "image", []);
            echo ";\">
            ";
            // line 6
            if ($this->getAttribute($context["specialty"], "icon", [])) {
                // line 7
                echo "            <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["specialty"], "icon", []);
                echo "\"></i>
            <div class=\"specialty-content icon-offset\">
            ";
            } else {
                // line 10
                echo "            <div class=\"specialty-content\">
            ";
            }
            // line 12
            echo "            ";
            if ($this->getAttribute($context["specialty"], "header", [])) {
                // line 13
                echo "            <h4>";
                echo $this->getAttribute($context["specialty"], "header", []);
                echo "</h4>
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["specialty"], "text", [])) {
                // line 16
                echo "            <p>";
                echo $this->getAttribute($context["specialty"], "text", []);
                echo "</p>
            ";
            }
            // line 18
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/specialties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  80 => 18,  74 => 16,  71 => 15,  65 => 13,  62 => 12,  58 => 10,  51 => 7,  49 => 6,  44 => 5,  40 => 4,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row specialties {{ page.header.class}}\">
    {{ content }}
    <div class=\"specialty-items\">
    {% for specialty in page.header.specialties %}
           <div class=\"specialty\" style=\"background-image: {{specialty.image}};\">
            {% if specialty.icon %}
            <i class=\"fa fa-fw fa-{{ specialty.icon }}\"></i>
            <div class=\"specialty-content icon-offset\">
            {% else %}
            <div class=\"specialty-content\">
            {% endif %}
            {% if specialty.header %}
            <h4>{{ specialty.header }}</h4>
            {% endif %}
            {% if specialty.text %}
            <p>{{ specialty.text }}</p>
            {% endif %}
            </div>
        </div>
    {% endfor %}
    </div>
</div>
", "modular/specialties.html.twig", "/Applications/MAMP/htdocs/Spiro2021/user/themes/spiro16/templates/modular/specialties.html.twig");
    }
}
