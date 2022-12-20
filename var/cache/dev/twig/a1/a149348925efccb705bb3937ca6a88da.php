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

/* base.html.twig */
class __TwigTemplate_2e28938bc97b201051005636635acfba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "\t</head>

\t<body>

\t\t<div
\t\t\tclass=\"container-scroller\">
\t\t\t<!-- partial:partials/_navbar.html -->
\t\t\t<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
\t\t\t\t<div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
\t\t\t\t\t\t\t<span class=\"icon-menu\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hub");
        echo "\">
\t\t\t\t\t\t\t<img src=\"images/logo.svg\" alt=\"logo\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hub");
        echo "\">
\t\t\t\t\t\t\t<img src=\"images/logo-mini.svg\" alt=\"logo\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-menu-wrapper d-flex align-items-top\">
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
\t\t\t\t\t\t\t<h1 class=\"welcome-text\">Good Morning,</h1>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tSelect Category
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">Select category</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t<div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon input-group-prepend border-right\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar input-group-text calendar-icon\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<form class=\"search-form\" action=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"icon-mail icon-lg\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-3 border-bottom\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-alert m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tJust now
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-settings m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tPrivate message
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"icon-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"img-xs rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-header text-center\">
\t\t\t\t\t\t\t\t\t<img class=\"img-md rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tMy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Profile
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-danger\">1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tMessages</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tActivity</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tFAQ</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
\t\t\t\t\t\t<span class=\"mdi mdi-menu\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!-- partial -->
\t\t\t<div
\t\t\t\tclass=\"container-fluid page-body-wrapper\">
\t\t\t\t<!-- partial:partials/_settings-panel.html -->
\t\t\t\t<div class=\"theme-setting-wrapper\">
\t\t\t\t\t<div id=\"settings-trigger\">
\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"theme-settings\" class=\"settings-panel\">
\t\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t\t<p class=\"settings-heading\">SIDEBAR SKINS</p>
\t\t\t\t\t\t<div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"settings-heading mt-2\">HEADER SKINS</p>
\t\t\t\t\t\t<div class=\"color-tiles mx-0 px-4\">
\t\t\t\t\t\t\t<div class=\"tiles success\"></div>
\t\t\t\t\t\t\t<div class=\"tiles warning\"></div>
\t\t\t\t\t\t\t<div class=\"tiles danger\"></div>
\t\t\t\t\t\t\t<div class=\"tiles info\"></div>
\t\t\t\t\t\t\t<div class=\"tiles dark\"></div>
\t\t\t\t\t\t\t<div class=\"tiles default\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"right-sidebar\" class=\"settings-panel\">
\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t<ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\" id=\"setting-content\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
\t\t\t\t\t\t\t<div class=\"add-items d-flex px-3 mb-0\">
\t\t\t\t\t\t\t\t<form class=\"form w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-wrapper px-3\">
\t\t\t\t\t\t\t\t<ul class=\"d-flex flex-column-reverse todo-list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\tTeam review meeting at 3.00 PM
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\tPrepare for presentation
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\tResolve all the low priority tickets due today
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\t\tSchedule meeting for next week
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\t\tProject review
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
\t\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\t<span>Feb 11 2018</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
\t\t\t\t\t\t\t\t<p class=\"text-gray mb-0\">The total number of sessions</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\t<span>Feb 7 2018</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
\t\t\t\t\t\t\t\t<p class=\"text-gray mb-0 \">Call Sarah Graves</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- To do section tab ends -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t\t<p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
\t\t\t\t\t\t\t\t<small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"chat-list\">
\t\t\t\t\t\t\t\t<li class=\"list active\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Thomas Douglas</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">19 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Catherine</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">23 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Daniel Russell</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">14 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>James Richardson</p>
\t\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">2 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Madeline Kennedy</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">5 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Sarah Graves</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">47 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- chat tab ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- partial -->
\t\t\t\t<!-- partial:partials/_sidebar.html -->
\t\t\t\t<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 421
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hub");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-grid-large menu-icon\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-category\">Forms and Datas</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 428
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test");
        echo "\" aria-expanded=\"false\" aria-controls=\"form-elements\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-card-text-outline\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Users</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"form-elements\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 442
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"charts\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-chart-line\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Products</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"charts\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 456
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"tables\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-table\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Categories</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"tables\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"";
        // line 470
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"icons\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-layers-outline\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Reviews</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"icons\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- partial -->
\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"home-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tShare</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-printer\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tPrint</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary text-white me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tExport</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 521
        $this->displayBlock('body', $context, $blocks);
        // line 548
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- content-wrapper ends -->
\t\t\t\t\t<!-- partial:partials/_footer.html -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
\t\t\t\t\t\t\t<span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium
\t\t\t\t\t\t\t\t<a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a>
\t\t\t\t\t\t\t\tfrom
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              BootstrapDash.</span>
\t\t\t\t\t\t\t<span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              reserved.</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- partial -->
\t\t\t\t</div>
\t\t\t\t<!-- main-panel ends -->
\t\t\t</div>
\t\t\t<!-- page-body-wrapper ends -->
\t\t</div>
\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Star Admin2
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"/vendors/feather/feather.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/mdi/css/materialdesignicons.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/ti-icons/css/themify-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/typicons/typicons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/simple-line-icons/css/simple-line-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/css/vendor.bundle.base.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/js/select.dataTables.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/vertical-layout-light/style.css\">
\t\t\t<link rel=\"shortcut icon\" href=\"/images/favicon.png\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 521
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 522
        echo "
