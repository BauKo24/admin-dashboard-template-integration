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

/* review/index.html.twig */
class __TwigTemplate_42f3b3cb810078950ba8f6977eab5a1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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

        echo "Review index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Review index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
                <th>User</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Rating</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>ValidationState</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 23
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "getUser", [], "method", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["review"], "Date", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "Date", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "Rating", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "Description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo ((twig_get_attribute($this->env, $this->source, $context["review"], "ValidationState", [], "any", false, false, false, 29)) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_show", ["id" => twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_new");
        echo "\">Create new</a>
\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hub");
        echo "\">Back to hub</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "review/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 44,  166 => 43,  161 => 40,  152 => 36,  143 => 32,  139 => 31,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  111 => 23,  106 => 22,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Review index
{% endblock %}

{% block body %}
\t<h1>Review index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
                <th>User</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Rating</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>ValidationState</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for review in reviews %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ review.id }}</td>
                    <td>{{ review.getUser().email }}</td>
\t\t\t\t\t<td>{{ review.Date ? review.Date|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t<td>{{ review.Rating }}</td>
\t\t\t\t\t<td>{{ review.Description }}</td>
\t\t\t\t\t<td>{{ review.ValidationState ? 'Yes' : 'No' }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_review_show', {'id': review.id}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('app_review_edit', {'id': review.id}) }}\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_review_new') }}\">Create new</a>
\t<a href=\"{{ path('hub') }}\">Back to hub</a>
{% endblock %}
", "review/index.html.twig", "C:\\Users\\ethan\\Desktop\\CODE\\dwwm\\brief7\\templates\\review\\index.html.twig");
    }
}
