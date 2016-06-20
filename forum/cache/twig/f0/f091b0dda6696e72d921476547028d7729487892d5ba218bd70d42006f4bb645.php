<?php

/* slickpanel/general.html */
class __TwigTemplate_79edd9e363a174f70bf9dc7f1b726f78e8116b9a66781ecbcefd5999dfb6d386 extends Twig_Template
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
  <li role=\"presentation\" class=\"active\"><a href=\"#features\" role=\"tab\" data-toggle=\"tab\">Features</a></li>
  <li ><a href=\"#gAnalytics\" role=\"tab\" data-toggle=\"tab\">Analytics</a></li>
  <li ><a href=\"#postAuthor\" role=\"tab\" data-toggle=\"tab\">Topic Author</a></li>
</ul>

<!-- Tab panes -->
<div class=\"tab-content slickpanel-innernav-content\">
  <div role=\"tabpanel\" class=\"tab-pane active\" id=\"features\">
    <!-- subsection: features ================== -->
    <div class=\"slickpanel-section\">

        <!-- #SETTING: WYSIWYG editor -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps-wysiwyg\"
                       name=\"ST_wysiwyg\" ";
        // line 19
        if (((isset($context["ST_wysiwyg"]) ? $context["ST_wysiwyg"] : null) != "0")) {
            echo "checked";
        }
        // line 20
        echo "                        />
            </div>
            <label for=\"sps-wysiwyg\" class=\"slickpanel-section__setting__label\">
                <strong>WYSIWYG Editor <span class=\"label label-info\">Recommended</span></strong>
                <p>Enable SCEditor for wysiwyg editing. Recommended</p>
            </label>
        </div>

        <!-- #SETTING: Grayscale icons -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps-grayscaleicons\"
                       name=\"ST_grayscale_icons\" ";
        // line 33
        if ((isset($context["ST_grayscale_icons"]) ? $context["ST_grayscale_icons"] : null)) {
            echo "checked";
        }
        // line 34
        echo "                        />
            </div>
            <label for=\"sps-grayscaleicons\" class=\"slickpanel-section__setting__label\">
                <strong>Dim stale forum-icons</strong>
                <p>Dim and grayscale icons/images of forums that have no new content</p>
            </label>
        </div>

        <!-- #SETTING: Relative timstamps -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps-timestamps\"
                       name=\"ST_timestamps\" ";
        // line 47
        if (((isset($context["ST_timestamps"]) ? $context["ST_timestamps"] : null) != "0")) {
            echo "checked";
        }
        // line 48
        echo "                        />
            </div>
            <label for=\"sps-timestamps\" class=\"slickpanel-section__setting__label\">
                <strong>Relative Timstamps</strong>
                <p>Show relative time (e.g. \"4 hours ago\", \"last month\") instead of absoulte date. Does not work with non-english & non-default timestamp settings</p>
            </label>
        </div>

        <!-- #SETTING: Sticky header -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps__stickyheader\"
                        name=\"ST_stickyheader\" ";
        // line 61
        if (((isset($context["ST_stickyheader"]) ? $context["ST_stickyheader"] : null) != "0")) {
            echo "checked";
        }
        // line 62
        echo "                        />
            </div>
            <label for=\"sps__stickyheader\" class=\"slickpanel-section__setting__label\">
                <strong>Sticky header</strong>
                <p>Always keep header on top</p>
            </label>
        </div>

        <!-- #SETTING: Round avatars -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps__roundAvatars\"
                       data-toggleclass='[\"body\",\"roundAvatars-enabled\"]'
                        name=\"ST_roundAvatars\" ";
        // line 76
        if ((isset($context["ST_roundAvatars"]) ? $context["ST_roundAvatars"] : null)) {
            echo "checked";
        }
        // line 77
        echo "                        />
            </div>
            <label for=\"sps__roundAvatars\" class=\"slickpanel-section__setting__label\">
                <strong>Round avatars</strong>
                <p>round and round</p>
            </label>
        </div>

        <!-- #SETTING: Modern stats -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps__modernitemstats\"
                        name=\"ST_modern_item_stats\" ";
        // line 90
        if (((isset($context["ST_modern_item_stats"]) ? $context["ST_modern_item_stats"] : null) != "0")) {
            echo "checked";
        }
        // line 91
        echo "                        />
            </div>
            <label for=\"sps__modernitemstats\" class=\"slickpanel-section__setting__label\">
                <strong>Modern stats display</strong>
                <p>Modern statistics style in viewforum section</p>
            </label>
        </div>

        <!-- #SETTING: Quick scroll -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps__quickscroll\"
                        name=\"ST_quickscroll\" ";
        // line 104
        if ((isset($context["ST_quickscroll"]) ? $context["ST_quickscroll"] : null)) {
            echo "checked";
        }
        // line 105
        echo "                        />
            </div>
            <label for=\"sps__quickscroll\" class=\"slickpanel-section__setting__label\">
                <strong>Quick scroll</strong>
                <p>Floating buttons to quickly scroll to top or bottom of the page (only shows on long pages)</p>
            </label>
        </div>

        <!-- #SETTING: Complex footer -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps__complexfooter\"
                       name=\"ST_complex_footer\" ";
        // line 118
        if ((isset($context["ST_complex_footer"]) ? $context["ST_complex_footer"] : null)) {
            echo "checked";
        }
        // line 119
        echo "                        />
            </div>
            <label for=\"sps__complexfooter\" class=\"slickpanel-section__setting__label\">
                <strong>Complex footer</strong>
                <p>Enable complex footer. Edit <code>styles/canvas/template/custom/complex_footer.html</code> to customize</p>
            </label>
        </div>


        <!-- #SETTING: Pinch zoom -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input  type=\"checkbox\"
                        class=\"st-toggleswitch\" id=\"sps__pinchzoom\"
                        name=\"ST_pinchzoom\" ";
        // line 133
        if ((isset($context["ST_pinchzoom"]) ? $context["ST_pinchzoom"] : null)) {
            echo "checked";
        }
        // line 134
        echo "                        />
            </div>
            <label for=\"sps__pinchzoom\" class=\"slickpanel-section__setting__label\">
                <strong>Pinch zoom</strong>
                <p>Allow pinch zooming on touch devices.</p>
            </label>
        </div>



        <!-- #SETTING: Fast click -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input  type=\"checkbox\"
                        class=\"st-toggleswitch\" id=\"sps__fastclick\"
                        name=\"ST_fastclick\" ";
        // line 149
        if (((isset($context["ST_fastclick"]) ? $context["ST_fastclick"] : null) != "0")) {
            echo "checked";
        }
        // line 150
        echo "                        />
            </div>
            <label for=\"sps__fastclick\" class=\"slickpanel-section__setting__label\">
                <strong>Fastclick <span class=\"label label-info\">Recommended</span></strong>";
        // line 153
        echo $this->getAttribute((isset($context["slickthemes"]) ? $context["slickthemes"] : null), "fastclick", array());
        echo "
                <p>Remove 300ms tap delay on touch devices<br>
                <em>Does not affect no-touch devices at all. fastclicks.js is loaded only on touch devices</em></p>
            </label>
        </div>

    <!-- #SETTING: OneAll -->
    <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
        <div class=\"slickpanel-section__setting__input\">
            <input type=\"checkbox\"
                   class=\"st-toggleswitch\" id=\"sps-oneall\"
                   name=\"ST_oneall__header\" ";
        // line 164
        if (((isset($context["ST_oneall__header"]) ? $context["ST_oneall__header"] : null) != "0")) {
            echo "checked";
        }
        // line 165
        echo "                    />
        </div>
        <label for=\"sps-oneall\" class=\"slickpanel-section__setting__label\">
            <strong>OneAll in header [<a href=\"https://docs.oneall.com/plugins/guide/social-login-phpbb/3.1/\">oneall extension</a>]</strong>
            <p>If disabled, oneAll will show in sidebar. Regardless of this setting its always shown in quicklogin and registration</p>
        </label>
    </div>

    </div>
  </div>
  <div role=\"tabpanel\" class=\"tab-pane\" id=\"gAnalytics\">
    <!-- subsection: Analytics ================== -->
    <div class=\"slickpanel-section\">

        <!-- #SETTING: Google analytics -->
        <div class=\"slickpanel-section__setting\">
            <div class=\"slickpanel-section__setting__label\">
                <strong>Google Analytics Tracking ID</strong>
                <p>Paste your your google analytics tracking ID here. Leave empty to disable
                <br>The ID looks something like UA-XXXXXXXX-X
                </p>
            </div>
            <div class=\"slickpanel-section__setting__input\">
                <input class=\"form-control\" type=\"text\"
                       name=\"ST_g_analytics_ID\"
                       value='";
        // line 190
        echo (isset($context["ST_g_analytics_ID"]) ? $context["ST_g_analytics_ID"] : null);
        echo "' />
            </div>
        </div>

          <!-- #SETTING: Clicky analytics -->
          <div class=\"slickpanel-section__setting\">
              <div class=\"slickpanel-section__setting__label\">
                  <strong>Clicky site ID</strong>
                  <p>Enter your site ID here (You can find site ID in <code>preferences -> info -> site information</code>) Leave empty to disable<br>
                  The theme uses asynchronous tracking code</p>
              </div>
              <div class=\"slickpanel-section__setting__input\">
                  <input class=\"form-control\" type=\"text\"
                         name=\"ST_c_analytics_ID\"
                         value='";
        // line 204
        echo (isset($context["ST_c_analytics_ID"]) ? $context["ST_c_analytics_ID"] : null);
        echo "' />
              </div>
          </div>

        <div class=\"alert alert-info\">
          <strong>Custom tracking code:</strong> If you wish to manually insert your tracking code, leave both of the above fields empty and add your code in <code>styles/canvas/template/custom/extra_js.html</code>.
        </div>

    </div>
  </div>



  <div role=\"tabpanel\" class=\"tab-pane\" id=\"postAuthor\">
    <!-- subsection: postAuthor ================== -->
    <div class=\"slickpanel-section\">


        <!-- #SETTING: Topic Author Label -->
        <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
            <div class=\"slickpanel-section__setting__input\">
                <input type=\"checkbox\"
                       class=\"st-toggleswitch\" id=\"sps__topicAuthorLabel\"
                        name=\"ST_topicAuthorLabel\" ";
        // line 227
        if (((isset($context["ST_topicAuthorLabel"]) ? $context["ST_topicAuthorLabel"] : null) != "0")) {
            echo "checked";
        }
        // line 228
        echo "                        />
            </div>
            <label for=\"sps__topicAuthorLabel\" class=\"slickpanel-section__setting__label\">
                <strong>Display</strong>
                <p>Show \"Topic Author\" label under topic author's avatar</p>
            </label>
        </div>


        <!-- #SETTING: TopicAuthor Label Text -->
        <div class=\"slickpanel-section__setting\">
            <div class=\"slickpanel-section__setting__label\">
                <strong>Label Text</strong>
            </div>
            <div class=\"slickpanel-section__setting__input\">
                <input class=\"form-control\" type=\"text\"
                       name=\"ST_topicAuthorLabel__text\"
                       data-manipulate='[\".topic-author-label .label\",\"text\"]'
                        data-default=\"";
        // line 246
        echo $this->env->getExtension('phpbb')->lang("TOPIC");
        echo " ";
        echo $this->env->getExtension('phpbb')->lang("AUTHOR");
        echo "\"
                        value=\"";
        // line 247
        echo (isset($context["ST_topicAuthorLabel__text"]) ? $context["ST_topicAuthorLabel__text"] : null);
        echo "\"
                       placeholder=\"Default\" />
            </div>
        </div>


        <!-- #SETTING: TopicAuthor Label background -->
        <div class=\"slickpanel-section__setting\">
            <div class=\"slickpanel-section__setting__label\">
                <strong>Label background color</strong>
            </div>
            <div class=\"slickpanel-section__setting__input\">
                <input class=\"form-control\" type=\"text\"
                        data-colorchange='[\".topic-author-label .label\",\"background-color\"]'
                       name=\"ST_topicAuthorLabel__bg\"
                       value=\"";
        // line 262
        echo (isset($context["ST_topicAuthorLabel__bg"]) ? $context["ST_topicAuthorLabel__bg"] : null);
        echo "\" />
            </div>
        </div>

    </div>
  </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "slickpanel/general.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 262,  341 => 247,  335 => 246,  315 => 228,  311 => 227,  285 => 204,  268 => 190,  241 => 165,  237 => 164,  223 => 153,  218 => 150,  214 => 149,  197 => 134,  193 => 133,  177 => 119,  173 => 118,  158 => 105,  154 => 104,  139 => 91,  135 => 90,  120 => 77,  116 => 76,  100 => 62,  96 => 61,  81 => 48,  77 => 47,  62 => 34,  58 => 33,  43 => 20,  39 => 19,  19 => 1,);
    }
}
/* <!-- Nav tabs -->*/
/* <ul class="slickpanel-innernav-tabs" role="tablist">*/
/*   <li role="presentation" class="active"><a href="#features" role="tab" data-toggle="tab">Features</a></li>*/
/*   <li ><a href="#gAnalytics" role="tab" data-toggle="tab">Analytics</a></li>*/
/*   <li ><a href="#postAuthor" role="tab" data-toggle="tab">Topic Author</a></li>*/
/* </ul>*/
/* */
/* <!-- Tab panes -->*/
/* <div class="tab-content slickpanel-innernav-content">*/
/*   <div role="tabpanel" class="tab-pane active" id="features">*/
/*     <!-- subsection: features ================== -->*/
/*     <div class="slickpanel-section">*/
/* */
/*         <!-- #SETTING: WYSIWYG editor -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps-wysiwyg"*/
/*                        name="ST_wysiwyg" <!-- IF ST_wysiwyg != '0' -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps-wysiwyg" class="slickpanel-section__setting__label">*/
/*                 <strong>WYSIWYG Editor <span class="label label-info">Recommended</span></strong>*/
/*                 <p>Enable SCEditor for wysiwyg editing. Recommended</p>*/
/*             </label>*/
/*         </div>*/
/* */
/*         <!-- #SETTING: Grayscale icons -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps-grayscaleicons"*/
/*                        name="ST_grayscale_icons" <!-- IF ST_grayscale_icons -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps-grayscaleicons" class="slickpanel-section__setting__label">*/
/*                 <strong>Dim stale forum-icons</strong>*/
/*                 <p>Dim and grayscale icons/images of forums that have no new content</p>*/
/*             </label>*/
/*         </div>*/
/* */
/*         <!-- #SETTING: Relative timstamps -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps-timestamps"*/
/*                        name="ST_timestamps" <!-- IF ST_timestamps != '0' -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps-timestamps" class="slickpanel-section__setting__label">*/
/*                 <strong>Relative Timstamps</strong>*/
/*                 <p>Show relative time (e.g. "4 hours ago", "last month") instead of absoulte date. Does not work with non-english & non-default timestamp settings</p>*/
/*             </label>*/
/*         </div>*/
/* */
/*         <!-- #SETTING: Sticky header -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps__stickyheader"*/
/*                         name="ST_stickyheader" <!-- IF ST_stickyheader != '0' -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__stickyheader" class="slickpanel-section__setting__label">*/
/*                 <strong>Sticky header</strong>*/
/*                 <p>Always keep header on top</p>*/
/*             </label>*/
/*         </div>*/
/* */
/*         <!-- #SETTING: Round avatars -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps__roundAvatars"*/
/*                        data-toggleclass='["body","roundAvatars-enabled"]'*/
/*                         name="ST_roundAvatars" <!-- IF ST_roundAvatars -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__roundAvatars" class="slickpanel-section__setting__label">*/
/*                 <strong>Round avatars</strong>*/
/*                 <p>round and round</p>*/
/*             </label>*/
/*         </div>*/
/* */
/*         <!-- #SETTING: Modern stats -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps__modernitemstats"*/
/*                         name="ST_modern_item_stats" <!-- IF ST_modern_item_stats != '0' -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__modernitemstats" class="slickpanel-section__setting__label">*/
/*                 <strong>Modern stats display</strong>*/
/*                 <p>Modern statistics style in viewforum section</p>*/
/*             </label>*/
/*         </div>*/
/* */
/*         <!-- #SETTING: Quick scroll -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps__quickscroll"*/
/*                         name="ST_quickscroll" <!-- IF ST_quickscroll -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__quickscroll" class="slickpanel-section__setting__label">*/
/*                 <strong>Quick scroll</strong>*/
/*                 <p>Floating buttons to quickly scroll to top or bottom of the page (only shows on long pages)</p>*/
/*             </label>*/
/*         </div>*/
/* */
/*         <!-- #SETTING: Complex footer -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps__complexfooter"*/
/*                        name="ST_complex_footer" <!-- IF ST_complex_footer -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__complexfooter" class="slickpanel-section__setting__label">*/
/*                 <strong>Complex footer</strong>*/
/*                 <p>Enable complex footer. Edit <code>styles/canvas/template/custom/complex_footer.html</code> to customize</p>*/
/*             </label>*/
/*         </div>*/
/* */
/* */
/*         <!-- #SETTING: Pinch zoom -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input  type="checkbox"*/
/*                         class="st-toggleswitch" id="sps__pinchzoom"*/
/*                         name="ST_pinchzoom" <!-- IF ST_pinchzoom -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__pinchzoom" class="slickpanel-section__setting__label">*/
/*                 <strong>Pinch zoom</strong>*/
/*                 <p>Allow pinch zooming on touch devices.</p>*/
/*             </label>*/
/*         </div>*/
/* */
/* */
/* */
/*         <!-- #SETTING: Fast click -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input  type="checkbox"*/
/*                         class="st-toggleswitch" id="sps__fastclick"*/
/*                         name="ST_fastclick" <!-- IF ST_fastclick != '0' -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__fastclick" class="slickpanel-section__setting__label">*/
/*                 <strong>Fastclick <span class="label label-info">Recommended</span></strong>{slickthemes.fastclick}*/
/*                 <p>Remove 300ms tap delay on touch devices<br>*/
/*                 <em>Does not affect no-touch devices at all. fastclicks.js is loaded only on touch devices</em></p>*/
/*             </label>*/
/*         </div>*/
/* */
/*     <!-- #SETTING: OneAll -->*/
/*     <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*         <div class="slickpanel-section__setting__input">*/
/*             <input type="checkbox"*/
/*                    class="st-toggleswitch" id="sps-oneall"*/
/*                    name="ST_oneall__header" <!-- IF ST_oneall__header != '0' -->checked<!-- ENDIF -->*/
/*                     />*/
/*         </div>*/
/*         <label for="sps-oneall" class="slickpanel-section__setting__label">*/
/*             <strong>OneAll in header [<a href="https://docs.oneall.com/plugins/guide/social-login-phpbb/3.1/">oneall extension</a>]</strong>*/
/*             <p>If disabled, oneAll will show in sidebar. Regardless of this setting its always shown in quicklogin and registration</p>*/
/*         </label>*/
/*     </div>*/
/* */
/*     </div>*/
/*   </div>*/
/*   <div role="tabpanel" class="tab-pane" id="gAnalytics">*/
/*     <!-- subsection: Analytics ================== -->*/
/*     <div class="slickpanel-section">*/
/* */
/*         <!-- #SETTING: Google analytics -->*/
/*         <div class="slickpanel-section__setting">*/
/*             <div class="slickpanel-section__setting__label">*/
/*                 <strong>Google Analytics Tracking ID</strong>*/
/*                 <p>Paste your your google analytics tracking ID here. Leave empty to disable*/
/*                 <br>The ID looks something like UA-XXXXXXXX-X*/
/*                 </p>*/
/*             </div>*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input class="form-control" type="text"*/
/*                        name="ST_g_analytics_ID"*/
/*                        value='{ST_g_analytics_ID}' />*/
/*             </div>*/
/*         </div>*/
/* */
/*           <!-- #SETTING: Clicky analytics -->*/
/*           <div class="slickpanel-section__setting">*/
/*               <div class="slickpanel-section__setting__label">*/
/*                   <strong>Clicky site ID</strong>*/
/*                   <p>Enter your site ID here (You can find site ID in <code>preferences -> info -> site information</code>) Leave empty to disable<br>*/
/*                   The theme uses asynchronous tracking code</p>*/
/*               </div>*/
/*               <div class="slickpanel-section__setting__input">*/
/*                   <input class="form-control" type="text"*/
/*                          name="ST_c_analytics_ID"*/
/*                          value='{ST_c_analytics_ID}' />*/
/*               </div>*/
/*           </div>*/
/* */
/*         <div class="alert alert-info">*/
/*           <strong>Custom tracking code:</strong> If you wish to manually insert your tracking code, leave both of the above fields empty and add your code in <code>styles/canvas/template/custom/extra_js.html</code>.*/
/*         </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/*   <div role="tabpanel" class="tab-pane" id="postAuthor">*/
/*     <!-- subsection: postAuthor ================== -->*/
/*     <div class="slickpanel-section">*/
/* */
/* */
/*         <!-- #SETTING: Topic Author Label -->*/
/*         <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input type="checkbox"*/
/*                        class="st-toggleswitch" id="sps__topicAuthorLabel"*/
/*                         name="ST_topicAuthorLabel" <!-- IF ST_topicAuthorLabel != '0' -->checked<!-- ENDIF -->*/
/*                         />*/
/*             </div>*/
/*             <label for="sps__topicAuthorLabel" class="slickpanel-section__setting__label">*/
/*                 <strong>Display</strong>*/
/*                 <p>Show "Topic Author" label under topic author's avatar</p>*/
/*             </label>*/
/*         </div>*/
/* */
/* */
/*         <!-- #SETTING: TopicAuthor Label Text -->*/
/*         <div class="slickpanel-section__setting">*/
/*             <div class="slickpanel-section__setting__label">*/
/*                 <strong>Label Text</strong>*/
/*             </div>*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input class="form-control" type="text"*/
/*                        name="ST_topicAuthorLabel__text"*/
/*                        data-manipulate='[".topic-author-label .label","text"]'*/
/*                         data-default="{L_TOPIC} {L_AUTHOR}"*/
/*                         value="{ST_topicAuthorLabel__text}"*/
/*                        placeholder="Default" />*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <!-- #SETTING: TopicAuthor Label background -->*/
/*         <div class="slickpanel-section__setting">*/
/*             <div class="slickpanel-section__setting__label">*/
/*                 <strong>Label background color</strong>*/
/*             </div>*/
/*             <div class="slickpanel-section__setting__input">*/
/*                 <input class="form-control" type="text"*/
/*                         data-colorchange='[".topic-author-label .label","background-color"]'*/
/*                        name="ST_topicAuthorLabel__bg"*/
/*                        value="{ST_topicAuthorLabel__bg}" />*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* */
/* </div>*/
/* */
