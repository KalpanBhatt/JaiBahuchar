<?php

/* @CoreUpdater/layout.twig */
class __TwigTemplate_c9536a53248dc181e60cc6727be39ca7409e8caddfc89055aa20a1fee117141e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; ";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")))) : (call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")))), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />
    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=CoreUpdater&action=getUpdaterCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=CoreUpdater&action=getUpdaterJs\"></script>

    <script type=\"text/javascript\">";
        // line 13
        echo Piwik\Translate::getJavascriptTranslations();
        echo "</script>

    ";
        // line 15
        $this->loadTemplate("@CoreHome/_favicon.twig", "@CoreUpdater/layout.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "@CoreUpdater/layout.twig", 16)->display($context);
        // line 17
        echo "</head>
<body id=\"simple\" ng-app=\"app\">


<div class=\"logo\">
    ";
        // line 22
        if ((isset($context["hasSVGLogo"]) ? $context["hasSVGLogo"] : $this->getContext($context, "hasSVGLogo"))) {
            // line 23
            echo "        <img src='";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoSVG"]) ? $context["logoSVG"] : $this->getContext($context, "logoSVG")), "html", null, true);
            echo "' tabindex=\"3\"
             alt=\"";
            // line 24
            if ((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PoweredBy")), "html", null, true);
                echo " ";
            }
            echo "Piwik\"
             class=\"";
            // line 25
            if ( !(isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
                echo "default-piwik-logo";
            }
            echo "\" />
    ";
        } else {
            // line 27
            echo "        <img src='";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoHeader"]) ? $context["logoHeader"] : $this->getContext($context, "logoHeader")), "html", null, true);
            echo "' alt=\"";
            if ((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PoweredBy")), "html", null, true);
                echo " ";
            }
            echo "Piwik\" />
    ";
        }
        // line 29
        echo "</div>

<div class=\"box\">
    ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "</div>

</body>
</html>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  101 => 32,  93 => 34,  91 => 32,  86 => 29,  75 => 27,  68 => 25,  61 => 24,  56 => 23,  54 => 22,  47 => 17,  44 => 16,  42 => 15,  37 => 13,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; {{ pageTitle|default('CoreUpdater_UpdateTitle'|translate) }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />
    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=CoreUpdater&action=getUpdaterCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=CoreUpdater&action=getUpdaterJs\"></script>

    <script type=\"text/javascript\">{{ getJavascriptTranslations()|raw }}</script>

    {% include \"@CoreHome/_favicon.twig\" %}
    {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
</head>
<body id=\"simple\" ng-app=\"app\">


<div class=\"logo\">
    {% if hasSVGLogo %}
        <img src='{{ logoSVG }}' tabindex=\"3\"
             alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Piwik\"
             class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" />
    {% else %}
        <img src='{{ logoHeader }}' alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Piwik\" />
    {% endif %}
</div>

<div class=\"box\">
    {% block content %}
    {% endblock %}
</div>

</body>
</html>
", "@CoreUpdater/layout.twig", "/home/jatan/public_html/piwik/plugins/CoreUpdater/templates/layout.twig");
    }
}
