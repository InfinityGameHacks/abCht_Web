<?php

/* slickpanel/header.html */
class __TwigTemplate_767438a3d84b19421cceb3aa5e45478cbbea6f4384a811b543749dc9cb81f914 extends Twig_Template
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
  <li role=\"presentation\" class=\"active\"><a href=\"#header__header\" role=\"tab\" data-toggle=\"tab\">Header</a></li>
  <li role=\"presentation\"><a href=\"#header__logo\" role=\"tab\" data-toggle=\"tab\">Logo</a></li>
  <li role=\"presentation\"><a href=\"#header__search\" role=\"tab\" data-toggle=\"tab\">Search</a></li>
  <li role=\"presentation\"><a href=\"#header__navbar\" role=\"tab\" data-toggle=\"tab\">Navbar</a></li>
</ul>

<!-- Tab panes -->
<div class=\"tab-content slickpanel-innernav-content\">



  <div role=\"tabpanel\" class=\"tab-pane\" id=\"header__search\">
\t<div class=\"slickpanel-section\">

\t\t<!-- #SETTING: Search background -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Background</strong>
\t\t\t\t<p>search bar background color</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_search__bgcolor\"
\t\t\t\t\t\tdata-transparency=\"true\"
\t\t\t\t\t\tdata-colorchange='[\"";
        // line 27
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__search", array());
        echo "\",\"background-color\"]'
