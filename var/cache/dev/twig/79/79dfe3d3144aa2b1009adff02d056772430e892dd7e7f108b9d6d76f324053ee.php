<?php

/* inc/nav.admin.html.twig */
class __TwigTemplate_08e8ca14eb1b9b502fd667cb60f67e6492d78672ab263f4cb127d0dc5d6b8809 extends Twig_Template
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
        $__internal_755accd25fb4ec21ffd2dcec2172d11869518f3ea21e0d134390037bbf025272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755accd25fb4ec21ffd2dcec2172d11869518f3ea21e0d134390037bbf025272->enter($__internal_755accd25fb4ec21ffd2dcec2172d11869518f3ea21e0d134390037bbf025272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.admin.html.twig"));

        $__internal_8d2478294b4c0c1c214c41c20f9c66d81c4b586c3e3b4ada5168f4b3d0ba1dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2478294b4c0c1c214c41c20f9c66d81c4b586c3e3b4ada5168f4b3d0ba1dad->enter($__internal_8d2478294b4c0c1c214c41c20f9c66d81c4b586c3e3b4ada5168f4b3d0ba1dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.admin.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.homepage.index");
        echo "\">Vue front</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.security.create");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.user_create", array(), "nav"), "html", null, true);
        echo "</a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.category_manage", array(), "nav"), "html", null, true);
        echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.category.index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.category_list", array(), "nav"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.category.form");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.category_create", array(), "nav"), "html", null, true);
        echo "</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.movie_manage", array(), "nav"), "html", null, true);
        echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.movie.index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.movie_list", array(), "nav"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.movie.form");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.movie_create", array(), "nav"), "html", null, true);
        echo "</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.actor_manage", array(), "nav"), "html", null, true);
        echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.actor.index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.actor_list", array(), "nav"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.admin.actor.form");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nav.actor_create", array(), "nav"), "html", null, true);
        echo "</a></li>
                    </ul>
                </li>

                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.basket.view");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("basket", array(), "nav"), "html", null, true);
        echo "</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Langues <span class=\"caret\"></span></a>
                    ";
        // line 48
        echo $this->env->getExtension('AppBundle\Service\Twig\FunctionExtension')->renderLocales();
        echo "
                </li>
            </ul>
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span></a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 56
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.security.logout");
            echo "\">Logout</a></li>
                        ";
        } else {
            // line 58
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.security.login");
            echo "\">Login</a></li>
                            <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app.security.create");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 61
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
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_755accd25fb4ec21ffd2dcec2172d11869518f3ea21e0d134390037bbf025272->leave($__internal_755accd25fb4ec21ffd2dcec2172d11869518f3ea21e0d134390037bbf025272_prof);

        
        $__internal_8d2478294b4c0c1c214c41c20f9c66d81c4b586c3e3b4ada5168f4b3d0ba1dad->leave($__internal_8d2478294b4c0c1c214c41c20f9c66d81c4b586c3e3b4ada5168f4b3d0ba1dad_prof);

    }

    public function getTemplateName()
    {
        return "inc/nav.admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 61,  149 => 59,  144 => 58,  138 => 56,  136 => 55,  126 => 48,  118 => 45,  109 => 41,  103 => 40,  98 => 38,  88 => 33,  82 => 32,  77 => 30,  67 => 25,  61 => 24,  56 => 22,  48 => 19,  44 => 18,  25 => 1,);
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
                <li><a href=\"{{ url(\"app.homepage.index\") }}\">Vue front</a></li>
                <li><a href=\"{{ url(\"app.security.create\") }}\">{{ 'nav.user_create' | trans({}, 'nav') }}</a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'nav.category_manage' | trans({}, 'nav') }}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ url(\"app.admin.category.index\") }}\">{{ 'nav.category_list' | trans({}, 'nav') }}</a></li>
                        <li><a href=\"{{ url(\"app.admin.category.form\") }}\">{{ 'nav.category_create' | trans({}, 'nav') }}</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'nav.movie_manage' | trans({}, 'nav') }}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ url(\"app.admin.movie.index\") }}\">{{ 'nav.movie_list' | trans({}, 'nav') }}</a></li>
                        <li><a href=\"{{ url(\"app.admin.movie.form\") }}\">{{ 'nav.movie_create' | trans({}, 'nav') }}</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'nav.actor_manage' | trans({}, 'nav') }}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ url(\"app.admin.actor.index\") }}\">{{ 'nav.actor_list' | trans({}, 'nav') }}</a></li>
                        <li><a href=\"{{ url(\"app.admin.actor.form\") }}\">{{ 'nav.actor_create' | trans({}, 'nav') }}</a></li>
                    </ul>
                </li>

                <li><a href=\"{{ url(\"app.basket.view\") }}\">{{ 'basket' | trans({}, 'nav') }}</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Langues <span class=\"caret\"></span></a>
                    {{ render_locales() | raw }}
                </li>
            </ul>
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
    </div><!-- /.container-fluid -->
</nav>", "inc/nav.admin.html.twig", "/home/wamobi10/sites/cinefan/app/Resources/views/inc/nav.admin.html.twig");
    }
}
