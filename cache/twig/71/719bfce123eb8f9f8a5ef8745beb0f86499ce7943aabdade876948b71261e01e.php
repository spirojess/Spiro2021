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

/* modular/contact.html.twig */
class __TwigTemplate_e93f4570c1786db7e3b17cb24d685804073aa6b259e90803dfd8d8bb08face8d extends \Twig\Template
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
        echo "<div class=\"modular-row hireus texture\">
    ";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropResize", [0 => 400, 1 => 400], "method"), "html", [0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_align", []))], "method");
            echo "
    ";
        }
        // line 6
        echo ($context["content"] ?? null);
        echo "
";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 7)->display($context);
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  48 => 7,  44 => 6,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row hireus texture\">
    {% set image = page.media.images|first %}
    {% if image %}
        {{ image.cropResize(400,400).html('','','align-'~page.header.image_align) }}
    {% endif %}
{{ content }}
{% include \"forms/form.html.twig\" %}
</div>
", "modular/contact.html.twig", "/Applications/MAMP/htdocs/Spiro2021/user/themes/spiro16/templates/modular/contact.html.twig");
    }
}
