<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3dd445a05acf3d941516d7cb53d57392704bfe46c46fcc313384526727e4182b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e76a05859938a7e13de95574ed1bc7fe165465a4bf1e3b1daecd3f954db41412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76a05859938a7e13de95574ed1bc7fe165465a4bf1e3b1daecd3f954db41412->enter($__internal_e76a05859938a7e13de95574ed1bc7fe165465a4bf1e3b1daecd3f954db41412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5c0d3776563fcd9d747447e29957f122f19f2f9b7f40331da28bde8f245914f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0d3776563fcd9d747447e29957f122f19f2f9b7f40331da28bde8f245914f1->enter($__internal_5c0d3776563fcd9d747447e29957f122f19f2f9b7f40331da28bde8f245914f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76a05859938a7e13de95574ed1bc7fe165465a4bf1e3b1daecd3f954db41412->leave($__internal_e76a05859938a7e13de95574ed1bc7fe165465a4bf1e3b1daecd3f954db41412_prof);

        
        $__internal_5c0d3776563fcd9d747447e29957f122f19f2f9b7f40331da28bde8f245914f1->leave($__internal_5c0d3776563fcd9d747447e29957f122f19f2f9b7f40331da28bde8f245914f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37d0cc9bee7735cb0870e37bee2a6fc846e2dcff4b74c3618708f2c63ff611b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d0cc9bee7735cb0870e37bee2a6fc846e2dcff4b74c3618708f2c63ff611b6->enter($__internal_37d0cc9bee7735cb0870e37bee2a6fc846e2dcff4b74c3618708f2c63ff611b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4296974b7e8324766bf0c85c554324acea0e537aa0d05eb5e795ba47de669dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4296974b7e8324766bf0c85c554324acea0e537aa0d05eb5e795ba47de669dfa->enter($__internal_4296974b7e8324766bf0c85c554324acea0e537aa0d05eb5e795ba47de669dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4296974b7e8324766bf0c85c554324acea0e537aa0d05eb5e795ba47de669dfa->leave($__internal_4296974b7e8324766bf0c85c554324acea0e537aa0d05eb5e795ba47de669dfa_prof);

        
        $__internal_37d0cc9bee7735cb0870e37bee2a6fc846e2dcff4b74c3618708f2c63ff611b6->leave($__internal_37d0cc9bee7735cb0870e37bee2a6fc846e2dcff4b74c3618708f2c63ff611b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90ba1c8e5e96df5b6b6e8b6c8a626d3f2a0c6d1803e117c457d586d36668c2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ba1c8e5e96df5b6b6e8b6c8a626d3f2a0c6d1803e117c457d586d36668c2af->enter($__internal_90ba1c8e5e96df5b6b6e8b6c8a626d3f2a0c6d1803e117c457d586d36668c2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f3e9a63840476e324f55c9fa892ab51b94630dc84ed13860e44773b75672cfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e9a63840476e324f55c9fa892ab51b94630dc84ed13860e44773b75672cfa0->enter($__internal_f3e9a63840476e324f55c9fa892ab51b94630dc84ed13860e44773b75672cfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f3e9a63840476e324f55c9fa892ab51b94630dc84ed13860e44773b75672cfa0->leave($__internal_f3e9a63840476e324f55c9fa892ab51b94630dc84ed13860e44773b75672cfa0_prof);

        
        $__internal_90ba1c8e5e96df5b6b6e8b6c8a626d3f2a0c6d1803e117c457d586d36668c2af->leave($__internal_90ba1c8e5e96df5b6b6e8b6c8a626d3f2a0c6d1803e117c457d586d36668c2af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6aa700b9f2195bb225901e28276a8db93c88462e14ce53b092d7f2e4316b76f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa700b9f2195bb225901e28276a8db93c88462e14ce53b092d7f2e4316b76f7->enter($__internal_6aa700b9f2195bb225901e28276a8db93c88462e14ce53b092d7f2e4316b76f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_034eedcec1a64f4be53b3bc4eebbe333f2c340572dd8d93d888fd617c56a865a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034eedcec1a64f4be53b3bc4eebbe333f2c340572dd8d93d888fd617c56a865a->enter($__internal_034eedcec1a64f4be53b3bc4eebbe333f2c340572dd8d93d888fd617c56a865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_034eedcec1a64f4be53b3bc4eebbe333f2c340572dd8d93d888fd617c56a865a->leave($__internal_034eedcec1a64f4be53b3bc4eebbe333f2c340572dd8d93d888fd617c56a865a_prof);

        
        $__internal_6aa700b9f2195bb225901e28276a8db93c88462e14ce53b092d7f2e4316b76f7->leave($__internal_6aa700b9f2195bb225901e28276a8db93c88462e14ce53b092d7f2e4316b76f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/wamobi10/sites/cinefan/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
