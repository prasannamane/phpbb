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

/* minimal_footer.html */
class __TwigTemplate_52d689bc566b00fb1e215536fc8ff199 extends \Twig\Template
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
        echo "<!--    This template is used for pages that divert from the regular forum template,
        such as the the login-page (login_body.html). Remember to manually add the phpBB copyright
        to any page using this template. -->

";
        // line 5
        // line 6
        // line 7
        echo "<div>
    <a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
    ";
        // line 9
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 10
        echo "</div>

<script src=\"";
        // line 12
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 13
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 14
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 15
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 16
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 17
        $asset_file = "bootstrap.min.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 18
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 19
            echo "<script>
    (function(\$){
        var \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
            \$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
        if (\$span.css('fontFamily') !== 'FontAwesome' ) {
            \$fa_cdn.after('<link href=\"";
            // line 24
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
            \$fa_cdn.remove();
        }
        \$span.remove();
    })(jQuery);
</script>
";
        }
        // line 31
        echo "
";
        // line 32
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 33
            echo "<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
<script>
    if (typeof window.cookieconsent === \"object\") {
        window.addEventListener(\"load\", function(){
            window.cookieconsent.initialise({
                \"palette\": {
                    \"popup\": {
                        \"background\": \"#0F538A\"
                    },
                    \"button\": {
                        \"background\": \"#E5E5E5\"
                    }
                },
                \"theme\": \"classic\",
                \"content\": {
                    \"message\": \"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
                    \"dismiss\": \"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
                    \"link\": \"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
                    \"href\": \"";
            // line 51
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
                }
            });
        });
    }
</script>
";
        }
        // line 58
        echo "
";
        // line 59
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 60
        echo "
";
        // line 61
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "minimal_footer.html", 61)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 62);
        echo "

";
        // line 64
        // line 65
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "minimal_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 65,  215 => 64,  210 => 62,  196 => 61,  193 => 60,  188 => 59,  185 => 58,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  142 => 33,  140 => 32,  137 => 31,  127 => 24,  120 => 19,  118 => 18,  104 => 17,  90 => 16,  76 => 15,  69 => 14,  61 => 13,  57 => 12,  53 => 10,  49 => 9,  45 => 7,  44 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minimal_footer.html", "");
    }
}
