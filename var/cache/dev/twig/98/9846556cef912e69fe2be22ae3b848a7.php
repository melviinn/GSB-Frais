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

/* fiche_frais/visualiser.html.twig */
class __TwigTemplate_d73c3396a45450fb26fe8a76f4420b95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/visualiser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/visualiser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/visualiser.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
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
        // line 36
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
                <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frais_forfait");
        echo "\">
                    <i class=\"fas fa-fw fa-plus-circle\"></i>
                    <span>Renseigner</span>
                </a>
            </li>

            <!-- Nav Item - Afficher Fiche Frais  -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
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
                                        D??connexion
                                    </a>
                                </div>
                            </li>
                    </ul>
                </nav>
                <!-- Fin de la Topbar -->
                <div class=\"container-fluid\">
                    <div class=\"rowtab\">
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait :</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        <thead>
                                            <tr>
                                                <th>Libell??</th>
                                                <th>Montant</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frais_forfait"]) || array_key_exists("frais_forfait", $context) ? $context["frais_forfait"] : (function () { throw new RuntimeError('Variable "frais_forfait" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forfaits"]) {
            // line 119
            echo "                                                <tr>
                                                    <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfaits"], "libelle", [], "any", false, false, false, 120), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfaits"], "montant", [], "any", false, false, false, 121), "html", null, true);
            echo "???</td>    
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "                                                <tr>
                                                    <td>Aucune frais forfait</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Hors Forfait : </h6>
                            </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                            ";
        // line 141
        if (((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 141, $this->source); })()) != null)) {
            // line 142
            echo "                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Libell??</th>
                                                        <th>Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 150, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 151
                echo "                                                        <tr>
                                                            <td>";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "date", [], "any", false, false, false, 152), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "libelle", [], "any", false, false, false, 153), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "montant", [], "any", false, false, false, 154), "html", null, true);
                echo "???</td>
                                                        </tr>                                                    
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                                </tbody>
                                            ";
        } else {
            // line 159
            echo "                                                <tr>
                                                    <td>Aucun frais hors forfait</td>
                                                </tr>
                                            ";
        }
        // line 163
        echo "                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Hors Classification : </h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        ";
        // line 176
        if (((isset($context["hors_class"]) || array_key_exists("hors_class", $context) ? $context["hors_class"] : (function () { throw new RuntimeError('Variable "hors_class" does not exist.', 176, $this->source); })()) != null)) {
            // line 177
            echo "                                            <thead>
                                                <tr>
                                                    <th>Nombre de Justificatifs</th>
                                                    <th>Montant Total</th>
                                                    <th>Situation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hors_class"]) || array_key_exists("hors_class", $context) ? $context["hors_class"] : (function () { throw new RuntimeError('Variable "hors_class" does not exist.', 185, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 186
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["fiche"], "nbJustificatifs", [], "any", false, false, false, 186) != null)) {
                    // line 187
                    echo "                                                        <tr>
                                                            <td>";
                    // line 188
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "nbJustificatifs", [], "any", false, false, false, 188), "html", null, true);
                    echo "</td>
                                                            <td>";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "montantValide", [], "any", false, false, false, 189), "html", null, true);
                    echo "???</td>  
                                                            <td>";
                    // line 190
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "idEtat", [], "any", false, false, false, 190), "html", null, true);
                    echo "</td>                                                      
                                                        </tr>
                                                    ";
                }
                // line 192
                echo "                                                
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                                            </tbody>
                                        ";
        } else {
            // line 196
            echo "                                            <tr>
                                                <td>Aucun frais hors classification</td>
                                            </tr>
                                        ";
        }
        // line 200
        echo "                                    </table>
                                </div>
                            </div>
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
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">D??connexion</a>
                </div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <script src=\" ";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/visualiser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 236,  453 => 235,  449 => 234,  445 => 233,  441 => 232,  437 => 231,  432 => 229,  423 => 223,  398 => 200,  392 => 196,  388 => 194,  381 => 192,  375 => 190,  371 => 189,  367 => 188,  364 => 187,  361 => 186,  357 => 185,  347 => 177,  345 => 176,  330 => 163,  324 => 159,  320 => 157,  311 => 154,  307 => 153,  303 => 152,  300 => 151,  296 => 150,  286 => 142,  284 => 141,  269 => 128,  260 => 124,  252 => 121,  248 => 120,  245 => 119,  240 => 118,  207 => 88,  167 => 51,  149 => 36,  130 => 19,  120 => 18,  105 => 12,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
    <link href=\"{{asset('datatables/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">



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
                <a class=\"nav-link\" href=\"{{ path('app_frais_forfait') }}\">
                    <i class=\"fas fa-fw fa-plus-circle\"></i>
                    <span>Renseigner</span>
                </a>
            </li>

            <!-- Nav Item - Afficher Fiche Frais  -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
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
                    <div class=\"rowtab\">
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait :</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        <thead>
                                            <tr>
                                                <th>Libell??</th>
                                                <th>Montant</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for forfaits in frais_forfait %}
                                                <tr>
                                                    <td>{{ forfaits.libelle }}</td>
                                                    <td>{{ forfaits.montant }}???</td>    
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td>Aucune frais forfait</td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Hors Forfait : </h6>
                            </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                            {% if hors_forfait != null %}
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Libell??</th>
                                                        <th>Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for forfait in hors_forfait %}
                                                        <tr>
                                                            <td>{{ forfait.date }}</td>
                                                            <td>{{ forfait.libelle }}</td>
                                                            <td>{{ forfait.montant }}???</td>
                                                        </tr>                                                    
                                                    {% endfor %}
                                                </tbody>
                                            {% else %}
                                                <tr>
                                                    <td>Aucun frais hors forfait</td>
                                                </tr>
                                            {% endif %}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Hors Classification : </h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        {% if hors_class != null %}
                                            <thead>
                                                <tr>
                                                    <th>Nombre de Justificatifs</th>
                                                    <th>Montant Total</th>
                                                    <th>Situation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for fiche in hors_class %}
                                                    {% if fiche.nbJustificatifs != null %}
                                                        <tr>
                                                            <td>{{ fiche.nbJustificatifs }}</td>
                                                            <td>{{ fiche.montantValide }}???</td>  
                                                            <td>{{ fiche.idEtat }}</td>                                                      
                                                        </tr>
                                                    {% endif %}                                                
                                                {% endfor %}
                                            </tbody>
                                        {% else %}
                                            <tr>
                                                <td>Aucun frais hors classification</td>
                                            </tr>
                                        {% endif %}
                                    </table>
                                </div>
                            </div>
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
    <script src=\"{{ asset('datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('datatables/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('demo/datatables-demo.js') }}\"></script>
{% endblock %}
", "fiche_frais/visualiser.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/visualiser.html.twig");
    }
}
