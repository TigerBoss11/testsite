<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* __string_template__014e0362727515e7fba15945b8e15b97 */
class __TwigTemplate_55f1cb9fc99c5bc301a8ea991d414467 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container mt-4\">
  <div class=\"hero-section bg-primary text-white py-5 rounded text-center mb-4\">
    <h1 class=\"display-4\">Добро пожаловать в наш магазин</h1>
    <p class=\"lead\">Лучшие товары по выгодным ценам</p>
    <a href=\"/catalog\" class=\"btn btn-warning btn-lg mt-3\">🛍️ Перейти к покупкам</a>
  </div>
  <div class=\"categories-section py-3\">
    <h2 class=\"text-center mb-3\">Популярные бренды</h2>
    <div class=\"row\">
      <div class=\"col-md-4 text-center mb-4\">
        <a href=\"/catalog/xiaomi\" class=\"btn btn-outline-primary p-4 w-100\">Xiaomi</a>
      </div>
      <div class=\"col-md-4 text-center mb-4\">
        <a href=\"/catalog/samsung\" class=\"btn btn-outline-success p-4 w-100\">Samsung</a>
      </div>
      <div class=\"col-md-4 text-center mb-4\">
        <a href=\"/catalog/apple\" class=\"btn btn-outline-dark p-4 w-100\">Apple</a>
      </div>
    </div>
  </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__014e0362727515e7fba15945b8e15b97";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__014e0362727515e7fba15945b8e15b97", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
