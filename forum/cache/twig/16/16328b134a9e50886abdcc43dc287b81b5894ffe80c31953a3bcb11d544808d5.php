<?php

/* slickpanel/skin.html */
class __TwigTemplate_7321951314b56e5d04e954b9642a0509bbd09522084702c2443dd5b462191de6 extends Twig_Template
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
        echo "<!-- Nav tabs -->
<ul class=\"slickpanel-innernav-tabs\" role=\"tablist\">
  <li role=\"presentation\" class=\"active\"><a href=\"#skin__body\" role=\"tab\" data-toggle=\"tab\">Body</a></li>
  <li role=\"presentation\"><a href=\"#footer\" role=\"tab\" data-toggle=\"tab\">Footer</a></li>
  <li role=\"presentation\"><a href=\"#misc\" role=\"tab\" data-toggle=\"tab\">Misc</a></li>
</ul>

<!-- Tab panes -->
<div class=\"tab-content slickpanel-innernav-content\">

  <div role=\"tabpanel\" class=\"tab-pane active\" id=\"skin__body\">
    <div class=\"slickpanel-section\">

\t\t<!-- #SETTING: Body background color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background color</strong>
\t\t\t\t<p>Not visible when container is set to 'wide'</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_body__bgcolor\"
\t\t\t\t\t\tdata-colorchange='[\"#st-bgimg\",\"background-color\"]'
\t\t\t\t\t\tvalue=\"";
        // line 24
        echo (isset($context["ST_body__bgcolor"]) ? $context["ST_body__bgcolor"] : null);
        echo "\"
