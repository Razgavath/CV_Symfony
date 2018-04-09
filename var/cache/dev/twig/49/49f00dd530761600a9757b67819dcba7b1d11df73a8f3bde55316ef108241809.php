<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_730bd54c72d0f008a52430b787001293fc2ed64099dd7fc29a4fb58d1b6bad78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da5add1d43ec3a8fec0a90006c42c192e1774653d2ac7ab2e2e53b98ccb98813 = $this->env->getExtension("native_profiler");
        $__internal_da5add1d43ec3a8fec0a90006c42c192e1774653d2ac7ab2e2e53b98ccb98813->enter($__internal_da5add1d43ec3a8fec0a90006c42c192e1774653d2ac7ab2e2e53b98ccb98813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da5add1d43ec3a8fec0a90006c42c192e1774653d2ac7ab2e2e53b98ccb98813->leave($__internal_da5add1d43ec3a8fec0a90006c42c192e1774653d2ac7ab2e2e53b98ccb98813_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f709f76c04a84a527b660915ad8816ec6b7deed21a48f17dbb64b5017a91a6f2 = $this->env->getExtension("native_profiler");
        $__internal_f709f76c04a84a527b660915ad8816ec6b7deed21a48f17dbb64b5017a91a6f2->enter($__internal_f709f76c04a84a527b660915ad8816ec6b7deed21a48f17dbb64b5017a91a6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f709f76c04a84a527b660915ad8816ec6b7deed21a48f17dbb64b5017a91a6f2->leave($__internal_f709f76c04a84a527b660915ad8816ec6b7deed21a48f17dbb64b5017a91a6f2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c19667ab998dbc4f2defe511625f367905e819bb0346bd18851bef6ae6767ff = $this->env->getExtension("native_profiler");
        $__internal_8c19667ab998dbc4f2defe511625f367905e819bb0346bd18851bef6ae6767ff->enter($__internal_8c19667ab998dbc4f2defe511625f367905e819bb0346bd18851bef6ae6767ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c19667ab998dbc4f2defe511625f367905e819bb0346bd18851bef6ae6767ff->leave($__internal_8c19667ab998dbc4f2defe511625f367905e819bb0346bd18851bef6ae6767ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f57d41b7a312968ad6325179d307db8105311cc02425adddb8ccc297ab7e2876 = $this->env->getExtension("native_profiler");
        $__internal_f57d41b7a312968ad6325179d307db8105311cc02425adddb8ccc297ab7e2876->enter($__internal_f57d41b7a312968ad6325179d307db8105311cc02425adddb8ccc297ab7e2876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f57d41b7a312968ad6325179d307db8105311cc02425adddb8ccc297ab7e2876->leave($__internal_f57d41b7a312968ad6325179d307db8105311cc02425adddb8ccc297ab7e2876_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
