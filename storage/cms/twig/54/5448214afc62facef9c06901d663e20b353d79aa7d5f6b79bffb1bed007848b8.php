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

/* /var/www/html/maxton/themes/maxton/layouts/default.htm */
class __TwigTemplate_c2f9acb9e557289d496234da0d5b0131a02b118de44469884dbd323f8b7a8786 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/css/swiper.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/css/swiper.min.css\">
    <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\">

    <script src=\"https://kit.fontawesome.com/586f23898a.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "</head>

<body>

    ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 22
        echo "
    ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
    <!-- Scripts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/swiper/js/swiper.js\"></script>
    <script src=\"https://unpkg.com/swiper/js/swiper.min.js\"></script>
    <script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
    ";
        // line 30
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 31
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 32
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  105 => 31,  94 => 30,  90 => 29,  83 => 24,  79 => 23,  76 => 22,  74 => 21,  71 => 20,  67 => 19,  61 => 15,  58 => 14,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ this.page.title }}</title>

    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/css/swiper.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/css/swiper.min.css\">
    <link href=\"{{ 'assets/css/main.css'|theme }}\" rel=\"stylesheet\">

    <script src=\"https://kit.fontawesome.com/586f23898a.js\" crossorigin=\"anonymous\"></script>
    {% styles %}
</head>

<body>

    {% partial 'header' %}

    {% page %}

    {% partial 'footer' %}

    <!-- Scripts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/swiper/js/swiper.js\"></script>
    <script src=\"https://unpkg.com/swiper/js/swiper.min.js\"></script>
    <script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

</body>

</html>", "/var/www/html/maxton/themes/maxton/layouts/default.htm", "");
    }
}
