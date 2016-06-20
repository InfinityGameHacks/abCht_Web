<?php

/* confirm_delete_body.html */
class __TwigTemplate_39e5d0be1b15e6e027bd4a429415b20a06f9aca5ee69d0b7386dc9211c3808d9 extends Twig_Template
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
            echo "\" data-ajax=\"true\" method=\"post\">
\t\t<h3>";
            // line 3
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t\t<p>";
            // line 4
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t\t";
            // line 6
            if ( !(isset($context["S_SHADOW_TOPICS"]) ? $context["S_SHADOW_TOPICS"] : null)) {
                // line 7
                echo "\t\t";
                if ((( !(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null) && (isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null)) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 8
                    echo "\t\t\t<label>
\t\t\t\t<strong>";
                    // line 9
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 10
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo " />
\t\t\t\t";
                    // line 11
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 12
                    echo "\t\t\t</label>
\t\t";
                }
                // line 14
                echo "
\t\t<label for=\"delete_reason\">
\t\t\t<strong>";
                // line 16
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong><p>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                echo "</p><br />
\t\t\t<input type=\"text\" name=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" />
\t\t</label>
\t\t";
            }
            // line 20
            echo "\t
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 22
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t<button type=\"submit\" name=\"confirm\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-danger\"><i class=\"fi fi-check\"></i> ";
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

";
        } else {
            // line 29
            echo "
";
            // line 30
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "confirm_delete_body.html", 30)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 31
            echo "<div class=\"simplepage__box\">
\t
\t<h2 class=\"page-title\">";
            // line 33
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h2>
\t<p>";
            // line 34
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t
\t<form id=\"confirm\" action=\"";
            // line 36
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\" class=\"st-form\">
\t
\t\t";
            // line 38
            if ( !(isset($context["S_SHADOW_TOPICS"]) ? $context["S_SHADOW_TOPICS"] : null)) {
                // line 39
                echo "\t\t<fieldset class=\"st-form__fieldset\">
\t\t\t";
                // line 40
                if ((( !(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null) && (isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null)) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 41
                    echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete_permanent\">";
                    // line 42
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label for=\"delete_permanent\">
\t\t\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 45
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo " />
\t\t\t\t\t\t\t";
                    // line 46
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 47
                    echo "\t\t\t\t\t\t</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
                }
                // line 51
                echo "\t
\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_reason\">";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t";
            }
            // line 58
            echo "\t
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 60
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t<button type=\"submit\" name=\"confirm\" value=\"";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-danger\"><i class=\"fi fi-check\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</button>
\t\t\t<button type=\"submit\" name=\"cancel\" value=\"";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-default\"><i class=\"fi fi-close\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</button>
\t\t</fieldset>
\t\t
\t</form>
\t
</div>
";
            // line 68
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "confirm_delete_body.html", 68)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 68,  195 => 62,  189 => 61,  185 => 60,  181 => 58,  170 => 53,  166 => 51,  160 => 47,  154 => 46,  150 => 45,  143 => 42,  140 => 41,  138 => 40,  135 => 39,  133 => 38,  128 => 36,  123 => 34,  119 => 33,  115 => 31,  103 => 30,  100 => 29,  90 => 24,  84 => 23,  80 => 22,  76 => 20,  66 => 16,  62 => 14,  58 => 12,  52 => 11,  48 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_REQUEST -->*/
/* 	<form action="{S_CONFIRM_ACTION}" data-ajax="true" method="post">*/
/* 		<h3>{MESSAGE_TITLE}</h3>*/
/* 		<p>{MESSAGE_TEXT}</p>*/
/* */
/* 		<!-- IF not S_SHADOW_TOPICS -->*/
/* 		<!-- IF not S_SOFTDELETED and S_ALLOWED_DELETE and S_ALLOWED_SOFTDELETE -->*/
/* 			<label>*/
/* 				<strong>{L_DELETE_PERMANENTLY}{L_COLON}</strong>*/
/* 				<input id="delete_permanent" name="delete_permanent" type="checkbox" value="1" {S_CHECKED_PERMANENT} />*/
/* 				<!-- IF S_TOPIC_MODE -->{L_DELETE_TOPIC_PERMANENTLY}<!-- ELSE -->{L_DELETE_POST_PERMANENTLY}<!-- ENDIF -->*/
/* 			</label>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<label for="delete_reason">*/
/* 			<strong>{L_DELETE_REASON}{L_COLON}</strong><p>{L_DELETE_REASON_EXPLAIN}</p><br />*/
/* 			<input type="text" name="delete_reason" value="" class="inputbox autowidth" maxlength="120" size="45" />*/
/* 		</label>*/
/* 		<!-- ENDIF -->*/
/* 	*/
/* 		<fieldset class="submit-buttons">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			<button type="submit" name="confirm" value="{L_YES}" class="btn btn-danger"><i class="fi fi-check"></i> {L_YES}</button>*/
/* 			<button type="submit" name="cancel" value="{L_NO}" class="btn btn-default"><i class="fi fi-close"></i> {L_NO}</button>*/
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
/* 	*/
/* 	<form id="confirm" action="{S_CONFIRM_ACTION}" method="post" class="st-form">*/
/* 	*/
/* 		<!-- IF not S_SHADOW_TOPICS -->*/
/* 		<fieldset class="st-form__fieldset">*/
/* 			<!-- IF not S_SOFTDELETED and S_ALLOWED_DELETE and S_ALLOWED_SOFTDELETE -->*/
/* 				<dl>*/
/* 					<dt><label for="delete_permanent">{L_DELETE_PERMANENTLY}{L_COLON}</label></dt>*/
/* 					<dd>*/
/* 						<label for="delete_permanent">*/
/* 							<input id="delete_permanent" name="delete_permanent" type="checkbox" value="1" {S_CHECKED_PERMANENT} />*/
/* 							<!-- IF S_TOPIC_MODE -->{L_DELETE_TOPIC_PERMANENTLY}<!-- ELSE -->{L_DELETE_POST_PERMANENTLY}<!-- ENDIF -->*/
/* 						</label>*/
/* 					</dd>*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* 	*/
/* 			<dl>*/
/* 				<dt><label for="delete_reason">{L_DELETE_REASON}{L_COLON}</label><br /><span>{L_DELETE_REASON_EXPLAIN}</span></dt>*/
/* 				<dd><input type="text" name="delete_reason" id="delete_reason" value="" class="inputbox autowidth" maxlength="120" size="45" /></dd>*/
/* 			</dl>*/
/* 		</fieldset>*/
/* 		<!-- ENDIF -->*/
/* 	*/
/* 		<fieldset class="submit-buttons">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			<button type="submit" name="confirm" value="{L_YES}" class="btn btn-danger"><i class="fi fi-check"></i> {L_YES}</button>*/
/* 			<button type="submit" name="cancel" value="{L_NO}" class="btn btn-default"><i class="fi fi-close"></i> {L_NO}</button>*/
/* 		</fieldset>*/
/* 		*/
/* 	</form>*/
/* 	*/
/* </div>*/
/* <!-- INCLUDE simple_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
