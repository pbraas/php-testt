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

/* navbar_header.html */
class __TwigTemplate_26edacbc81a15fb83ef72ad579d7e286a9f7aef7fcea2bd6b7342a1260aa7ac9 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top navbar-fix\" id=\"header-nav\">
\t<!-- Mobile dropdown buttons -->
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-left-mobile\" id=\"main-menu-btn\" data-toggle=\"collapse\" data-target=\"#main-menu\">
\t\t\t\t<i class=\"fa fa-bars fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"user-menu-btn\" data-toggle=\"collapse\" data-target=\"#user-menu\">
\t\t\t\t";
        // line 9
        if (($context["CURRENT_USER_AVATAR"] ?? null)) {
            // line 10
            echo "\t\t\t\t\t<span class=\"nav-avatar-mobile\">";
            echo ($context["CURRENT_USER_AVATAR"] ?? null);
            echo "</span>
\t\t\t\t";
        } elseif (        // line 11
($context["S_REGISTERED_USER"] ?? null)) {
            // line 12
            echo "\t\t\t\t\t<span class=\"nav-avatar-mobile\"><img src=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AVATAR");
            echo "\"></span>
\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t\t<i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t</button>

      ";
        // line 18
        if (($context["S_DISPLAY_PM"] ?? null)) {
            // line 19
            echo "      <a href=\"";
            echo ($context["U_PRIVATEMSGS"] ?? null);
            echo "\">
        <button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"private-messages-btn\" data-toggle=\"collapse\" data-target=\"";
            // line 20
            echo ($context["U_PRIVATEMSGS"] ?? null);
            echo "\">
          <i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i> <span class=\"private-messages\">";
            // line 21
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
            echo "</span> <span class=\"label ";
            if (($context["PRIVATE_MESSAGE_INFO_UNREAD"] ?? null)) {
                echo "label-danger";
            } else {
                echo "label-primary";
            }
            echo "\">";
            echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
            echo "</span>
        </button>
      </a>
      ";
        }
        // line 25
        echo "
\t\t\t";
        // line 26
        if ((($context["S_REGISTERED_USER"] ?? null) && ($context["S_NOTIFICATIONS_DISPLAY"] ?? null))) {
            // line 27
            echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"notification-menu-btn\" data-toggle=\"collapse\" data-target=\"#notification-menu\">
\t\t\t\t\t<i class=\"fa fa-bell fa-fw\" aria-hidden=\"true\"></i>
\t\t\t<span class=\"label label-primary\">";
            // line 29
            echo ($context["NOTIFICATIONS_COUNT"] ?? null);
            echo "</span>
\t\t\t\t</button>
\t\t\t";
        }
        // line 32
        echo "
\t\t\t";
        // line 33
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 34
            echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"search-menu-btn\" data-toggle=\"collapse\" data-target=\"#search-menu\">
\t\t\t\t\t<i class=\"fa fa-search fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t";
        }
        // line 38
        echo "
\t\t\t";
        // line 39
        if (($context["S_WF_MEMBER_LOGIN"] ?? null)) {
            // line 40
            echo "\t\t\t\t<a href=\"";
            echo ($context["U_WF_INSTRUCTIONS"] ?? null);
            echo "\" class=\"navbar-toggle pull-right-mobile hidden-sm hidden-md hidden-lg\" id=\"wf-leden-mobile-btn\" style=\"color:#F25A4C; padding:10px 12px; font-size:12px; font-weight:bold; border:none;\">
\t\t\t\t\t<i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i> ";
            // line 41
            echo $this->extensions['phpbb\template\twig\extension']->lang("WERELDFIETSER_LOGIN_MEMBERS");
            echo "
\t\t\t\t</a>
\t\t\t";
        }
        // line 44
        echo "\t\t</div>
\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"main-menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li id=\"quick-links\" class=\"dropdown ";
        // line 47
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-bars fa-fw\" aria-hidden=\"true\"></i> ";
        // line 48
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t<li><a href=\"";
        // line 50
        echo ($context["U_FAQ"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\"><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</a></li>\t\t\t\t\t\t
            ";
        // line 51
        if (($context["S_BOARDRULES_LINK_ENABLED"] ?? null)) {
            // line 52
            echo "              <li data-last-responsive=\"true\">
                <a href=\"";
            // line 53
            echo ($context["U_BOARDRULES"] ?? null);
            echo "\" rel=\"help\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARDRULES_TITLE");
            echo "\" role=\"menuitem\">
                  ";
            // line 54
            if (($context["BOARDRULES_FONT_ICON"] ?? null)) {
                echo "<i class=\"icon fa fa-";
                echo ($context["BOARDRULES_FONT_ICON"] ?? null);
                echo " fa-fw\" aria-hidden=\"true\"></i>";
            }
            echo "<span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARDRULES");
            echo "</span>
                </a>
              </li>
            ";
        }
        // line 58
        echo "
