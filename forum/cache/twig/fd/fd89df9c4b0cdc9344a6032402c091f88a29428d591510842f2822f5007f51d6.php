<?php

/* custom/navlinks.html */
class __TwigTemplate_39e0485dcec4485862f40b281c3a0b57bba5d2d11b4253c2cc78fca6b5d01c11 extends Twig_Template
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
        echo "<!-- Forum Index -->
<li class=\"nav-item nav-forum\">
    <a href=\"";
        // line 3
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM");
        echo "</a>
</li>

<!-- FAQ -->
<li class=\"nav-item\">
    <a href=\"";
        // line 8
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a>
</li>";
    }

    public function getTemplateName()
    {
        return "custom/navlinks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  23 => 3,  19 => 1,);
    }
}
/* <!-- Forum Index -->*/
/* <li class="nav-item nav-forum">*/
/*     <a href="{U_INDEX}">{L_FORUM}</a>*/
/* </li>*/
/* */
/* <!-- FAQ -->*/
/* <li class="nav-item">*/
/*     <a href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}">{L_FAQ}</a>*/
/* </li>*/
