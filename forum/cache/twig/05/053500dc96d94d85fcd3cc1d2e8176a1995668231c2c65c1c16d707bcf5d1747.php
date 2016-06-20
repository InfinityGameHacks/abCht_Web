<?php

/* slickpanel/layout.html */
class __TwigTemplate_6c7e3a68bafff9550c190011a1e75faa1016f2ca2ac18a17e1f4a863a47deefc extends Twig_Template
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
        echo "<div class=\"slickpanel-section\">

    <!-- #SETTING: Post Author Alignment -->
    <div class=\"slickpanel-section__setting\">
        <div class=\"slickpanel-section__setting__label\">
            <strong>Post Author align</strong>
            <p>Choose author profile alignment (in topic view)</p>
        </div>
        <div class=\"slickpanel-section__setting__input\">
            <select class=\"form-control\"
                name=\"ST_post_authorAlign\"
                data-manipulate='[\"body\",\"class\"]'
                data-default='boxed'>
                <option value=\"postAuthorAlign-left\"\" ";
        // line 14
        if (( !(isset($context["ST_post_authorAlign"]) ? $context["ST_post_authorAlign"] : null) || ((isset($context["ST_post_authorAlign"]) ? $context["ST_post_authorAlign"] : null) == "postAuthorAlign-left"))) {
            echo "selected";
        }
        echo ">Left</option>
                <option value=\"postAuthorAlign-right\" ";
        // line 15
        if (((isset($context["ST_post_authorAlign"]) ? $context["ST_post_authorAlign"] : null) == "postAuthorAlign-right")) {
            echo "selected";
        }
        echo ">Right</option>
            </select>
        </div>
    </div>

    <!-- #SETTING: container type -->
    <div class=\"slickpanel-section__setting\">
        <div class=\"slickpanel-section__setting__label\">
            <strong>Container</strong>
            <p>Page container style</p>
        </div>
        <div class=\"slickpanel-section__setting__input\">
            <select class=\"form-control\"
                name=\"ST_container__type\"
                data-manipulate='[\"body\",\"containerclass\"]'
                data-default='boxed'>
                <option value=\"boxed\" ";
        // line 31
        if (((isset($context["ST_container__type"]) ? $context["ST_container__type"] : null) == "boxed")) {
            echo "selected";
        }
        echo ">Box</option>
                <option value=\"stretched\" ";
        // line 32
        if (((isset($context["ST_container__type"]) ? $context["ST_container__type"] : null) == "stretched")) {
            echo "selected";
        }
        echo ">Wide</option>
            </select>
        </div>
    </div>

    <!-- #SETTING: container width -->
    <div class=\"slickpanel-section__setting\">
        <div class=\"slickpanel-section__setting__label\">
            <strong>Container width</strong>
            <p>Container will not excced this width. Can be any valid unit (in px).</p>
        </div>
        <div class=\"slickpanel-section__setting__input\">
            <input  class=\"form-control\" type=\"number\"
\t\t\t\t\tname=\"ST_container__width\"
\t\t\t\t\tdata-manipulate='[\"";
        // line 46
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__container_width", array());
        echo "\",\"css\",\"max-width\",\"px\"]'
\t\t\t\t\tdata-default=\"1300\" min=\"1100\" value=\"";
        // line 47
        echo (isset($context["ST_container__width"]) ? $context["ST_container__width"] : null);
        echo "\"