\t\t\t\t\t\t";
        // line 59
        // line 60
        echo "\t\t\t\t\t\t";
        // line 61
        echo "\t\t\t\t\t\t";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 62
            echo "\t\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 63
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-commenting fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-comments fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t";
            // line 67
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 71
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 75
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 77
        echo "
\t\t\t\t\t\t";
        // line 78
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 79
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t";
            // line 80
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-group fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 81
            echo "\t\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-shield fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 82
            echo "\t\t\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t";
        // line 84
        if (($context["U_ACP"] ?? null)) {
            // line 85
            echo "\t\t\t\t\t<li><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\"><i class=\"fa fa-cogs fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</a></li>
\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 88
            echo "\t\t\t\t\t<li><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\"><i class=\"fa fa-gavel fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</a></li>
\t\t\t\t";
        }
        // line 90
        echo "

\t\t\t\t\t\t";
        // line 92
        // line 93
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 95
        // line 96
        echo "
\t\t\t\t";
        // line 97
        // line 98
        echo "\t\t\t</ul>
\t\t</div>
    <div class=\"collapse navbar-collapse pull-left-desktop\" id=\"topics-menu\">
      <ul class=\"nav navbar-nav navbar-right hidden-xs\">
        ";
        // line 102
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 103
            echo "          <li><a href=\"";
            echo ($context["U_SEARCH_NEW"] ?? null);
            echo "\" role=\"menuitem\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
            echo "\"><i class=\"fa fa-commenting fa-fw\" aria-hidden=\"true\"></i> <span class=\"new-topics\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
            echo "</span></a></li>
        ";
        }
        // line 105
        echo "        <li><a href=\"";
        echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
        echo "\" role=\"menuitem\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
        echo "\"><i class=\"fa fa-comments fa-fw\" aria-hidden=\"true\"></i> <span class=\"active-topics\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
        echo "</span></a></li>
      </ul>
    </div>

    <div class=\"collapse navbar-collapse pull-left-desktop\" id=\"tips-menu\">
      <ul class=\"nav navbar-nav navbar-right hidden-xs\">
