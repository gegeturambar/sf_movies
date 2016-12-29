<?php

/* basket/index.html.twig */
class __TwigTemplate_3d867f27bff209c61bf451f58eec9aa8fbbb363192943d8c386c787083e30321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.admin.html.twig", "basket/index.html.twig", 1);
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
        $__internal_cc8b669fc9a9546559ac135ae0cd08a0b8d0caf18a660249d89bda1ce41f9352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8b669fc9a9546559ac135ae0cd08a0b8d0caf18a660249d89bda1ce41f9352->enter($__internal_cc8b669fc9a9546559ac135ae0cd08a0b8d0caf18a660249d89bda1ce41f9352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_97c7c815b2cbffbcfc4dba81caabe77c910091d144e5b5538af92db90b362637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c7c815b2cbffbcfc4dba81caabe77c910091d144e5b5538af92db90b362637->enter($__internal_97c7c815b2cbffbcfc4dba81caabe77c910091d144e5b5538af92db90b362637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8b669fc9a9546559ac135ae0cd08a0b8d0caf18a660249d89bda1ce41f9352->leave($__internal_cc8b669fc9a9546559ac135ae0cd08a0b8d0caf18a660249d89bda1ce41f9352_prof);

        
        $__internal_97c7c815b2cbffbcfc4dba81caabe77c910091d144e5b5538af92db90b362637->leave($__internal_97c7c815b2cbffbcfc4dba81caabe77c910091d144e5b5538af92db90b362637_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91450b246e93a6fca7077b0379b4b7e1ebf905bc3c5ab75efa7e4b1c3b2d4004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91450b246e93a6fca7077b0379b4b7e1ebf905bc3c5ab75efa7e4b1c3b2d4004->enter($__internal_91450b246e93a6fca7077b0379b4b7e1ebf905bc3c5ab75efa7e4b1c3b2d4004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7026a49f014287e24422bc8cc0a2f3cecce9170c5d21d951e065a11a76d5e723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7026a49f014287e24422bc8cc0a2f3cecce9170c5d21d951e065a11a76d5e723->enter($__internal_7026a49f014287e24422bc8cc0a2f3cecce9170c5d21d951e065a11a76d5e723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table id=\"basket\" class=\"table table-striped\">
                <th>";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title")), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("category")), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("price_unit")), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantity")), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("price_total")), "html", null, true);
        echo "</th>


                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : $this->getContext($context, "records")));
        foreach ($context['_seq'] as $context["_key"] => $context["mov"]) {
            // line 16
            echo "                    <tr class=\"movie\" id=\"movie_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "id", array()), "html", null, true);
            echo "\">
                        <td>
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "title", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mov"], "category", array()), "name", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "price", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), $this->getAttribute($context["mov"], "id", array())), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 30
            echo twig_escape_filter($this->env, ($this->getAttribute($context["mov"], "price", array()) * $this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), $this->getAttribute($context["mov"], "id", array()))), "html", null, true);
            echo "
                        </td>
                        <td>
                            <button class=\"btn addTobasket\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "id", array()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "price", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("basket.add")), "html", null, true);
            echo "</button>
                        </td>
                        <td>
                            <button class=\"btn removeFrombasket\" data-id=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "id", array()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "price", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("basket.remove")), "html", null, true);
            echo "</button>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </table>
        </div>
    </div>

    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app.order.finalisation");
        echo "\" >Finalisation order</a>
