<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_daf184f2a358d59dba5e9d476928b28439443be32a933f2f8db100dd66bfbf70 extends Twig_Template
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
        $__internal_ee5dc1cb954a3bb068c3c971602df428cd5319eb13063b978f87a3c32095c586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5dc1cb954a3bb068c3c971602df428cd5319eb13063b978f87a3c32095c586->enter($__internal_ee5dc1cb954a3bb068c3c971602df428cd5319eb13063b978f87a3c32095c586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_350413c2fcd7b3bf66e5f4fec47d1676f36a63c58ff54797bb2b73b10421263f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350413c2fcd7b3bf66e5f4fec47d1676f36a63c58ff54797bb2b73b10421263f->enter($__internal_350413c2fcd7b3bf66e5f4fec47d1676f36a63c58ff54797bb2b73b10421263f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5dc1cb954a3bb068c3c971602df428cd5319eb13063b978f87a3c32095c586->leave($__internal_ee5dc1cb954a3bb068c3c971602df428cd5319eb13063b978f87a3c32095c586_prof);

        
        $__internal_350413c2fcd7b3bf66e5f4fec47d1676f36a63c58ff54797bb2b73b10421263f->leave($__internal_350413c2fcd7b3bf66e5f4fec47d1676f36a63c58ff54797bb2b73b10421263f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a38fc8a1ba1a895471906c631a8ef1fada881f6a73fed5aa1ff0da5502c10f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a38fc8a1ba1a895471906c631a8ef1fada881f6a73fed5aa1ff0da5502c10f2->enter($__internal_2a38fc8a1ba1a895471906c631a8ef1fada881f6a73fed5aa1ff0da5502c10f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5d20420a1cf41fd10ab9e7cc2d21bbb5913f2c54d7a0d8147475eda260fc1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d20420a1cf41fd10ab9e7cc2d21bbb5913f2c54d7a0d8147475eda260fc1c9->enter($__internal_c5d20420a1cf41fd10ab9e7cc2d21bbb5913f2c54d7a0d8147475eda260fc1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c5d20420a1cf41fd10ab9e7cc2d21bbb5913f2c54d7a0d8147475eda260fc1c9->leave($__internal_c5d20420a1cf41fd10ab9e7cc2d21bbb5913f2c54d7a0d8147475eda260fc1c9_prof);

        
        $__internal_2a38fc8a1ba1a895471906c631a8ef1fada881f6a73fed5aa1ff0da5502c10f2->leave($__internal_2a38fc8a1ba1a895471906c631a8ef1fada881f6a73fed5aa1ff0da5502c10f2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2f2f67b5718c33cee6a230156318954ff5e31fea34ce5d6576d7cad552084b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f2f67b5718c33cee6a230156318954ff5e31fea34ce5d6576d7cad552084b9->enter($__internal_c2f2f67b5718c33cee6a230156318954ff5e31fea34ce5d6576d7cad552084b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b362a6d4190124b33e1554bf59dfdb5c6f640ff1fd4d121fdbd1f7debee2bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b362a6d4190124b33e1554bf59dfdb5c6f640ff1fd4d121fdbd1f7debee2bff->enter($__internal_3b362a6d4190124b33e1554bf59dfdb5c6f640ff1fd4d121fdbd1f7debee2bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b362a6d4190124b33e1554bf59dfdb5c6f640ff1fd4d121fdbd1f7debee2bff->leave($__internal_3b362a6d4190124b33e1554bf59dfdb5c6f640ff1fd4d121fdbd1f7debee2bff_prof);

        
        $__internal_c2f2f67b5718c33cee6a230156318954ff5e31fea34ce5d6576d7cad552084b9->leave($__internal_c2f2f67b5718c33cee6a230156318954ff5e31fea34ce5d6576d7cad552084b9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1032df3c3af02b9c7aa4798e4074ccec3beb02c4362bf6fd0643955c4597c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1032df3c3af02b9c7aa4798e4074ccec3beb02c4362bf6fd0643955c4597c5->enter($__internal_ee1032df3c3af02b9c7aa4798e4074ccec3beb02c4362bf6fd0643955c4597c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78eb0647adc5f658da5d7a1ddc33fad5b70144bf75a295a97a32c99f7a93da68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78eb0647adc5f658da5d7a1ddc33fad5b70144bf75a295a97a32c99f7a93da68->enter($__internal_78eb0647adc5f658da5d7a1ddc33fad5b70144bf75a295a97a32c99f7a93da68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_78eb0647adc5f658da5d7a1ddc33fad5b70144bf75a295a97a32c99f7a93da68->leave($__internal_78eb0647adc5f658da5d7a1ddc33fad5b70144bf75a295a97a32c99f7a93da68_prof);

        
        $__internal_ee1032df3c3af02b9c7aa4798e4074ccec3beb02c4362bf6fd0643955c4597c5->leave($__internal_ee1032df3c3af02b9c7aa4798e4074ccec3beb02c4362bf6fd0643955c4597c5_prof);

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
