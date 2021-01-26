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

/* modular/lightslider.html.twig */
class __TwigTemplate_6aa6583bab7580d4bb599a5f891e80bce38dbb36e4735b515d4ad452a3406107 extends \Twig\Template
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
        $context["settings"] = [];
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["header"] ?? null), "lightslider", [])) {
            // line 4
            echo "    ";
            $context["settings"] = $this->getAttribute(($context["header"] ?? null), "lightslider", []);
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightslider", [])) {
            // line 8
            echo "    ";
            $context["settings"] = twig_array_merge(($context["settings"] ?? null), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightslider", []));
        }
        // line 10
        echo "
";
        // line 11
        $context["settings"] = twig_array_merge($this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.lightslider"], "method"), ($context["settings"] ?? null));
        // line 12
        $context["unique_id"] = ("ls-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(10));
        // line 13
        echo "
";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["settings"] ?? null));
        echo "

<script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\"#";
        // line 18
        echo ($context["unique_id"] ?? null);
        echo "\").lightSlider({
        item: ";
        // line 19
        echo (($this->getAttribute(($context["settings"] ?? null), "item", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "item", []), 1)) : (1));
        echo ",
        slideMove: ";
        // line 20
        echo (($this->getAttribute(($context["settings"] ?? null), "slideMove", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "slideMove", []), 3)) : (3));
        echo ",
        slideMargin: ";
        // line 21
        echo (($this->getAttribute(($context["settings"] ?? null), "slideMargin", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "slideMargin", []), 5)) : (5));
        echo ",
        mode: '";
        // line 22
        echo (($this->getAttribute(($context["settings"] ?? null), "mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "mode", []), "slide")) : ("slide"));
        echo "',
        cssEasing: '";
        // line 23
        echo (($this->getAttribute(($context["settings"] ?? null), "cssEasing", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "cssEasing", []), "ease")) : ("ease"));
        echo "',
        easing: '";
        // line 24
        echo (($this->getAttribute(($context["settings"] ?? null), "easing", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "easing", []), "")) : (""));
        echo "',
        speed: ";
        // line 25
        echo (($this->getAttribute(($context["settings"] ?? null), "speed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "speed", []), 1000)) : (1000));
        echo ",
        auto: ";
        // line 26
        echo (($this->getAttribute(($context["settings"] ?? null), "auto", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "auto", []), "false")) : ("false"));
        echo ",
        loop: ";
        // line 27
        echo (($this->getAttribute(($context["settings"] ?? null), "loop", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "loop", []), "false")) : ("false"));
        echo ",
        pause: ";
        // line 28
        echo (($this->getAttribute(($context["settings"] ?? null), "pause", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pause", []), 2000)) : (2000));
        echo ",
        controls: ";
        // line 29
        echo (($this->getAttribute(($context["settings"] ?? null), "controls", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "controls", []), "true")) : ("true"));
        echo ",
        keyPress: ";
        // line 30
        echo (($this->getAttribute(($context["settings"] ?? null), "keyPress", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "keyPress", []), "true")) : ("true"));
        echo ",
        adaptiveHeight: ";
        // line 31
        echo (($this->getAttribute(($context["settings"] ?? null), "adaptiveHeight", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "adaptiveHeight", []), "true")) : ("true"));
        echo ",
        vertical: ";
        // line 32
        echo (($this->getAttribute(($context["settings"] ?? null), "vertical", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "vertical", []), "false")) : ("false"));
        echo ",
        verticalHeight: ";
        // line 33
        echo (($this->getAttribute(($context["settings"] ?? null), "verticalHeight", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "verticalHeight", []), 500)) : (500));
        echo ",
        pager: ";
        // line 34
        echo (($this->getAttribute(($context["settings"] ?? null), "pager", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pager", []), "true")) : ("true"));
        echo ",
        gallery: ";
        // line 35
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery", []), "false")) : ("false"));
        echo ",
        galleryMargin: ";
        // line 36
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery_margin", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_margin", []), 5)) : (5));
        echo ",
        thumbMargin: ";
        // line 37
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_margin", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_margin", []), 5)) : (5));
        echo ",
        enableTouch: ";
        // line 38
        echo (($this->getAttribute(($context["settings"] ?? null), "enableTouch", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "enableTouch", []), "true")) : ("true"));
        echo ",
        enableDrag: ";
        // line 39
        echo (($this->getAttribute(($context["settings"] ?? null), "enableDrag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "enableDrag", []), "true")) : ("true"));
        echo ",

    });
  });
