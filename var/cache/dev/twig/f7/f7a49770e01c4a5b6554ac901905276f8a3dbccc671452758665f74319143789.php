<?php

/* experiment/edit.html.twig */
class __TwigTemplate_9b017433e4fbfb920321d0af3d50326fad597e0081649a720ac803be164ea610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "experiment/edit.html.twig", 2);
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
        $__internal_e0c47c28b2da8f22f7f7cfeea9de1e52b2b5e23a156cb35b13db4a0cb1bf4dd1 = $this->env->getExtension("native_profiler");
        $__internal_e0c47c28b2da8f22f7f7cfeea9de1e52b2b5e23a156cb35b13db4a0cb1bf4dd1->enter($__internal_e0c47c28b2da8f22f7f7cfeea9de1e52b2b5e23a156cb35b13db4a0cb1bf4dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experiment/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c47c28b2da8f22f7f7cfeea9de1e52b2b5e23a156cb35b13db4a0cb1bf4dd1->leave($__internal_e0c47c28b2da8f22f7f7cfeea9de1e52b2b5e23a156cb35b13db4a0cb1bf4dd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f20c78ca2ba48d3b6a89aabf56c76b61ff9c64a36823a631ca6e1d591ab8c7f9 = $this->env->getExtension("native_profiler");
        $__internal_f20c78ca2ba48d3b6a89aabf56c76b61ff9c64a36823a631ca6e1d591ab8c7f9->enter($__internal_f20c78ca2ba48d3b6a89aabf56c76b61ff9c64a36823a631ca6e1d591ab8c7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "POEM - Edit Experiment";
        
        $__internal_f20c78ca2ba48d3b6a89aabf56c76b61ff9c64a36823a631ca6e1d591ab8c7f9->leave($__internal_f20c78ca2ba48d3b6a89aabf56c76b61ff9c64a36823a631ca6e1d591ab8c7f9_prof);

    }

    // line 4
    public function block_outerDiv($context, array $blocks = array())
    {
        $__internal_d430027d17bbd001d22b4b9a17934fe5759d70461a6160bb9edb25226541a5de = $this->env->getExtension("native_profiler");
        $__internal_d430027d17bbd001d22b4b9a17934fe5759d70461a6160bb9edb25226541a5de->enter($__internal_d430027d17bbd001d22b4b9a17934fe5759d70461a6160bb9edb25226541a5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "outerDiv"));

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
        
        $__internal_d430027d17bbd001d22b4b9a17934fe5759d70461a6160bb9edb25226541a5de->leave($__internal_d430027d17bbd001d22b4b9a17934fe5759d70461a6160bb9edb25226541a5de_prof);

    }

    // line 6
    public function block_mainTitle($context, array $blocks = array())
    {
        $__internal_6e31b7802c7cde4468b34843625ebb921333e8938fa1f2adc9c0d7241330360c = $this->env->getExtension("native_profiler");
        $__internal_6e31b7802c7cde4468b34843625ebb921333e8938fa1f2adc9c0d7241330360c->enter($__internal_6e31b7802c7cde4468b34843625ebb921333e8938fa1f2adc9c0d7241330360c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainTitle"));

        // line 7
        echo "        \t<h1>Edit Experiment</h1>
        ";
        
        $__internal_6e31b7802c7cde4468b34843625ebb921333e8938fa1f2adc9c0d7241330360c->leave($__internal_6e31b7802c7cde4468b34843625ebb921333e8938fa1f2adc9c0d7241330360c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ad10a2d4c649e7dff0bd1d3cc04514b4b2a880ea071dc593354d0c59352317 = $this->env->getExtension("native_profiler");
        $__internal_96ad10a2d4c649e7dff0bd1d3cc04514b4b2a880ea071dc593354d0c59352317->enter($__internal_96ad10a2d4c649e7dff0bd1d3cc04514b4b2a880ea071dc593354d0c59352317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96ad10a2d4c649e7dff0bd1d3cc04514b4b2a880ea071dc593354d0c59352317->leave($__internal_96ad10a2d4c649e7dff0bd1d3cc04514b4b2a880ea071dc593354d0c59352317_prof);

    }

    public function getTemplateName()
    {
        return "experiment/edit.html.twig";
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
/* {# app/Resources/views/experiment/edit.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block title %}POEM - Edit Experiment{% endblock %}*/
/* {% block outerDiv %}*/
/* 		<div class="experiment-form-div">*/
/*         {% block mainTitle %}*/
/*         	<h1>Edit Experiment</h1>*/
/*         {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         </div>*/
/* {% endblock %}*/
