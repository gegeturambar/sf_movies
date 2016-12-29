<?php

/* basket/basket_price.html.twig */
class __TwigTemplate_6d69e4b49ac1a0afdd87f3634260d3f431dad9a93d1e7ec6bd9730d04e31cc8b extends Twig_Template
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
        $__internal_827a32660fc2f0fc60b10d61e55ad7658beccfbd1d90288f54354330450e5970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827a32660fc2f0fc60b10d61e55ad7658beccfbd1d90288f54354330450e5970->enter($__internal_827a32660fc2f0fc60b10d61e55ad7658beccfbd1d90288f54354330450e5970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/basket_price.html.twig"));

        $__internal_da5517c9cab65db4f565da5d3067df99831348bbbaabbef1cea27920c1e5f19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5517c9cab65db4f565da5d3067df99831348bbbaabbef1cea27920c1e5f19c->enter($__internal_da5517c9cab65db4f565da5d3067df99831348bbbaabbef1cea27920c1e5f19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/basket_price.html.twig"));

        // line 1
        echo "<div>
    <p id=\"totalprice\" class=\"basket_total_price\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Service\Twig\FunctionExtension')->renderBasketTotalPrice(), "html", null, true);
        echo "</p>
</div>



";
        
        $__internal_827a32660fc2f0fc60b10d61e55ad7658beccfbd1d90288f54354330450e5970->leave($__internal_827a32660fc2f0fc60b10d61e55ad7658beccfbd1d90288f54354330450e5970_prof);

        
        $__internal_da5517c9cab65db4f565da5d3067df99831348bbbaabbef1cea27920c1e5f19c->leave($__internal_da5517c9cab65db4f565da5d3067df99831348bbbaabbef1cea27920c1e5f19c_prof);

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
