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

/* @webprofiler/Collector/database.html.twig */
class __TwigTemplate_1c113a7890288baea569568c78763be5 extends Template
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
        $this->checkSecurity();
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/database.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('panel', $context, $blocks);
        // line 42
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector", "profiler_url", "_self", "token", "loop", "qid"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "
  ";
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    ";
        $context["status"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 4) > 50)) ? ("yellow") : (""));
        // line 5
        echo "
    ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/002--database.svg"));
        echo "
    <span class=\"sf-toolbar-value\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</span>
    <span class=\"sf-toolbar-info-piece-additional-detail\">
      <span class=\"sf-toolbar-label\">in</span>
      <span class=\"sf-toolbar-value\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%0.2f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 10), 10, $this->source)), "html", null, true);
        echo "</span>
      <span class=\"sf-toolbar-label\">ms</span>
    </span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo "
  ";
        // line 15
        ob_start(function () { return ''; });
        // line 16
        echo "    <div class=\"sf-toolbar-info-piece\">
      <b>Db queries</b>
      <span class=\"sf-toolbar-status\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Query time</b>
      <span>";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%0.2f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 22), 22, $this->source)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Default database</b>
      <span>";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "driver", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "://";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "host", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo ":";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "port", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "database", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "</span>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
  ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 30, $this->source), "")) : (""))]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 33
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 34
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webprofiler/database"), "html", null, true);
        echo "

  ";
        // line 36
        $context["queryHighlightThreshold"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queryHighlightThreshold", [], "any", false, false, true, 36);
        // line 37
        echo "
  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, true, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
            // line 39
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_query", [$context["query"], ($context["token"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 39), ($context["queryHighlightThreshold"] ?? null)], 39, $context, $this->getSourceContext()));
            echo "
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 43
    public function macro_query($__query__ = null, $__token__ = null, $__qid__ = null, $__queryHighlightThreshold__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "query" => $__query__,
            "token" => $__token__,
            "qid" => $__qid__,
            "queryHighlightThreshold" => $__queryHighlightThreshold__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query"));

            // line 44
            echo "  ";
            $context["slow_query"] = (twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "time", [], "any", false, false, true, 44) > (($context["queryHighlightThreshold"] ?? null) / 10));
            // line 45
            echo "  <div
    data-wp-caller=\"";
            // line 46
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 46), "class", [], "any", false, false, true, 46))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 46), "class", [], "any", false, false, true, 46), 46, $this->source)), "html", null, true);
            }
            echo "\"
    data-wp-database=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "database", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "\"
    data-wp-type=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webprofiler\Twig\Extension\DatabaseExtension']->queryType($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "query", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
            echo "\"
    data-wp-slow=\"";
            // line 49
            if (($context["slow_query"] ?? null)) {
                echo "1";
            } else {
                echo "0";
            }
            echo "\"
    data-wp-time=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "time", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "\"
    data-wp-class=\"";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 51), "class", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "->";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 51), "function", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "()\"
    data-wp-db=\"";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "database", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\"
    data-wp-target=\"";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "target", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\"
    data-wp-has-args=\"";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "args", [], "any", false, false, true, 54)) {
                echo "1";
            } else {
                echo "0";
            }
            echo "\"
    data-wp-qid=\"";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["qid"] ?? null), 55, $this->source), "html", null, true);
            echo "\"
    data-wp-explain-path=\"";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("webprofiler.database.explain", ["token" => ($context["token"] ?? null), "qid" => ($context["qid"] ?? null)]), "html", null, true);
            echo "\"
    class=\"wp-db-query\"
  >
    <pre style=\"white-space: unset; border-left: 8px solid ";
            // line 59
            if (($context["slow_query"] ?? null)) {
                echo "darkgoldenrod";
            } else {
                echo "green";
            }
            echo ";\">
      <code class=\"wp-query-placeholder language-sql\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "query", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</code>
      ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "args", [], "any", false, false, true, 61)) {
                echo "<code class=\"wp-query-executable language-sql is-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webprofiler\Twig\Extension\DatabaseExtension']->queryExecutable($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 61, $this->source)), "html", null, true);
                echo "</code>";
            }
            // line 62
            echo "    </pre>
  </div>
";
            
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/database.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  301 => 62,  295 => 61,  291 => 60,  283 => 59,  277 => 56,  273 => 55,  265 => 54,  261 => 53,  257 => 52,  251 => 51,  247 => 50,  239 => 49,  235 => 48,  231 => 47,  225 => 46,  222 => 45,  219 => 44,  200 => 43,  178 => 39,  161 => 38,  158 => 37,  156 => 36,  150 => 34,  143 => 33,  134 => 30,  131 => 29,  119 => 26,  112 => 22,  105 => 18,  101 => 16,  99 => 15,  96 => 14,  89 => 10,  83 => 7,  79 => 6,  76 => 5,  73 => 4,  71 => 3,  68 => 2,  61 => 1,  52 => 42,  50 => 33,  47 => 32,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/database.html.twig", "/var/www/html/web/modules/contrib/webprofiler/templates/Collector/database.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "for" => 38, "macro" => 43, "if" => 46);
        static $filters = array("escape" => 7, "format" => 10, "default" => 30, "lower" => 46);
        static $functions = array("include" => 6, "attach_library" => 34, "query_type" => 48, "path" => 56, "query_executable" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'for', 'macro', 'if', 'import'],
                ['escape', 'format', 'default', 'lower'],
                ['include', 'attach_library', 'query_type', 'path', 'query_executable']
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
}
