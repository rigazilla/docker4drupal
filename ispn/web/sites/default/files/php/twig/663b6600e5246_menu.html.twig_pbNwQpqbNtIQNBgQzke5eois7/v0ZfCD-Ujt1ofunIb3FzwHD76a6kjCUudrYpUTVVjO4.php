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

/* core/themes/olivero/templates/navigation/menu.html.twig */
class __TwigTemplate_3d2ae20dd19715b0f8a9e19896eb86db extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/navigation/menu.html.twig"));

        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 29);
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        echo "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level", "loop"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 32
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 33
            echo "  ";
            $context["primary_nav_level"] = ("menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 34
            echo "  ";
            $macros["menus"] = $this;
            // line 35
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 36
                echo "    <ul ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu", ($context["primary_nav_level"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                echo ">
      ";
                // line 37
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["primary_nav_level"] ?? null)], "method", false, false, true, 37);
                // line 38
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "
        ";
                    // line 40
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "isRouted", [], "any", false, false, true, 40) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "routeName", [], "any", false, false, true, 40) == "<nolink>"))) {
                        // line 41
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 42
                        echo "        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "isRouted", [], "any", false, false, true, 42) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "routeName", [], "any", false, false, true, 42) == "<button>"))) {
                        // line 43
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 44
                        echo "        ";
                    } else {
                        // line 45
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 46
                        echo "        ";
                    }
                    // line 47
                    echo "
        ";
                    // line 48
                    $context["item_classes"] = ["menu__item", ("menu__item--" . $this->sandbox->ensureToStringAllowed(                    // line 50
($context["menu_item_type"] ?? null), 50, $this->source)), ("menu__item--level-" . (                    // line 51
($context["menu_level"] ?? null) + 1)), ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "in_active_trail", [], "any", false, false, true, 52)) ? ("menu__item--active-trail") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "below", [], "any", false, false, true, 53)) ? ("menu__item--has-children") : (""))];
                    // line 56
                    echo "
        ";
                    // line 57
                    $context["link_classes"] = ["menu__link", ("menu__link--" . $this->sandbox->ensureToStringAllowed(                    // line 59
($context["menu_item_type"] ?? null), 59, $this->source)), ("menu__link--level-" . (                    // line 60
($context["menu_level"] ?? null) + 1)), ((twig_get_attribute($this->env, $this->source,                     // line 61
$context["item"], "in_active_trail", [], "any", false, false, true, 61)) ? ("menu__link--active-trail") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 62
$context["item"], "below", [], "any", false, false, true, 62)) ? ("menu__link--has-children") : (""))];
                    // line 65
                    echo "
        <li";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 72
                    echo "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 72), 72, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 72), 72, $this->source)));
                    // line 73
                    echo "
          ";
                    // line 74
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "

          ";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76)) {
                        // line 77
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 77), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 77, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 79
                    echo "
        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "    </ul>
  ";
            }
            
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
        return "core/themes/olivero/templates/navigation/menu.html.twig";
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
        return array (  195 => 82,  179 => 79,  173 => 77,  171 => 76,  166 => 74,  163 => 73,  160 => 72,  156 => 66,  153 => 65,  151 => 62,  150 => 61,  149 => 60,  148 => 59,  147 => 57,  144 => 56,  142 => 53,  141 => 52,  140 => 51,  139 => 50,  138 => 48,  135 => 47,  132 => 46,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  115 => 40,  112 => 39,  94 => 38,  92 => 37,  87 => 36,  84 => 35,  81 => 34,  78 => 33,  60 => 32,  49 => 30,  47 => 29,  44 => 24,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "set" => 29, "macro" => 32, "if" => 35, "for" => 38);
        static $filters = array("escape" => 36, "clean_id" => 72);
        static $functions = array("link" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id'],
                ['link']
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