\t      <li><a href=\"";
        // line 111
        echo ($context["U_FAQ"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\"><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i><span class=\"tips\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span></a></li>\t\t\t\t\t\t
        ";
        // line 112
        if (($context["S_BOARDRULES_LINK_ENABLED"] ?? null)) {
            // line 113
            echo "          <li data-last-responsive=\"true\">
            <a href=\"";
            // line 114
            echo ($context["U_BOARDRULES"] ?? null);
            echo "\" rel=\"help\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARDRULES_TITLE");
            echo "\" role=\"menuitem\">
              ";
            // line 115
            if (($context["BOARDRULES_FONT_ICON"] ?? null)) {
                echo "<i class=\"icon fa fa-";
                echo ($context["BOARDRULES_FONT_ICON"] ?? null);
                echo " fa-fw\" aria-hidden=\"true\"></i>";
            }
            echo "<span class=\"rules\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARDRULES");
            echo "</span>
            </a>
          </li>
        ";
        }
        // line 119
        echo "        ";
        if (($context["S_WF_MEMBER_LOGIN"] ?? null)) {
            // line 120
            echo "          <li data-last-responsive=\"true\">
            <a href=\"";
            // line 121
            echo ($context["U_WF_INSTRUCTIONS"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WERELDFIETSER_LOGIN_MEMBERS");
            echo "\" role=\"menuitem\" style=\"color:#F25A4C; font-weight:bold;\">
              <i class=\"icon fa fa-link fa-fw\" aria-hidden=\"true\"></i><span class=\"wf-login\">";
            // line 122
            echo $this->extensions['phpbb\template\twig\extension']->lang("WERELDFIETSER_LOGIN_MEMBERS");
            echo "</span>
            </a>
          </li>
        ";
        }
        // line 126
        echo "      </ul>
    </div>
\t\t";
        // line 128
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 129
            echo "\t\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"search-menu\">
\t\t\t\t<form class=\"navbar-form navbar-left\" method=\"get\" id=\"search\" action=\"";
            // line 130
            echo ($context["U_SEARCH"] ?? null);
            echo "\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" maxlength=\"128\" type=\"text\" name=\"keywords\" id=\"search_keywords\" size=\"16\" title=\"";
            // line 132
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
            echo "\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t";
            // line 134
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo " <!-- ";
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo " Aangepast door MM op verzoek van Gaele zie https://forum.wereldfietser.nl/viewtopic.php?f=20&t=37348&p=418817#p418817 -->  
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" title=\"";
            // line 135
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\" data-placement=\"bottom\"><i class=\"fa fa-search fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t<a href=\"";
            // line 136
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\" data-placement=\"bottom\"><i class=\"fa fa-cog fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
        }
        // line 142
        echo "\t\t";
        // line 143
        echo "\t\t<div class=\"collapse navbar-collapse pull-right-desktop\" id=\"user-menu\">
\t\t\t<!-- Desktop user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right hidden-xs fix-right-nav\">
\t\t\t\t";
        // line 146
        if (($context["S_DISPLAY_PM"] ?? null)) {
            // line 147
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 148
            echo ($context["U_PRIVATEMSGS"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i> <span class=\"private-messages\">";
            // line 149
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
            echo "</span> <span class=\"label ";
            if (($context["PRIVATE_MESSAGE_INFO_UNREAD"] ?? null)) {
                echo "label-danger";
            } else {
                echo "label-primary";
            }
            echo "\">";
            echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 153
        echo "\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t";
        // line 154
        // line 155
        echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-labeled navbar-btn dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t";
        // line 156
        if (($context["CURRENT_USER_AVATAR"] ?? null)) {
            // line 157
            echo "\t\t\t\t\t\t\t<span class=\"btn-label nav-avatar\">";
            echo ($context["CURRENT_USER_AVATAR"] ?? null);
            echo "</span>
\t\t\t\t\t\t";
        } elseif (        // line 158
($context["S_REGISTERED_USER"] ?? null)) {
            // line 159
            echo "\t\t\t\t\t\t\t<span class=\"btn-label nav-avatar\"><img src=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AVATAR");
            echo "\"></span>
\t\t\t\t\t\t";
        } else {
            // line 161
            echo "\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t";
        }
        // line 163
        echo "\t\t\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            echo ($context["S_USERNAME"] ?? null);
            echo " ";
        }
        // line 164
        echo "\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
        // line 167
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 168
            echo "\t\t\t\t\t\t\t";
            // line 169
            echo "\t\t\t\t\t\t\t";
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 170
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 172
            echo "\t\t\t\t\t\t\t";
            // line 173
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 174
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-sliders fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t";
            // line 175
            // line 176
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 177
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</button></li>
\t\t\t\t\t\t\t";
            // line 178
            // line 179
            echo "\t\t\t\t\t\t";
        } else {
            // line 180
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form action=\"";
            // line 181
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" method=\"post\" id=\"navloginform\" name=\"loginform\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
            // line 183
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" name=\"username\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
            // line 186
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" name=\"password\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 188
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 189
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"autologin-navbar\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-navbar\" tabindex=\"4\" /> ";
                // line 191
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 195
            echo "\t\t\t\t\t\t\t\t\t";
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"login\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-sign-in fa-fw\" aria-hidden=\"true\"></i> ";
            // line 196
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 199
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                // line 200
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-block\" onclick=\"window.location.href='";
                // line 201
                echo ($context["U_REGISTER"] ?? null);
                echo "'\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            } else {
                // line 203
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-block\" disabled=\"disabled\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                // line 204
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            }
            // line 206
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"koppeling-instructie.html\" class=\"wf-leden-link\" style=\"display:block; padding: 8px 15px; color:#F25A4C !important;\"><i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i> Inloggen voor WF-leden</a></li>
\t\t\t\t\t\t\t";
            // line 208
            // line 209
            echo "\t\t\t\t\t\t";
        }
        // line 210
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 212
        // line 213
        echo "\t\t\t</ul>
