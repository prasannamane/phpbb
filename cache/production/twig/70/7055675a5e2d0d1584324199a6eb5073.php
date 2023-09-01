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

/* overall_header.html */
class __TwigTemplate_ed9c40a71688954a8fff2293141f7951 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: Outset
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      forumDB ( http://forumdb.net/ )
-->

";
        // line 32
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 33
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://cdn.jsdelivr.net/npm/webfontloader@1.6.28/webfontloader.min.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 48
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 49
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 51
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 52
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 54
        echo "
";
        // line 55
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 56
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 58
        echo "
";
        // line 59
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 60
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 62
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 64
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

\t<script>
\t\tfunction showLogoText() {
\t\t\tvar logoImage = document.getElementById(\"logoimg\");
\t\t\tvar logoAlt = document.getElementById(\"logoalt\");
\t\t\tlogoImage.style.display = \"none\";
\t\t\tlogoAlt.style.display = \"block\";
\t\t}
\t</script>

";
        // line 76
        // line 77
        echo "
";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 78);
        echo "

";
        // line 80
        // line 81
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 83
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 85
        // line 86
        echo "<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

<div id=\"page-header\" class=\"page-header d-flex flex-row-reverse flex-md-row\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-lg-3 d-none d-md-flex align-center\">
\t\t\t\t<nav class=\"navbar\">
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link quick-links\" id=\"quickLinks\" role=\"button\" name=\"";
        // line 95
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25.53 8.95\"><defs><style>.cls-1{fill:none;stroke:#FFFFFF;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px;}</style></defs><g id=\"Layer_2\" data-name=\"Layer 2\"><g id=\"Layer_1-2\" data-name=\"Layer 1\"><line class=\"cls-1\" x1=\"1.5\" y1=\"1.5\" x2=\"24.03\" y2=\"1.5\"/><line class=\"cls-1\" x1=\"1.5\" y1=\"7.44\" x2=\"16.33\" y2=\"7.45\"/></g></g></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"quickLinks\">
\t\t\t\t\t\t\t\t";
        // line 99
        // line 100
        echo "\t\t\t\t\t\t\t\t";
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 101
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 102
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 103
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 104
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 109
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 110
                echo ($context["U_TEAM"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 111
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t\t\t\t\t";
        // line 117
        echo "\t\t\t\t\t\t\t\t<li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 118
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 119
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 122
        // line 123
        echo "\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t";
        // line 124
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 125
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 126
            echo ($context["U_SEARCH"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i>";
            // line 127
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 130
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 131
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 132
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i>";
                // line 133
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 138
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 139
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i>";
                // line 140
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 145
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 146
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i>";
                // line 147
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 151
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 152
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 153
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 154
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 159
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 160
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 164
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 165
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 169
        echo "\t\t\t\t\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 170
            echo "\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 172
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 173
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 178
            echo "\t\t\t\t\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 179
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 180
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t\t\t\t\t";
        // line 185
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div class=\"col-6 col-md-4 col-lg-6 d-flex align-items-center justify-content-start justify-content-md-center\">
\t\t\t\t<div class=\"d-flex d-md-none align-center\">
\t\t\t\t\t<nav class=\"navbar\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link quick-links\" id=\"quickLinks\" role=\"button\" title=\"";
        // line 195
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25.53 8.95\"><defs><style>.cls-1</style></defs><g id=\"Layer_2\" data-name=\"Layer 2\"><g id=\"Layer_1-2\" data-name=\"Layer 1\"><line class=\"cls-1\" x1=\"1.5\" y1=\"1.5\" x2=\"24.03\" y2=\"1.5\"/><line class=\"cls-1\" x1=\"1.5\" y1=\"7.44\" x2=\"16.33\" y2=\"7.45\"/></g></g></svg>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 197
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"quickLinks\">
\t\t\t\t\t\t\t\t\t";
        // line 200
        // line 201
        echo "\t\t\t\t\t\t\t\t\t";
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 202
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 204
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 205
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 211
                echo ($context["U_TEAM"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 212
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t\t\t\t\t\t";
        // line 218
        echo "\t\t\t\t\t\t\t\t\t<li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 219
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 220
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 223
        // line 224
        echo "\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t";
        // line 225
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 226
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 227
            echo ($context["U_SEARCH"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i>";
            // line 228
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            // line 231
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 232
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 233
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i>";
                // line 234
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 238
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 239
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 240
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i>";
                // line 241
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 246
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 247
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i>";
                // line 248
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 252
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 254
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 255
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 259
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 260
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 261
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 265
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 266
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 270
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 271
            echo "\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 273
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 274
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 278
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 279
            echo "\t\t\t\t\t\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 280
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 281
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 285
        echo "\t\t\t\t\t\t\t\t\t";
        // line 286
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t";
        // line 291
        // line 292
        echo "\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
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
        echo "\">
\t\t\t\t\t<img id=\"logoimg\" src=\"styles/outset/theme/images/logo.png\" alt=\"";
        // line 293
        echo ($context["SITENAME"] ?? null);
        echo "\" class=\"w-100 w-md-auto ms-1 ms-md-0\" style=\"display: block\" onerror=\"showLogoText()\">
\t\t\t\t\t<div id=\"logoalt\" style=\"display: none;\" class=\"logo-text\">";
        // line 294
        echo ($context["SITENAME"] ?? null);
        echo "</div>
\t\t\t\t</a>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 296
        echo $this->extensions['phpbb\template\twig\extension']->lang("SKIP");
        echo "</a></p>

\t\t\t\t";
        // line 298
        // line 299
        echo "\t\t\t</div>
\t\t\t<div class=\"col-6 col-md-4 col-lg-3 d-md-flex align-center justify-content-end\">
\t\t\t\t<nav class=\"navbar d-flex justify-content-end\">
\t\t\t\t\t<ul class=\"navbar d-flex flex-nowrap\">
\t\t\t\t\t\t";
        // line 303
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 304
            echo "\t\t\t\t\t\t";
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 305
                echo "\t\t\t\t\t\t<li class=\"nav-item\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 306
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\" class=\"nav-link header-nav me-1 position-relative\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-inbox fa-fw icon-xl d-flex justify-content-center align-items-center p-2\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
                // line 308
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATEMSGS");
                echo "</span>
\t\t\t\t\t\t\t\t";
                // line 309
                if (($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    // line 310
                    echo "\t\t\t\t\t\t\t\t<span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger\">
\t\t\t\t\t\t\t\t\t";
                    // line 311
                    echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                    echo "
\t\t\t\t\t\t\t  \t</span>
\t\t\t\t\t\t\t\t";
                }
                // line 314
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 317
            echo "\t\t\t\t\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 318
                echo "\t\t\t\t\t\t<li class=\"nav-item mx-1 mx-md-0\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link header-nav me-1 position-relative\" role=\"button\" id=\"notifications\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-bell fa-fw icon-xl d-flex justify-content-center align-items-center p-2\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 321
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
                // line 322
                if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    // line 323
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger\">
\t\t\t\t\t\t\t\t\t";
                    // line 324
                    echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                    echo "
\t\t\t\t\t\t\t  \t\t</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 327
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 328
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 328)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 329
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 332
            echo "\t\t\t\t\t\t";
            // line 333
            echo "\t\t\t\t\t\t<li id=\"username_logged_in\" class=\"nav-item dropdown\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t";
            // line 334
            // line 335
            echo "\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 p-md-inherit\" id=\"userProfile\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            } else {
                echo "<img src=\"styles/outset/theme/images/noavatar.svg\">";
            }
            echo "</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userProfile\">
\t\t\t\t\t\t\t\t";
            // line 337
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 338
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 339
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 340
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 344
            echo "\t\t\t\t\t\t\t\t";
            // line 345
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 346
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"dropdown-item\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 347
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 350
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 351
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 352
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" class=\"dropdown-item\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 353
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 357
            echo "\t\t\t\t\t\t\t\t";
            // line 358
            echo "\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 360
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" class=\"dropdown-item\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 361
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 366
            // line 367
            echo "\t\t\t\t\t\t";
            // line 368
            echo "\t\t\t\t\t\t";
        } elseif ( !($context["S_IS_BOT"] ?? null)) {
            // line 369
            echo "\t\t\t\t\t\t<li class=\"nav-item\"  data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
            // line 370
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\" class=\"nav-link\">
\t\t\t\t\t\t\t\t";
            // line 371
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 374
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 375
                echo "\t\t\t\t\t\t<li class=\"nav-item\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 376
                echo ($context["U_REGISTER"] ?? null);
                echo "\" class=\"btn btn-primary fs-6\" role=\"menuitem\">
\t\t\t\t\t\t\t\t";
                // line 377
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 381
            echo "\t\t\t\t\t\t";
            // line 382
            echo "\t\t\t\t\t\t";
        }
        // line 383
        echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 388
        // line 389
        echo "</div>
<div id=\"wrap\" class=\"container\">
\t";
        // line 391
        $location = "breadcrumbs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("breadcrumbs.html", "overall_header.html", 391)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 392
        echo "
\t";
        // line 393
        // line 394
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
\t\t";
        // line 397
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 398
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 400
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 404
        echo "
\t\t";
        // line 405
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1071 => 405,  1068 => 404,  1058 => 400,  1054 => 398,  1052 => 397,  1047 => 394,  1046 => 393,  1043 => 392,  1031 => 391,  1027 => 389,  1026 => 388,  1019 => 383,  1016 => 382,  1014 => 381,  1007 => 377,  1003 => 376,  1000 => 375,  998 => 374,  992 => 371,  986 => 370,  983 => 369,  980 => 368,  978 => 367,  977 => 366,  969 => 361,  963 => 360,  959 => 358,  957 => 357,  950 => 353,  944 => 352,  941 => 351,  939 => 350,  933 => 347,  927 => 346,  924 => 345,  922 => 344,  915 => 340,  911 => 339,  908 => 338,  906 => 337,  895 => 335,  894 => 334,  891 => 333,  889 => 332,  884 => 329,  872 => 328,  869 => 327,  863 => 324,  860 => 323,  858 => 322,  854 => 321,  849 => 318,  846 => 317,  841 => 314,  835 => 311,  832 => 310,  830 => 309,  826 => 308,  821 => 306,  818 => 305,  815 => 304,  813 => 303,  807 => 299,  806 => 298,  801 => 296,  796 => 294,  792 => 293,  777 => 292,  776 => 291,  769 => 286,  767 => 285,  760 => 281,  754 => 280,  751 => 279,  748 => 278,  741 => 274,  735 => 273,  731 => 271,  728 => 270,  721 => 266,  717 => 265,  710 => 261,  706 => 260,  703 => 259,  696 => 255,  692 => 254,  689 => 253,  686 => 252,  679 => 248,  675 => 247,  672 => 246,  669 => 245,  662 => 241,  658 => 240,  655 => 239,  652 => 238,  645 => 234,  641 => 233,  638 => 232,  636 => 231,  630 => 228,  626 => 227,  623 => 226,  621 => 225,  618 => 224,  617 => 223,  611 => 220,  605 => 219,  596 => 218,  594 => 217,  591 => 216,  584 => 212,  580 => 211,  577 => 210,  574 => 209,  567 => 205,  563 => 204,  560 => 203,  557 => 202,  554 => 201,  553 => 200,  547 => 197,  542 => 195,  530 => 185,  528 => 184,  521 => 180,  515 => 179,  512 => 178,  509 => 177,  502 => 173,  496 => 172,  492 => 170,  489 => 169,  482 => 165,  478 => 164,  471 => 160,  467 => 159,  464 => 158,  457 => 154,  453 => 153,  450 => 152,  447 => 151,  440 => 147,  436 => 146,  433 => 145,  430 => 144,  423 => 140,  419 => 139,  416 => 138,  413 => 137,  406 => 133,  402 => 132,  399 => 131,  397 => 130,  391 => 127,  387 => 126,  384 => 125,  382 => 124,  379 => 123,  378 => 122,  372 => 119,  366 => 118,  357 => 117,  355 => 116,  352 => 115,  345 => 111,  341 => 110,  338 => 109,  335 => 108,  328 => 104,  324 => 103,  321 => 102,  318 => 101,  315 => 100,  314 => 99,  307 => 95,  296 => 86,  295 => 85,  286 => 83,  282 => 81,  281 => 80,  276 => 78,  273 => 77,  272 => 76,  255 => 64,  251 => 62,  243 => 60,  241 => 59,  238 => 58,  230 => 56,  228 => 55,  225 => 54,  217 => 52,  215 => 51,  210 => 49,  205 => 48,  188 => 33,  186 => 32,  176 => 24,  170 => 22,  168 => 21,  165 => 20,  162 => 18,  149 => 17,  136 => 16,  125 => 15,  114 => 14,  103 => 13,  92 => 12,  81 => 11,  79 => 10,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
