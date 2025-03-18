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

/* modules/contrib/gin_toolbar/templates/toolbar.html.twig */
class __TwigTemplate_4d81ede10b4b0090c934c56f2938cc13 extends Template
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
        // line 7
        if (($context["core_navigation"] ?? null)) {
            // line 8
            echo "  ";
            if (($context["secondary_toolbar_frontend"] ?? null)) {
                // line 9
                echo "    ";
                $__internal_compile_0 = null;
                try {
                    $__internal_compile_0 =                     $this->loadTemplate("@gin/navigation/toolbar--gin--secondary.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 9);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_0) {
                    $__internal_compile_0->display($context);
                }
                // line 10
                echo "  ";
            }
        } else {
            // line 12
            echo "  ";
            $__internal_compile_1 = null;
            try {
                $__internal_compile_1 =                 $this->loadTemplate("@gin/navigation/toolbar--gin.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 12);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_1) {
                $__internal_compile_1->display($context);
            }
            // line 13
            echo "
  ";
            // line 14
            if ((($context["secondary_toolbar_frontend"] ?? null) && (($context["toolbar_variant"] ?? null) != "classic"))) {
                // line 15
                echo "    ";
                $__internal_compile_2 = null;
                try {
                    $__internal_compile_2 =                     $this->loadTemplate("@gin_toolbar/toolbar--gin--secondary--frontend.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 15);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_2) {
                    $__internal_compile_2->display($context);
                }
                // line 16
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/gin_toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  75 => 15,  73 => 14,  70 => 13,  59 => 12,  55 => 10,  44 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", "/var/www/html/Tech_ocean/web/modules/contrib/gin_toolbar/templates/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "include" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
