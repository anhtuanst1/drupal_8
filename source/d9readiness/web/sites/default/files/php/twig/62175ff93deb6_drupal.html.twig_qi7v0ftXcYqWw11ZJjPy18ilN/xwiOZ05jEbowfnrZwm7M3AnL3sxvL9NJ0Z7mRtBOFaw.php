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

/* @webprofiler/Collector/drupal.html.twig */
class __TwigTemplate_f602e388510551fce9e395f8792b4949224315f360bc24755c68eff4f3680103 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("block" => 1, "set" => 2, "spaceless" => 12, "if" => 22);
        $filters = array("escape" => 5, "t" => 14, "default" => 53);
        $functions = array("url" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'spaceless', 'if'],
                ['escape', 't', 'default'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/drupal.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('panel', $context, $blocks);
        // line 66
        echo "
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start(function () { return ''; });
        // line 3
        echo "    <span>
        <img width=\"13\" height=\"28\" alt=\"Drupal\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
        <a href=\"https://www.drupal.org\">
            <span>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "version", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</span>
        </a>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start(function () { return ''; });
        // line 12
        echo "    ";
        ob_start(function () { return ''; });
        // line 13
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal version"));
        echo "</b>
            <span>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "version", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Installed profile"));
        echo "</b>
            <span>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "profile", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getGitCommit", [], "any", false, false, true, 22)) {
            // line 23
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Git commit"));
            echo "</b>
            <span><abbr title=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getGitCommit", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getAbbrGitCommit", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</abbr></span>
        </div>
        ";
        }
        // line 28
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getConfigUrl", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\"
                     title=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Configure Webprofiler"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Configure Webprofiler"));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.admin_list"));
        echo "\"
                     title=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View latest reports"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View latest reports"));
        echo "</a></span>
        </div>
        <hr/>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/documentation\">";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal Documentation"));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/contribute\">";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get involved!"));
        echo "</a></span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 45
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        if (($context["link"] ?? null)) {
            // line 48
            echo "        ";
            ob_start(function () { return ''; });
            // line 49
            echo "        <a href=\"#\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 49, $this->source), "html", null, true);
            echo "</a>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            echo "    ";
        }
        // line 52
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 53, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 54, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <script id=\"drupal\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal"));
        echo "</h2>
        <div class=\"panel__container\">

        </div>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/drupal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 60,  239 => 59,  232 => 58,  222 => 54,  218 => 53,  215 => 52,  212 => 51,  206 => 49,  203 => 48,  201 => 47,  198 => 46,  195 => 45,  189 => 42,  183 => 39,  174 => 35,  170 => 34,  162 => 31,  158 => 30,  154 => 28,  146 => 25,  142 => 24,  139 => 23,  137 => 22,  131 => 19,  127 => 18,  121 => 15,  117 => 14,  114 => 13,  111 => 12,  108 => 11,  101 => 7,  96 => 5,  92 => 3,  89 => 2,  82 => 1,  74 => 66,  72 => 58,  69 => 57,  67 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/drupal.html.twig", "/var/www/html/d9readiness/web/modules/contrib/devel/webprofiler/templates/Collector/drupal.html.twig");
    }
}
