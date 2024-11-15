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

/* match_maker/index.html.twig */
class __TwigTemplate_777a93ad09eedd5d8278aebd8f374fba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match_maker/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match_maker/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "match_maker/index.html.twig", 1);
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

        yield "Match";
        
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
        yield "    <main class=\"mt-5 mx-auto max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14 z-50\">
        <div class=\"flex flex-col\">
            <h1 class=\"text-2xl font-large text-gray-900\">Mes Matchs</h1>
            <h2 class=\"text-lg font-medium text-gray-500\">Joueurs en attente (";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 9, $this->source); })()), "html", null, true);
        yield ")</h2>

            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-5\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h2 id=\"slide-over-heading\" class=\"text-lg font-medium text-gray-900\">
                        Matchs en cours
                    </h2>
                    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead>
                            <tr>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player A
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player B
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Gagnant
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Status
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200\">
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches_playing"]) || array_key_exists("matches_playing", $context) ? $context["matches_playing"] : (function () { throw new RuntimeError('Variable "matches_playing" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match_playing"]) {
            // line 39
            yield "                                <tr>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "playerA", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "playerB", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">";
            // line 42
            ((CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "winner", [], "any", false, false, false, 42)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "winner", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true)) : (yield "N/A"));
            yield "</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "status", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">
                                        <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_maker_edit", ["date" => CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "dateOfEncounter", [], "any", false, false, false, 45), "playerA" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "playerA", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "playerB" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match_playing"], "playerB", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\">Saisir les scores</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            yield "                                <tr>
                                    <td colspan=\"6\">Aucun match en cours...</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match_playing'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-5\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h2 id=\"slide-over-heading\" class=\"text-lg font-medium text-gray-900\">
                        Matchs terminé
                    </h2>
                    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead>
                            <tr>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player A
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player B
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Gagnant
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Status
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200\">
                            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches_over"]) || array_key_exists("matches_over", $context) ? $context["matches_over"] : (function () { throw new RuntimeError('Variable "matches_over" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match_over"]) {
            // line 84
            yield "                                <tr>
                                    <td class=\"px-6 py-4 text-center whitespace-nowrap ";
            // line 85
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "winner", [], "any", false, false, false, 85) === CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "playerA", [], "any", false, false, false, 85))) {
                yield "font-bold";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "playerA", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                                    <td class=\"px-6 py-4 text-center whitespace-nowrap ";
            // line 86
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "winner", [], "any", false, false, false, 86) === CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "playerB", [], "any", false, false, false, 86))) {
                yield "font-bold";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "playerB", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                                    <td class=\"px-6 py-4 text-center whitespace-nowrap\" >
                                        ";
            // line 88
            ((CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "winner", [], "any", false, false, false, 88)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "scorePlayerA", [], "any", false, false, false, 88) . " : ") . CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "scorePlayerB", [], "any", false, false, false, 88)), "html", null, true)) : (yield "N/A"));
            yield "
                                    </td>
                                    <td class=\"px-6 text-center  py-4 whitespace-nowrap\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match_over"], "status", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
            yield "                                <tr>
                                    <td colspan=\"6\">Aucun match terminé...</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match_over'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type=\"application/javascript\">
        setTimeout(function()   {
            window.location.reload();
        }, 3000);
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "match_maker/index.html.twig";
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
        return array (  259 => 97,  250 => 93,  242 => 90,  237 => 88,  228 => 86,  220 => 85,  217 => 84,  212 => 83,  180 => 53,  171 => 49,  162 => 45,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  142 => 39,  137 => 38,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Match{% endblock %}

{% block body %}
    <main class=\"mt-5 mx-auto max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14 z-50\">
        <div class=\"flex flex-col\">
            <h1 class=\"text-2xl font-large text-gray-900\">Mes Matchs</h1>
            <h2 class=\"text-lg font-medium text-gray-500\">Joueurs en attente ({{ queue }})</h2>

            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-5\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h2 id=\"slide-over-heading\" class=\"text-lg font-medium text-gray-900\">
                        Matchs en cours
                    </h2>
                    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead>
                            <tr>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player A
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player B
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Gagnant
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Status
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200\">
                            {% for match_playing in matches_playing %}
                                <tr>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">{{ match_playing.playerA.name }}</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">{{ match_playing.playerB.name }}</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">{{ match_playing.winner ? match_playing.winner.name : 'N/A' }}</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">{{ match_playing.status }}</td>
                                    <td class=\"text-center px-6 py-4 whitespace-nowrap\">
                                        <a href=\"{{ path('match_maker_edit', {'date': match_playing.dateOfEncounter, 'playerA': match_playing.playerA.name,  'playerB': match_playing.playerB.name}) }}\">Saisir les scores</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\">Aucun match en cours...</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-5\">
                <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                    <h2 id=\"slide-over-heading\" class=\"text-lg font-medium text-gray-900\">
                        Matchs terminé
                    </h2>
                    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead>
                            <tr>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player A
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Player B
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Gagnant
                                </th>
                                <th scope=\"col\" class=\"text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                    Status
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200\">
                            {% for match_over in matches_over %}
                                <tr>
                                    <td class=\"px-6 py-4 text-center whitespace-nowrap {% if(match_over.winner is same as match_over.playerA) %}font-bold{% endif %}\">{{ match_over.playerA.name }}</td>
                                    <td class=\"px-6 py-4 text-center whitespace-nowrap {% if(match_over.winner is same as match_over.playerB) %}font-bold{% endif %}\">{{ match_over.playerB.name }}</td>
                                    <td class=\"px-6 py-4 text-center whitespace-nowrap\" >
                                        {{ match_over.winner ? match_over.scorePlayerA ~ ' : ' ~ match_over.scorePlayerB : 'N/A' }}
                                    </td>
                                    <td class=\"px-6 text-center  py-4 whitespace-nowrap\">{{ match_over.status }}</td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\">Aucun match terminé...</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type=\"application/javascript\">
        setTimeout(function()   {
            window.location.reload();
        }, 3000);
    </script>
{% endblock %}
", "match_maker/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ProgrammationMatch/templates/match_maker/index.html.twig");
    }
}
