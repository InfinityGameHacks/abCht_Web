<?php

/* login_body.html */
class __TwigTemplate_797aebc91c5096d4ccb3acaed8d2e199da270c03cf6b2fd6dff22ed916b63d62 extends Twig_Template
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
        $location = "simple_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" class=\"simplepage__return\"><i class=\"fi fi-chevron-";
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo "\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("BACK_TO_PREV");
        echo "</a>
<div class=\"simplepage__box loginpage-box\">
<form class=\"st-form\" action=\"";
        // line 4
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" method=\"post\" id=\"login\" data-focus=\"";
        if ((isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null)) {
            echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        } else {
            echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        }
        echo "\">
\t\t<h2 class=\"page-title\">";
        // line 5
        if ((isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null)) {
            echo (isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null);
        } else {
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
        }
        echo "</h2>

\t\t<fieldset class=\"st-form__fieldset\">
\t\t";
        // line 8
        if ((isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null)) {
            echo "<div class=\"alert alert-danger\">";
            echo (isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null);
            echo "</div>";
        }
        // line 9
        echo "\t\t<dl>
\t\t\t<dt><label for=\"";
        // line 10
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "</label></dt>
\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"";
        // line 11
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" id=\"";
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" size=\"25\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox autowidth\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"";
        // line 14
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "</label></dt>
\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"";
        // line 15
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" name=\"";
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t";
        // line 16
        if (((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null) && ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null) || (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)))) {
            // line 17
            echo "\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
            // line 18
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                echo "<dd><a class=\"btn btn-sm btn-default\" href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a></dd>";
            }
            // line 19
            echo "\t\t\t\t";
            if ((isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)) {
                echo "<dd><a class=\"btn btn-sm btn-default\" href=\"";
                echo (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESEND_ACTIVATION");
                echo "</a></dd>";
            }
            // line 20
            echo "\t\t\t";
        }
        // line 21
        echo "\t\t</dl>
\t\t";
        // line 22
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 23
            echo "\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 24
            echo "\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "login_body.html", 24)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "\t\t";
        if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
            // line 27
            echo "\t\t<dl style=\"padding-top: 0\">
\t\t\t";
            // line 28
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "</label></dd>";
            }
            // line 29
            echo "\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\" /> ";
            echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 32
        echo "
\t\t";
        // line 33
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd>";
        // line 36
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<button type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" class=\"btn btn-success\">";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo " <i class=\"fi fi-arrow-";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo "\"></i></button></dd>
\t\t</dl>
\t\t</fieldset>

\t";
        // line 40
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null))) {
            // line 41
            echo "\t\t";
            $location = (("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . ""), "login_body.html", 41)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 42
            echo "\t";
        }
        // line 43
        echo "
";
        // line 44
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null))) {
            // line 45
            echo "
\t<hr class=\"dashed\" />
<div class=\"panel-bare\">
\t<h4>";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</h4>
\t<p>";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
            echo "</p>
\t<p><strong><a href=\"";
            // line 50
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a> | <a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></strong></p>
\t<p><a href=\"";
            // line 51
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-info\"><i class=\"fi fi-account-plus\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a></p>
</div>
";
        }
        // line 54
        echo "
</form>
</div>

