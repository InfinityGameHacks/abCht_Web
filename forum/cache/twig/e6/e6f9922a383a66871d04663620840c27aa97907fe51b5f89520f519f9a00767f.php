<?php

/* components/footer_basic.html */
class __TwigTemplate_885fb5a5cddbe4505c116bc552d3c8716c91b63d04cca260be54f83f02e246f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"page-footer__before\">
\t<div class=\"container\">
    <div class=\"dropup footer-links-dropdown\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
            <span class=\"icon-menu-bars\"><span class=\"bar-1\"></span><span class=\"bar-2\"></span><span class=\"bar-3\"></span></span>
        </a>
        <ul class=\"dropdown-menu\" role=\"menu\">
            
            ";
        // line 9
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 10
            echo "                <li><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"slickthemes.resetStorage\" data-refresh=\"true\" role=\"menuitem\"><i class=\"fi fi-close\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
                ";
            // line 11
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 12
            echo "            ";
        }
        // line 13
        echo "            
            ";
        // line 14
        // line 15
        echo "            ";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 16
        echo "            ";
        // line 17
        echo "            ";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 18
        echo "        </ul>
    </div>
    
    <ul class=\"footer-links\" role=\"menu\">

        ";
        // line 23
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 24
            echo "            <li><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"slickthemes.resetStorage\" data-refresh=\"true\" role=\"menuitem\"><i class=\"fi fi-close\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
            ";
            // line 25
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 26
            echo "        ";
        }
        // line 27
        echo "        
        ";
        // line 28
        // line 29
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 30
        echo "\t\t";
        // line 31
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 32
        echo "    </ul>
    
\t<span class=\"socialicons\">
\t  ";
        // line 35
        if ((isset($context["ST_social_fb"]) ? $context["ST_social_fb"] : null)) {
            // line 36
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_fb"]) ? $context["ST_social_fb"] : null);
            echo "\"><i class=\"fi fi-facebook-box\"></i></a>";
        }
        // line 37
        echo "\t  ";
        if ((isset($context["ST_social_twitter"]) ? $context["ST_social_twitter"] : null)) {
            // line 38
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_twitter"]) ? $context["ST_social_twitter"] : null);
            echo "\"><i class=\"fi fi-twitter-box\"></i></a>";
        }
        // line 39
        echo "\t  ";
        if ((isset($context["ST_social_gplus"]) ? $context["ST_social_gplus"] : null)) {
            // line 40
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_gplus"]) ? $context["ST_social_gplus"] : null);
            echo "\"><i class=\"fi fi-google-plus-box\"></i></a>";
        }
        // line 41
        echo "\t  ";
        if ((isset($context["ST_social_youtube"]) ? $context["ST_social_youtube"] : null)) {
            // line 42
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_youtube"]) ? $context["ST_social_youtube"] : null);
            echo "\"><i class=\"fi fi-youtube-play\"></i></a>";
        }
        // line 43
        echo "\t</span>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/footer_basic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 43,  159 => 42,  156 => 41,  151 => 40,  148 => 39,  143 => 38,  140 => 37,  135 => 36,  133 => 35,  128 => 32,  119 => 31,  117 => 30,  108 => 29,  107 => 28,  104 => 27,  101 => 26,  91 => 25,  84 => 24,  82 => 23,  75 => 18,  66 => 17,  64 => 16,  55 => 15,  54 => 14,  51 => 13,  48 => 12,  38 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="page-footer__before">*/
/* 	<div class="container">*/
/*     <div class="dropup footer-links-dropdown">*/
/*         <a href="javascript:void(0)" data-toggle="dropdown">*/
/*             <span class="icon-menu-bars"><span class="bar-1"></span><span class="bar-2"></span><span class="bar-3"></span></span>*/
/*         </a>*/
/*         <ul class="dropdown-menu" role="menu">*/
/*             */
/*             <!-- IF not S_IS_BOT -->*/
/*                 <li><a href="{U_DELETE_COOKIES}" data-ajax="slickthemes.resetStorage" data-refresh="true" role="menuitem"><i class="fi fi-close"></i> {L_DELETE_COOKIES}</a></li>*/
/*                 <!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" title="{L_MEMBERLIST_EXPLAIN}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/*             <!-- ENDIF -->*/
/*             */
/*             <!-- EVENT overall_footer_teamlink_before -->*/
/*             <!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/*             <!-- EVENT overall_footer_teamlink_after -->*/
/*             <!-- IF U_CONTACT_US --><li><a href="{U_CONTACT_US}" role="menuitem">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/*         </ul>*/
/*     </div>*/
/*     */
/*     <ul class="footer-links" role="menu">*/
/* */
/*         <!-- IF not S_IS_BOT -->*/
/*             <li><a href="{U_DELETE_COOKIES}" data-ajax="slickthemes.resetStorage" data-refresh="true" role="menuitem"><i class="fi fi-close"></i> {L_DELETE_COOKIES}</a></li>*/
/*             <!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" title="{L_MEMBERLIST_EXPLAIN}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/*         <!-- ENDIF -->*/
/*         */
/*         <!-- EVENT overall_footer_teamlink_before -->*/
/* 		<!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 		<!-- EVENT overall_footer_teamlink_after -->*/
/* 		<!-- IF U_CONTACT_US --><li><a href="{U_CONTACT_US}" role="menuitem">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/*     </ul>*/
/*     */
/* 	<span class="socialicons">*/
/* 	  <!-- IF ST_social_fb -->*/
/* 		<a href="{ST_social_fb}"><i class="fi fi-facebook-box"></i></a><!-- ENDIF -->*/
/* 	  <!-- IF ST_social_twitter -->*/
/* 		<a href="{ST_social_twitter}"><i class="fi fi-twitter-box"></i></a><!-- ENDIF -->*/
/* 	  <!-- IF ST_social_gplus -->*/
/* 		<a href="{ST_social_gplus}"><i class="fi fi-google-plus-box"></i></a><!-- ENDIF -->*/
/* 	  <!-- IF ST_social_youtube -->*/
/* 		<a href="{ST_social_youtube}"><i class="fi fi-youtube-play"></i></a><!-- ENDIF -->*/
/* 	</span>*/
/* 	</div>*/
/* </div>*/
/* */
