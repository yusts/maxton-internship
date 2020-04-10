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

/* /var/www/html/maxton/themes/maxton/partials/carousel.htm */
class __TwigTemplate_36bf81c539234b14351d68c6665e14a347335e330f02fbf671d0e5a26e020a55 extends \Twig\Template
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
<div class=\"swiper\">
    <div class=\"container\">
        <div class=\"swiper-container\">

            <div class=\"swiper-wrapper\">

                <div class=\"swiper-slide\">
                    <img class=\"swiper__img\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro/1.png");
        echo "\" alt=\"\">
                    <div class=\"swiper__title\">
                        ZESTAW SPOILERÓW DO BMW M2
                    </div>
                </div>

                <div class=\"swiper-slide\">
                    <img class=\"swiper__img\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/projects/3.png");
        echo "\" alt=\"\">
                    <div class=\"swiper__title\">
                        ZESTAW SPOILERÓW DO BMW M2
                    </div>

                </div>

                <div class=\"swiper-slide\">
                    <img class=\"swiper__img\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/projects/3.png");
        echo "\" alt=\"\">
                    <div class=\"swiper__title\">
                        ZESTAW SPOILERÓW DO BMW M2
                    </div>

                </div>

            </div> <!-- /.swiper-wrapper -->
            <div class=\"swiper-pagination\"></div>
        </div> <!-- /.swiper-container -->
    </div> <!-- /.container -->
</div> <!-- /.swiper -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  57 => 16,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel -->
<div class=\"swiper\">
    <div class=\"container\">
        <div class=\"swiper-container\">

            <div class=\"swiper-wrapper\">

                <div class=\"swiper-slide\">
                    <img class=\"swiper__img\" src=\"{{ 'assets/images/intro/1.png'|theme }}\" alt=\"\">
                    <div class=\"swiper__title\">
                        ZESTAW SPOILERÓW DO BMW M2
                    </div>
                </div>

                <div class=\"swiper-slide\">
                    <img class=\"swiper__img\" src=\"{{ 'assets/images/projects/3.png'|theme }}\" alt=\"\">
                    <div class=\"swiper__title\">
                        ZESTAW SPOILERÓW DO BMW M2
                    </div>

                </div>

                <div class=\"swiper-slide\">
                    <img class=\"swiper__img\" src=\"{{ 'assets/images/projects/3.png'|theme }}\" alt=\"\">
                    <div class=\"swiper__title\">
                        ZESTAW SPOILERÓW DO BMW M2
                    </div>

                </div>

            </div> <!-- /.swiper-wrapper -->
            <div class=\"swiper-pagination\"></div>
        </div> <!-- /.swiper-container -->
    </div> <!-- /.container -->
</div> <!-- /.swiper -->", "/var/www/html/maxton/themes/maxton/partials/carousel.htm", "");
    }
}
