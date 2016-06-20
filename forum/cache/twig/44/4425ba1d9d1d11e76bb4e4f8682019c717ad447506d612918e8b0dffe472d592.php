<?php

/* custom/custom.js */
class __TwigTemplate_0ad0bb4c9530a219f8720c6785ea0fc0666b75458795c24fe148a123ebadf2f4 extends Twig_Template
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
        echo "/* Google webfont loader */
WebFontConfig = {
  google: { families: [ 'Roboto:400,500,400italic,300,700:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  //s.parentNode.insertBefore(wf, s);
})();

//Put your custom javascript here
//This is executed after other scripts
";
    }

    public function getTemplateName()
    {
        return "custom/custom.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /* Google webfont loader *//* */
/* WebFontConfig = {*/
/*   google: { families: [ 'Roboto:400,500,400italic,300,700:latin' ] }*/
/* };*/
/* (function() {*/
/*   var wf = document.createElement('script');*/
/*   wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +*/
/*     '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';*/
/*   wf.type = 'text/javascript';*/
/*   wf.async = 'true';*/
/*   var s = document.getElementsByTagName('script')[0];*/
/*   //s.parentNode.insertBefore(wf, s);*/
/* })();*/
/* */
/* //Put your custom javascript here*/
/* //This is executed after other scripts*/
/* */
