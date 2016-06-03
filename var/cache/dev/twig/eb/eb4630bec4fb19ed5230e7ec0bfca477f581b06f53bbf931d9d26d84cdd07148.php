<?php

/* experiment/form.html.twig */
class __TwigTemplate_66f9686cb3daa11881edca95215a6a4d207beab8a5e6b6311517026334461465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate((((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new"))) ? ("experiment/new.html.twig") : ("experiment/edit.html.twig")), "experiment/form.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2eba83cbe9e0dbb19874ef1bd4cea2e52329299457eb1ce314549befc6f6b42 = $this->env->getExtension("native_profiler");
        $__internal_a2eba83cbe9e0dbb19874ef1bd4cea2e52329299457eb1ce314549befc6f6b42->enter($__internal_a2eba83cbe9e0dbb19874ef1bd4cea2e52329299457eb1ce314549befc6f6b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experiment/form.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2eba83cbe9e0dbb19874ef1bd4cea2e52329299457eb1ce314549befc6f6b42->leave($__internal_a2eba83cbe9e0dbb19874ef1bd4cea2e52329299457eb1ce314549befc6f6b42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e664b9c3b2069930d20d2fba3270dd4c37430698e6cd7a95469083dcd0529947 = $this->env->getExtension("native_profiler");
        $__internal_e664b9c3b2069930d20d2fba3270dd4c37430698e6cd7a95469083dcd0529947->enter($__internal_e664b9c3b2069930d20d2fba3270dd4c37430698e6cd7a95469083dcd0529947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 5
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sampleNums", array()), "setRendered", array());
        // line 6
        echo "            ";
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rnaseqs", array()), "setRendered", array());
        // line 7
        echo "            ";
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dnaseqs", array()), "setRendered", array());
        // line 8
        echo "            ";
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metabolomics", array()), "setRendered", array());
        // line 9
        echo "            ";
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proteomics", array()), "setRendered", array());
        // line 10
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    \t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sampleNums", array()), 'label');
        echo "
    \t\t<div id=\"sampleNums-fields-list\" data-prototype=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sampleNums", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
        \t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sampleNums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sampleNumsField"]) {
            // line 16
            echo "        \t\t<div>
            \t\t";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sampleNumsField"], 'errors');
            echo "
            \t\t";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sampleNumsField"], 'widget');
            echo "
\t\t\t\t</div>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sampleNumsField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    \t\t<a href=\"#\" id=\"add-another-sampleNum\">Add another Sample Number</a>
    \t\t";
        // line 23
        echo "    \t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expType", array()), 'row', array("label" => "Experiment Type", "id" => "expType_drop"));
        echo "
\t\t\t<div class=\"rnaseqs\" data-prototype=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rnaseqs", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rnaseqs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rnaseq"]) {
            // line 26
            echo "                    <div class=\"exptype-form-div\">
                        <h3>RNA Seq Experiment</h3>
            \t\t\t";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "quality", array()), 'row');
            echo "
                        ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "ribodepleted", array()), 'row');
            echo "
                        ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "finalQuality", array()), 'row');
            echo "
                        ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "sampleNum", array()), 'row');
            echo "
                        ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "protocolUsed", array()), 'row');
            echo "
                        ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "step1", array()), 'row');
            echo "
                        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "step1Result", array()), 'row');
            echo "
                        ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "serviceProvider", array()), 'row');
            echo "
                        ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "platform", array()), 'row');
            echo "
                        ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "dataFiles", array()), 'row');
            echo "
                        ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "pipeline", array()), 'row');
            echo "
                        ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "pipelineParameters", array()), 'row');
            echo "
                        ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["rnaseq"], "resultFiles", array()), 'row');
            echo "
                    </div>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rnaseq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</div>
            <div class=\"dnaseqs\" data-prototype=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dnaseqs", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dnaseqs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dnaseq"]) {
            // line 46
            echo "                    <div class=\"exptype-form-div\">
                        <h3>DNA Seq Experiment</h3>
                        ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["dnaseq"], "quality", array()), 'row');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dnaseq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>
            <div class=\"metabolomics\" data-prototype=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metabolomics", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metabolomics", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["metabolomic"]) {
            // line 54
            echo "                    <div class=\"exptype-form-div\">
                        <h3>Metabolomics Experiment</h3>
                        ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["metabolomic"], "quality", array()), 'row');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metabolomic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </div>
            <div class=\"proteomics\" data-prototype=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proteomics", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proteomics", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["proteomic"]) {
            // line 62
            echo "                    <div class=\"exptype-form-div\">
                        <h3> Proteomics Experiment</h3>
                        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["proteomic"], "quality", array()), 'row');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proteomic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
        \t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("experiment_index");
        echo "\" class=\"btn btn-danger\">Cancel</a>
        ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e664b9c3b2069930d20d2fba3270dd4c37430698e6cd7a95469083dcd0529947->leave($__internal_e664b9c3b2069930d20d2fba3270dd4c37430698e6cd7a95469083dcd0529947_prof);

    }

    public function getTemplateName()
    {
        return "experiment/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 70,  252 => 69,  248 => 68,  245 => 67,  236 => 64,  232 => 62,  228 => 61,  224 => 60,  221 => 59,  212 => 56,  208 => 54,  204 => 53,  200 => 52,  197 => 51,  188 => 48,  184 => 46,  180 => 45,  176 => 44,  173 => 43,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 26,  108 => 25,  104 => 24,  99 => 23,  96 => 21,  87 => 18,  83 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  44 => 5,  39 => 4,  33 => 3,  18 => 2,);
    }
}
/* {# app/Resources/views/experiment/form.html.twig #}*/
/* {% extends new ? "experiment/new.html.twig" : "experiment/edit.html.twig"%}*/
/* {% block body %}*/
/* 		{{ form_start(form) }}*/
/*             {% do form.sampleNums.setRendered %}*/
/*             {% do form.rnaseqs.setRendered %}*/
/*             {% do form.dnaseqs.setRendered %}*/
/*             {% do form.metabolomics.setRendered %}*/
/*             {% do form.proteomics.setRendered %}*/
/* 			{{ form_errors(form) }}*/
/* */
/*     		{{ form_row(form.title) }}*/
/*             {{ form_label(form.sampleNums) }}*/
/*     		<div id="sampleNums-fields-list" data-prototype="{{ form_widget(form.sampleNums.vars.prototype)|e }}"></div>*/
/*         	{% for sampleNumsField in form.sampleNums %}*/
/*         		<div>*/
/*             		{{ form_errors(sampleNumsField) }}*/
/*             		{{ form_widget(sampleNumsField) }}*/
/* 				</div>*/
/*     		{% endfor %}*/
/*     		<a href="#" id="add-another-sampleNum">Add another Sample Number</a>*/
/*     		{# The JS uses prototype to create new dynamic fields #}*/
/*     		{{ form_row(form.expType, { 'label' : 'Experiment Type', 'id' : 'expType_drop'}) }}*/
/* 			<div class="rnaseqs" data-prototype="{{ form_widget(form.rnaseqs.vars.prototype)|e }}">*/
/* 				{% for rnaseq in form.rnaseqs %}*/
/*                     <div class="exptype-form-div">*/
/*                         <h3>RNA Seq Experiment</h3>*/
/*             			{{ form_row(rnaseq.quality) }}*/
/*                         {{ form_row(rnaseq.ribodepleted) }}*/
/*                         {{ form_row(rnaseq.finalQuality) }}*/
/*                         {{ form_row(rnaseq.sampleNum) }}*/
/*                         {{ form_row(rnaseq.protocolUsed) }}*/
/*                         {{ form_row(rnaseq.step1) }}*/
/*                         {{ form_row(rnaseq.step1Result) }}*/
/*                         {{ form_row(rnaseq.serviceProvider) }}*/
/*                         {{ form_row(rnaseq.platform) }}*/
/*                         {{ form_row(rnaseq.dataFiles) }}*/
/*                         {{ form_row(rnaseq.pipeline) }}*/
/*                         {{ form_row(rnaseq.pipelineParameters) }}*/
/*                         {{ form_row(rnaseq.resultFiles) }}*/
/*                     </div>*/
/*     			{% endfor %}*/
/* 			</div>*/
/*             <div class="dnaseqs" data-prototype="{{ form_widget(form.dnaseqs.vars.prototype)|e }}">*/
/*             {% for dnaseq in form.dnaseqs %}*/
/*                     <div class="exptype-form-div">*/
/*                         <h3>DNA Seq Experiment</h3>*/
/*                         {{ form_row(dnaseq.quality) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="metabolomics" data-prototype="{{ form_widget(form.metabolomics.vars.prototype)|e }}">*/
/*             {% for metabolomic in form.metabolomics %}*/
/*                     <div class="exptype-form-div">*/
/*                         <h3>Metabolomics Experiment</h3>*/
/*                         {{ form_row(metabolomic.quality) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="proteomics" data-prototype="{{ form_widget(form.proteomics.vars.prototype)|e }}">*/
/*             {% for proteomic in form.proteomics %}*/
/*                     <div class="exptype-form-div">*/
/*                         <h3> Proteomics Experiment</h3>*/
/*                         {{ form_row(proteomic.quality) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         	{{ form_widget(form.save) }}*/
/*             <a href="{{ path('experiment_index') }}" class="btn btn-danger">Cancel</a>*/
/*         {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
