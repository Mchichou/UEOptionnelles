<?php

/* UEOChoixBundle:Parcours:edit.html.twig */
class __TwigTemplate_6e630066424f40dc11629bdc7204b3a56a1bc59bee1ce056701d96f42cc35aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UEOChoixBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UEOChoixBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des etudiants";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Parcours edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"nav\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("parcours");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle:Parcours:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 78,  137 => 63,  124 => 48,  100 => 42,  81 => 31,  77 => 26,  104 => 43,  58 => 21,  84 => 30,  53 => 15,  34 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 83,  140 => 52,  132 => 50,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 43,  71 => 25,  67 => 23,  63 => 17,  59 => 16,  38 => 5,  94 => 41,  89 => 29,  85 => 28,  75 => 36,  68 => 24,  56 => 15,  87 => 37,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 27,  46 => 11,  27 => 4,  44 => 9,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 71,  142 => 59,  138 => 54,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 16,  62 => 23,  49 => 11,  24 => 4,  25 => 1,  19 => 1,  79 => 37,  72 => 16,  69 => 5,  47 => 4,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 60,  145 => 46,  139 => 45,  131 => 52,  123 => 55,  120 => 47,  115 => 43,  111 => 37,  108 => 44,  101 => 32,  98 => 18,  96 => 41,  83 => 12,  74 => 27,  66 => 15,  55 => 17,  52 => 21,  50 => 14,  43 => 7,  41 => 8,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 87,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 67,  141 => 48,  133 => 55,  130 => 59,  125 => 44,  122 => 43,  116 => 51,  112 => 45,  109 => 47,  106 => 36,  103 => 32,  99 => 31,  95 => 39,  92 => 40,  86 => 28,  82 => 38,  80 => 11,  73 => 19,  64 => 23,  60 => 19,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 7,  39 => 12,  36 => 5,  33 => 4,  30 => 8,);
    }
}
