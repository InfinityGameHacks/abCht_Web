<?php

/* mcp_front.html */
class __TwigTemplate_bea3ed78c15fff8d70b86dfdc1ccb41ffecffc3515bac426bc60e4fba18fbab6 extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "
";
        // line 4
        if ((isset($context["S_SHOW_UNAPPROVED"]) ? $context["S_SHOW_UNAPPROVED"] : null)) {
            // line 5
            echo "
<form id=\"mcp_queue\" method=\"post\" action=\"";
            // line 6
            echo (isset($context["S_MCP_QUEUE_ACTION"]) ? $context["S_MCP_QUEUE_ACTION"] : null);
            echo "\">

\t<div class=\"st-section\">

\t\t<h3 class=\"st-section__header\">";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("LATEST_UNAPPROVED");
            echo "</h3>
\t\t<div class=\"st-section__subheader\">";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("UNAPPROVED_TOTAL");
            echo "</div>

\t\t";
            // line 13
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "unapproved", array()))) {
                // line 14
                echo "\t\t<ul class=\"itemlist itemlist--mcp itemlist--has-colbar\">
\t\t\t
\t\t\t<li class=\"itemlist__item itemlist__item--colbar\">
\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t<div class=\"item-col-main\">";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div>
\t\t\t\t\t<div class=\"item-col-moderation\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</div>
\t\t\t\t\t<div class=\"item-col-mark\"></div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t
\t\t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "unapproved", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["unapproved"]) {
                    // line 25
                    echo "\t\t\t<li class=\"itemlist__item\">
\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"item-col-main\">
\t\t\t\t\t\t<a href=\"";
                    // line 29
                    echo $this->getAttribute($context["unapproved"], "U_POST_DETAILS", array());
                    echo "\" class=\"item-title\">";
                    echo $this->getAttribute($context["unapproved"], "SUBJECT", array());
                    echo " ";
                    if ($this->getAttribute($context["unapproved"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fi fi-attachment has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOTAL_ATTACHMENTS");
                        echo "\"></i>";
                    }
                    echo "</a>
\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t";
                    // line 31
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["unapproved"], "AUTHOR_FULL", array());
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " <span class=\"timestamp\">";
                    echo $this->getAttribute($context["unapproved"], "POST_TIME", array());
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 33
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        // line 34
                        echo "\t\t\t\t\t\t\t<span class=\"item-col-moderation--inline\">
\t\t\t\t\t\t\t\t";
                        // line 35
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["unapproved"], "TOPIC_TITLE", array());
                        echo "</a> <a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_MCP_TOPIC", array());
                        echo "\" class=\"item-moderation-link\">";
                        echo $this->env->getExtension('phpbb')->lang("MODERATE");
                        echo "</a><br />
\t\t\t\t\t\t\t\t";
                        // line 36
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        if ($this->getAttribute($context["unapproved"], "U_FORUM", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["unapproved"], "U_FORUM", array());
                            echo "\">";
                            echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                            echo "</a>";
                        } else {
                            echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                        }
                        if ($this->getAttribute($context["unapproved"], "U_MCP_FORUM", array())) {
                            echo " <a class=\"item-moderation-link\" href=\"";
                            echo $this->getAttribute($context["unapproved"], "U_MCP_FORUM", array());
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("MODERATE");
                            echo "</a>";
                        }
                        echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"item-col-moderation\">
\t\t\t\t\t\t";
                    // line 42
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["unapproved"], "TOPIC_TITLE", array());
                    echo "</a> <a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_MCP_TOPIC", array());
                    echo "\" class=\"item-moderation-link\">";
                    echo $this->env->getExtension('phpbb')->lang("MODERATE");
                    echo "</a><br />
\t\t\t\t\t\t";
                    // line 43
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if ($this->getAttribute($context["unapproved"], "U_FORUM", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                    }
                    if ($this->getAttribute($context["unapproved"], "U_MCP_FORUM", array())) {
                        echo " <a class=\"item-moderation-link\" href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_MCP_FORUM", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("MODERATE");
                        echo "</a>";
                    }
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"item-col-mark\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                    // line 47
                    echo $this->getAttribute($context["unapproved"], "POST_ID", array());
                    echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unapproved'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t
\t\t</ul>
\t\t";
            }
            // line 56
            echo "\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "

