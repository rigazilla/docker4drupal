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

/* @help_topics/views_ui.edit.html.twig */
class __TwigTemplate_3cd5a4f63ab429720c2411588abc98f4 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/views_ui.edit.html.twig"));

        // line 7
        ob_start(function () { return ''; });
        echo t("Views", array());
        $context["views_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["views_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["views_link_text"] ?? null), 8, $this->source), "entity.view.collection"));
        // line 9
        $context["views_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("views.overview"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Edit an existing view display, to modify what data is displayed or how it is displayed.", array());
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
        echo t("Under <em>Displays</em>, click the display you want to edit.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Find the section whose settings you want to change, such as <em>Format</em> or <em>Filter criteria</em>. (See @views_overview_topic for more information.)", array("@views_overview_topic" => ($context["views_overview_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 17
        echo t("For sections containing lists (such as <em>Fields</em> and <em>Filter criteria</em>), to modify or delete an existing item, click the name of the item. To add a new item, click <em>Add</em> in the drop-down list. To change the order of items, click <em>Rearrange</em> in the drop-down list.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("For sections containing individual settings (such as <em>Title</em> and <em>Format</em>), there are often two links for each setting. The first link shows the current value; click that link to change the value. If there is a second link called <em>Settings</em>, click that link to change the settings details. For example, if your <em>Format</em> is currently shown as <em>Unformatted list</em>, click <em>Unformatted list</em> to switch to using a <em>Grid</em> or <em>Table</em> format. Click <em>Settings</em> next to your format type to change the settings for your chosen format.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("When you have finished changing all the settings, verify that the display is correct by clicking <em>Update preview</em>. Return to editing settings if necessary.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("When you have verified the display, click <em>Save</em>. Alternatively, if you have made mistakes and want to discard your changes, click <em>Cancel</em>.", array());
        echo "</li>
</ol>
<h2>";
        // line 22
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li>";
        // line 24
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/views-chapter.html\">Creating Listings with Views (Drupal User Guide)</a>", array());
        echo "</li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/views_ui.edit.html.twig";
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
        return array (  98 => 24,  93 => 22,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  50 => 10,  48 => 9,  46 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/views_ui.edit.html.twig", "/var/www/html/web/core/modules/views_ui/help_topics/views_ui.edit.html.twig");
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