";
        
        $__internal_7026a49f014287e24422bc8cc0a2f3cecce9170c5d21d951e065a11a76d5e723->leave($__internal_7026a49f014287e24422bc8cc0a2f3cecce9170c5d21d951e065a11a76d5e723_prof);

        
        $__internal_91450b246e93a6fca7077b0379b4b7e1ebf905bc3c5ab75efa7e4b1c3b2d4004->leave($__internal_91450b246e93a6fca7077b0379b4b7e1ebf905bc3c5ab75efa7e4b1c3b2d4004_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23c6344ee96a9ee48bfd5e63cfae79771c2735f7f9c39867a53cf629161a87db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c6344ee96a9ee48bfd5e63cfae79771c2735f7f9c39867a53cf629161a87db->enter($__internal_23c6344ee96a9ee48bfd5e63cfae79771c2735f7f9c39867a53cf629161a87db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d811bcd16c1e8130a3d6acf539eefe303c2a0eacac57c442ddd7d6abb6a0d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d811bcd16c1e8130a3d6acf539eefe303c2a0eacac57c442ddd7d6abb6a0d53->enter($__internal_2d811bcd16c1e8130a3d6acf539eefe303c2a0eacac57c442ddd7d6abb6a0d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/basket.js"), "html", null, true);
        echo "\"></script>
    <script>
        let basket = new Basket();
        basket.init(\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.add", array("id" => 999));
        echo "\",\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.remove", array("id" => 999));
        echo "\");
    </script>
";
        
        $__internal_2d811bcd16c1e8130a3d6acf539eefe303c2a0eacac57c442ddd7d6abb6a0d53->leave($__internal_2d811bcd16c1e8130a3d6acf539eefe303c2a0eacac57c442ddd7d6abb6a0d53_prof);

        
        $__internal_23c6344ee96a9ee48bfd5e63cfae79771c2735f7f9c39867a53cf629161a87db->leave($__internal_23c6344ee96a9ee48bfd5e63cfae79771c2735f7f9c39867a53cf629161a87db_prof);

    }

    // line 55
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d963e8b98da67fd007cf801ba5b9f73a79f55d449a43d5bca7b6034343a1663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d963e8b98da67fd007cf801ba5b9f73a79f55d449a43d5bca7b6034343a1663->enter($__internal_5d963e8b98da67fd007cf801ba5b9f73a79f55d449a43d5bca7b6034343a1663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9cba351cfa355183c22b41742c4601747a2af328148be0588692bc2a96b470b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cba351cfa355183c22b41742c4601747a2af328148be0588692bc2a96b470b1->enter($__internal_9cba351cfa355183c22b41742c4601747a2af328148be0588692bc2a96b470b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 56
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
        
        $__internal_9cba351cfa355183c22b41742c4601747a2af328148be0588692bc2a96b470b1->leave($__internal_9cba351cfa355183c22b41742c4601747a2af328148be0588692bc2a96b470b1_prof);

        
        $__internal_5d963e8b98da67fd007cf801ba5b9f73a79f55d449a43d5bca7b6034343a1663->leave($__internal_5d963e8b98da67fd007cf801ba5b9f73a79f55d449a43d5bca7b6034343a1663_prof);

    }

    public function getTemplateName()
    {
        return "basket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 56,  192 => 55,  177 => 51,  170 => 48,  161 => 47,  149 => 44,  143 => 40,  129 => 36,  119 => 33,  113 => 30,  107 => 27,  101 => 24,  95 => 21,  89 => 18,  83 => 16,  79 => 15,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
            <table id=\"basket\" class=\"table table-striped\">
                <th>{{ \"title\" | trans | capitalize }}</th>
                <th>{{ \"category\" | trans | capitalize }}</th>
                <th>{{ \"price_unit\" | trans | capitalize }}</th>
                <th>{{ \"quantity\" | trans | capitalize }}</th>
                <th>{{ \"price_total\" | trans | capitalize }}</th>


                {% for mov in records %}
                    <tr class=\"movie\" id=\"movie_{{ mov.id }}\">
                        <td>
                            {{ mov.title }}
                        </td>
                        <td>
                            {{ mov.category.name }}
                        </td>
                        <td>
                            {{ mov.price }}
                        </td>
                        <td>
                            {{ attribute(basket, mov.id) }}
                        </td>
                        <td>
                            {{ mov.price * attribute(basket, mov.id) }}
                        </td>
                        <td>
                            <button class=\"btn addTobasket\" data-id=\"{{ mov.id }}\" data-price=\"{{ mov.price }}\">{{ 'basket.add' | trans | capitalize }}</button>
                        </td>
                        <td>
                            <button class=\"btn removeFrombasket\" data-id=\"{{ mov.id }}\" data-price=\"{{ mov.price }}\">{{ 'basket.remove' | trans | capitalize }}</button>
                        </td>
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>

    <a href=\"{{ path('app.order.finalisation') }}\" >Finalisation order</a>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/basket.js') }}\"></script>
    <script>
        let basket = new Basket();
        basket.init(\"{{ url(\"app.basket.add\",{ \"id\" : 999 }) }}\",\"{{ url(\"app.basket.remove\",{ \"id\" : 999 }) }}\");
    </script>
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
", "basket/index.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/basket/index.html.twig");
    }
}
