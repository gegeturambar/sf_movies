<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa9a2a770070e0dd19bb1fd73d9bc061066099926b770f3aa27f5b94e1308c8f extends Twig_Template
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
        $__internal_03d64fe58533feb24dd8904362ef0c5e96d2da3b4251cf7b4b97d953ed7fbf4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d64fe58533feb24dd8904362ef0c5e96d2da3b4251cf7b4b97d953ed7fbf4b->enter($__internal_03d64fe58533feb24dd8904362ef0c5e96d2da3b4251cf7b4b97d953ed7fbf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b682a7600b3dc8e8c9a8fb9f240cd748def463a9617ae134e43edf89fd14937b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b682a7600b3dc8e8c9a8fb9f240cd748def463a9617ae134e43edf89fd14937b->enter($__internal_b682a7600b3dc8e8c9a8fb9f240cd748def463a9617ae134e43edf89fd14937b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d64fe58533feb24dd8904362ef0c5e96d2da3b4251cf7b4b97d953ed7fbf4b->leave($__internal_03d64fe58533feb24dd8904362ef0c5e96d2da3b4251cf7b4b97d953ed7fbf4b_prof);

        
        $__internal_b682a7600b3dc8e8c9a8fb9f240cd748def463a9617ae134e43edf89fd14937b->leave($__internal_b682a7600b3dc8e8c9a8fb9f240cd748def463a9617ae134e43edf89fd14937b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80d6e6b60f8ee860f09b8b996ea6787a98f433a0eb9a6589db416e9b1b97650c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d6e6b60f8ee860f09b8b996ea6787a98f433a0eb9a6589db416e9b1b97650c->enter($__internal_80d6e6b60f8ee860f09b8b996ea6787a98f433a0eb9a6589db416e9b1b97650c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2510c025dbe0afdbe8a91e9968bdb91d21a65bb9af4e05c8d8d2c3bba62e54bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2510c025dbe0afdbe8a91e9968bdb91d21a65bb9af4e05c8d8d2c3bba62e54bf->enter($__internal_2510c025dbe0afdbe8a91e9968bdb91d21a65bb9af4e05c8d8d2c3bba62e54bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2510c025dbe0afdbe8a91e9968bdb91d21a65bb9af4e05c8d8d2c3bba62e54bf->leave($__internal_2510c025dbe0afdbe8a91e9968bdb91d21a65bb9af4e05c8d8d2c3bba62e54bf_prof);

        
        $__internal_80d6e6b60f8ee860f09b8b996ea6787a98f433a0eb9a6589db416e9b1b97650c->leave($__internal_80d6e6b60f8ee860f09b8b996ea6787a98f433a0eb9a6589db416e9b1b97650c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba6ba9d537487f4b6f6a0ee69378adbc4fba1c6cd4cad399b0623e8416c16fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6ba9d537487f4b6f6a0ee69378adbc4fba1c6cd4cad399b0623e8416c16fbe->enter($__internal_ba6ba9d537487f4b6f6a0ee69378adbc4fba1c6cd4cad399b0623e8416c16fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e6d1b0c0b3c117663fa033e909b32ed95b1fef0c41925e72e82070ad190898c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6d1b0c0b3c117663fa033e909b32ed95b1fef0c41925e72e82070ad190898c->enter($__internal_0e6d1b0c0b3c117663fa033e909b32ed95b1fef0c41925e72e82070ad190898c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0e6d1b0c0b3c117663fa033e909b32ed95b1fef0c41925e72e82070ad190898c->leave($__internal_0e6d1b0c0b3c117663fa033e909b32ed95b1fef0c41925e72e82070ad190898c_prof);

        
        $__internal_ba6ba9d537487f4b6f6a0ee69378adbc4fba1c6cd4cad399b0623e8416c16fbe->leave($__internal_ba6ba9d537487f4b6f6a0ee69378adbc4fba1c6cd4cad399b0623e8416c16fbe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_602e12cc6c42184f8d8f6bd2848319b61737198df37ff953cc6ed31fbbd93df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602e12cc6c42184f8d8f6bd2848319b61737198df37ff953cc6ed31fbbd93df8->enter($__internal_602e12cc6c42184f8d8f6bd2848319b61737198df37ff953cc6ed31fbbd93df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7c770bc152011aa831de79f8e69e43b250e06c1ea4612ac8c7cc9f8ffa83a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c770bc152011aa831de79f8e69e43b250e06c1ea4612ac8c7cc9f8ffa83a0a->enter($__internal_f7c770bc152011aa831de79f8e69e43b250e06c1ea4612ac8c7cc9f8ffa83a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f7c770bc152011aa831de79f8e69e43b250e06c1ea4612ac8c7cc9f8ffa83a0a->leave($__internal_f7c770bc152011aa831de79f8e69e43b250e06c1ea4612ac8c7cc9f8ffa83a0a_prof);

        
        $__internal_602e12cc6c42184f8d8f6bd2848319b61737198df37ff953cc6ed31fbbd93df8->leave($__internal_602e12cc6c42184f8d8f6bd2848319b61737198df37ff953cc6ed31fbbd93df8_prof);

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
