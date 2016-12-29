<?php

/* order/index.html.twig */
class __TwigTemplate_396d88b1e1b2f73bc221d08beb946169b1b8fc9505ccc8651192afbc7e9e0688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.admin.html.twig", "order/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76807b97d104f1a5142956f1c51dddfa71988e33404c940e29597c100c89ea64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76807b97d104f1a5142956f1c51dddfa71988e33404c940e29597c100c89ea64->enter($__internal_76807b97d104f1a5142956f1c51dddfa71988e33404c940e29597c100c89ea64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_dd1a5f13f8b71a00f3df507b5e677046f907863684bc0031efcdacad923112d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1a5f13f8b71a00f3df507b5e677046f907863684bc0031efcdacad923112d9->enter($__internal_dd1a5f13f8b71a00f3df507b5e677046f907863684bc0031efcdacad923112d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76807b97d104f1a5142956f1c51dddfa71988e33404c940e29597c100c89ea64->leave($__internal_76807b97d104f1a5142956f1c51dddfa71988e33404c940e29597c100c89ea64_prof);

        
        $__internal_dd1a5f13f8b71a00f3df507b5e677046f907863684bc0031efcdacad923112d9->leave($__internal_dd1a5f13f8b71a00f3df507b5e677046f907863684bc0031efcdacad923112d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e2a9df8d0a4ef56aaf5447563658f3c13d4b9671ab63d45b9c2dc5341f54ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2a9df8d0a4ef56aaf5447563658f3c13d4b9671ab63d45b9c2dc5341f54ccd->enter($__internal_6e2a9df8d0a4ef56aaf5447563658f3c13d4b9671ab63d45b9c2dc5341f54ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13d98007c07a34efd7f3dd9eb8c5a721008781f5b47e7cd9a6835387cecd6132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d98007c07a34efd7f3dd9eb8c5a721008781f5b47e7cd9a6835387cecd6132->enter($__internal_13d98007c07a34efd7f3dd9eb8c5a721008781f5b47e7cd9a6835387cecd6132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Finalisation du panier </h1>
   <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/" . (isset($context["pdffile"]) ? $context["pdffile"] : $this->getContext($context, "pdffile")))), "html", null, true);
        echo "\">Download!</a>
";
        
        $__internal_13d98007c07a34efd7f3dd9eb8c5a721008781f5b47e7cd9a6835387cecd6132->leave($__internal_13d98007c07a34efd7f3dd9eb8c5a721008781f5b47e7cd9a6835387cecd6132_prof);

        
        $__internal_6e2a9df8d0a4ef56aaf5447563658f3c13d4b9671ab63d45b9c2dc5341f54ccd->leave($__internal_6e2a9df8d0a4ef56aaf5447563658f3c13d4b9671ab63d45b9c2dc5341f54ccd_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46830fc79e4703e9e354974617da0485ecf90d4dd03d76c8402d8c679ac4fe0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46830fc79e4703e9e354974617da0485ecf90d4dd03d76c8402d8c679ac4fe0f->enter($__internal_46830fc79e4703e9e354974617da0485ecf90d4dd03d76c8402d8c679ac4fe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_251ed9041fe0785fbc5cfa93f90d3791272da26ab7785a45bece8e00a8012736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251ed9041fe0785fbc5cfa93f90d3791272da26ab7785a45bece8e00a8012736->enter($__internal_251ed9041fe0785fbc5cfa93f90d3791272da26ab7785a45bece8e00a8012736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
";
        
        $__internal_251ed9041fe0785fbc5cfa93f90d3791272da26ab7785a45bece8e00a8012736->leave($__internal_251ed9041fe0785fbc5cfa93f90d3791272da26ab7785a45bece8e00a8012736_prof);

        
        $__internal_46830fc79e4703e9e354974617da0485ecf90d4dd03d76c8402d8c679ac4fe0f->leave($__internal_46830fc79e4703e9e354974617da0485ecf90d4dd03d76c8402d8c679ac4fe0f_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_975d9e515bb8b96d2d628c9a033a37172ed590b3d7ded4302c4580e025c0421c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975d9e515bb8b96d2d628c9a033a37172ed590b3d7ded4302c4580e025c0421c->enter($__internal_975d9e515bb8b96d2d628c9a033a37172ed590b3d7ded4302c4580e025c0421c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d2cd43a0ce56230841d3e4a75386394e2145fef3a7c6329bf9bdc16d26270b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2cd43a0ce56230841d3e4a75386394e2145fef3a7c6329bf9bdc16d26270b7->enter($__internal_0d2cd43a0ce56230841d3e4a75386394e2145fef3a7c6329bf9bdc16d26270b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d2cd43a0ce56230841d3e4a75386394e2145fef3a7c6329bf9bdc16d26270b7->leave($__internal_0d2cd43a0ce56230841d3e4a75386394e2145fef3a7c6329bf9bdc16d26270b7_prof);

        
        $__internal_975d9e515bb8b96d2d628c9a033a37172ed590b3d7ded4302c4580e025c0421c->leave($__internal_975d9e515bb8b96d2d628c9a033a37172ed590b3d7ded4302c4580e025c0421c_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  76 => 10,  67 => 9,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.admin.html.twig' %}

{% block body %}

<h1>Finalisation du panier </h1>
   <a href=\"{{ asset(\"upload/\" ~ pdffile ) }}\">Download!</a>
{% endblock %}

{% block javascripts %}

{% endblock %}

{% block stylesheets %}
{% endblock %}
", "order/index.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/order/index.html.twig");
    }
}
