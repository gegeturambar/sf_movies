<?php

/* base.admin.html.twig */
class __TwigTemplate_0b20cb8970a177d5dd38a91c537a6f519208ec0e0ac3054aa91b5f7294ce2fe3 extends Twig_Template
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
        $__internal_b6edb9eec127c47a4978d6056735141832c4ef46f92c4cca24db9927aed20593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6edb9eec127c47a4978d6056735141832c4ef46f92c4cca24db9927aed20593->enter($__internal_b6edb9eec127c47a4978d6056735141832c4ef46f92c4cca24db9927aed20593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.admin.html.twig"));

        $__internal_b9c34e105a163728c0e7f5fb68565acf58cdf8187909a7d54c2bb73b871fc8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c34e105a163728c0e7f5fb68565acf58cdf8187909a7d54c2bb73b871fc8e0->enter($__internal_b9c34e105a163728c0e7f5fb68565acf58cdf8187909a7d54c2bb73b871fc8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.admin.html.twig"));

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
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 17
        $this->loadTemplate("inc/nav.admin.html.twig", "base.admin.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        $this->loadTemplate("basket/basket_price.html.twig", "base.admin.html.twig", 18)->display($context);
        // line 19
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>

        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_b6edb9eec127c47a4978d6056735141832c4ef46f92c4cca24db9927aed20593->leave($__internal_b6edb9eec127c47a4978d6056735141832c4ef46f92c4cca24db9927aed20593_prof);

        
        $__internal_b9c34e105a163728c0e7f5fb68565acf58cdf8187909a7d54c2bb73b871fc8e0->leave($__internal_b9c34e105a163728c0e7f5fb68565acf58cdf8187909a7d54c2bb73b871fc8e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a30a7b281f3e070676d34943e75309a0685c88aa2ba2c4df874e92fd6fae67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a30a7b281f3e070676d34943e75309a0685c88aa2ba2c4df874e92fd6fae67f->enter($__internal_6a30a7b281f3e070676d34943e75309a0685c88aa2ba2c4df874e92fd6fae67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3c5ffe4c33223102a9eeb2b97b23cd31c3e5d10bdbe8af7c983d2e162248ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c5ffe4c33223102a9eeb2b97b23cd31c3e5d10bdbe8af7c983d2e162248ab8->enter($__internal_a3c5ffe4c33223102a9eeb2b97b23cd31c3e5d10bdbe8af7c983d2e162248ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cinefan-admin !";
        
        $__internal_a3c5ffe4c33223102a9eeb2b97b23cd31c3e5d10bdbe8af7c983d2e162248ab8->leave($__internal_a3c5ffe4c33223102a9eeb2b97b23cd31c3e5d10bdbe8af7c983d2e162248ab8_prof);

        
        $__internal_6a30a7b281f3e070676d34943e75309a0685c88aa2ba2c4df874e92fd6fae67f->leave($__internal_6a30a7b281f3e070676d34943e75309a0685c88aa2ba2c4df874e92fd6fae67f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_905b125577e0df697055bd054c7c4f7c5bad249cd2a1a5dfbae193b300581b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905b125577e0df697055bd054c7c4f7c5bad249cd2a1a5dfbae193b300581b4a->enter($__internal_905b125577e0df697055bd054c7c4f7c5bad249cd2a1a5dfbae193b300581b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c696ed0ea1b5a7f80d00eaa0607807cd4e2a2c216e7a85d7feb75e750fd4f6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c696ed0ea1b5a7f80d00eaa0607807cd4e2a2c216e7a85d7feb75e750fd4f6fd->enter($__internal_c696ed0ea1b5a7f80d00eaa0607807cd4e2a2c216e7a85d7feb75e750fd4f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c696ed0ea1b5a7f80d00eaa0607807cd4e2a2c216e7a85d7feb75e750fd4f6fd->leave($__internal_c696ed0ea1b5a7f80d00eaa0607807cd4e2a2c216e7a85d7feb75e750fd4f6fd_prof);

        
        $__internal_905b125577e0df697055bd054c7c4f7c5bad249cd2a1a5dfbae193b300581b4a->leave($__internal_905b125577e0df697055bd054c7c4f7c5bad249cd2a1a5dfbae193b300581b4a_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd7e4adaf9a351ee28954adc06e86694694aeddbebbe7ff13be4c4e8ce0f002e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7e4adaf9a351ee28954adc06e86694694aeddbebbe7ff13be4c4e8ce0f002e->enter($__internal_bd7e4adaf9a351ee28954adc06e86694694aeddbebbe7ff13be4c4e8ce0f002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ee0050d0720a931ff36f00c75b7538c6c006f9dfd9a225825467f204b513378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee0050d0720a931ff36f00c75b7538c6c006f9dfd9a225825467f204b513378->enter($__internal_4ee0050d0720a931ff36f00c75b7538c6c006f9dfd9a225825467f204b513378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ee0050d0720a931ff36f00c75b7538c6c006f9dfd9a225825467f204b513378->leave($__internal_4ee0050d0720a931ff36f00c75b7538c6c006f9dfd9a225825467f204b513378_prof);

        
        $__internal_bd7e4adaf9a351ee28954adc06e86694694aeddbebbe7ff13be4c4e8ce0f002e->leave($__internal_bd7e4adaf9a351ee28954adc06e86694694aeddbebbe7ff13be4c4e8ce0f002e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c24f50621359706f1768e4f5d84798a663d49dfdfdd7dc8240a3ba6f44eee9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c24f50621359706f1768e4f5d84798a663d49dfdfdd7dc8240a3ba6f44eee9f->enter($__internal_8c24f50621359706f1768e4f5d84798a663d49dfdfdd7dc8240a3ba6f44eee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_815a3abf6108d469d9e9124742192019dc5812b08a543ed72fd7c40ea31d1c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815a3abf6108d469d9e9124742192019dc5812b08a543ed72fd7c40ea31d1c19->enter($__internal_815a3abf6108d469d9e9124742192019dc5812b08a543ed72fd7c40ea31d1c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_815a3abf6108d469d9e9124742192019dc5812b08a543ed72fd7c40ea31d1c19->leave($__internal_815a3abf6108d469d9e9124742192019dc5812b08a543ed72fd7c40ea31d1c19_prof);

        
        $__internal_8c24f50621359706f1768e4f5d84798a663d49dfdfdd7dc8240a3ba6f44eee9f->leave($__internal_8c24f50621359706f1768e4f5d84798a663d49dfdfdd7dc8240a3ba6f44eee9f_prof);

    }

    public function getTemplateName()
    {
        return "base.admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 24,  137 => 19,  120 => 11,  102 => 5,  90 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 20,  73 => 19,  70 => 18,  68 => 17,  61 => 13,  58 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Cinefan-admin !{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/flag-icon.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            {% include \"inc/nav.admin.html.twig\" %}
            {% include \"basket/basket_price.html.twig\" %}
            {% block body %}{% endblock %}
        </div>

        <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.admin.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/base.admin.html.twig");
    }
}
