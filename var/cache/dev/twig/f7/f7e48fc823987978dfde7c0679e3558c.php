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
class __TwigTemplate_4cdbd315db0d02c3fa214f8d2dddf4e3 extends Template
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
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
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                    <i class=\"fas fa-home\"></i>
                    <span>Accueil</span></a>
            </li>

            <!-- Diviseur -->
            <hr class=\"sidebar-divider\">

            <!-- Ent??te -->
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
        // line 57
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
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "login", [], "any", false, false, false, 85), "html", null, true);
        echo "</span>
                                    <i class=\"fas fa-user\"></i>
                                </a>
                                <!-- Dropdown - Information Visiteur -->
                                <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                        <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                        D??connexion
                                    </a>
                                </div>
                            </li>
                    </ul>
                </nav>
                <!-- Fin de la Topbar -->
                <div class=\"container-fluid\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body py-1 mb-2\">
                            <form method=\"post\">
                                <div class=\"login-box\">
                                    <div class=\"form-login\">
                                        ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "mois", [], "any", false, false, false, 108), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"card shadow mb-4\">
                                                <div class=\"card-header py-3\">
                                                    <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait</h6>
                                                </div>
                                                <div class=\"card-body py-1 mb-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "FraisForfait", [], "any", false, false, false, 118), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class=\"card shadow mb-1\">
                                                <div class=\"card-header py-3\">
                                                    <h6 class=\"m-0 font-weight-bold text-primary\">Hors Classification</h6>
                                                </div>
                                                <div class=\"card-body py-1 mb-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 131), 'row');
        echo "
                                                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "montantValide", [], "any", false, false, false, 132), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary mb-4\">Cr??er</button>     
                                                
                                        ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_end');
        echo " 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class=\"card shadow mb-1\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Hors Forfait</h6>
                        </div>
                        <div class=\"card-body py-1\">  
                            <form method=\"post\"> 
                                <div class=\"login-box\">
                                    <div class=\"form-login mb-4\">
                                        ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 154, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 157, $this->source); })()), "date", [], "any", false, false, false, 157), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 162, $this->source); })()), "libelle", [], "any", false, false, false, 162), 'row');
        echo "
                                                </div>
                                                <div class=\"col\">
                                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 165, $this->source); })()), "montant", [], "any", false, false, false, 165), 'row');
        echo "
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary\">Cr??er</button>
                                        ";
        // line 169
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 169, $this->source); })()), 'form_end');
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
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous vous d??connectez?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">??</span>
                    </button>
                </div>
                <div class=\"modal-body\">Selectionnez \"D??connexion\" si vous ??tes pr??t ?? vous d??connectez de votre session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">D??connexion</a>
                </div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <script src=\" ";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 202
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
        return array (  369 => 202,  365 => 201,  361 => 200,  356 => 198,  347 => 192,  321 => 169,  314 => 165,  308 => 162,  300 => 157,  294 => 154,  276 => 139,  266 => 132,  262 => 131,  246 => 118,  233 => 108,  227 => 105,  204 => 85,  173 => 57,  147 => 34,  128 => 17,  118 => 16,  105 => 12,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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

            <!-- Ent??te -->
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
                                        D??connexion
                                    </a>
                                </div>
                            </li>
                    </ul>
                </nav>
                <!-- Fin de la Topbar -->
                <div class=\"container-fluid\">
                    <div class=\"card shadow mb-4\">
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
                                            <div class=\"card shadow mb-4\">
                                                <div class=\"card-header py-3\">
                                                    <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait</h6>
                                                </div>
                                                <div class=\"card-body py-1 mb-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_row(form.FraisForfait)}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class=\"card shadow mb-1\">
                                                <div class=\"card-header py-3\">
                                                    <h6 class=\"m-0 font-weight-bold text-primary\">Hors Classification</h6>
                                                </div>
                                                <div class=\"card-body py-1 mb-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_row(form.nbJustificatifs)}}
                                                            {{ form_row(form.montantValide)}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary mb-4\">Cr??er</button>     
                                                
                                        {{ form_end(form) }} 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class=\"card shadow mb-1\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Hors Forfait</h6>
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
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary\">Cr??er</button>
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
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous vous d??connectez?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">??</span>
                    </button>
                </div>
                <div class=\"modal-body\">Selectionnez \"D??connexion\" si vous ??tes pr??t ?? vous d??connectez de votre session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">D??connexion</a>
                </div>
            </div>
        </div>
    </div>

    <script src=\"{{ asset('bootstrap.bundle.min.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <script src=\" {{ asset('jquery/jquery.min.js') }}\"></script>
    <script src=\" {{ asset('jquery-easing/jquery.easing.min.js') }}\"></script>
    <script src=\" {{ asset('js/sb-admin-2.min.js') }}\"></script>
{% endblock %}
", "fiche_frais/renseigner.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/renseigner.html.twig");
    }
}
