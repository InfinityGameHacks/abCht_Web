<?php

/* mcp_queue.html */
class __TwigTemplate_c7498d5195d6d407404655d3397b80326b0be5b2641139eaf673b6362d9749f2 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_queue.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"mcp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">

<fieldset class=\"forum-selection\">
\t<select name=\"f\" id=\"fo\">";
        // line 6
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select>
\t<button type=\"submit\" name=\"sort\" value=\"";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"btn btn-default\"><i class=\"fi fi-arrow-";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo "\"></i></button>
\t";
        // line 8
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

<h2>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>
<p>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>

\t";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()))) {
            // line 15
            echo "\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"right-side\">
\t\t\t\t";
            // line 17
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_queue.html", 17)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 18
            echo "\t\t\t</div>
\t\t</div>

\t\t<h3 class=\"st-section__header\">";
            // line 21
            echo (isset($context["TOTAL"]) ? $context["TOTAL"] : null);
            echo "</h3>
\t\t
\t\t<ul class=\"itemlist itemlist--mcp itemlist--has-colbar\">
\t\t\t<li class=\"itemlist__item itemlist__item--colbar\">
\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t<div class=\"item-col-main\">";
            // line 26
            if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST");
            }
            echo "</div>
\t\t\t\t\t<div class=\"item-col-moderation\">";
            // line 27
            if ( !(isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " &amp; ";
            }
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</div>
\t\t\t\t\t<div class=\"item-col-mark\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</div>
\t\t\t\t</div>
\t\t\t</li>

\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 33
                echo "
\t\t";
                // line 34
                if ($this->getAttribute($context["postrow"], "S_DELETED_TOPIC", array())) {
                    // line 35
                    echo "\t\t\t<li class=\"itemlist__item itemlist__item--deleted\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                    echo "</li>
\t\t";
                } else {
                    // line 37
                    echo "
\t\t\t<li class=\"itemlist__item\">
\t\t\t\t<div class=\"item-inner\">
\t\t\t\t
\t\t\t\t\t<div class=\"item-col-main\">
\t\t\t\t\t\t<a href=\"";
                    // line 42
                    echo $this->getAttribute($context["postrow"], "U_VIEW_DETAILS", array());
                    echo "\" class=\"item-title\">";
                    echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["postrow"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fi fi-attachment has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOTAL_ATTACHMENTS");
                        echo "\"></i>";
                    }
                    // line 43
                    echo "\t\t\t\t\t\t<div class=\"item-info\">";
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " <span class=\"timestamp\">";
                    echo $this->getAttribute($context["postrow"], "POST_TIME", array());
                    echo "</span></div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 45
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        // line 46
                        echo "\t\t\t\t\t\t<div class=\"item-col-moderation--inline\">
\t\t\t\t\t\t\t";
                        // line 47
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "TOPIC_TITLE", array());
                        echo "</a> <br />
\t\t\t\t\t\t\t";
                        // line 48
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_VIEWFORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"item-col-moderation\">
\t\t\t\t\t\t";
                    // line 54
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "TOPIC_TITLE", array());
                    echo "</a> <br />
\t\t\t\t\t\t";
                    // line 55
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"item-col-mark\">
\t\t\t\t\t\t";
                    // line 59
                    if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                        // line 60
                        echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo $this->getAttribute($context["postrow"], "TOPIC_ID", array());
                        echo "\" />
\t\t\t\t\t\t";
                    } else {
                        // line 62
                        echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                        echo $this->getAttribute($context["postrow"], "POST_ID", array());
                        echo "\" />
\t\t\t\t\t\t";
                    }
                    // line 64
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</li>
\t\t";
                }
                // line 69
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t</ul>

\t\t<fieldset class=\"display-options\">
\t\t\t<label>";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t\t<label>";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label><label>";
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "</label>
\t\t\t";
            // line 75
            if ((isset($context["TOPIC_ID"]) ? $context["TOPIC_ID"] : null)) {
                echo "<label><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"";
                echo (isset($context["TOPIC_ID"]) ? $context["TOPIC_ID"] : null);
                echo "\" checked=\"checked\" />&nbsp; <strong>";
                echo $this->env->getExtension('phpbb')->lang("ONLY_TOPIC");
                echo "</strong></label>";
            }
            // line 76
            echo "\t\t\t<button type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"btn btn-link\"><i class=\"fi fi-arrow-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo "\"></i></button>
\t\t</fieldset>

\t\t
\t<div class=\"action-bar bottom\">
\t\t<div class=\"right-side\">
\t\t\t";
            // line 82
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_queue.html", 82)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 83
            echo "\t\t</div>
\t</div>

\t";
        } else {
            // line 87
            echo "\t\t<p class=\"st-panel notopics\"><strong>
\t\t\t";
            // line 88
            if ((isset($context["S_RESTORE"]) ? $context["S_RESTORE"] : null)) {
                // line 89
                echo "\t\t\t\t";
                if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_DELETED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_DELETED");
                }
                // line 90
                echo "\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t";
                if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_QUEUE");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_QUEUE");
                }
                // line 92
                echo "\t\t\t";
            }
            // line 93
            echo "\t\t</strong></p>