\t\t\t\t\t\t/>
        </div>
    </div>

    <!-- #SETTING: Detached Breadcrumb -->
    <div class=\"slickpanel-section__setting slickpanel-togglesetting\">
        <div class=\"slickpanel-section__setting__input\">
            <input type=\"checkbox\"
                   class=\"st-toggleswitch\" id=\"sps__detachbc\"
                   data-toggleclass='[\".breadcrumbs-bar\",\"detached\"]'
                   name=\"ST_breadcrumbs__detach\" ";
        // line 58
        if ((isset($context["ST_breadcrumbs__detach"]) ? $context["ST_breadcrumbs__detach"] : null)) {
            echo "checked";
        }
        // line 59
        echo "                    />
        </div>
        <label for=\"sps__detachbc\" class=\"slickpanel-section__setting__label\">
            <strong>Detached breadcrumb bar</strong>
            <p>Display breadcrumb bar as a separate block (detach from neighbor)</p>
        </label>
    </div>

    <!-- #SETTING: Sidebar -->
    <div class=\"slickpanel-section__setting\">
        <div class=\"slickpanel-section__setting__label\">
            <strong>Sidebar display</strong>
            <p>show sidebar on these pages</p>
        </div>
        <div class=\"slickpanel-section__setting__input\">
            <label><input type=\"checkbox\" name=\"ST_sidebar__index\" ";
        // line 74
        if (((isset($context["ST_sidebar__index"]) ? $context["ST_sidebar__index"] : null) !== "0")) {
            echo "checked";
        }
        echo " /> Index</label>
            <label><input type=\"checkbox\" name=\"ST_sidebar__forum\" ";
        // line 75
        if ((isset($context["ST_sidebar__forum"]) ? $context["ST_sidebar__forum"] : null)) {
            echo "checked";
        }
        echo " /> Forum</label>
            <label><input type=\"checkbox\" name=\"ST_sidebar__topic\" ";
        // line 76
        if ((isset($context["ST_sidebar__topic"]) ? $context["ST_sidebar__topic"] : null)) {
            echo "checked";
        }
        echo " /> Topic</label>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "slickpanel/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 76,  131 => 75,  125 => 74,  108 => 59,  104 => 58,  90 => 47,  86 => 46,  67 => 32,  61 => 31,  40 => 15,  34 => 14,  19 => 1,);
    }
}
/* <div class="slickpanel-section">*/
/* */
/*     <!-- #SETTING: Post Author Alignment -->*/
/*     <div class="slickpanel-section__setting">*/
/*         <div class="slickpanel-section__setting__label">*/
/*             <strong>Post Author align</strong>*/
/*             <p>Choose author profile alignment (in topic view)</p>*/
/*         </div>*/
/*         <div class="slickpanel-section__setting__input">*/
/*             <select class="form-control"*/
/*                 name="ST_post_authorAlign"*/
/*                 data-manipulate='["body","class"]'*/
/*                 data-default='boxed'>*/
/*                 <option value="postAuthorAlign-left"" <!-- IF not ST_post_authorAlign or ST_post_authorAlign == 'postAuthorAlign-left'-->selected<!-- ENDIF -->>Left</option>*/
/*                 <option value="postAuthorAlign-right" <!-- IF ST_post_authorAlign == 'postAuthorAlign-right'-->selected<!-- ENDIF -->>Right</option>*/
/*             </select>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- #SETTING: container type -->*/
/*     <div class="slickpanel-section__setting">*/
/*         <div class="slickpanel-section__setting__label">*/
/*             <strong>Container</strong>*/
/*             <p>Page container style</p>*/
/*         </div>*/
/*         <div class="slickpanel-section__setting__input">*/
/*             <select class="form-control"*/
/*                 name="ST_container__type"*/
/*                 data-manipulate='["body","containerclass"]'*/
/*                 data-default='boxed'>*/
/*                 <option value="boxed" <!-- IF ST_container__type == 'boxed'-->selected<!-- ENDIF -->>Box</option>*/
/*                 <option value="stretched" <!-- IF ST_container__type == 'stretched'-->selected<!-- ENDIF -->>Wide</option>*/
/*             </select>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- #SETTING: container width -->*/
/*     <div class="slickpanel-section__setting">*/
/*         <div class="slickpanel-section__setting__label">*/
/*             <strong>Container width</strong>*/
/*             <p>Container will not excced this width. Can be any valid unit (in px).</p>*/
/*         </div>*/
/*         <div class="slickpanel-section__setting__input">*/
/*             <input  class="form-control" type="number"*/
/* 					name="ST_container__width"*/
/* 					data-manipulate='["{$SELECTOR__container_width}","css","max-width","px"]'*/
/* 					data-default="1300" min="1100" value="{ST_container__width}"*/
/* 						/>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- #SETTING: Detached Breadcrumb -->*/
/*     <div class="slickpanel-section__setting slickpanel-togglesetting">*/
/*         <div class="slickpanel-section__setting__input">*/
/*             <input type="checkbox"*/
/*                    class="st-toggleswitch" id="sps__detachbc"*/
/*                    data-toggleclass='[".breadcrumbs-bar","detached"]'*/
/*                    name="ST_breadcrumbs__detach" <!-- IF ST_breadcrumbs__detach -->checked<!-- ENDIF -->*/
/*                     />*/
/*         </div>*/
/*         <label for="sps__detachbc" class="slickpanel-section__setting__label">*/
/*             <strong>Detached breadcrumb bar</strong>*/
/*             <p>Display breadcrumb bar as a separate block (detach from neighbor)</p>*/
/*         </label>*/
/*     </div>*/
/* */
/*     <!-- #SETTING: Sidebar -->*/
/*     <div class="slickpanel-section__setting">*/
/*         <div class="slickpanel-section__setting__label">*/
/*             <strong>Sidebar display</strong>*/
/*             <p>show sidebar on these pages</p>*/
/*         </div>*/
/*         <div class="slickpanel-section__setting__input">*/
/*             <label><input type="checkbox" name="ST_sidebar__index" <!-- IF ST_sidebar__index !== '0' -->checked<!-- ENDIF --> /> Index</label>*/
/*             <label><input type="checkbox" name="ST_sidebar__forum" <!-- IF ST_sidebar__forum -->checked<!-- ENDIF --> /> Forum</label>*/
/*             <label><input type="checkbox" name="ST_sidebar__topic" <!-- IF ST_sidebar__topic -->checked<!-- ENDIF --> /> Topic</label>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
