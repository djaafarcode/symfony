<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
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
        $__internal_35ed3235e788efd25eb7ce9de0c0b76ff7d755c0080461260c8970c480835860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ed3235e788efd25eb7ce9de0c0b76ff7d755c0080461260c8970c480835860->enter($__internal_35ed3235e788efd25eb7ce9de0c0b76ff7d755c0080461260c8970c480835860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_996cacedeacd603ea7fd9fa59f1e51e543f612e1273abcdc0d9fc10ac76bf518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996cacedeacd603ea7fd9fa59f1e51e543f612e1273abcdc0d9fc10ac76bf518->enter($__internal_996cacedeacd603ea7fd9fa59f1e51e543f612e1273abcdc0d9fc10ac76bf518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_35ed3235e788efd25eb7ce9de0c0b76ff7d755c0080461260c8970c480835860->leave($__internal_35ed3235e788efd25eb7ce9de0c0b76ff7d755c0080461260c8970c480835860_prof);

        
        $__internal_996cacedeacd603ea7fd9fa59f1e51e543f612e1273abcdc0d9fc10ac76bf518->leave($__internal_996cacedeacd603ea7fd9fa59f1e51e543f612e1273abcdc0d9fc10ac76bf518_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da38d36c377d70cd92e80d2006e38a86e77489de3e2471efb29a7437c0f11b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da38d36c377d70cd92e80d2006e38a86e77489de3e2471efb29a7437c0f11b16->enter($__internal_da38d36c377d70cd92e80d2006e38a86e77489de3e2471efb29a7437c0f11b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_416398ab69779ab125fd6e6f176133d2481c59ae2da9d12f5d0f2eb5ca075236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416398ab69779ab125fd6e6f176133d2481c59ae2da9d12f5d0f2eb5ca075236->enter($__internal_416398ab69779ab125fd6e6f176133d2481c59ae2da9d12f5d0f2eb5ca075236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_416398ab69779ab125fd6e6f176133d2481c59ae2da9d12f5d0f2eb5ca075236->leave($__internal_416398ab69779ab125fd6e6f176133d2481c59ae2da9d12f5d0f2eb5ca075236_prof);

        
        $__internal_da38d36c377d70cd92e80d2006e38a86e77489de3e2471efb29a7437c0f11b16->leave($__internal_da38d36c377d70cd92e80d2006e38a86e77489de3e2471efb29a7437c0f11b16_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd0c4850efb789e24b24588ef1f15cee827e865c1e0de4bc4c93aec787a750dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0c4850efb789e24b24588ef1f15cee827e865c1e0de4bc4c93aec787a750dd->enter($__internal_fd0c4850efb789e24b24588ef1f15cee827e865c1e0de4bc4c93aec787a750dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db8e9021207ecbd220833e0022fc7525f443a284f6ba60cf72d194b46ef7fa23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8e9021207ecbd220833e0022fc7525f443a284f6ba60cf72d194b46ef7fa23->enter($__internal_db8e9021207ecbd220833e0022fc7525f443a284f6ba60cf72d194b46ef7fa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_db8e9021207ecbd220833e0022fc7525f443a284f6ba60cf72d194b46ef7fa23->leave($__internal_db8e9021207ecbd220833e0022fc7525f443a284f6ba60cf72d194b46ef7fa23_prof);

        
        $__internal_fd0c4850efb789e24b24588ef1f15cee827e865c1e0de4bc4c93aec787a750dd->leave($__internal_fd0c4850efb789e24b24588ef1f15cee827e865c1e0de4bc4c93aec787a750dd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9833d3c7ed57d0861835afc3089d894c732d48141aca5608ad0c2b0220a174cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9833d3c7ed57d0861835afc3089d894c732d48141aca5608ad0c2b0220a174cd->enter($__internal_9833d3c7ed57d0861835afc3089d894c732d48141aca5608ad0c2b0220a174cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c2ffa772c54578d3c0eb7e3206992e5974caf9cd94d75d00c3801af8d3c013d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2ffa772c54578d3c0eb7e3206992e5974caf9cd94d75d00c3801af8d3c013d->enter($__internal_1c2ffa772c54578d3c0eb7e3206992e5974caf9cd94d75d00c3801af8d3c013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c2ffa772c54578d3c0eb7e3206992e5974caf9cd94d75d00c3801af8d3c013d->leave($__internal_1c2ffa772c54578d3c0eb7e3206992e5974caf9cd94d75d00c3801af8d3c013d_prof);

        
        $__internal_9833d3c7ed57d0861835afc3089d894c732d48141aca5608ad0c2b0220a174cd->leave($__internal_9833d3c7ed57d0861835afc3089d894c732d48141aca5608ad0c2b0220a174cd_prof);

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
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
", "@Twig/layout.html.twig", "/Library/WebServer/Documents/solo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
