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

/* @webprofiler/Collector/memory.html.twig */
class __TwigTemplate_fa41970787f7f085ec621e18ede42cd1 extends Template
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
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/memory.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

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
        $context["status_color"] = (((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memory", [], "any", false, false, true, 4) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 5
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/memory.svg"));
        echo "
    <span class=\"sf-toolbar-value\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%.1f", ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memory", [], "any", false, false, true, 6) / 1024) / 1024)), "html", null, true);
        echo "</span>
    <span class=\"sf-toolbar-label\">MiB</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
  ";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        echo "    <div class=\"sf-toolbar-info-piece\">
      <b>Peak memory usage</b>
      <span>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%.1f", ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memory", [], "any", false, false, true, 13) / 1024) / 1024)), "html", null, true);
        echo " MiB</span>
    </div>

    <div class=\"sf-toolbar-info-piece\">
      <b>PHP memory limit</b>
      <span>";
        // line 18
        (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memoryLimit", [], "any", false, false, true, 18) ==  -1)) ? (print ("Unlimited")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%.0f MiB", ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "memoryLimit", [], "any", false, false, true, 18) / 1024) / 1024)), "html", null, true))));
        echo "</span>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
  ";
        // line 22
        echo twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => false, "name" => "time", "status" => ($context["status_color"] ?? null)]);
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/memory.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  102 => 22,  99 => 21,  93 => 18,  85 => 13,  81 => 11,  79 => 10,  76 => 9,  70 => 6,  65 => 5,  62 => 4,  60 => 3,  57 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/memory.html.twig", "/var/www/html/web/modules/contrib/webprofiler/templates/Collector/memory.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3);
        static $filters = array("escape" => 6, "format" => 6);
        static $functions = array("include" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['escape', 'format'],
                ['include']
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
