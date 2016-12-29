<?php

/* base.simple.html.twig */
class __TwigTemplate_6964c4a038eb858a09ed72c1e3ee3ed595718e946b0ee6f38bb6438279195c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8869f2d39df95c73a04ae7a30f309835cad329709b10ba19c7cb619c0cd5fa2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8869f2d39df95c73a04ae7a30f309835cad329709b10ba19c7cb619c0cd5fa2a->enter($__internal_8869f2d39df95c73a04ae7a30f309835cad329709b10ba19c7cb619c0cd5fa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.simple.html.twig"));

        $__internal_5564fb3e4dba43c54b88b497e673ede0349dc229a09509eccba646e057d4f671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5564fb3e4dba43c54b88b497e673ede0349dc229a09509eccba646e057d4f671->enter($__internal_5564fb3e4dba43c54b88b497e673ede0349dc229a09509eccba646e057d4f671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.simple.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flag-icon.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        </div>

        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_8869f2d39df95c73a04ae7a30f309835cad329709b10ba19c7cb619c0cd5fa2a->leave($__internal_8869f2d39df95c73a04ae7a30f309835cad329709b10ba19c7cb619c0cd5fa2a_prof);

        
        $__internal_5564fb3e4dba43c54b88b497e673ede0349dc229a09509eccba646e057d4f671->leave($__internal_5564fb3e4dba43c54b88b497e673ede0349dc229a09509eccba646e057d4f671_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc143b3c686d9456829b3efdbb1bc2acedeb4cd2e41d73c4f4f6a3311919fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc143b3c686d9456829b3efdbb1bc2acedeb4cd2e41d73c4f4f6a3311919fa3->enter($__internal_fdc143b3c686d9456829b3efdbb1bc2acedeb4cd2e41d73c4f4f6a3311919fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08734d1ff56b3a91adcd2fc6c4a0038920c23e9ae71e3226196c910a2fa37b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08734d1ff56b3a91adcd2fc6c4a0038920c23e9ae71e3226196c910a2fa37b8c->enter($__internal_08734d1ff56b3a91adcd2fc6c4a0038920c23e9ae71e3226196c910a2fa37b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cinefan for the fun !";
        
        $__internal_08734d1ff56b3a91adcd2fc6c4a0038920c23e9ae71e3226196c910a2fa37b8c->leave($__internal_08734d1ff56b3a91adcd2fc6c4a0038920c23e9ae71e3226196c910a2fa37b8c_prof);

        
        $__internal_fdc143b3c686d9456829b3efdbb1bc2acedeb4cd2e41d73c4f4f6a3311919fa3->leave($__internal_fdc143b3c686d9456829b3efdbb1bc2acedeb4cd2e41d73c4f4f6a3311919fa3_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_730dfa5cefcdade254ba3de05784ba6d5587ef8f6d82c253fe4d53083a016514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730dfa5cefcdade254ba3de05784ba6d5587ef8f6d82c253fe4d53083a016514->enter($__internal_730dfa5cefcdade254ba3de05784ba6d5587ef8f6d82c253fe4d53083a016514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5596e35dafc0b92a6b6e0612d4d55adb4d01e9b767f52e5c5232584d5169c281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5596e35dafc0b92a6b6e0612d4d55adb4d01e9b767f52e5c5232584d5169c281->enter($__internal_5596e35dafc0b92a6b6e0612d4d55adb4d01e9b767f52e5c5232584d5169c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5596e35dafc0b92a6b6e0612d4d55adb4d01e9b767f52e5c5232584d5169c281->leave($__internal_5596e35dafc0b92a6b6e0612d4d55adb4d01e9b767f52e5c5232584d5169c281_prof);

        
        $__internal_730dfa5cefcdade254ba3de05784ba6d5587ef8f6d82c253fe4d53083a016514->leave($__internal_730dfa5cefcdade254ba3de05784ba6d5587ef8f6d82c253fe4d53083a016514_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_61ae01c40bd6099f40cb74ed7d0f8713df97761e4c366756c266eac30a438300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ae01c40bd6099f40cb74ed7d0f8713df97761e4c366756c266eac30a438300->enter($__internal_61ae01c40bd6099f40cb74ed7d0f8713df97761e4c366756c266eac30a438300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8236f74d1d937bb3ad17b8e86faf4c2d0d3e44ac1cf8ee2bb7a9fdcd91530cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8236f74d1d937bb3ad17b8e86faf4c2d0d3e44ac1cf8ee2bb7a9fdcd91530cb6->enter($__internal_8236f74d1d937bb3ad17b8e86faf4c2d0d3e44ac1cf8ee2bb7a9fdcd91530cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8236f74d1d937bb3ad17b8e86faf4c2d0d3e44ac1cf8ee2bb7a9fdcd91530cb6->leave($__internal_8236f74d1d937bb3ad17b8e86faf4c2d0d3e44ac1cf8ee2bb7a9fdcd91530cb6_prof);

        
        $__internal_61ae01c40bd6099f40cb74ed7d0f8713df97761e4c366756c266eac30a438300->leave($__internal_61ae01c40bd6099f40cb74ed7d0f8713df97761e4c366756c266eac30a438300_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce64bd7011d9f820faf3a6b95798267daf5d0d27655711b5ebbc443e6fae3647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce64bd7011d9f820faf3a6b95798267daf5d0d27655711b5ebbc443e6fae3647->enter($__internal_ce64bd7011d9f820faf3a6b95798267daf5d0d27655711b5ebbc443e6fae3647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dfccb4a2810799dfbe02baa7584caea1eb0d251f8744b988b6533e43701a404f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfccb4a2810799dfbe02baa7584caea1eb0d251f8744b988b6533e43701a404f->enter($__internal_dfccb4a2810799dfbe02baa7584caea1eb0d251f8744b988b6533e43701a404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dfccb4a2810799dfbe02baa7584caea1eb0d251f8744b988b6533e43701a404f->leave($__internal_dfccb4a2810799dfbe02baa7584caea1eb0d251f8744b988b6533e43701a404f_prof);

        
        $__internal_ce64bd7011d9f820faf3a6b95798267daf5d0d27655711b5ebbc443e6fae3647->leave($__internal_ce64bd7011d9f820faf3a6b95798267daf5d0d27655711b5ebbc443e6fae3647_prof);

    }

    public function getTemplateName()
    {
        return "base.simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 19,  121 => 16,  104 => 11,  86 => 5,  74 => 20,  72 => 19,  68 => 17,  66 => 16,  58 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Cinefan for the fun !{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/flag-icon.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.simple.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/base.simple.html.twig");
    }
}
