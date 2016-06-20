<?php

/* slickpanel/page.html */
class __TwigTemplate_2849d649bd0ede537fe82651626d1a08249fc384101e9aad9d9049d64cce7125 extends Twig_Template
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
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            // line 2
            $value = 1;
            $context['definition']->set('SLICKPANEL_ONPAGE', $value);
            // line 3
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "slickpanel/page.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            $location = "slickpanel/page_inner.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("slickpanel/page_inner.html", "slickpanel/page.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 5
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "slickpanel/page.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "slickpanel/page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  36 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF U_ACP -->*/
/* <!-- DEFINE $SLICKPANEL_ONPAGE = 1 -->*/
/* <!-- INCLUDE overall_header.html -->*/
/* <!-- INCLUDE slickpanel/page_inner.html -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
