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

/* modular/portfolio.html.twig */
class __TwigTemplate_177873f99767bd83c1a7abef5f60ac906007ee9e30f4b269ce62456076773a28 extends \Twig\Template
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
        echo "<section id=\"portfolio\" class=\"texture\">
    <div class=\"modular-row  ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
        <div class=\"text-center\">
            ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolios", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 9
            echo "            <div class=\"portfolio-item\">
  <a href=\"#\" data-featherlight=\"<div class='modal-body'>
                            <h2>";
            // line 11
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h2>
                            <hr class='star-primary'>
                            <img src='";
            // line 13
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "img", []), [], "array"), "url", []);
            echo "' class='img-responsive img-centered' alt='";
            echo $this->getAttribute($context["portfolio"], "alt", []);
            echo "'>
                            <p>";
            // line 14
            echo $this->getAttribute($context["portfolio"], "description", []);
            echo "</p>
                            <ul class='list-inline item-details'>
                                <li>Client:
                                    ";
            // line 17
            if (($this->getAttribute($context["portfolio"], "live", []) == "")) {
                echo "<strong>";
                echo $this->getAttribute($context["portfolio"], "client", []);
                echo "</strong>
                                    ";
            } else {
                // line 18
                echo "<strong><a href='http://";
                echo $this->getAttribute($context["portfolio"], "live", []);
                echo "' target='_blank'>";
                echo $this->getAttribute($context["portfolio"], "client", []);
                echo "</a></strong>
                                    ";
            }
            // line 20
            echo "                                </li>
                               ";
            // line 25
            echo "                                <li>Service:
                                    <strong>";
            // line 26
            echo $this->getAttribute($context["portfolio"], "category", []);
            echo "
                                    </strong>
                                </li>
                            </ul>
                        </div>  \">
      <img src=\"";
            // line 31
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "thumbnail", []), [], "array"), "url", []);
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "meta", []), "alt", []);
            echo "\"'></a>
                <div class=\"portfolio-caption\">
                    <h4>";
            // line 33
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 34
            echo $this->getAttribute($context["portfolio"], "subtitle", []);
            echo "</p>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  110 => 34,  106 => 33,  99 => 31,  91 => 26,  88 => 25,  85 => 20,  77 => 18,  70 => 17,  64 => 14,  58 => 13,  53 => 11,  49 => 9,  45 => 8,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"portfolio\" class=\"texture\">
    <div class=\"modular-row  {{ page.header.class}}\">
        <div class=\"text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row\">
        {% for portfolio in page.header.portfolios %}
            <div class=\"portfolio-item\">
  <a href=\"#\" data-featherlight=\"<div class='modal-body'>
                            <h2>{{ portfolio.title }}</h2>
                            <hr class='star-primary'>
                            <img src='{{ page.media[portfolio.img].url }}' class='img-responsive img-centered' alt='{{ portfolio.alt }}'>
                            <p>{{ portfolio.description }}</p>
                            <ul class='list-inline item-details'>
                                <li>Client:
                                    {% if portfolio.live == \"\" %}<strong>{{ portfolio.client }}</strong>
                                    {% else %}<strong><a href='http://{{portfolio.live}}' target='_blank'>{{ portfolio.client }}</a></strong>
                                    {% endif %}
                                </li>
                               {# <li>Date:
                                    <strong>{{ portfolio.projectdate }}
                                    </strong>
                                </li>  #}
                                <li>Service:
                                    <strong>{{ portfolio.category }}
                                    </strong>
                                </li>
                            </ul>
                        </div>  \">
      <img src=\"{{page.media[portfolio.thumbnail].url}}\" alt=\"{{ image.meta.alt }}\"'></a>
                <div class=\"portfolio-caption\">
                    <h4>{{ portfolio.title }}</h4>
                    <p class=\"text-muted\">{{ portfolio.subtitle }}</p>
                </div>
            </div>

        {% endfor %}
    </div>
</section>
", "modular/portfolio.html.twig", "/Applications/MAMP/htdocs/Spiro2021/user/themes/spiro16/templates/modular/portfolio.html.twig");
    }
}
