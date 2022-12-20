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

/* main/index.html.twig */
class __TwigTemplate_34644d0e086ca352883eaf5d2f267bd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Brief 7 - Database Hub
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
        echo "\t<div
\t\tclass=\"container-scroller\">
\t\t<!-- partial:partials/_navbar.html -->
\t\t<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
\t\t\t<div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
\t\t\t\t\t\t<span class=\"icon-menu\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"index.html\">
\t\t\t\t\t\t<img src=\"images/logo.svg\" alt=\"logo\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">
\t\t\t\t\t\t<img src=\"images/logo-mini.svg\" alt=\"logo\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-menu-wrapper d-flex align-items-top\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
\t\t\t\t\t\t<h1 class=\"welcome-text\">Good Morning, Mister Admin !</h1>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tSelect Category
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">Select category</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t<div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
\t\t\t\t\t\t\t<span class=\"input-group-addon input-group-prepend border-right\">
\t\t\t\t\t\t\t\t<span class=\"icon-calendar input-group-text calendar-icon\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<form class=\"search-form\" action=\"#\">
\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"icon-mail icon-lg\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3 border-bottom\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-alert m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tJust now
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-settings m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tPrivate message
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"icon-bell\"></i>
\t\t\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img class=\"img-xs rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
\t\t\t\t\t\t\t<div class=\"dropdown-header text-center\">
\t\t\t\t\t\t\t\t<img class=\"img-md rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
\t\t\t\t\t\t\t\t<p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tMy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Profile
\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-danger\">1</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tMessages</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tActivity</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tFAQ</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
\t\t\t\t\t<span class=\"mdi mdi-menu\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</nav>
\t\t<!-- partial -->
\t\t<div
\t\t\tclass=\"container-fluid page-body-wrapper\">
\t\t\t<!-- partial:partials/_settings-panel.html -->
\t\t\t<div class=\"theme-setting-wrapper\">
\t\t\t\t<div id=\"settings-trigger\">
\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t</div>
\t\t\t\t<div id=\"theme-settings\" class=\"settings-panel\">
\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t<p class=\"settings-heading\">SIDEBAR SKINS</p>
\t\t\t\t\t<div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"settings-heading mt-2\">HEADER SKINS</p>
\t\t\t\t\t<div class=\"color-tiles mx-0 px-4\">
\t\t\t\t\t\t<div class=\"tiles success\"></div>
\t\t\t\t\t\t<div class=\"tiles warning\"></div>
\t\t\t\t\t\t<div class=\"tiles danger\"></div>
\t\t\t\t\t\t<div class=\"tiles info\"></div>
\t\t\t\t\t\t<div class=\"tiles dark\"></div>
\t\t\t\t\t\t<div class=\"tiles default\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"right-sidebar\" class=\"settings-panel\">
\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t<ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"setting-content\">
\t\t\t\t\t<div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
\t\t\t\t\t\t<div class=\"add-items d-flex px-3 mb-0\">
\t\t\t\t\t\t\t<form class=\"form w-100\">
\t\t\t\t\t\t\t\t<div class=\"form-group d-flex\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-wrapper px-3\">
\t\t\t\t\t\t\t<ul class=\"d-flex flex-column-reverse todo-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\tTeam review meeting at 3.00 PM
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\tPrepare for presentation
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\tResolve all the low priority tickets due today
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\tSchedule meeting for next week
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\tProject review
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t<span>Feb 11 2018</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
\t\t\t\t\t\t\t<p class=\"text-gray mb-0\">The total number of sessions</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t<span>Feb 7 2018</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
\t\t\t\t\t\t\t<p class=\"text-gray mb-0 \">Call Sarah Graves</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- To do section tab ends -->
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t<p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
\t\t\t\t\t\t\t<small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"chat-list\">
\t\t\t\t\t\t\t<li class=\"list active\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Thomas Douglas</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">19 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex\">
\t\t\t\t\t\t\t\t\t\t<p>Catherine</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">23 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Daniel Russell</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">14 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>James Richardson</p>
\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">2 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Madeline Kennedy</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">5 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Sarah Graves</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">47 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- chat tab ends -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- partial -->
\t\t\t<!-- partial:partials/_sidebar.html -->
\t\t\t<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-grid-large menu-icon\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item nav-category\">Forms and Datas</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 409
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test");
        echo "\" aria-expanded=\"false\" aria-controls=\"form-elements\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-card-text-outline\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Users</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"form-elements\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 423
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"charts\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-chart-line\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Products</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"charts\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 437
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"tables\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-table\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Categories</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"tables\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 451
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"icons\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-layers-outline\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Reviews</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"icons\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- partial -->
\t\t\t<div class=\"main-panel\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"home-tab\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tShare</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-printer\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tPrint</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary text-white me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tExport</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-content tab-content-basic\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"statistics-details d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">32.53%</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>-0.5%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Page Views</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">7,682</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>+0.1%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Performance Line Chart</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-subtitle card-subtitle-dash\">Lorem Ipsum is simply dummy text of the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                      printing</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"performance-line-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-wrapper mt-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"performaneLine\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash text-white mb-4\">Status Summary</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"status-summary-ight-white mb-1\">Closed Value</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-info\">357</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-summary-chart-wrapper pb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"status-summary\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-2 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"totalVisitors\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Total Visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">26.80%</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"visitperday\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Visits per day</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">9065</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Market Overview</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                      adipisicing elit</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThis month
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Settings</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-4 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"me-2 fw-bold\">\$36,2531.00</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-2\">USD</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success\">(+1.37%)</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"marketing-overview-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-bar-wrapper mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"marketingOverview\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded table-darkBGImg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-white upgrade-info mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEnhance your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Campaign</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor better outreach
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info upgrade-btn\">Upgrade Account!</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Pending Requests</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-plus\"></i>Add new member</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table select-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Company</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Progress</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Brandon Washington</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">79%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Laura Brooks</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Wayne Murphy</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 38%\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Matthew Bailey</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger\">Pending</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Katherine Butler</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title  card-title-dash\">Recent Events</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Events
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuarterly Report
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Activities</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">20 finished, 5 remaining</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"bullet-line-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Just now</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Oliver Noah</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Jack William</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Leo Lucas</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Thomas Henry</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Todo list</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"add-items d-flex mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list todo-list-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-flag ms-2 flag-color\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">23 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"border-bottom-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger me-3\">Expired</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Type By Amount</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas class=\"my-auto\" id=\"doughnutChart\" height=\"200\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"doughnut-chart-legend\" class=\"mt-5 text-center\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Leave Report</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMonth Wise
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">week Wise</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Year Wise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"leaveReport\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Top Performer</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face1.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Brandon Washington</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face2.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Wayne Murphy</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face3.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Katherine Butler</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face4.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Matthew Bailey</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face5.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Rafell John</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Alaska, USA</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- content-wrapper ends -->
\t\t\t\t<!-- partial:partials/_footer.html -->
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
\t\t\t\t\t\t<span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium
\t\t\t\t\t\t\t<a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a>
\t\t\t\t\t\t\tfrom
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              BootstrapDash.</span>
\t\t\t\t\t\t<span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              reserved.</span>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- partial -->
\t\t\t</div>
\t\t\t<!-- main-panel ends -->
\t\t</div>
\t\t<!-- page-body-wrapper ends -->
\t</div>
\t<!-- container-scroller -->
\t";
        // line 1300
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1322
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1300
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1301
        echo "\t\t<!-- plugins:js -->
