<?php

/* slickpanel/page_inner.html */
class __TwigTemplate_2323bb83a500bf7bfb98cac4d21b0c5a50c1b86e7e240b831d12125e24eedf92 extends Twig_Template
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
        $location = "slickpanel/inc.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("slickpanel/inc.html", "slickpanel/page_inner.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"page-header tp-header\">
\t";
        // line 3
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SLICKPANEL_ONPAGE", array()) == 1)) {
            echo "<a href=\"";
            echo (isset($context["SLICKPANEL_LINK"]) ? $context["SLICKPANEL_LINK"] : null);
            echo "\"><img class=\"st-logo\" src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/slickthemes/slickpanel.png\" alt=\"Slickthemes\" /></a>";
        }
        // line 4
        echo "</div>
<form dir=\"ltr\" action=\"";
        // line 5
        echo (isset($context["SLICKPANEL_USERCONFIG"]) ? $context["SLICKPANEL_USERCONFIG"] : null);
        echo "\" id=\"tp-form\" method=\"post\" data-ajax=\"slickthemes.themeconfig_save\">
\t<div role=\"tabpanel\" class=\"tp-tabcontainer\">

\t<!-- Themepanel nav -->
\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t<li role=\"presentation\" class=\"active\"><a href=\"#general\" title=\"General settings\" role=\"tab\" data-toggle=\"tab\">
\t\t\t<i class=\"fi fi-settings-box\"></i>
\t\t\t<span>General</span>
\t\t</a></li>
\t\t<li role=\"presentation\"><a href=\"#layout\" title=\"Layout\" role=\"tab\" data-toggle=\"tab\">
\t\t\t<i class=\"fi fi-menu\"></i>
\t\t\t<span>layout</span>
\t\t</a></li>
\t\t<li role=\"presentation\"><a href=\"#typography\" title=\"Typography\" role=\"tab\" data-toggle=\"tab\">
\t\t\t<i class=\"fi fi-alphabetical\"></i>
\t\t\t<span>Typography</span>
\t\t</a></li>
\t\t<li role=\"presentation\"><a href=\"#header\" title=\"Header settings\" role=\"tab\" data-toggle=\"tab\">
\t\t\t<i class=\"fi fi-menu\"></i>
\t\t\t<span>Header</span>
\t\t</a></li>
\t\t<li role=\"presentation\"><a href=\"#skin\" title=\"Skin\" role=\"tab\" data-toggle=\"tab\">
\t\t\t<i class=\"fi fi-palette\"></i>
\t\t\t<span>Skin</span>
\t\t</a></li>
\t\t<li role=\"presentation\"><a href=\"#social\" title=\"Social links\" role=\"tab\" data-toggle=\"tab\">
\t\t\t<i class=\"fi fi-twitter\"></i>
\t\t\t<span>Social</span>
\t\t</a></li>
\t</ul>

\t<div class=\"tab-content\">

\t\t<!-- SECTION: Misc =================================================================== -->
\t\t<div role=\"tabpanel\" class=\"tab-pane tp-section\" id=\"layout\"><div class=\"tab-pane-wrapper\">
\t\t\t";
        // line 40
        $location = "slickpanel/layout.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("slickpanel/layout.html", "slickpanel/page_inner.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 41
        echo "\t\t</div></div>


\t\t<!-- SECTION: general ================================================================ -->
\t\t<div role=\"tabpanel\" class=\"tab-pane in active tp-section\" id=\"general\">
\t\t<div class=\"tab-pane-wrapper\">
\t\t\t";
        // line 47
        $location = "slickpanel/general.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("slickpanel/general.html", "slickpanel/page_inner.html", 47)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 48
        echo "\t\t</div>
\t\t</div>

\t\t<!-- SECTION: widgets ================================================================ -->
\t\t<div role=\"tabpanel\" class=\"tab-pane tp-section\" id=\"skin\">
\t\t<div class=\"tab-pane-wrapper\">
\t\t\t";
        // line 54
        $location = "slickpanel/skin.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("slickpanel/skin.html", "slickpanel/page_inner.html", 54)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 55
        echo "\t\t</div>
\t\t</div>

\t\t<!-- SECTION: Typography ================================================================= -->
\t\t<div role=\"tabpanel\" class=\"tab-pane tp-section\" id=\"typography\">
\t\t<div class=\"tab-pane-wrapper\">
\t\t\t";
        // line 61
        $location = "slickpanel/typography.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("slickpanel/typography.html", "slickpanel/page_inner.html", 61)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 62
        echo "\t\t</div>
\t\t</div>

\t\t<!-- SECTION: header ================================================================= -->
\t\t<div role=\"tabpanel\" class=\"tab-pane tp-section\" id=\"header\">
\t\t<div class=\"tab-pane-wrapper\">
\t\t\t";
        // line 68
        $location = "slickpanel/header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("slickpanel/header.html", "slickpanel/page_inner.html", 68)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 69
        echo "\t\t</div>
\t\t</div>

\t\t<!-- SECTION: social ================================================================= -->
\t\t<div role=\"tabpanel\" class=\"tab-pane tp-section\" id=\"social\">
\t\t<div class=\"tab-pane-wrapper\">
\t\t\t";
        // line 75
        $location = "slickpanel/social.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("slickpanel/social.html", "slickpanel/page_inner.html", 75)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 76
        echo "\t\t</div>
\t\t</div>

\t</div>
\t</div>

