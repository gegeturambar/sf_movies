<?php

/* homepage/index.html.twig */
class __TwigTemplate_ecd24be6361955a84c2717e7eea9e303e283c6be333863df149431e47d35f514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4362e9daf4ae3555209370c1de3ce9a412a4ae5d6850c8f32edc684b1c78b34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4362e9daf4ae3555209370c1de3ce9a412a4ae5d6850c8f32edc684b1c78b34b->enter($__internal_4362e9daf4ae3555209370c1de3ce9a412a4ae5d6850c8f32edc684b1c78b34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_af1fb8477b07c1d838e6ef3c10ff8adb6554165fa463734766afcadeaa170569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1fb8477b07c1d838e6ef3c10ff8adb6554165fa463734766afcadeaa170569->enter($__internal_af1fb8477b07c1d838e6ef3c10ff8adb6554165fa463734766afcadeaa170569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4362e9daf4ae3555209370c1de3ce9a412a4ae5d6850c8f32edc684b1c78b34b->leave($__internal_4362e9daf4ae3555209370c1de3ce9a412a4ae5d6850c8f32edc684b1c78b34b_prof);

        
        $__internal_af1fb8477b07c1d838e6ef3c10ff8adb6554165fa463734766afcadeaa170569->leave($__internal_af1fb8477b07c1d838e6ef3c10ff8adb6554165fa463734766afcadeaa170569_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c0f883fb32c1ecdc3f852cdb443d24adb97c118b0c304244a22da6860ddc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c0f883fb32c1ecdc3f852cdb443d24adb97c118b0c304244a22da6860ddc6e->enter($__internal_86c0f883fb32c1ecdc3f852cdb443d24adb97c118b0c304244a22da6860ddc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95c7ea1f597c68e31fe984308591129f6d79c6fc234240036c71939ec17d09a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c7ea1f597c68e31fe984308591129f6d79c6fc234240036c71939ec17d09a7->enter($__internal_95c7ea1f597c68e31fe984308591129f6d79c6fc234240036c71939ec17d09a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, (isset($context["mydate"]) ? $context["mydate"] : $this->getContext($context, "mydate")), "medium", "none"), "html", null, true);
        echo "</p>

        <div id=\"container\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["mov"]) {
            // line 9
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "title", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "category", array()), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_95c7ea1f597c68e31fe984308591129f6d79c6fc234240036c71939ec17d09a7->leave($__internal_95c7ea1f597c68e31fe984308591129f6d79c6fc234240036c71939ec17d09a7_prof);

        
        $__internal_86c0f883fb32c1ecdc3f852cdb443d24adb97c118b0c304244a22da6860ddc6e->leave($__internal_86c0f883fb32c1ecdc3f852cdb443d24adb97c118b0c304244a22da6860ddc6e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a80d97e8c98720a51c3c7078a5a75aa1400ed2b197282d0fdac94f345e9c586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a80d97e8c98720a51c3c7078a5a75aa1400ed2b197282d0fdac94f345e9c586->enter($__internal_4a80d97e8c98720a51c3c7078a5a75aa1400ed2b197282d0fdac94f345e9c586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dcfe9c683fe77cee2a2d1c2da597567981b4603949632820a3c422c01fce504c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfe9c683fe77cee2a2d1c2da597567981b4603949632820a3c422c01fce504c->enter($__internal_dcfe9c683fe77cee2a2d1c2da597567981b4603949632820a3c422c01fce504c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_dcfe9c683fe77cee2a2d1c2da597567981b4603949632820a3c422c01fce504c->leave($__internal_dcfe9c683fe77cee2a2d1c2da597567981b4603949632820a3c422c01fce504c_prof);

        
        $__internal_4a80d97e8c98720a51c3c7078a5a75aa1400ed2b197282d0fdac94f345e9c586->leave($__internal_4a80d97e8c98720a51c3c7078a5a75aa1400ed2b197282d0fdac94f345e9c586_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  88 => 16,  76 => 12,  68 => 10,  63 => 9,  59 => 8,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <p>{{ mydate|localizeddate('medium', 'none') }}</p>

        <div id=\"container\">
            {% for mov in results %}
                <p>{{ mov.title }}</p>
                <p>{{ mov.category }}</p>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "homepage/index.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/homepage/index.html.twig");
    }
}
