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

/* @help_topics/path.editing_alias.html.twig */
class __TwigTemplate_48db09a72b71556eeeaf1219bc215fb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/path.editing_alias.html.twig"));

        // line 7
        ob_start(function () { return ''; });
        // line 8
        echo "  ";
        echo t("Administer URL aliases", array());
        $context["path_permissions_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["path_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["path_permissions_link_text"] ?? null), 10, $this->source), "user.admin_permissions.module", ["modules" => "path"]));
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "  ";
        echo t("URL aliases", array());
        $context["path_aliases_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["path_aliases_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["path_aliases_link_text"] ?? null), 14, $this->source), "entity.path_alias.collection"));
        // line 15
        $context["path_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("path.overview"));
        // line 16
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 17
        echo t("Change an existing URL alias, to correct the path or the alias value. See @path_overview_topic for more about aliases.", array("@path_overview_topic" => ($context["path_overview_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 18
        echo t("Who can manage URL aliases?", array());
        echo "</h2>
<p>";
        // line 19
        echo t("Users with the <em>@path_permissions_link</em> permission can edit aliases.", array("@path_permissions_link" => ($context["path_permissions_link"] ?? null), ));
        echo "</p>
<h2>";
        // line 20
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 22
        echo t("In the <em>Manage</em> administration menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>@path_aliases_link</em>. A list of all the site's aliases will appear.", array("@path_aliases_link" => ($context["path_aliases_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 23
        echo t("Click <em>Edit</em> in the dropdown button for the alias that you would like to change.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("Make the required changes and click <em>Save</em>. You will be returned to the URL alias list page.", array());
        echo "</li>
  <li>";
        // line 25
        echo t("Note that you can also add new aliases from this page, for any path on your site.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/path.editing_alias.html.twig";
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
        return array (  94 => 25,  90 => 24,  86 => 23,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  60 => 16,  58 => 15,  56 => 14,  52 => 12,  50 => 11,  48 => 10,  44 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/path.editing_alias.html.twig", "/var/www/html/web/core/modules/path/help_topics/path.editing_alias.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 17);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link']
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
