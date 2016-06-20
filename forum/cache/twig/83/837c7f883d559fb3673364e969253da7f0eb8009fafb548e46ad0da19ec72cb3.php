<?php

/* posting_buttons.html */
class __TwigTemplate_9622da2e1036a6361c01dc6544da9f584c03a63f00e58d9b5b16cd9c12c4ef47 extends Twig_Template
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
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 5
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"));
        echo "',
\t\ti: '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"));
        echo "',
\t\tu: '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"));
        echo "',
\t\tq: '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"));
        echo "',
\t\tc: '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"));
        echo "',
\t\tl: '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"));
        echo "',
\t\to: '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"));
        echo "',
\t\tp: '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"));
        echo "',
\t\tw: '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"));
        echo "',
\t\ta: '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"));
        echo "',
\t\ts: '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"));
        echo "',
\t\tf: '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"));
        echo "',
\t\ty: '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"));
        echo "',
\t\td: '";
        // line 29
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"));
        echo "'
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 31
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 42
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR_HIDE"));
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 46
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR"));
        echo "';
\t\t}
\t}

// ]]>
</script>
";
        // line 52
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 53
        echo "
";
        // line 54
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 55
            echo "
<div id=\"st_editor_buttons\" ";
            // line 56
            if (((isset($context["ST_wysiwyg"]) ? $context["ST_wysiwyg"] : null) != 0)) {
                echo " style=\"display:hidden\"";
            }
            echo ">
<div id=\"colour_palette\" class=\"st-editor__colorpalette\">
\t<div class=\"st-editor__colorpalette__title\">";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo "</div>
\t<div id=\"color_palette_placeholder\" class=\"st-editor__colorpalette__colors\" data-bbcode=\"true\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\"></div>
</div>

";
            // line 62
            // line 63
            echo "<div id=\"format-buttons\" class=\"st-editor__formatbuttons\">
\t<span class=\"bbcode-section\">
\t<button type=\"button\" class=\"button2 bbcode-b\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" onclick=\"bbstyle(0)\" title=\"";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
            echo "\"><i class=\"fi fi-format-bold\"></i></button>
\t<button type=\"button\" class=\"button2 bbcode-i\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" onclick=\"bbstyle(2)\" title=\"";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
            echo "\"><i class=\"fi fi-format-italic\"></i></button>
\t<button type=\"button\" class=\"button2 bbcode-u\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" onclick=\"bbstyle(4)\" title=\"";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
            echo "\"><i class=\"fi fi-format-underline\"></i></button>
\t</span>
\t<span class=\"bbcode-section\">
\t<button type=\"button\" class=\"button2 bbcode-list\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" onclick=\"bbstyle(10)\" title=\"";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
            echo "\"><i class=\"fi fi-format-list-bulleted\"></i></button>
\t<button type=\"button\" class=\"button2 bbcode-list-\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" onclick=\"bbstyle(12)\" title=\"";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
            echo "\"><i class=\"fi fi-format-list-numbers\"></i></button>
\t<button type=\"button\" class=\"button2 bbcode-asterisk\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" onclick=\"bbstyle(-1)\" title=\"";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
            echo "\">[*]</button>
\t</span>

\t<span class=\"bbcode-section\">
\t\t<button type=\"button\" class=\"button2 bbcode-code\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" onclick=\"bbstyle(8)\" title=\"";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
            echo "\"><i class=\"fi fi-code-array\"></i></button>
\t";
            // line 77
            if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                // line 78
                echo "\t\t<button type=\"button\" class=\"button2 bbcode-quote\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
                echo "\"><i class=\"fi fi-format-quote\"></i></button>
\t";
            }
            // line 80
            echo "\t";
            if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                // line 81
                echo "\t\t<button type=\"button\" class=\"button2 bbcode-img\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
                echo "\"><i class=\"fi fi-image-area\"></i></button>
\t";
            }
            // line 83
            echo "\t";
            if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
                // line 84
                echo "\t\t<button type=\"button\" onclick=\"\$('#smiley-box').toggle()\" class=\"button2 bbcode-smiley\" accesskey=\"s\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SMILIES");
                echo "\"><i class=\"fi fi-emoticon\"></i></button>
\t";
            }
            // line 86
            echo "\t";
            if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                // line 87
                echo "\t\t<button type=\"button\" class=\"button2 bbcode-url\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
                echo "\"><i class=\"fi fi-link\"></i></button>
\t";
            }
            // line 89
            echo "\t</span>

\t";
            // line 91
            if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
                // line 92
                echo "\t\t<button type=\"button\" class=\"button2 bbcode-flash\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
                echo "\">Flash</button>
\t";
            }
            // line 94
            echo "
