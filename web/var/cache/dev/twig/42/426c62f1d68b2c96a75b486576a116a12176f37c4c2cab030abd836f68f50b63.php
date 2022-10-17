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

/* User/delete.html.twig */
class __TwigTemplate_00e7334821372b8dc241980e9eec038434f479964076e70db75ffaa38cb97a74 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/delete.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/customcss/css/background.css\">
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/customcss/css/body.css\">
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/customcss/css/footer.css\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/customcss/css/header.css\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/customcss/css/forms.css\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/customcss/css/button.css\">


";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "
<div class=\"body\">
<form action=\"#\">
    <br><br>
    <div>
        <label class=\"desc\" id=\"title1\" for=\"Field1\">Jmeno</label>
        <div>
            <input id=\"Field1\" name=\"Field1\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\">
        </div>
    </div>

    <div>
        <label class=\"desc\" id=\"title1\" for=\"Field1\">Prijmeni</label>
        <div>
            <input id=\"Field1\" name=\"Field1\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\">
        </div>
    </div>

    <div>
        <label class=\"desc\" id=\"title3\" for=\"Field3\">
            Email
        </label>
        <div>
            <input id=\"Field3\" name=\"Field3\" type=\"email\" spellcheck=\"false\" value=\"\" maxlength=\"255\" tabindex=\"3\">
        </div>
    </div>

    <div>
        <fieldset>

            <legend id=\"title5\" class=\"desc\">
                Select a Choice
            </legend>

            <div>
                <input id=\"radioDefault_5\" name=\"Field5\" type=\"hidden\" value=\"\">
                    <div>
                        <input id=\"Field5_0\" name=\"Field5\" type=\"radio\" value=\"First Choice\" tabindex=\"5\" checked=\"checked\">
                            <label class=\"choice\" for=\"Field5_0\">First Choice</label>
                    </div>
                    <div>
                        <input id=\"Field5_1\" name=\"Field5\" type=\"radio\" value=\"Second Choice\" tabindex=\"6\">
                            <label class=\"choice\" for=\"Field5_1\">Second Choice</label>
                    </div>
                    <div>
                        <input id=\"Field5_2\" name=\"Field5\" type=\"radio\" value=\"Third Choice\" tabindex=\"7\">
                            <label class=\"choice\" for=\"Field5_2\">Third Choice</label>
                    </div>
            </div>
        </fieldset>
    </div>

    <div>
        <fieldset>
            <legend id=\"title6\" class=\"desc\">
                Check All That Apply
            </legend>
            <div>
                <div>
                    <input id=\"Field6\" name=\"Field6\" type=\"checkbox\" value=\"First Choice\" tabindex=\"8\">
                        <label class=\"choice\" for=\"Field6\">First Choice</label>
                </div>
                <div>
                    <input id=\"Field7\" name=\"Field7\" type=\"checkbox\" value=\"Second Choice\" tabindex=\"9\">
                        <label class=\"choice\" for=\"Field7\">Second Choice</label>
                </div>
                <div>
                    <input id=\"Field8\" name=\"Field8\" type=\"checkbox\" value=\"Third Choice\" tabindex=\"10\">
                        <label class=\"choice\" for=\"Field8\">Third Choice</label>
                    </span>
                </div>
            </div>
        </fieldset>
    </div>

    <div>
        <label class=\"desc\" id=\"title106\" for=\"Field106\">
            Select a Choice
        </label>
        <div>
            <select id=\"Field106\" name=\"Field106\" class=\"field select medium\" tabindex=\"11\">
                <option value=\"male\">Muz</option>
                <option value=\"female\">Zena</option>
                <option value=\"other\">Jine</option>
            </select>
        </div>
    </div>

    <div>
        <div>
            <input class=\"btn\" id=\"saveForm\" name=\"saveForm\" type=\"submit\" value=\"Submit\">
        </div>
    </div>

</form>
</div>


