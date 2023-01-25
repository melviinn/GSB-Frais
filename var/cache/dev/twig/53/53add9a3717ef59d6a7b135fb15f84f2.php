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
class __TwigTemplate_07d0a46dfd063fb4284d0ac23c24ce6e extends Template
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
    <link rel=\"stylesheet\" href=\"cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
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
        // line 37
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
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner_frais");
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
                    <div class=\"rowtab\">
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais : </h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        ";
        // line 112
        if (((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 112, $this->source); })()) != null)) {
            // line 113
            echo "                                            <thead>
                                                <tr>
                                                    <th>Mois</th>
                                                    <th>Nombre de justificatifs</th>
                                                    <th>Montant total</th>
                                                    <th>Situation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 122, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiches"]) {
                // line 123
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 123) != null)) {
                    // line 124
                    echo "                                                        <tr>
                                                            ";
                    // line 125
                    if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "mois", [], "any", false, false, false, 125) == 1)) {
                        // line 126
                        echo "                                                            <td>Janvier</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 127
$context["fiches"], "mois", [], "any", false, false, false, 127) == 2)) {
                        // line 128
                        echo "                                                                <td>Février</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 129
$context["fiches"], "mois", [], "any", false, false, false, 129) == 3)) {
                        // line 130
                        echo "                                                                <td>Mars</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 131
$context["fiches"], "mois", [], "any", false, false, false, 131) == 4)) {
                        // line 132
                        echo "                                                                <td>Avril</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 133
$context["fiches"], "mois", [], "any", false, false, false, 133) == 5)) {
                        // line 134
                        echo "                                                                <td>Mai</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 135
$context["fiches"], "mois", [], "any", false, false, false, 135) == 6)) {
                        // line 136
                        echo "                                                                <td>Juin</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 137
$context["fiches"], "mois", [], "any", false, false, false, 137) == 7)) {
                        // line 138
                        echo "                                                                <td>Juillet</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 139
$context["fiches"], "mois", [], "any", false, false, false, 139) == 8)) {
                        // line 140
                        echo "                                                                <td>Août</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 141
$context["fiches"], "mois", [], "any", false, false, false, 141) == 9)) {
                        // line 142
                        echo "                                                                <td>Septembre</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 143
$context["fiches"], "mois", [], "any", false, false, false, 143) == 10)) {
                        // line 144
                        echo "                                                                <td>Octobre</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 145
$context["fiches"], "mois", [], "any", false, false, false, 145) == 11)) {
                        // line 146
                        echo "                                                                <td>Novembre</td>
                                                            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 147
$context["fiches"], "mois", [], "any", false, false, false, 147) == 12)) {
                        // line 148
                        echo "                                                                <td>Décembre</td>
                                                            ";
                    }
                    // line 150
                    echo "                                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 150), "html", null, true);
                    echo "</td>
                                                            <td>";
                    // line 151
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "montantValide", [], "any", false, false, false, 151), "html", null, true);
                    echo "€</td>
                                                            <td>";
                    // line 152
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "idEtat", [], "any", false, false, false, 152), "html", null, true);
                    echo "</td>
                                                        </tr>
                                                    ";
                }
                // line 155
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiches'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                            </tbody>
                                        ";
        } else {
            // line 158
            echo "                                            <tr>
                                                <td>Aucune fiche de frais</td>
                                            </tr>
                                        ";
        }
        // line 162
        echo "                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait :</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        ";
        // line 174
        if (((isset($context["ligne_frais_forfait"]) || array_key_exists("ligne_frais_forfait", $context) ? $context["ligne_frais_forfait"] : (function () { throw new RuntimeError('Variable "ligne_frais_forfait" does not exist.', 174, $this->source); })()) != null)) {
            // line 175
            echo "                                            <thead>
                                                <tr>
                                                    <th>Libellé</th>
                                                    <th>Quantité</th>
                                                    <th>Mois</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ligne_frais_forfait"]) || array_key_exists("ligne_frais_forfait", $context) ? $context["ligne_frais_forfait"] : (function () { throw new RuntimeError('Variable "ligne_frais_forfait" does not exist.', 183, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lignes"]) {
                // line 184
                echo "                                                    <tr>
                                                        ";
                // line 185
                if ((twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 185) == (isset($context["KM"]) || array_key_exists("KM", $context) ? $context["KM"] : (function () { throw new RuntimeError('Variable "KM" does not exist.', 185, $this->source); })()))) {
                    // line 186
                    echo "                                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 186), "html", null, true);
                    echo " (0.62€)</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 187
$context["lignes"], "IdFraisForfait", [], "any", false, false, false, 187) == (isset($context["ETP"]) || array_key_exists("ETP", $context) ? $context["ETP"] : (function () { throw new RuntimeError('Variable "ETP" does not exist.', 187, $this->source); })()))) {
                    // line 188
                    echo "                                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 188), "html", null, true);
                    echo " (110€)</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 189
$context["lignes"], "IdFraisForfait", [], "any", false, false, false, 189) == (isset($context["NUI"]) || array_key_exists("NUI", $context) ? $context["NUI"] : (function () { throw new RuntimeError('Variable "NUI" does not exist.', 189, $this->source); })()))) {
                    // line 190
                    echo "                                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 190), "html", null, true);
                    echo " (80€)</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 191
$context["lignes"], "IdFraisForfait", [], "any", false, false, false, 191) == (isset($context["REP"]) || array_key_exists("REP", $context) ? $context["REP"] : (function () { throw new RuntimeError('Variable "REP" does not exist.', 191, $this->source); })()))) {
                    // line 192
                    echo "                                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 192), "html", null, true);
                    echo " (25 €)</td>
                                                        ";
                }
                // line 194
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 194), "html", null, true);
                echo "</td>
                                                        ";
                // line 195
                if ((twig_get_attribute($this->env, $this->source, $context["lignes"], "mois", [], "any", false, false, false, 195) == 1)) {
                    // line 196
                    echo "                                                            <td>Janvier</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 197
$context["lignes"], "mois", [], "any", false, false, false, 197) == 2)) {
                    // line 198
                    echo "                                                            <td>Février</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 199
$context["lignes"], "mois", [], "any", false, false, false, 199) == 3)) {
                    // line 200
                    echo "                                                            <td>Mars</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 201
$context["lignes"], "mois", [], "any", false, false, false, 201) == 4)) {
                    // line 202
                    echo "                                                            <td>Avril</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 203
$context["lignes"], "mois", [], "any", false, false, false, 203) == 5)) {
                    // line 204
                    echo "                                                            <td>Mai</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 205
$context["lignes"], "mois", [], "any", false, false, false, 205) == 6)) {
                    // line 206
                    echo "                                                            <td>Juin</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 207
$context["lignes"], "mois", [], "any", false, false, false, 207) == 7)) {
                    // line 208
                    echo "                                                            <td>Juillet</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 209
$context["lignes"], "mois", [], "any", false, false, false, 209) == 8)) {
                    // line 210
                    echo "                                                            <td>Août</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 211
$context["lignes"], "mois", [], "any", false, false, false, 211) == 9)) {
                    // line 212
                    echo "                                                            <td>Septembre</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 213
$context["lignes"], "mois", [], "any", false, false, false, 213) == 10)) {
                    // line 214
                    echo "                                                            <td>Octobre</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 215
$context["lignes"], "mois", [], "any", false, false, false, 215) == 11)) {
                    // line 216
                    echo "                                                            <td>Novembre</td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 217
$context["lignes"], "mois", [], "any", false, false, false, 217) == 12)) {
                    // line 218
                    echo "                                                            <td>Décembre</td>
                                                        ";
                }
                // line 220
                echo "                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lignes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                                            </tbody>
                                        ";
        } else {
            // line 224
            echo "                                        <tr>
                                            <td>Aucun frais forfait</td>
                                        </tr>
                                        ";
        }
        // line 228
        echo "                                    </table>
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
        // line 240
        if (((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 240, $this->source); })()) != null)) {
            // line 241
            echo "                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Libellé</th>
                                                        <th>Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 249, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 250
                echo "                                                        <tr>
                                                            <td>";
                // line 251
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "date", [], "any", false, false, false, 251), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 252
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "libelle", [], "any", false, false, false, 252), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 253
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "montant", [], "any", false, false, false, 253), "html", null, true);
                echo "€</td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                                                </tbody>
                                            ";
        } else {
            // line 258
            echo "                                                <tr>
                                                    <td>Aucun frais hors forfait</td>
                                                </tr>
                                            ";
        }
        // line 262
        echo "                                        </table>
                                    </div>
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
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous vous déconnectez?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Selectionnez \"Déconnexion\" si vous êtes prêt à vous déconnectez de votre session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <script src=\" ";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 298
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
        return array (  613 => 298,  609 => 297,  605 => 296,  601 => 295,  597 => 294,  593 => 293,  588 => 291,  579 => 285,  554 => 262,  548 => 258,  544 => 256,  535 => 253,  531 => 252,  527 => 251,  524 => 250,  520 => 249,  510 => 241,  508 => 240,  494 => 228,  488 => 224,  484 => 222,  477 => 220,  473 => 218,  471 => 217,  468 => 216,  466 => 215,  463 => 214,  461 => 213,  458 => 212,  456 => 211,  453 => 210,  451 => 209,  448 => 208,  446 => 207,  443 => 206,  441 => 205,  438 => 204,  436 => 203,  433 => 202,  431 => 201,  428 => 200,  426 => 199,  423 => 198,  421 => 197,  418 => 196,  416 => 195,  411 => 194,  405 => 192,  403 => 191,  398 => 190,  396 => 189,  391 => 188,  389 => 187,  384 => 186,  382 => 185,  379 => 184,  375 => 183,  365 => 175,  363 => 174,  349 => 162,  343 => 158,  339 => 156,  333 => 155,  327 => 152,  323 => 151,  318 => 150,  314 => 148,  312 => 147,  309 => 146,  307 => 145,  304 => 144,  302 => 143,  299 => 142,  297 => 141,  294 => 140,  292 => 139,  289 => 138,  287 => 137,  284 => 136,  282 => 135,  279 => 134,  277 => 133,  274 => 132,  272 => 131,  269 => 130,  267 => 129,  264 => 128,  262 => 127,  259 => 126,  257 => 125,  254 => 124,  251 => 123,  247 => 122,  236 => 113,  234 => 112,  208 => 89,  168 => 52,  150 => 37,  131 => 20,  121 => 19,  105 => 12,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
    <link rel=\"stylesheet\" href=\"cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">



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
                <a class=\"nav-link\" href=\"{{ path('app_renseigner_frais') }}\">
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
                                        Déconnexion
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
                                <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais : </h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        {% if fiche_frais != null %}
                                            <thead>
                                                <tr>
                                                    <th>Mois</th>
                                                    <th>Nombre de justificatifs</th>
                                                    <th>Montant total</th>
                                                    <th>Situation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for fiches in fiche_frais %}
                                                    {% if fiches.nbJustificatifs != null %}
                                                        <tr>
                                                            {% if fiches.mois == 1 %}
                                                            <td>Janvier</td>
                                                            {% elseif fiches.mois == 2 %}
                                                                <td>Février</td>
                                                            {% elseif fiches.mois == 3 %}
                                                                <td>Mars</td>
                                                            {% elseif fiches.mois == 4 %}
                                                                <td>Avril</td>
                                                            {% elseif fiches.mois == 5 %}
                                                                <td>Mai</td>
                                                            {% elseif fiches.mois == 6 %}
                                                                <td>Juin</td>
                                                            {% elseif fiches.mois == 7 %}
                                                                <td>Juillet</td>
                                                            {% elseif fiches.mois == 8 %}
                                                                <td>Août</td>
                                                            {% elseif fiches.mois == 9 %}
                                                                <td>Septembre</td>
                                                            {% elseif fiches.mois == 10 %}
                                                                <td>Octobre</td>
                                                            {% elseif fiches.mois == 11 %}
                                                                <td>Novembre</td>
                                                            {% elseif fiches.mois == 12 %}
                                                                <td>Décembre</td>
                                                            {% endif %}
                                                            <td>{{ fiches.nbJustificatifs }}</td>
                                                            <td>{{ fiches.montantValide }}€</td>
                                                            <td>{{ fiches.idEtat }}</td>
                                                        </tr>
                                                    {% endif %}
                                                {% endfor %}
                                            </tbody>
                                        {% else %}
                                            <tr>
                                                <td>Aucune fiche de frais</td>
                                            </tr>
                                        {% endif %}
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait :</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        {% if ligne_frais_forfait != null %}
                                            <thead>
                                                <tr>
                                                    <th>Libellé</th>
                                                    <th>Quantité</th>
                                                    <th>Mois</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for lignes in ligne_frais_forfait %}
                                                    <tr>
                                                        {% if lignes.IdFraisForfait == KM %}
                                                            <td>{{ lignes.IdFraisForfait }} (0.62€)</td>
                                                        {% elseif lignes.IdFraisForfait == ETP %}
                                                            <td>{{ lignes.IdFraisForfait }} (110€)</td>
                                                        {% elseif lignes.IdFraisForfait == NUI %}
                                                            <td>{{ lignes.IdFraisForfait }} (80€)</td>
                                                        {% elseif lignes.IdFraisForfait == REP %}
                                                            <td>{{ lignes.IdFraisForfait }} (25 €)</td>
                                                        {% endif %}
                                                        <td>{{ lignes.quantite }}</td>
                                                        {% if lignes.mois == 1 %}
                                                            <td>Janvier</td>
                                                        {% elseif lignes.mois == 2 %}
                                                            <td>Février</td>
                                                        {% elseif lignes.mois == 3 %}
                                                            <td>Mars</td>
                                                        {% elseif lignes.mois == 4 %}
                                                            <td>Avril</td>
                                                        {% elseif lignes.mois == 5 %}
                                                            <td>Mai</td>
                                                        {% elseif lignes.mois == 6 %}
                                                            <td>Juin</td>
                                                        {% elseif lignes.mois == 7 %}
                                                            <td>Juillet</td>
                                                        {% elseif lignes.mois == 8 %}
                                                            <td>Août</td>
                                                        {% elseif lignes.mois == 9 %}
                                                            <td>Septembre</td>
                                                        {% elseif lignes.mois == 10 %}
                                                            <td>Octobre</td>
                                                        {% elseif lignes.mois == 11 %}
                                                            <td>Novembre</td>
                                                        {% elseif lignes.mois == 12 %}
                                                            <td>Décembre</td>
                                                        {% endif %}
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        {% else %}
                                        <tr>
                                            <td>Aucun frais forfait</td>
                                        </tr>
                                        {% endif %}
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
                                                        <th>Libellé</th>
                                                        <th>Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for forfait in hors_forfait %}
                                                        <tr>
                                                            <td>{{ forfait.date }}</td>
                                                            <td>{{ forfait.libelle }}</td>
                                                            <td>{{ forfait.montant }}€</td>
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
