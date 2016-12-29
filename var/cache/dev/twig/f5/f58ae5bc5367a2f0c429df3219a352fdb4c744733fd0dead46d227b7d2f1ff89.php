<?php

/* order/ordertopdf.html.twig */
class __TwigTemplate_db4c3350bce4ed9a4c8b014793a8f62ff88862c016044d255d6cdd522dd223e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.simple.html.twig", "order/ordertopdf.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49452dd2abcf1fe1f4414547d2f19a6f7dc858e55b65634a3e3cbb1c1bdfd34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49452dd2abcf1fe1f4414547d2f19a6f7dc858e55b65634a3e3cbb1c1bdfd34b->enter($__internal_49452dd2abcf1fe1f4414547d2f19a6f7dc858e55b65634a3e3cbb1c1bdfd34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/ordertopdf.html.twig"));

        $__internal_328b7f1fb10f839258ec9a0de355e364bf67241f618f282f38c0e7022e179f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328b7f1fb10f839258ec9a0de355e364bf67241f618f282f38c0e7022e179f4c->enter($__internal_328b7f1fb10f839258ec9a0de355e364bf67241f618f282f38c0e7022e179f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/ordertopdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49452dd2abcf1fe1f4414547d2f19a6f7dc858e55b65634a3e3cbb1c1bdfd34b->leave($__internal_49452dd2abcf1fe1f4414547d2f19a6f7dc858e55b65634a3e3cbb1c1bdfd34b_prof);

        
        $__internal_328b7f1fb10f839258ec9a0de355e364bf67241f618f282f38c0e7022e179f4c->leave($__internal_328b7f1fb10f839258ec9a0de355e364bf67241f618f282f38c0e7022e179f4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53f834aeb068692da131783e835ec395a2ec5d39393d91595bc6f0d3f6bd4bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f834aeb068692da131783e835ec395a2ec5d39393d91595bc6f0d3f6bd4bd2->enter($__internal_53f834aeb068692da131783e835ec395a2ec5d39393d91595bc6f0d3f6bd4bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b31b15031ab802b35380d1745a45148e1739cca1d018f08e54101a474adf3e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31b15031ab802b35380d1745a45148e1739cca1d018f08e54101a474adf3e6b->enter($__internal_b31b15031ab802b35380d1745a45148e1739cca1d018f08e54101a474adf3e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "               <tr class=\"movie\" id=\"movie_";
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
            echo twig_escape_filter($this->env, twig_localized_currency_filter($this->getAttribute($context["mov"], "price", array()), "eur"), "html", null, true);
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
            $context["price_total"] = ($this->getAttribute($context["mov"], "price", array()) * $this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), $this->getAttribute($context["mov"], "id", array())));
            // line 31
            echo "                     ";
            echo twig_escape_filter($this->env, twig_localized_currency_filter((isset($context["price_total"]) ? $context["price_total"] : $this->getContext($context, "price_total")), "eur"), "html", null, true);
            echo "
                  </td>
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "         </table>
         <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_localized_currency_filter((isset($context["total_price"]) ? $context["total_price"] : $this->getContext($context, "total_price")), "eur"), "html", null, true);
        echo "</p>
      </div>
   </div>

";
        
        $__internal_b31b15031ab802b35380d1745a45148e1739cca1d018f08e54101a474adf3e6b->leave($__internal_b31b15031ab802b35380d1745a45148e1739cca1d018f08e54101a474adf3e6b_prof);

        
        $__internal_53f834aeb068692da131783e835ec395a2ec5d39393d91595bc6f0d3f6bd4bd2->leave($__internal_53f834aeb068692da131783e835ec395a2ec5d39393d91595bc6f0d3f6bd4bd2_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3275b6af6526cfcec1ea1d7a98a3a4668421af943f33ae228d14b87d406b1268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3275b6af6526cfcec1ea1d7a98a3a4668421af943f33ae228d14b87d406b1268->enter($__internal_3275b6af6526cfcec1ea1d7a98a3a4668421af943f33ae228d14b87d406b1268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c58969ad7c7f7c98eaadbb82ea17983423ccc36eba12caf6832af46dfc617ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c58969ad7c7f7c98eaadbb82ea17983423ccc36eba12caf6832af46dfc617ef->enter($__internal_8c58969ad7c7f7c98eaadbb82ea17983423ccc36eba12caf6832af46dfc617ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c58969ad7c7f7c98eaadbb82ea17983423ccc36eba12caf6832af46dfc617ef->leave($__internal_8c58969ad7c7f7c98eaadbb82ea17983423ccc36eba12caf6832af46dfc617ef_prof);

        
        $__internal_3275b6af6526cfcec1ea1d7a98a3a4668421af943f33ae228d14b87d406b1268->leave($__internal_3275b6af6526cfcec1ea1d7a98a3a4668421af943f33ae228d14b87d406b1268_prof);

    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_969fbc13d09e2f8df225de49a10cff3198d5f28a40a57f65366102dfbcd7e4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969fbc13d09e2f8df225de49a10cff3198d5f28a40a57f65366102dfbcd7e4dc->enter($__internal_969fbc13d09e2f8df225de49a10cff3198d5f28a40a57f65366102dfbcd7e4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a48682e223396603ae1a581d6dcbd17ae366c4fd30a6366d5d2d1dc4c4162864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48682e223396603ae1a581d6dcbd17ae366c4fd30a6366d5d2d1dc4c4162864->enter($__internal_a48682e223396603ae1a581d6dcbd17ae366c4fd30a6366d5d2d1dc4c4162864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a48682e223396603ae1a581d6dcbd17ae366c4fd30a6366d5d2d1dc4c4162864->leave($__internal_a48682e223396603ae1a581d6dcbd17ae366c4fd30a6366d5d2d1dc4c4162864_prof);

        
        $__internal_969fbc13d09e2f8df225de49a10cff3198d5f28a40a57f65366102dfbcd7e4dc->leave($__internal_969fbc13d09e2f8df225de49a10cff3198d5f28a40a57f65366102dfbcd7e4dc_prof);

    }

    public function getTemplateName()
    {
        return "order/ordertopdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 45,  144 => 42,  129 => 36,  126 => 35,  115 => 31,  113 => 30,  107 => 27,  101 => 24,  95 => 21,  89 => 18,  83 => 16,  79 => 15,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.simple.html.twig' %}

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
                     {{ mov.price | localizedcurrency('eur') }}
                  </td>
                  <td>
                     {{ attribute(basket, mov.id) }}
                  </td>
                  <td>
                     {%  set price_total = mov.price * attribute(basket, mov.id)  %}
                     {{ price_total | localizedcurrency('eur') }}
                  </td>
               </tr>
            {% endfor %}
         </table>
         <p>{{ total_price | localizedcurrency('eur') }}</p>
      </div>
   </div>

{% endblock %}

{% block javascripts %}
{% endblock %}

{% block stylesheets %}
{% endblock %}
", "order/ordertopdf.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/order/ordertopdf.html.twig");
    }
}
