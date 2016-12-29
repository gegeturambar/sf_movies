<?php

/* admin/index.html.twig */
class __TwigTemplate_e501664e9dab72a29df30d4b88b2bdc5351d0e51b1b5f030f2f8bd420105e492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34d0a1b0ab88b8a6953fc5bf2e9d5af056caf4ffa10d5e721c09350a9ae6443b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d0a1b0ab88b8a6953fc5bf2e9d5af056caf4ffa10d5e721c09350a9ae6443b->enter($__internal_34d0a1b0ab88b8a6953fc5bf2e9d5af056caf4ffa10d5e721c09350a9ae6443b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_d8002d459505ea22412e294e158924c68543b86893eaf9505b7a72c81828e2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8002d459505ea22412e294e158924c68543b86893eaf9505b7a72c81828e2e5->enter($__internal_d8002d459505ea22412e294e158924c68543b86893eaf9505b7a72c81828e2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d0a1b0ab88b8a6953fc5bf2e9d5af056caf4ffa10d5e721c09350a9ae6443b->leave($__internal_34d0a1b0ab88b8a6953fc5bf2e9d5af056caf4ffa10d5e721c09350a9ae6443b_prof);

        
        $__internal_d8002d459505ea22412e294e158924c68543b86893eaf9505b7a72c81828e2e5->leave($__internal_d8002d459505ea22412e294e158924c68543b86893eaf9505b7a72c81828e2e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dab589c5423974615ca3d203058234296e6f96d6ffcf528d2859c9e48d74b923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab589c5423974615ca3d203058234296e6f96d6ffcf528d2859c9e48d74b923->enter($__internal_dab589c5423974615ca3d203058234296e6f96d6ffcf528d2859c9e48d74b923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f8191d9ed96272fa6264230ed262f2ef50448e5b7d75864f8e78b796bd21068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8191d9ed96272fa6264230ed262f2ef50448e5b7d75864f8e78b796bd21068->enter($__internal_2f8191d9ed96272fa6264230ed262f2ef50448e5b7d75864f8e78b796bd21068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">

        </div>
    </div>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <p class=\"alert alert-success\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "

";
        
        $__internal_2f8191d9ed96272fa6264230ed262f2ef50448e5b7d75864f8e78b796bd21068->leave($__internal_2f8191d9ed96272fa6264230ed262f2ef50448e5b7d75864f8e78b796bd21068_prof);

        
        $__internal_dab589c5423974615ca3d203058234296e6f96d6ffcf528d2859c9e48d74b923->leave($__internal_dab589c5423974615ca3d203058234296e6f96d6ffcf528d2859c9e48d74b923_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52748798bfb1fcd8878a6563e0eb22bdd71dfe8a82b05852151558fbc0c0d26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52748798bfb1fcd8878a6563e0eb22bdd71dfe8a82b05852151558fbc0c0d26d->enter($__internal_52748798bfb1fcd8878a6563e0eb22bdd71dfe8a82b05852151558fbc0c0d26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_47abf5ffeb0d54a153dc4669cfa5297a3811a921ea8c81ef5b73990168ca3626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47abf5ffeb0d54a153dc4669cfa5297a3811a921ea8c81ef5b73990168ca3626->enter($__internal_47abf5ffeb0d54a153dc4669cfa5297a3811a921ea8c81ef5b73990168ca3626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
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
        
        $__internal_47abf5ffeb0d54a153dc4669cfa5297a3811a921ea8c81ef5b73990168ca3626->leave($__internal_47abf5ffeb0d54a153dc4669cfa5297a3811a921ea8c81ef5b73990168ca3626_prof);

        
        $__internal_52748798bfb1fcd8878a6563e0eb22bdd71dfe8a82b05852151558fbc0c0d26d->leave($__internal_52748798bfb1fcd8878a6563e0eb22bdd71dfe8a82b05852151558fbc0c0d26d_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  86 => 19,  74 => 15,  65 => 12,  62 => 11,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-xs-12\">

        </div>
    </div>

    {% for message in app.session.flashbag.get('notice') %}
        <p class=\"alert alert-success\">
                {{ message }}
        </p>
    {% endfor %}


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
", "admin/index.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/admin/index.html.twig");
    }
}
