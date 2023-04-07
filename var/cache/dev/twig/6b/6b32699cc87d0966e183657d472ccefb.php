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
class __TwigTemplate_2a028c2a7ea73570d5607ed4d16aa9c0 extends Template
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
            <div class=\"col-lg-6\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "mois", [], "any", false, false, false, 17), 'row');
        echo "
                    <button type=\"submit\" class=\"btn btn-outline-primary mb-3\">Valider</button>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais : </h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive-lg\">
                        <table class=\"table table-bordered table-responsive-lg\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 28
        if (((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 28, $this->source); })()) != null)) {
            // line 29
            echo "                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Mois</th>
                                        <th>Nombre de justificatifs</th>
                                        <th>Montant total</th>
                                        <th>Situation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiches"]) {
                // line 39
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 39) != null)) {
                    // line 40
                    echo "                                            <tr>
                                                ";
                    // line 41
                    if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "mois", [], "any", false, false, false, 41) == 1)) {
                        // line 42
                        echo "                                                    <td>Janvier</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["fiches"], "mois", [], "any", false, false, false, 43) == 2)) {
                        // line 44
                        echo "                                                    <td>Février</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["fiches"], "mois", [], "any", false, false, false, 45) == 3)) {
                        // line 46
                        echo "                                                    <td>Mars</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["fiches"], "mois", [], "any", false, false, false, 47) == 4)) {
                        // line 48
                        echo "                                                    <td>Avril</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["fiches"], "mois", [], "any", false, false, false, 49) == 5)) {
                        // line 50
                        echo "                                                    <td>Mai</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["fiches"], "mois", [], "any", false, false, false, 51) == 6)) {
                        // line 52
                        echo "                                                    <td>Juin</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["fiches"], "mois", [], "any", false, false, false, 53) == 7)) {
                        // line 54
                        echo "                                                    <td>Juillet</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 55
$context["fiches"], "mois", [], "any", false, false, false, 55) == 8)) {
                        // line 56
                        echo "                                                    <td>Août</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 57
$context["fiches"], "mois", [], "any", false, false, false, 57) == 9)) {
                        // line 58
                        echo "                                                    <td>Septembre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 59
$context["fiches"], "mois", [], "any", false, false, false, 59) == 10)) {
                        // line 60
                        echo "                                                    <td>Octobre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 61
$context["fiches"], "mois", [], "any", false, false, false, 61) == 11)) {
                        // line 62
                        echo "                                                    <td>Novembre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 63
$context["fiches"], "mois", [], "any", false, false, false, 63) == 12)) {
                        // line 64
                        echo "                                                    <td>Décembre</td>
                                                ";
                    }
                    // line 66
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 66), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "montantValide", [], "any", false, false, false, 67), "html", null, true);
                    echo "€</td>
                                                <td>";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "idEtat", [], "any", false, false, false, 68), "html", null, true);
                    echo "</td>
                                            </tr>
                                        ";
                }
                // line 71
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiches'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                </tbody>
                            ";
        } else {
            // line 74
            echo "                                <tr>
                                    <td>Aucune fiche de frais</td>
                                </tr>
                            ";
        }
        // line 78
        echo "                        </table>
                    </div>
                </div>
            </div>
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait :</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive-lg\">
                        <table class=\"table table-bordered table-responsive-lg\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 89
        if (((isset($context["ligne_frais_forfait"]) || array_key_exists("ligne_frais_forfait", $context) ? $context["ligne_frais_forfait"] : (function () { throw new RuntimeError('Variable "ligne_frais_forfait" does not exist.', 89, $this->source); })()) != null)) {
            // line 90
            echo "                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Mois</th>
                                        <th>Libellé</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ligne_frais_forfait"]) || array_key_exists("ligne_frais_forfait", $context) ? $context["ligne_frais_forfait"] : (function () { throw new RuntimeError('Variable "ligne_frais_forfait" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lignes"]) {
                // line 99
                echo "                                        <tr>
                                            ";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["lignes"], "mois", [], "any", false, false, false, 100) == 1)) {
                    // line 101
                    echo "                                                <td>Janvier</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 102
$context["lignes"], "mois", [], "any", false, false, false, 102) == 2)) {
                    // line 103
                    echo "                                                <td>Février</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 104
$context["lignes"], "mois", [], "any", false, false, false, 104) == 3)) {
                    // line 105
                    echo "                                                <td>Mars</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 106
$context["lignes"], "mois", [], "any", false, false, false, 106) == 4)) {
                    // line 107
                    echo "                                                <td>Avril</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 108
$context["lignes"], "mois", [], "any", false, false, false, 108) == 5)) {
                    // line 109
                    echo "                                                <td>Mai</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 110
$context["lignes"], "mois", [], "any", false, false, false, 110) == 6)) {
                    // line 111
                    echo "                                                <td>Juin</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 112
$context["lignes"], "mois", [], "any", false, false, false, 112) == 7)) {
                    // line 113
                    echo "                                                <td>Juillet</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 114
$context["lignes"], "mois", [], "any", false, false, false, 114) == 8)) {
                    // line 115
                    echo "                                                <td>Août</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 116
$context["lignes"], "mois", [], "any", false, false, false, 116) == 9)) {
                    // line 117
                    echo "                                                <td>Septembre</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 118
$context["lignes"], "mois", [], "any", false, false, false, 118) == 10)) {
                    // line 119
                    echo "                                                <td>Octobre</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 120
$context["lignes"], "mois", [], "any", false, false, false, 120) == 11)) {
                    // line 121
                    echo "                                                <td>Novembre</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 122
$context["lignes"], "mois", [], "any", false, false, false, 122) == 12)) {
                    // line 123
                    echo "                                                <td>Décembre</td>
                                            ";
                }
                // line 125
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 125) == (isset($context["KM"]) || array_key_exists("KM", $context) ? $context["KM"] : (function () { throw new RuntimeError('Variable "KM" does not exist.', 125, $this->source); })()))) {
                    // line 126
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 126), "html", null, true);
                    echo " (0.62€)</td>
                                                <td>";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 127), "html", null, true);
                    echo "km</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 128
