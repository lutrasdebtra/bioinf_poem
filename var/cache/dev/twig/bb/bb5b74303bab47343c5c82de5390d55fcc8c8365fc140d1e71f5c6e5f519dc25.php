<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6346c64f5bd5c053022b48d2c7755dcf05aebab3048ee15dfbf36ec13fe94099 extends Twig_Template
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
        $__internal_386977106776e4e8c6f45f1b04d2ab2385ab5bc7bdcc3ec201757618eb8f722f = $this->env->getExtension("native_profiler");
        $__internal_386977106776e4e8c6f45f1b04d2ab2385ab5bc7bdcc3ec201757618eb8f722f->enter($__internal_386977106776e4e8c6f45f1b04d2ab2385ab5bc7bdcc3ec201757618eb8f722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386977106776e4e8c6f45f1b04d2ab2385ab5bc7bdcc3ec201757618eb8f722f->leave($__internal_386977106776e4e8c6f45f1b04d2ab2385ab5bc7bdcc3ec201757618eb8f722f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7427a8aff3563aa84c3ac3d5554e7f7d00d276e075bec89c58e5089ed850a3c = $this->env->getExtension("native_profiler");
        $__internal_a7427a8aff3563aa84c3ac3d5554e7f7d00d276e075bec89c58e5089ed850a3c->enter($__internal_a7427a8aff3563aa84c3ac3d5554e7f7d00d276e075bec89c58e5089ed850a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7427a8aff3563aa84c3ac3d5554e7f7d00d276e075bec89c58e5089ed850a3c->leave($__internal_a7427a8aff3563aa84c3ac3d5554e7f7d00d276e075bec89c58e5089ed850a3c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0cb3a882c6bd614e5205c89f77458222a929fd1a1b67d4c375104f36a242a76 = $this->env->getExtension("native_profiler");
        $__internal_d0cb3a882c6bd614e5205c89f77458222a929fd1a1b67d4c375104f36a242a76->enter($__internal_d0cb3a882c6bd614e5205c89f77458222a929fd1a1b67d4c375104f36a242a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0cb3a882c6bd614e5205c89f77458222a929fd1a1b67d4c375104f36a242a76->leave($__internal_d0cb3a882c6bd614e5205c89f77458222a929fd1a1b67d4c375104f36a242a76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0564854dca4df77c87fe8a2ea283a975ba94f9a67ba3b1a6d0494fd76fa02d5c = $this->env->getExtension("native_profiler");
        $__internal_0564854dca4df77c87fe8a2ea283a975ba94f9a67ba3b1a6d0494fd76fa02d5c->enter($__internal_0564854dca4df77c87fe8a2ea283a975ba94f9a67ba3b1a6d0494fd76fa02d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0564854dca4df77c87fe8a2ea283a975ba94f9a67ba3b1a6d0494fd76fa02d5c->leave($__internal_0564854dca4df77c87fe8a2ea283a975ba94f9a67ba3b1a6d0494fd76fa02d5c_prof);

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
