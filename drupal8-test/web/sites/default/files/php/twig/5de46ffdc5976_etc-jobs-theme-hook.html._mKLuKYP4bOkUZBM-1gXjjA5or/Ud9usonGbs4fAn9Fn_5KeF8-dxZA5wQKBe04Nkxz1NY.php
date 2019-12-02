<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/etc_jobs/templates/etc-jobs-theme-hook.html.twig */
class __TwigTemplate_216449b4356f5a96a8fc71ae206b2fd3c31badf6684676ec992e2727797aa72a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 5, "if" => 6];
        $filters = ["escape" => 9, "raw" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Let's output the three variables passed to this template -->



";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["variable_jobs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 6
            echo "\t";
            if ($context["items"]) {
                // line 7
                echo "\t\t<div class=\"job-container\" style=\"width: 100%; float: left;\">
\t\t\t<div class=\"align-left\">
\t\t\t\t<h1>";
                // line 9
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["items"], "title", [])), "html", null, true);
                echo "</h1>
\t\t\t\t<p>";
                // line 10
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->sandbox->ensureToStringAllowed($this->getAttribute($context["items"], "company", [])) . " | ") . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["items"], "location", []))), "html", null, true);
                echo "</p>
\t\t\t\t<p>";
                // line 11
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["items"], "type", [])), "html", null, true);
                echo "</p>
\t\t\t\t<p>";
                // line 12
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["items"], "created_at", [])), "html", null, true);
                echo "</p>

\t\t\t\t";
                // line 14
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["items"], "description", [])));
                echo "
\t\t\t</div>
\t\t\t<hr>
\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

";
    }

    public function getTemplateName()
    {
        return "modules/custom/etc_jobs/templates/etc-jobs-theme-hook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  89 => 14,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 7,  65 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Let's output the three variables passed to this template -->



{% for items in variable_jobs %}
\t{% if items %}
\t\t<div class=\"job-container\" style=\"width: 100%; float: left;\">
\t\t\t<div class=\"align-left\">
\t\t\t\t<h1>{{ items.title }}</h1>
\t\t\t\t<p>{{ items.company ~ ' | ' ~ items.location  }}</p>
\t\t\t\t<p>{{ items.type }}</p>
\t\t\t\t<p>{{ items.created_at }}</p>

\t\t\t\t{{ items.description|raw }}
\t\t\t</div>
\t\t\t<hr>
\t\t</div>
\t{% endif %}
{% endfor %}


", "modules/custom/etc_jobs/templates/etc-jobs-theme-hook.html.twig", "D:\\Sites\\DevDesktop\\etctest\\drupal8-test\\web\\modules\\custom\\etc_jobs\\templates\\etc-jobs-theme-hook.html.twig");
    }
}