\t\t\t\t\t\tvalue=\"";
        // line 28
        echo (isset($context["ST_search__bgcolor"]) ? $context["ST_search__bgcolor"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Search focus background -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Focus background</strong>
\t\t\t\t<p>Background on focus (live preview is buggy currently)</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_search__focusbgcolor\"
\t\t\t\t\t\tdata-transparency=\"true\"
\t\t\t\t\t\tdata-colorchange='[\"";
        // line 42
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__search_focus", array());
        echo "\",\"background-color\"]'
\t\t\t\t\t\tdata-default=\"white\"
\t\t\t\t\t\tvalue=\"";
        // line 44
        echo (isset($context["ST_search__focusbgcolor"]) ? $context["ST_search__focusbgcolor"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Search text color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Text color</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_search__color\"
\t\t\t\t\t\tdata-colorchange='[\"";
        // line 56
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__search", array());
        echo "\",\"color\"]'
\t\t\t\t\t\tvalue=\"";
        // line 57
        echo (isset($context["ST_search__color"]) ? $context["ST_search__color"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Search placeholder color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Placeholder color</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_search__placeholder\"
\t\t\t\t\t\tdata-transparency=\"true\"
\t\t\t\t\t\tdata-colorchange='[\"";
        // line 70
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__search_placeholder", array());
        echo "\",\"color\"]'
\t\t\t\t\t\tvalue=\"";
        // line 71
        echo (isset($context["ST_search__placeholder"]) ? $context["ST_search__placeholder"] : null);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t</div>
  </div>

  <div role=\"tabpanel\" class=\"tab-pane\" id=\"header__navbar\">
\t<div class=\"slickpanel-section\">

  <!-- #SETTING: Navbar position -->
  <div class=\"slickpanel-section__setting\">
      <div class=\"slickpanel-section__setting__label\">
          <strong>Navbar position</strong>
          <p>Place navbar below or above header</p>
      </div>
      <div class=\"slickpanel-section__setting__input\">
          <select class=\"form-control\"
              name=\"ST_navbar__pos\"
\t\t\t  data-manipulate='[\".stickyContainer\",\"navbar_pos\"]'
              data-default='nb-h' value=\"";
        // line 91
        echo (isset($context["ST_navbar__pos"]) ? $context["ST_navbar__pos"] : null);
        echo "\">
              <option value=\"nb-h\" ";
        // line 92
        if (((isset($context["ST_navbar__pos"]) ? $context["ST_navbar__pos"] : null) == "nb-h")) {
            echo "selected";
        }
        echo ">Above Header</option>
              <option value=\"h-nb\" ";
        // line 93
        if (((isset($context["ST_navbar__pos"]) ? $context["ST_navbar__pos"] : null) == "h-nb")) {
            echo "selected";
        }
        echo ">Below Header</option>
          </select>
      </div>
  </div>

  <!-- #SETTING: Dark navbar -->
  <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
    <div class=\"slickpanel-section__setting__input\">
      <input type=\"checkbox\"
           class=\"st-toggleswitch\" id=\"sps__darknavbar\"
           data-toggleclass='[\".utility-bar\",\"navbar-dark\"]'
           name=\"ST_dark_navbar\" ";
        // line 104
        if ((isset($context["ST_dark_navbar"]) ? $context["ST_dark_navbar"] : null)) {
            echo "checked";
        }
        // line 105
        echo "          />
    </div>
    <label for=\"sps__darknavbar\" class=\"slickpanel-section__setting__label\">
      <strong>Dark navbar</strong>
      <p>Use the dark version of navbar</p>
    </label>
  </div>

  </div>
  </div>


  <div role=\"tabpanel\" class=\"tab-pane active\" id=\"header__header\">
\t<div class=\"slickpanel-section\">

\t\t<!-- #SETTING: Header height -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Header height (in px)</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"number\"
\t\t\t\t\t\tname=\"ST_header__height\" min=\"50\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 128
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__mainheader", array());
        echo "\",\"css\",\"height\"]'
\t\t\t\t\t\tdata-default='80' value=\"";
        // line 129
        echo (isset($context["ST_header__height"]) ? $context["ST_header__height"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Header background-color -->
\t\t<div class=\"slickpanel-section__setting  slickpanel-togglesetting\">
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"checkbox\"
\t\t\t\t\t\tname=\"ST_header__transparent\"
\t\t\t\t\t\tdata-transparency=\"true\"
\t\t\t\t\t\tid=\"sps__header__transparent\"
\t\t\t\t\t\tdata-toggleclass='[\"";
        // line 141
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__mainheader", array());
        echo "\", \"transparent\"]'
\t\t\t\t\t\tvalue=\"";
        // line 142
        echo (isset($context["ST_header__transparent"]) ? $context["ST_header__transparent"] : null);
        echo "\" ";
        if ((isset($context["ST_header__transparent"]) ? $context["ST_header__transparent"] : null)) {
            echo "checked";
        }
        // line 143
        echo "\t\t\t\t\t\t/>
\t\t\t</div>
\t\t\t<label for=\"sps__header__transparent\" class=\"slickpanel-section__setting__label\"><strong>Transparent Header</strong>
\t\t\t\t<p>Set header background to <code>transparent</code> and removes left-right padding in boxed layout<br /> <em>This setting <strong>overrides</strong> header background settings below</em></p>
\t\t\t</label>
\t\t</div>

\t\t<!-- #SETTING: Header background-color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Header background color</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_header__bgcolor\"
\t\t\t\t\t\tdata-transparency=\"true\"
\t\t\t\t\t\tdata-colorchange='[\"";
        // line 159
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__mainheader", array());
        echo "\",\"background-color\"]'
\t\t\t\t\t\tvalue=\"";
        // line 160
        echo (isset($context["ST_header__bgcolor"]) ? $context["ST_header__bgcolor"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Header background-color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Header background image</strong>
\t\t\t\t<p>Upload your images to <code>styles/canvas/theme/images/backgrounds</code> and enter the filename here (with extension)</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input class=\"form-control\" type=\"text\"
\t\t\t\t\t\t\tname=\"ST_header__bgimg_url\"
\t\t\t\t\t\t\tdata-manipulate='[\"";
        // line 174
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__mainheader", array());
        echo "\",\"bgimg\", \"background-image\"]'
\t\t\t\t\t\t\tdata-default='poly.png' value=\"";
        // line 175
        echo (isset($context["ST_header__bgimg_url"]) ? $context["ST_header__bgimg_url"] : null);
        echo "\"
\t\t\t\t\t   />
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Header background-position -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Header background position</strong>
\t\t\t\t<p>x and y axis positions e.g. <code>center top</code></p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_header__bgimg_pos\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 189
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__mainheader", array());
        echo "\",\"css\",\"background-position\"]'
\t\t\t\t\t\tdata-default='center 10%' value=\"";
        // line 190
        echo (isset($context["ST_header__bgimg_pos"]) ? $context["ST_header__bgimg_pos"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Header background-size -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Header background size</strong>
\t\t\t\t<p>Backgound image sizing. Generally you can leave this empty. Use <code>contain</code> for patterns</p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_header__bgimg_size\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 204
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__mainheader", array());
        echo "\", \"css\",\"background-size\"]'
\t\t\t\t\t\tdata-default='cover' value=\"";
        // line 205
        echo (isset($context["ST_header__bgimg_size"]) ? $context["ST_header__bgimg_size"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t</div>
  </div>




  <div role=\"tabpanel\" class=\"tab-pane\" id=\"header__logo\">
\t
\t<div class=\"logotype-container\">
\t
\t<div class=\"slickpanel-section\" id=\"logotype-switch\">

\t  <!-- #SETTING: Navbar position -->
\t  <div class=\"slickpanel-section__setting\">
\t\t  <div class=\"slickpanel-section__setting__label\">
\t\t\t  <strong>Logo type</strong>
\t\t\t  <p>Choose between text and image type logo</p>
\t\t  </div>
\t\t  <div class=\"slickpanel-section__setting__input\">
\t\t\t  <select class=\"form-control\"
\t\t\t\t  name=\"ST_logo__type\"
\t\t\t\t  data-sectionswitch
\t\t\t\t  value=\"";
        // line 232
        echo (isset($context["ST_logo__type"]) ? $context["ST_logo__type"] : null);
        echo "\">
\t\t\t\t  <option value=\"text\" ";
        // line 233
        if (((isset($context["ST_logo__type"]) ? $context["ST_logo__type"] : null) != "image")) {
            echo "selected";
        }
        echo ">Text</option>
\t\t\t\t  <option value=\"image\" ";
        // line 234
        if (((isset($context["ST_logo__type"]) ? $context["ST_logo__type"] : null) == "image")) {
            echo "selected";
        }
        echo ">Image</option>
\t\t\t  </select>
\t\t  </div>
\t  </div>
\t
\t</div>
\t  
\t<div class=\"slickpanel-section\" id=\"logotype__image\">

\t  <!-- #SETTING: Logo image -->
\t  <div class=\"slickpanel-section__setting\">
\t\t  <div class=\"slickpanel-section__setting__label\">
\t\t\t  <strong>Image filename (with extension)</strong>
\t\t\t  <p>Upload your logo to <code>styles/canvas/theme/images</code> and enter the file name here (with extension)</p>
\t\t  </div>
\t\t  <div class=\"slickpanel-section__setting__input\">
\t\t\t  <input  class=\"form-control\" type=\"text\"
\t\t\t\t\t  name=\"ST_logo__image_filename\"
\t\t\t\t\t  data-manipulate='[\"";
        // line 252
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__imagelogo", array());
        echo "\",\"attr\",\"src\"]'
\t\t\t\t\t  value=";
        // line 253
        if ((isset($context["ST_logo__image_filename"]) ? $context["ST_logo__image_filename"] : null)) {
            echo "\"";
            echo (isset($context["ST_logo__image_filename"]) ? $context["ST_logo__image_filename"] : null);
            echo "\"";
        } else {
            echo "\"logo.png\"";
        }
        // line 254
        echo "\t\t\t\t\t  />
\t\t  </div>
\t  </div>

\t  <!-- #SETTING: Logo Image size -->
\t  <div class=\"slickpanel-section__setting\">
\t\t  <div class=\"slickpanel-section__setting__label\">
\t\t\t  <strong>Width (max-width)</strong>
\t\t\t  <p>Maximum width for your logo image. It is recommended to use a high-res logo image and scale it down using this setting.</p>
\t\t  </div>
\t\t  <div class=\"slickpanel-section__setting__input\">
\t\t\t  <input  class=\"form-control\" type=\"number\"
\t\t\t\t\t  name=\"ST_logo__image_width\"
\t\t\t\t\t  data-manipulate='[\"";
        // line 267
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__imagelogo", array());
        echo "\",\"css\",\"max-width\",\"px\"]'
\t\t\t\t\t  value=";
        // line 268
        if ((isset($context["ST_logo__image_width"]) ? $context["ST_logo__image_width"] : null)) {
            echo "\"";
            echo (isset($context["ST_logo__image_width"]) ? $context["ST_logo__image_width"] : null);
            echo "\"";
        } else {
            echo "\"150\"";
        }
        // line 269
        echo "\t\t\t\t\t  />
\t\t  </div>
\t  </div>
\t  
\t</div>
\t
\t<div class=\"slickpanel-section\" id=\"logotype__text\">

\t\t<!-- #SETTING: Logo text -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Logo text</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_logo__text\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 285
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__textlogo", array());
        echo "\",\"text\"]'
\t\t\t\t\t\tdata-default='";
        // line 286
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "' value=\"";
        echo (isset($context["ST_logo__text"]) ? $context["ST_logo__text"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Logo font-family -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Text logo font-family</strong>
\t\t\t\t<p>Prioritzed list of fonts. Remember to define a generic name as fallback. (Example: <code>'Quicksand', sans-serif</code>). <em>Avoid double quotes (\")</em></p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_logo__fontfamily\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 300
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__textlogo", array());
        echo "\",\"css\",\"font-family\"]'
\t\t\t\t\t\tdata-default='Body font' value=\"";
        // line 301
        echo (isset($context["ST_logo__fontfamily"]) ? $context["ST_logo__fontfamily"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Logo color -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Text logo color</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_logo__color\"
\t\t\t\t\t\tdata-transparency=\"true\"
\t\t\t\t\t\tdata-colorchange='[\"";
        // line 315
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__textlogo", array());
        echo "\",\"color\"]'
\t\t\t\t\t\tdata-default=\"white\" value=\"";
        // line 316
        echo (isset($context["ST_logo__color"]) ? $context["ST_logo__color"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Logo font size -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Text logo font-size (in px)</strong>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"number\"
\t\t\t\t\t\tname=\"ST_logo__fontsize\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 329
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__textlogo", array());
        echo "\",\"css\",\"font-size\",\"px\"]'
\t\t\t\t\t\tdata-default=\"21\" value=\"";
        // line 330
        if ((isset($context["ST_logo__fontsize"]) ? $context["ST_logo__fontsize"] : null)) {
            echo (isset($context["ST_logo__fontsize"]) ? $context["ST_logo__fontsize"] : null);
        }
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t\t<!-- #SETTING: Logo font weight -->
\t\t<div class=\"slickpanel-section__setting\">
\t\t\t<div class=\"slickpanel-section__setting__label\">
\t\t\t\t<strong>Text logo font-weight</strong>
\t\t\t\t<p>e.g. <code>bold</code> <code>700</code></p>
\t\t\t</div>
\t\t\t<div class=\"slickpanel-section__setting__input\">
\t\t\t\t<input  class=\"form-control\" type=\"text\"
\t\t\t\t\t\tname=\"ST_logo__fontweight\"
\t\t\t\t\t\tdata-manipulate='[\"";
        // line 344
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__textlogo", array());
        echo "\",\"css\",\"font-weight\"]'
\t\t\t\t\t\tdata-default='200' value=\"";
        // line 345
        echo (isset($context["ST_logo__fontweight"]) ? $context["ST_logo__fontweight"] : null);
        echo "\"
\t\t\t\t\t\t/>
\t\t\t</div>
\t\t</div>

\t</div>
\t</div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "slickpanel/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 345,  511 => 344,  492 => 330,  488 => 329,  472 => 316,  468 => 315,  451 => 301,  447 => 300,  428 => 286,  424 => 285,  406 => 269,  398 => 268,  394 => 267,  379 => 254,  371 => 253,  367 => 252,  344 => 234,  338 => 233,  334 => 232,  304 => 205,  300 => 204,  283 => 190,  279 => 189,  262 => 175,  258 => 174,  241 => 160,  237 => 159,  219 => 143,  213 => 142,  209 => 141,  194 => 129,  190 => 128,  165 => 105,  161 => 104,  145 => 93,  139 => 92,  135 => 91,  112 => 71,  108 => 70,  92 => 57,  88 => 56,  73 => 44,  68 => 42,  51 => 28,  47 => 27,  19 => 1,);
    }
}
/* <!-- Nav tabs -->*/
/* <ul class="slickpanel-innernav-tabs" role="tablist">*/
/*   <li role="presentation" class="active"><a href="#header__header" role="tab" data-toggle="tab">Header</a></li>*/
/*   <li role="presentation"><a href="#header__logo" role="tab" data-toggle="tab">Logo</a></li>*/
/*   <li role="presentation"><a href="#header__search" role="tab" data-toggle="tab">Search</a></li>*/
/*   <li role="presentation"><a href="#header__navbar" role="tab" data-toggle="tab">Navbar</a></li>*/
/* </ul>*/
/* */
/* <!-- Tab panes -->*/
/* <div class="tab-content slickpanel-innernav-content">*/
/* */
/* */
/* */
/*   <div role="tabpanel" class="tab-pane" id="header__search">*/
/* 	<div class="slickpanel-section">*/
/* */
/* 		<!-- #SETTING: Search background -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Background</strong>*/
/* 				<p>search bar background color</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_search__bgcolor"*/
/* 						data-transparency="true"*/
/* 						data-colorchange='["{$SELECTOR__search}","background-color"]'*/
/* 						value="{ST_search__bgcolor}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Search focus background -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Focus background</strong>*/
/* 				<p>Background on focus (live preview is buggy currently)</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_search__focusbgcolor"*/
/* 						data-transparency="true"*/
/* 						data-colorchange='["{$SELECTOR__search_focus}","background-color"]'*/
/* 						data-default="white"*/
/* 						value="{ST_search__focusbgcolor}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Search text color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Text color</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_search__color"*/
/* 						data-colorchange='["{$SELECTOR__search}","color"]'*/
/* 						value="{ST_search__color}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Search placeholder color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Placeholder color</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_search__placeholder"*/
/* 						data-transparency="true"*/
/* 						data-colorchange='["{$SELECTOR__search_placeholder}","color"]'*/
/* 						value="{ST_search__placeholder}" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/*   </div>*/
/* */
/*   <div role="tabpanel" class="tab-pane" id="header__navbar">*/
/* 	<div class="slickpanel-section">*/
/* */
/*   <!-- #SETTING: Navbar position -->*/
/*   <div class="slickpanel-section__setting">*/
/*       <div class="slickpanel-section__setting__label">*/
/*           <strong>Navbar position</strong>*/
/*           <p>Place navbar below or above header</p>*/
/*       </div>*/
/*       <div class="slickpanel-section__setting__input">*/
/*           <select class="form-control"*/
/*               name="ST_navbar__pos"*/
/* 			  data-manipulate='[".stickyContainer","navbar_pos"]'*/
/*               data-default='nb-h' value="{ST_navbar__pos}">*/
/*               <option value="nb-h" <!-- IF ST_navbar__pos == 'nb-h'-->selected<!-- ENDIF -->>Above Header</option>*/
/*               <option value="h-nb" <!-- IF ST_navbar__pos == 'h-nb'-->selected<!-- ENDIF -->>Below Header</option>*/
/*           </select>*/
/*       </div>*/
/*   </div>*/
/* */
/*   <!-- #SETTING: Dark navbar -->*/
/*   <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*     <div class="slickpanel-section__setting__input">*/
/*       <input type="checkbox"*/
/*            class="st-toggleswitch" id="sps__darknavbar"*/
/*            data-toggleclass='[".utility-bar","navbar-dark"]'*/
/*            name="ST_dark_navbar" <!-- IF ST_dark_navbar -->checked<!-- ENDIF -->*/
/*           />*/
/*     </div>*/
/*     <label for="sps__darknavbar" class="slickpanel-section__setting__label">*/
/*       <strong>Dark navbar</strong>*/
/*       <p>Use the dark version of navbar</p>*/
/*     </label>*/
/*   </div>*/
/* */
/*   </div>*/
/*   </div>*/
/* */
/* */
/*   <div role="tabpanel" class="tab-pane active" id="header__header">*/
/* 	<div class="slickpanel-section">*/
/* */
/* 		<!-- #SETTING: Header height -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Header height (in px)</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="number"*/
/* 						name="ST_header__height" min="50"*/
/* 						data-manipulate='["{$SELECTOR__mainheader}","css","height"]'*/
/* 						data-default='80' value="{ST_header__height}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Header background-color -->*/
/* 		<div class="slickpanel-section__setting  slickpanel-togglesetting">*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="checkbox"*/
/* 						name="ST_header__transparent"*/
/* 						data-transparency="true"*/
/* 						id="sps__header__transparent"*/
/* 						data-toggleclass='["{$SELECTOR__mainheader}", "transparent"]'*/
/* 						value="{ST_header__transparent}" <!-- IF ST_header__transparent -->checked<!-- ENDIF -->*/
/* 						/>*/
/* 			</div>*/
/* 			<label for="sps__header__transparent" class="slickpanel-section__setting__label"><strong>Transparent Header</strong>*/
/* 				<p>Set header background to <code>transparent</code> and removes left-right padding in boxed layout<br /> <em>This setting <strong>overrides</strong> header background settings below</em></p>*/
/* 			</label>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Header background-color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Header background color</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_header__bgcolor"*/
/* 						data-transparency="true"*/
/* 						data-colorchange='["{$SELECTOR__mainheader}","background-color"]'*/
/* 						value="{ST_header__bgcolor}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Header background-color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Header background image</strong>*/
/* 				<p>Upload your images to <code>styles/canvas/theme/images/backgrounds</code> and enter the filename here (with extension)</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input class="form-control" type="text"*/
/* 							name="ST_header__bgimg_url"*/
/* 							data-manipulate='["{$SELECTOR__mainheader}","bgimg", "background-image"]'*/
/* 							data-default='poly.png' value="{ST_header__bgimg_url}"*/
/* 					   />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Header background-position -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Header background position</strong>*/
/* 				<p>x and y axis positions e.g. <code>center top</code></p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_header__bgimg_pos"*/
/* 						data-manipulate='["{$SELECTOR__mainheader}","css","background-position"]'*/
/* 						data-default='center 10%' value="{ST_header__bgimg_pos}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Header background-size -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Header background size</strong>*/
/* 				<p>Backgound image sizing. Generally you can leave this empty. Use <code>contain</code> for patterns</p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_header__bgimg_size"*/
/* 						data-manipulate='["{$SELECTOR__mainheader}", "css","background-size"]'*/
/* 						data-default='cover' value="{ST_header__bgimg_size}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/*   </div>*/
/* */
/* */
/* */
/* */
/*   <div role="tabpanel" class="tab-pane" id="header__logo">*/
/* 	*/
/* 	<div class="logotype-container">*/
/* 	*/
/* 	<div class="slickpanel-section" id="logotype-switch">*/
/* */
/* 	  <!-- #SETTING: Navbar position -->*/
/* 	  <div class="slickpanel-section__setting">*/
/* 		  <div class="slickpanel-section__setting__label">*/
/* 			  <strong>Logo type</strong>*/
/* 			  <p>Choose between text and image type logo</p>*/
/* 		  </div>*/
/* 		  <div class="slickpanel-section__setting__input">*/
/* 			  <select class="form-control"*/
/* 				  name="ST_logo__type"*/
/* 				  data-sectionswitch*/
/* 				  value="{ST_logo__type}">*/
/* 				  <option value="text" <!-- IF ST_logo__type != 'image'-->selected<!-- ENDIF -->>Text</option>*/
/* 				  <option value="image" <!-- IF ST_logo__type == 'image'-->selected<!-- ENDIF -->>Image</option>*/
/* 			  </select>*/
/* 		  </div>*/
/* 	  </div>*/
/* 	*/
/* 	</div>*/
/* 	  */
/* 	<div class="slickpanel-section" id="logotype__image">*/
/* */
/* 	  <!-- #SETTING: Logo image -->*/
/* 	  <div class="slickpanel-section__setting">*/
/* 		  <div class="slickpanel-section__setting__label">*/
/* 			  <strong>Image filename (with extension)</strong>*/
/* 			  <p>Upload your logo to <code>styles/canvas/theme/images</code> and enter the file name here (with extension)</p>*/
/* 		  </div>*/
/* 		  <div class="slickpanel-section__setting__input">*/
/* 			  <input  class="form-control" type="text"*/
/* 					  name="ST_logo__image_filename"*/
/* 					  data-manipulate='["{$SELECTOR__imagelogo}","attr","src"]'*/
/* 					  value=<!-- IF ST_logo__image_filename -->"{ST_logo__image_filename}"<!-- ELSE -->"logo.png"<!-- ENDIF -->*/
/* 					  />*/
/* 		  </div>*/
/* 	  </div>*/
/* */
/* 	  <!-- #SETTING: Logo Image size -->*/
/* 	  <div class="slickpanel-section__setting">*/
/* 		  <div class="slickpanel-section__setting__label">*/
/* 			  <strong>Width (max-width)</strong>*/
/* 			  <p>Maximum width for your logo image. It is recommended to use a high-res logo image and scale it down using this setting.</p>*/
/* 		  </div>*/
/* 		  <div class="slickpanel-section__setting__input">*/
/* 			  <input  class="form-control" type="number"*/
/* 					  name="ST_logo__image_width"*/
/* 					  data-manipulate='["{$SELECTOR__imagelogo}","css","max-width","px"]'*/
/* 					  value=<!-- IF ST_logo__image_width -->"{ST_logo__image_width}"<!-- ELSE -->"150"<!-- ENDIF -->*/
/* 					  />*/
/* 		  </div>*/
/* 	  </div>*/
/* 	  */
/* 	</div>*/
/* 	*/
/* 	<div class="slickpanel-section" id="logotype__text">*/
/* */
/* 		<!-- #SETTING: Logo text -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Logo text</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_logo__text"*/
/* 						data-manipulate='["{$SELECTOR__textlogo}","text"]'*/
/* 						data-default='{SITENAME}' value="{ST_logo__text}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Logo font-family -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Text logo font-family</strong>*/
/* 				<p>Prioritzed list of fonts. Remember to define a generic name as fallback. (Example: <code>'Quicksand', sans-serif</code>). <em>Avoid double quotes (")</em></p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_logo__fontfamily"*/
/* 						data-manipulate='["{$SELECTOR__textlogo}","css","font-family"]'*/
/* 						data-default='Body font' value="{ST_logo__fontfamily}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Logo color -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Text logo color</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_logo__color"*/
/* 						data-transparency="true"*/
/* 						data-colorchange='["{$SELECTOR__textlogo}","color"]'*/
/* 						data-default="white" value="{ST_logo__color}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Logo font size -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Text logo font-size (in px)</strong>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="number"*/
/* 						name="ST_logo__fontsize"*/
/* 						data-manipulate='["{$SELECTOR__textlogo}","css","font-size","px"]'*/
/* 						data-default="21" value="<!-- IF ST_logo__fontsize -->{ST_logo__fontsize}<!-- ENDIF -->"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- #SETTING: Logo font weight -->*/
/* 		<div class="slickpanel-section__setting">*/
/* 			<div class="slickpanel-section__setting__label">*/
/* 				<strong>Text logo font-weight</strong>*/
/* 				<p>e.g. <code>bold</code> <code>700</code></p>*/
/* 			</div>*/
/* 			<div class="slickpanel-section__setting__input">*/
/* 				<input  class="form-control" type="text"*/
/* 						name="ST_logo__fontweight"*/
/* 						data-manipulate='["{$SELECTOR__textlogo}","css","font-weight"]'*/
/* 						data-default='200' value="{ST_logo__fontweight}"*/
/* 						/>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	</div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
