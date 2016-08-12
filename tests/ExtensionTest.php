<?php

namespace Tests\LoremPixelTwigExtension;

use LoremPixelTwigExtension\LoremPixelTwigExtension;
use Twig_Test_IntegrationTestCase;

class ExtensionTest extends Twig_Test_IntegrationTestCase
{
    protected function getExtensions()
    {
        return [
            new LoremPixelTwigExtension(),
        ];
    }

    protected function getFixturesDir()
    {
        return __DIR__.'/ExtensionFixture/';
    }
}