$context["lignes"], "idFraisForfait", [], "any", false, false, false, 128) == (isset($context["ETP"]) || array_key_exists("ETP", $context) ? $context["ETP"] : (function () { throw new RuntimeError('Variable "ETP" does not exist.', 128, $this->source); })()))) {
                    // line 129
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 129), "html", null, true);
                    echo " (110€)</td>
                                                <td>";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 130), "html", null, true);
                    echo " étape(s)</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 131
$context["lignes"], "idFraisForfait", [], "any", false, false, false, 131) == (isset($context["NUI"]) || array_key_exists("NUI", $context) ? $context["NUI"] : (function () { throw new RuntimeError('Variable "NUI" does not exist.', 131, $this->source); })()))) {
                    // line 132
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 132), "html", null, true);
                    echo " (80€)</td>
                                                <td>";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 133), "html", null, true);
                    echo " repas</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 134
$context["lignes"], "idFraisForfait", [], "any", false, false, false, 134) == (isset($context["REP"]) || array_key_exists("REP", $context) ? $context["REP"] : (function () { throw new RuntimeError('Variable "REP" does not exist.', 134, $this->source); })()))) {
                    // line 135
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 135), "html", null, true);
                    echo " (25 €)</td>
                                                <td>";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 136), "html", null, true);
                    echo " nuit(s)</td>
                                            ";
                }
                // line 138
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lignes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                                </tbody>
                            ";
        } else {
            // line 142
            echo "                            <tr>
                                <td>Aucun frais forfait</td>
                            </tr>
                            ";
        }
        // line 146
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Hors Forfait : </h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive-lg\">
                        <table class=\"table table-bordered table-responsive-lg\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 158
        if (((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 158, $this->source); })()) != null)) {
            // line 159
            echo "                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Date</th>
                                        <th>Libellé</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hors_forfait"]) || array_key_exists("hors_forfait", $context) ? $context["hors_forfait"] : (function () { throw new RuntimeError('Variable "hors_forfait" does not exist.', 167, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 168
                echo "                                        <tr>
                                            <td>";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "date", [], "any", false, false, false, 169), "html", null, true);
                echo "</td>
                                            <td>";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "libelle", [], "any", false, false, false, 170), "html", null, true);
                echo "</td>
                                            <td>";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "montant", [], "any", false, false, false, 171), "html", null, true);
                echo "€</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                                </tbody>
                            ";
        } else {
            // line 176
            echo "                                <tr>
                                    <td>Aucun frais hors forfait</td>
                                </tr>
                            ";
        }
        // line 180
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 188
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 189
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.js"), "html", null, true);
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
        return array (  514 => 191,  510 => 190,  505 => 189,  495 => 188,  479 => 180,  473 => 176,  469 => 174,  460 => 171,  456 => 170,  452 => 169,  449 => 168,  445 => 167,  435 => 159,  433 => 158,  419 => 146,  413 => 142,  409 => 140,  402 => 138,  397 => 136,  392 => 135,  390 => 134,  386 => 133,  381 => 132,  379 => 131,  375 => 130,  370 => 129,  368 => 128,  364 => 127,  359 => 126,  356 => 125,  352 => 123,  350 => 122,  347 => 121,  345 => 120,  342 => 119,  340 => 118,  337 => 117,  335 => 116,  332 => 115,  330 => 114,  327 => 113,  325 => 112,  322 => 111,  320 => 110,  317 => 109,  315 => 108,  312 => 107,  310 => 106,  307 => 105,  305 => 104,  302 => 103,  300 => 102,  297 => 101,  295 => 100,  292 => 99,  288 => 98,  278 => 90,  276 => 89,  263 => 78,  257 => 74,  253 => 72,  247 => 71,  241 => 68,  237 => 67,  232 => 66,  228 => 64,  226 => 63,  223 => 62,  221 => 61,  218 => 60,  216 => 59,  213 => 58,  211 => 57,  208 => 56,  206 => 55,  203 => 54,  201 => 53,  198 => 52,  196 => 51,  193 => 50,  191 => 49,  188 => 48,  186 => 47,  183 => 46,  181 => 45,  178 => 44,  176 => 43,  173 => 42,  171 => 41,  168 => 40,  165 => 39,  161 => 38,  150 => 29,  148 => 28,  136 => 19,  131 => 17,  127 => 16,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
            <div class=\"col-lg-6\">
                {{ form_start(form) }}
                    {{ form_row(form.mois) }}
                    <button type=\"submit\" class=\"btn btn-outline-primary mb-3\">Valider</button>
                {{ form_end(form) }}
            </div>
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais : </h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive-lg\">
                        <table class=\"table table-bordered table-responsive-lg\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            {% if fiche_frais != null %}
                                <thead class=\"thead-light\">
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
                    <div class=\"table-responsive-lg\">
                        <table class=\"table table-bordered table-responsive-lg\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            {% if ligne_frais_forfait != null %}
                                <thead class=\"thead-light\">
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
                                            {% if lignes.idFraisForfait == KM %}
                                                <td>{{ lignes.idFraisForfait }} (0.62€)</td>
                                                <td>{{ lignes.quantite }}km</td>
                                            {% elseif lignes.idFraisForfait == ETP %}
                                                <td>{{ lignes.idFraisForfait }} (110€)</td>
                                                <td>{{ lignes.quantite }} étape(s)</td>
                                            {% elseif lignes.idFraisForfait == NUI %}
                                                <td>{{ lignes.idFraisForfait }} (80€)</td>
                                                <td>{{ lignes.quantite }} repas</td>
                                            {% elseif lignes.idFraisForfait == REP %}
                                                <td>{{ lignes.idFraisForfait }} (25 €)</td>
                                                <td>{{ lignes.quantite }} nuit(s)</td>
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
                    <div class=\"table-responsive-lg\">
                        <table class=\"table table-bordered table-responsive-lg\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            {% if hors_forfait != null %}
                                <thead class=\"thead-light\">
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('datatables/dataTables.bootstrap4.min.js') }}\"></script>
{% endblock %}
", "fiche_frais/visualiser.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/visualiser.html.twig");
    }
}
