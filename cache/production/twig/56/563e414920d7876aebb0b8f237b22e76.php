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

/* login_body.html */
class __TwigTemplate_0b79b472b2e8dfe81830d2ddea93a37b extends \Twig\Template
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
        $location = "minimal_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("minimal_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"container-fluid\">
\t<div class=\"row min-vh-100\">
\t\t<div class=\"col-12 col-md d-flex flex-column justify-content-between bg-white p-5\">
\t\t\t<a href=\"";
        // line 5
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["L_SITE_HOME"] ?? null);
        } else {
            echo ($context["L_INDEX"] ?? null);
        }
        echo "\"><i class=\"icon fa-arrow-left fa-fw fs-1 fw-light\" aria-hidden=\"true\"></i></a>
\t\t\t<form action=\"";
        // line 6
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"login\" data-focus=\"";
        if (($context["S_ADMIN_AUTH"] ?? null)) {
            echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        } else {
            echo ($context["USERNAME_CREDENTIAL"] ?? null);
        }
        echo "\">
\t\t\t\t<h2 class=\"login-title my-4 text-center fw-bold\">";
        // line 7
        if (($context["LOGIN_EXPLAIN"] ?? null)) {
            echo ($context["LOGIN_EXPLAIN"] ?? null);
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        }
        echo "</h2>

\t\t\t\t<fieldset ";
        // line 9
        if ( !($context["S_CONFIRM_CODE"] ?? null)) {
            echo "class=\"fields1\"";
        } else {
            echo "class=\"fields2\"";
        }
        echo ">
\t\t\t\t";
        // line 10
        if (($context["LOGIN_ERROR"] ?? null)) {
            echo "<div class=\"error\">";
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</div>";
        }
        // line 11
        echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"";
        // line 12
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" class=\"form-label\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"";
        // line 13
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" id=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"";
        // line 16
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" class=\"form-label\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<input type=\"password\" tabindex=\"2\" id=\"";
        // line 17
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" name=\"";
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" class=\"form-control\" autocomplete=\"off\" />
\t\t\t\t\t";
        // line 18
        if ((($context["S_DISPLAY_FULL_LOGIN"] ?? null) && (($context["U_SEND_PASSWORD"] ?? null) || ($context["U_RESEND_ACTIVATION"] ?? null)))) {
            // line 19
            echo "\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 21
        if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
            // line 22
            echo "\t\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 23
            echo "\t\t\t\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "login_body.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t";
        if (($context["S_DISPLAY_FULL_LOGIN"] ?? null)) {
            // line 26
            echo "\t\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 27
                echo "\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"mb-1 form-check\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"autologin\" name=\"autologin\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"autologin\">";
                // line 30
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t<div class=\"mb-3 form-check\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"viewonline\" name=\"viewonline\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"viewonline\">";
            // line 35
            echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ME");
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t\t\t";
        // line 39
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" name=\"login\" value=\"";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 43
        if (($context["U_SEND_PASSWORD"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_SEND_PASSWORD"] ?? null);
            echo "\" class=\"align-self-end mt-1\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
            echo "</a>";
        }
        // line 44
        echo "\t\t\t\t\t\t\t";
        if (($context["U_RESEND_ACTIVATION"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_RESEND_ACTIVATION"] ?? null);
            echo "\" class=\"align-self-end mt-1\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESEND_ACTIVATION");
            echo "</a>";
        }
        // line 45
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 46
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t";
        // line 47
        echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
        echo "

\t\t\t\t</div>

\t\t\t\t</fieldset>
\t\t\t</form>

\t\t\t";
        // line 54
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["PROVIDER_TEMPLATE_FILE"] ?? null))) {
            // line 55
            echo "\t\t\t";
            $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "login_body.html", 55)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 56
            echo "\t\t\t";
        }
        // line 57
        echo "\t\t\t<div class=\"copyright\">
\t\t\t\t";
        // line 58
        // line 59
        echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">";
        // line 60
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        // line 62
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 63
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">";
            // line 64
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t";
        // line 68
        echo "\t\t\t\t<p class=\"footer-row\" role=\"menu\">
\t\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 69
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 70
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t|
\t\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 73
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 74
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t\t";
        // line 77
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 78
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-info\">";
            // line 79
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 83
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 84
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 87
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 90
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["S_REGISTER_ENABLED"] ?? null))) {
            // line 91
            echo "\t\t<div class=\"col-12 col-md d-flex flex-column justify-content-center bg-main p-5\">
\t\t\t<h2 class=\"login-title my-4 text-center fw-bold text-white opacity-75\">";
            // line 92
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</h2>
\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t<p class=\"text-white fw-normal opacity-75\">";
            // line 94
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t<div class=\"d-flex my-3 w-100\">
\t\t\t\t\t<a href=\"";
            // line 96
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\" class=\"badge bg-white text-black me-1\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
            echo "</a>
\t\t\t\t\t<a href=\"";
            // line 97
            echo ($context["U_PRIVACY"] ?? null);
            echo "\" class=\"badge bg-white text-black ms-1\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
            echo "</a></strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t<a href=\"";
            // line 100
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"btn btn-secondary\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 105
        echo "\t</div>
</div>
";
        // line 107
        $location = "minimal_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("minimal_footer.html", "login_body.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 107,  377 => 105,  367 => 100,  359 => 97,  353 => 96,  348 => 94,  343 => 92,  340 => 91,  338 => 90,  333 => 87,  325 => 84,  322 => 83,  319 => 82,  313 => 79,  310 => 78,  308 => 77,  302 => 74,  296 => 73,  290 => 70,  284 => 69,  281 => 68,  279 => 67,  273 => 64,  270 => 63,  268 => 62,  263 => 60,  260 => 59,  259 => 58,  256 => 57,  253 => 56,  240 => 55,  238 => 54,  228 => 47,  224 => 46,  221 => 45,  212 => 44,  204 => 43,  198 => 40,  194 => 39,  191 => 38,  185 => 35,  181 => 33,  175 => 30,  170 => 27,  167 => 26,  164 => 25,  161 => 24,  148 => 23,  144 => 22,  142 => 21,  139 => 20,  136 => 19,  134 => 18,  128 => 17,  121 => 16,  111 => 13,  104 => 12,  101 => 11,  95 => 10,  87 => 9,  78 => 7,  68 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login_body.html", "");
    }
}
