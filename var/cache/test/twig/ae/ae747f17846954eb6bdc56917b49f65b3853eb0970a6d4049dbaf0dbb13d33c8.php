<?php

/* inc/render/movies.html.twig */
class __TwigTemplate_a31550829e7a81ad06f393924b8ca85719d6ffc8c709cf45ead9086f331e95c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e99a4d255a7975d79d00d3b517f84f9d0ece1ec12d63f2f1fcb2302e4ad3184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e99a4d255a7975d79d00d3b517f84f9d0ece1ec12d63f2f1fcb2302e4ad3184->enter($__internal_8e99a4d255a7975d79d00d3b517f84f9d0ece1ec12d63f2f1fcb2302e4ad3184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/render/movies.html.twig"));

        $__internal_be72e7cca0fa9c633fc247c95f87f37e3f7cf9e920c4c07c04d68ba34123c1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be72e7cca0fa9c633fc247c95f87f37e3f7cf9e920c4c07c04d68ba34123c1e0->enter($__internal_be72e7cca0fa9c633fc247c95f87f37e3f7cf9e920c4c07c04d68ba34123c1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/render/movies.html.twig"));

        // line 1
        echo "<div class=\"row\">
        <div class=\"col-xs-12\">
            <table id=\"movies\" class=\"table table-striped\">
                <th>";
        // line 4
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title")), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("slug")), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("price")), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("category")), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("poster")), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actors")), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.update")), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.delete")), "html", null, true);
        echo "</th>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : $this->getContext($context, "records")));
        foreach ($context['_seq'] as $context["_key"] => $context["mov"]) {
            // line 13
            echo "                    <tr class=\"movie\" id=\"movie_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "id", array()), "html", null, true);
            echo "\">
                        <td>
                            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.movie.view", array("id" => $this->getAttribute($context["mov"], "id", array()), "slug" => $this->getAttribute($context["mov"], "slug", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "title", array()), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "slug", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "price", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mov"], "category", array()), "name", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, ("/upload/" . $this->getAttribute($context["mov"], "poster", array())), "html", null, true);
            echo "\">
                        </td>
                        <td>
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mov"], "actors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
                // line 31
                echo "                                <p>";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["act"], "firstname", array()) . " ") . $this->getAttribute($context["act"], "lastname", array())), "html", null, true);
                echo " </p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                        </td>
                        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.movie.form.update", array("id" => $this->getAttribute($context["mov"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.update")), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.movie.form.delete", array("id" => $this->getAttribute($context["mov"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("movie.delete")), "html", null, true);
            echo "</a></td>
                        <td><button class=\"btn addTobasket\" data-id=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "id", array()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "price", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("basket.add")), "html", null, true);
            echo "</button></td>
                        <td><button class=\"btn removeFrombasket\" data-id=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "id", array()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "price", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("basket.remove")), "html", null, true);
            echo "</button></td>
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

