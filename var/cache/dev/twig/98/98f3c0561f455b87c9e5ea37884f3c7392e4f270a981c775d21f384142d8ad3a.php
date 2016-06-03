<?php

/* experiment/index.html.twig */
class __TwigTemplate_bdcfecbd2551aff3ee3d5571136513ef2dba08dec323d75f52713a9406c64e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "experiment/index.html.twig", 2);
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
        $__internal_95861c789d49693c25fb8706e58a41f07ae6855b739aecec24652fac3dc7f7d0 = $this->env->getExtension("native_profiler");
        $__internal_95861c789d49693c25fb8706e58a41f07ae6855b739aecec24652fac3dc7f7d0->enter($__internal_95861c789d49693c25fb8706e58a41f07ae6855b739aecec24652fac3dc7f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experiment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95861c789d49693c25fb8706e58a41f07ae6855b739aecec24652fac3dc7f7d0->leave($__internal_95861c789d49693c25fb8706e58a41f07ae6855b739aecec24652fac3dc7f7d0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_329e3c8213f74fa64a2df9011fbe6d5c7c246099143fbdd661328cdf00db3de9 = $this->env->getExtension("native_profiler");
        $__internal_329e3c8213f74fa64a2df9011fbe6d5c7c246099143fbdd661328cdf00db3de9->enter($__internal_329e3c8213f74fa64a2df9011fbe6d5c7c246099143fbdd661328cdf00db3de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"experiment-index-div\">
    \t<h1>Experiments</h1>
    \t<table class=\"table table-striped table-bordered\">
    \t\t<tr>
    \t\t\t<th>Title</th>
    \t\t\t<th></th>
    \t\t</tr>
    \t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiments"]) ? $context["experiments"] : $this->getContext($context, "experiments")));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 13
            echo "    \t\t\t<tr>
      \t\t\t\t<td style=\"width:95%\">
        \t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "title", array()), "html", null, true);
            echo "
      \t\t\t\t</td>
      \t\t\t\t<td align=\"center\" valign=\"middle\">
      \t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("experiment_edit", array("id" => $this->getAttribute($context["exp"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Link</a>
      \t\t\t\t</td>
    \t\t\t</tr>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    \t</table>
      <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("experiment_new");
        echo "\" class=\"btn btn-primary btn-lg btn-block\">New Experiment</a>
\t</div>
";
        
        $__internal_329e3c8213f74fa64a2df9011fbe6d5c7c246099143fbdd661328cdf00db3de9->leave($__internal_329e3c8213f74fa64a2df9011fbe6d5c7c246099143fbdd661328cdf00db3de9_prof);

    }

    public function getTemplateName()
    {
        return "experiment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  73 => 22,  63 => 18,  57 => 15,  53 => 13,  49 => 12,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/experiment/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="experiment-index-div">*/
/*     	<h1>Experiments</h1>*/
/*     	<table class="table table-striped table-bordered">*/
/*     		<tr>*/
/*     			<th>Title</th>*/
/*     			<th></th>*/
/*     		</tr>*/
/*     		{% for exp in experiments %}*/
/*     			<tr>*/
/*       				<td style="width:95%">*/
/*         				{{exp.title}}*/
/*       				</td>*/
/*       				<td align="center" valign="middle">*/
/*       					<a href="{{ path('experiment_edit', {'id': exp.id}) }}" class="btn btn-default">Link</a>*/
/*       				</td>*/
/*     			</tr>*/
/*     		{% endfor %}*/
/*     	</table>*/
/*       <a href="{{ path('experiment_new') }}" class="btn btn-primary btn-lg btn-block">New Experiment</a>*/
/* 	</div>*/
/* {% endblock %}*/
