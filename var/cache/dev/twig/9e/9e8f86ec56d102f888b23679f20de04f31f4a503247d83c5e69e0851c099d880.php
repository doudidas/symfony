<?php

/* default/test.html.twig */
class __TwigTemplate_15952a2f8a8691218135502e8c156a3e26d1e46c7a30937280173a47023055e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/test.html.twig", 1);
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
        $__internal_d299f1289f7b99e1c97e883a15fa7fda14b32206ad1ea58dd56990fed79b64ff = $this->env->getExtension("native_profiler");
        $__internal_d299f1289f7b99e1c97e883a15fa7fda14b32206ad1ea58dd56990fed79b64ff->enter($__internal_d299f1289f7b99e1c97e883a15fa7fda14b32206ad1ea58dd56990fed79b64ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d299f1289f7b99e1c97e883a15fa7fda14b32206ad1ea58dd56990fed79b64ff->leave($__internal_d299f1289f7b99e1c97e883a15fa7fda14b32206ad1ea58dd56990fed79b64ff_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c1389ca92733671318684dec29d20889ce6abc57f23a67ede40bcbd27130c3 = $this->env->getExtension("native_profiler");
        $__internal_33c1389ca92733671318684dec29d20889ce6abc57f23a67ede40bcbd27130c3->enter($__internal_33c1389ca92733671318684dec29d20889ce6abc57f23a67ede40bcbd27130c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"wrapper\">
    <div class=\"container\">
      <h1> Page de test </h1>
      <p> Ceci est la page de test. Accrochez-vous !</p>
    </div>
  </div>
";
        
        $__internal_33c1389ca92733671318684dec29d20889ce6abc57f23a67ede40bcbd27130c3->leave($__internal_33c1389ca92733671318684dec29d20889ce6abc57f23a67ede40bcbd27130c3_prof);

    }

    public function getTemplateName()
    {
        return "default/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig'%}*/
/* {% block body %}*/
/*   <div class="wrapper">*/
/*     <div class="container">*/
/*       <h1> Page de test </h1>*/
/*       <p> Ceci est la page de test. Accrochez-vous !</p>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