";
        // line 58
        $location = "simple_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_footer.html", "login_body.html", 58)->display($context);
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
        return array (  249 => 58,  243 => 54,  235 => 51,  225 => 50,  221 => 49,  217 => 48,  212 => 45,  210 => 44,  207 => 43,  204 => 42,  191 => 41,  189 => 40,  176 => 36,  170 => 33,  167 => 32,  160 => 29,  154 => 28,  151 => 27,  148 => 26,  145 => 25,  132 => 24,  128 => 23,  126 => 22,  123 => 21,  120 => 20,  111 => 19,  103 => 18,  100 => 17,  98 => 16,  92 => 15,  86 => 14,  76 => 11,  70 => 10,  67 => 9,  61 => 8,  51 => 5,  41 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE simple_header.html -->*/
/* <a href="{U_INDEX}" class="simplepage__return"><i class="fi fi-chevron-{S_CONTENT_FLOW_BEGIN}"></i> {L_BACK_TO_PREV}</a>*/
/* <div class="simplepage__box loginpage-box">*/
/* <form class="st-form" action="{S_LOGIN_ACTION}" method="post" id="login" data-focus="<!-- IF S_ADMIN_AUTH -->{PASSWORD_CREDENTIAL}<!-- ELSE -->{USERNAME_CREDENTIAL}<!-- ENDIF -->">*/
/* 		<h2 class="page-title"><!-- IF LOGIN_EXPLAIN -->{LOGIN_EXPLAIN}<!-- ELSE -->{L_LOGIN}<!-- ENDIF --></h2>*/
/* */
/* 		<fieldset class="st-form__fieldset">*/
/* 		<!-- IF LOGIN_ERROR --><div class="alert alert-danger">{LOGIN_ERROR}</div><!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label for="{USERNAME_CREDENTIAL}">{L_USERNAME}</label></dt>*/
/* 			<dd><input type="text" tabindex="1" name="{USERNAME_CREDENTIAL}" id="{USERNAME_CREDENTIAL}" size="25" value="{USERNAME}" class="inputbox autowidth" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="{PASSWORD_CREDENTIAL}">{L_PASSWORD}</label></dt>*/
/* 			<dd><input type="password" tabindex="2" id="{PASSWORD_CREDENTIAL}" name="{PASSWORD_CREDENTIAL}" size="25" class="inputbox autowidth" autocomplete="off" /></dd>*/
/* 			<!-- IF S_DISPLAY_FULL_LOGIN and (U_SEND_PASSWORD or U_RESEND_ACTIVATION) -->*/
/* 				<dd>&nbsp;</dd>*/
/* 				<!-- IF U_SEND_PASSWORD --><dd><a class="btn btn-sm btn-default" href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a></dd><!-- ENDIF -->*/
/* 				<!-- IF U_RESEND_ACTIVATION --><dd><a class="btn btn-sm btn-default" href="{U_RESEND_ACTIVATION}">{L_RESEND_ACTIVATION}</a></dd><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 		<!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 			<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 			<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_DISPLAY_FULL_LOGIN -->*/
/* 		<dl style="padding-top: 0">*/
/* 			<!-- IF S_AUTOLOGIN_ENABLED --><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4" /> {L_LOG_ME_IN}</label></dd><!-- ENDIF -->*/
/* 			<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5" /> {L_HIDE_ME}</label></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		{S_LOGIN_REDIRECT}*/
/* 		<dl>*/
/* 			<dt>&nbsp;</dt>*/
/* 			<dd>{S_HIDDEN_FIELDS}<button type="submit" name="login" tabindex="6" value="{L_LOGIN}" class="btn btn-success">{L_LOGIN} <i class="fi fi-arrow-{S_CONTENT_FLOW_END}"></i></button></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* */
/* 	<!-- IF not S_ADMIN_AUTH and PROVIDER_TEMPLATE_FILE -->*/
/* 		<!-- INCLUDE {PROVIDER_TEMPLATE_FILE} -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- IF not S_ADMIN_AUTH and S_REGISTER_ENABLED -->*/
/* */
/* 	<hr class="dashed" />*/
/* <div class="panel-bare">*/
/* 	<h4>{L_REGISTER}</h4>*/
/* 	<p>{L_LOGIN_INFO}</p>*/
/* 	<p><strong><a href="{U_TERMS_USE}">{L_TERMS_USE}</a> | <a href="{U_PRIVACY}">{L_PRIVACY}</a></strong></p>*/
/* 	<p><a href="{U_REGISTER}" class="btn btn-info"><i class="fi fi-account-plus"></i> {L_REGISTER}</a></p>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* </div>*/
/* */
/* <!-- INCLUDE simple_footer.html -->*/
/* */
