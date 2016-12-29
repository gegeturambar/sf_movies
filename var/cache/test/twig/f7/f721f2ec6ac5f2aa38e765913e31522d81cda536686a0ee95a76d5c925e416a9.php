<?php

/* homepage/searchmovie.html.twig */
class __TwigTemplate_dfb205cc4b876bca9ec28d73da386176d2f71c14cf7ca8bbbc4f08a0da4956e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.admin.html.twig", "homepage/searchmovie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87035f51f3f114779d5f45813187d32b5360d27528df9bd1023e17f929ce5b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87035f51f3f114779d5f45813187d32b5360d27528df9bd1023e17f929ce5b82->enter($__internal_87035f51f3f114779d5f45813187d32b5360d27528df9bd1023e17f929ce5b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/searchmovie.html.twig"));

        $__internal_548efa07ae9024b0a83b9b9616feb2740421a7a5c3e3940137f7f1e721301aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548efa07ae9024b0a83b9b9616feb2740421a7a5c3e3940137f7f1e721301aa5->enter($__internal_548efa07ae9024b0a83b9b9616feb2740421a7a5c3e3940137f7f1e721301aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/searchmovie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87035f51f3f114779d5f45813187d32b5360d27528df9bd1023e17f929ce5b82->leave($__internal_87035f51f3f114779d5f45813187d32b5360d27528df9bd1023e17f929ce5b82_prof);

        
        $__internal_548efa07ae9024b0a83b9b9616feb2740421a7a5c3e3940137f7f1e721301aa5->leave($__internal_548efa07ae9024b0a83b9b9616feb2740421a7a5c3e3940137f7f1e721301aa5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da95e94fc3cc04ec950fa4c378255437f6300f723f8572d29c48aa95d48104ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da95e94fc3cc04ec950fa4c378255437f6300f723f8572d29c48aa95d48104ae->enter($__internal_da95e94fc3cc04ec950fa4c378255437f6300f723f8572d29c48aa95d48104ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e2d82a37acd4fe32ad6a76f2ed9b2ade1a69719fa2d86475f895811f6af0abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2d82a37acd4fe32ad6a76f2ed9b2ade1a69719fa2d86475f895811f6af0abb->enter($__internal_8e2d82a37acd4fe32ad6a76f2ed9b2ade1a69719fa2d86475f895811f6af0abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-xs-3\">

        ";
        // line 8
        $context["action"] = "";
        // line 9
        echo "
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.search"), "html", null, true);
        echo "</h2>
        ";
        // line 12
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

        <p>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', (twig_test_empty($_label_ = (twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.title")) . ":")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
        </p>

        <p>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "releaseDate", array()), 'label', (twig_test_empty($_label_ = (twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.releaseDate")) . ":")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "releaseDate", array()), 'widget');
        echo "
        </p>

        <p>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'label', (twig_test_empty($_label_ = (twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("price")) . ":")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget');
        echo "
        </p>

        <p>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label', (twig_test_empty($_label_ = (twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("category")) . ":")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
        </p>

        <p>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actors", array()), 'label', (twig_test_empty($_label_ = (twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.actors")) . ":")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actors", array()), 'widget');
        echo "
        </p>

        ";
        // line 39
        $context["buttontext"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("submit.movie", array(), "forms");
        // line 40
        echo "
        ";
        // line 41
        if ( !(null === (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")))) {
            // line 42
            echo "            <input type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("submit.update", array("%value%" => (isset($context["buttontext"]) ? $context["buttontext"] : $this->getContext($context, "buttontext"))), "forms"), "html", null, true);
            echo "\">
        ";
        } else {
            // line 44
            echo "            <input type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("submit.create", array("%value%" => (isset($context["buttontext"]) ? $context["buttontext"] : $this->getContext($context, "buttontext"))), "forms"), "html", null, true);
            echo "\">
        ";
        }
        // line 46
        echo "
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        ";
        // line 49
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>


        <div class=\"col-xs-9\">
            ";
        // line 55
        $this->loadTemplate("inc/render/movies.html.twig", "homepage/searchmovie.html.twig", 55)->display($context);
        // line 56
        echo "        </div>

    </div>

";
        
        $__internal_8e2d82a37acd4fe32ad6a76f2ed9b2ade1a69719fa2d86475f895811f6af0abb->leave($__internal_8e2d82a37acd4fe32ad6a76f2ed9b2ade1a69719fa2d86475f895811f6af0abb_prof);

        
        $__internal_da95e94fc3cc04ec950fa4c378255437f6300f723f8572d29c48aa95d48104ae->leave($__internal_da95e94fc3cc04ec950fa4c378255437f6300f723f8572d29c48aa95d48104ae_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2bde5e2c0170ff6dd5113274f85177b7fd6f8603adc7e7d3fef19eb65db644c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bde5e2c0170ff6dd5113274f85177b7fd6f8603adc7e7d3fef19eb65db644c->enter($__internal_e2bde5e2c0170ff6dd5113274f85177b7fd6f8603adc7e7d3fef19eb65db644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b7225dfb9f7ec444b9a1e2e4be389af6d09251de00fcd1ff9a7ea05779e32078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7225dfb9f7ec444b9a1e2e4be389af6d09251de00fcd1ff9a7ea05779e32078->enter($__internal_b7225dfb9f7ec444b9a1e2e4be389af6d09251de00fcd1ff9a7ea05779e32078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/advancedSearch.js"), "html", null, true);
        echo "\"></script>
    <script>
        let advancedScript = new AdvancedSearch();
        advancedScript.init();
    </script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/basket.js"), "html", null, true);
        echo "\"></script>
    <script>
        let basket = new Basket();
        basket.init(\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.add", array("id" => 999));
        echo "\",\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.remove", array("id" => 999));
        echo "\");
    </script>
";
        
        $__internal_b7225dfb9f7ec444b9a1e2e4be389af6d09251de00fcd1ff9a7ea05779e32078->leave($__internal_b7225dfb9f7ec444b9a1e2e4be389af6d09251de00fcd1ff9a7ea05779e32078_prof);

        
        $__internal_e2bde5e2c0170ff6dd5113274f85177b7fd6f8603adc7e7d3fef19eb65db644c->leave($__internal_e2bde5e2c0170ff6dd5113274f85177b7fd6f8603adc7e7d3fef19eb65db644c_prof);

    }

    // line 77
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fa07f4cc384d057bac305f547cc30aeecd86f0da0aeaa38d7004cd8c34b7c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa07f4cc384d057bac305f547cc30aeecd86f0da0aeaa38d7004cd8c34b7c09->enter($__internal_8fa07f4cc384d057bac305f547cc30aeecd86f0da0aeaa38d7004cd8c34b7c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_467247052c93e67619b0dd537de496c914d9cccd790b0df808746bb5ea8c7a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467247052c93e67619b0dd537de496c914d9cccd790b0df808746bb5ea8c7a8c->enter($__internal_467247052c93e67619b0dd537de496c914d9cccd790b0df808746bb5ea8c7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 78
        echo "
";
        
        $__internal_467247052c93e67619b0dd537de496c914d9cccd790b0df808746bb5ea8c7a8c->leave($__internal_467247052c93e67619b0dd537de496c914d9cccd790b0df808746bb5ea8c7a8c_prof);

        
        $__internal_8fa07f4cc384d057bac305f547cc30aeecd86f0da0aeaa38d7004cd8c34b7c09->leave($__internal_8fa07f4cc384d057bac305f547cc30aeecd86f0da0aeaa38d7004cd8c34b7c09_prof);

    }

    public function getTemplateName()
    {
        return "homepage/searchmovie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 78,  218 => 77,  203 => 72,  197 => 69,  188 => 64,  179 => 63,  165 => 56,  163 => 55,  153 => 49,  149 => 47,  146 => 46,  140 => 44,  134 => 42,  132 => 41,  129 => 40,  127 => 39,  121 => 36,  117 => 35,  110 => 31,  106 => 30,  99 => 26,  95 => 25,  88 => 21,  84 => 20,  77 => 16,  73 => 15,  66 => 12,  62 => 10,  59 => 9,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
        <div class=\"col-xs-3\">

        {% set action = \"\" %}

        <h2>{{ 'movie.search' | trans }}</h2>
        {# debut du formulaire #}
        {{ form_start(form, { 'attr':{ 'novalidate':'novalidate'} } ) }}

        <p>
            {{ form_label(form.title, 'movie.title' | trans | capitalize ~ ':' ) }}
            {{ form_widget(form.title) }}
        </p>

        <p>
            {{ form_label(form.releaseDate, 'movie.releaseDate' | trans | capitalize ~ ':' ) }}
            {{ form_widget(form.releaseDate) }}
        </p>

        <p>
            {{ form_label(form.price, 'price' | trans | capitalize ~ ':' ) }}
            {{ form_widget(form.price) }}
        </p>

        <p>
            {{ form_label(form.category, 'category' | trans | capitalize ~ ':' ) }}
            {{ form_widget(form.category) }}
        </p>

        <p>
            {{ form_label(form.actors, 'movie.actors' | trans | capitalize ~ ':' ) }}
            {{ form_widget(form.actors) }}
        </p>

        {%  set buttontext = 'submit.movie' | trans({}, 'forms') %}

        {% if action is not null %}
            <input type=\"submit\" value=\"{{ 'submit.update' | trans({'%value%' : buttontext},'forms') }}\">
        {% else %}
            <input type=\"submit\" value=\"{{ 'submit.create' | trans({'%value%' : buttontext},'forms') }}\">
        {% endif %}

        {{ form_errors(form.title) }}
        {# fin du formulaire #}
        {{ form_end(form) }}

        </div>


        <div class=\"col-xs-9\">
            {% include \"inc/render/movies.html.twig\" %}
        </div>

    </div>

{% endblock %}


{% block javascripts %}
    <script src=\"{{ asset('js/advancedSearch.js') }}\"></script>
    <script>
        let advancedScript = new AdvancedSearch();
        advancedScript.init();
    </script>
    <script src=\"{{ asset('js/basket.js') }}\"></script>
    <script>
        let basket = new Basket();
        basket.init(\"{{ url(\"app.basket.add\",{ \"id\" : 999 }) }}\",\"{{ url(\"app.basket.remove\",{ \"id\" : 999 }) }}\");
    </script>
{% endblock %}


{% block stylesheets %}

{% endblock %}
", "homepage/searchmovie.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/homepage/searchmovie.html.twig");
    }
}
