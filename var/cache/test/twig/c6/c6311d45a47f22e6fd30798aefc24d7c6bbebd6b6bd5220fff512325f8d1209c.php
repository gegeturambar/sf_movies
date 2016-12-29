<?php

/* basket/basket_price.html.twig */
class __TwigTemplate_9a0043897fe927f679071878b4d4660d105e9d471aab37899563ee85e628971f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0a4e9f83602b03197a393d58ad691c75ae433e5b17e2537210026ebcf0ebfc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a4e9f83602b03197a393d58ad691c75ae433e5b17e2537210026ebcf0ebfc8->enter($__internal_b0a4e9f83602b03197a393d58ad691c75ae433e5b17e2537210026ebcf0ebfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/basket_price.html.twig"));

        $__internal_02e9515511caf4d37ecfdcde7f35272bda930605f13a45fe39d7779bcf37d0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e9515511caf4d37ecfdcde7f35272bda930605f13a45fe39d7779bcf37d0a6->enter($__internal_02e9515511caf4d37ecfdcde7f35272bda930605f13a45fe39d7779bcf37d0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/basket_price.html.twig"));

        // line 1
        echo "<div>
    <p id=\"totalprice\" class=\"basket_total_price\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Service\Twig\FunctionExtension')->renderBasketTotalPrice(), "html", null, true);
        echo "</p>
</div>



";
        
        $__internal_b0a4e9f83602b03197a393d58ad691c75ae433e5b17e2537210026ebcf0ebfc8->leave($__internal_b0a4e9f83602b03197a393d58ad691c75ae433e5b17e2537210026ebcf0ebfc8_prof);

        
        $__internal_02e9515511caf4d37ecfdcde7f35272bda930605f13a45fe39d7779bcf37d0a6->leave($__internal_02e9515511caf4d37ecfdcde7f35272bda930605f13a45fe39d7779bcf37d0a6_prof);

    }

    public function getTemplateName()
    {
        return "basket/basket_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <p id=\"totalprice\" class=\"basket_total_price\">{{ render_basket_total_price() }}</p>
</div>



", "basket/basket_price.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/basket/basket_price.html.twig");
    }
}
