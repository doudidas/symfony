<?php

/* default/bienvenue.html.twig */
class __TwigTemplate_36b95b6c675463bf55fc66c0d5814f814680a0d8a6f1cc54a3f3f3ac45baf7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/bienvenue.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dfdd10fe18356a4dede2f796dfdbb2961d9037b0bab6742745758362dba5c18 = $this->env->getExtension("native_profiler");
        $__internal_4dfdd10fe18356a4dede2f796dfdbb2961d9037b0bab6742745758362dba5c18->enter($__internal_4dfdd10fe18356a4dede2f796dfdbb2961d9037b0bab6742745758362dba5c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/bienvenue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dfdd10fe18356a4dede2f796dfdbb2961d9037b0bab6742745758362dba5c18->leave($__internal_4dfdd10fe18356a4dede2f796dfdbb2961d9037b0bab6742745758362dba5c18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e82260cce2019cd1280d798f51d791f72deee05065bdcaca2338232eaa905363 = $this->env->getExtension("native_profiler");
        $__internal_e82260cce2019cd1280d798f51d791f72deee05065bdcaca2338232eaa905363->enter($__internal_e82260cce2019cd1280d798f51d791f72deee05065bdcaca2338232eaa905363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div style=\"padding-bottom:100px\"> </div>
    <div class=\"container\">
      <div class=\"jumbotron\">
        <h1> Bienvenue </h1>
        <p> veuillez vous identifier pour utiliser des actions avancées </br>
           code couleur <span style=\"color:red\">webmaster</span>, <span style=\"color:orange\">manager</span>, <span style=\"color:gray\">seller</span></p>
        <p> vous etes actuellement identifié comme:  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</p>
        <a href=\"/login\"><button type=\"button\" class=\"btn btn\">login</button></a>
        <a href=\"/register\"><button type=\"button\" class=\"btn btn\">sign in</button></a>
    </div>
  </div>

  ";
        
        $__internal_e82260cce2019cd1280d798f51d791f72deee05065bdcaca2338232eaa905363->leave($__internal_e82260cce2019cd1280d798f51d791f72deee05065bdcaca2338232eaa905363_prof);

    }

    public function getTemplateName()
    {
        return "default/bienvenue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div style="padding-bottom:100px"> </div>*/
/*     <div class="container">*/
/*       <div class="jumbotron">*/
/*         <h1> Bienvenue </h1>*/
/*         <p> veuillez vous identifier pour utiliser des actions avancées </br>*/
/*            code couleur <span style="color:red">webmaster</span>, <span style="color:orange">manager</span>, <span style="color:gray">seller</span></p>*/
/*         <p> vous etes actuellement identifié comme:  {{app.user}}</p>*/
/*         <a href="/login"><button type="button" class="btn btn">login</button></a>*/
/*         <a href="/register"><button type="button" class="btn btn">sign in</button></a>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% endblock %}*/
/* */
