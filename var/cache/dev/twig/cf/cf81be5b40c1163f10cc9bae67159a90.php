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

/* fiche_frais/renseigner.html.twig */
class __TwigTemplate_33f5330eb8eb3723af81b402e8ae70ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/renseigner.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/renseigner.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/renseigner.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FicheFraisController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <script src=\"https://kit.fontawesome.com/8662a536ba.js\" crossorigin=\"anonymous\"></script>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/formFicheFrais.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js\" type=\"text/javascript\"></script>
    <link href=\"https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <div id=\"wrapper\">
        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - GSB -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">GSB-Frais</div>
            </a>

            <!-- Diviseur -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Accueil -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 38
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
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fas fa-fw fa-plus-circle\"></i>
                    <span>Renseigner</span>
                </a>
            </li>

            <!-- Nav Item - Afficher Fiche Frais  -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 61
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
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "login", [], "any", false, false, false, 88), "html", null, true);
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
                <!-- Fin de la Topbar -->
                <div class=\"container-fluid\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Renseigner un nouveau Frais au Forfait :</h6>
                        </div>
                        <div class=\"card-body py-1 mb-2\">
                            <form method=\"post\">
                                <div class=\"login-box\">
                                    <div class=\"form-login\">
                                        ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "mois", [], "any", false, false, false, 114), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"card shadow mb-2\">
                                                <div class=\"card-body py-1 mb-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "libelleKM", [], "any", false, false, false, 121), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "montantKM", [], "any", false, false, false, 124), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "libelleREP", [], "any", false, false, false, 129), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "montantREP", [], "any", false, false, false, 132), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "libelleNUI", [], "any", false, false, false, 137), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "montantNUI", [], "any", false, false, false, 140), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "libelleETP", [], "any", false, false, false, 145), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "montantETP", [], "any", false, false, false, 148), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary mb-3\">Créer</button>
                                        ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'form_end');
        echo "
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"card shadow mb-1\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Renseigner un nouveau Frais Hors Forfait :</h6>
                        </div>
                        <div class=\"card-body py-1\">
                            <form method=\"post\">
                                <div class=\"login-box\">
                                    <div class=\"form-login mb-4\">
                                        ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 168, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 171, $this->source); })()), "date", [], "any", false, false, false, 171), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 176, $this->source); })()), "libelle", [], "any", false, false, false, 176), 'row');
        echo "
                                                </div>
                                                <div class=\"col\">
                                                    ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 179, $this->source); })()), "montant", [], "any", false, false, false, 179), 'row');
        echo "
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary\">Créer</button>
                                        ";
        // line 183
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 183, $this->source); })()), 'form_end');
        echo "
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous vous déconnectez?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Selectionnez \"Déconnexion\" si vous êtes prêt à vous déconnectez de votre session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <script src=\" ";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/renseigner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 221,  399 => 220,  395 => 219,  390 => 217,  376 => 206,  350 => 183,  343 => 179,  337 => 176,  329 => 171,  323 => 168,  306 => 154,  297 => 148,  291 => 145,  283 => 140,  277 => 137,  269 => 132,  263 => 129,  255 => 124,  249 => 121,  239 => 114,  233 => 111,  207 => 88,  177 => 61,  151 => 38,  132 => 21,  122 => 20,  105 => 12,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FicheFraisController!{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link href=\"{{ asset('css/sb-admin-2.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('fontawesome/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <script src=\"https://kit.fontawesome.com/8662a536ba.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('css/formFicheFrais.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js\" type=\"text/javascript\"></script>
    <link href=\"https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />



{% endblock %}

{% block body %}
    <div id=\"wrapper\">
        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - GSB -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">GSB-Frais</div>
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
                <a class=\"nav-link\" href=\"#\">
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
                <!-- Fin de la Topbar -->
                <div class=\"container-fluid\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Renseigner un nouveau Frais au Forfait :</h6>
                        </div>
                        <div class=\"card-body py-1 mb-2\">
                            <form method=\"post\">
                                <div class=\"login-box\">
                                    <div class=\"form-login\">
                                        {{ form_start(form) }}
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    {{ form_row(form.mois) }}
                                                </div>
                                            </div>
                                            <div class=\"card shadow mb-2\">
                                                <div class=\"card-body py-1 mb-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.libelleKM)}}
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.montantKM)}}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.libelleREP)}}
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.montantREP)}}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.libelleNUI)}}
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.montantNUI)}}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.libelleETP)}}
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            {{ form_row(form.montantETP)}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary mb-3\">Créer</button>
                                        {{ form_end(form) }}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"card shadow mb-1\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Renseigner un nouveau Frais Hors Forfait :</h6>
                        </div>
                        <div class=\"card-body py-1\">
                            <form method=\"post\">
                                <div class=\"login-box\">
                                    <div class=\"form-login mb-4\">
                                        {{ form_start(form2) }}
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    {{ form_row(form2.date) }}
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    {{ form_row(form2.libelle) }}
                                                </div>
                                                <div class=\"col\">
                                                    {{ form_row(form2.montant) }}
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary\">Créer</button>
                                        {{ form_end(form2) }}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous vous déconnectez?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Selectionnez \"Déconnexion\" si vous êtes prêt à vous déconnectez de votre session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
    <script src=\"{{ asset('bootstrap.bundle.min.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <script src=\" {{ asset('jquery/jquery.min.js') }}\"></script>
    <script src=\" {{ asset('jquery-easing/jquery.easing.min.js') }}\"></script>
    <script src=\" {{ asset('js/sb-admin-2.min.js') }}\"></script>
{% endblock %}
", "fiche_frais/renseigner.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/renseigner.html.twig");
    }
}
