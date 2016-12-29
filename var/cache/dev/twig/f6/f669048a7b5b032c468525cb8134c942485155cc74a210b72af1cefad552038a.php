<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c2ef04b16534cae05fac8faa6e1e535ed99b26bf415527c2e8fa12c4a0c004c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c842792238c465cc48ba63f339638127667cb64af3318a63c11fe7cc8ed4ab67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c842792238c465cc48ba63f339638127667cb64af3318a63c11fe7cc8ed4ab67->enter($__internal_c842792238c465cc48ba63f339638127667cb64af3318a63c11fe7cc8ed4ab67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dd2f01f8149985fe4b2a3b5e1db3f6afe884b16b9b5b3e6b0a302f0b95b3a1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2f01f8149985fe4b2a3b5e1db3f6afe884b16b9b5b3e6b0a302f0b95b3a1ba->enter($__internal_dd2f01f8149985fe4b2a3b5e1db3f6afe884b16b9b5b3e6b0a302f0b95b3a1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c842792238c465cc48ba63f339638127667cb64af3318a63c11fe7cc8ed4ab67->leave($__internal_c842792238c465cc48ba63f339638127667cb64af3318a63c11fe7cc8ed4ab67_prof);

        
        $__internal_dd2f01f8149985fe4b2a3b5e1db3f6afe884b16b9b5b3e6b0a302f0b95b3a1ba->leave($__internal_dd2f01f8149985fe4b2a3b5e1db3f6afe884b16b9b5b3e6b0a302f0b95b3a1ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed0940cbbbe32d0949cf2c892fc3de894201b82ddde6fda6a7b17fe80d1b2939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0940cbbbe32d0949cf2c892fc3de894201b82ddde6fda6a7b17fe80d1b2939->enter($__internal_ed0940cbbbe32d0949cf2c892fc3de894201b82ddde6fda6a7b17fe80d1b2939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b7bce6cdc722f553d60468cf2e8a42a882bf7616c2e4d87195958bd24b4cbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7bce6cdc722f553d60468cf2e8a42a882bf7616c2e4d87195958bd24b4cbd3->enter($__internal_1b7bce6cdc722f553d60468cf2e8a42a882bf7616c2e4d87195958bd24b4cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1b7bce6cdc722f553d60468cf2e8a42a882bf7616c2e4d87195958bd24b4cbd3->leave($__internal_1b7bce6cdc722f553d60468cf2e8a42a882bf7616c2e4d87195958bd24b4cbd3_prof);

        
        $__internal_ed0940cbbbe32d0949cf2c892fc3de894201b82ddde6fda6a7b17fe80d1b2939->leave($__internal_ed0940cbbbe32d0949cf2c892fc3de894201b82ddde6fda6a7b17fe80d1b2939_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/wamobi10/sites/cinefan/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