\t\t\t<!-- Mobile user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right visible-xs fix-right-nav\">
\t\t\t\t";
        // line 216
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 217
            echo "\t\t\t\t\t";
            // line 218
            echo "\t\t\t\t\t";
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 219
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t\t";
            // line 222
            echo "\t\t\t\t\t<li><a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 223
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-sliders fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t";
            // line 224
            // line 225
            echo "\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"";
            // line 226
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 227
            // line 228
            echo "\t\t\t\t\t";
            // line 229
            echo "\t\t\t\t";
        } else {
            // line 230
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"row no-margin-bottom\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 233
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br class=\"col-xs-12\"/>
\t\t\t\t\t\t\t<br class=\"col-xs-12\"/>
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 238
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                // line 239
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"button\" onclick=\"window.location.href='";
                echo ($context["U_REGISTER"] ?? null);
                echo "'\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            } else {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" disabled=\"disabled\" type=\"button\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br class=\"col-xs-12\"/>
\t\t\t\t\t\t\t<div class=\"col-xs-12\"><a href=\"koppeling-instructie.html\" style=\"color:#f2f0ef !important;\"><i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i> Inloggen voor WF-leden</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 249
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 251
        if ((($context["S_REGISTERED_USER"] ?? null) && ($context["S_NOTIFICATIONS_DISPLAY"] ?? null))) {
            // line 252
            echo "\t\t\t<div class=\"collapse navbar-collapse pull-right-desktop\" id=\"notification-menu\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right hidden-xs\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle hidden-xs\" id=\"notification-button\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-bell fa-fw\" aria-hidden=\"true\"></i> <span class=\"notifications\">";
            // line 255
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
            echo "</span> <span class=\"label label-primary\">";
            echo ($context["NOTIFICATIONS_COUNT"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu notification-panel\" id=\"notification-panel-desktop\" role=\"menu\">
\t\t\t\t\t\t\t<li><div id=\"notification_list\">";
            // line 257
            $location = "notification_dropdown.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 257)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "</div></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right visible-xs notification-panel\" id=\"notification-panel-mobile\">
\t\t\t\t\t<li><div id=\"notification_list_mobile\">";
            // line 262
            $location = "notification_dropdown.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 262)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "</div></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 266
        echo "\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 266,  783 => 262,  765 => 257,  758 => 255,  753 => 252,  751 => 251,  747 => 249,  739 => 243,  733 => 241,  725 => 239,  723 => 238,  711 => 233,  706 => 230,  703 => 229,  701 => 228,  700 => 227,  692 => 226,  689 => 225,  688 => 224,  680 => 223,  671 => 222,  669 => 221,  661 => 219,  658 => 218,  656 => 217,  654 => 216,  649 => 213,  648 => 212,  644 => 210,  641 => 209,  640 => 208,  636 => 206,  631 => 204,  628 => 203,  621 => 201,  618 => 200,  616 => 199,  610 => 196,  605 => 195,  598 => 191,  594 => 189,  592 => 188,  585 => 186,  577 => 183,  572 => 181,  569 => 180,  566 => 179,  565 => 178,  557 => 177,  554 => 176,  553 => 175,  545 => 174,  536 => 173,  534 => 172,  526 => 170,  523 => 169,  521 => 168,  519 => 167,  514 => 164,  508 => 163,  504 => 161,  496 => 159,  494 => 158,  489 => 157,  487 => 156,  484 => 155,  483 => 154,  480 => 153,  465 => 149,  461 => 148,  458 => 147,  456 => 146,  451 => 143,  449 => 142,  438 => 136,  434 => 135,  428 => 134,  419 => 132,  414 => 130,  411 => 129,  409 => 128,  405 => 126,  398 => 122,  392 => 121,  389 => 120,  386 => 119,  373 => 115,  367 => 114,  364 => 113,  362 => 112,  354 => 111,  340 => 105,  330 => 103,  328 => 102,  322 => 98,  321 => 97,  318 => 96,  317 => 95,  313 => 93,  312 => 92,  308 => 90,  298 => 88,  295 => 87,  285 => 85,  283 => 84,  280 => 83,  277 => 82,  268 => 81,  260 => 80,  257 => 79,  255 => 78,  252 => 77,  245 => 75,  237 => 73,  229 => 71,  226 => 70,  218 => 68,  216 => 67,  208 => 65,  200 => 63,  197 => 62,  194 => 61,  192 => 60,  191 => 59,  188 => 58,  175 => 54,  169 => 53,  166 => 52,  164 => 51,  156 => 50,  151 => 48,  145 => 47,  140 => 44,  134 => 41,  129 => 40,  127 => 39,  124 => 38,  118 => 34,  116 => 33,  113 => 32,  107 => 29,  103 => 27,  101 => 26,  98 => 25,  83 => 21,  79 => 20,  74 => 19,  72 => 18,  68 => 16,  64 => 14,  56 => 12,  54 => 11,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
