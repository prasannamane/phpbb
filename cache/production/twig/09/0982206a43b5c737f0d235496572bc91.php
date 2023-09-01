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

/* index_body.html */
class __TwigTemplate_5feeb07e430822c552f27be11ca162fd extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 5
            echo "\t<div class=\"action-bar compact d-flex justify-content-end\">
\t\t<a href=\"";
            // line 6
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"btn\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["NEWEST_USER"] ?? null)) {
            // line 11
            echo "<h3>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
<div class=\"d-flex flex-wrap justify-content-between statictics\">
\t";
            // line 13
            // line 14
            echo "\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</span>
\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">";
            // line 15
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</span>
\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">";
            // line 16
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</span>
\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">";
            // line 17
            echo ($context["NEWEST_USER"] ?? null);
            echo "</span>
\t";
            // line 18
            // line 19
            echo "</div>
<div class=\"d-flex flex-wrap justify-content-between bfs-sensex\">
\t<img id=\"logoimg\" src=\"styles/outset/theme/images/sensex.png\" alt=\"Bajaj Financial Securities Ltd. Academy\" class=\"\">
</div>
<div class=\"d-flex flex-wrap justify-content-between bfs-filter\">
\t";
            // line 24
            // line 25
            echo "\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">All Categories ></span>
\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">All Tags ></span>
\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">Latest</span>
\t<span class=\"badge bg-lesser text-lesser-darker fw-normal p-3 m-1 flex-grow-1\">Top</span> 
\t";
            // line 29
            // line 30
            echo "</div>
";
        }
        // line 32
        echo "
";
        // line 33
        // line 34
        echo "
";
        // line 35
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 35)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 36
        echo "
";
        // line 37
        // line 38
        echo "

";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  138 => 38,  137 => 37,  134 => 36,  122 => 35,  119 => 34,  118 => 33,  115 => 32,  111 => 30,  110 => 29,  104 => 25,  103 => 24,  96 => 19,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  78 => 14,  77 => 13,  71 => 11,  69 => 10,  66 => 9,  58 => 6,  55 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
