<?php

/* base.html.twig */
class __TwigTemplate_b031dd22f72f051bc178b10264074ac59630b874097a53c0961daf7c27e7a164 extends Twig_Template
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
        $__internal_c445a96d57c48be854b391f87a96e0c88b519e9b7ba80ce5125b45a44f9e3d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c445a96d57c48be854b391f87a96e0c88b519e9b7ba80ce5125b45a44f9e3d1c->enter($__internal_c445a96d57c48be854b391f87a96e0c88b519e9b7ba80ce5125b45a44f9e3d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_54b2d5c7d0d6ec89d01311e3f0efe0e598eed4dab626f65b9b50ffca85f41537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b2d5c7d0d6ec89d01311e3f0efe0e598eed4dab626f65b9b50ffca85f41537->enter($__internal_54b2d5c7d0d6ec89d01311e3f0efe0e598eed4dab626f65b9b50ffca85f41537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->loadTemplate("inc/nav.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "            ";
        $this->loadTemplate("basket/basket_price.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        </div>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_c445a96d57c48be854b391f87a96e0c88b519e9b7ba80ce5125b45a44f9e3d1c->leave($__internal_c445a96d57c48be854b391f87a96e0c88b519e9b7ba80ce5125b45a44f9e3d1c_prof);

        
        $__internal_54b2d5c7d0d6ec89d01311e3f0efe0e598eed4dab626f65b9b50ffca85f41537->leave($__internal_54b2d5c7d0d6ec89d01311e3f0efe0e598eed4dab626f65b9b50ffca85f41537_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2563b9508386f665ba6f1502f9cb831c552dd15b508e1bf547a24654a207ae75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2563b9508386f665ba6f1502f9cb831c552dd15b508e1bf547a24654a207ae75->enter($__internal_2563b9508386f665ba6f1502f9cb831c552dd15b508e1bf547a24654a207ae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_684bfb9bc9d8e84e757528064f97ae72e788bfbb310c6bfc6d8fd31af7e93050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684bfb9bc9d8e84e757528064f97ae72e788bfbb310c6bfc6d8fd31af7e93050->enter($__internal_684bfb9bc9d8e84e757528064f97ae72e788bfbb310c6bfc6d8fd31af7e93050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cinefan for the fun !";
        
        $__internal_684bfb9bc9d8e84e757528064f97ae72e788bfbb310c6bfc6d8fd31af7e93050->leave($__internal_684bfb9bc9d8e84e757528064f97ae72e788bfbb310c6bfc6d8fd31af7e93050_prof);

        
        $__internal_2563b9508386f665ba6f1502f9cb831c552dd15b508e1bf547a24654a207ae75->leave($__internal_2563b9508386f665ba6f1502f9cb831c552dd15b508e1bf547a24654a207ae75_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c38c196257c1304df6d457a2da8160cd684476acb171438652575bb30bf742e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c38c196257c1304df6d457a2da8160cd684476acb171438652575bb30bf742e->enter($__internal_8c38c196257c1304df6d457a2da8160cd684476acb171438652575bb30bf742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e1d8d7cc5707ae8a239db3320acd628e1df93173faab0476a63b95fd3f4263ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d8d7cc5707ae8a239db3320acd628e1df93173faab0476a63b95fd3f4263ec->enter($__internal_e1d8d7cc5707ae8a239db3320acd628e1df93173faab0476a63b95fd3f4263ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e1d8d7cc5707ae8a239db3320acd628e1df93173faab0476a63b95fd3f4263ec->leave($__internal_e1d8d7cc5707ae8a239db3320acd628e1df93173faab0476a63b95fd3f4263ec_prof);

        
        $__internal_8c38c196257c1304df6d457a2da8160cd684476acb171438652575bb30bf742e->leave($__internal_8c38c196257c1304df6d457a2da8160cd684476acb171438652575bb30bf742e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_216fca71238eccafc060e3762addf00188a0d140399809b812610294d3122a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216fca71238eccafc060e3762addf00188a0d140399809b812610294d3122a63->enter($__internal_216fca71238eccafc060e3762addf00188a0d140399809b812610294d3122a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a24520a360f966922b2f0cddac72b043a94684c81825595a991649cbf321ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a24520a360f966922b2f0cddac72b043a94684c81825595a991649cbf321ced->enter($__internal_0a24520a360f966922b2f0cddac72b043a94684c81825595a991649cbf321ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a24520a360f966922b2f0cddac72b043a94684c81825595a991649cbf321ced->leave($__internal_0a24520a360f966922b2f0cddac72b043a94684c81825595a991649cbf321ced_prof);

        
        $__internal_216fca71238eccafc060e3762addf00188a0d140399809b812610294d3122a63->leave($__internal_216fca71238eccafc060e3762addf00188a0d140399809b812610294d3122a63_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cdb966733d640d6bfe93565f557dd6d2798860c37c03847349ce85962bbbf022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb966733d640d6bfe93565f557dd6d2798860c37c03847349ce85962bbbf022->enter($__internal_cdb966733d640d6bfe93565f557dd6d2798860c37c03847349ce85962bbbf022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0dc6a680cb717b2c43b9da73fa0cbc4d922c7de9c8ed17369d4a6084b1ce83e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc6a680cb717b2c43b9da73fa0cbc4d922c7de9c8ed17369d4a6084b1ce83e6->enter($__internal_0dc6a680cb717b2c43b9da73fa0cbc4d922c7de9c8ed17369d4a6084b1ce83e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0dc6a680cb717b2c43b9da73fa0cbc4d922c7de9c8ed17369d4a6084b1ce83e6->leave($__internal_0dc6a680cb717b2c43b9da73fa0cbc4d922c7de9c8ed17369d4a6084b1ce83e6_prof);

        
        $__internal_cdb966733d640d6bfe93565f557dd6d2798860c37c03847349ce85962bbbf022->leave($__internal_cdb966733d640d6bfe93565f557dd6d2798860c37c03847349ce85962bbbf022_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 22,  134 => 18,  117 => 11,  99 => 5,  87 => 23,  85 => 22,  81 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  66 => 16,  58 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  35 => 5,  29 => 1,);
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
            {% include \"inc/nav.html.twig\" %}
            {% include \"basket/basket_price.html.twig\" %}
            {% block body %}{% endblock %}
        </div>
        <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/base.html.twig");
    }
}