\t";
            // line 58
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "unapproved", array()))) {
                // line 59
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t";
                // line 60
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t
\t\t\t<a href=\"#\" data-marklist='[\"mcp_queue\",\"post_id_list\"]' class=\"marklist-markall btn btn-default\"><i class=\"fi fi-checkbox-multiple-marked\"></i> <span class=\"btn-label\">";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</span></a>
\t\t\t<a href=\"#\" data-marklist='[\"mcp_queue\",\"post_id_list\"]' class=\"marklist-unmarkall btn btn-default\"><i class=\"fi fi-checkbox-multiple-blank-outline\"></i> <span class=\"btn-label\">";
                // line 63
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t
\t\t\t<button class=\"btn btn-success\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 65
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\"><i class=\"fi fi-check\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "</button>
\t\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                // line 66
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\"><i class=\"fi fi-close\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "</button>
\t\t\t
\t\t</fieldset>
\t";
            }
            // line 70
            echo "\t</div>
\t\t</form>
";
        }
        // line 73
        echo "
";
        // line 74
        // line 75
        echo "
";
        // line 76
        if ((isset($context["S_SHOW_REPORTS"]) ? $context["S_SHOW_REPORTS"] : null)) {
            // line 77
            echo "\t<div class=\"st-section\">

\t\t<h3 class=\"st-section__header\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED");
            echo "</h3>
\t\t<div class=\"st-section__subheader\">";
            // line 80
            echo $this->env->getExtension('phpbb')->lang("REPORTS_TOTAL");
            echo "</div>
