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
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Affichage des Fiches de Frais de l'utilisateur ";
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
        echo "                </h6>
            </div>
            <div class=\"card-body\">
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            ";
        // line 52
        if (((isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 52, $this->source); })()) != null)) {
            // line 53
            echo "                                <thead>
                                    <tr>
                                        <th>Mois</th>
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
                                                ";
                    // line 66
                    if ((twig_get_attribute($this->env, $this->source, $context["fiches"], "mois", [], "any", false, false, false, 66) == 1)) {
                        // line 67
                        echo "                                                    <td>Janvier</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 68
$context["fiches"], "mois", [], "any", false, false, false, 68) == 2)) {
                        // line 69
                        echo "                                                    <td>Février</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 70
$context["fiches"], "mois", [], "any", false, false, false, 70) == 3)) {
                        // line 71
                        echo "                                                    <td>Mars</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 72
$context["fiches"], "mois", [], "any", false, false, false, 72) == 4)) {
                        // line 73
                        echo "                                                    <td>Avril</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 74
$context["fiches"], "mois", [], "any", false, false, false, 74) == 5)) {
                        // line 75
                        echo "                                                    <td>Mai</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 76
$context["fiches"], "mois", [], "any", false, false, false, 76) == 6)) {
                        // line 77
                        echo "                                                    <td>Juin</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 78
$context["fiches"], "mois", [], "any", false, false, false, 78) == 7)) {
                        // line 79
                        echo "                                                    <td>Juillet</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 80
$context["fiches"], "mois", [], "any", false, false, false, 80) == 8)) {
                        // line 81
                        echo "                                                    <td>Août</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 82
$context["fiches"], "mois", [], "any", false, false, false, 82) == 9)) {
                        // line 83
                        echo "                                                    <td>Septembre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 84
$context["fiches"], "mois", [], "any", false, false, false, 84) == 10)) {
                        // line 85
                        echo "                                                    <td>Octobre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 86
$context["fiches"], "mois", [], "any", false, false, false, 86) == 11)) {
                        // line 87
                        echo "                                                    <td>Novembre</td>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 88
$context["fiches"], "mois", [], "any", false, false, false, 88) == 12)) {
                        // line 89
                        echo "                                                    <td>Décembre</td>
                                                ";
                    }
                    // line 91
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "nbJustificatifs", [], "any", false, false, false, 91), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "montantValide", [], "any", false, false, false, 92), "html", null, true);
                    echo "€</td>
                                                <td>";
                    // line 93
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "dateModif", [], "any", false, false, false, 93), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiches"], "idEtat", [], "any", false, false, false, 94), "html", null, true);
                    echo "</td>
                                            </tr>
                                        ";
                }
                // line 97
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiches'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                                </tbody>
                            ";
        } else {
            // line 100
            echo "                                <tr>
                                    <td>Pas de fiche de frais pour ce visiteur ce mois</td>
                                </tr>
                            ";
        }
        // line 104
        echo "                        </table>
                    </div>
                </div>
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Ligne Frais Forfait :</h6>
                    </div>
                </div>
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Ligne Frais Hors Forfait :</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 126
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
        return array (  373 => 126,  369 => 125,  365 => 124,  360 => 123,  350 => 122,  324 => 104,  318 => 100,  314 => 98,  308 => 97,  302 => 94,  298 => 93,  294 => 92,  289 => 91,  285 => 89,  283 => 88,  280 => 87,  278 => 86,  275 => 85,  273 => 84,  270 => 83,  268 => 82,  265 => 81,  263 => 80,  260 => 79,  258 => 78,  255 => 77,  253 => 76,  250 => 75,  248 => 74,  245 => 73,  243 => 72,  240 => 71,  238 => 70,  235 => 69,  233 => 68,  230 => 67,  228 => 66,  225 => 65,  222 => 64,  218 => 63,  206 => 53,  204 => 52,  193 => 43,  189 => 41,  187 => 40,  184 => 39,  182 => 38,  179 => 37,  177 => 36,  174 => 35,  172 => 34,  169 => 33,  167 => 32,  164 => 31,  162 => 30,  159 => 29,  157 => 28,  154 => 27,  152 => 26,  149 => 25,  147 => 24,  144 => 23,  142 => 22,  139 => 21,  137 => 20,  134 => 19,  132 => 18,  127 => 16,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Affichage des Fiches de Frais de l'utilisateur {{ prenomVisiteur }}
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
                </h6>
            </div>
            <div class=\"card-body\">
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Fiche de Frais :</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            {% if ficheFrais != null %}
                                <thead>
                                    <tr>
                                        <th>Mois</th>
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
                        <h6 class=\"m-0 font-weight-bold text-primary\">Ligne Frais Forfait :</h6>
                    </div>
                </div>
                <div class=\"card-shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Ligne Frais Hors Forfait :</h6>
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
", "fiche_frais/valider.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/valider.html.twig");
    }
}
