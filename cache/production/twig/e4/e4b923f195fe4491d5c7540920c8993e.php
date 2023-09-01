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

/* breadcrumbs.html */
class __TwigTemplate_6fdbc1a8eec09c67020dbd89c2f315ac extends \Twig\Template
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
        echo "<div class=\"row d-flex mb-3\">
    <div class=\"col\">
        <nav aria-label=\"breadcrumb\" class=\"breadcrumb-bar d-flex justify-content-between\">
            ";
        // line 4
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 5
        echo "            ";
        $context["navlink_position"] = 1;
        // line 6
        echo "
            ";
        // line 7
        // line 8
        echo "            <ol class=\"breadcrumb\" itemscope itemtype=\"https://schema.org/BreadcrumbList\" >
                ";
        // line 9
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 10
            echo "                <li class=\"breadcrumb-item active\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></li>
                ";
        }
        // line 12
        echo "                ";
        // line 13
        echo "                <li class=\"breadcrumb-item\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
        }
        echo ($context["L_INDEX"] ?? null);
        echo "</a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></li>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 15
            echo "                ";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 15))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 15)));
            // line 16
            echo "                ";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 16)));
            // line 17
            echo "                ";
            // line 18
            echo "                <li class=\"breadcrumb-item\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 18)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 18);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></li>
                ";
            // line 19
            // line 20
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
                ";
        // line 22
        // line 23
        echo "            </ol>
            ";
        // line 24
        // line 25
        echo "            ";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 26
            echo "            <a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\" class=\"d-flex flex-column justify-content-center d-inline d-md-none\">
                <i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
            </a>
            ";
        }
        // line 30
        echo "        </nav>
    </div>
    ";
        // line 32
        // line 33
        echo "    ";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 34
            echo "    <div class=\"col-3 col-lg-2 d-none d-md-flex\">
        <form action=\"";
            // line 35
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\" class=\"d-flex search-bar w-100\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i></span>
                <input class=\"form-control p-0\" name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
            echo "\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_MINI");
            echo "\">
                ";
            // line 39
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
            </div>
        </form>
    </div>
    ";
        }
        // line 44
        echo "    ";
        // line 45
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "breadcrumbs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  177 => 44,  169 => 39,  161 => 38,  155 => 35,  152 => 34,  149 => 33,  148 => 32,  144 => 30,  138 => 27,  131 => 26,  128 => 25,  127 => 24,  124 => 23,  123 => 22,  120 => 21,  114 => 20,  113 => 19,  97 => 18,  95 => 17,  92 => 16,  89 => 15,  85 => 14,  71 => 13,  69 => 12,  56 => 10,  54 => 9,  51 => 8,  50 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "breadcrumbs.html", "");
    }
}
