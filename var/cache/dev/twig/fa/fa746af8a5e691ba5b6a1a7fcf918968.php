<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_db2c73331adb5c35dffb9321e80cf6f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo-gsb.png"), "html", null, true);
        echo "\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>

    <body>
        <div id=\"wrapper\">
        <!-- Sidebar -->
            <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
                <!-- Sidebar - GSB -->
                <a class=\"sidebar-brand d-flex align-items-center justify-content-center\">
                    <div class=\"sidebar-brand-icon rotate-n-15\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo-gsb.png"), "html", null, true);
        echo "\" alt=\"logoGSB\" height=\"40\" width=\"50\">
                    </div>
                    <div class=\"sidebar-brand-text mx-3\">
                        GSB-Frais
                    </div>
                </a>
                <!-- Diviseur -->
                <hr class=\"sidebar-divider my-0\">
                <!-- Nav Item - Accueil -->
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <i class=\"fas fa-home\"></i>
                        <span>Accueil</span></a>
                </li>
                <!-- Diviseur -->
                <hr class=\"sidebar-divider\">
                <!-- Entête -->
                <div class=\"sidebar-heading\">
                    Fiche Frais
                </div>
                <!-- Nav Item - Renseigner Fiche Frais  -->
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner_frais");
        echo "\">
                        <i class=\"fas fa-fw fa-plus-circle\"></i>
                        <span>Renseigner</span>
                    </a>
                </li>
                <!-- Nav Item - Afficher Fiche Frais  -->
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visu_frais");
        echo "\">
                        <i class=\"fas fa-fw fa-table\"></i>
                        <span>Afficher</span>
                    </a>
                </li>
                <hr class=\"sidebar-divider\">
            </ul>
            <!-- Fin de la Sidebar -->

            <!-- Content Wrapper -->
            <div id=\"content-wrapper\" class=\"d-flex flex-column\">
                <!-- Main -->
                <div id=\"content\">
                    <!-- Topbar -->
                    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                        <!-- Topbar Navbar -->
                        <ul class=\"navbar-nav ml-auto\">
                            <div class=\"topbar-divider d-none d-sm-block\"></div>
                            <!-- Nav Item - Information Visiteur -->
                            <li class=\"nav-item dropdown no-arrow\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "login", [], "any", false, false, false, 74), "html", null, true);
        echo "</span>
                                    <i class=\"fas fa-user\"></i>
                                </a>
                                <!-- Dropdown - Information Visiteur -->
                                <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                        <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                        Déconnexion
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pop-up validation de déconnexion -->
                    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous vous déconnectez?</h5>
                                    <button class=\"close btn btn-outline-primary\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Selectionnez \"Déconnexion\" si vous êtes prêt à vous déconnectez de votre session.
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn btn-outline-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                                    <a class=\"btn btn-outline-primary\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "                </div>
            </div>
        </div>

        ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/css/all.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 108
        echo "                    <!-- Main Content -->
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"https://kit.fontawesome.com/8662a536ba.js\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\" ";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  303 => 120,  299 => 119,  295 => 118,  291 => 117,  287 => 115,  277 => 114,  266 => 108,  256 => 107,  243 => 12,  239 => 11,  235 => 10,  231 => 9,  226 => 8,  216 => 7,  197 => 5,  185 => 122,  183 => 114,  177 => 110,  175 => 107,  167 => 102,  136 => 74,  112 => 53,  102 => 46,  87 => 34,  74 => 24,  63 => 15,  61 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Accueil!{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('logo-gsb.png') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/sb-admin-2.css') }}\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/base.css') }}\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/bootstrap.min.css') }}\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('fontawesome/css/all.min.css') }}\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('datatables/dataTables.bootstrap4.css') }}\" type=\"text/css\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
        {% endblock %}
    </head>

    <body>
        <div id=\"wrapper\">
        <!-- Sidebar -->
            <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
                <!-- Sidebar - GSB -->
                <a class=\"sidebar-brand d-flex align-items-center justify-content-center\">
                    <div class=\"sidebar-brand-icon rotate-n-15\">
                        <img src=\"{{ asset('logo-gsb.png') }}\" alt=\"logoGSB\" height=\"40\" width=\"50\">
                    </div>
                    <div class=\"sidebar-brand-text mx-3\">
                        GSB-Frais
                    </div>
                </a>
                <!-- Diviseur -->
                <hr class=\"sidebar-divider my-0\">
                <!-- Nav Item - Accueil -->
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_home') }}\">
                        <i class=\"fas fa-home\"></i>
                        <span>Accueil</span></a>
                </li>
                <!-- Diviseur -->
                <hr class=\"sidebar-divider\">
                <!-- Entête -->
                <div class=\"sidebar-heading\">
                    Fiche Frais
                </div>
                <!-- Nav Item - Renseigner Fiche Frais  -->
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_renseigner_frais') }}\">
                        <i class=\"fas fa-fw fa-plus-circle\"></i>
                        <span>Renseigner</span>
                    </a>
                </li>
                <!-- Nav Item - Afficher Fiche Frais  -->
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_visu_frais') }}\">
                        <i class=\"fas fa-fw fa-table\"></i>
                        <span>Afficher</span>
                    </a>
                </li>
                <hr class=\"sidebar-divider\">
            </ul>
            <!-- Fin de la Sidebar -->

            <!-- Content Wrapper -->
            <div id=\"content-wrapper\" class=\"d-flex flex-column\">
                <!-- Main -->
                <div id=\"content\">
                    <!-- Topbar -->
                    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                        <!-- Topbar Navbar -->
                        <ul class=\"navbar-nav ml-auto\">
                            <div class=\"topbar-divider d-none d-sm-block\"></div>
                            <!-- Nav Item - Information Visiteur -->
                            <li class=\"nav-item dropdown no-arrow\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.login }}</span>
                                    <i class=\"fas fa-user\"></i>
                                </a>
                                <!-- Dropdown - Information Visiteur -->
                                <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                        <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                        Déconnexion
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pop-up validation de déconnexion -->
                    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous vous déconnectez?</h5>
                                    <button class=\"close btn btn-outline-primary\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Selectionnez \"Déconnexion\" si vous êtes prêt à vous déconnectez de votre session.
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn btn-outline-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                                    <a class=\"btn btn-outline-primary\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% block body %}
                    <!-- Main Content -->
                    {% endblock %}
                </div>
            </div>
        </div>

        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"https://kit.fontawesome.com/8662a536ba.js\" crossorigin=\"anonymous\"></script>
            <script src=\"{{ asset('bootstrap/bootstrap.bundle.min.js') }}\"></script>
            <script src=\"{{ asset('js/sb-admin-2.min.js') }}\"></script>
            <script src=\"{{ asset('jquery/jquery.min.js') }}\"></script>
            <script src=\" {{ asset('jquery-easing/jquery.easing.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/base.html.twig");
    }
}
