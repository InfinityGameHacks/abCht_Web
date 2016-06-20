<?php

/* slickpanel/social.html */
class __TwigTemplate_cc597ee53d06d7be7aa11640c07709e72c8b5f06b375026dbbfca748a7eac4f3 extends Twig_Template
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
        echo "<div class=\"alert alert-info\" style=\"margin-bottom: 0;\">Enter your social URL's here. Leave empty to hide</div>

<!-- #SETTING: Facebook -->
<div class=\"slickpanel-section__setting\">
\t<div class=\"slickpanel-section__setting__label\">
\t\t<strong><i class=\"fi fi-facebook\"></i> Facebook</strong>
\t</div>
\t<div class=\"slickpanel-section__setting__input\">
\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\tname=\"ST_social_fb\"
\t\t\t\tdata-default='none' value=\"";
        // line 11
        echo (isset($context["ST_social_fb"]) ? $context["ST_social_fb"] : null);
        echo "\"
\t\t\t\t/>
\t</div>
</div>



<!-- #SETTING: Twitter -->
<div class=\"slickpanel-section__setting\">
\t<div class=\"slickpanel-section__setting__label\">
\t\t<strong><i class=\"fi fi-twitter\"></i> Twitter</strong>
\t</div>
\t<div class=\"slickpanel-section__setting__input\">
\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\tname=\"ST_social_twitter\"
\t\t\t\tdata-default='none' value=\"";
        // line 26
        echo (isset($context["ST_social_twitter"]) ? $context["ST_social_twitter"] : null);
        echo "\"
\t\t\t\t/>
\t</div>
</div>



<!-- #SETTING: Google plus -->
<div class=\"slickpanel-section__setting\">
\t<div class=\"slickpanel-section__setting__label\">
\t\t<strong><i class=\"fi fi-google-plus\"></i> Google plus</strong>
\t</div>
\t<div class=\"slickpanel-section__setting__input\">
\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\tname=\"ST_social_gplus\"
\t\t\t\tdata-default='none' value=\"";
        // line 41
        echo (isset($context["ST_social_gplus"]) ? $context["ST_social_gplus"] : null);
        echo "\"
\t\t\t\t/>
\t</div>
</div>



<!-- #SETTING: Youtube -->
<div class=\"slickpanel-section__setting\">
\t<div class=\"slickpanel-section__setting__label\">
\t\t<strong><i class=\"fi fi-youtube-play\"></i> Youtube</strong>
\t</div>
\t<div class=\"slickpanel-section__setting__input\">
\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\tname=\"ST_social_youtube\"
\t\t\t\tdata-default='none' value=\"";
        // line 56
        echo (isset($context["ST_social_youtube"]) ? $context["ST_social_youtube"] : null);
        echo "\"
\t\t\t\t/>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "slickpanel/social.html";
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
/* <div class="alert alert-info" style="margin-bottom: 0;">Enter your social URL's here. Leave empty to hide</div>*/
/* */
/* <!-- #SETTING: Facebook -->*/
/* <div class="slickpanel-section__setting">*/
/* 	<div class="slickpanel-section__setting__label">*/
/* 		<strong><i class="fi fi-facebook"></i> Facebook</strong>*/
/* 	</div>*/
/* 	<div class="slickpanel-section__setting__input">*/
/* 		<input  class="form-control" type="text"*/
/* 				name="ST_social_fb"*/
/* 				data-default='none' value="{ST_social_fb}"*/
/* 				/>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* */
/* <!-- #SETTING: Twitter -->*/
/* <div class="slickpanel-section__setting">*/
/* 	<div class="slickpanel-section__setting__label">*/
/* 		<strong><i class="fi fi-twitter"></i> Twitter</strong>*/
/* 	</div>*/
/* 	<div class="slickpanel-section__setting__input">*/
/* 		<input  class="form-control" type="text"*/
/* 				name="ST_social_twitter"*/
/* 				data-default='none' value="{ST_social_twitter}"*/
/* 				/>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* */
/* <!-- #SETTING: Google plus -->*/
/* <div class="slickpanel-section__setting">*/
/* 	<div class="slickpanel-section__setting__label">*/
/* 		<strong><i class="fi fi-google-plus"></i> Google plus</strong>*/
/* 	</div>*/
/* 	<div class="slickpanel-section__setting__input">*/
/* 		<input  class="form-control" type="text"*/
/* 				name="ST_social_gplus"*/
/* 				data-default='none' value="{ST_social_gplus}"*/
/* 				/>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* */
/* <!-- #SETTING: Youtube -->*/
/* <div class="slickpanel-section__setting">*/
/* 	<div class="slickpanel-section__setting__label">*/
/* 		<strong><i class="fi fi-youtube-play"></i> Youtube</strong>*/
/* 	</div>*/
/* 	<div class="slickpanel-section__setting__input">*/
/* 		<input  class="form-control" type="text"*/
/* 				name="ST_social_youtube"*/
/* 				data-default='none' value="{ST_social_youtube}"*/
/* 				/>*/
/* 	</div>*/
/* </div>*/
