<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_59d90d7dc258e8946ca6c74bb9ce7022c44a5684613c5814a1d8d0030ca96dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37accfbf1589d58ec83251bac7d9a7fe860d667ffad53f05b7dff1c2c5cf1413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37accfbf1589d58ec83251bac7d9a7fe860d667ffad53f05b7dff1c2c5cf1413->enter($__internal_37accfbf1589d58ec83251bac7d9a7fe860d667ffad53f05b7dff1c2c5cf1413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_b331bb96be25d5bd237f505ec3cdf3b9be63c43914e6d0254da90d693c08dece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b331bb96be25d5bd237f505ec3cdf3b9be63c43914e6d0254da90d693c08dece->enter($__internal_b331bb96be25d5bd237f505ec3cdf3b9be63c43914e6d0254da90d693c08dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_37accfbf1589d58ec83251bac7d9a7fe860d667ffad53f05b7dff1c2c5cf1413->leave($__internal_37accfbf1589d58ec83251bac7d9a7fe860d667ffad53f05b7dff1c2c5cf1413_prof);

        
        $__internal_b331bb96be25d5bd237f505ec3cdf3b9be63c43914e6d0254da90d693c08dece->leave($__internal_b331bb96be25d5bd237f505ec3cdf3b9be63c43914e6d0254da90d693c08dece_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_1757c2fd009ce2226735e05fcaef5c840a09f68c9effbce87d2a518c884f3e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1757c2fd009ce2226735e05fcaef5c840a09f68c9effbce87d2a518c884f3e52->enter($__internal_1757c2fd009ce2226735e05fcaef5c840a09f68c9effbce87d2a518c884f3e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_ecfddfc7daab498f58175d9db1f4a66113686e0a86e6c8198a7a92aff216e054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfddfc7daab498f58175d9db1f4a66113686e0a86e6c8198a7a92aff216e054->enter($__internal_ecfddfc7daab498f58175d9db1f4a66113686e0a86e6c8198a7a92aff216e054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_ecfddfc7daab498f58175d9db1f4a66113686e0a86e6c8198a7a92aff216e054->leave($__internal_ecfddfc7daab498f58175d9db1f4a66113686e0a86e6c8198a7a92aff216e054_prof);

        
        $__internal_1757c2fd009ce2226735e05fcaef5c840a09f68c9effbce87d2a518c884f3e52->leave($__internal_1757c2fd009ce2226735e05fcaef5c840a09f68c9effbce87d2a518c884f3e52_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 8,  37 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
    </body>
</html>
", "HWIOAuthBundle::layout.html.twig", "/home/wamobi10/sites/cinefan/vendor/hwi/oauth-bundle/Resources/views/layout.html.twig");
    }
}
