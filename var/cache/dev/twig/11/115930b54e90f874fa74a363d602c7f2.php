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

/* fiche_frais/valider.html.twig */
class __TwigTemplate_cafecfde6af4a7cbf8a5417799246b25 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/valider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/valider.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "fiche_frais/valider.html.twig", 1);
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

        echo "Valider";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2-comptable.css"), "html", null, true);
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
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\" style=\"display:flex; justify-content: space-between\">
                <h5 class=\"m-0 font-weight-bold text-primary\">Affichage des Fiches de Frais de l'utilisateur ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["prenomVisiteur"]) || array_key_exists("prenomVisiteur", $context) ? $context["prenomVisiteur"] : (function () { throw new RuntimeError('Variable "prenomVisiteur" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "
                pour le mois
                ";
        // line 18
        if (((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 18, $this->source); })()) == 1)) {
            // line 19
            echo "                    de Janvier
                ";
        } elseif ((        // line 20
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 20, $this->source); })()) == 2)) {
            // line 21
            echo "                    de Février
                ";
        } elseif ((        // line 22
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 22, $this->source); })()) == 3)) {
            // line 23
            echo "                    de Mars
                ";
        } elseif ((        // line 24
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 24, $this->source); })()) == 4)) {
            // line 25
            echo "                    d'Avril
                ";
        } elseif ((        // line 26
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 26, $this->source); })()) == 5)) {
            // line 27
            echo "                    de Mai
                ";
        } elseif ((        // line 28
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 28, $this->source); })()) == 6)) {
            // line 29
            echo "                    de Juin
                ";
        } elseif ((        // line 30
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 30, $this->source); })()) == 7)) {
            // line 31
            echo "                    de Juillet
                ";
        } elseif ((        // line 32
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 32, $this->source); })()) == 8)) {
            // line 33
            echo "                    d'Août
                ";
        } elseif ((        // line 34
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 34, $this->source); })()) == 9)) {
            // line 35
            echo "                    de Septembre
                ";
        } elseif ((        // line 36
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 36, $this->source); })()) == 10)) {
            // line 37
            echo "                    d'Octobre
                ";
        } elseif ((        // line 38
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 38, $this->source); })()) == 11)) {
            // line 39
            echo "                    de Novembre
                ";
        } elseif ((        // line 40
(isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 40, $this->source); })()) == 12)) {
            // line 41
            echo "                    de Décembre
                ";
        }
        // line 43
        echo "                </h5>
                <button type=\"submit\" class=\"btn btn-outline-primary\">Modifier / Valider</button>
            </div>
            <div class=\"card-body\">
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 53
        if (((isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 53, $this->source); })()) != null)) {
            // line 54
            echo "                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Nombre de justificatifs</th>
                                        <th>Montant total</th>
                                        <th>Date de modification</th>
                                        <th>Situation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiches"]) {
                // line 64
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 64) != null)) {
                    // line 65
                    echo "                                            <tr>
                                                <td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 66), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "montantValide", [], "any", false, false, false, 67), "html", null, true);
                    echo "€</td>
                                                <td>";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "dateModif", [], "any", false, false, false, 68), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "idEtat", [], "any", false, false, false, 69), "html", null, true);
                    echo "</td>
                                            </tr>
                                        ";
                }
                // line 72
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiches'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                </tbody>
                            ";
        } else {
            // line 75
            echo "                                <tr>
                                    <td>Pas de fiche de frais pour ce visiteur ce mois</td>
                                </tr>
                            ";
        }
        // line 79
        echo "                        </table>
                    </div>
                </div>
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 88
        if (((isset($context["ligneFraisForfait"]) || array_key_exists("ligneFraisForfait", $context) ? $context["ligneFraisForfait"] : (function () { throw new RuntimeError('Variable "ligneFraisForfait" does not exist.', 88, $this->source); })()) != null)) {
            // line 89
            echo "                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Libellé</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ligneFraisForfait"]) || array_key_exists("ligneFraisForfait", $context) ? $context["ligneFraisForfait"] : (function () { throw new RuntimeError('Variable "ligneFraisForfait" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lignes"]) {
                // line 97
                echo "                                        <tr>
                                            ";
                // line 98
                if ((twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 98) == (isset($context["KM"]) || array_key_exists("KM", $context) ? $context["KM"] : (function () { throw new RuntimeError('Variable "KM" does not exist.', 98, $this->source); })()))) {
                    // line 99
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 99), "html", null, true);
                    echo " (0.62€)</td>
                                                <td>";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 100), "html", null, true);
                    echo " km</td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 101
$context["lignes"], "idFraisForfait", [], "any", false, false, false, 101) == (isset($context["ETP"]) || array_key_exists("ETP", $context) ? $context["ETP"] : (function () { throw new RuntimeError('Variable "ETP" does not exist.', 101, $this->source); })()))) {
                    // line 102
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 102), "html", null, true);
                    echo " (110€)</td>
                                                ";
                    // line 103
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 103)) > 1)) {
                        // line 104
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 104), "html", null, true);
                        echo " étapes</td>
                                                ";
                    } else {
                        // line 106
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 106), "html", null, true);
                        echo " étape</td>
                                                ";
                    }
                    // line 108
                    echo "                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 108) == (isset($context["NUI"]) || array_key_exists("NUI", $context) ? $context["NUI"] : (function () { throw new RuntimeError('Variable "NUI" does not exist.', 108, $this->source); })()))) {
                    // line 109
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 109), "html", null, true);
                    echo " (80€)</td>
                                                ";
                    // line 110
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 110)) > 1)) {
                        // line 111
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 111), "html", null, true);
                        echo " nuits</td>
                                                ";
                    } else {
                        // line 113
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 113), "html", null, true);
                        echo " nuit</td>
                                                ";
                    }
                    // line 115
                    echo "                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 115) == (isset($context["REP"]) || array_key_exists("REP", $context) ? $context["REP"] : (function () { throw new RuntimeError('Variable "REP" does not exist.', 115, $this->source); })()))) {
                    // line 116
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "idFraisForfait", [], "any", false, false, false, 116), "html", null, true);
                    echo " (25 €)</td>
                                                <td>";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignes"], "quantite", [], "any", false, false, false, 117), "html", null, true);
                    echo " repas</td>
                                            ";
                }
                // line 119
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lignes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                                </tbody>
                            ";
        } else {
            // line 123
            echo "                            <tr>
                                <td>Aucun frais forfait</td>
                            </tr>
                            ";
        }
        // line 127
        echo "                        </table>
                    </div>
                </div>
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Frais Hors Forfait :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 136
        if (((isset($context["ligneFraisHorsForfait"]) || array_key_exists("ligneFraisHorsForfait", $context) ? $context["ligneFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "ligneFraisHorsForfait" does not exist.', 136, $this->source); })()) != null)) {
            // line 137
            echo "                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Date</th>
                                        <th>Libellé</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ligneFraisHorsForfait"]) || array_key_exists("ligneFraisHorsForfait", $context) ? $context["ligneFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "ligneFraisHorsForfait" does not exist.', 145, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 146
                echo "                                        <tr>
                                            <td>";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "date", [], "any", false, false, false, 147), "html", null, true);
                echo "</td>
                                            <td>";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "libelle", [], "any", false, false, false, 148), "html", null, true);
                echo "</td>
                                            <td>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "montant", [], "any", false, false, false, 149), "html", null, true);
                echo "€</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                                </tbody>
                            ";
        } else {
            // line 154
            echo "                                <tr>
                                    <td>Aucun frais hors forfait</td>
                                </tr>
                            ";
        }
        // line 158
        echo "                        </table>
                    </div>
                    <form method=\"POST\">
                        <input type=\"submit\" name=\"submit\" value=\"Supprimer le Hors Forfait\" class=\"btn btn-outline-primary\"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/valider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 173,  470 => 172,  466 => 171,  461 => 170,  451 => 169,  432 => 158,  426 => 154,  422 => 152,  413 => 149,  409 => 148,  405 => 147,  402 => 146,  398 => 145,  388 => 137,  386 => 136,  375 => 127,  369 => 123,  365 => 121,  358 => 119,  353 => 117,  348 => 116,  345 => 115,  339 => 113,  333 => 111,  331 => 110,  326 => 109,  323 => 108,  317 => 106,  311 => 104,  309 => 103,  304 => 102,  302 => 101,  298 => 100,  293 => 99,  291 => 98,  288 => 97,  284 => 96,  275 => 89,  273 => 88,  262 => 79,  256 => 75,  252 => 73,  246 => 72,  240 => 69,  236 => 68,  232 => 67,  228 => 66,  225 => 65,  222 => 64,  218 => 63,  207 => 54,  205 => 53,  193 => 43,  189 => 41,  187 => 40,  184 => 39,  182 => 38,  179 => 37,  177 => 36,  174 => 35,  172 => 34,  169 => 33,  167 => 32,  164 => 31,  162 => 30,  159 => 29,  157 => 28,  154 => 27,  152 => 26,  149 => 25,  147 => 24,  144 => 23,  142 => 22,  139 => 21,  137 => 20,  134 => 19,  132 => 18,  127 => 16,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Valider{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/sb-admin-2-comptable.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\"href=\"{{ asset('datatables/dataTables.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" href=\"cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\" style=\"display:flex; justify-content: space-between\">
                <h5 class=\"m-0 font-weight-bold text-primary\">Affichage des Fiches de Frais de l'utilisateur {{ prenomVisiteur }}
                pour le mois
                {% if (mois == 1) %}
                    de Janvier
                {% elseif (mois == 2) %}
                    de Février
                {% elseif (mois == 3) %}
                    de Mars
                {% elseif (mois == 4) %}
                    d'Avril
                {% elseif (mois == 5) %}
                    de Mai
                {% elseif (mois == 6) %}
                    de Juin
                {% elseif (mois == 7) %}
                    de Juillet
                {% elseif (mois == 8) %}
                    d'Août
                {% elseif (mois == 9) %}
                    de Septembre
                {% elseif (mois == 10) %}
                    d'Octobre
                {% elseif (mois == 11) %}
                    de Novembre
                {% elseif (mois == 12) %}
                    de Décembre
                {% endif %}
                </h5>
                <button type=\"submit\" class=\"btn btn-outline-primary\">Modifier / Valider</button>
            </div>
            <div class=\"card-body\">
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            {% if ficheFrais != null %}
                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Nombre de justificatifs</th>
                                        <th>Montant total</th>
                                        <th>Date de modification</th>
                                        <th>Situation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for fiches in ficheFrais %}
                                        {% if fiches.nbJustificatifs != null %}
                                            <tr>
                                                <td>{{ fiches.nbJustificatifs }}</td>
                                                <td>{{ fiches.montantValide }}€</td>
                                                <td>{{ fiches.dateModif }}</td>
                                                <td>{{ fiches.idEtat }}</td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                </tbody>
                            {% else %}
                                <tr>
                                    <td>Pas de fiche de frais pour ce visiteur ce mois</td>
                                </tr>
                            {% endif %}
                        </table>
                    </div>
                </div>
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Frais au Forfait :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            {% if ligneFraisForfait != null %}
                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Libellé</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for lignes in ligneFraisForfait %}
                                        <tr>
                                            {% if lignes.idFraisForfait == KM %}
                                                <td>{{ lignes.idFraisForfait }} (0.62€)</td>
                                                <td>{{ lignes.quantite }} km</td>
                                            {% elseif lignes.idFraisForfait == ETP %}
                                                <td>{{ lignes.idFraisForfait }} (110€)</td>
                                                {% if lignes.quantite|length > 1 %}
                                                    <td>{{ lignes.quantite }} étapes</td>
                                                {% else %}
                                                    <td>{{ lignes.quantite }} étape</td>
                                                {% endif %}
                                            {% elseif lignes.idFraisForfait == NUI %}
                                                <td>{{ lignes.idFraisForfait }} (80€)</td>
                                                {% if lignes.quantite|length > 1 %}
                                                    <td>{{ lignes.quantite }} nuits</td>
                                                {% else %}
                                                    <td>{{ lignes.quantite }} nuit</td>
                                                {% endif %}
                                            {% elseif lignes.idFraisForfait == REP %}
                                                <td>{{ lignes.idFraisForfait }} (25 €)</td>
                                                <td>{{ lignes.quantite }} repas</td>
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
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Frais Hors Forfait :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            {% if ligneFraisHorsForfait != null %}
                                <thead class=\"thead-light\">
                                    <tr>
                                        <th>Date</th>
                                        <th>Libellé</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for forfait in ligneFraisHorsForfait %}
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
                    <form method=\"POST\">
                        <input type=\"submit\" name=\"submit\" value=\"Supprimer le Hors Forfait\" class=\"btn btn-outline-primary\"></input>
                    </form>
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
", "fiche_frais/valider.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/valider.html.twig");
    }
}
