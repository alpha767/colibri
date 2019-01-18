<?php

/* newsletter/templates/components/newsletterPreview.hbs */
class __TwigTemplate_e8910f3cb443cedb5fafb5796cb28c65f458c3b2940dcab487a09743eb05d9d9 extends Twig_Template
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
        echo "<iframe src=\"{{ previewUrl }}\" width=\"{{ width }}\" height=\"{{ height }}\"></iframe>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/newsletterPreview.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/components/newsletterPreview.hbs", "/var/www/html/colibri/wp-content/plugins/mailpoet/views/newsletter/templates/components/newsletterPreview.hbs");
    }
}
