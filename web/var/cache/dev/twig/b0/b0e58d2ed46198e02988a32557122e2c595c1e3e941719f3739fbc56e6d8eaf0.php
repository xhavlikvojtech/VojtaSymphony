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

/* User/footer.html.twig */
class __TwigTemplate_2c1ae9d66ed3ac6014ec132334efc813ba6ee3895b815f7f00af77033b576341 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/footer.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <!--Hey! This is the original version
    of Simple CSS Waves-->

    <div class=\"header\">
        <!--Content before waves-->
        <div class=\"inner-header flex\">
        <!--Waves Container-->
        <div>
            <svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                 viewBox=\"0 34 150 10\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">
                <defs>
                    <path id=\"gentle-wave\" d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\" />
                </defs>
                <g class=\"parallax\">
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"rgba(15,160,206,0.7)\" />
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"rgba(15,160,206,0.5)\" />
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"rgba(15,160,206,0.3)\" />
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"#0FA0CE\" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
    <!--Hey! This is the original version
    of Simple CSS Waves-->

    <div class=\"header\">
        <!--Content before waves-->
        <div class=\"inner-header flex\">
        <!--Waves Container-->
        <div>
            <svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                 viewBox=\"0 34 150 10\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">
                <defs>
                    <path id=\"gentle-wave\" d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\" />
                </defs>
                <g class=\"parallax\">
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"rgba(15,160,206,0.7)\" />
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"rgba(15,160,206,0.5)\" />
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"rgba(15,160,206,0.3)\" />
                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"8\" fill=\"#0FA0CE\" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
{% endblock %}", "User/footer.html.twig", "/var/www/html/templates/User/footer.html.twig");
    }
}
