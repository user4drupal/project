<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_2183288186f52b5c656b2dc3d37ade9010f33ce0d4f941ca065495e96c690a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a735287f664aefeb84397f2cbff01900c4f9435e804cdc7353c72e63091b6d89 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a735287f664aefeb84397f2cbff01900c4f9435e804cdc7353c72e63091b6d89->enter($__internal_a735287f664aefeb84397f2cbff01900c4f9435e804cdc7353c72e63091b6d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a735287f664aefeb84397f2cbff01900c4f9435e804cdc7353c72e63091b6d89->leave($__internal_a735287f664aefeb84397f2cbff01900c4f9435e804cdc7353c72e63091b6d89_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0d6caead5f88a59587424d26e2849d174dd85b504d4cf96ccc8a4ed46d3dbc0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d6caead5f88a59587424d26e2849d174dd85b504d4cf96ccc8a4ed46d3dbc0->enter($__internal_c0d6caead5f88a59587424d26e2849d174dd85b504d4cf96ccc8a4ed46d3dbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_c0d6caead5f88a59587424d26e2849d174dd85b504d4cf96ccc8a4ed46d3dbc0->leave($__internal_c0d6caead5f88a59587424d26e2849d174dd85b504d4cf96ccc8a4ed46d3dbc0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for tabs.
 */
#}
{% block content %}
  {% if content %}
    <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
      {{ content }}
    </nav>
  {% endif %}
{% endblock %}
", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/block/block--local-tasks-block.html.twig");
    }
}
