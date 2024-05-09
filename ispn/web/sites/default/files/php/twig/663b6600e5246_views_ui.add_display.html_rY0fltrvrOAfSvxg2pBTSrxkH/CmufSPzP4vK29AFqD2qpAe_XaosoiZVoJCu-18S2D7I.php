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

/* @help_topics/views_ui.add_display.html.twig */
class __TwigTemplate_55a2e7d24b0907db1260bf3bee1f53ad extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/views_ui.add_display.html.twig"));

        // line 7
        ob_start(function () { return ''; });
        echo t("Views", array());
        $context["views_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["views_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["views_link_text"] ?? null), 8, $this->source), "entity.view.collection"));
        // line 9
        $context["view_edit_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("views_ui.edit"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Add a new display to an existing view. This will allow you to display similar data to an existing view, using similar settings, in a new block, page, feed, etc.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("If you are not already editing your view, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@views_link</em>. Find the view you want to edit, and click its <em>Edit</em> link.", array("@views_link" => ($context["views_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Under <em>Displays</em>, click <em>Add</em>.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("In the pop-up list, click the link for the type of display you want to add; the most common types are <em>Page</em> and <em>Block</em>. The new display will be added to your view, and you will be editing that display.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Optionally, click the link next to <em>Display name</em> and enter a new name to be shown for this display in the administrative interface.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Follow the steps in @view_edit_topic to edit the other settings for the display.", array("@view_edit_topic" => ($context["view_edit_topic"] ?? null), ));
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/views_ui.add_display.html.twig";
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
        return array (  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  50 => 10,  48 => 9,  46 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/views_ui.add_display.html.twig", "/var/www/html/web/core/modules/views_ui/help_topics/views_ui.add_display.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 8, "help_route_link" => 8, "help_topic_link" => 9);

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
