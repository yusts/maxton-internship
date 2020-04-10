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

/* /var/www/html/maxton/themes/maxton/partials/pagination.htm */
class __TwigTemplate_cfcec2117bd87a82eecfe3a84aecc5a3db4c8de325c8b660129b53984434723c extends \Twig\Template
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
        echo "<!-- Pagination -->
<div class=\"pagination\">
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                1
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item active\">
            <div class=\"pagination__center\">
                2
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                3
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                4
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                5
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                6
            </div>
        </div>
    </a>
</div> <!-- /.pagintaion -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/pagination.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Pagination -->
<div class=\"pagination\">
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                1
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item active\">
            <div class=\"pagination__center\">
                2
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                3
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                4
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                5
            </div>
        </div>
    </a>
    <a href=\"#\">
        <div class=\"pagination__item\">
            <div class=\"pagination__center\">
                6
            </div>
        </div>
    </a>
</div> <!-- /.pagintaion -->", "/var/www/html/maxton/themes/maxton/partials/pagination.htm", "");
    }
}
