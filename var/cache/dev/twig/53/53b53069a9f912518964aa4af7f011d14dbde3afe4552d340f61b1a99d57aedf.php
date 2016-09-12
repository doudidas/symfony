<?php

/* base.html.twig */
class __TwigTemplate_c95eb8264456b0ac43b8949627c627efe3e72eb01589b0fd9b3fe5c166a0de8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1eb1d7956d6ed9e7fc8da9b520502b3f1b5c27ed0317812edcae77135068289 = $this->env->getExtension("native_profiler");
        $__internal_a1eb1d7956d6ed9e7fc8da9b520502b3f1b5c27ed0317812edcae77135068289->enter($__internal_a1eb1d7956d6ed9e7fc8da9b520502b3f1b5c27ed0317812edcae77135068289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        </title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>
<body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">TSP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"/stock\">
                            Les stocks
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"/itemtype\">Les types</a>
                    </li>
                    <li>
                        <a href=\"/selling\">Les ventes</a>
                    </li>
                    <li>
                        <a href=\"/group/list\">
                            Les groupes
                        </a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <p class=\"navbar-text\">Signed in as
                            <strong class=\"signed\" style=\"color:rgb(246,246,246)\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</strong>
                        </p>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">login<span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"/login\">login</a>
                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li>
                                <a href=\"/register\" style=\"color:orange\">register</a>
                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li>
                                <a href=\"/admin/promote\" style=\"color:red\">promote</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Managment<span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"/manager/itemtype/add\" style=\"color:orange\">Ajouter type</a>
                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li>
                                <a href=\"/manager/stock/add\" style=\"color:orange\">Ajouter stock</a>
                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li>
                                <a href=\"/seller/selling/add\" style=\"color:gray\">Ajouter vente</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div style=\"padding-bottom: 70px;\"></div>
    ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "</body>
</html>
";
        
        $__internal_a1eb1d7956d6ed9e7fc8da9b520502b3f1b5c27ed0317812edcae77135068289->leave($__internal_a1eb1d7956d6ed9e7fc8da9b520502b3f1b5c27ed0317812edcae77135068289_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d0460dc1657a043664040f4dcfa36da9110fb7741f5303504a83331a69f896b = $this->env->getExtension("native_profiler");
        $__internal_1d0460dc1657a043664040f4dcfa36da9110fb7741f5303504a83331a69f896b->enter($__internal_1d0460dc1657a043664040f4dcfa36da9110fb7741f5303504a83331a69f896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d0460dc1657a043664040f4dcfa36da9110fb7741f5303504a83331a69f896b->leave($__internal_1d0460dc1657a043664040f4dcfa36da9110fb7741f5303504a83331a69f896b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_621c1374d0c048e297c4f413b50e3ee449649056a4cabe28b158210daff5c0bd = $this->env->getExtension("native_profiler");
        $__internal_621c1374d0c048e297c4f413b50e3ee449649056a4cabe28b158210daff5c0bd->enter($__internal_621c1374d0c048e297c4f413b50e3ee449649056a4cabe28b158210daff5c0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "74c9d00_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_74c9d00_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/74c9d00_part_1.css");
            // line 10
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "74c9d00"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_74c9d00") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/74c9d00.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_621c1374d0c048e297c4f413b50e3ee449649056a4cabe28b158210daff5c0bd->leave($__internal_621c1374d0c048e297c4f413b50e3ee449649056a4cabe28b158210daff5c0bd_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_559b7d1a7b38f295f8b0fbde5e699893c0c5b23e700f6776076f4a264f3b0a9f = $this->env->getExtension("native_profiler");
        $__internal_559b7d1a7b38f295f8b0fbde5e699893c0c5b23e700f6776076f4a264f3b0a9f->enter($__internal_559b7d1a7b38f295f8b0fbde5e699893c0c5b23e700f6776076f4a264f3b0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_559b7d1a7b38f295f8b0fbde5e699893c0c5b23e700f6776076f4a264f3b0a9f->leave($__internal_559b7d1a7b38f295f8b0fbde5e699893c0c5b23e700f6776076f4a264f3b0a9f_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9445c36b504616c67996c58d81c88afaa4a868ffb932e59757633d65d379841 = $this->env->getExtension("native_profiler");
        $__internal_c9445c36b504616c67996c58d81c88afaa4a868ffb932e59757633d65d379841->enter($__internal_c9445c36b504616c67996c58d81c88afaa4a868ffb932e59757633d65d379841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 99
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a56fa94_part_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a56fa94.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 101
        echo "    ";
        
        $__internal_c9445c36b504616c67996c58d81c88afaa4a868ffb932e59757633d65d379841->leave($__internal_c9445c36b504616c67996c58d81c88afaa4a868ffb932e59757633d65d379841_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 101,  210 => 99,  205 => 98,  199 => 97,  188 => 96,  178 => 12,  164 => 10,  159 => 9,  153 => 8,  141 => 6,  132 => 102,  129 => 97,  127 => 96,  80 => 52,  40 => 14,  38 => 8,  35 => 7,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <title>*/
/*             {% block title %}Welcome!{% endblock %}*/
/*         </title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets '@bootstrap_css' filter = 'cssrewrite' %}*/
/*             <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*         {% endstylesheets %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="/">TSP</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="/stock">*/
/*                             Les stocks*/
/*                             <span class="sr-only">(current)</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/itemtype">Les types</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/selling">Les ventes</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/group/list">*/
/*                             Les groupes*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li>*/
/*                         <p class="navbar-text">Signed in as*/
/*                             <strong class="signed" style="color:rgb(246,246,246)">{{app.user}}</strong>*/
/*                         </p>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">login<span class="caret"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a href="/login">login</a>*/
/*                             </li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="/register" style="color:orange">register</a>*/
/*                             </li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="/admin/promote" style="color:red">promote</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Managment<span class="caret"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a href="/manager/itemtype/add" style="color:orange">Ajouter type</a>*/
/*                             </li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="/manager/stock/add" style="color:orange">Ajouter stock</a>*/
/*                             </li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="/seller/selling/add" style="color:gray">Ajouter vente</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container-fluid -->*/
/*     </nav>*/
/*     <div style="padding-bottom: 70px;"></div>*/
/*     {% block body %}{% endblock %}*/
/*     {% block javascripts %}*/
/*         {% javascripts '@jquery' '@bootstrap_js'%}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
