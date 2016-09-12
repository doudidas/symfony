<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a1f08d792981ff2b3d9f6d0020f3120806f5eddfd846d5027b1117992c66de6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ad62b65f1a5ceb0ffb66322b22603c36d7703c37fca3ddc56d024cffcd9be53 = $this->env->getExtension("native_profiler");
        $__internal_3ad62b65f1a5ceb0ffb66322b22603c36d7703c37fca3ddc56d024cffcd9be53->enter($__internal_3ad62b65f1a5ceb0ffb66322b22603c36d7703c37fca3ddc56d024cffcd9be53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad62b65f1a5ceb0ffb66322b22603c36d7703c37fca3ddc56d024cffcd9be53->leave($__internal_3ad62b65f1a5ceb0ffb66322b22603c36d7703c37fca3ddc56d024cffcd9be53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6b50788ff936c93776f75f13b1b64ea2c8456e916d664856335d25a4016e174 = $this->env->getExtension("native_profiler");
        $__internal_b6b50788ff936c93776f75f13b1b64ea2c8456e916d664856335d25a4016e174->enter($__internal_b6b50788ff936c93776f75f13b1b64ea2c8456e916d664856335d25a4016e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6b50788ff936c93776f75f13b1b64ea2c8456e916d664856335d25a4016e174->leave($__internal_b6b50788ff936c93776f75f13b1b64ea2c8456e916d664856335d25a4016e174_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4d85f0d8a61b00b01f9bc95172c0b2cfd6358146e8eeda83edccc2b72d70a34 = $this->env->getExtension("native_profiler");
        $__internal_a4d85f0d8a61b00b01f9bc95172c0b2cfd6358146e8eeda83edccc2b72d70a34->enter($__internal_a4d85f0d8a61b00b01f9bc95172c0b2cfd6358146e8eeda83edccc2b72d70a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4d85f0d8a61b00b01f9bc95172c0b2cfd6358146e8eeda83edccc2b72d70a34->leave($__internal_a4d85f0d8a61b00b01f9bc95172c0b2cfd6358146e8eeda83edccc2b72d70a34_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_96829280f40bf49ac9bf62ead5a5d64895c290a212edd73db1880e14a3acb061 = $this->env->getExtension("native_profiler");
        $__internal_96829280f40bf49ac9bf62ead5a5d64895c290a212edd73db1880e14a3acb061->enter($__internal_96829280f40bf49ac9bf62ead5a5d64895c290a212edd73db1880e14a3acb061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_96829280f40bf49ac9bf62ead5a5d64895c290a212edd73db1880e14a3acb061->leave($__internal_96829280f40bf49ac9bf62ead5a5d64895c290a212edd73db1880e14a3acb061_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