\t\t<script src=\"/vendors/js/vendor.bundle.base.js\"></script>
\t\t<!-- endinject -->
\t\t<!-- Plugin js for this page -->
\t\t<script src=\"/vendors/chart.js/Chart.min.js\"></script>
\t\t<script src=\"/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js\"></script>
\t\t<script src=\"/vendors/progressbar.js/progressbar.min.js\"></script>

\t\t<!-- End plugin js for this page -->
\t\t<!-- inject:js -->
\t\t<script src=\"/js/off-canvas.js\"></script>
\t\t<script src=\"/js/hoverable-collapse.js\"></script>
\t\t<script src=\"/js/template.js\"></script>
\t\t<script src=\"/js/settings.js\"></script>
\t\t<script src=\"/js/todolist.js\"></script>
\t\t<!-- endinject -->
\t\t<!-- Custom js for this page-->
\t\t<script src=\"/js/dashboard.js\"></script>
\t\t<script src=\"/js/Chart.roundedBarCharts.js\"></script>
\t\t<!-- End custom js for this page-->
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1420 => 1301,  1410 => 1300,  1399 => 1322,  1397 => 1300,  545 => 451,  528 => 437,  511 => 423,  494 => 409,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Brief 7 - Database Hub
{% endblock %}

{% block body %}
\t<div
\t\tclass=\"container-scroller\">
\t\t<!-- partial:partials/_navbar.html -->
\t\t<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
\t\t\t<div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
\t\t\t\t\t\t<span class=\"icon-menu\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"index.html\">
\t\t\t\t\t\t<img src=\"images/logo.svg\" alt=\"logo\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">
\t\t\t\t\t\t<img src=\"images/logo-mini.svg\" alt=\"logo\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-menu-wrapper d-flex align-items-top\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
\t\t\t\t\t\t<h1 class=\"welcome-text\">Good Morning, Mister Admin !</h1>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tSelect Category
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">Select category</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t<div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
\t\t\t\t\t\t\t<span class=\"input-group-addon input-group-prepend border-right\">
\t\t\t\t\t\t\t\t<span class=\"icon-calendar input-group-text calendar-icon\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<form class=\"search-form\" action=\"#\">
\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"icon-mail icon-lg\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3 border-bottom\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-alert m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tJust now
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-settings m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tPrivate message
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"icon-bell\"></i>
\t\t\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img class=\"img-xs rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
\t\t\t\t\t\t\t<div class=\"dropdown-header text-center\">
\t\t\t\t\t\t\t\t<img class=\"img-md rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
\t\t\t\t\t\t\t\t<p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tMy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Profile
\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-danger\">1</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tMessages</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tActivity</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\tFAQ</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
\t\t\t\t\t<span class=\"mdi mdi-menu\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</nav>
\t\t<!-- partial -->
\t\t<div
\t\t\tclass=\"container-fluid page-body-wrapper\">
\t\t\t<!-- partial:partials/_settings-panel.html -->
\t\t\t<div class=\"theme-setting-wrapper\">
\t\t\t\t<div id=\"settings-trigger\">
\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t</div>
\t\t\t\t<div id=\"theme-settings\" class=\"settings-panel\">
\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t<p class=\"settings-heading\">SIDEBAR SKINS</p>
\t\t\t\t\t<div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"settings-heading mt-2\">HEADER SKINS</p>
\t\t\t\t\t<div class=\"color-tiles mx-0 px-4\">
\t\t\t\t\t\t<div class=\"tiles success\"></div>
\t\t\t\t\t\t<div class=\"tiles warning\"></div>
\t\t\t\t\t\t<div class=\"tiles danger\"></div>
\t\t\t\t\t\t<div class=\"tiles info\"></div>
\t\t\t\t\t\t<div class=\"tiles dark\"></div>
\t\t\t\t\t\t<div class=\"tiles default\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"right-sidebar\" class=\"settings-panel\">
\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t<ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"setting-content\">
\t\t\t\t\t<div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
\t\t\t\t\t\t<div class=\"add-items d-flex px-3 mb-0\">
\t\t\t\t\t\t\t<form class=\"form w-100\">
\t\t\t\t\t\t\t\t<div class=\"form-group d-flex\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-wrapper px-3\">
\t\t\t\t\t\t\t<ul class=\"d-flex flex-column-reverse todo-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\tTeam review meeting at 3.00 PM
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\tPrepare for presentation
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\tResolve all the low priority tickets due today
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\tSchedule meeting for next week
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\tProject review
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t<span>Feb 11 2018</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
\t\t\t\t\t\t\t<p class=\"text-gray mb-0\">The total number of sessions</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t<span>Feb 7 2018</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
\t\t\t\t\t\t\t<p class=\"text-gray mb-0 \">Call Sarah Graves</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- To do section tab ends -->
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t<p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
\t\t\t\t\t\t\t<small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"chat-list\">
\t\t\t\t\t\t\t<li class=\"list active\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Thomas Douglas</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">19 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex\">
\t\t\t\t\t\t\t\t\t\t<p>Catherine</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">23 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Daniel Russell</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">14 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>James Richardson</p>
\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">2 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Madeline Kennedy</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">5 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>Sarah Graves</p>
\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">47 min</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- chat tab ends -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- partial -->
\t\t\t<!-- partial:partials/_sidebar.html -->
\t\t\t<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-grid-large menu-icon\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item nav-category\">Forms and Datas</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_test\")}}\" aria-expanded=\"false\" aria-controls=\"form-elements\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-card-text-outline\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Users</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"form-elements\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_product_index\")}}\" aria-expanded=\"false\" aria-controls=\"charts\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-chart-line\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Products</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"charts\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_category_index\")}}\" aria-expanded=\"false\" aria-controls=\"tables\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-table\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Categories</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"tables\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_review_index\")}}\" aria-expanded=\"false\" aria-controls=\"icons\">
\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-layers-outline\"></i>
\t\t\t\t\t\t\t<span class=\"menu-title\">Reviews</span>
\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"collapse\" id=\"icons\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- partial -->
\t\t\t<div class=\"main-panel\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"home-tab\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tShare</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-printer\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tPrint</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary text-white me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tExport</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-content tab-content-basic\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"statistics-details d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">32.53%</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>-0.5%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Page Views</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">7,682</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>+0.1%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Performance Line Chart</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-subtitle card-subtitle-dash\">Lorem Ipsum is simply dummy text of the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                      printing</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"performance-line-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-wrapper mt-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"performaneLine\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash text-white mb-4\">Status Summary</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"status-summary-ight-white mb-1\">Closed Value</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-info\">357</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-summary-chart-wrapper pb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"status-summary\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-2 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"totalVisitors\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Total Visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">26.80%</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"visitperday\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Visits per day</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">9065</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Market Overview</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                      adipisicing elit</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThis month
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Settings</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-4 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"me-2 fw-bold\">\$36,2531.00</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-2\">USD</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success\">(+1.37%)</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"marketing-overview-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-bar-wrapper mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"marketingOverview\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded table-darkBGImg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-white upgrade-info mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEnhance your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Campaign</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor better outreach
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info upgrade-btn\">Upgrade Account!</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Pending Requests</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-plus\"></i>Add new member</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table select-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Company</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Progress</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Brandon Washington</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">79%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Laura Brooks</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Wayne Murphy</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 38%\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Matthew Bailey</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger\">Pending</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Katherine Butler</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title  card-title-dash\">Recent Events</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Events
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuarterly Report
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Activities</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">20 finished, 5 remaining</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"bullet-line-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Just now</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Oliver Noah</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Jack William</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Leo Lucas</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Thomas Henry</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Todo list</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"add-items d-flex mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list todo-list-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-flag ms-2 flag-color\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">23 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"border-bottom-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                              of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger me-3\">Expired</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Type By Amount</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas class=\"my-auto\" id=\"doughnutChart\" height=\"200\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"doughnut-chart-legend\" class=\"mt-5 text-center\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Leave Report</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMonth Wise
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">week Wise</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Year Wise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"leaveReport\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Top Performer</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face1.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Brandon Washington</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face2.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Wayne Murphy</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face3.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Katherine Butler</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face4.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Matthew Bailey</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"images/faces/face5.jpg\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Rafell John</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Alaska, USA</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- content-wrapper ends -->
\t\t\t\t<!-- partial:partials/_footer.html -->
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
\t\t\t\t\t\t<span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium
\t\t\t\t\t\t\t<a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a>
\t\t\t\t\t\t\tfrom
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              BootstrapDash.</span>
\t\t\t\t\t\t<span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              reserved.</span>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- partial -->
\t\t\t</div>
\t\t\t<!-- main-panel ends -->
\t\t</div>
\t\t<!-- page-body-wrapper ends -->
\t</div>
\t<!-- container-scroller -->
\t{% block javascripts %}
\t\t<!-- plugins:js -->
\t\t<script src=\"/vendors/js/vendor.bundle.base.js\"></script>
\t\t<!-- endinject -->
\t\t<!-- Plugin js for this page -->
\t\t<script src=\"/vendors/chart.js/Chart.min.js\"></script>
\t\t<script src=\"/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js\"></script>
\t\t<script src=\"/vendors/progressbar.js/progressbar.min.js\"></script>

\t\t<!-- End plugin js for this page -->
\t\t<!-- inject:js -->
\t\t<script src=\"/js/off-canvas.js\"></script>
\t\t<script src=\"/js/hoverable-collapse.js\"></script>
\t\t<script src=\"/js/template.js\"></script>
\t\t<script src=\"/js/settings.js\"></script>
\t\t<script src=\"/js/todolist.js\"></script>
\t\t<!-- endinject -->
\t\t<!-- Custom js for this page-->
\t\t<script src=\"/js/dashboard.js\"></script>
\t\t<script src=\"/js/Chart.roundedBarCharts.js\"></script>
\t\t<!-- End custom js for this page-->
\t{% endblock %}

{% endblock %}
", "main/index.html.twig", "C:\\Users\\ethan\\Desktop\\CODE\\dwwm\\brief7\\templates\\main\\index.html.twig");
    }
}
