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
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "login", [], "any", false, false, false, 89), "html", null, true);
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
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "mois", [], "any", false, false, false, 115), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"card shadow mb-2\">
                                                <div class=\"card-body py-1 mb-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "libelleKM", [], "any", false, false, false, 122), 'row');
        echo "
                                                            
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "montantKM", [], "any", false, false, false, 126), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "libelleREP", [], "any", false, false, false, 131), 'row');
        echo "
                                                            
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "montantREP", [], "any", false, false, false, 135), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "libelleNUI", [], "any", false, false, false, 140), 'row');
        echo "
                                                            
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "montantNUI", [], "any", false, false, false, 144), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "libelleETP", [], "any", false, false, false, 149), 'row');
        echo "
                                                            
                                                        </div>
                                                        <div class=\"col-sm-3\">
                                                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "montantETP", [], "any", false, false, false, 153), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary mb-3\">Créer</button>      
                                        ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), 'form_end');
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
        // line 174
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 174, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 177, $this->source); })()), "date", [], "any", false, false, false, 177), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 182, $this->source); })()), "libelle", [], "any", false, false, false, 182), 'row');
        echo "
                                                </div>
                                                <div class=\"col\">
                                                    ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 185, $this->source); })()), "montant", [], "any", false, false, false, 185), 'row');
        echo "
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-lg btn-primary\">Créer</button>
                                        ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 189, $this->source); })()), 'form_end');
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
        // line 212
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
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <script src=\" ";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 227
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
        return array (  409 => 227,  405 => 226,  401 => 225,  396 => 223,  382 => 212,  356 => 189,  349 => 185,  343 => 182,  335 => 177,  329 => 174,  311 => 159,  302 => 153,  295 => 149,  287 => 144,  280 => 140,  272 => 135,  265 => 131,  257 => 126,  250 => 122,  240 => 115,  234 => 112,  208 => 89,  177 => 61,  151 => 38,  132 => 21,  122 => 20,  105 => 12,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
