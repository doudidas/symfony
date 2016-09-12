<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1f4e5e2c918e6c40469ef3b3ccf7233046a1d221987f41c8c1c0786b0bf667b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5a945da33da0b137b76b86795a6d5bbeea14e3e95e62d9e4f18a44cd9d3fdccf = $this->env->getExtension("native_profiler");
        $__internal_5a945da33da0b137b76b86795a6d5bbeea14e3e95e62d9e4f18a44cd9d3fdccf->enter($__internal_5a945da33da0b137b76b86795a6d5bbeea14e3e95e62d9e4f18a44cd9d3fdccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a945da33da0b137b76b86795a6d5bbeea14e3e95e62d9e4f18a44cd9d3fdccf->leave($__internal_5a945da33da0b137b76b86795a6d5bbeea14e3e95e62d9e4f18a44cd9d3fdccf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e8217b9b6444154772726327968ad1a92a86d1d924a0d92519bcf044a804c87 = $this->env->getExtension("native_profiler");
        $__internal_8e8217b9b6444154772726327968ad1a92a86d1d924a0d92519bcf044a804c87->enter($__internal_8e8217b9b6444154772726327968ad1a92a86d1d924a0d92519bcf044a804c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8e8217b9b6444154772726327968ad1a92a86d1d924a0d92519bcf044a804c87->leave($__internal_8e8217b9b6444154772726327968ad1a92a86d1d924a0d92519bcf044a804c87_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
