<?php

/* homepage/index.html.twig */
class __TwigTemplate_b42229cafb73eb97bae5329426a52515f6df97b4eab4905b30ed909fad9c5e0a extends Twig_Template
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
        $__internal_e380a077bf42c91bc7c21310b4f3420bf8a11df4bd7185fc46538595030e8220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e380a077bf42c91bc7c21310b4f3420bf8a11df4bd7185fc46538595030e8220->enter($__internal_e380a077bf42c91bc7c21310b4f3420bf8a11df4bd7185fc46538595030e8220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_cc8e141fc6bdbfb3b7f344c3ffe198ffa0d607f344de453e3605a6cafb17260f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8e141fc6bdbfb3b7f344c3ffe198ffa0d607f344de453e3605a6cafb17260f->enter($__internal_cc8e141fc6bdbfb3b7f344c3ffe198ffa0d607f344de453e3605a6cafb17260f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e380a077bf42c91bc7c21310b4f3420bf8a11df4bd7185fc46538595030e8220->leave($__internal_e380a077bf42c91bc7c21310b4f3420bf8a11df4bd7185fc46538595030e8220_prof);

        
        $__internal_cc8e141fc6bdbfb3b7f344c3ffe198ffa0d607f344de453e3605a6cafb17260f->leave($__internal_cc8e141fc6bdbfb3b7f344c3ffe198ffa0d607f344de453e3605a6cafb17260f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a8ba5a3f254ae0f431139dfbda530858822de0e8e18beaaf5ec1827ab17a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a8ba5a3f254ae0f431139dfbda530858822de0e8e18beaaf5ec1827ab17a2c->enter($__internal_76a8ba5a3f254ae0f431139dfbda530858822de0e8e18beaaf5ec1827ab17a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d824ed2fe2eb503d743ed5489a40a19b3c592b7ac40d74b9a919b5bee597fe91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d824ed2fe2eb503d743ed5489a40a19b3c592b7ac40d74b9a919b5bee597fe91->enter($__internal_d824ed2fe2eb503d743ed5489a40a19b3c592b7ac40d74b9a919b5bee597fe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d824ed2fe2eb503d743ed5489a40a19b3c592b7ac40d74b9a919b5bee597fe91->leave($__internal_d824ed2fe2eb503d743ed5489a40a19b3c592b7ac40d74b9a919b5bee597fe91_prof);

        
        $__internal_76a8ba5a3f254ae0f431139dfbda530858822de0e8e18beaaf5ec1827ab17a2c->leave($__internal_76a8ba5a3f254ae0f431139dfbda530858822de0e8e18beaaf5ec1827ab17a2c_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51333c88c0a435c86a3e17aa6a154ce8ba563b80940b8204ee9bfd666fa9d5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51333c88c0a435c86a3e17aa6a154ce8ba563b80940b8204ee9bfd666fa9d5ad->enter($__internal_51333c88c0a435c86a3e17aa6a154ce8ba563b80940b8204ee9bfd666fa9d5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc920b774d772c98c1290a91c7600cd9cd96b13ff50afe14c81079d164b5e03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc920b774d772c98c1290a91c7600cd9cd96b13ff50afe14c81079d164b5e03a->enter($__internal_fc920b774d772c98c1290a91c7600cd9cd96b13ff50afe14c81079d164b5e03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fc920b774d772c98c1290a91c7600cd9cd96b13ff50afe14c81079d164b5e03a->leave($__internal_fc920b774d772c98c1290a91c7600cd9cd96b13ff50afe14c81079d164b5e03a_prof);

        
        $__internal_51333c88c0a435c86a3e17aa6a154ce8ba563b80940b8204ee9bfd666fa9d5ad->leave($__internal_51333c88c0a435c86a3e17aa6a154ce8ba563b80940b8204ee9bfd666fa9d5ad_prof);

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