</script>


<div id=\"";
        // line 46
        echo ($context["unique_id"] ?? null);
        echo "-wrapper\" class=\"grav-lightslider\">
    ";
        // line 47
        if (($this->getAttribute(($context["settings"] ?? null), "slider_type", []) == "text")) {
            // line 48
            echo "    <ul id=\"";
            echo ($context["unique_id"] ?? null);
            echo "\" style=\"";
            if ($this->getAttribute(($context["settings"] ?? null), "type_text_height", [])) {
                echo "height: ";
                echo $this->getAttribute(($context["settings"] ?? null), "type_text_height", []);
                echo ";";
            }
            echo "\">
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "<hr />"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["panel"]) {
                // line 50
                echo "            ";
                $context["panel_media"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), (("image-" . $this->getAttribute($context["loop"], "index", [])) . ".jpg"), [], "array");
                // line 51
                echo "            ";
                $context["panel_image"] = $this->getAttribute($this->getAttribute(($context["panel_media"] ?? null), "brightness", [0 => (($this->getAttribute(($context["settings"] ?? null), "type_text_brightness", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_brightness", []), "-100")) : ("-100"))], "method"), "url", []);
                // line 52
                echo "            ";
                if ((($context["panel_media"] ?? null) && $this->getAttribute(($context["settings"] ?? null), "gallery", []))) {
                    // line 53
                    echo "                ";
                    $context["panel_data_thumb"] = (("data-thumb=\"" . $this->getAttribute($this->getAttribute(($context["panel_media"] ?? null), "cropResize", [0 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", []), 100)) : (100)), 1 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", []), 100)) : (100))], "method"), "url", [])) . "\"");
                    // line 54
                    echo "            ";
                }
                // line 55
                echo "            <li ";
                echo ($context["panel_data_thumb"] ?? null);
                echo ">
                <div class=\"panel-bg\" style=\"
                    ";
                // line 57
                if (($context["panel_image"] ?? null)) {
                    echo "background-image: url(";
                    echo ($context["panel_image"] ?? null);
                    echo ");";
                }
                // line 58
                echo "                    min-height: ";
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_min_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_min_height", []), "auto")) : ("auto"));
                echo ";
                    height: ";
                // line 59
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_height", []), "auto")) : ("auto"));
                echo ";
                    \">
                    <div class=\"panel-padding ";
                // line 61
                echo $this->getAttribute(($context["settings"] ?? null), "type_text_css_class", []);
                echo "\" style=\"
                        padding: ";
                // line 62
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_vertical_padding", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_vertical_padding", []), 0)) : (0));
                echo " ";
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_horizontal_padding", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_horizontal_padding", []), 0)) : (0));
                echo "
                        \">
                        ";
                // line 64
                echo $context["panel"];
                echo "
                    </div>
                </div>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "    </ul>
    ";
        } else {
            // line 71
            echo "    <ul id=\"";
            echo ($context["unique_id"] ?? null);
            echo "\">
        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 73
                echo "            ";
                if ($this->getAttribute(($context["settings"] ?? null), "gallery", [])) {
                    // line 74
                    echo "                ";
                    $context["image_data_thumb"] = (("data-thumb=\"" . $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", []), 100)) : (100)), 1 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", []), 100)) : (100))], "method"), "url", [])) . "\"");
                    // line 75
                    echo "            ";
                }
                // line 76
                echo "            <li ";
                echo ($context["image_data_thumb"] ?? null);
                echo ">
                <img src=\"";
                // line 77
                echo $this->getAttribute($context["image"], "url", []);
                echo "\" />
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    </ul>
    ";
        }
        // line 82
        echo "</div>



