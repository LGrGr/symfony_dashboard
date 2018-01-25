<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3a23302be586c5076dedb514021ead18fb8f8758c02ea5bbe4e74a3284b8f5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a872217d7ea135c8b63bd914d100f72ebdb7bb384eaaf4f3f985e8f8422c1060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a872217d7ea135c8b63bd914d100f72ebdb7bb384eaaf4f3f985e8f8422c1060->enter($__internal_a872217d7ea135c8b63bd914d100f72ebdb7bb384eaaf4f3f985e8f8422c1060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a872217d7ea135c8b63bd914d100f72ebdb7bb384eaaf4f3f985e8f8422c1060->leave($__internal_a872217d7ea135c8b63bd914d100f72ebdb7bb384eaaf4f3f985e8f8422c1060_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be4b36389f2d32ddc16535cd9f6cf8d45aef0ea09e449e9699804cbb4f26c31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4b36389f2d32ddc16535cd9f6cf8d45aef0ea09e449e9699804cbb4f26c31f->enter($__internal_be4b36389f2d32ddc16535cd9f6cf8d45aef0ea09e449e9699804cbb4f26c31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_be4b36389f2d32ddc16535cd9f6cf8d45aef0ea09e449e9699804cbb4f26c31f->leave($__internal_be4b36389f2d32ddc16535cd9f6cf8d45aef0ea09e449e9699804cbb4f26c31f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9029307d48bc62f8fb9c3dd96543131a6fd6b67a9e42e071dad2af281c63e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9029307d48bc62f8fb9c3dd96543131a6fd6b67a9e42e071dad2af281c63e5b->enter($__internal_a9029307d48bc62f8fb9c3dd96543131a6fd6b67a9e42e071dad2af281c63e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a9029307d48bc62f8fb9c3dd96543131a6fd6b67a9e42e071dad2af281c63e5b->leave($__internal_a9029307d48bc62f8fb9c3dd96543131a6fd6b67a9e42e071dad2af281c63e5b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d8aebba12437d1c96ef891993244e5ae93f2c849b153b98b5bef290f4b47f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8aebba12437d1c96ef891993244e5ae93f2c849b153b98b5bef290f4b47f4d->enter($__internal_5d8aebba12437d1c96ef891993244e5ae93f2c849b153b98b5bef290f4b47f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d8aebba12437d1c96ef891993244e5ae93f2c849b153b98b5bef290f4b47f4d->leave($__internal_5d8aebba12437d1c96ef891993244e5ae93f2c849b153b98b5bef290f4b47f4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/stagiaire/Bureau/dashboard/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
