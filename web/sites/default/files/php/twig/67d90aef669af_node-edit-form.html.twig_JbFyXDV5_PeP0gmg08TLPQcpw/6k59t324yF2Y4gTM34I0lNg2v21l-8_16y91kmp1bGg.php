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

/* themes/contrib/gin/templates/node/node-edit-form.html.twig */
class __TwigTemplate_19e9a4b84962c82374d57337e2110ed8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'secondary' => [$this, 'block_secondary'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "is_ajax_request", [], "any", false, false, true, 18)) {
            // line 19
            echo "  ";
            $this->displayBlock('main', $context, $blocks);
            // line 22
            echo "
  ";
            // line 23
            $this->displayBlock('secondary', $context, $blocks);
            // line 26
            echo "
  ";
            // line 27
            $this->displayBlock('footer', $context, $blocks);
        } else {
            // line 32
            echo "  <div class=\"layout-node-form clearfix\">
    <div class=\"layout-region layout-region-node-main\">
      ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 34, $this->source), "advanced", "footer", "gin_actions", "gin_sidebar", "gin_sidebar_toggle"), "html", null, true);
            echo "
    </div>
    <div class=\"layout-region layout-region-node-secondary\" id=\"gin_sidebar\" tabindex=\"0\">
      <span class=\"gin-sidebar-draggable\" id=\"gin-sidebar-draggable\"></span>
      <div class=\"layout-region__content\">
        ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
        ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gin_sidebar_toggle", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
  ";
            // line 44
            if ((($context["gin_layout_paragraphs"] ?? null) == 1)) {
                // line 45
                echo "    <style>
      .layout-node-form {
        --gin-lp-layout: \"";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Layout"));
                echo "\";
        --gin-lp-content: \"";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Content"));
                echo "\";
      }
    </style>
  ";
            }
        }
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 20, $this->source), "advanced", "footer", "actions"), "html", null, true);
        echo "
  ";
    }

    // line 23
    public function block_secondary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 27
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "footer", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
    ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/node/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 29,  127 => 28,  123 => 27,  116 => 24,  112 => 23,  105 => 20,  101 => 19,  91 => 48,  87 => 47,  83 => 45,  81 => 44,  74 => 40,  70 => 39,  62 => 34,  58 => 32,  55 => 27,  52 => 26,  50 => 23,  47 => 22,  44 => 19,  42 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/node/node-edit-form.html.twig", "/var/www/html/Tech_ocean/web/themes/contrib/gin/templates/node/node-edit-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "block" => 19);
        static $filters = array("escape" => 34, "without" => 34, "t" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'without', 't'],
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
