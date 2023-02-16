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
class __TwigTemplate_bd62a5e39085650f3f1e7c755c4e1f03 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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

        echo "Visualiser";
        
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\"href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"container-fluid\">
        <div class=\"rowtab\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais : </h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 22
        if (((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 22, $this->source); })()) != null)) {
            // line 23
            echo "                                <thead>
                                    <tr>
                                        <th>Mois</th>
                                        <th>Nombre de justificatifs</th>
                                        <th>Montant total</th>
                                        <th>Situation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiches"]) {
                // line 33
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 33) != null)) {
                    // line 34
                    echo "                                            <tr>
                                                ";
                    // line 35
                    if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "mois", [], "any", false, false, false, 35) == 1)) {
                        // line 36
                        echo "                                                    <td>Janvier</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 37
$context["fiches"], "mois", [], "any", false, false, false, 37) == 2)) {
                        // line 38
                        echo "                                                    <td>Février</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 39
$context["fiches"], "mois", [], "any", false, false, false, 39) == 3)) {
                        // line 40
                        echo "                                                    <td>Mars</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 41
$context["fiches"], "mois", [], "any", false, false, false, 41) == 4)) {
                        // line 42
                        echo "                                                    <td>Avril</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["fiches"], "mois", [], "any", false, false, false, 43) == 5)) {
                        // line 44
                        echo "                                                    <td>Mai</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["fiches"], "mois", [], "any", false, false, false, 45) == 6)) {
                        // line 46
                        echo "                                                    <td>Juin</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["fiches"], "mois", [], "any", false, false, false, 47) == 7)) {
                        // line 48
                        echo "                                                    <td>Juillet</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["fiches"], "mois", [], "any", false, false, false, 49) == 8)) {
                        // line 50
                        echo "                                                    <td>Août</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["fiches"], "mois", [], "any", false, false, false, 51) == 9)) {
                        // line 52
                        echo "                                                    <td>Septembre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["fiches"], "mois", [], "any", false, false, false, 53) == 10)) {
                        // line 54
                        echo "                                                    <td>Octobre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 55
$context["fiches"], "mois", [], "any", false, false, false, 55) == 11)) {
                        // line 56
                        echo "                                                    <td>Novembre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 57
$context["fiches"], "mois", [], "any", false, false, false, 57) == 12)) {
                        // line 58
                        echo "                                                    <td>Décembre</td>
                                                ";
                    }
                    // line 60
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 60), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "montantValide", [], "any", false, false, false, 61), "html", null, true);
                    echo "€</td>
                                                <td>";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "idEtat", [], "any", false, false, false, 62), "html", null, true);
                    echo "</td>
                                            </tr>
                                        ";
                }
                // line 65
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiches'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                </tbody>
                            ";
        } else {
            // line 68
            echo "                                <tr>
                                    <td>Aucune fiche de frais</td>
                                </tr>
                            ";
        }
        // line 72
        echo "                        </table>
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
        // line 83
        if (((isset($context["ligne_frais_forfait"]) || array_key_exists("ligne_frais_forfait", $context) ? $context["ligne_frais_forfait"] : (function () { throw new RuntimeError('Variable "ligne_frais_forfait" does not exist.', 83, $this->source); })()) != null)) {
            // line 84
            echo "                                <thead>
                                    <tr>
                                        <th>Mois</th>
                                        <th>Libellé</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ligne_frais_forfait"]) || array_key_exists("ligne_frais_forfait", $context) ? $context["ligne_frais_forfait"] : (function () { throw new RuntimeError('Variable "ligne_frais_forfait" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lignes"]) {
                // line 93
                echo "                                        <tr>
                                            ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["lignes"], "mois", [], "any", false, false, false, 94) == 1)) {
                    // line 95
                    echo "                                                <td>Janvier</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 96
$context["lignes"], "mois", [], "any", false, false, false, 96) == 2)) {
                    // line 97
                    echo "                                                <td>Février</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 98
$context["lignes"], "mois", [], "any", false, false, false, 98) == 3)) {
                    // line 99
                    echo "                                                <td>Mars</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 100
$context["lignes"], "mois", [], "any", false, false, false, 100) == 4)) {
                    // line 101
                    echo "                                                <td>Avril</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 102
$context["lignes"], "mois", [], "any", false, false, false, 102) == 5)) {
                    // line 103
                    echo "                                                <td>Mai</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 104
$context["lignes"], "mois", [], "any", false, false, false, 104) == 6)) {
                    // line 105
                    echo "                                                <td>Juin</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 106
$context["lignes"], "mois", [], "any", false, false, false, 106) == 7)) {
                    // line 107
                    echo "                                                <td>Juillet</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 108
$context["lignes"], "mois", [], "any", false, false, false, 108) == 8)) {
                    // line 109
                    echo "                                                <td>Août</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 110
$context["lignes"], "mois", [], "any", false, false, false, 110) == 9)) {
                    // line 111
                    echo "                                                <td>Septembre</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 112
$context["lignes"], "mois", [], "any", false, false, false, 112) == 10)) {
                    // line 113
                    echo "                                                <td>Octobre</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 114
$context["lignes"], "mois", [], "any", false, false, false, 114) == 11)) {
                    // line 115
                    echo "                                                <td>Novembre</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 116
$context["lignes"], "mois", [], "any", false, false, false, 116) == 12)) {
                    // line 117
                    echo "                                                <td>Décembre</td>
                                            ";
                }
                // line 119
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 119) == (isset($context["KM"]) || array_key_exists("KM", $context) ? $context["KM"] : (function () { throw new RuntimeError('Variable "KM" does not exist.', 119, $this->source); })()))) {
                    // line 120
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 120), "html", null, true);
                    echo " (0.62€)</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 121
