<?php

/* base.html.twig */
class __TwigTemplate_c6324f880934beaf146215f2983b93b0a8261207d57fc1f2dae0a16c9e710abd extends Twig_Template
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
\t<link href=\"assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">
\t<!-- Font Awesome CSS -->
\t<link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"screen\">
\t<!-- Animate css -->
  <link href=\"assets/css/animate.css\" rel=\"stylesheet\">
  <!-- Magnific css -->
\t<link href=\"assets/css/magnific-popup.css\" rel=\"stylesheet\">
\t<!-- Custom styles CSS -->
\t<link href=\"assets/css/style.css\" rel=\"stylesheet\" media=\"screen\">
  <!-- Responsive CSS -->
  <link href=\"assets/css/responsive.css\" rel=\"stylesheet\">

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
    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "        
        ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "        \t
\t<script src=\"assets/js/jquery.js\"></script>
\t<script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"assets/js/jquery.stellar.min.js\"></script>
\t<script src=\"assets/js/jquery.sticky.js\"></script>
  <script src=\"assets/js/smoothscroll.js\"></script>
\t<script src=\"assets/js/wow.min.js\"></script>
  <script src=\"assets/js/jquery.countTo.js\"></script>
  <script src=\"assets/js/jquery.inview.min.js\"></script> 
  <script src=\"assets/js/jquery.easypiechart.js\"></script>
  <script src=\"assets/js/jquery.shuffle.min.js\"></script>
  <script src=\"assets/js/jquery.magnific-popup.min.js\"></script>
  <script src=\"http://a.vimeocdn.com/js/froogaloop2.min.js\"></script>
  <script src=\"assets/js/jquery.fitvids.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false\"></script>
  <script src=\"assets/js/scripts.js\"></script>
  ";
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
        return array (  119 => 56,  116 => 55,  111 => 52,  108 => 51,  103 => 41,  97 => 40,  90 => 73,  88 => 55,  85 => 54,  83 => 51,  70 => 42,  68 => 41,  64 => 40,  23 => 1,);
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
/* 	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">*/
/* 	<!-- Font Awesome CSS -->*/
/* 	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">*/
/* 	<!-- Animate css -->*/
/*   <link href="assets/css/animate.css" rel="stylesheet">*/
/*   <!-- Magnific css -->*/
/* 	<link href="assets/css/magnific-popup.css" rel="stylesheet">*/
/* 	<!-- Custom styles CSS -->*/
/* 	<link href="assets/css/style.css" rel="stylesheet" media="screen">*/
/*   <!-- Responsive CSS -->*/
/*   <link href="assets/css/responsive.css" rel="stylesheet">*/
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
/* 	<script src="assets/js/jquery.js"></script>*/
/* 	<script src="assets/bootstrap/js/bootstrap.min.js"></script>*/
/*   <script src="assets/js/jquery.stellar.min.js"></script>*/
/* 	<script src="assets/js/jquery.sticky.js"></script>*/
/*   <script src="assets/js/smoothscroll.js"></script>*/
/* 	<script src="assets/js/wow.min.js"></script>*/
/*   <script src="assets/js/jquery.countTo.js"></script>*/
/*   <script src="assets/js/jquery.inview.min.js"></script> */
/*   <script src="assets/js/jquery.easypiechart.js"></script>*/
/*   <script src="assets/js/jquery.shuffle.min.js"></script>*/
/*   <script src="assets/js/jquery.magnific-popup.min.js"></script>*/
/*   <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>*/
/*   <script src="assets/js/jquery.fitvids.js"></script>*/
/*   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>*/
/*   <script src="assets/js/scripts.js"></script>*/
/*   {% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
