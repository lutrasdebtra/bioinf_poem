<?php

/* experiment/new.html.twig */
class __TwigTemplate_bb8aaaf09290066f2fdbdc203f5e424b0f41e750f8e68d22020613fa84c6999e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "experiment/new.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'outerDiv' => array($this, 'block_outerDiv'),
            'mainTitle' => array($this, 'block_mainTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a5f0d4e385a83af9013062a70a8f0172f378465d10ece421443ca12f0cf6724 = $this->env->getExtension("native_profiler");
        $__internal_7a5f0d4e385a83af9013062a70a8f0172f378465d10ece421443ca12f0cf6724->enter($__internal_7a5f0d4e385a83af9013062a70a8f0172f378465d10ece421443ca12f0cf6724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experiment/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5f0d4e385a83af9013062a70a8f0172f378465d10ece421443ca12f0cf6724->leave($__internal_7a5f0d4e385a83af9013062a70a8f0172f378465d10ece421443ca12f0cf6724_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12347587f0fd20d70a1dc83e63bd88aa535d24cb36dcb9b84affc7ff87afca7e = $this->env->getExtension("native_profiler");
        $__internal_12347587f0fd20d70a1dc83e63bd88aa535d24cb36dcb9b84affc7ff87afca7e->enter($__internal_12347587f0fd20d70a1dc83e63bd88aa535d24cb36dcb9b84affc7ff87afca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "POEM - New Experiment";
        
        $__internal_12347587f0fd20d70a1dc83e63bd88aa535d24cb36dcb9b84affc7ff87afca7e->leave($__internal_12347587f0fd20d70a1dc83e63bd88aa535d24cb36dcb9b84affc7ff87afca7e_prof);

    }

    // line 4
    public function block_outerDiv($context, array $blocks = array())
    {
        $__internal_5032ae8a4faefd573e6bdea12c4d6f020f05cf06128c009e49af631dd8e9d9de = $this->env->getExtension("native_profiler");
        $__internal_5032ae8a4faefd573e6bdea12c4d6f020f05cf06128c009e49af631dd8e9d9de->enter($__internal_5032ae8a4faefd573e6bdea12c4d6f020f05cf06128c009e49af631dd8e9d9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "outerDiv"));

        // line 5
        echo "\t\t<div class=\"experiment-form-div\">
        ";
        // line 6
        $this->displayBlock('mainTitle', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        </div>
";
        
        $__internal_5032ae8a4faefd573e6bdea12c4d6f020f05cf06128c009e49af631dd8e9d9de->leave($__internal_5032ae8a4faefd573e6bdea12c4d6f020f05cf06128c009e49af631dd8e9d9de_prof);

    }

    // line 6
    public function block_mainTitle($context, array $blocks = array())
    {
        $__internal_75f835496e9b4892c748de728906be2e428b5ced585aac413023a15f51be3057 = $this->env->getExtension("native_profiler");
        $__internal_75f835496e9b4892c748de728906be2e428b5ced585aac413023a15f51be3057->enter($__internal_75f835496e9b4892c748de728906be2e428b5ced585aac413023a15f51be3057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainTitle"));

        // line 7
        echo "        \t<h1>New Experiment</h1>
        ";
        
        $__internal_75f835496e9b4892c748de728906be2e428b5ced585aac413023a15f51be3057->leave($__internal_75f835496e9b4892c748de728906be2e428b5ced585aac413023a15f51be3057_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_595798f04c0048fd68dd72900e084d020a99de52ce1b0a109b4bc983eb1f532b = $this->env->getExtension("native_profiler");
        $__internal_595798f04c0048fd68dd72900e084d020a99de52ce1b0a109b4bc983eb1f532b->enter($__internal_595798f04c0048fd68dd72900e084d020a99de52ce1b0a109b4bc983eb1f532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_595798f04c0048fd68dd72900e084d020a99de52ce1b0a109b4bc983eb1f532b->leave($__internal_595798f04c0048fd68dd72900e084d020a99de52ce1b0a109b4bc983eb1f532b_prof);

    }

    public function getTemplateName()
    {
        return "experiment/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 9,  77 => 7,  71 => 6,  63 => 10,  60 => 9,  58 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/experiment/new.html.twig #}*/
/* {% extends 'base.html.twig' %}	*/
/* {% block title %}POEM - New Experiment{% endblock %}*/
/* {% block outerDiv %}*/
/* 		<div class="experiment-form-div">*/
/*         {% block mainTitle %}*/
/*         	<h1>New Experiment</h1>*/
/*         {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         </div>*/
/* {% endblock %}*/
