<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df89fe2fd61e3b481c0874032c03bcfa0f957316e1d0f997c68bb697f0e1b8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27e97e5c306d23952083eca4ab1f6384726f1b53cbdd8ab49608d078b9891885 = $this->env->getExtension("native_profiler");
        $__internal_27e97e5c306d23952083eca4ab1f6384726f1b53cbdd8ab49608d078b9891885->enter($__internal_27e97e5c306d23952083eca4ab1f6384726f1b53cbdd8ab49608d078b9891885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e97e5c306d23952083eca4ab1f6384726f1b53cbdd8ab49608d078b9891885->leave($__internal_27e97e5c306d23952083eca4ab1f6384726f1b53cbdd8ab49608d078b9891885_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85b6a831f4103f391d402f8882aa97289f93f82665f1e6adb4f956ca1c71af56 = $this->env->getExtension("native_profiler");
        $__internal_85b6a831f4103f391d402f8882aa97289f93f82665f1e6adb4f956ca1c71af56->enter($__internal_85b6a831f4103f391d402f8882aa97289f93f82665f1e6adb4f956ca1c71af56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85b6a831f4103f391d402f8882aa97289f93f82665f1e6adb4f956ca1c71af56->leave($__internal_85b6a831f4103f391d402f8882aa97289f93f82665f1e6adb4f956ca1c71af56_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da8317699d4563bda243a0ed301c7692eb705cea3ae259234841f123c0553a68 = $this->env->getExtension("native_profiler");
        $__internal_da8317699d4563bda243a0ed301c7692eb705cea3ae259234841f123c0553a68->enter($__internal_da8317699d4563bda243a0ed301c7692eb705cea3ae259234841f123c0553a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da8317699d4563bda243a0ed301c7692eb705cea3ae259234841f123c0553a68->leave($__internal_da8317699d4563bda243a0ed301c7692eb705cea3ae259234841f123c0553a68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1df6cc88b3ab1c5caac3ee8543ef1649c5cc0c1788b33bdbf8588f111b102a02 = $this->env->getExtension("native_profiler");
        $__internal_1df6cc88b3ab1c5caac3ee8543ef1649c5cc0c1788b33bdbf8588f111b102a02->enter($__internal_1df6cc88b3ab1c5caac3ee8543ef1649c5cc0c1788b33bdbf8588f111b102a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1df6cc88b3ab1c5caac3ee8543ef1649c5cc0c1788b33bdbf8588f111b102a02->leave($__internal_1df6cc88b3ab1c5caac3ee8543ef1649c5cc0c1788b33bdbf8588f111b102a02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
