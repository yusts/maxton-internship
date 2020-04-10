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

/* /var/www/html/maxton/themes/maxton/pages/home.htm */
class __TwigTemplate_ca1225d2bc3c3fd8475b81d13c70875e271b8c438749748df151936fed3e6875 extends \Twig\Template
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
        echo "<!-- Carousel -->
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("carousel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<!-- Project -->
<section class=\"section\">
    <div class=\"project\">

        <div class=\"project__header\">
            <div class=\"project__category\">
                Najnowsze projekty
            </div>
            <div class=\"project__category project__category-middle active\">
                Najlepiej oceniane
            </div>
            <div class=\"project__category\">
                Marki
            </div>
        </div>

        <div class=\"project__content\">
            <div class=\"container\">
                    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "                
            </div>
        </div>
    </div> <!-- /.project -->
</section>

<!-- Brand -->
";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("brand"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
<!-- About  -->
";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  82 => 31,  78 => 30,  69 => 23,  65 => 22,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel -->
{% partial 'carousel' %}

<!-- Project -->
<section class=\"section\">
    <div class=\"project\">

        <div class=\"project__header\">
            <div class=\"project__category\">
                Najnowsze projekty
            </div>
            <div class=\"project__category project__category-middle active\">
                Najlepiej oceniane
            </div>
            <div class=\"project__category\">
                Marki
            </div>
        </div>

        <div class=\"project__content\">
            <div class=\"container\">
                    {% partial 'project' %}
                
            </div>
        </div>
    </div> <!-- /.project -->
</section>

<!-- Brand -->
{% partial 'brand' %}

<!-- About  -->
{% partial 'about' %}", "/var/www/html/maxton/themes/maxton/pages/home.htm", "");
    }
}
