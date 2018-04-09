<?php

/* base.html.twig */
class __TwigTemplate_aa2a2ff5354c90d7993ad3cdbe7ddf5f831f4b969119fc807f61d12c866909ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2435bd0f4faab1d45122fe7e29137e2686fa16a32f3104996269df678061500a = $this->env->getExtension("native_profiler");
        $__internal_2435bd0f4faab1d45122fe7e29137e2686fa16a32f3104996269df678061500a->enter($__internal_2435bd0f4faab1d45122fe7e29137e2686fa16a32f3104996269df678061500a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        \t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"Responsive Personal Portfolio vCard Template\">
\t<meta name=\"author\" content=\"Ahmed Faruk\">

\t<title>IAMX – Responsive Personal Portfolio vCard Template</title>

  <!-- Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
\t<!-- Bootstrap core CSS -->
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t<!-- Font Awesome CSS -->
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t<!-- Animate css -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Magnific css -->
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Custom styles CSS -->
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
  <!-- Responsive CSS -->
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
  <![endif]-->

  <link rel=\"shortcut icon\" href=\"assets/images/ico/favicon.png\">
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/images/ico/apple-touch-icon-144-precomposed.png\">
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"assets/images/ico/apple-touch-icon-114-precomposed.png\">
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/images/ico/apple-touch-icon-72-precomposed.png\">
  <link rel=\"apple-touch-icon-precomposed\" href=\"assets/images/ico/apple-touch-icon-57-precomposed.png\">

        <meta charset=\"UTF-8\" />
        <title>";
        // line 40
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
   
   
   
   
   
    <body>
        <!-- Javascript files -->
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "        
    </body>
</html>
";
        
        $__internal_2435bd0f4faab1d45122fe7e29137e2686fa16a32f3104996269df678061500a->leave($__internal_2435bd0f4faab1d45122fe7e29137e2686fa16a32f3104996269df678061500a_prof);

    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $__internal_5457df9d85fdaa20e2cba0838c8775ebc314cb306f8869914b3c5add2a33dded = $this->env->getExtension("native_profiler");
        $__internal_5457df9d85fdaa20e2cba0838c8775ebc314cb306f8869914b3c5add2a33dded->enter($__internal_5457df9d85fdaa20e2cba0838c8775ebc314cb306f8869914b3c5add2a33dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5457df9d85fdaa20e2cba0838c8775ebc314cb306f8869914b3c5add2a33dded->leave($__internal_5457df9d85fdaa20e2cba0838c8775ebc314cb306f8869914b3c5add2a33dded_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5aa5c323033f79b6bad842fd229a1be7ba242b860ac3abd2a9f9e1e0614ecd1d = $this->env->getExtension("native_profiler");
        $__internal_5aa5c323033f79b6bad842fd229a1be7ba242b860ac3abd2a9f9e1e0614ecd1d->enter($__internal_5aa5c323033f79b6bad842fd229a1be7ba242b860ac3abd2a9f9e1e0614ecd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5aa5c323033f79b6bad842fd229a1be7ba242b860ac3abd2a9f9e1e0614ecd1d->leave($__internal_5aa5c323033f79b6bad842fd229a1be7ba242b860ac3abd2a9f9e1e0614ecd1d_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd1e8296234bc32e92e155ac9818f0bc3df3f734f7081bdf387cc889468fe87f = $this->env->getExtension("native_profiler");
        $__internal_dd1e8296234bc32e92e155ac9818f0bc3df3f734f7081bdf387cc889468fe87f->enter($__internal_dd1e8296234bc32e92e155ac9818f0bc3df3f734f7081bdf387cc889468fe87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "        
        ";
        
        $__internal_dd1e8296234bc32e92e155ac9818f0bc3df3f734f7081bdf387cc889468fe87f->leave($__internal_dd1e8296234bc32e92e155ac9818f0bc3df3f734f7081bdf387cc889468fe87f_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d024153c8956e12d254435263587d93fe5db2d2e0ba5ec4f49633c9033c856d = $this->env->getExtension("native_profiler");
        $__internal_4d024153c8956e12d254435263587d93fe5db2d2e0ba5ec4f49633c9033c856d->enter($__internal_4d024153c8956e12d254435263587d93fe5db2d2e0ba5ec4f49633c9033c856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "        \t
\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/smoothscroll.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/wow.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script> 
  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.shuffle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"http://a.vimeocdn.com/js/froogaloop2.min.js') }}\"></script>
  <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false\"></script>
  <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/scripts.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_4d024153c8956e12d254435263587d93fe5db2d2e0ba5ec4f49633c9033c856d->leave($__internal_4d024153c8956e12d254435263587d93fe5db2d2e0ba5ec4f49633c9033c856d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 71,  212 => 69,  207 => 67,  203 => 66,  199 => 65,  195 => 64,  191 => 63,  187 => 62,  183 => 61,  179 => 60,  175 => 59,  171 => 58,  167 => 57,  164 => 56,  158 => 55,  150 => 52,  144 => 51,  133 => 41,  121 => 40,  111 => 73,  109 => 55,  106 => 54,  104 => 51,  91 => 42,  89 => 41,  85 => 40,  66 => 24,  61 => 22,  56 => 20,  51 => 18,  46 => 16,  41 => 14,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         	<meta charset="UTF-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<meta name="description" content="Responsive Personal Portfolio vCard Template">*/
/* 	<meta name="author" content="Ahmed Faruk">*/
/* */
/* 	<title>IAMX – Responsive Personal Portfolio vCard Template</title>*/
/* */
/*   <!-- Web Fonts -->*/
/*   <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>*/
/* 	<!-- Bootstrap core CSS -->*/
/* 	<link href="{{asset ('template/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">*/
/* 	<!-- Font Awesome CSS -->*/
/* 	<link href="{{asset ('template/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">*/
/* 	<!-- Animate css -->*/
/*   <link href="{{asset ('template/css/animate.css') }}" rel="stylesheet">*/
/*   <!-- Magnific css -->*/
/* 	<link href="{{asset ('template/css/magnific-popup.css') }}" rel="stylesheet">*/
/* 	<!-- Custom styles CSS -->*/
/* 	<link href="{{asset ('template/css/style.css') }}" rel="stylesheet" media="screen">*/
/*   <!-- Responsive CSS -->*/
/*   <link href="{{asset ('template/css/responsive.css') }}" rel="stylesheet">*/
/* */
/*   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*   <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*   <![endif]-->*/
/* */
/*   <link rel="shortcut icon" href="assets/images/ico/favicon.png">*/
/*   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">*/
/*   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">*/
/*   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">*/
/*   <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">*/
/* */
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*    */
/*    */
/*    */
/*    */
/*    */
/*     <body>*/
/*         <!-- Javascript files -->*/
/*         {% block body %}*/
/*         */
/*         {% endblock %}*/
/*         */
/*         {% block javascripts %}*/
/*         	*/
/* 	<script src="{{asset('template/js/jquery.js') }}"></script>*/
/* 	<script src="{{asset('template/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*   <script src="{{asset('template/js/jquery.stellar.min.js') }}"></script>*/
/* 	<script src="{{asset('template/js/jquery.sticky.js') }}"></script>*/
/*   <script src="{{asset('template/smoothscroll.js') }}"></script>*/
/* 	<script src="{{asset('template/js/wow.min.js') }}"></script>*/
/*   <script src="{{asset('template/js/jquery.countTo.js') }}"></script>*/
/*   <script src="{{asset('template/js/jquery.inview.min.js') }}"></script> */
/*   <script src="{{asset('template/js/jquery.easypiechart.js') }}"></script>*/
/*   <script src="{{asset('template/js/jquery.shuffle.min.js') }}"></script>*/
/*   <script src="{{asset('template/js/jquery.magnific-popup.min.js') }}"></script>*/
/*   <script src="http://a.vimeocdn.com/js/froogaloop2.min.js') }}"></script>*/
/*   <script src="{{asset('template/js/jquery.fitvids.js') }}"></script>*/
/*   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>*/
/*   <script src="{{asset('template/js/scripts.js') }}"></script>*/
/*   {% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
