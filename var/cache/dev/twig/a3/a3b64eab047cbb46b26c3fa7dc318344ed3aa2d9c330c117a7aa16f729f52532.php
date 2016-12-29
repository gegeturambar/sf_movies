<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_627608465d313108baf95e6f7f812b263d163b1a2076f4d9a9a4d6e8a725a583 extends Twig_Template
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
        $__internal_0f157a100556fdbe1aab406704c0c32554aeb3434904f189c99a33ec90232118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f157a100556fdbe1aab406704c0c32554aeb3434904f189c99a33ec90232118->enter($__internal_0f157a100556fdbe1aab406704c0c32554aeb3434904f189c99a33ec90232118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_9e0bfc3ca9ddce3422cb351385baeff87b57c76882bbbf1cb5966cee0a086040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0bfc3ca9ddce3422cb351385baeff87b57c76882bbbf1cb5966cee0a086040->enter($__internal_9e0bfc3ca9ddce3422cb351385baeff87b57c76882bbbf1cb5966cee0a086040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0f157a100556fdbe1aab406704c0c32554aeb3434904f189c99a33ec90232118->leave($__internal_0f157a100556fdbe1aab406704c0c32554aeb3434904f189c99a33ec90232118_prof);

        
        $__internal_9e0bfc3ca9ddce3422cb351385baeff87b57c76882bbbf1cb5966cee0a086040->leave($__internal_9e0bfc3ca9ddce3422cb351385baeff87b57c76882bbbf1cb5966cee0a086040_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/wamobi10/sites/cinefan/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