$context["lignes"], "IdFraisForfait", [], "any", false, false, false, 121) == (isset($context["ETP"]) || array_key_exists("ETP", $context) ? $context["ETP"] : (function () { throw new RuntimeError('Variable "ETP" does not exist.', 121, $this->source); })()))) {
                    // line 122
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 122), "html", null, true);
                    echo " (110€)</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 123
$context["lignes"], "IdFraisForfait", [], "any", false, false, false, 123) == (isset($context["NUI"]) || array_key_exists("NUI", $context) ? $context["NUI"] : (function () { throw new RuntimeError('Variable "NUI" does not exist.', 123, $this->source); })()))) {
                    // line 124
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 124), "html", null, true);
                    echo " (80€)</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 125
$context["lignes"], "IdFraisForfait", [], "any", false, false, false, 125) == (isset($context["REP"]) || array_key_exists("REP", $context) ? $context["REP"] : (function () { throw new RuntimeError('Variable "REP" does not exist.', 125, $this->source); })()))) {
                    // line 126
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "IdFraisForfait", [], "any", false, false, false, 126), "html", null, true);
                    echo " (25 €)</td>
                                            ";
                }
                // line 128
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 128), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lignes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                                </tbody>
                            ";
        } else {
            // line 133
            echo "                            <tr>
                                <td>Aucun frais forfait</td>
                            </tr>
                            ";
        }
        // line 137
        echo "                        </table>
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
        // line 149
        if (((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 149, $this->source); })()) != null)) {
            // line 150
            echo "                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Libellé</th>
                                            <th>Montant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 158, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 159
                echo "                                            <tr>
                                                <td>";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "date", [], "any", false, false, false, 160), "html", null, true);
                echo "</td>
                                                <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "libelle", [], "any", false, false, false, 161), "html", null, true);
                echo "</td>
                                                <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "montant", [], "any", false, false, false, 162), "html", null, true);
                echo "€</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                                    </tbody>
                                ";
        } else {
            // line 167
            echo "                                    <tr>
                                        <td>Aucun frais hors forfait</td>
                                    </tr>
                                ";
        }
        // line 171
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
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
        return array (  491 => 184,  487 => 183,  483 => 182,  478 => 181,  468 => 180,  451 => 171,  445 => 167,  441 => 165,  432 => 162,  428 => 161,  424 => 160,  421 => 159,  417 => 158,  407 => 150,  405 => 149,  391 => 137,  385 => 133,  381 => 131,  371 => 128,  365 => 126,  363 => 125,  358 => 124,  356 => 123,  351 => 122,  349 => 121,  344 => 120,  341 => 119,  337 => 117,  335 => 116,  332 => 115,  330 => 114,  327 => 113,  325 => 112,  322 => 111,  320 => 110,  317 => 109,  315 => 108,  312 => 107,  310 => 106,  307 => 105,  305 => 104,  302 => 103,  300 => 102,  297 => 101,  295 => 100,  292 => 99,  290 => 98,  287 => 97,  285 => 96,  282 => 95,  280 => 94,  277 => 93,  273 => 92,  263 => 84,  261 => 83,  248 => 72,  242 => 68,  238 => 66,  232 => 65,  226 => 62,  222 => 61,  217 => 60,  213 => 58,  211 => 57,  208 => 56,  206 => 55,  203 => 54,  201 => 53,  198 => 52,  196 => 51,  193 => 50,  191 => 49,  188 => 48,  186 => 47,  183 => 46,  181 => 45,  178 => 44,  176 => 43,  173 => 42,  171 => 41,  168 => 40,  166 => 39,  163 => 38,  161 => 37,  158 => 36,  156 => 35,  153 => 34,  150 => 33,  146 => 32,  135 => 23,  133 => 22,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Visualiser{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/sb-admin-2.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\"href=\"{{ asset('datatables/dataTables.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" href=\"cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
{% endblock %}

{% block body %}
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
                                        <th>Mois</th>
                                        <th>Libellé</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for lignes in ligne_frais_forfait %}
                                        <tr>
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('datatables/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('demo/datatables-demo.js') }}\"></script>
{% endblock %}
", "fiche_frais/visualiser.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/visualiser.html.twig");
    }
}