\t<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 97
            echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
            echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
            // line 98
            echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 99
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                // line 100
                echo "\t\t\t<option value=\"150\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 101
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                    // line 102
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 104
                echo "\t\t";
            }
            // line 105
            echo "\t</select>
\t<button type=\"button\" class=\"button2 bbcode-color\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            // line 106
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette();\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP");
            echo "\"><i class=\"fi fi-format-paint\"></i></button>

\t";
            // line 108
            // line 109
            echo "
\t";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 111
                echo "\t\t";
                if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "youtube")) {
                    // line 112
                    echo "\t\t<button type=\"button\" class=\"button2 bbcode-youtube\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" value=\"URL\" onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo ")\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\"><i class=\"fi fi-youtube-play\"></i></button>
\t\t";
                } else {
                    // line 114
                    echo "\t\t<input type=\"button\" class=\"button2 bbcode-";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG_CLEAN", array());
                    echo "\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                    echo "\" onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo ")\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\" />
\t\t";
                }
                // line 116
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>
";
            // line 118
            // line 119
            echo "</div>

<script type=\"text/javascript\">
\t_st.onloadfunctions.push(function(){
\t\t//reply page editor
\t\tif (Modernizr.touch && \$(window).width() < 1024) {
\t\t\treturn false;
\t\t}
\t\t_st.sceInit = function(){
\t\t\t\$('#message').sceditor({
\t\t\t\tplugins: \"bbcode\",
\t\t\t\tenablePasteFiltering: true,
\t\t\t\ttoolbar: \"source,maximize|bold,italic,underline,strike,subscript,superscript|left,center,right|bulletlist,orderedlist|font,size,color,removeformat|image,code,quote,link,unlink|emoticon,youtube,vimeo\",
\t\t\t\tstyle: \"";
            // line 132
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/css/sceditor.css\",
\t\t\t\t";
            // line 133
            if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
                // line 134
                echo "\t\t\t\temoticonsRoot: \"\",
\t\t\t\temoticons: {
\t\t\t\t\tdropdown: {
\t\t\t\t\t\t";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                    // line 138
                    echo "\t\t\t\t\t\t\" ";
                    echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                    echo "\": \"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                    echo "\"";
                    if ( !$this->getAttribute($context["smiley"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\temoticonsEnabled: false,
\t\t\t\tcolors: '#fff, #aaa, #555, #000,#16a085,#27ae60,#2980b9,#8e44ad,#2c3e50,#c0392b,#d35400,#f39c12'
\t\t\t});
\t\t\t_st.sceditor = \$('#message').sceditor('instance');

\t\t\t\$('#st_editor_buttons').hide();
\t\t}
\t\t_st.sceSetup();
\t})
</script>

";
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 143,  411 => 140,  405 => 139,  396 => 138,  392 => 137,  387 => 134,  385 => 133,  381 => 132,  366 => 119,  365 => 118,  362 => 117,  356 => 116,  342 => 114,  332 => 112,  329 => 111,  325 => 110,  322 => 109,  321 => 108,  314 => 106,  311 => 105,  308 => 104,  302 => 102,  300 => 101,  295 => 100,  293 => 99,  289 => 98,  285 => 97,  281 => 96,  277 => 95,  274 => 94,  268 => 92,  266 => 91,  262 => 89,  256 => 87,  253 => 86,  247 => 84,  244 => 83,  238 => 81,  235 => 80,  229 => 78,  227 => 77,  223 => 76,  216 => 72,  212 => 71,  208 => 70,  202 => 67,  198 => 66,  194 => 65,  190 => 63,  189 => 62,  182 => 58,  175 => 56,  172 => 55,  170 => 54,  167 => 53,  152 => 52,  143 => 46,  136 => 42,  125 => 33,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  38 => 11,  25 => 5,  19 => 1,);
    }
}
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	var form_name = 'postform';*/
/* 	var text_name = <!-- IF $SIG_EDIT -->'signature'<!-- ELSE -->'message'<!-- ENDIF -->;*/
/* 	var load_draft = false;*/
/* 	var upload = false;*/
/* */
/* 	// Define the bbCode tags*/
/* 	var bbcode = new Array();*/
/* 	var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'<!-- BEGIN custom_tags -->, {custom_tags.BBCODE_NAME}<!-- END custom_tags -->);*/
/* 	var imageTag = false;*/
/* */
/* 	// Helpline messages*/
/* 	var help_line = {*/
/* 		b: '{LA_BBCODE_B_HELP}',*/
/* 		i: '{LA_BBCODE_I_HELP}',*/
/* 		u: '{LA_BBCODE_U_HELP}',*/
/* 		q: '{LA_BBCODE_Q_HELP}',*/
/* 		c: '{LA_BBCODE_C_HELP}',*/
/* 		l: '{LA_BBCODE_L_HELP}',*/
/* 		o: '{LA_BBCODE_O_HELP}',*/
/* 		p: '{LA_BBCODE_P_HELP}',*/
/* 		w: '{LA_BBCODE_W_HELP}',*/
/* 		a: '{LA_BBCODE_A_HELP}',*/
/* 		s: '{LA_BBCODE_S_HELP}',*/
/* 		f: '{LA_BBCODE_F_HELP}',*/
/* 		y: '{LA_BBCODE_Y_HELP}',*/
/* 		d: '{LA_BBCODE_D_HELP}'*/
/* 		<!-- BEGIN custom_tags -->*/
/* 			,cb_{custom_tags.BBCODE_ID}: '{custom_tags.A_BBCODE_HELPLINE}'*/
/* 		<!-- END custom_tags -->*/
/* 	}*/
/* */
/* 	function change_palette()*/
/* 	{*/
/* 		phpbb.toggleDisplay('colour_palette');*/
/* 		e = document.getElementById('colour_palette');*/
/* */
/* 		if (e.style.display == 'block')*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR_HIDE}';*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR}';*/
/* 		}*/
/* 	}*/
/* */
/* // ]]>*/
/* </script>*/
/* <!-- INCLUDEJS {T_ASSETS_PATH}/javascript/editor.js -->*/
/* */
/* <!-- IF S_BBCODE_ALLOWED -->*/
/* */
/* <div id="st_editor_buttons" <!-- IF ST_wysiwyg != 0 --> style="display:hidden"<!-- ENDIF -->>*/
/* <div id="colour_palette" class="st-editor__colorpalette">*/
/* 	<div class="st-editor__colorpalette__title">{L_FONT_COLOR}</div>*/
/* 	<div id="color_palette_placeholder" class="st-editor__colorpalette__colors" data-bbcode="true" data-orientation="h" data-height="12" data-width="15"></div>*/
/* </div>*/
/* */
/* <!-- EVENT posting_editor_buttons_before -->*/
/* <div id="format-buttons" class="st-editor__formatbuttons">*/
/* 	<span class="bbcode-section">*/
/* 	<button type="button" class="button2 bbcode-b" accesskey="b" name="addbbcode0" value=" B " onclick="bbstyle(0)" title="{L_BBCODE_B_HELP}"><i class="fi fi-format-bold"></i></button>*/
/* 	<button type="button" class="button2 bbcode-i" accesskey="i" name="addbbcode2" value=" i " onclick="bbstyle(2)" title="{L_BBCODE_I_HELP}"><i class="fi fi-format-italic"></i></button>*/
/* 	<button type="button" class="button2 bbcode-u" accesskey="u" name="addbbcode4" value=" u " onclick="bbstyle(4)" title="{L_BBCODE_U_HELP}"><i class="fi fi-format-underline"></i></button>*/
/* 	</span>*/
/* 	<span class="bbcode-section">*/
/* 	<button type="button" class="button2 bbcode-list" accesskey="l" name="addbbcode10" value="List" onclick="bbstyle(10)" title="{L_BBCODE_L_HELP}"><i class="fi fi-format-list-bulleted"></i></button>*/
/* 	<button type="button" class="button2 bbcode-list-" accesskey="o" name="addbbcode12" value="List=" onclick="bbstyle(12)" title="{L_BBCODE_O_HELP}"><i class="fi fi-format-list-numbers"></i></button>*/
/* 	<button type="button" class="button2 bbcode-asterisk" accesskey="y" name="addlistitem" value="[*]" onclick="bbstyle(-1)" title="{L_BBCODE_LISTITEM_HELP}">[*]</button>*/
/* 	</span>*/
/* */
/* 	<span class="bbcode-section">*/
/* 		<button type="button" class="button2 bbcode-code" accesskey="c" name="addbbcode8" value="Code" onclick="bbstyle(8)" title="{L_BBCODE_C_HELP}"><i class="fi fi-code-array"></i></button>*/
/* 	<!-- IF S_BBCODE_QUOTE -->*/
/* 		<button type="button" class="button2 bbcode-quote" accesskey="q" name="addbbcode6" value="Quote" onclick="bbstyle(6)" title="{L_BBCODE_Q_HELP}"><i class="fi fi-format-quote"></i></button>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_BBCODE_IMG -->*/
/* 		<button type="button" class="button2 bbcode-img" accesskey="p" name="addbbcode14" value="Img" onclick="bbstyle(14)" title="{L_BBCODE_P_HELP}"><i class="fi fi-image-area"></i></button>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_SMILIES_ALLOWED and .smiley -->*/
/* 		<button type="button" onclick="$('#smiley-box').toggle()" class="button2 bbcode-smiley" accesskey="s" title="{L_SMILIES}"><i class="fi fi-emoticon"></i></button>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_LINKS_ALLOWED -->*/
/* 		<button type="button" class="button2 bbcode-url" accesskey="w" name="addbbcode16" value="URL" onclick="bbstyle(16)" title="{L_BBCODE_W_HELP}"><i class="fi fi-link"></i></button>*/
/* 	<!-- ENDIF -->*/
/* 	</span>*/
/* */
/* 	<!-- IF S_BBCODE_FLASH -->*/
/* 		<button type="button" class="button2 bbcode-flash" accesskey="d" name="addbbcode18" value="Flash" onclick="bbstyle(18)" title="{L_BBCODE_D_HELP}">Flash</button>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<select name="addbbcode20" class="bbcode-size" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="{L_BBCODE_F_HELP}">*/
/* 		<option value="50">{L_FONT_TINY}</option>*/
/* 		<option value="85">{L_FONT_SMALL}</option>*/
/* 		<option value="100" selected="selected">{L_FONT_NORMAL}</option>*/
/* 		<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 150 -->*/
/* 			<option value="150">{L_FONT_LARGE}</option>*/
/* 			<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 200 -->*/
/* 				<option value="200">{L_FONT_HUGE}</option>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	</select>*/
/* 	<button type="button" class="button2 bbcode-color" name="bbpalette" id="bbpalette" value="{L_FONT_COLOR}" onclick="change_palette();" title="{L_BBCODE_S_HELP}"><i class="fi fi-format-paint"></i></button>*/
/* */
/* 	<!-- EVENT posting_editor_buttons_custom_tags_before -->*/
/* */
/* 	<!-- BEGIN custom_tags -->*/
/* 		<!-- IF custom_tags.BBCODE_TAG == 'youtube' -->*/
/* 		<button type="button" class="button2 bbcode-youtube" name="addbbcode{custom_tags.BBCODE_ID}" value="URL" onclick="bbstyle({custom_tags.BBCODE_ID})" title="{custom_tags.BBCODE_HELPLINE}"><i class="fi fi-youtube-play"></i></button>*/
/* 		<!-- ELSE -->*/
/* 		<input type="button" class="button2 bbcode-{custom_tags.BBCODE_TAG_CLEAN}" name="addbbcode{custom_tags.BBCODE_ID}" value="{custom_tags.BBCODE_TAG}" onclick="bbstyle({custom_tags.BBCODE_ID})" title="{custom_tags.BBCODE_HELPLINE}" />*/
/* 		<!-- ENDIF -->*/
/* 	<!-- END custom_tags -->*/
/* </div>*/
/* <!-- EVENT posting_editor_buttons_after -->*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* 	_st.onloadfunctions.push(function(){*/
/* 		//reply page editor*/
/* 		if (Modernizr.touch && $(window).width() < 1024) {*/
/* 			return false;*/
/* 		}*/
/* 		_st.sceInit = function(){*/
/* 			$('#message').sceditor({*/
/* 				plugins: "bbcode",*/
/* 				enablePasteFiltering: true,*/
/* 				toolbar: "source,maximize|bold,italic,underline,strike,subscript,superscript|left,center,right|bulletlist,orderedlist|font,size,color,removeformat|image,code,quote,link,unlink|emoticon,youtube,vimeo",*/
/* 				style: "{T_THEME_PATH}/css/sceditor.css",*/
/* 				<!-- IF S_SMILIES_ALLOWED -->*/
/* 				emoticonsRoot: "",*/
/* 				emoticons: {*/
/* 					dropdown: {*/
/* 						<!-- BEGIN smiley -->*/
/* 						" {smiley.A_SMILEY_CODE}": "{smiley.SMILEY_IMG}"<!-- IF !smiley.S_LAST_ROW -->, <!-- ENDIF -->*/
/* 						<!-- END smiley -->*/
/* 					}*/
/* 				},*/
/* 				<!-- ENDIF -->*/
/* 				emoticonsEnabled: false,*/
/* 				colors: '#fff, #aaa, #555, #000,#16a085,#27ae60,#2980b9,#8e44ad,#2c3e50,#c0392b,#d35400,#f39c12'*/
/* 			});*/
/* 			_st.sceditor = $('#message').sceditor('instance');*/
/* */
/* 			$('#st_editor_buttons').hide();*/
/* 		}*/
/* 		_st.sceSetup();*/
/* 	})*/
/* </script>*/
/* */
/* <!-- ENDIF -->*/
/* */