";
    }

    public function getTemplateName()
    {
        return "modular/lightslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 82,  298 => 80,  289 => 77,  284 => 76,  281 => 75,  278 => 74,  275 => 73,  271 => 72,  266 => 71,  262 => 69,  243 => 64,  236 => 62,  232 => 61,  227 => 59,  222 => 58,  216 => 57,  210 => 55,  207 => 54,  204 => 53,  201 => 52,  198 => 51,  195 => 50,  178 => 49,  167 => 48,  165 => 47,  161 => 46,  151 => 39,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  123 => 32,  119 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  60 => 14,  57 => 13,  55 => 12,  53 => 11,  50 => 10,  46 => 8,  44 => 7,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set settings = {} %}

{% if header.lightslider %}
    {% set settings =  header.lightslider %}
{% endif %}

{% if page.header.lightslider %}
    {% set settings = settings|merge(page.header.lightslider) %}
{%  endif %}

{% set settings = config.get('plugins.lightslider')|merge(settings) %}
{% set unique_id = 'ls-' ~ random_string(10) %}

{{ dump(settings) }}

<script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\"#{{ unique_id }}\").lightSlider({
        item: {{ settings.item|default(1) }},
        slideMove: {{ settings.slideMove|default(3) }},
        slideMargin: {{ settings.slideMargin|default(5) }},
        mode: '{{ settings.mode|default('slide') }}',
        cssEasing: '{{ settings.cssEasing|default('ease') }}',
        easing: '{{ settings.easing|default('') }}',
        speed: {{ settings.speed|default(1000) }},
        auto: {{ settings.auto|default('false') }},
        loop: {{ settings.loop|default('false') }},
        pause: {{ settings.pause|default(2000) }},
        controls: {{ settings.controls|default('true') }},
        keyPress: {{ settings.keyPress|default('true') }},
        adaptiveHeight: {{ settings.adaptiveHeight|default('true') }},
        vertical: {{ settings.vertical|default('false') }},
        verticalHeight: {{ settings.verticalHeight|default(500) }},
        pager: {{ settings.pager|default('true') }},
        gallery: {{ settings.gallery|default('false') }},
        galleryMargin: {{ settings.gallery_margin|default(5) }},
        thumbMargin: {{ settings.gallery_thumb_margin|default(5) }},
        enableTouch: {{ settings.enableTouch|default('true') }},
        enableDrag: {{ settings.enableDrag|default('true') }},

    });
  });
</script>


<div id=\"{{ unique_id }}-wrapper\" class=\"grav-lightslider\">
    {% if settings.slider_type == 'text' %}
    <ul id=\"{{ unique_id }}\" style=\"{% if settings.type_text_height %}height: {{ settings.type_text_height }};{% endif %}\">
        {% for panel in page.content|split('<hr />') %}
            {% set panel_media = page.media['image-'~loop.index~'.jpg'] %}
            {% set panel_image = panel_media.brightness(settings.type_text_brightness|default('-100')).url %}
            {% if panel_media and settings.gallery %}
                {% set panel_data_thumb = 'data-thumb=\\\"'~panel_media.cropResize(settings.gallery_thumb_width|default(100),settings.gallery_thumb_height|default(100)).url~'\\\"' %}
            {% endif %}
            <li {{ panel_data_thumb }}>
                <div class=\"panel-bg\" style=\"
                    {% if panel_image %}background-image: url({{ panel_image }});{% endif %}
                    min-height: {{ settings.type_text_min_height|default('auto') }};
                    height: {{ settings.type_text_height|default('auto') }};
                    \">
                    <div class=\"panel-padding {{ settings.type_text_css_class }}\" style=\"
                        padding: {{ settings.type_text_vertical_padding|default(0) }} {{ settings.type_text_horizontal_padding|default(0) }}
                        \">
                        {{ panel }}
                    </div>
                </div>
            </li>
        {% endfor %}
    </ul>
    {% else %}
    <ul id=\"{{ unique_id }}\">
        {% for image in page.media.images %}
            {% if settings.gallery %}
                {% set image_data_thumb = 'data-thumb=\\\"'~image.cropResize(settings.gallery_thumb_width|default(100),settings.gallery_thumb_height|default(100)).url~'\\\"' %}
            {% endif %}
            <li {{ image_data_thumb }}>
                <img src=\"{{ image.url }}\" />
            </li>
        {% endfor %}
    </ul>
    {% endif %}
</div>



", "modular/lightslider.html.twig", "/Applications/MAMP/htdocs/Spiro2021/user/themes/spiro16/templates/modular/lightslider.html.twig");
    }
}
