<?php

/* inc/render/locales.html.twig */
class __TwigTemplate_efa9659d37a0ce2d570977993087b46c19a6a862b0619c1547751e7882a530ab extends Twig_Template
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
        $__internal_0ad2401b736577787092522a3ea2b91259cbcda5e2feba1ecf7867f51a6ddfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad2401b736577787092522a3ea2b91259cbcda5e2feba1ecf7867f51a6ddfed->enter($__internal_0ad2401b736577787092522a3ea2b91259cbcda5e2feba1ecf7867f51a6ddfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/render/locales.html.twig"));

        $__internal_fdea3bd9fcf01e99a5048cced1f2d28101289bf3eacec3aca2a7eb130318648d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdea3bd9fcf01e99a5048cced1f2d28101289bf3eacec3aca2a7eb130318648d->enter($__internal_fdea3bd9fcf01e99a5048cced1f2d28101289bf3eacec3aca2a7eb130318648d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/render/locales.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")));
        foreach ($context['_seq'] as $context["loc"] => $context["route"]) {
            // line 3
            echo "    ";
            $context["lang"] = ($context["loc"] . "_language");
            // line 4
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "route", array(), "array"), "html", null, true);
            echo "\"><i class=\"flag-icon flag-icon-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "flag", array(), "array"), "html", null, true);
            echo "\"></i></a></li>
            <!-- ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), array(), "languages"), "html", null, true);
            echo "</a></li> -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['loc'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
        
        $__internal_0ad2401b736577787092522a3ea2b91259cbcda5e2feba1ecf7867f51a6ddfed->leave($__internal_0ad2401b736577787092522a3ea2b91259cbcda5e2feba1ecf7867f51a6ddfed_prof);

        
        $__internal_fdea3bd9fcf01e99a5048cced1f2d28101289bf3eacec3aca2a7eb130318648d->leave($__internal_fdea3bd9fcf01e99a5048cced1f2d28101289bf3eacec3aca2a7eb130318648d_prof);

    }

    public function getTemplateName()
    {
        return "inc/render/locales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  42 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"dropdown-menu\">
{%  for loc, route in routes %}
    {% set lang = loc ~ '_language' %}
    <li><a href=\"{{ route['route']  }}\"><i class=\"flag-icon flag-icon-{{ route['flag'] }}\"></i></a></li>
            <!-- {{ lang | trans({},'languages') }}</a></li> -->
{%  endfor %}
</ul>", "inc/render/locales.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/inc/render/locales.html.twig");
    }
}
