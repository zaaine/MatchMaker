<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* loggedOut.html.twig */
class __TwigTemplate_6ce802f0812c50d0728170dd24369557 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loggedOut.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loggedOut.html.twig"));

        // line 1
        yield "<div x-data=\"{ open: false }\" class=\"relative bg-white overflow-hidden h-screen\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32\">

            <div class=\"relative pt-6 px-4 sm:px-6 lg:px-8\">
                <nav class=\"relative flex items-center justify-between sm:h-10 lg:justify-start\" aria-label=\"Global\">
                    <div class=\"flex items-center flex-grow flex-shrink-0 lg:flex-grow-0\">
                        <div class=\"flex items-center justify-between w-full md:w-auto\">
                            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                                <span class=\"sr-only\">MatchMaker.io</span>
                                <img class=\"h-8 w-auto sm:h-10\" src=\"https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg\">
                            </a>
                            <div class=\"-mr-2 flex items-center md:hidden\">
                                <button @click=\"open = true\" type=\"button\" class=\"bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500\" id=\"main-menu\" aria-haspopup=\"true\">
                                    <span class=\"sr-only\">Ouvrir le menu</span>
                                    <!-- Heroicon name: menu -->
                                    <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"hidden md:block md:ml-10 md:pr-4 md:space-x-8\">
                        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        yield "\" class=\"font-medium text-gray-500 hover:text-gray-900\"\" role=\"menuitem\">S'enregistrer</a>
                        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-gray-500 hover:text-gray-900\"\" role=\"menuitem\">Se connecter</a>
                    </div>
                </nav>
            </div>

            <div x-show=\"open\" x-description=\"Ouvre et ferme le menu.\" x-transition:enter=\"duration-150 ease-out\" x-transition:enter-start=\"opacity-0 scale-95 bg-white-0\" x-transition:enter-end=\"opacity-100 scale-100 bg-white-100\" x-transition:leave=\"duration-100 ease-in\" x-transition:leave-start=\"opacity-100 scale-100 bg-white-100\" x-transition:leave-end=\"opacity-0 scale-95 bg-white-0\" class=\"absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden bg-white-100\" style=\"background-color:white;\">
                <div class=\"rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden\">
                    <div class=\"px-5 pt-4 flex items-center justify-between\">
                        <div>
                            <img class=\"h-8 w-auto\" src=\"https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg\" alt=\"\">
                        </div>
                        <div class=\"-mr-2\">
                            <button @click=\"open = false\" type=\"button\" class=\"bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500\">
                                <span class=\"sr-only\">Fermer le menu</span>
                                <!-- Heroicon name: x -->
                                <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"main-menu\">
                        <div class=\"px-2 pt-2 pb-3 space-y-1\" role=\"none\">
                            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50\" role=\"menuitem\">S'enregistrer</a>
                            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50\" role=\"menuitem\">Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "loggedOut.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  111 => 50,  107 => 49,  81 => 26,  77 => 25,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div x-data=\"{ open: false }\" class=\"relative bg-white overflow-hidden h-screen\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32\">

            <div class=\"relative pt-6 px-4 sm:px-6 lg:px-8\">
                <nav class=\"relative flex items-center justify-between sm:h-10 lg:justify-start\" aria-label=\"Global\">
                    <div class=\"flex items-center flex-grow flex-shrink-0 lg:flex-grow-0\">
                        <div class=\"flex items-center justify-between w-full md:w-auto\">
                            <a href=\"{{ path('home') }}\">
                                <span class=\"sr-only\">MatchMaker.io</span>
                                <img class=\"h-8 w-auto sm:h-10\" src=\"https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg\">
                            </a>
                            <div class=\"-mr-2 flex items-center md:hidden\">
                                <button @click=\"open = true\" type=\"button\" class=\"bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500\" id=\"main-menu\" aria-haspopup=\"true\">
                                    <span class=\"sr-only\">Ouvrir le menu</span>
                                    <!-- Heroicon name: menu -->
                                    <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"hidden md:block md:ml-10 md:pr-4 md:space-x-8\">
                        <a href=\"{{ path('user_new') }}\" class=\"font-medium text-gray-500 hover:text-gray-900\"\" role=\"menuitem\">S'enregistrer</a>
                        <a href=\"{{ path('app_login') }}\" class=\"font-medium text-gray-500 hover:text-gray-900\"\" role=\"menuitem\">Se connecter</a>
                    </div>
                </nav>
            </div>

            <div x-show=\"open\" x-description=\"Ouvre et ferme le menu.\" x-transition:enter=\"duration-150 ease-out\" x-transition:enter-start=\"opacity-0 scale-95 bg-white-0\" x-transition:enter-end=\"opacity-100 scale-100 bg-white-100\" x-transition:leave=\"duration-100 ease-in\" x-transition:leave-start=\"opacity-100 scale-100 bg-white-100\" x-transition:leave-end=\"opacity-0 scale-95 bg-white-0\" class=\"absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden bg-white-100\" style=\"background-color:white;\">
                <div class=\"rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden\">
                    <div class=\"px-5 pt-4 flex items-center justify-between\">
                        <div>
                            <img class=\"h-8 w-auto\" src=\"https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg\" alt=\"\">
                        </div>
                        <div class=\"-mr-2\">
                            <button @click=\"open = false\" type=\"button\" class=\"bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500\">
                                <span class=\"sr-only\">Fermer le menu</span>
                                <!-- Heroicon name: x -->
                                <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"main-menu\">
                        <div class=\"px-2 pt-2 pb-3 space-y-1\" role=\"none\">
                            <a href=\"{{ path('user_new') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50\" role=\"menuitem\">S'enregistrer</a>
                            <a href=\"{{ path('app_login') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50\" role=\"menuitem\">Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
", "loggedOut.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ProgrammationMatch/templates/loggedOut.html.twig");
    }
}
