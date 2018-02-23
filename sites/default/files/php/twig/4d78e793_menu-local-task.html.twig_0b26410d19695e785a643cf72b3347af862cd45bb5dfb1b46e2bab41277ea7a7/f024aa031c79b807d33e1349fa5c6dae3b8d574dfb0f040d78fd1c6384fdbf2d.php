<?php

/* core/themes/classy/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_51aa07ae97fc63e4831197eff3dd7f9985d29616e9c69d79e56ec53db7ce7e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ea8cbcc1242db6ace0da5992b112ea26bb01dd9699ec51067af071baa914c08 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea8cbcc1242db6ace0da5992b112ea26bb01dd9699ec51067af071baa914c08->enter($__internal_0ea8cbcc1242db6ace0da5992b112ea26bb01dd9699ec51067af071baa914c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-task.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo "<li";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ((($context["is_active"] ?? null)) ? ("is-active") : (""))), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
        echo "</li>
";
        
        $__internal_0ea8cbcc1242db6ace0da5992b112ea26bb01dd9699ec51067af071baa914c08->leave($__internal_0ea8cbcc1242db6ace0da5992b112ea26bb01dd9699ec51067af071baa914c08_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for a local task link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - is_active: Whether the task item is an active tab.
 * - link: A rendered link element.
 *
 * Note: This template renders the content for each task item in
 * menu-local-tasks.html.twig.
 *
 * @see template_preprocess_menu_local_task()
 */
#}
<li{{ attributes.addClass(is_active ? 'is-active') }}>{{ link }}</li>
", "core/themes/classy/templates/navigation/menu-local-task.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/navigation/menu-local-task.html.twig");
    }
}