<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_c66021a0b708e437b1e8524bce4b17cdef0f179d2802844d4c532016ff5b4dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_552765c9c5630e9f3a8a9b51d47f951fd2b8dc4786d50f54e7741d44dce2b9d4 = $this->env->getExtension("native_profiler");
        $__internal_552765c9c5630e9f3a8a9b51d47f951fd2b8dc4786d50f54e7741d44dce2b9d4->enter($__internal_552765c9c5630e9f3a8a9b51d47f951fd2b8dc4786d50f54e7741d44dce2b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_552765c9c5630e9f3a8a9b51d47f951fd2b8dc4786d50f54e7741d44dce2b9d4->leave($__internal_552765c9c5630e9f3a8a9b51d47f951fd2b8dc4786d50f54e7741d44dce2b9d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