\t\t\t\t\t\tdata-default=\"#CACACA\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Body background image URL -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background image</strong>
\t\t\t\t<p>Upload your images to <code>styles/canvas/theme/images/backgrounds</code> and enter the filename here (with extension)</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_body__bgimg_url\"
\t\t\t\t\t\tdata-manipulate='[\"#st-bgimg\",\"bgimg\", \"background-image\"]'
\t\t\t\t\t\tdata-default='none'
\t\t\t\t\t\tvalue=\"";
        // line 40
        echo (isset($context["ST_body__bgimg_url"]) ? $context["ST_body__bgimg_url"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Body background-position -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background-position</strong>
\t\t\t\t<p>x and y axis positions e.g. <code>center top</code></p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_body__bgimg_pos\"
\t\t\t\t\t\tdata-manipulate='[\"html\",\"css\", \"background-position\"]'
\t\t\t\t\t\tdata-default='center top'
\t\t\t\t\t\tvalue=\"";
        // line 55
        echo (isset($context["ST_body__bgimg_pos"]) ? $context["ST_body__bgimg_pos"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Header background-size -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background size</strong>
\t\t\t\t<p>Backgound image sizing. Generally you can leave this empty. Use <code>contain</code> for patterns</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_body__bgimg_size\"
\t\t\t\t\t\tdata-manipulate='[\"html\",\"css\", \"background-size\"]'
\t\t\t\t\t\tdata-default='cover'
\t\t\t\t\t\tvalue=\"";
        // line 70
        echo (isset($context["ST_body__bgimg_size"]) ? $context["ST_body__bgimg_size"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t</div>
  </div>



  <div role=\"tabpanel\" class=\"tab-pane\" id=\"footer\">
    <div class=\"slickpanel-section\">

\t\t<!-- #SETTING: Footer bg color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background color</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_footer__bgcolor\"
\t\t\t\t\t\tdata-transparency=\"true\"
\t\t\t\t\t\tdata-colorchange='[\"";
        // line 91
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__footer", array());
        echo "\",\"background-color\"]'
\t\t\t\t\t\tvalue=\"";
        // line 92
        echo (isset($context["ST_footer__bgcolor"]) ? $context["ST_footer__bgcolor"] : null);
        echo "\"
\t\t\t\t\t\tdata-default=\"#444F62\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Body background image URL -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background image</strong>
\t\t\t\t<p>Upload your images to <code>styles/canvas/theme/images/backgrounds</code> and enter the filename here (with extension)</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_footer__bgimg_url\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 106
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__footer", array());
        echo "\",\"bgimg\" , \"background-image\"]'
\t\t\t\t\t\tvalue=\"";
        // line 107
        echo (isset($context["ST_footer__bgimg_url"]) ? $context["ST_footer__bgimg_url"] : null);
        echo "\"
\t\t\t\t\t\tdata-default=\"none\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Body background-position -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background-position</strong>
\t\t\t\t<p>x and y axis positions e.g. <code>center top</code></p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_footer__bgimg_pos\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 121
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__footer", array());
        echo "\",\"css\" , \"background-position\"]'
\t\t\t\t\t\tvalue=\"";
        // line 122
        echo (isset($context["ST_footer__bgimg_pos"]) ? $context["ST_footer__bgimg_pos"] : null);
        echo "\"
\t\t\t\t\t\tdata-default=\"center 10%\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Header background-size -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background size</strong>
\t\t\t\t<p>Backgound image sizing. Generally you can leave this empty. Use <code>contain</code> for patterns</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_footer__bgimg_size\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 136
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__footer", array());
        echo "\",\"css\", \"background-size\"]'
\t\t\t\t\t\tvalue=\"";
        // line 137
        echo (isset($context["ST_footer__bgimg_size"]) ? $context["ST_footer__bgimg_size"] : null);
        echo "\"
\t\t\t\t\t\tdata-default=\"cover\" />
\t\t\t</div>
\t\t</div>
\t</div>
  </div>



  <div role=\"tabpanel\" class=\"tab-pane\" id=\"misc\">
\t<div class=\"slickpanel-section\">

\t\t<!-- #SETTING: Primary color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Primary color</strong>
\t\t\t\t<p>Section headers and a few other things</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_colors__primary\"
\t\t\t\t\t\tdata-default=\"#41454b\"
\t\t\t\t\t\tdata-colorchange='[[\"";
        // line 159
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__colors__primary_bg", array());
        echo "\",\"background-color\"],[\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__colors__primary_text", array());
        echo "\",\"color\"],[\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__colors__primary_border", array());
        echo "\",\"border-color\"]]'
\t\t\t\t\t\tvalue=\"";
        // line 160
        echo (isset($context["ST_colors__primary"]) ? $context["ST_colors__primary"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>


\t</div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "slickpanel/skin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 160,  215 => 159,  190 => 137,  186 => 136,  169 => 122,  165 => 121,  148 => 107,  144 => 106,  127 => 92,  123 => 91,  99 => 70,  81 => 55,  63 => 40,  44 => 24,  19 => 1,);
    }
}
/* <!-- Nav tabs -->*/
/* <ul class="slickpanel-innernav-tabs" role="tablist">*/
/*   <li role="presentation" class="active"><a href="#skin__body" role="tab" data-toggle="tab">Body</a></li>*/
/*   <li role="presentation"><a href="#footer" role="tab" data-toggle="tab">Footer</a></li>*/
/*   <li role="presentation"><a href="#misc" role="tab" data-toggle="tab">Misc</a></li>*/
/* </ul>*/
/* */
/* <!-- Tab panes -->*/
/* <div class="tab-content slickpanel-innernav-content">*/
/* */
/*   <div role="tabpanel" class="tab-pane active" id="skin__body">*/
/*     <div class="slickpanel-section">*/
/* */
/* 		<!-- #SETTING: Body background color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background color</strong>*/
/* 				<p>Not visible when container is set to 'wide'</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_body__bgcolor"*/
/* 						data-colorchange='["#st-bgimg","background-color"]'*/
/* 						value="{ST_body__bgcolor}"*/
/* 						data-default="#CACACA" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Body background image URL -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background image</strong>*/
/* 				<p>Upload your images to <code>styles/canvas/theme/images/backgrounds</code> and enter the filename here (with extension)</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_body__bgimg_url"*/
/* 						data-manipulate='["#st-bgimg","bgimg", "background-image"]'*/
/* 						data-default='none'*/
/* 						value="{ST_body__bgimg_url}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Body background-position -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background-position</strong>*/
/* 				<p>x and y axis positions e.g. <code>center top</code></p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_body__bgimg_pos"*/
/* 						data-manipulate='["html","css", "background-position"]'*/
/* 						data-default='center top'*/
/* 						value="{ST_body__bgimg_pos}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Header background-size -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background size</strong>*/
/* 				<p>Backgound image sizing. Generally you can leave this empty. Use <code>contain</code> for patterns</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_body__bgimg_size"*/
/* 						data-manipulate='["html","css", "background-size"]'*/
/* 						data-default='cover'*/
/* 						value="{ST_body__bgimg_size}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/*   </div>*/
/* */
/* */
/* */
/*   <div role="tabpanel" class="tab-pane" id="footer">*/
/*     <div class="slickpanel-section">*/
/* */
/* 		<!-- #SETTING: Footer bg color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background color</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_footer__bgcolor"*/
/* 						data-transparency="true"*/
/* 						data-colorchange='["{$SELECTOR__footer}","background-color"]'*/
/* 						value="{ST_footer__bgcolor}"*/
/* 						data-default="#444F62" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Body background image URL -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background image</strong>*/
/* 				<p>Upload your images to <code>styles/canvas/theme/images/backgrounds</code> and enter the filename here (with extension)</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_footer__bgimg_url"*/
/* 						data-manipulate='["{$SELECTOR__footer}","bgimg" , "background-image"]'*/
/* 						value="{ST_footer__bgimg_url}"*/
/* 						data-default="none" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Body background-position -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background-position</strong>*/
/* 				<p>x and y axis positions e.g. <code>center top</code></p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_footer__bgimg_pos"*/
/* 						data-manipulate='["{$SELECTOR__footer}","css" , "background-position"]'*/
/* 						value="{ST_footer__bgimg_pos}"*/
/* 						data-default="center 10%" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Header background-size -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background size</strong>*/
/* 				<p>Backgound image sizing. Generally you can leave this empty. Use <code>contain</code> for patterns</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_footer__bgimg_size"*/
/* 						data-manipulate='["{$SELECTOR__footer}","css", "background-size"]'*/
/* 						value="{ST_footer__bgimg_size}"*/
/* 						data-default="cover" />*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/*   </div>*/
/* */
/* */
/* */
/*   <div role="tabpanel" class="tab-pane" id="misc">*/
/* 	<div class="slickpanel-section">*/
/* */
/* 		<!-- #SETTING: Primary color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Primary color</strong>*/
/* 				<p>Section headers and a few other things</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_colors__primary"*/
/* 						data-default="#41454b"*/
/* 						data-colorchange='[["{$SELECTOR__colors__primary_bg}","background-color"],["{$SELECTOR__colors__primary_text}","color"],["{$SELECTOR__colors__primary_border}","border-color"]]'*/
/* 						value="{ST_colors__primary}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* */
/* 	</div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