\t\t\t\t\t\t\t\t\t\t<!-- container-scroller -->
\t\t\t\t\t\t\t\t\t\t";
        // line 524
        $this->displayBlock('javascripts', $context, $blocks);
        // line 546
        echo "
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 524
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 525
        echo "\t\t\t\t\t\t\t\t\t\t\t<!-- plugins:js -->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/js/vendor.bundle.base.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<!-- endinject -->
\t\t\t\t\t\t\t\t\t\t\t<!-- Plugin js for this page -->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/chart.js/Chart.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/progressbar.js/progressbar.min.js\"></script>

\t\t\t\t\t\t\t\t\t\t\t<!-- End plugin js for this page -->
\t\t\t\t\t\t\t\t\t\t\t<!-- inject:js -->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/off-canvas.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/hoverable-collapse.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/template.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/settings.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/todolist.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<!-- endinject -->
\t\t\t\t\t\t\t\t\t\t\t<!-- Custom js for this page-->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/dashboard.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/Chart.roundedBarCharts.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<!-- End custom js for this page-->
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 525,  699 => 524,  688 => 546,  686 => 524,  682 => 522,  672 => 521,  652 => 11,  642 => 10,  622 => 7,  586 => 548,  584 => 521,  530 => 470,  513 => 456,  496 => 442,  479 => 428,  469 => 421,  85 => 40,  79 => 37,  62 => 22,  60 => 10,  57 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>
\t\t\t{% block title %}Star Admin2
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/feather/feather.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/mdi/css/materialdesignicons.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/ti-icons/css/themify-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/typicons/typicons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/simple-line-icons/css/simple-line-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/css/vendor.bundle.base.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/js/select.dataTables.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/vertical-layout-light/style.css\">
\t\t\t<link rel=\"shortcut icon\" href=\"/images/favicon.png\"/>
\t\t{% endblock %}
\t</head>

\t<body>