";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_8e99a4d255a7975d79d00d3b517f84f9d0ece1ec12d63f2f1fcb2302e4ad3184->leave($__internal_8e99a4d255a7975d79d00d3b517f84f9d0ece1ec12d63f2f1fcb2302e4ad3184_prof);

        
        $__internal_be72e7cca0fa9c633fc247c95f87f37e3f7cf9e920c4c07c04d68ba34123c1e0->leave($__internal_be72e7cca0fa9c633fc247c95f87f37e3f7cf9e920c4c07c04d68ba34123c1e0_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a92d029d423e1df8abaf11f8610559add617f3dc71896dfda3bfffa79948937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a92d029d423e1df8abaf11f8610559add617f3dc71896dfda3bfffa79948937->enter($__internal_6a92d029d423e1df8abaf11f8610559add617f3dc71896dfda3bfffa79948937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1968ec853329a63c941b957ddf34d1fc0227f1a73fe8f66d54e201300d054466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1968ec853329a63c941b957ddf34d1fc0227f1a73fe8f66d54e201300d054466->enter($__internal_1968ec853329a63c941b957ddf34d1fc0227f1a73fe8f66d54e201300d054466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/basket.js"), "html", null, true);
        echo "\"></script>
    <script>
        let basket = new Basket();
        basket.init(\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.add", array("id" => 999));
        echo "\",\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.remove", array("id" => 999));
        echo "\");
    </script>
";
        
        $__internal_1968ec853329a63c941b957ddf34d1fc0227f1a73fe8f66d54e201300d054466->leave($__internal_1968ec853329a63c941b957ddf34d1fc0227f1a73fe8f66d54e201300d054466_prof);

        
        $__internal_6a92d029d423e1df8abaf11f8610559add617f3dc71896dfda3bfffa79948937->leave($__internal_6a92d029d423e1df8abaf11f8610559add617f3dc71896dfda3bfffa79948937_prof);

    }

    public function getTemplateName()
    {
        return "inc/render/movies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 48,  178 => 45,  160 => 44,  154 => 40,  141 => 37,  133 => 36,  127 => 35,  121 => 34,  118 => 33,  109 => 31,  105 => 30,  99 => 27,  93 => 24,  87 => 21,  81 => 18,  73 => 15,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
        <div class=\"col-xs-12\">
            <table id=\"movies\" class=\"table table-striped\">
                <th>{{ \"title\" | trans | capitalize }}</th>
                <th>{{ \"slug\" | trans | capitalize }}</th>
                <th>{{ \"price\" | trans | capitalize }}</th>
                <th>{{ \"category\" | trans | capitalize }}</th>
                <th>{{ \"poster\" | trans | capitalize }}</th>
                <th>{{ \"actors\" | trans | capitalize }}</th>
                <th>{{ 'movie.update' | trans | capitalize }}</th>
                <th>{{ 'movie.delete' | trans | capitalize }}</th>
                {% for mov in records %}
                    <tr class=\"movie\" id=\"movie_{{ mov.id }}\">
                        <td>
                            <a href=\"{{ url(\"app.movie.view\", { \"id\" : mov.id,\"slug\" : mov.slug}) }}\" >{{ mov.title }}</a>
                        </td>
                        <td>
                            {{ mov.slug }}
                        </td>
                        <td>
                            {{ mov.price }}
                        </td>
                        <td>
                            {{ mov.category.name }}
                        </td>
                        <td>
                            <img src=\"{{ '/upload/' ~ mov.poster }}\">
                        </td>
                        <td>
                            {% for act in mov.actors %}
                                <p>{{ act.firstname ~ \" \" ~ act.lastname }} </p>
                            {% endfor %}
                        </td>
                        <td><a href=\"{{ url(\"app.admin.movie.form.update\", { \"id\" : mov.id }) }}\" class=\"btn btn-info\">{{ 'movie.update' | trans | capitalize }}</a></td>
                        <td><a href=\"{{ url(\"app.admin.movie.form.delete\", { \"id\" : mov.id }) }}\" class=\"btn btn-danger\">{{ 'movie.delete' | trans | capitalize }}</a></td>
                        <td><button class=\"btn addTobasket\" data-id=\"{{ mov.id }}\" data-price=\"{{ mov.price }}\">{{ 'basket.add' | trans | capitalize }}</button></td>
                        <td><button class=\"btn removeFrombasket\" data-id=\"{{ mov.id }}\" data-price=\"{{ mov.price }}\">{{ 'basket.remove' | trans | capitalize }}</button></td>
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>

{% block javascripts %}
    <script src=\"{{ asset('js/basket.js') }}\"></script>
    <script>
        let basket = new Basket();
        basket.init(\"{{ url(\"app.basket.add\",{ \"id\" : 999 }) }}\",\"{{ url(\"app.basket.remove\",{ \"id\" : 999 }) }}\");
    </script>
{% endblock %}", "inc/render/movies.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/inc/render/movies.html.twig");
    }
}
