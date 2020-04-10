<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/maxton/themes/maxton/partials/project.htm */
class __TwigTemplate_f3e0b5f5dac85092e79c7fc302ce05c9da1e3c38fe2e9843cccce944434e5255 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"project__items\">

        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "        <div class=\"project__item\">
                
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 8), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "            <img class=\"project__img\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 9), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 9), "html", null, true);
                echo "\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            
            <div class=\"overlay\">
                
                <div class=\"overlay__title\">
                ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "
                </div>

                <div class=\"overlay__social\">
                    <div class=\"overlay__item\">
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    </div>
                    <div class=\"overlay__item\">
                        <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                    </div>
                    
                </div>
            </div>

        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/project.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  73 => 15,  67 => 11,  56 => 9,  52 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

<div class=\"project__items\">

        {% for post in posts %}
        <div class=\"project__item\">
                
            {% for image in post.featured_images|slice(0, 1) %}
            <img class=\"project__img\" src=\"{{ image.path }}\" alt=\"{{ post.title }}\">
            {% endfor %}
            
            <div class=\"overlay\">
                
                <div class=\"overlay__title\">
                {{ post.title }}
                </div>

                <div class=\"overlay__social\">
                    <div class=\"overlay__item\">
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    </div>
                    <div class=\"overlay__item\">
                        <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                    </div>
                    
                </div>
            </div>

        </div>
        {% endfor %}
    
</div>", "/var/www/html/maxton/themes/maxton/partials/project.htm", "");
    }
}
