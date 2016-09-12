<?php

/* itemtype/index.html.twig */
class __TwigTemplate_8102f5648100458205a6ea11a189d62ca8aa8a33e41d81a5dd4650eb5e27a842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "itemtype/index.html.twig", 1);
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
        $__internal_1099cc849db98869a6e51ecbfd54d13e1a43b81a9a8d0cdab6f85f6445edbbe1 = $this->env->getExtension("native_profiler");
        $__internal_1099cc849db98869a6e51ecbfd54d13e1a43b81a9a8d0cdab6f85f6445edbbe1->enter($__internal_1099cc849db98869a6e51ecbfd54d13e1a43b81a9a8d0cdab6f85f6445edbbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itemtype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1099cc849db98869a6e51ecbfd54d13e1a43b81a9a8d0cdab6f85f6445edbbe1->leave($__internal_1099cc849db98869a6e51ecbfd54d13e1a43b81a9a8d0cdab6f85f6445edbbe1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2960e569544e0d000c1dd7296a0c0896e69806ccbad40dbe2e1234df01e3c9a0 = $this->env->getExtension("native_profiler");
        $__internal_2960e569544e0d000c1dd7296a0c0896e69806ccbad40dbe2e1234df01e3c9a0->enter($__internal_2960e569544e0d000c1dd7296a0c0896e69806ccbad40dbe2e1234df01e3c9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"container\">
    <h1>Nos Types</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itemtypes"]) ? $context["itemtypes"] : $this->getContext($context, "itemtypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["itemtype"]) {
            // line 6
            echo "      <div class=\"jumbotron\">
        <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemtype"], "id", array()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemtype"], "manufacturer", array()), "html", null, true);
            echo "</h2>
        <h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemtype"], "model", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemtype"], "description", array()), "html", null, true);
            echo "</br>
        <button
          onclick=\"javascripts:delete_type(";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemtype"], "id", array()), "html", null, true);
            echo ");\"
          type=\"button\"
          class=\"btn btn-danger btn-sm\">Supprimer</button>
          <small style=\"color:orange\">manager</small>
        </p>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemtype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <script>
      function delete_type(id) {
        toto = '/manager/itemtype/del' + id;
        \$(location).attr('href', toto);
        return 0;
      }
      </script>
  ";
        
        $__internal_2960e569544e0d000c1dd7296a0c0896e69806ccbad40dbe2e1234df01e3c9a0->leave($__internal_2960e569544e0d000c1dd7296a0c0896e69806ccbad40dbe2e1234df01e3c9a0_prof);

    }

    public function getTemplateName()
    {
        return "itemtype/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  66 => 11,  61 => 9,  57 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*   <div class="container">*/
/*     <h1>Nos Types</h1>*/
/*     {% for itemtype in itemtypes %}*/
/*       <div class="jumbotron">*/
/*         <h2>{{itemtype.id}}:{{itemtype.manufacturer}}</h2>*/
/*         <h3>{{itemtype.model }}</h3>*/
/*         <p>{{itemtype.description}}</br>*/
/*         <button*/
/*           onclick="javascripts:delete_type({{itemtype.id}});"*/
/*           type="button"*/
/*           class="btn btn-danger btn-sm">Supprimer</button>*/
/*           <small style="color:orange">manager</small>*/
/*         </p>*/
/*       </div>*/
/*     {% endfor %}*/
/*     <script>*/
/*       function delete_type(id) {*/
/*         toto = '/manager/itemtype/del' + id;*/
/*         $(location).attr('href', toto);*/
/*         return 0;*/
/*       }*/
/*       </script>*/
/*   {% endblock %}*/
/* */
