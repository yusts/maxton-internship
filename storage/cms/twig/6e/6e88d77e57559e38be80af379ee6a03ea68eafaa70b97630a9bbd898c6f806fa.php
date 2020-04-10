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

/* /var/www/html/maxton/themes/maxton/partials/movies.htm */
class __TwigTemplate_566ed1d15cd48b541e15c859b6c2aaa5bc4f7dcc3186065b35c9fbeec07ca824 extends \Twig\Template
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
        echo "<!-- Featured movies -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"movies\">
            <div class=\"movies__title\">
                Polecane filmy
            </div>
            <div class=\"movies__items\">
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class=\"movies__text\">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                voluptatem quia voluptas sit.
                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </div>
        </div> <!-- /.movies -->
    </div> <!-- container -->
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/movies.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Featured movies -->
<section class=\"section\">
    <div class=\"container\">
        <div class=\"movies\">
            <div class=\"movies__title\">
                Polecane filmy
            </div>
            <div class=\"movies__items\">
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
                <div class=\"movies__item\">
                    <iframe class=\"movies__frame\" src=\"https://www.youtube.com/embed/BiSyVY0mk4g\" frameborder=\"0\"
                        allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class=\"movies__text\">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                voluptatem quia voluptas sit.
                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </div>
        </div> <!-- /.movies -->
    </div> <!-- container -->
</section>", "/var/www/html/maxton/themes/maxton/partials/movies.htm", "");
    }
}