";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("User/header.html.twig", "User/delete.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "
    ";
        // line 114
        $this->loadTemplate("User/footer.html.twig", "User/delete.html.twig", 114)->display($context);
        // line 115
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 115,  223 => 114,  220 => 113,  210 => 112,  199 => 12,  197 => 11,  194 => 10,  184 => 9,  174 => 112,  74 => 14,  72 => 9,  66 => 6,  62 => 5,  58 => 4,  54 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ url(\"homepage_default\") }}layouts/customcss/css/background.css\">
<link rel=\"stylesheet\" href=\"{{ url(\"homepage_default\") }}layouts/customcss/css/body.css\">
<link rel=\"stylesheet\" href=\"{{ url(\"homepage_default\") }}layouts/customcss/css/footer.css\">
<link rel=\"stylesheet\" href=\"{{ url(\"homepage_default\") }}layouts/customcss/css/header.css\">
<link rel=\"stylesheet\" href=\"{{ url(\"homepage_default\") }}layouts/customcss/css/forms.css\">
<link rel=\"stylesheet\" href=\"{{ url(\"homepage_default\") }}layouts/customcss/css/button.css\">


{% block header %}

    {% include \"User/header.html.twig\" %}

{% endblock %}

<div class=\"body\">
<form action=\"#\">
    <br><br>
    <div>
        <label class=\"desc\" id=\"title1\" for=\"Field1\">Jmeno</label>
        <div>
            <input id=\"Field1\" name=\"Field1\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\">
        </div>
    </div>

    <div>
        <label class=\"desc\" id=\"title1\" for=\"Field1\">Prijmeni</label>
        <div>
            <input id=\"Field1\" name=\"Field1\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\">
        </div>
    </div>

    <div>
        <label class=\"desc\" id=\"title3\" for=\"Field3\">
            Email
        </label>
        <div>
            <input id=\"Field3\" name=\"Field3\" type=\"email\" spellcheck=\"false\" value=\"\" maxlength=\"255\" tabindex=\"3\">
        </div>
    </div>

    <div>
        <fieldset>

            <legend id=\"title5\" class=\"desc\">
                Select a Choice
            </legend>

            <div>
                <input id=\"radioDefault_5\" name=\"Field5\" type=\"hidden\" value=\"\">
                    <div>
                        <input id=\"Field5_0\" name=\"Field5\" type=\"radio\" value=\"First Choice\" tabindex=\"5\" checked=\"checked\">
                            <label class=\"choice\" for=\"Field5_0\">First Choice</label>
                    </div>
                    <div>
                        <input id=\"Field5_1\" name=\"Field5\" type=\"radio\" value=\"Second Choice\" tabindex=\"6\">
                            <label class=\"choice\" for=\"Field5_1\">Second Choice</label>
                    </div>
                    <div>
                        <input id=\"Field5_2\" name=\"Field5\" type=\"radio\" value=\"Third Choice\" tabindex=\"7\">
                            <label class=\"choice\" for=\"Field5_2\">Third Choice</label>
                    </div>
            </div>
        </fieldset>
    </div>

    <div>
        <fieldset>
            <legend id=\"title6\" class=\"desc\">
                Check All That Apply
            </legend>
            <div>
                <div>
                    <input id=\"Field6\" name=\"Field6\" type=\"checkbox\" value=\"First Choice\" tabindex=\"8\">
                        <label class=\"choice\" for=\"Field6\">First Choice</label>
                </div>
                <div>
                    <input id=\"Field7\" name=\"Field7\" type=\"checkbox\" value=\"Second Choice\" tabindex=\"9\">
                        <label class=\"choice\" for=\"Field7\">Second Choice</label>
                </div>
                <div>
                    <input id=\"Field8\" name=\"Field8\" type=\"checkbox\" value=\"Third Choice\" tabindex=\"10\">
                        <label class=\"choice\" for=\"Field8\">Third Choice</label>
                    </span>
                </div>
            </div>
        </fieldset>
    </div>

    <div>
        <label class=\"desc\" id=\"title106\" for=\"Field106\">
            Select a Choice
        </label>
        <div>
            <select id=\"Field106\" name=\"Field106\" class=\"field select medium\" tabindex=\"11\">
                <option value=\"male\">Muz</option>
                <option value=\"female\">Zena</option>
                <option value=\"other\">Jine</option>
            </select>
        </div>
    </div>

    <div>
        <div>
            <input class=\"btn\" id=\"saveForm\" name=\"saveForm\" type=\"submit\" value=\"Submit\">
        </div>
    </div>

</form>
</div>


{% block footer %}

    {% include \"User/footer.html.twig\" %}

{% endblock %}", "User/delete.html.twig", "/var/www/html/templates/User/delete.html.twig");
    }
}
