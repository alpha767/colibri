<?php

/* newsletter/templates/blocks/container/twoColumnLayoutWidget12.hbs */
class __TwigTemplate_dad399887234ae96c3801e42e0f4973c763194faa1a151d92ab9be439f96b2f1 extends Twig_Template
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
        // line 1
        echo "<div class=\"mailpoet_widget_icon\">
  ";
        // line 2
        echo twig_source($this->env, "newsletter/templates/svg/layout-icons/2-column-12.svg");
        echo "
</div>
<div class=\"mailpoet_widget_title\">";
        // line 4
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("1:2 columns");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/container/twoColumnLayoutWidget12.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/container/twoColumnLayoutWidget12.hbs", "/var/www/html/colibri/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/container/twoColumnLayoutWidget12.hbs");
    }
}
