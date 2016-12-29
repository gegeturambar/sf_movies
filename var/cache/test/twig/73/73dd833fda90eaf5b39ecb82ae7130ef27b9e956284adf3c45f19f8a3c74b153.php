<?php

/* base.admin.html.twig */
class __TwigTemplate_fc54a1eac99988e774fb5be35d8757629896f75bb4cb2f8848dc4eb3cb900593 extends Twig_Template
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
        $__internal_4baef591a5d03aa3c71d8e3e55702bc6a97ea07f5bd9547fa1be8f1c8d5bdf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4baef591a5d03aa3c71d8e3e55702bc6a97ea07f5bd9547fa1be8f1c8d5bdf0c->enter($__internal_4baef591a5d03aa3c71d8e3e55702bc6a97ea07f5bd9547fa1be8f1c8d5bdf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.admin.html.twig"));

        $__internal_aacde9c15988519acce685831f3efce7cbc6f6f42fd77e6106a2b38ee374eb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacde9c15988519acce685831f3efce7cbc6f6f42fd77e6106a2b38ee374eb99->enter($__internal_aacde9c15988519acce685831f3efce7cbc6f6f42fd77e6106a2b38ee374eb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.admin.html.twig"));

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
        
        $__internal_4baef591a5d03aa3c71d8e3e55702bc6a97ea07f5bd9547fa1be8f1c8d5bdf0c->leave($__internal_4baef591a5d03aa3c71d8e3e55702bc6a97ea07f5bd9547fa1be8f1c8d5bdf0c_prof);

        
        $__internal_aacde9c15988519acce685831f3efce7cbc6f6f42fd77e6106a2b38ee374eb99->leave($__internal_aacde9c15988519acce685831f3efce7cbc6f6f42fd77e6106a2b38ee374eb99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_789933f4ada3464dcf68003f4a6932749a9241eaad5aabeb84979429524d3685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789933f4ada3464dcf68003f4a6932749a9241eaad5aabeb84979429524d3685->enter($__internal_789933f4ada3464dcf68003f4a6932749a9241eaad5aabeb84979429524d3685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_726b4c61de2d7c200bf54deeedb5b69a96579577d9075ba7f5a857bba8a5609c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726b4c61de2d7c200bf54deeedb5b69a96579577d9075ba7f5a857bba8a5609c->enter($__internal_726b4c61de2d7c200bf54deeedb5b69a96579577d9075ba7f5a857bba8a5609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cinefan-admin !";
        
        $__internal_726b4c61de2d7c200bf54deeedb5b69a96579577d9075ba7f5a857bba8a5609c->leave($__internal_726b4c61de2d7c200bf54deeedb5b69a96579577d9075ba7f5a857bba8a5609c_prof);

        
        $__internal_789933f4ada3464dcf68003f4a6932749a9241eaad5aabeb84979429524d3685->leave($__internal_789933f4ada3464dcf68003f4a6932749a9241eaad5aabeb84979429524d3685_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_070dfec77e2b407bd2da80c9ddcf6375cdcb4da4f2fbb9dd80a67d039dd0b169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070dfec77e2b407bd2da80c9ddcf6375cdcb4da4f2fbb9dd80a67d039dd0b169->enter($__internal_070dfec77e2b407bd2da80c9ddcf6375cdcb4da4f2fbb9dd80a67d039dd0b169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_827e7e9350fdfabf17244d9b3a3c48b33f8a5f40db900e6461702a98ceeb13dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827e7e9350fdfabf17244d9b3a3c48b33f8a5f40db900e6461702a98ceeb13dc->enter($__internal_827e7e9350fdfabf17244d9b3a3c48b33f8a5f40db900e6461702a98ceeb13dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_827e7e9350fdfabf17244d9b3a3c48b33f8a5f40db900e6461702a98ceeb13dc->leave($__internal_827e7e9350fdfabf17244d9b3a3c48b33f8a5f40db900e6461702a98ceeb13dc_prof);

        
        $__internal_070dfec77e2b407bd2da80c9ddcf6375cdcb4da4f2fbb9dd80a67d039dd0b169->leave($__internal_070dfec77e2b407bd2da80c9ddcf6375cdcb4da4f2fbb9dd80a67d039dd0b169_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4d14bb47bf79bb87076b83d2a2fcacc691240de5f6c839a2d190b6af4ad7463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d14bb47bf79bb87076b83d2a2fcacc691240de5f6c839a2d190b6af4ad7463->enter($__internal_d4d14bb47bf79bb87076b83d2a2fcacc691240de5f6c839a2d190b6af4ad7463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_905ad0458b005c6d2be19350d79bd2394ac968a33867737b1b4b028ff498ee9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905ad0458b005c6d2be19350d79bd2394ac968a33867737b1b4b028ff498ee9b->enter($__internal_905ad0458b005c6d2be19350d79bd2394ac968a33867737b1b4b028ff498ee9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_905ad0458b005c6d2be19350d79bd2394ac968a33867737b1b4b028ff498ee9b->leave($__internal_905ad0458b005c6d2be19350d79bd2394ac968a33867737b1b4b028ff498ee9b_prof);

        
        $__internal_d4d14bb47bf79bb87076b83d2a2fcacc691240de5f6c839a2d190b6af4ad7463->leave($__internal_d4d14bb47bf79bb87076b83d2a2fcacc691240de5f6c839a2d190b6af4ad7463_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c845d2899f72f3a6050bcc6891cbbfc40a5d49afc4e7a2be4ed9f8e069d4fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c845d2899f72f3a6050bcc6891cbbfc40a5d49afc4e7a2be4ed9f8e069d4fcf->enter($__internal_5c845d2899f72f3a6050bcc6891cbbfc40a5d49afc4e7a2be4ed9f8e069d4fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca51e3d7c49f7cb5055547cab50d6567e94317afbfc6c3efd58288518b5f9c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca51e3d7c49f7cb5055547cab50d6567e94317afbfc6c3efd58288518b5f9c26->enter($__internal_ca51e3d7c49f7cb5055547cab50d6567e94317afbfc6c3efd58288518b5f9c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca51e3d7c49f7cb5055547cab50d6567e94317afbfc6c3efd58288518b5f9c26->leave($__internal_ca51e3d7c49f7cb5055547cab50d6567e94317afbfc6c3efd58288518b5f9c26_prof);

        
        $__internal_5c845d2899f72f3a6050bcc6891cbbfc40a5d49afc4e7a2be4ed9f8e069d4fcf->leave($__internal_5c845d2899f72f3a6050bcc6891cbbfc40a5d49afc4e7a2be4ed9f8e069d4fcf_prof);

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
