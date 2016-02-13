<?php

namespace Fresco\Tests\Definitions;

use Fresco\Application;
use Fresco\Contracts\View\Factory;
use Fresco\Definitions\TwigDefinition;
use Interop\Container\Definition\DefinitionProviderInterface;

class TwigDefinitionTest extends DefinitionTestCase
{
    public function getDefinition() : DefinitionProviderInterface
    {
        return new TwigDefinition(new Application(__DIR__));
    }

    public function shouldDefine() : array
    {
        return [
            Factory::class
        ];
    }
}
