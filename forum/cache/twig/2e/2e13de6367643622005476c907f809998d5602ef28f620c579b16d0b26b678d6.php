<?php

/* mcp_header.html */
class __TwigTemplate_5d8e4564dda38d614f0cd93d515e73a4553713adbbd9b44546f96a7de0a807c7 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"page-header hidden\">
<h2 class=\"page-title\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("MCP");
        echo "</h2>
</div>

<div id=\"tabs\">
\t<ul>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 9
            echo "\t\t<li class=\"tab";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["l_block1"], "U_TITLE", array());
            echo "\">";
            echo $this->getAttribute($context["l_block1"], "L_TITLE", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>
</div>

<div id=\"cp-box\">
\t<div class=\"inner\">

\t<div id=\"cp-menu\">
\t\t<div id=\"cp-navigation\" role=\"navigation\">
\t\t\t<ul class=\"cp-nav-list\">
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 21
            echo "\t\t\t";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                // line 22
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block1"], "l_block2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 23
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["l_block2"], "S_SELECTED", array())) {
                        // line 24
                        echo "\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", array())) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 26
                        echo "\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", array())) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 28
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "\t\t\t";
            }
            // line 30
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div id=\"cp-main\" class=\"mcp-main cp-main panel-container\">
\t\t";
        // line 36
        if ((isset($context["MESSAGE"]) ? $context["MESSAGE"] : null)) {
            // line 37
            echo "\t\t<div class=\"content\">
\t\t\t<h2 class=\"message-title\">";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 39
            echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
            echo "</p>
\t\t\t<p>";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "return_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                echo $this->getAttribute($context["return_links"], "MESSAGE_LINK", array());
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 40,  144 => 39,  140 => 38,  137 => 37,  135 => 36,  128 => 31,  122 => 30,  119 => 29,  113 => 28,  100 => 26,  87 => 24,  84 => 23,  79 => 22,  76 => 21,  72 => 20,  61 => 11,  46 => 9,  42 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <div class="page-header hidden">*/
/* <h2 class="page-title">{L_MCP}</h2>*/
/* </div>*/
/* */
/* <div id="tabs">*/
/* 	<ul>*/
/* 		<!-- BEGIN l_block1 -->*/
/* 		<li class="tab<!-- IF l_block1.S_SELECTED --> activetab<!-- ENDIF -->"><a href="{l_block1.U_TITLE}">{l_block1.L_TITLE}</a></li>*/
/* 		<!-- END l_block1 -->*/
/* 	</ul>*/
/* </div>*/
/* */
/* <div id="cp-box">*/
/* 	<div class="inner">*/
/* */
/* 	<div id="cp-menu">*/
/* 		<div id="cp-navigation" role="navigation">*/
/* 			<ul class="cp-nav-list">*/
/* 			<!-- BEGIN l_block1 -->*/
/* 			<!-- IF l_block1.S_SELECTED -->*/
/* 				<!-- BEGIN l_block2 -->*/
/* 				<!-- IF l_block1.l_block2.S_SELECTED -->*/
/* 				<li id="active-subsection"><a href="{l_block1.l_block2.U_TITLE}"><span>{l_block1.l_block2.L_TITLE}<!-- IF l_block1.l_block2.ADD_ITEM --> ({l_block1.l_block2.ADD_ITEM})<!-- ENDIF --></span></a></li>*/
/* 				<!-- ELSE -->*/
/* 				<li><a href="{l_block1.l_block2.U_TITLE}"><span>{l_block1.l_block2.L_TITLE}<!-- IF l_block1.l_block2.ADD_ITEM --> ({l_block1.l_block2.ADD_ITEM})<!-- ENDIF --></span></a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- END l_block2 -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- END l_block1 -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="cp-main" class="mcp-main cp-main panel-container">*/
/* 		<!-- IF MESSAGE -->*/
/* 		<div class="content">*/
/* 			<h2 class="message-title">{L_MESSAGE}</h2>*/
/* 			<p class="error">{MESSAGE}</p>*/
/* 			<p><!-- BEGIN return_links -->{return_links.MESSAGE_LINK}<br /><br /><!-- END return_links --></p>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
