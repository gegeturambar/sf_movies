<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e95180f987c62a45007d620e314a6d4ce90e2bd883fa25bd0f9e5af79cd88782 extends Twig_Template
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
        $__internal_d2f1f57a39ec0f7589e2a6042cb2aa0737c4fd32bb553cfcbd6694944625f807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f1f57a39ec0f7589e2a6042cb2aa0737c4fd32bb553cfcbd6694944625f807->enter($__internal_d2f1f57a39ec0f7589e2a6042cb2aa0737c4fd32bb553cfcbd6694944625f807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_70132e5ab26bdada2ebd60068789259dd4a9721acb3d5bd6711965b959a073e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70132e5ab26bdada2ebd60068789259dd4a9721acb3d5bd6711965b959a073e7->enter($__internal_70132e5ab26bdada2ebd60068789259dd4a9721acb3d5bd6711965b959a073e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f1f57a39ec0f7589e2a6042cb2aa0737c4fd32bb553cfcbd6694944625f807->leave($__internal_d2f1f57a39ec0f7589e2a6042cb2aa0737c4fd32bb553cfcbd6694944625f807_prof);

        
        $__internal_70132e5ab26bdada2ebd60068789259dd4a9721acb3d5bd6711965b959a073e7->leave($__internal_70132e5ab26bdada2ebd60068789259dd4a9721acb3d5bd6711965b959a073e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9dbe14dbdf50bd266cc7df59124e3021403e12642f477650a43c1530c8b9c213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbe14dbdf50bd266cc7df59124e3021403e12642f477650a43c1530c8b9c213->enter($__internal_9dbe14dbdf50bd266cc7df59124e3021403e12642f477650a43c1530c8b9c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c812887c7f9aaad4971cbfcb801014df0c3739593b2b6495f47752a96432f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c812887c7f9aaad4971cbfcb801014df0c3739593b2b6495f47752a96432f04->enter($__internal_8c812887c7f9aaad4971cbfcb801014df0c3739593b2b6495f47752a96432f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c812887c7f9aaad4971cbfcb801014df0c3739593b2b6495f47752a96432f04->leave($__internal_8c812887c7f9aaad4971cbfcb801014df0c3739593b2b6495f47752a96432f04_prof);

        
        $__internal_9dbe14dbdf50bd266cc7df59124e3021403e12642f477650a43c1530c8b9c213->leave($__internal_9dbe14dbdf50bd266cc7df59124e3021403e12642f477650a43c1530c8b9c213_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3210ac6dbc5f3f32b5b6aa600fe4d81402d3e7c0f8e8fb4dcc02378bc12abc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3210ac6dbc5f3f32b5b6aa600fe4d81402d3e7c0f8e8fb4dcc02378bc12abc83->enter($__internal_3210ac6dbc5f3f32b5b6aa600fe4d81402d3e7c0f8e8fb4dcc02378bc12abc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a9c574249b43d6da69a489a374e4705e956cd4bbf793ee39f311f3b853d512f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c574249b43d6da69a489a374e4705e956cd4bbf793ee39f311f3b853d512f3->enter($__internal_a9c574249b43d6da69a489a374e4705e956cd4bbf793ee39f311f3b853d512f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9c574249b43d6da69a489a374e4705e956cd4bbf793ee39f311f3b853d512f3->leave($__internal_a9c574249b43d6da69a489a374e4705e956cd4bbf793ee39f311f3b853d512f3_prof);

        
        $__internal_3210ac6dbc5f3f32b5b6aa600fe4d81402d3e7c0f8e8fb4dcc02378bc12abc83->leave($__internal_3210ac6dbc5f3f32b5b6aa600fe4d81402d3e7c0f8e8fb4dcc02378bc12abc83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be90941c5bffca00afc12503c27672c02d13a48298fcd710e82194f512157c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be90941c5bffca00afc12503c27672c02d13a48298fcd710e82194f512157c67->enter($__internal_be90941c5bffca00afc12503c27672c02d13a48298fcd710e82194f512157c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25a90802c2a5f157971d0f84815fae358175cb6ddca3c55d78553618111ff86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a90802c2a5f157971d0f84815fae358175cb6ddca3c55d78553618111ff86b->enter($__internal_25a90802c2a5f157971d0f84815fae358175cb6ddca3c55d78553618111ff86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_25a90802c2a5f157971d0f84815fae358175cb6ddca3c55d78553618111ff86b->leave($__internal_25a90802c2a5f157971d0f84815fae358175cb6ddca3c55d78553618111ff86b_prof);

        
        $__internal_be90941c5bffca00afc12503c27672c02d13a48298fcd710e82194f512157c67->leave($__internal_be90941c5bffca00afc12503c27672c02d13a48298fcd710e82194f512157c67_prof);

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
