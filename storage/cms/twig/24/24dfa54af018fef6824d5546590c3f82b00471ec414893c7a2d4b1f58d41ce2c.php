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

/* /var/www/html/maxton/themes/maxton/pages/projects.htm */
class __TwigTemplate_1f6f54d43ce6dd524fe29c86da61a1c966ed1900731f2cfc750b6beb6a198d24 extends \Twig\Template
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
        echo "<!-- Project -->
<section class=\"section\">

    <!-- Breadcrumps -->
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrump"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
    <div class=\"project\">

        <div class=\"project__header\">
            <div class=\"container\">
                <div class=\"project__inner\">
                    <div class=\"project__our\">
                        NASZE PROJEKTY
                    </div>
                    <a href=\"#\">
                        <div class=\"project__sort\">
                            <div class=\"project__sort-item\">
                                Sortuj po marce:
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class=\"project__content\">
            <div class=\"container\">

                <!-- Project -->
                ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
                <!-- Pagination -->
                ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
            </div> 
        </div> 
    </div>

</section>

<!-- Featured movies -->
";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("movies"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/pages/projects.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  85 => 34,  81 => 33,  77 => 31,  73 => 30,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Project -->
<section class=\"section\">

    <!-- Breadcrumps -->
    {% partial 'breadcrump' %}

    <div class=\"project\">

        <div class=\"project__header\">
            <div class=\"container\">
                <div class=\"project__inner\">
                    <div class=\"project__our\">
                        NASZE PROJEKTY
                    </div>
                    <a href=\"#\">
                        <div class=\"project__sort\">
                            <div class=\"project__sort-item\">
                                Sortuj po marce:
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class=\"project__content\">
            <div class=\"container\">

                <!-- Project -->
                {% partial 'project' %}

                <!-- Pagination -->
                {% partial 'pagination' %}

            </div> 
        </div> 
    </div>

</section>

<!-- Featured movies -->
{% partial 'movies' %}", "/var/www/html/maxton/themes/maxton/pages/projects.htm", "");
    }
}
