<?php

/* inc/nav.html.twig */
class __TwigTemplate_482034f11a2bf57fd688343f099ce7962330e86fb2be940c23673ed61300a6d3 extends Twig_Template
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
        $__internal_4742b358919636226808abbb7d730e4f072f3c3f5e7eaef30fb9aa768a4d73e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4742b358919636226808abbb7d730e4f072f3c3f5e7eaef30fb9aa768a4d73e3->enter($__internal_4742b358919636226808abbb7d730e4f072f3c3f5e7eaef30fb9aa768a4d73e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        $__internal_e9487615790b48e8d85b8bb781246592919f869147081393a27ead0f845332fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9487615790b48e8d85b8bb781246592919f869147081393a27ead0f845332fd->enter($__internal_e9487615790b48e8d85b8bb781246592919f869147081393a27ead0f845332fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.index");
        echo "\">Accès back office</a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Langues <span class=\"caret\"></span></a>
                    ";
        // line 22
        echo $this->env->getExtension('AppBundle\Service\Twig\FunctionExtension')->renderLocales();
        echo "
                </li>
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.view");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("basket", array(), "nav"), "html", null, true);
        echo "</a></li>
            </ul>
            <form method='post'     class=\"navbar-form navbar-left\" action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.searchmovie.search");
        echo "\">
                <div class=\"form-group\">
                    <input name=\"title\" type=\"search\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>

            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span></a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 37
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 38
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.security.logout");
            echo "\">Logout</a></li>
                        ";
        } else {
            // line 40
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.security.login");
            echo "\">Login</a></li>
                            <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.security.create");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 43
        echo "                    </ul>
                </li>
            </ul>
            <!--
            <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </li>
            </ul>
            -->
        </div><!-- /.navbar-collapse -->
    </div>
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_4742b358919636226808abbb7d730e4f072f3c3f5e7eaef30fb9aa768a4d73e3->leave($__internal_4742b358919636226808abbb7d730e4f072f3c3f5e7eaef30fb9aa768a4d73e3_prof);

        
        $__internal_e9487615790b48e8d85b8bb781246592919f869147081393a27ead0f845332fd->leave($__internal_e9487615790b48e8d85b8bb781246592919f869147081393a27ead0f845332fd_prof);

    }

    public function getTemplateName()
    {
        return "inc/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  90 => 41,  85 => 40,  79 => 38,  77 => 37,  63 => 26,  56 => 24,  51 => 22,  44 => 18,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"{{ url(\"app.admin.index\") }}\">Accès back office</a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Langues <span class=\"caret\"></span></a>
                    {{ render_locales() | raw }}
                </li>
                <li><a href=\"{{ url(\"app.basket.view\") }}\">{{ 'basket' | trans({}, 'nav') }}</a></li>
            </ul>
            <form method='post'     class=\"navbar-form navbar-left\" action=\"{{ url(\"app.searchmovie.search\") }}\">
                <div class=\"form-group\">
                    <input name=\"title\" type=\"search\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>

            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span></a>
                    <ul class=\"dropdown-menu\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <li><a href=\"{{ url('app.security.logout') }}\">Logout</a></li>
                        {% else  %}
                            <li><a href=\"{{ url('app.security.login') }}\">Login</a></li>
                            <li><a href=\"{{ url('app.security.create') }}\">Inscription</a></li>
                        {% endif %}
                    </ul>
                </li>
            </ul>
            <!--
            <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </li>
            </ul>
            -->
        </div><!-- /.navbar-collapse -->
    </div>
    </div><!-- /.container-fluid -->
</nav>", "inc/nav.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/inc/nav.html.twig");
    }
}
