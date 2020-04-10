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

/* /var/www/html/maxton/themes/maxton/partials/brand.htm */
class __TwigTemplate_ce5e64119cbe475f45390419b40a9c55694454fc884819019655489f2f858fc6 extends \Twig\Template
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
        echo "<!-- Brand -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"brand\">
            <div class=\"brand__header\">
                top marki
            </div>
            <div class=\"brand__content\">
                <div class=\"brand__item\">
                    <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand/1.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand/2.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand/3.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand/4.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand/5.png");
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/brand.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  66 => 19,  60 => 16,  54 => 13,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Brand -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"brand\">
            <div class=\"brand__header\">
                top marki
            </div>
            <div class=\"brand__content\">
                <div class=\"brand__item\">
                    <img src=\"{{ 'assets/images/brand/1.png'|theme }}\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"{{ 'assets/images/brand/2.png'|theme }}\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"{{ 'assets/images/brand/3.png'|theme }}\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"{{ 'assets/images/brand/4.png'|theme }}\" alt=\"\">
                </div>
                <div class=\"brand__item\">
                    <img src=\"{{ 'assets/images/brand/5.png'|theme }}\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/maxton/themes/maxton/partials/brand.htm", "");
    }
}