\t";
        }
        // line 95
        echo "\t
";
        // line 96
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()))) {
            // line 97
            echo "\t<fieldset class=\"display-actions\">
\t\t
\t\t";
            // line 99
            if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                // line 100
                echo "\t\t<a href=\"#\" data-marklist='[\"mcp\",\"topic_id_list\"]' class=\"marklist-markall btn btn-default\"><i class=\"fi fi-checkbox-multiple-marked\"></i> <span class=\"btn-label\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</span></a>
\t\t<a href=\"#\" data-marklist='[\"mcp\",\"topic_id_list\"]' class=\"marklist-unmarkall btn btn-default\"><i class=\"fi fi-checkbox-multiple-blank-outline\"></i> <span class=\"btn-label\">";
                // line 101
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t";
            } else {
                // line 103
                echo "\t\t<a href=\"#\" data-marklist='[\"mcp\",\"post_id_list\"]' class=\"marklist-markall btn btn-default\"><i class=\"fi fi-checkbox-multiple-marked\"></i> <span class=\"btn-label\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</span></a>
\t\t<a href=\"#\" data-marklist='[\"mcp\",\"post_id_list\"]' class=\"marklist-unmarkall btn btn-default\"><i class=\"fi fi-checkbox-multiple-blank-outline\"></i> <span class=\"btn-label\">";
                // line 104
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t";
            }
            // line 106
            echo "\t\t
\t\t";
            // line 107
            if ((isset($context["S_RESTORE"]) ? $context["S_RESTORE"] : null)) {
                // line 108
                echo "\t\t<button class=\"btn btn-danger\" type=\"submit\" name=\"action[delete]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\"><i class=\"fi fi-delete\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</button>
\t\t<button class=\"btn btn-success\" type=\"submit\" name=\"action[restore]\" value=\"";
                // line 109
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\"><i class=\"fi fi-reload\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "</button>
\t\t";
            } else {
                // line 111
                echo "\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\"><i class=\"fi fi-close\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "</button>
\t\t<button class=\"btn btn-success\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 112
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\"><i class=\"fi fi-check\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "</button>
\t\t";
            }
            // line 114
            echo "\t</fieldset>
";
        }
        // line 116
        echo "</form>

