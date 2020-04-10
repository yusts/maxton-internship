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

/* /var/www/html/maxton/themes/maxton/partials/breadcrump.htm */
class __TwigTemplate_0d178b3b6b61cb0554ba70c51a1fe2ea5ed06d48eb8557072a05da6bdb5cb8ae extends \Twig\Template
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
        echo "<!-- Breadcrumps -->
<div class=\"breadcrumps\">
    <div class=\"container\">
        <ul class=\"breadcrumps__list\">
            <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Strona główna</a></li>
            <li><a href=\"#\">Projekty</a></li>
            <li>Zestaw spoilerów do BMW M1</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/breadcrump.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Breadcrumps -->
<div class=\"breadcrumps\">
    <div class=\"container\">
        <ul class=\"breadcrumps__list\">
            <li><a href=\"{{ 'home'|page }}\">Strona główna</a></li>
            <li><a href=\"#\">Projekty</a></li>
            <li>Zestaw spoilerów do BMW M1</li>
        </ul>
    </div>
</div>", "/var/www/html/maxton/themes/maxton/partials/breadcrump.htm", "");
    }
}
