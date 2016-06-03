<?php

/* base.html.twig */
class __TwigTemplate_b1e3f3c4b95ff78397dfe6fd2e7cb1ca2554023303ec28fba103343fb92e86ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'outerDiv' => array($this, 'block_outerDiv'),
            'mainTitle' => array($this, 'block_mainTitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ff671647c7f3f10c5a9e4a78228656934aedd581302e7bc2b2c6c09ee2cd2f1 = $this->env->getExtension("native_profiler");
        $__internal_8ff671647c7f3f10c5a9e4a78228656934aedd581302e7bc2b2c6c09ee2cd2f1->enter($__internal_8ff671647c7f3f10c5a9e4a78228656934aedd581302e7bc2b2c6c09ee2cd2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('outerDiv', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_8ff671647c7f3f10c5a9e4a78228656934aedd581302e7bc2b2c6c09ee2cd2f1->leave($__internal_8ff671647c7f3f10c5a9e4a78228656934aedd581302e7bc2b2c6c09ee2cd2f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ab55e9a85db4bda700496ed0a861834e18b061636d5896c0073bd8faa3882d7 = $this->env->getExtension("native_profiler");
        $__internal_8ab55e9a85db4bda700496ed0a861834e18b061636d5896c0073bd8faa3882d7->enter($__internal_8ab55e9a85db4bda700496ed0a861834e18b061636d5896c0073bd8faa3882d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "POEM";
        
        $__internal_8ab55e9a85db4bda700496ed0a861834e18b061636d5896c0073bd8faa3882d7->leave($__internal_8ab55e9a85db4bda700496ed0a861834e18b061636d5896c0073bd8faa3882d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26cd251fcfe119d84ea1d840d4d7e8e238e56e3f117179e512d0e0757611b537 = $this->env->getExtension("native_profiler");
        $__internal_26cd251fcfe119d84ea1d840d4d7e8e238e56e3f117179e512d0e0757611b537->enter($__internal_26cd251fcfe119d84ea1d840d4d7e8e238e56e3f117179e512d0e0757611b537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/Application.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\"
            href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_26cd251fcfe119d84ea1d840d4d7e8e238e56e3f117179e512d0e0757611b537->leave($__internal_26cd251fcfe119d84ea1d840d4d7e8e238e56e3f117179e512d0e0757611b537_prof);

    }

    // line 14
    public function block_outerDiv($context, array $blocks = array())
    {
        $__internal_1a6a027f485d08d8fcaa4df36ddccfcdb73eab724f773efdd2c51691f9c04618 = $this->env->getExtension("native_profiler");
        $__internal_1a6a027f485d08d8fcaa4df36ddccfcdb73eab724f773efdd2c51691f9c04618->enter($__internal_1a6a027f485d08d8fcaa4df36ddccfcdb73eab724f773efdd2c51691f9c04618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "outerDiv"));

        // line 15
        echo "            ";
        $this->displayBlock('mainTitle', $context, $blocks);
        // line 16
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        
        $__internal_1a6a027f485d08d8fcaa4df36ddccfcdb73eab724f773efdd2c51691f9c04618->leave($__internal_1a6a027f485d08d8fcaa4df36ddccfcdb73eab724f773efdd2c51691f9c04618_prof);

    }

    // line 15
    public function block_mainTitle($context, array $blocks = array())
    {
        $__internal_00b313eb8753d0b16baa9b02f122b5cc0f88791742eb61fa078aef3454d983a4 = $this->env->getExtension("native_profiler");
        $__internal_00b313eb8753d0b16baa9b02f122b5cc0f88791742eb61fa078aef3454d983a4->enter($__internal_00b313eb8753d0b16baa9b02f122b5cc0f88791742eb61fa078aef3454d983a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainTitle"));

        
        $__internal_00b313eb8753d0b16baa9b02f122b5cc0f88791742eb61fa078aef3454d983a4->leave($__internal_00b313eb8753d0b16baa9b02f122b5cc0f88791742eb61fa078aef3454d983a4_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d4b49876b9e58aa7f3109c66ea85b73ef9424855df00f3cbaee16bf56f7e7e = $this->env->getExtension("native_profiler");
        $__internal_97d4b49876b9e58aa7f3109c66ea85b73ef9424855df00f3cbaee16bf56f7e7e->enter($__internal_97d4b49876b9e58aa7f3109c66ea85b73ef9424855df00f3cbaee16bf56f7e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97d4b49876b9e58aa7f3109c66ea85b73ef9424855df00f3cbaee16bf56f7e7e->leave($__internal_97d4b49876b9e58aa7f3109c66ea85b73ef9424855df00f3cbaee16bf56f7e7e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9df3e68cd448f2bfb1468d9daee7a57ed65dd9c11a1ae486daf4d096d9ba5789 = $this->env->getExtension("native_profiler");
        $__internal_9df3e68cd448f2bfb1468d9daee7a57ed65dd9c11a1ae486daf4d096d9ba5789->enter($__internal_9df3e68cd448f2bfb1468d9daee7a57ed65dd9c11a1ae486daf4d096d9ba5789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Application.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9df3e68cd448f2bfb1468d9daee7a57ed65dd9c11a1ae486daf4d096d9ba5789->leave($__internal_9df3e68cd448f2bfb1468d9daee7a57ed65dd9c11a1ae486daf4d096d9ba5789_prof);

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
        return array (  146 => 20,  141 => 19,  135 => 18,  124 => 16,  113 => 15,  106 => 17,  103 => 16,  100 => 15,  94 => 14,  85 => 9,  79 => 7,  73 => 6,  61 => 5,  52 => 22,  49 => 18,  47 => 14,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}POEM{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('css/Application.css') }}" rel="stylesheet" />*/
/*             <link rel="stylesheet"*/
/*             href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block outerDiv %}*/
/*             {% block mainTitle %}{% endblock %}*/
/*             {% block body %}{% endblock %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('assets/vendor/jquery/dist/jquery.js') }}"></script>*/
/*             <script src="{{ asset('js/Application.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
