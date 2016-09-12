<?php

/* stock/index.html.twig */
class __TwigTemplate_c7189b0a355ea7812541d29d19c1eeb0765c2f4847e36cd158ac6032880e1369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "stock/index.html.twig", 1);
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
        $__internal_b008e8a6b871634fc7a2b120e251f6a23b1ca44467146cd5a269f92a5cc8f549 = $this->env->getExtension("native_profiler");
        $__internal_b008e8a6b871634fc7a2b120e251f6a23b1ca44467146cd5a269f92a5cc8f549->enter($__internal_b008e8a6b871634fc7a2b120e251f6a23b1ca44467146cd5a269f92a5cc8f549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b008e8a6b871634fc7a2b120e251f6a23b1ca44467146cd5a269f92a5cc8f549->leave($__internal_b008e8a6b871634fc7a2b120e251f6a23b1ca44467146cd5a269f92a5cc8f549_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0608da9ccf5c125cf369d9705d7e1c2bb77618f7cf0273faeed9e3587ecd1412 = $this->env->getExtension("native_profiler");
        $__internal_0608da9ccf5c125cf369d9705d7e1c2bb77618f7cf0273faeed9e3587ecd1412->enter($__internal_0608da9ccf5c125cf369d9705d7e1c2bb77618f7cf0273faeed9e3587ecd1412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"container\">
    <h1>Nos stocks</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) ? $context["stocks"] : $this->getContext($context, "stocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 6
            echo "      <div class=\"jumbotron\">
        <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["stock"], "item", array()), "id", array()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["stock"], "item", array()), "model", array()), "html", null, true);
            echo "
          <small>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["stock"], "item", array()), "manufacturer", array()), "html", null, true);
            echo "</small>
        </h2>
        <p>
          ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["stock"], "item", array()), "description", array()), "html", null, true);
            echo "</p>
        <button
          onclick=\"javascripts:delete_stock(";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "minstock", array()), "html", null, true);
            echo ");\"
          class=\"btn btn-warning btn-sm \">Retirer</button>
            <small style=\"color:orange\">manager</small>
        <h2>Information sur le stocks</h2>
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>prix</th>
              <th>stock actuel</th>
              <th>stock minimum</th>
              <th>Ajouter stock</th>
              <th>Diminuer stock</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "sellprice", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "currentstock", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "minstock", array()), "html", null, true);
            echo "</td>
              <td>
                <button
                  onclick=\"javascripts:ajouterstock(";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "id", array()), "html", null, true);
            echo ");\"
                  type=\"button\"
                  class=\"btn btn-success btn-sm\"
                  value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "minstock", array()), "html", null, true);
            echo "\">Ajouter</button>
                    <small style=\"color:gray\">seller</small>
              </td>
              <td>
                <button
                  onclick=\"javascripts:diminuerstock(";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "id", array()), "html", null, true);
            echo ");\"
                  type=\"button\"
                  class=\"btn btn-danger btn-sm\">Retirer</button>
                    <small style=\"color:gray\">seller</small>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <script>
        function ajouterstock(id) {
          toto = '/seller/stock/inc_stock' + id;
          \$(location).attr('href', toto);
          return 0;
        }
        function diminuerstock(id) {
          toto = '/seller/stock/dim_stock' + id;
          \$(location).attr('href', toto);
          return 0;
        }
        function delete_stock(id, min) {
          if (min == 0) {
            toto = '/manager/stock/del' + id;
            \$(location).attr('href', toto);
          } else {
            alert(\"il reste du stock\");
          }
          return 0;
        }
      </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "  ";
        
        $__internal_0608da9ccf5c125cf369d9705d7e1c2bb77618f7cf0273faeed9e3587ecd1412->leave($__internal_0608da9ccf5c125cf369d9705d7e1c2bb77618f7cf0273faeed9e3587ecd1412_prof);

    }

    public function getTemplateName()
    {
        return "stock/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 73,  117 => 42,  109 => 37,  103 => 34,  97 => 31,  93 => 30,  89 => 29,  68 => 13,  63 => 11,  57 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*   <div class="container">*/
/*     <h1>Nos stocks</h1>*/
/*     {% for stock in stocks %}*/
/*       <div class="jumbotron">*/
/*         <h2>{{stock.item.id}}:{{stock.item.model}}*/
/*           <small>{{stock.item.manufacturer }}</small>*/
/*         </h2>*/
/*         <p>*/
/*           {{stock.item.description}}</p>*/
/*         <button*/
/*           onclick="javascripts:delete_stock({{stock.id}},{{stock.minstock}});"*/
/*           class="btn btn-warning btn-sm ">Retirer</button>*/
/*             <small style="color:orange">manager</small>*/
/*         <h2>Information sur le stocks</h2>*/
/*         <table class="table table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>prix</th>*/
/*               <th>stock actuel</th>*/
/*               <th>stock minimum</th>*/
/*               <th>Ajouter stock</th>*/
/*               <th>Diminuer stock</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td>{{stock.sellprice}}</td>*/
/*               <td>{{stock.currentstock}}</td>*/
/*               <td>{{stock.minstock}}</td>*/
/*               <td>*/
/*                 <button*/
/*                   onclick="javascripts:ajouterstock({{stock.id}});"*/
/*                   type="button"*/
/*                   class="btn btn-success btn-sm"*/
/*                   value="{{stock.minstock}}">Ajouter</button>*/
/*                     <small style="color:gray">seller</small>*/
/*               </td>*/
/*               <td>*/
/*                 <button*/
/*                   onclick="javascripts:diminuerstock({{stock.id}});"*/
/*                   type="button"*/
/*                   class="btn btn-danger btn-sm">Retirer</button>*/
/*                     <small style="color:gray">seller</small>*/
/*               </td>*/
/*             </tr>*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       <script>*/
/*         function ajouterstock(id) {*/
/*           toto = '/seller/stock/inc_stock' + id;*/
/*           $(location).attr('href', toto);*/
/*           return 0;*/
/*         }*/
/*         function diminuerstock(id) {*/
/*           toto = '/seller/stock/dim_stock' + id;*/
/*           $(location).attr('href', toto);*/
/*           return 0;*/
/*         }*/
/*         function delete_stock(id, min) {*/
/*           if (min == 0) {*/
/*             toto = '/manager/stock/del' + id;*/
/*             $(location).attr('href', toto);*/
/*           } else {*/
/*             alert("il reste du stock");*/
/*           }*/
/*           return 0;*/
/*         }*/
/*       </script>*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/* */
