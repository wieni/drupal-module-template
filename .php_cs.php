<?php

use Wieni\wmcodestyle\PhpCsFixer\Config\Factory;
use Wieni\wmcodestyle\PhpCsFixer\Config\RuleSet\Php72;

$config = Factory::fromRuleSet(new Php72);

$config->getFinder()
    ->ignoreVCSIgnored(true)
    ->in(__DIR__)
    ->name('/\.(php|module|inc|install|test|profile|theme)$/');

$config->setCacheFile(__DIR__ . '/.php_cs.cache');

return $config;