\t\t";
            // line 81
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "report", array()))) {
                // line 82
                echo "\t\t\t<ul class=\"itemlist itemlist--mcp itemlist--has-colbar\">
\t\t\t\t<li class=\"itemlist__item itemlist__item--colbar\">
\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t<div class=\"item-col-main\">";
                // line 85
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div>
\t\t\t\t\t<div class=\"item-col-moderation\">";
                // line 86
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</div>
\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "report", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 90
                    echo "\t\t\t\t<li class=\"itemlist__item\">
\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t<div class=\"item-col-main\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 93
                    echo $this->getAttribute($context["report"], "U_POST_DETAILS", array());
                    echo "#reports\" class=\"item-title\">";
                    echo $this->getAttribute($context["report"], "SUBJECT", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["report"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fi fi-attachment has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOTAL_ATTACHMENTS");
                        echo "\"></i>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t";
                    // line 95
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["report"], "AUTHOR_FULL", array());
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " <span class=\"timestamp\">";
                    echo $this->getAttribute($context["report"], "POST_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item-col-moderation\">
\t\t\t\t\t\t\t";
                    // line 99
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["report"], "REPORTER_FULL", array());
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " <span class=\"timestamp\">";
                    echo $this->getAttribute($context["report"], "REPORT_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t<div>";
                    // line 100
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["report"], "U_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["report"], "FORUM_NAME", array());
                    echo "</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "\t\t\t</ul>
\t\t";
            }
            // line 107
            echo "
\t</div>
";
        }
        // line 110
        echo "
";
        // line 111
        // line 112
        echo "
";
        // line 113
        if ((isset($context["S_SHOW_PM_REPORTS"]) ? $context["S_SHOW_PM_REPORTS"] : null)) {
            // line 114
            echo "\t<div class=\"st-section\">

\t\t<h3 class=\"st-section__header\">";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED_PMS");
            echo "</h3>
\t\t<p class=\"st-section__subheader\">";
            // line 117
            echo $this->env->getExtension('phpbb')->lang("PM_REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 119
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_report", array()))) {
                // line 120
                echo "\t\t\t<ul class=\" topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 123
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 124
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t
\t\t\t<ul class=\"st-itemlist topiclist mplist\">

\t\t\t";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_report", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pm_report"]) {
                    // line 132
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["pm_report"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 136
                    echo $this->getAttribute($context["pm_report"], "U_PM_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["pm_report"], "PM_SUBJECT", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["pm_report"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fi fi-attachment has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOTAL_ATTACHMENTS");
                        echo "\"></i>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t<span>";
                    // line 137
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "PM_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["pm_report"], "PM_TIME", array());
                    echo "</span><br />
\t\t\t\t\t\t\t<span>";
                    // line 138
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "RECIPIENTS", array());
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 142
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORTER_FULL", array());
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORT_TIME", array());
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "\t\t\t</ul>
\t\t";
            }
            // line 149
            echo "\t</div>
";
        }
        // line 151
        echo "
";
        // line 152
        // line 153
        echo "
";
        // line 154
        if ((isset($context["S_SHOW_LOGS"]) ? $context["S_SHOW_LOGS"] : null)) {
            // line 155
            echo "\t<div class=\"st-section\">

\t\t<h3 class=\"st-section__header\">";
            // line 157
            echo $this->env->getExtension('phpbb')->lang("LATEST_LOGS");
            echo "</h3>

\t\t<table class=\"table1\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\">";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("IP");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 166
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 167
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 172
                echo "\t\t<tr>
\t\t\t<td>";
                // line 173
                echo $this->getAttribute($context["log"], "ACTION", array());
                echo "</td>
\t\t\t<td><span>";
                // line 174
                echo $this->getAttribute($context["log"], "USERNAME", array());
                echo "</span></td>
\t\t\t<td><span>";
                // line 175
                echo $this->getAttribute($context["log"], "IP", array());
                echo "</span></td>
\t\t\t<td><span>";
                // line 176
                if ($this->getAttribute($context["log"], "U_VIEW_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["log"], "U_VIEW_TOPIC", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 177
                if ($this->getAttribute($context["log"], "U_VIEWLOGS", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["log"], "U_VIEWLOGS", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span class=\"timestamp\">";
                // line 178
                echo $this->getAttribute($context["log"], "TIME", array());
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 181
                echo "\t\t<tr>
\t\t\t<td colspan=\"6\">";
                // line 182
                echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t</tbody>
\t\t</table>

\t</div>
";
        }
        // line 190
        echo "
";
        // line 191
        // line 192
        echo "
";
        // line 193
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_front.html", 193)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 193,  608 => 192,  607 => 191,  604 => 190,  597 => 185,  588 => 182,  585 => 181,  577 => 178,  567 => 177,  555 => 176,  551 => 175,  547 => 174,  543 => 173,  540 => 172,  535 => 171,  528 => 167,  524 => 166,  520 => 165,  516 => 164,  512 => 163,  508 => 162,  500 => 157,  496 => 155,  494 => 154,  491 => 153,  490 => 152,  487 => 151,  483 => 149,  479 => 147,  460 => 142,  451 => 138,  443 => 137,  431 => 136,  419 => 132,  415 => 131,  405 => 124,  401 => 123,  396 => 120,  394 => 119,  389 => 117,  385 => 116,  381 => 114,  379 => 113,  376 => 112,  375 => 111,  372 => 110,  367 => 107,  363 => 105,  347 => 100,  336 => 99,  322 => 95,  309 => 93,  304 => 90,  300 => 89,  292 => 86,  288 => 85,  283 => 82,  281 => 81,  277 => 80,  273 => 79,  269 => 77,  267 => 76,  264 => 75,  263 => 74,  260 => 73,  255 => 70,  246 => 66,  240 => 65,  235 => 63,  231 => 62,  226 => 60,  223 => 59,  221 => 58,  215 => 56,  210 => 53,  198 => 47,  173 => 43,  160 => 42,  155 => 39,  131 => 36,  118 => 35,  115 => 34,  113 => 33,  101 => 31,  88 => 29,  82 => 25,  78 => 24,  68 => 19,  64 => 18,  58 => 14,  56 => 13,  51 => 11,  47 => 10,  40 => 6,  37 => 5,  35 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* <!-- EVENT mcp_front_latest_unapproved_before -->*/
/* */
/* <!-- IF S_SHOW_UNAPPROVED -->*/
/* */
/* <form id="mcp_queue" method="post" action="{S_MCP_QUEUE_ACTION}">*/
/* */
/* 	<div class="st-section">*/
/* */
/* 		<h3 class="st-section__header">{L_LATEST_UNAPPROVED}</h3>*/
/* 		<div class="st-section__subheader">{L_UNAPPROVED_TOTAL}</div>*/
/* */
/* 		<!-- IF .unapproved -->*/
/* 		<ul class="itemlist itemlist--mcp itemlist--has-colbar">*/
/* 			*/
/* 			<li class="itemlist__item itemlist__item--colbar">*/
/* 				<div class="item-inner">*/
/* 					<div class="item-col-main">{L_VIEW_DETAILS}</div>*/
/* 					<div class="item-col-moderation">{L_TOPIC} &amp; {L_FORUM}</div>*/
/* 					<div class="item-col-mark"></div>*/
/* 				</div>*/
/* 			</li>*/
/* 			*/
/* 			<!-- BEGIN unapproved -->*/
/* 			<li class="itemlist__item">*/
/* 				<div class="item-inner">*/
/* 					*/
/* 					<div class="item-col-main">*/
/* 						<a href="{unapproved.U_POST_DETAILS}" class="item-title">{unapproved.SUBJECT} <!-- IF unapproved.ATTACH_ICON_IMG --><i class="fi fi-attachment has-tooltip" title="{L_TOTAL_ATTACHMENTS}"></i><!-- ENDIF --></a>*/
/* 						<div class="item-info">*/
/* 							{L_POSTED} {L_POST_BY_AUTHOR} {unapproved.AUTHOR_FULL}{L_COMMA_SEPARATOR} <span class="timestamp">{unapproved.POST_TIME}</span>*/
/* 						</div>*/
/* 						<!-- IF not S_IS_BOT -->*/
/* 							<span class="item-col-moderation--inline">*/
/* 								{L_TOPIC}{L_COLON} <a href="{unapproved.U_TOPIC}">{unapproved.TOPIC_TITLE}</a> <a href="{unapproved.U_MCP_TOPIC}" class="item-moderation-link">{L_MODERATE}</a><br />*/
/* 								{L_FORUM}{L_COLON} <!-- IF unapproved.U_FORUM --><a href="{unapproved.U_FORUM}">{unapproved.FORUM_NAME}</a><!-- ELSE -->{unapproved.FORUM_NAME}<!-- ENDIF --><!-- IF unapproved.U_MCP_FORUM --> <a class="item-moderation-link" href="{unapproved.U_MCP_FORUM}">{L_MODERATE}</a><!-- ENDIF --></span>*/
/* 							</span>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 					*/
/* 					<div class="item-col-moderation">*/
/* 						{L_TOPIC}{L_COLON} <a href="{unapproved.U_TOPIC}">{unapproved.TOPIC_TITLE}</a> <a href="{unapproved.U_MCP_TOPIC}" class="item-moderation-link">{L_MODERATE}</a><br />*/
/* 						{L_FORUM}{L_COLON} <!-- IF unapproved.U_FORUM --><a href="{unapproved.U_FORUM}">{unapproved.FORUM_NAME}</a><!-- ELSE -->{unapproved.FORUM_NAME}<!-- ENDIF --><!-- IF unapproved.U_MCP_FORUM --> <a class="item-moderation-link" href="{unapproved.U_MCP_FORUM}">{L_MODERATE}</a><!-- ENDIF --></span>*/
/* 					</div>*/
/* 					*/
/* 					<div class="item-col-mark">*/
/* 						<input type="checkbox" name="post_id_list[]" value="{unapproved.POST_ID}" />*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</li>*/
/* 			<!-- END unapproved -->*/
/* 			*/
/* 		</ul>*/
/* 		<!-- ENDIF -->*/
/* 	{S_FORM_TOKEN}*/
/* */
/* 	<!-- IF .unapproved -->*/
/* 		<fieldset class="display-actions">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			*/
/* 			<a href="#" data-marklist='["mcp_queue","post_id_list"]' class="marklist-markall btn btn-default"><i class="fi fi-checkbox-multiple-marked"></i> <span class="btn-label">{L_MARK_ALL}</span></a>*/
/* 			<a href="#" data-marklist='["mcp_queue","post_id_list"]' class="marklist-unmarkall btn btn-default"><i class="fi fi-checkbox-multiple-blank-outline"></i> <span class="btn-label">{L_UNMARK_ALL}</a>*/
/* 		*/
/* 			<button class="btn btn-success" type="submit" name="action[approve]" value="{L_APPROVE}"><i class="fi fi-check"></i> {L_APPROVE}</button>*/
/* 			<button class="btn btn-default" type="submit" name="action[disapprove]" value="{L_DISAPPROVE}"><i class="fi fi-close"></i> {L_DISAPPROVE}</button>*/
/* 			*/
/* 		</fieldset>*/
/* 	<!-- ENDIF -->*/
/* 	</div>*/
/* 		</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_reported_before -->*/
/* */
/* <!-- IF S_SHOW_REPORTS -->*/
/* 	<div class="st-section">*/
/* */
/* 		<h3 class="st-section__header">{L_LATEST_REPORTED}</h3>*/
/* 		<div class="st-section__subheader">{L_REPORTS_TOTAL}</div>*/
/* 		<!-- IF .report -->*/
/* 			<ul class="itemlist itemlist--mcp itemlist--has-colbar">*/
/* 				<li class="itemlist__item itemlist__item--colbar">*/
/* 				<div class="item-inner">*/
/* 					<div class="item-col-main">{L_VIEW_DETAILS}</div>*/
/* 					<div class="item-col-moderation">{L_REPORTER} &amp; {L_FORUM}</div>*/
/* 				</div>*/
/* 				</li>*/
/* 			<!-- BEGIN report -->*/
/* 				<li class="itemlist__item">*/
/* 					<div class="item-inner">*/
/* 						<div class="item-col-main">*/
/* 							<a href="{report.U_POST_DETAILS}#reports" class="item-title">{report.SUBJECT}</a> <!-- IF report.ATTACH_ICON_IMG --><i class="fi fi-attachment has-tooltip" title="{L_TOTAL_ATTACHMENTS}"></i><!-- ENDIF --><br />*/
/* 							<div class="item-info">*/
/* 								{L_POSTED} {L_POST_BY_AUTHOR} {report.AUTHOR_FULL}{L_COMMA_SEPARATOR} <span class="timestamp">{report.POST_TIME}</span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="item-col-moderation">*/
/* 							{L_REPORTED} {L_POST_BY_AUTHOR} {report.REPORTER_FULL}{L_COMMA_SEPARATOR} <span class="timestamp">{report.REPORT_TIME}</span>*/
/* 							<div>{L_FORUM}{L_COLON} <a href="{report.U_FORUM}">{report.FORUM_NAME}</a></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 			<!-- END report -->*/
/* 			</ul>*/
/* 		<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_reported_pms_before -->*/
/* */
/* <!-- IF S_SHOW_PM_REPORTS -->*/
/* 	<div class="st-section">*/
/* */
/* 		<h3 class="st-section__header">{L_LATEST_REPORTED_PMS}</h3>*/
/* 		<p class="st-section__subheader">{L_PM_REPORTS_TOTAL}</p>*/
/* */
/* 		<!-- IF .pm_report -->*/
/* 			<ul class=" topiclist two-long-columns">*/
/* 				<li class="header">*/
/* 					<dl>*/
/* 						<dt><div class="list-inner">{L_VIEW_DETAILS}</div></dt>*/
/* 						<dd class="moderation"><span>{L_REPORTER}</span></dd>*/
/* 					</dl>*/
/* 				</li>*/
/* 			</ul>*/
/* 			*/
/* 			<ul class="st-itemlist topiclist mplist">*/
/* */
/* 			<!-- BEGIN pm_report -->*/
/* 			<li class="row<!-- IF pm_report.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<div class="list-inner">*/
/* 							<a href="{pm_report.U_PM_DETAILS}" class="topictitle">{pm_report.PM_SUBJECT}</a> <!-- IF pm_report.ATTACH_ICON_IMG --><i class="fi fi-attachment has-tooltip" title="{L_TOTAL_ATTACHMENTS}"></i><!-- ENDIF --><br />*/
/* 							<span>{L_MESSAGE_BY_AUTHOR} {pm_report.PM_AUTHOR_FULL} &raquo; {pm_report.PM_TIME}</span><br />*/
/* 							<span>{L_MESSAGE_TO} {pm_report.RECIPIENTS}</span>*/
/* 						</div>*/
/* 					</dt>*/
/* 					<dd class="moderation">*/
/* 						<span>{L_REPORTED} {L_POST_BY_AUTHOR} {pm_report.REPORTER_FULL} {L_REPORTED_ON_DATE} {pm_report.REPORT_TIME}</span>*/
/* 					</dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 			<!-- END pm_report -->*/
/* 			</ul>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_logs_before -->*/
/* */
/* <!-- IF S_SHOW_LOGS -->*/
/* 	<div class="st-section">*/
/* */
/* 		<h3 class="st-section__header">{L_LATEST_LOGS}</h3>*/
/* */
/* 		<table class="table1">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th class="name">{L_ACTION}</th>*/
/* 			<th class="name">{L_USERNAME}</th>*/
/* 			<th class="name">{L_IP}</th>*/
/* 			<th class="name">{L_VIEW_TOPIC}</th>*/
/* 			<th class="name">{L_VIEW_TOPIC_LOGS}</th>*/
/* 			<th class="name">{L_TIME}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 	<!-- BEGIN log -->*/
/* 		<tr>*/
/* 			<td>{log.ACTION}</td>*/
/* 			<td><span>{log.USERNAME}</span></td>*/
/* 			<td><span>{log.IP}</span></td>*/
/* 			<td><span><!-- IF log.U_VIEW_TOPIC --><a href="{log.U_VIEW_TOPIC}" title="{L_VIEW_TOPIC}">{L_VIEW_TOPIC}</a><!-- ENDIF -->&nbsp;</span></td>*/
/* 			<td><span><!-- IF log.U_VIEWLOGS --><a href="{log.U_VIEWLOGS}">{L_VIEW_TOPIC_LOGS}</a><!-- ENDIF -->&nbsp;</span></td>*/
/* 			<td><span class="timestamp">{log.TIME}</span></td>*/
/* 		</tr>*/
/* 	<!-- BEGINELSE -->*/
/* 		<tr>*/
/* 			<td colspan="6">{L_NO_ENTRIES}</td>*/
/* 		</tr>*/
/* 	<!-- END log -->*/
/* 		</tbody>*/
/* 		</table>*/
/* */
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT mcp_front_latest_logs_after -->*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
