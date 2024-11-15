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

/* home/index.html.twig */
class __TwigTemplate_2d4aae6bd54644a8741269fad6802425 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Match Maker !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            yield "    <main class=\"mt-5 px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14 z-50\">
        <div class=\"flex flex-col\">
            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h1 class=\"text-2xl font-large text-gray-900\">
                        Bonjour ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
            yield "
                    </h1>
                    <h2 class=\"text-lg font-large text-gray-500\">Voici votre niveau : ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "player", [], "any", false, false, false, 14), "ratio", [], "any", false, false, false, 14)), "html", null, true);
            yield ", prêt à progresser ?</h2>
                </div>
            </div>

            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-5\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h2 id=\"slide-over-heading\" class=\"text-lg font-medium text-gray-900\">
                        Top 10
                    </h2>
                    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead>
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Points
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Joueur
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200\">
                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top10"]) || array_key_exists("top10", $context) ? $context["top10"] : (function () { throw new RuntimeError('Variable "top10" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 37
                yield "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm font-medium text-gray-900\">
                                        ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "ratio", [], "any", false, false, false, 40)), "html", null, true);
                yield "
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm text-gray-500\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 44), "html", null, true);
                yield "</div>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    ";
        } else {
            // line 56
            yield "        <main class=\"mt-5 mx-auto max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14 z-50\">
            <div classs=\"sm:text-center lg:text-left\">
                <h1 class=\"text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl\">
                    <span class=\"block xl:inline\">MatchMaker.io</span>
                    <span class=\"block text-indigo-600 xl:inline\">Online Tournaments</span>
                </h1>
                <p class=\"mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0\">
                    Retrouvez-vous entre amis, et organisez vos rencontres sports et e-sports ! MatchMaker.io est le compagnon de vos compétitions entre amis.
                </p>
                <div class=\"mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start\">
                    <div class=\"rounded-md shadow\">
                        <a href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            yield "\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10\">
                            S'enregistrer
                        </a>
                    </div>
                    <div class=\"mt-3 sm:mt-0 sm:ml-3\">
                        <a href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10\">
                            Se connecter
                        </a>
                    </div>
                </div>
            </div>
        </main>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  197 => 72,  189 => 67,  176 => 56,  166 => 48,  156 => 44,  149 => 40,  144 => 37,  140 => 36,  115 => 14,  110 => 12,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Match Maker !{% endblock %}

{% block body %}
    {% if app.user %}
    <main class=\"mt-5 px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14 z-50\">
        <div class=\"flex flex-col\">
            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h1 class=\"text-2xl font-large text-gray-900\">
                        Bonjour {{ app.user.username }}
                    </h1>
                    <h2 class=\"text-lg font-large text-gray-500\">Voici votre niveau : {{ app.user.player.ratio|round }}, prêt à progresser ?</h2>
                </div>
            </div>

            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-5\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h2 id=\"slide-over-heading\" class=\"text-lg font-medium text-gray-900\">
                        Top 10
                    </h2>
                    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead>
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Points
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Joueur
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200\">
                            {% for player in top10 %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm font-medium text-gray-900\">
                                        {{ player.ratio|round }}
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm text-gray-500\">{{ player.name }}</div>
                                </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {% else %}
        <main class=\"mt-5 mx-auto max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14 z-50\">
            <div classs=\"sm:text-center lg:text-left\">
                <h1 class=\"text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl\">
                    <span class=\"block xl:inline\">MatchMaker.io</span>
                    <span class=\"block text-indigo-600 xl:inline\">Online Tournaments</span>
                </h1>
                <p class=\"mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0\">
                    Retrouvez-vous entre amis, et organisez vos rencontres sports et e-sports ! MatchMaker.io est le compagnon de vos compétitions entre amis.
                </p>
                <div class=\"mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start\">
                    <div class=\"rounded-md shadow\">
                        <a href=\"{{ path('user_new') }}\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10\">
                            S'enregistrer
                        </a>
                    </div>
                    <div class=\"mt-3 sm:mt-0 sm:ml-3\">
                        <a href=\"{{ path('app_login') }}\" class=\"w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10\">
                            Se connecter
                        </a>
                    </div>
                </div>
            </div>
        </main>
    {% endif %}
{% endblock %}
", "home/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ProgrammationMatch/templates/home/index.html.twig");
    }
}
