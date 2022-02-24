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

/* modules/contrib/upgrade_status/templates/upgrade-status-html-export.html.twig */
class __TwigTemplate_cc15ac8efd0e05910959150878a68da69ddbd6c8f8d8d6bc0f5a7c8d5003fdf3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32, "for" => 34];
        $filters = ["escape" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
        echo "<!doctype html>

<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>Upgrade status report</title>
  <style>
    body {
      font-family: Helvetia, Arial, sans-serif;
    }
    table {
      width: 100%;
    }
    th, td {
      border-bottom: 1px solid #cdcdcd;
    }
    th:nth-child(1), td:nth-child(3) {
      width: 40%;
    }
    th:nth-child(2) {
      width: 10%;
    }
    .list-description {
      margin-bottom: 1em;
    }
  </style>
</head>

<body>
<h1>Upgrade Status report</h1>

";
        // line 32
        if ($this->getAttribute(($context["projects"] ?? null), "custom", [])) {
            // line 33
            echo "  <h2>Custom projects</h2>
  ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["projects"] ?? null), "custom", []));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 35
                echo "    <h3>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "name", [])), "html", null, true);
                echo "</h3>
    ";
                // line 36
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "date", [])), "html", null, true);
                echo "
    ";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "summary", [])), "html", null, true);
                echo "
    ";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "plans", [])), "html", null, true);
                echo "
    ";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "groups", [])), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 42
        echo "
";
        // line 43
        if ($this->getAttribute(($context["projects"] ?? null), "contrib", [])) {
            // line 44
            echo "  <h2>Contributed projects</h2>
  ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["projects"] ?? null), "contrib", []));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 46
                echo "    <h3>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "name", [])), "html", null, true);
                echo "</h3>
    ";
                // line 47
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "date", [])), "html", null, true);
                echo "
    ";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "summary", [])), "html", null, true);
                echo "
    ";
                // line 49
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "plans", [])), "html", null, true);
                echo "
    ";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["project"], "groups", [])), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 53
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/upgrade_status/templates/upgrade-status-html-export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 53,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  135 => 46,  131 => 45,  128 => 44,  126 => 43,  123 => 42,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  97 => 35,  93 => 34,  90 => 33,  88 => 32,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/upgrade_status/templates/upgrade-status-html-export.html.twig", "/var/www/html/d9readiness/web/modules/contrib/upgrade_status/templates/upgrade-status-html-export.html.twig");
    }
}
