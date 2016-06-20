<?php

/* slickpanel/typography.html */
class __TwigTemplate_dd720d6c85dd8c433dd5053a88a31065442da322da4299957ef7eb886aa7e9ef extends Twig_Template
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
        echo "<!-- #SETTING: Body font-family -->
<div class=\"slickpanel-section__setting\">
  <div class=\"slickpanel-section__setting__label\">
    <strong>Body font</strong>
    <p>Font stack used for most of the UI</p>
  </div>
  <div class=\"slickpanel-section__setting__input\">
    <input  class=\"form-control\" type=\"text\"
        name=\"ST_type__body_fontfamily\"
        data-manipulate='[\"body\",\"css\",\"font-family\"]'
        data-default='-apple-system, \"Helvetica Neue\", \"Roboto\", \"Segoe UI\", \"Helvetica\", sans-serif' value=\"";
        // line 11
        echo (isset($context["ST_type__body_fontfamily"]) ? $context["ST_type__body_fontfamily"] : null);
        echo "\"
        />
  </div>
</div>

<!-- #SETTING: Navbar font-family -->
<div class=\"slickpanel-section__setting\">
  <div class=\"slickpanel-section__setting__label\">
    <strong>Navbar font</strong>
    <p>Font stack used for navigation items. (only labels. Body font is used in dropdown)</p>
  </div>
  <div class=\"slickpanel-section__setting__input\">
    <input  class=\"form-control\" type=\"text\"
        name=\"ST_type__navbar_fontfamily\"
        data-manipulate='[\".navigation > li > a\",\"css\",\"font-family\"]'
        data-default='inherit' value=\"";
        // line 26
        echo (isset($context["ST_type__navbar_fontfamily"]) ? $context["ST_type__navbar_fontfamily"] : null);
        echo "\"
        />
  </div>
</div>

<!-- #SETTING: Content font -->
<div class=\"slickpanel-section__setting\">
  <div class=\"slickpanel-section__setting__label\">
    <strong>Content font</strong>
    <p>Font stack for user posts and alerts. Before you use an external font here, make sure it renders sharp and is easy to read.</p>
  </div>
  <div class=\"slickpanel-section__setting__input\">
    <input  class=\"form-control\" type=\"text\"
        name=\"ST_type__content_fontfamily\"
        data-manipulate='[\".alert, textarea, .postbody .content\",\"css\",\"font-family\"]'
        data-default='-apple-system, \"Helvetica Neue\", \"Helvetica\", sans-serif' value=\"";
        // line 41
        echo (isset($context["ST_type__content_fontfamily"]) ? $context["ST_type__content_fontfamily"] : null);
        echo "\"
        />
  </div>
</div>

<!-- #SETTING: Content font size -->
<div class=\"slickpanel-section__setting\">
  <div class=\"slickpanel-section__setting__label\">
    <strong>Content font size</strong>
    <p>Choose a comfortable font-size for content. (in px)</p>
  </div>
  <div class=\"slickpanel-section__setting__input\">
    <input  class=\"form-control\" type=\"number\"
        name=\"ST_type__content_fontsize\"
        data-manipulate='[\".alert, textarea, .postbody .content\",\"css\",\"font-size\",\"px\"]'
        data-default='14' value=\"";
        // line 56
        echo (isset($context["ST_type__content_fontsize"]) ? $context["ST_type__content_fontsize"] : null);
        echo "\"
        />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "slickpanel/typography.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 56,  67 => 41,  49 => 26,  31 => 11,  19 => 1,);
    }
}
/* <!-- #SETTING: Body font-family -->*/
/* <div class="slickpanel-section__setting">*/
/*   <div class="slickpanel-section__setting__label">*/
/*     <strong>Body font</strong>*/
/*     <p>Font stack used for most of the UI</p>*/
/*   </div>*/
/*   <div class="slickpanel-section__setting__input">*/
/*     <input  class="form-control" type="text"*/
/*         name="ST_type__body_fontfamily"*/
/*         data-manipulate='["body","css","font-family"]'*/
/*         data-default='-apple-system, "Helvetica Neue", "Roboto", "Segoe UI", "Helvetica", sans-serif' value="{ST_type__body_fontfamily}"*/
/*         />*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- #SETTING: Navbar font-family -->*/
/* <div class="slickpanel-section__setting">*/
/*   <div class="slickpanel-section__setting__label">*/
/*     <strong>Navbar font</strong>*/
/*     <p>Font stack used for navigation items. (only labels. Body font is used in dropdown)</p>*/
/*   </div>*/
/*   <div class="slickpanel-section__setting__input">*/
/*     <input  class="form-control" type="text"*/
/*         name="ST_type__navbar_fontfamily"*/
/*         data-manipulate='[".navigation > li > a","css","font-family"]'*/
/*         data-default='inherit' value="{ST_type__navbar_fontfamily}"*/
/*         />*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- #SETTING: Content font -->*/
/* <div class="slickpanel-section__setting">*/
/*   <div class="slickpanel-section__setting__label">*/
/*     <strong>Content font</strong>*/
/*     <p>Font stack for user posts and alerts. Before you use an external font here, make sure it renders sharp and is easy to read.</p>*/
/*   </div>*/
/*   <div class="slickpanel-section__setting__input">*/
/*     <input  class="form-control" type="text"*/
/*         name="ST_type__content_fontfamily"*/
/*         data-manipulate='[".alert, textarea, .postbody .content","css","font-family"]'*/
/*         data-default='-apple-system, "Helvetica Neue", "Helvetica", sans-serif' value="{ST_type__content_fontfamily}"*/
/*         />*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- #SETTING: Content font size -->*/
/* <div class="slickpanel-section__setting">*/
/*   <div class="slickpanel-section__setting__label">*/
/*     <strong>Content font size</strong>*/
/*     <p>Choose a comfortable font-size for content. (in px)</p>*/
/*   </div>*/
/*   <div class="slickpanel-section__setting__input">*/
/*     <input  class="form-control" type="number"*/
/*         name="ST_type__content_fontsize"*/
/*         data-manipulate='[".alert, textarea, .postbody .content","css","font-size","px"]'*/
/*         data-default='14' value="{ST_type__content_fontsize}"*/
/*         />*/
/*   </div>*/
/* </div>*/
/* */