";
        // line 118
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_queue.html", 118)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_queue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 118,  399 => 116,  395 => 114,  388 => 112,  381 => 111,  374 => 109,  367 => 108,  365 => 107,  362 => 106,  357 => 104,  352 => 103,  347 => 101,  342 => 100,  340 => 99,  336 => 97,  334 => 96,  331 => 95,  327 => 93,  324 => 92,  317 => 91,  314 => 90,  307 => 89,  305 => 88,  302 => 87,  296 => 83,  284 => 82,  272 => 76,  264 => 75,  256 => 74,  249 => 73,  244 => 70,  238 => 69,  231 => 64,  225 => 62,  219 => 60,  217 => 59,  205 => 55,  196 => 54,  191 => 51,  180 => 48,  171 => 47,  168 => 46,  166 => 45,  153 => 43,  143 => 42,  136 => 37,  130 => 35,  128 => 34,  125 => 33,  121 => 32,  114 => 28,  106 => 27,  98 => 26,  90 => 21,  85 => 18,  73 => 17,  69 => 15,  67 => 14,  62 => 12,  58 => 11,  52 => 8,  44 => 7,  40 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <form id="mcp" method="post" action="{S_MCP_ACTION}">*/
/* */
/* <fieldset class="forum-selection">*/
/* 	<select name="f" id="fo">{S_FORUM_OPTIONS}</select>*/
/* 	<button type="submit" name="sort" value="{L_GO}" title="{L_GO}" class="btn btn-default"><i class="fi fi-arrow-{S_CONTENT_FLOW_END}"></i></button>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* <p>{L_EXPLAIN}</p>*/
/* */
/* 	<!-- IF .postrow -->*/
/* 		<div class="action-bar top">*/
/* 			<div class="right-side">*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<h3 class="st-section__header">{TOTAL}</h3>*/
/* 		*/
/* 		<ul class="itemlist itemlist--mcp itemlist--has-colbar">*/
/* 			<li class="itemlist__item itemlist__item--colbar">*/
/* 				<div class="item-inner">*/
/* 					<div class="item-col-main"><!-- IF S_TOPICS -->{L_TOPIC}<!-- ELSE -->{L_POST}<!-- ENDIF --></div>*/
/* 					<div class="item-col-moderation"><!-- IF not S_TOPICS -->{L_TOPIC} &amp; <!-- ENDIF -->{L_FORUM}</div>*/
/* 					<div class="item-col-mark">{L_MARK}</div>*/
/* 				</div>*/
/* 			</li>*/
/* */
/* 		<!-- BEGIN postrow -->*/
/* */
/* 		<!-- IF postrow.S_DELETED_TOPIC -->*/
/* 			<li class="itemlist__item itemlist__item--deleted">{L_DELETED_TOPIC}</li>*/
/* 		<!-- ELSE -->*/
/* */
/* 			<li class="itemlist__item">*/
/* 				<div class="item-inner">*/
/* 				*/
/* 					<div class="item-col-main">*/
/* 						<a href="{postrow.U_VIEW_DETAILS}" class="item-title">{postrow.POST_SUBJECT}</a> <!-- IF postrow.ATTACH_ICON_IMG --><i class="fi fi-attachment has-tooltip" title="{L_TOTAL_ATTACHMENTS}"></i><!-- ENDIF -->*/
/* 						<div class="item-info">{L_POSTED} {L_POST_BY_AUTHOR} {postrow.POST_AUTHOR_FULL}{L_COMMA_SEPARATOR} <span class="timestamp">{postrow.POST_TIME}</span></div>*/
/* 						*/
/* 						<!-- IF not S_IS_BOT -->*/
/* 						<div class="item-col-moderation--inline">*/
/* 							{L_TOPIC}{L_COLON} <a href="{postrow.U_TOPIC}">{postrow.TOPIC_TITLE}</a> <br />*/
/* 							{L_FORUM}{L_COLON} <a href="{postrow.U_VIEWFORUM}">{postrow.FORUM_NAME}</a>*/
/* 						</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 					*/
/* 					<div class="item-col-moderation">*/
/* 						{L_TOPIC}{L_COLON} <a href="{postrow.U_TOPIC}">{postrow.TOPIC_TITLE}</a> <br />*/
/* 						{L_FORUM}{L_COLON} <a href="{postrow.U_VIEWFORUM}">{postrow.FORUM_NAME}</a>*/
/* 					</div>*/
/* 					*/
/* 					<div class="item-col-mark">*/
/* 						<!-- IF S_TOPICS -->*/
/* 							<input type="checkbox" name="topic_id_list[]" value="{postrow.TOPIC_ID}" />*/
/* 						<!-- ELSE -->*/
/* 							<input type="checkbox" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- END postrow -->*/
/* 		</ul>*/
/* */
/* 		<fieldset class="display-options">*/
/* 			<label>{L_DISPLAY_POSTS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 			<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label><label>{S_SELECT_SORT_DIR}</label>*/
/* 			<!-- IF TOPIC_ID --><label><input type="checkbox" class="radio" name="t" value="{TOPIC_ID}" checked="checked" />&nbsp; <strong>{L_ONLY_TOPIC}</strong></label><!-- ENDIF -->*/
/* 			<button type="submit" name="sort" value="{L_GO}" class="btn btn-link"><i class="fi fi-arrow-{S_CONTENT_FLOW_END}"></i></button>*/
/* 		</fieldset>*/
/* */
/* 		*/
/* 	<div class="action-bar bottom">*/
/* 		<div class="right-side">*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- ELSE -->*/
/* 		<p class="st-panel notopics"><strong>*/
/* 			<!-- IF S_RESTORE -->*/
/* 				<!-- IF S_TOPICS -->{L_NO_TOPICS_DELETED}<!-- ELSE -->{L_NO_POSTS_DELETED}<!-- ENDIF -->*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF S_TOPICS -->{L_NO_TOPICS_QUEUE}<!-- ELSE -->{L_NO_POSTS_QUEUE}<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</strong></p>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* <!-- IF .postrow -->*/
/* 	<fieldset class="display-actions">*/
/* 		*/
/* 		<!-- IF S_TOPICS -->*/
/* 		<a href="#" data-marklist='["mcp","topic_id_list"]' class="marklist-markall btn btn-default"><i class="fi fi-checkbox-multiple-marked"></i> <span class="btn-label">{L_MARK_ALL}</span></a>*/
/* 		<a href="#" data-marklist='["mcp","topic_id_list"]' class="marklist-unmarkall btn btn-default"><i class="fi fi-checkbox-multiple-blank-outline"></i> <span class="btn-label">{L_UNMARK_ALL}</a>*/
/* 		<!-- ELSE -->*/
/* 		<a href="#" data-marklist='["mcp","post_id_list"]' class="marklist-markall btn btn-default"><i class="fi fi-checkbox-multiple-marked"></i> <span class="btn-label">{L_MARK_ALL}</span></a>*/
/* 		<a href="#" data-marklist='["mcp","post_id_list"]' class="marklist-unmarkall btn btn-default"><i class="fi fi-checkbox-multiple-blank-outline"></i> <span class="btn-label">{L_UNMARK_ALL}</a>*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		<!-- IF S_RESTORE -->*/
/* 		<button class="btn btn-danger" type="submit" name="action[delete]" value="{L_DELETE}"><i class="fi fi-delete"></i> {L_DELETE}</button>*/
/* 		<button class="btn btn-success" type="submit" name="action[restore]" value="{L_RESTORE}"><i class="fi fi-reload"></i> {L_RESTORE}</button>*/
/* 		<!-- ELSE -->*/
/* 		<button class="btn btn-default" type="submit" name="action[disapprove]" value="{L_DISAPPROVE}"><i class="fi fi-close"></i> {L_DISAPPROVE}</button>*/
/* 		<button class="btn btn-success" type="submit" name="action[approve]" value="{L_APPROVE}"><i class="fi fi-check"></i> {L_APPROVE}</button>*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* </form>*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
