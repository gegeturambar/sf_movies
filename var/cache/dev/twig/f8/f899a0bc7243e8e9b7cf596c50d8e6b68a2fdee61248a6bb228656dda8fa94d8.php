<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df400af979cd52c769091b8989079519519a6d0ad1e471bfccf6fa4979cb27db extends Twig_Template
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
        $__internal_d4a015669204265476d08208d0d8af063f6486a0ad89735d667c82294873aff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a015669204265476d08208d0d8af063f6486a0ad89735d667c82294873aff3->enter($__internal_d4a015669204265476d08208d0d8af063f6486a0ad89735d667c82294873aff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fb0e4744c47fe8ebf85c4844cd3a12d4518465f50c1ba0cf35ed9c71d6958d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0e4744c47fe8ebf85c4844cd3a12d4518465f50c1ba0cf35ed9c71d6958d72->enter($__internal_fb0e4744c47fe8ebf85c4844cd3a12d4518465f50c1ba0cf35ed9c71d6958d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a015669204265476d08208d0d8af063f6486a0ad89735d667c82294873aff3->leave($__internal_d4a015669204265476d08208d0d8af063f6486a0ad89735d667c82294873aff3_prof);

        
        $__internal_fb0e4744c47fe8ebf85c4844cd3a12d4518465f50c1ba0cf35ed9c71d6958d72->leave($__internal_fb0e4744c47fe8ebf85c4844cd3a12d4518465f50c1ba0cf35ed9c71d6958d72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3a9e0c80fd97c172769a9a621022cf163f00a97908904b60e7e07a037b08f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a9e0c80fd97c172769a9a621022cf163f00a97908904b60e7e07a037b08f1c->enter($__internal_c3a9e0c80fd97c172769a9a621022cf163f00a97908904b60e7e07a037b08f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4e7b433f3ab90d0bb0d6ae66cb6f5ec46e51fd8d72130d37298187b134db8bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7b433f3ab90d0bb0d6ae66cb6f5ec46e51fd8d72130d37298187b134db8bc2->enter($__internal_4e7b433f3ab90d0bb0d6ae66cb6f5ec46e51fd8d72130d37298187b134db8bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e7b433f3ab90d0bb0d6ae66cb6f5ec46e51fd8d72130d37298187b134db8bc2->leave($__internal_4e7b433f3ab90d0bb0d6ae66cb6f5ec46e51fd8d72130d37298187b134db8bc2_prof);

        
        $__internal_c3a9e0c80fd97c172769a9a621022cf163f00a97908904b60e7e07a037b08f1c->leave($__internal_c3a9e0c80fd97c172769a9a621022cf163f00a97908904b60e7e07a037b08f1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a6c9833828a7532409d6616ffdaa90658610a035c2d398cbce05a3721a9d536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6c9833828a7532409d6616ffdaa90658610a035c2d398cbce05a3721a9d536->enter($__internal_8a6c9833828a7532409d6616ffdaa90658610a035c2d398cbce05a3721a9d536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_270e7464a070184cc98e8fbba8fed989e832f439bae192eb0eced297cb53ddcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270e7464a070184cc98e8fbba8fed989e832f439bae192eb0eced297cb53ddcb->enter($__internal_270e7464a070184cc98e8fbba8fed989e832f439bae192eb0eced297cb53ddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_270e7464a070184cc98e8fbba8fed989e832f439bae192eb0eced297cb53ddcb->leave($__internal_270e7464a070184cc98e8fbba8fed989e832f439bae192eb0eced297cb53ddcb_prof);

        
        $__internal_8a6c9833828a7532409d6616ffdaa90658610a035c2d398cbce05a3721a9d536->leave($__internal_8a6c9833828a7532409d6616ffdaa90658610a035c2d398cbce05a3721a9d536_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ea108018efff46a87e241760047782894c052827974e96642cfeba6116f5a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea108018efff46a87e241760047782894c052827974e96642cfeba6116f5a12->enter($__internal_8ea108018efff46a87e241760047782894c052827974e96642cfeba6116f5a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6b1b7076f1d9afdd5d545cd8b0d2a76e8b268e400dc1d843a200d97160bc530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b1b7076f1d9afdd5d545cd8b0d2a76e8b268e400dc1d843a200d97160bc530->enter($__internal_c6b1b7076f1d9afdd5d545cd8b0d2a76e8b268e400dc1d843a200d97160bc530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6b1b7076f1d9afdd5d545cd8b0d2a76e8b268e400dc1d843a200d97160bc530->leave($__internal_c6b1b7076f1d9afdd5d545cd8b0d2a76e8b268e400dc1d843a200d97160bc530_prof);

        
        $__internal_8ea108018efff46a87e241760047782894c052827974e96642cfeba6116f5a12->leave($__internal_8ea108018efff46a87e241760047782894c052827974e96642cfeba6116f5a12_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/wamobi10/sites/cinefan/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
