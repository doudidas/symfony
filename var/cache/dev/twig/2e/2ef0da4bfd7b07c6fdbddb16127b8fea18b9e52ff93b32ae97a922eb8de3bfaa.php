<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ccfefc848e18344e143870bc4012de21502278f846b0c935de92867f3c35b36c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89cfbc45e720b23f0a30b62afc1f332f0535656d20677385e2a86a7157176694 = $this->env->getExtension("native_profiler");
        $__internal_89cfbc45e720b23f0a30b62afc1f332f0535656d20677385e2a86a7157176694->enter($__internal_89cfbc45e720b23f0a30b62afc1f332f0535656d20677385e2a86a7157176694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89cfbc45e720b23f0a30b62afc1f332f0535656d20677385e2a86a7157176694->leave($__internal_89cfbc45e720b23f0a30b62afc1f332f0535656d20677385e2a86a7157176694_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17db2565e176dc219aeccbd6dd0e9702b3ad17ae0f5a0892750799a711d055cd = $this->env->getExtension("native_profiler");
        $__internal_17db2565e176dc219aeccbd6dd0e9702b3ad17ae0f5a0892750799a711d055cd->enter($__internal_17db2565e176dc219aeccbd6dd0e9702b3ad17ae0f5a0892750799a711d055cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_17db2565e176dc219aeccbd6dd0e9702b3ad17ae0f5a0892750799a711d055cd->leave($__internal_17db2565e176dc219aeccbd6dd0e9702b3ad17ae0f5a0892750799a711d055cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
