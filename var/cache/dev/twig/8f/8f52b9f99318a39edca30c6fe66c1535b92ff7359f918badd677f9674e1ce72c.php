<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_4c8778759890e5e0b7b1988ece3ccbc0e791286425c222b8b54b814f2015b01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66f7142f663742b97e6c8937ed0c1a6dbad4368c138778578e141241a8843ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f7142f663742b97e6c8937ed0c1a6dbad4368c138778578e141241a8843ffb->enter($__internal_66f7142f663742b97e6c8937ed0c1a6dbad4368c138778578e141241a8843ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_1875249cdaf4ee884983ff3687e8a445e2da13abbef897912e740a5266810260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1875249cdaf4ee884983ff3687e8a445e2da13abbef897912e740a5266810260->enter($__internal_1875249cdaf4ee884983ff3687e8a445e2da13abbef897912e740a5266810260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f7142f663742b97e6c8937ed0c1a6dbad4368c138778578e141241a8843ffb->leave($__internal_66f7142f663742b97e6c8937ed0c1a6dbad4368c138778578e141241a8843ffb_prof);

        
        $__internal_1875249cdaf4ee884983ff3687e8a445e2da13abbef897912e740a5266810260->leave($__internal_1875249cdaf4ee884983ff3687e8a445e2da13abbef897912e740a5266810260_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_58441a5bc0812d8fb4726c069c0c40c7be12d7945eba61b970252d92d4b23a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58441a5bc0812d8fb4726c069c0c40c7be12d7945eba61b970252d92d4b23a07->enter($__internal_58441a5bc0812d8fb4726c069c0c40c7be12d7945eba61b970252d92d4b23a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_ba624c7902fd457b41d0736c316e516142361570222eb8207012c1f63801bc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba624c7902fd457b41d0736c316e516142361570222eb8207012c1f63801bc8b->enter($__internal_ba624c7902fd457b41d0736c316e516142361570222eb8207012c1f63801bc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ba624c7902fd457b41d0736c316e516142361570222eb8207012c1f63801bc8b->leave($__internal_ba624c7902fd457b41d0736c316e516142361570222eb8207012c1f63801bc8b_prof);

        
        $__internal_58441a5bc0812d8fb4726c069c0c40c7be12d7945eba61b970252d92d4b23a07->leave($__internal_58441a5bc0812d8fb4726c069c0c40c7be12d7945eba61b970252d92d4b23a07_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "/home/wamobi10/sites/cinefan/vendor/hwi/oauth-bundle/Resources/views/Connect/login.html.twig");
    }
}