\t<div class=\"submit-section\"><!--
\t\t<button type=\"submit\" id=\"submit_userconfig\" name=\"submit_userconfig\" value=\"save\" class=\"btn btn-success\">
\t\t\t<i class=\"fi fi-check\"></i> Save
\t\t</button>-->
\t\t<input type=\"submit\" id=\"submit_userconfig\" name=\"submit_userconfig\" value=\"save\" class=\"btn btn-success\">
\t\t<!--<a href=\"javascript:void(0)\" class=\"tpform-reset btn btn-danger\"><i class=\"fi fi-undo-variant\"></i> Reset</a>-->
\t\t";
        // line 88
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</div>

</form>
<script type=\"text/javascript\">
\tvar _st = window._st || {};
\t_st.onloadfunctions = _st.onloadfunctions || [];
\t_st.onloadfunctions.push(function(){
\t\t_st.skinpanel();
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "slickpanel/page_inner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 88,  195 => 76,  183 => 75,  175 => 69,  163 => 68,  155 => 62,  143 => 61,  135 => 55,  123 => 54,  115 => 48,  103 => 47,  95 => 41,  83 => 40,  45 => 5,  42 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE slickpanel/inc.html -->*/
/* <div class="page-header tp-header">*/
/* 	<!-- IF $SLICKPANEL_ONPAGE == 1 --><a href="{SLICKPANEL_LINK}"><img class="st-logo" src="{T_THEME_PATH}/images/slickthemes/slickpanel.png" alt="Slickthemes" /></a><!-- ENDIF -->*/
/* </div>*/
/* <form dir="ltr" action="{SLICKPANEL_USERCONFIG}" id="tp-form" method="post" data-ajax="slickthemes.themeconfig_save">*/
/* 	<div role="tabpanel" class="tp-tabcontainer">*/
/* */
/* 	<!-- Themepanel nav -->*/
/* 	<ul class="nav nav-tabs" role="tablist">*/
/* 		<li role="presentation" class="active"><a href="#general" title="General settings" role="tab" data-toggle="tab">*/
/* 			<i class="fi fi-settings-box"></i>*/
/* 			<span>General</span>*/
/* 		</a></li>*/
/* 		<li role="presentation"><a href="#layout" title="Layout" role="tab" data-toggle="tab">*/
/* 			<i class="fi fi-menu"></i>*/
/* 			<span>layout</span>*/
/* 		</a></li>*/
/* 		<li role="presentation"><a href="#typography" title="Typography" role="tab" data-toggle="tab">*/
/* 			<i class="fi fi-alphabetical"></i>*/
/* 			<span>Typography</span>*/
/* 		</a></li>*/
/* 		<li role="presentation"><a href="#header" title="Header settings" role="tab" data-toggle="tab">*/
/* 			<i class="fi fi-menu"></i>*/
/* 			<span>Header</span>*/
/* 		</a></li>*/
/* 		<li role="presentation"><a href="#skin" title="Skin" role="tab" data-toggle="tab">*/
/* 			<i class="fi fi-palette"></i>*/
/* 			<span>Skin</span>*/
/* 		</a></li>*/
/* 		<li role="presentation"><a href="#social" title="Social links" role="tab" data-toggle="tab">*/
/* 			<i class="fi fi-twitter"></i>*/
/* 			<span>Social</span>*/
/* 		</a></li>*/
/* 	</ul>*/
/* */
/* 	<div class="tab-content">*/
/* */
/* 		<!-- SECTION: Misc =================================================================== -->*/
/* 		<div role="tabpanel" class="tab-pane tp-section" id="layout"><div class="tab-pane-wrapper">*/
/* 			<!-- INCLUDE slickpanel/layout.html -->*/
/* 		</div></div>*/
/* */
/* */
/* 		<!-- SECTION: general ================================================================ -->*/
/* 		<div role="tabpanel" class="tab-pane in active tp-section" id="general">*/
/* 		<div class="tab-pane-wrapper">*/
/* 			<!-- INCLUDE slickpanel/general.html -->*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		<!-- SECTION: widgets ================================================================ -->*/
/* 		<div role="tabpanel" class="tab-pane tp-section" id="skin">*/
/* 		<div class="tab-pane-wrapper">*/
/* 			<!-- INCLUDE slickpanel/skin.html -->*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		<!-- SECTION: Typography ================================================================= -->*/
/* 		<div role="tabpanel" class="tab-pane tp-section" id="typography">*/
/* 		<div class="tab-pane-wrapper">*/
/* 			<!-- INCLUDE slickpanel/typography.html -->*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		<!-- SECTION: header ================================================================= -->*/
/* 		<div role="tabpanel" class="tab-pane tp-section" id="header">*/
/* 		<div class="tab-pane-wrapper">*/
/* 			<!-- INCLUDE slickpanel/header.html -->*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		<!-- SECTION: social ================================================================= -->*/
/* 		<div role="tabpanel" class="tab-pane tp-section" id="social">*/
/* 		<div class="tab-pane-wrapper">*/
/* 			<!-- INCLUDE slickpanel/social.html -->*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	</div>*/
/* */
/* 	<div class="submit-section"><!--*/
/* 		<button type="submit" id="submit_userconfig" name="submit_userconfig" value="save" class="btn btn-success">*/
/* 			<i class="fi fi-check"></i> Save*/
/* 		</button>-->*/
/* 		<input type="submit" id="submit_userconfig" name="submit_userconfig" value="save" class="btn btn-success">*/
/* 		<!--<a href="javascript:void(0)" class="tpform-reset btn btn-danger"><i class="fi fi-undo-variant"></i> Reset</a>-->*/
/* 		{S_FORM_TOKEN}*/
/* 	</div>*/
/* */
/* </form>*/
/* <script type="text/javascript">*/
/* 	var _st = window._st || {};*/
/* 	_st.onloadfunctions = _st.onloadfunctions || [];*/
/* 	_st.onloadfunctions.push(function(){*/
/* 		_st.skinpanel();*/
/* 	});*/
/* </script>*/
/* */
