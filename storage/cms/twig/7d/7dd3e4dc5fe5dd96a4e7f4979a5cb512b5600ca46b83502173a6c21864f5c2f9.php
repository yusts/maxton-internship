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

/* /var/www/html/maxton/themes/maxton/partials/footer.htm */
class __TwigTemplate_7ec5e13039a7c844886caa3bfebfa334410b792dfde989a36a2eeea0bb3aaf64 extends \Twig\Template
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
        echo "<!-- Footer -->
<footer class=\"footer\">
    <div class=\"footer__lines\">
        <div class=\"footer__line\">
            line
        </div>
        <div class=\"footer__line footer__line-middle\">
            line
        </div>
        <div class=\"footer__line\">
            line
        </div>
    </div>
    <div class=\"footer__copyright\">
        <div class=\"container\">
            <p class=\"footer__text\">© Copyright 2013 by Maxton Design Realizacja: <a class=\"footer__link\" href=\"http://argonium.pl\">Argonium.pl</a></p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"footer\">
    <div class=\"footer__lines\">
        <div class=\"footer__line\">
            line
        </div>
        <div class=\"footer__line footer__line-middle\">
            line
        </div>
        <div class=\"footer__line\">
            line
        </div>
    </div>
    <div class=\"footer__copyright\">
        <div class=\"container\">
            <p class=\"footer__text\">© Copyright 2013 by Maxton Design Realizacja: <a class=\"footer__link\" href=\"http://argonium.pl\">Argonium.pl</a></p>
        </div>
    </div>
</footer>", "/var/www/html/maxton/themes/maxton/partials/footer.htm", "");
    }
}
