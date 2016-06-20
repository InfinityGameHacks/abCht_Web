<?php

/* confirm_body.html */
class __TwigTemplate_9d46f6ad260edae2107811cf5038abc77eaef02fbfa6b0718dff880fbea76bab extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "\t<form action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t\t<h3>";
            // line 3
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t\t<p>";
            // line 4
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button2\" />&nbsp;
\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 13
            echo "
";
            // line 14
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "confirm_body.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 15
            echo "<div class=\"simplepage__box\">
\t
\t<h2 class=\"page-title\">";
            // line 17
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h2>
\t<p>";
            // line 18
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t\t
\t<form id=\"confirm\" action=\"";
            // line 20
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\" class=\"st-form\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 22
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t<button type=\"submit\" name=\"confirm\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-success\"><i class=\"fi fi-check\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</button>
\t\t\t<button type=\"submit\" name=\"cancel\" value=\"";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-default\"><i class=\"fi fi-close\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</button>
\t\t</fieldset>
\t</form>

</div>

";
            // line 30
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "confirm_body.html", 30)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  91 => 24,  85 => 23,  81 => 22,  76 => 20,  71 => 18,  67 => 17,  63 => 15,  51 => 14,  48 => 13,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_REQUEST -->*/
/* 	<form action="{S_CONFIRM_ACTION}" method="post">*/
/* 		<h3>{MESSAGE_TITLE}</h3>*/
/* 		<p>{MESSAGE_TEXT}</p>*/
/* */
/* 		<fieldset class="submit-buttons">*/
/* 			<input type="button" name="confirm" value="{L_YES}" class="button2" />&nbsp;*/
/* 			<input type="button" name="cancel" value="{L_NO}" class="button2" />*/
/* 		</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* <!-- INCLUDE simple_header.html -->*/
/* <div class="simplepage__box">*/
/* 	*/
/* 	<h2 class="page-title">{MESSAGE_TITLE}</h2>*/
/* 	<p>{MESSAGE_TEXT}</p>*/
/* 		*/
/* 	<form id="confirm" action="{S_CONFIRM_ACTION}" method="post" class="st-form">*/
/* 		<fieldset class="submit-buttons">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			<button type="submit" name="confirm" value="{L_YES}" class="btn btn-success"><i class="fi fi-check"></i> {L_YES}</button>*/
/* 			<button type="submit" name="cancel" value="{L_NO}" class="btn btn-default"><i class="fi fi-close"></i> {L_NO}</button>*/
/* 		</fieldset>*/
/* 	</form>*/
/* */
/* </div>*/
/* */
/* <!-- INCLUDE simple_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
