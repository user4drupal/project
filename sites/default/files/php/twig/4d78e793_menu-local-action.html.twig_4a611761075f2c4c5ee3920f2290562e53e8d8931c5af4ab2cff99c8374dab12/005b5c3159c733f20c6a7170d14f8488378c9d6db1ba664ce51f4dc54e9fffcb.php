<?php

/* core/themes/classy/templates/navigation/menu-local-action.html.twig */
class __TwigTemplate_1e2359f291e803e429193c6a4030c2c2c629a1073d224450c9c2c16404c3b664 extends Twig_Template
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
        $__internal_863f962f37027899595966395082654512128bdc4dda3a310a4e5feb3a063f8e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_863f962f37027899595966395082654512128bdc4dda3a310a4e5feb3a063f8e->enter($__internal_863f962f37027899595966395082654512128bdc4dda3a310a4e5feb3a063f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-action.html.twig"));

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

        // line 13
        echo "<li";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
        echo "</li>
";
        
        $__internal_863f962f37027899595966395082654512128bdc4dda3a310a4e5feb3a063f8e->leave($__internal_863f962f37027899595966395082654512128bdc4dda3a310a4e5feb3a063f8e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
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
 * Theme override for a single local action link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - link: A rendered link element.
 *
 * @see template_preprocess_menu_local_action()
 */
#}
<li{{ attributes }}>{{ link }}</li>
", "core/themes/classy/templates/navigation/menu-local-action.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/navigation/menu-local-action.html.twig");
    }
}
