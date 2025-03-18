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

/* @gin_toolbar/toolbar--gin--secondary--frontend.html.twig */
class __TwigTemplate_b0e9e7de88462f06a156101baa7f34a7 extends Template
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
        // line 1
        echo "<div class=\"gin-secondary-toolbar gin-secondary-toolbar--frontend\" data-offset-top>
  <div class=\"gin-secondary-toolbar__layout-container\">
    <div class=\"gin-breadcrumb-wrapper\">
      <div class=\"region-breadcrumb\">
        <nav class=\"gin-breadcrumb\" role=\"navigation\" aria-labelledby=\"gin-system-breadcrumb\">
          <h2 id=\"gin-system-breadcrumb\" class=\"visually-hidden\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
        echo "</h2>
          <ol class=\"gin-breadcrumb__list\">
            <li class=\"gin-breadcrumb__item\">
              ";
        // line 9
        if ((($context["entity_edit_url"] ?? null) && ($context["entity_title"] ?? null))) {
            // line 10
            echo "                <a class=\"gin-breadcrumb__link gin-back-to-admin\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_edit_url"] ?? null), 10, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit %title", ["%title" => ($context["entity_title"] ?? null)]));
            echo "</a>
              ";
        } else {
            // line 12
            echo "                <a class=\"gin-breadcrumb__link gin-back-to-admin\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content"));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Administration"));
            echo "</a>
              ";
        }
        // line 14
        echo "            </li>
          </ol>
        </nav>
      </div>
    </div>
    ";
        // line 19
        if (($context["core_navigation"] ?? null)) {
            // line 20
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gin_secondary_toolbar"] ?? null), 20, $this->source), "html", null, true);
            echo "
    ";
        } else {
            // line 22
            echo "      ";
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("@gin/navigation/toolbar--gin--secondary.html.twig", "@gin_toolbar/toolbar--gin--secondary--frontend.html.twig", 22);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
            // line 23
            echo "    ";
        }
        // line 24
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gin_toolbar/toolbar--gin--secondary--frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 23,  85 => 22,  79 => 20,  77 => 19,  70 => 14,  62 => 12,  54 => 10,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gin_toolbar/toolbar--gin--secondary--frontend.html.twig", "/var/www/html/Tech_ocean/web/modules/contrib/gin_toolbar/templates/toolbar--gin--secondary--frontend.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "include" => 22);
        static $filters = array("t" => 6, "escape" => 10);
        static $functions = array("path" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['t', 'escape'],
                ['path']
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
