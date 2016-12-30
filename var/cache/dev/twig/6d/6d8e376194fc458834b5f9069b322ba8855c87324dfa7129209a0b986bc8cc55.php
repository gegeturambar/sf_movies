<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0fad473481be8958d27598b606c124033c8338032e08abce453ac6a78497a98b extends Twig_Template
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
        $__internal_f5602235d76f264958adf5ff6252a25ed80e4ae0fb693e648afbd91b31c7f409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5602235d76f264958adf5ff6252a25ed80e4ae0fb693e648afbd91b31c7f409->enter($__internal_f5602235d76f264958adf5ff6252a25ed80e4ae0fb693e648afbd91b31c7f409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ca596554150bb1ad8bb06fcf2c20d879d89f047f5cae4da3fb81c89e4a513c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca596554150bb1ad8bb06fcf2c20d879d89f047f5cae4da3fb81c89e4a513c8b->enter($__internal_ca596554150bb1ad8bb06fcf2c20d879d89f047f5cae4da3fb81c89e4a513c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5602235d76f264958adf5ff6252a25ed80e4ae0fb693e648afbd91b31c7f409->leave($__internal_f5602235d76f264958adf5ff6252a25ed80e4ae0fb693e648afbd91b31c7f409_prof);

        
        $__internal_ca596554150bb1ad8bb06fcf2c20d879d89f047f5cae4da3fb81c89e4a513c8b->leave($__internal_ca596554150bb1ad8bb06fcf2c20d879d89f047f5cae4da3fb81c89e4a513c8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53d0fe62edf7be2add50296479b2a18b0856edadeabe7285de7fb034e0af0943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d0fe62edf7be2add50296479b2a18b0856edadeabe7285de7fb034e0af0943->enter($__internal_53d0fe62edf7be2add50296479b2a18b0856edadeabe7285de7fb034e0af0943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e069c91dbdb187d5568cc1f1dbc30f8d5536029ddf83ff98d152681e14ccdc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e069c91dbdb187d5568cc1f1dbc30f8d5536029ddf83ff98d152681e14ccdc5e->enter($__internal_e069c91dbdb187d5568cc1f1dbc30f8d5536029ddf83ff98d152681e14ccdc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e069c91dbdb187d5568cc1f1dbc30f8d5536029ddf83ff98d152681e14ccdc5e->leave($__internal_e069c91dbdb187d5568cc1f1dbc30f8d5536029ddf83ff98d152681e14ccdc5e_prof);

        
        $__internal_53d0fe62edf7be2add50296479b2a18b0856edadeabe7285de7fb034e0af0943->leave($__internal_53d0fe62edf7be2add50296479b2a18b0856edadeabe7285de7fb034e0af0943_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b37daab33fbdf7d7a87815e59a3b973ec04812abf6c73016bfa8f7724fba457b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37daab33fbdf7d7a87815e59a3b973ec04812abf6c73016bfa8f7724fba457b->enter($__internal_b37daab33fbdf7d7a87815e59a3b973ec04812abf6c73016bfa8f7724fba457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_365a7b1972a408b32d6235fed58f0db19c93ef47091157cd009bda4a2ebf9e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365a7b1972a408b32d6235fed58f0db19c93ef47091157cd009bda4a2ebf9e1d->enter($__internal_365a7b1972a408b32d6235fed58f0db19c93ef47091157cd009bda4a2ebf9e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_365a7b1972a408b32d6235fed58f0db19c93ef47091157cd009bda4a2ebf9e1d->leave($__internal_365a7b1972a408b32d6235fed58f0db19c93ef47091157cd009bda4a2ebf9e1d_prof);

        
        $__internal_b37daab33fbdf7d7a87815e59a3b973ec04812abf6c73016bfa8f7724fba457b->leave($__internal_b37daab33fbdf7d7a87815e59a3b973ec04812abf6c73016bfa8f7724fba457b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfd91090ff4aa2a626a5bf1f75594c65710df3fc7a2c7545023268fd27fd3668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd91090ff4aa2a626a5bf1f75594c65710df3fc7a2c7545023268fd27fd3668->enter($__internal_bfd91090ff4aa2a626a5bf1f75594c65710df3fc7a2c7545023268fd27fd3668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab2e13bcc5b842d41bfabf17147961477bf55e24f5c0bed8452792e219870362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2e13bcc5b842d41bfabf17147961477bf55e24f5c0bed8452792e219870362->enter($__internal_ab2e13bcc5b842d41bfabf17147961477bf55e24f5c0bed8452792e219870362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ab2e13bcc5b842d41bfabf17147961477bf55e24f5c0bed8452792e219870362->leave($__internal_ab2e13bcc5b842d41bfabf17147961477bf55e24f5c0bed8452792e219870362_prof);

        
        $__internal_bfd91090ff4aa2a626a5bf1f75594c65710df3fc7a2c7545023268fd27fd3668->leave($__internal_bfd91090ff4aa2a626a5bf1f75594c65710df3fc7a2c7545023268fd27fd3668_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/wamobi10/sites/cinefan/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
