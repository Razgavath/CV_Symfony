<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a16629f25521703f316af498cf562816b115516a2e2a7746ee72f4b850de7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e76b30b4862aa0da12bd7d41501c24971cec65a035b8ecc170f68e031e40229d = $this->env->getExtension("native_profiler");
        $__internal_e76b30b4862aa0da12bd7d41501c24971cec65a035b8ecc170f68e031e40229d->enter($__internal_e76b30b4862aa0da12bd7d41501c24971cec65a035b8ecc170f68e031e40229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76b30b4862aa0da12bd7d41501c24971cec65a035b8ecc170f68e031e40229d->leave($__internal_e76b30b4862aa0da12bd7d41501c24971cec65a035b8ecc170f68e031e40229d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87665327815570ad5362b57de2cc23192246fab80c406a1bb18202dae421c97b = $this->env->getExtension("native_profiler");
        $__internal_87665327815570ad5362b57de2cc23192246fab80c406a1bb18202dae421c97b->enter($__internal_87665327815570ad5362b57de2cc23192246fab80c406a1bb18202dae421c97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87665327815570ad5362b57de2cc23192246fab80c406a1bb18202dae421c97b->leave($__internal_87665327815570ad5362b57de2cc23192246fab80c406a1bb18202dae421c97b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33691ea79d65c7f47464a23cec2970efaf9237f2b3295d989ec6e3884c3af607 = $this->env->getExtension("native_profiler");
        $__internal_33691ea79d65c7f47464a23cec2970efaf9237f2b3295d989ec6e3884c3af607->enter($__internal_33691ea79d65c7f47464a23cec2970efaf9237f2b3295d989ec6e3884c3af607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33691ea79d65c7f47464a23cec2970efaf9237f2b3295d989ec6e3884c3af607->leave($__internal_33691ea79d65c7f47464a23cec2970efaf9237f2b3295d989ec6e3884c3af607_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd413ac9c06343ced915970890464b3b25bc3e67ed9cac52d1c62e6384ce80ec = $this->env->getExtension("native_profiler");
        $__internal_cd413ac9c06343ced915970890464b3b25bc3e67ed9cac52d1c62e6384ce80ec->enter($__internal_cd413ac9c06343ced915970890464b3b25bc3e67ed9cac52d1c62e6384ce80ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cd413ac9c06343ced915970890464b3b25bc3e67ed9cac52d1c62e6384ce80ec->leave($__internal_cd413ac9c06343ced915970890464b3b25bc3e67ed9cac52d1c62e6384ce80ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
