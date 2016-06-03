<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6b458670d62fd6517ddf677567317d9e5a0021f3eac14b39ba93809875a81ab6 extends Twig_Template
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
        $__internal_34964c4cd4b0fbf5f1382945d9e042029488dea5abb38ea527dff54806b113d7 = $this->env->getExtension("native_profiler");
        $__internal_34964c4cd4b0fbf5f1382945d9e042029488dea5abb38ea527dff54806b113d7->enter($__internal_34964c4cd4b0fbf5f1382945d9e042029488dea5abb38ea527dff54806b113d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34964c4cd4b0fbf5f1382945d9e042029488dea5abb38ea527dff54806b113d7->leave($__internal_34964c4cd4b0fbf5f1382945d9e042029488dea5abb38ea527dff54806b113d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d99d8cfdcf33b8b57f813b0d05aac5e64824ccd49fdc50111ae80be87deef291 = $this->env->getExtension("native_profiler");
        $__internal_d99d8cfdcf33b8b57f813b0d05aac5e64824ccd49fdc50111ae80be87deef291->enter($__internal_d99d8cfdcf33b8b57f813b0d05aac5e64824ccd49fdc50111ae80be87deef291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d99d8cfdcf33b8b57f813b0d05aac5e64824ccd49fdc50111ae80be87deef291->leave($__internal_d99d8cfdcf33b8b57f813b0d05aac5e64824ccd49fdc50111ae80be87deef291_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d60ff1455df178771d53abb4b38f2f7d11424646966faadfeb30c4cdc8fd5592 = $this->env->getExtension("native_profiler");
        $__internal_d60ff1455df178771d53abb4b38f2f7d11424646966faadfeb30c4cdc8fd5592->enter($__internal_d60ff1455df178771d53abb4b38f2f7d11424646966faadfeb30c4cdc8fd5592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d60ff1455df178771d53abb4b38f2f7d11424646966faadfeb30c4cdc8fd5592->leave($__internal_d60ff1455df178771d53abb4b38f2f7d11424646966faadfeb30c4cdc8fd5592_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1bbf90d8e64d0a61a9153ea23de8d6b772b249ce74d3f82146fcc2b4a1857b2 = $this->env->getExtension("native_profiler");
        $__internal_e1bbf90d8e64d0a61a9153ea23de8d6b772b249ce74d3f82146fcc2b4a1857b2->enter($__internal_e1bbf90d8e64d0a61a9153ea23de8d6b772b249ce74d3f82146fcc2b4a1857b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1bbf90d8e64d0a61a9153ea23de8d6b772b249ce74d3f82146fcc2b4a1857b2->leave($__internal_e1bbf90d8e64d0a61a9153ea23de8d6b772b249ce74d3f82146fcc2b4a1857b2_prof);

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
