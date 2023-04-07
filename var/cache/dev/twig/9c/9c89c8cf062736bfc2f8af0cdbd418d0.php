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
class __TwigTemplate_63bc4d7214aecf156b79894a4cf25959 extends Template
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

        echo "Renseigner";
        
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/formFicheFrais.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css\" type=\"text/css\" />
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Renseigner un nouveau Frais au Forfait :</h6>
            </div>
            <div class=\"card-body py-1 mb-2\">
                <form method=\"post\">
                    <div class=\"login-box\">
                        <div class=\"form-login\">
                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "mois", [], "any", false, false, false, 25), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"card shadow mb-2\">
                                    <div class=\"card-body py-1 mb-2\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "libelleKM", [], "any", false, false, false, 32), 'row');
        echo "
                                            </div>
                                            <div class=\"col-sm-3\">
                                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "montantKM", [], "any", false, false, false, 35), 'row');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "libelleREP", [], "any", false, false, false, 40), 'row');
        echo "
                                            </div>
                                            <div class=\"col-sm-3\">
                                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "montantREP", [], "any", false, false, false, 43), 'row');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "libelleNUI", [], "any", false, false, false, 48), 'row');
        echo "
                                            </div>
                                            <div class=\"col-sm-3\">
                                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "montantNUI", [], "any", false, false, false, 51), 'row');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "libelleETP", [], "any", false, false, false, 56), 'row');
        echo "
                                            </div>
                                            <div class=\"col-sm-3\">
                                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "montantETP", [], "any", false, false, false, 59), 'row');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-outline-primary mb-3\">Créer</button>
                            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
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
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 79, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 82, $this->source); })()), "date", [], "any", false, false, false, 82), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 87, $this->source); })()), "libelle", [], "any", false, false, false, 87), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 90, $this->source); })()), "montant", [], "any", false, false, false, 90), 'row');
        echo "
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-outline-primary\">Ajouter</button>
                            ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        \$('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js\" type=\"text/javascript\"></script>
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
        return array (  283 => 109,  273 => 108,  250 => 94,  243 => 90,  237 => 87,  229 => 82,  223 => 79,  206 => 65,  197 => 59,  191 => 56,  183 => 51,  177 => 48,  169 => 43,  163 => 40,  155 => 35,  149 => 32,  139 => 25,  133 => 22,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Renseigner{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/sb-admin-2.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/formFicheFrais.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css\" type=\"text/css\" />
{% endblock %}

{% block body %}
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
                                <button type=\"submit\" class=\"btn btn-outline-primary mb-3\">Créer</button>
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
                                <button type=\"submit\" class=\"btn btn-outline-primary\">Ajouter</button>
                            {{ form_end(form2) }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        \$('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js\" type=\"text/javascript\"></script>
{% endblock %}
", "fiche_frais/renseigner.html.twig", "/Users/melvin/Desktop/SLAM/Projets/GSB-Frais/templates/fiche_frais/renseigner.html.twig");
    }
}
