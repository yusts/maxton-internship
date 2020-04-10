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

/* /var/www/html/maxton/themes/maxton/partials/header.htm */
class __TwigTemplate_eabb70783eab2d3ec1580e560be8864ef45d926ebdb8b430c2153f8e113e5c40 extends \Twig\Template
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
        echo "<!-- Header -->
 <header class=\"header\">
     <div class=\"header__inner\">

         <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"header__logo\">
             <img class=\"header__img\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/header/logo.png");
        echo "\" alt=\"\">
         </a>

         <div class=\"top\">
             <div class=\"top__search\">
                 <i class=\"fas fa-search top__icon top__icon-search\"></i>
                 <input class=\"top__input\" type=\"text\" placeholder=\"Wpisz czego szukasz\">
             </div>
             <div class=\"top__icons\">
                 <a href=\"#\" class=\"top__icon\"><i class=\"fab fa-facebook-f\"></i></a>
                 <a href=\"#\" class=\"top__icon\"><i class=\"fab fa-instagram\"></i></a>
                 <a href=\"#\" class=\"top__icon\"><i class=\"far fa-envelope\"></i></a>
                 <a href=\"#\" class=\"top__icon\"><i class=\"far fa-heart\"></i></a>
             </div>
         </div>

         <nav class=\"nav\">
             <div class=\"nav__inner\">
                 <div class=\"nav__items\">
                     <a href=\"brands\">
                         <div class=\"nav__link\">MARKI</div>
                     </a>
                     <a href=\"projects\">
                         <div class=\"nav__link\">PROJEKTY</div>
                     </a>
                     <a href=\"#\">
                         <div class=\"nav__link\">SKLEP</div>
                     </a>
                     <a href=\"#\">
                         <div class=\"nav__link\">O FIRMIE</div>
                     </a>
                     <a href=\"#\">
                         <div class=\"nav__link\">KONTAKT</div>
                     </a>
                 </div>
             </div>
         </nav>

         <div id=\"toggle\">
             <div class=\"one\"></div>
             <div class=\"two\"></div>
             <div class=\"three\"></div>
         </div>

     </div>

     <div id=\"menu\" class=\"menu\">
         <div class=\"menu__inner\">
             <ul>
                 <li><a href=\"brands\">MARKI</a></li>
                 <li><a href=\"projects\">PROJEKTY</a></li>
                 <li><a href=\"#\">SKLEP</a></li>
                 <li><a href=\"#\">O FIRMIE</a></li>
                 <li> <a href=\"#\">KONTAKT</a></li>
             </ul>
         </div>
     </div>

 </header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/maxton/themes/maxton/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
 <header class=\"header\">
     <div class=\"header__inner\">

         <a href=\"{{ 'home'|page }}\" class=\"header__logo\">
             <img class=\"header__img\" src=\"{{ 'assets/images/header/logo.png'|theme }}\" alt=\"\">
         </a>

         <div class=\"top\">
             <div class=\"top__search\">
                 <i class=\"fas fa-search top__icon top__icon-search\"></i>
                 <input class=\"top__input\" type=\"text\" placeholder=\"Wpisz czego szukasz\">
             </div>
             <div class=\"top__icons\">
                 <a href=\"#\" class=\"top__icon\"><i class=\"fab fa-facebook-f\"></i></a>
                 <a href=\"#\" class=\"top__icon\"><i class=\"fab fa-instagram\"></i></a>
                 <a href=\"#\" class=\"top__icon\"><i class=\"far fa-envelope\"></i></a>
                 <a href=\"#\" class=\"top__icon\"><i class=\"far fa-heart\"></i></a>
             </div>
         </div>

         <nav class=\"nav\">
             <div class=\"nav__inner\">
                 <div class=\"nav__items\">
                     <a href=\"brands\">
                         <div class=\"nav__link\">MARKI</div>
                     </a>
                     <a href=\"projects\">
                         <div class=\"nav__link\">PROJEKTY</div>
                     </a>
                     <a href=\"#\">
                         <div class=\"nav__link\">SKLEP</div>
                     </a>
                     <a href=\"#\">
                         <div class=\"nav__link\">O FIRMIE</div>
                     </a>
                     <a href=\"#\">
                         <div class=\"nav__link\">KONTAKT</div>
                     </a>
                 </div>
             </div>
         </nav>

         <div id=\"toggle\">
             <div class=\"one\"></div>
             <div class=\"two\"></div>
             <div class=\"three\"></div>
         </div>

     </div>

     <div id=\"menu\" class=\"menu\">
         <div class=\"menu__inner\">
             <ul>
                 <li><a href=\"brands\">MARKI</a></li>
                 <li><a href=\"projects\">PROJEKTY</a></li>
                 <li><a href=\"#\">SKLEP</a></li>
                 <li><a href=\"#\">O FIRMIE</a></li>
                 <li> <a href=\"#\">KONTAKT</a></li>
             </ul>
         </div>
     </div>

 </header>", "/var/www/html/maxton/themes/maxton/partials/header.htm", "");
    }
}