\t\t<div
\t\t\tclass=\"container-scroller\">
\t\t\t<!-- partial:partials/_navbar.html -->
\t\t\t<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
\t\t\t\t<div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
\t\t\t\t\t\t\t<span class=\"icon-menu\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"{{path('hub')}}\">
\t\t\t\t\t\t\t<img src=\"images/logo.svg\" alt=\"logo\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"{{path('hub')}}\">
\t\t\t\t\t\t\t<img src=\"images/logo-mini.svg\" alt=\"logo\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-menu-wrapper d-flex align-items-top\">
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
\t\t\t\t\t\t\t<h1 class=\"welcome-text\">Good Morning,</h1>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tSelect Category
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">Select category</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t<div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon input-group-prepend border-right\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar input-group-text calendar-icon\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<form class=\"search-form\" action=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"icon-mail icon-lg\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-3 border-bottom\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-alert m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tJust now
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-settings m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tPrivate message
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"icon-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"preview-item-content flex-grow py-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-light small-text mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThe meeting is cancelled
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"img-xs rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-header text-center\">
\t\t\t\t\t\t\t\t\t<img class=\"img-md rounded-circle\" src=\"images/faces/face8.jpg\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tMy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Profile
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-danger\">1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tMessages</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tActivity</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\tFAQ</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
\t\t\t\t\t\t<span class=\"mdi mdi-menu\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!-- partial -->
\t\t\t<div
\t\t\t\tclass=\"container-fluid page-body-wrapper\">
\t\t\t\t<!-- partial:partials/_settings-panel.html -->
\t\t\t\t<div class=\"theme-setting-wrapper\">
\t\t\t\t\t<div id=\"settings-trigger\">
\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"theme-settings\" class=\"settings-panel\">
\t\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t\t<p class=\"settings-heading\">SIDEBAR SKINS</p>
\t\t\t\t\t\t<div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"settings-heading mt-2\">HEADER SKINS</p>
\t\t\t\t\t\t<div class=\"color-tiles mx-0 px-4\">
\t\t\t\t\t\t\t<div class=\"tiles success\"></div>
\t\t\t\t\t\t\t<div class=\"tiles warning\"></div>
\t\t\t\t\t\t\t<div class=\"tiles danger\"></div>
\t\t\t\t\t\t\t<div class=\"tiles info\"></div>
\t\t\t\t\t\t\t<div class=\"tiles dark\"></div>
\t\t\t\t\t\t\t<div class=\"tiles default\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"right-sidebar\" class=\"settings-panel\">
\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t<ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\" id=\"setting-content\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
\t\t\t\t\t\t\t<div class=\"add-items d-flex px-3 mb-0\">
\t\t\t\t\t\t\t\t<form class=\"form w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-wrapper px-3\">
\t\t\t\t\t\t\t\t<ul class=\"d-flex flex-column-reverse todo-list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\tTeam review meeting at 3.00 PM
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\tPrepare for presentation
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\tResolve all the low priority tickets due today
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\t\tSchedule meeting for next week
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"completed\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t\t\t\tProject review
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"remove ti-close\"></i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
\t\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\t<span>Feb 11 2018</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
\t\t\t\t\t\t\t\t<p class=\"text-gray mb-0\">The total number of sessions</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"events pt-4 px-3\">
\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-control-record text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\t<span>Feb 7 2018</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
\t\t\t\t\t\t\t\t<p class=\"text-gray mb-0 \">Call Sarah Graves</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- To do section tab ends -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t\t<p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
\t\t\t\t\t\t\t\t<small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"chat-list\">
\t\t\t\t\t\t\t\t<li class=\"list active\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Thomas Douglas</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">19 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Catherine</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">23 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Daniel Russell</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">14 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>James Richardson</p>
\t\t\t\t\t\t\t\t\t\t<p>Away</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">2 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Madeline Kennedy</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">5 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list\">
\t\t\t\t\t\t\t\t\t<div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<p>Sarah Graves</p>
\t\t\t\t\t\t\t\t\t\t<p>Available</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted my-auto\">47 min</small>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- chat tab ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- partial -->
\t\t\t\t<!-- partial:partials/_sidebar.html -->
\t\t\t\t<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('hub')}}\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-grid-large menu-icon\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-category\">Forms and Datas</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_test\")}}\" aria-expanded=\"false\" aria-controls=\"form-elements\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-card-text-outline\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Users</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"form-elements\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_product_index\")}}\" aria-expanded=\"false\" aria-controls=\"charts\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-chart-line\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Products</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"charts\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_category_index\")}}\" aria-expanded=\"false\" aria-controls=\"tables\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-table\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Categories</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"tables\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"{{path(\"app_review_index\")}}\" aria-expanded=\"false\" aria-controls=\"icons\">
\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-layers-outline\"></i>
\t\t\t\t\t\t\t\t<span class=\"menu-title\">Reviews</span>
\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"icons\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- partial -->
\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"home-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tShare</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-printer\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tPrint</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary text-white me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tExport</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% block body %}

\t\t\t\t\t\t\t\t\t\t<!-- container-scroller -->
\t\t\t\t\t\t\t\t\t\t{% block javascripts %}
\t\t\t\t\t\t\t\t\t\t\t<!-- plugins:js -->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/js/vendor.bundle.base.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<!-- endinject -->
\t\t\t\t\t\t\t\t\t\t\t<!-- Plugin js for this page -->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/chart.js/Chart.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/vendors/progressbar.js/progressbar.min.js\"></script>

\t\t\t\t\t\t\t\t\t\t\t<!-- End plugin js for this page -->
\t\t\t\t\t\t\t\t\t\t\t<!-- inject:js -->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/off-canvas.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/hoverable-collapse.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/template.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/settings.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/todolist.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<!-- endinject -->
\t\t\t\t\t\t\t\t\t\t\t<!-- Custom js for this page-->
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/dashboard.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script src=\"/js/Chart.roundedBarCharts.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<!-- End custom js for this page-->
\t\t\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- content-wrapper ends -->
\t\t\t\t\t<!-- partial:partials/_footer.html -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
\t\t\t\t\t\t\t<span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium
\t\t\t\t\t\t\t\t<a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a>
\t\t\t\t\t\t\t\tfrom
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              BootstrapDash.</span>
\t\t\t\t\t\t\t<span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              reserved.</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- partial -->
\t\t\t\t</div>
\t\t\t\t<!-- main-panel ends -->
\t\t\t</div>
\t\t\t<!-- page-body-wrapper ends -->
\t\t</div>
\t</body>

</html>
", "base.html.twig", "C:\\Users\\ethan\\Desktop\\CODE\\dwwm\\brief7\\templates\\base.html.twig");
    }
}
