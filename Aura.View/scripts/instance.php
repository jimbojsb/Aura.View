<?php
namespace Aura\View;
require_once dirname(__DIR__) . '/src.php';
return new Template(
    new EscaperFactory,
    new TemplateFinder,
    new HelperLocator
);
