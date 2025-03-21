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

/* @gin/navigation/fix-toolbar-js-error.html.twig */
class __TwigTemplate_0933c901049198347c99b4ab361b535f extends Template
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
        // line 2
        if (((($context["toolbar_variant"] ?? null) == "new") || ($context["core_navigation"] ?? null))) {
            // line 3
            echo "  <div id=\"toolbar-administration\" class=\"toolbar\" height=\"0px\" hidden>
    <div class=\"toolbar-tab--toolbar-item-shortcuts\" hidden>
      <a id=\"toolbar-item-shortcuts\" class=\"toolbar-item\" data-toolbar-tray=\"toolbar-item-shortcuts-tray\" hidden></a>
      <div id=\"toolbar-item-shortcuts-tray\" class=\"toolbar-tray\" data-toolbar-tray=\"toolbar-item-shortcuts-tray\" hidden></div>
    </div>
    <div class=\"toolbar-tab--toolbar-item-devel\" hidden>
      <a id=\"toolbar-item-devel\" class=\"toolbar-item\" data-toolbar-tray=\"toolbar-item-devel-tray\" hidden></a>
      <div id=\"toolbar-item-devel-tray\" class=\"toolbar-tray\" data-toolbar-tray=\"toolbar-item-devel-tray\" hidden></div>
    </div>
    <div class=\"toolbar-tab--toolbar-item-user\" hidden>
      <a id=\"toolbar-item-user\" class=\"toolbar-item\" data-toolbar-tray=\"toolbar-item-user-tray\" hidden></a>
      <div id=\"toolbar-item-user-tray\" class=\"toolbar-tray\" data-toolbar-tray=\"toolbar-item-user-tray\" hidden></div>
    </div>
    <div class=\"toolbar-toggle-orientation\" hidden>
      <button hidden></button>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gin/navigation/fix-toolbar-js-error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gin/navigation/fix-toolbar-js-error.html.twig", "/var/www/html/Tech_ocean/web/themes/contrib/gin/templates/navigation/fix-toolbar-js-error.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
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
