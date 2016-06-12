<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8278f661ed6181d733301818819ef8d223b310ec5e4c3e459bfee46d3735e5ff extends Twig_Template
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
        $__internal_0168a69625131e23221590f9d82f8f14efc156ed4ae8aa96083ad41d14ae0608 = $this->env->getExtension("native_profiler");
        $__internal_0168a69625131e23221590f9d82f8f14efc156ed4ae8aa96083ad41d14ae0608->enter($__internal_0168a69625131e23221590f9d82f8f14efc156ed4ae8aa96083ad41d14ae0608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0168a69625131e23221590f9d82f8f14efc156ed4ae8aa96083ad41d14ae0608->leave($__internal_0168a69625131e23221590f9d82f8f14efc156ed4ae8aa96083ad41d14ae0608_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32c58cbcbd303d90d6b32f8b83cd931b7c061b4a062af5b8a406d96286b30fd2 = $this->env->getExtension("native_profiler");
        $__internal_32c58cbcbd303d90d6b32f8b83cd931b7c061b4a062af5b8a406d96286b30fd2->enter($__internal_32c58cbcbd303d90d6b32f8b83cd931b7c061b4a062af5b8a406d96286b30fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_32c58cbcbd303d90d6b32f8b83cd931b7c061b4a062af5b8a406d96286b30fd2->leave($__internal_32c58cbcbd303d90d6b32f8b83cd931b7c061b4a062af5b8a406d96286b30fd2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c774af74d9aa1e73161caa058c09061b99b926d30d5a3fe298268d647952ab3 = $this->env->getExtension("native_profiler");
        $__internal_2c774af74d9aa1e73161caa058c09061b99b926d30d5a3fe298268d647952ab3->enter($__internal_2c774af74d9aa1e73161caa058c09061b99b926d30d5a3fe298268d647952ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c774af74d9aa1e73161caa058c09061b99b926d30d5a3fe298268d647952ab3->leave($__internal_2c774af74d9aa1e73161caa058c09061b99b926d30d5a3fe298268d647952ab3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4732f97e3cf0b0821b51f9eb9579e0e9c1eea07b8f44fb233962d3fea895d79a = $this->env->getExtension("native_profiler");
        $__internal_4732f97e3cf0b0821b51f9eb9579e0e9c1eea07b8f44fb233962d3fea895d79a->enter($__internal_4732f97e3cf0b0821b51f9eb9579e0e9c1eea07b8f44fb233962d3fea895d79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4732f97e3cf0b0821b51f9eb9579e0e9c1eea07b8f44fb233962d3fea895d79a->leave($__internal_4732f97e3cf0b0821b51f9eb9579e0e9c1eea07b8f44fb233962d3fea895d79a_prof);

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
