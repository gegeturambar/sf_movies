<?php

/* base.html.twig */
class __TwigTemplate_308375037abe9ac8d6feb41f2ef698969129159cf6ad5eb77659ebf2567af088 extends Twig_Template
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
        $__internal_e35d6f5786aa0429621207e918f51df4baa85f8792a22639052d04a4998be5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35d6f5786aa0429621207e918f51df4baa85f8792a22639052d04a4998be5ab->enter($__internal_e35d6f5786aa0429621207e918f51df4baa85f8792a22639052d04a4998be5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_38ad6a069db0338fa1be9b235e3b71df0d350e1cbf5aa3b5b60e5671bb318f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ad6a069db0338fa1be9b235e3b71df0d350e1cbf5aa3b5b60e5671bb318f42->enter($__internal_38ad6a069db0338fa1be9b235e3b71df0d350e1cbf5aa3b5b60e5671bb318f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e35d6f5786aa0429621207e918f51df4baa85f8792a22639052d04a4998be5ab->leave($__internal_e35d6f5786aa0429621207e918f51df4baa85f8792a22639052d04a4998be5ab_prof);

        
        $__internal_38ad6a069db0338fa1be9b235e3b71df0d350e1cbf5aa3b5b60e5671bb318f42->leave($__internal_38ad6a069db0338fa1be9b235e3b71df0d350e1cbf5aa3b5b60e5671bb318f42_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4cc0aebe82a61fa6fd144fcd1cb41d76af686de35a5adce7bdff3699eed3860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cc0aebe82a61fa6fd144fcd1cb41d76af686de35a5adce7bdff3699eed3860->enter($__internal_e4cc0aebe82a61fa6fd144fcd1cb41d76af686de35a5adce7bdff3699eed3860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e49f756b7f231859df7c9da4b830b45575723cb59ba5d42491ecc699e845379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e49f756b7f231859df7c9da4b830b45575723cb59ba5d42491ecc699e845379->enter($__internal_2e49f756b7f231859df7c9da4b830b45575723cb59ba5d42491ecc699e845379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cinefan for the fun !";
        
        $__internal_2e49f756b7f231859df7c9da4b830b45575723cb59ba5d42491ecc699e845379->leave($__internal_2e49f756b7f231859df7c9da4b830b45575723cb59ba5d42491ecc699e845379_prof);

        
        $__internal_e4cc0aebe82a61fa6fd144fcd1cb41d76af686de35a5adce7bdff3699eed3860->leave($__internal_e4cc0aebe82a61fa6fd144fcd1cb41d76af686de35a5adce7bdff3699eed3860_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0251dea47de7c0d6c1154de6e96cb40bbbbdd0f8a16b86d1c2df46331e82696f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0251dea47de7c0d6c1154de6e96cb40bbbbdd0f8a16b86d1c2df46331e82696f->enter($__internal_0251dea47de7c0d6c1154de6e96cb40bbbbdd0f8a16b86d1c2df46331e82696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a9ed678735feebd0e7c6b8bf1efcbd01093050bcc050eec0876fa20322d8e9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ed678735feebd0e7c6b8bf1efcbd01093050bcc050eec0876fa20322d8e9c4->enter($__internal_a9ed678735feebd0e7c6b8bf1efcbd01093050bcc050eec0876fa20322d8e9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a9ed678735feebd0e7c6b8bf1efcbd01093050bcc050eec0876fa20322d8e9c4->leave($__internal_a9ed678735feebd0e7c6b8bf1efcbd01093050bcc050eec0876fa20322d8e9c4_prof);

        
        $__internal_0251dea47de7c0d6c1154de6e96cb40bbbbdd0f8a16b86d1c2df46331e82696f->leave($__internal_0251dea47de7c0d6c1154de6e96cb40bbbbdd0f8a16b86d1c2df46331e82696f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_d39b0bad01601654980877346771e781aa271d42b34618f20d06fa66c076de24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39b0bad01601654980877346771e781aa271d42b34618f20d06fa66c076de24->enter($__internal_d39b0bad01601654980877346771e781aa271d42b34618f20d06fa66c076de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d9c215f2c3ea31e4f1122acab9975e08c3ad0e40156bce3740f50bdfee19836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9c215f2c3ea31e4f1122acab9975e08c3ad0e40156bce3740f50bdfee19836->enter($__internal_7d9c215f2c3ea31e4f1122acab9975e08c3ad0e40156bce3740f50bdfee19836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d9c215f2c3ea31e4f1122acab9975e08c3ad0e40156bce3740f50bdfee19836->leave($__internal_7d9c215f2c3ea31e4f1122acab9975e08c3ad0e40156bce3740f50bdfee19836_prof);

        
        $__internal_d39b0bad01601654980877346771e781aa271d42b34618f20d06fa66c076de24->leave($__internal_d39b0bad01601654980877346771e781aa271d42b34618f20d06fa66c076de24_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78ec0f3ca085401df87f9840b08d3a0d8339f7c37740c7f1850d9ef61312096c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ec0f3ca085401df87f9840b08d3a0d8339f7c37740c7f1850d9ef61312096c->enter($__internal_78ec0f3ca085401df87f9840b08d3a0d8339f7c37740c7f1850d9ef61312096c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7796331ad5c2568a0e5af5bcc88151f878875b6ec5029e54322bd9272862f2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7796331ad5c2568a0e5af5bcc88151f878875b6ec5029e54322bd9272862f2c9->enter($__internal_7796331ad5c2568a0e5af5bcc88151f878875b6ec5029e54322bd9272862f2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7796331ad5c2568a0e5af5bcc88151f878875b6ec5029e54322bd9272862f2c9->leave($__internal_7796331ad5c2568a0e5af5bcc88151f878875b6ec5029e54322bd9272862f2c9_prof);

        
        $__internal_78ec0f3ca085401df87f9840b08d3a0d8339f7c37740c7f1850d9ef61312096c->leave($__internal_78ec0f3ca085401df87f9840b08d3a0d8339f7c37740c7f1850d9ef61312096c_prof);

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
