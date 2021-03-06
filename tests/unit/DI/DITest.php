<?php

declare(strict_types=1);

namespace Mihaeu\PhpDependencies\DI;

use Mihaeu\PhpDependencies\Analyser\Parser;
use Mihaeu\PhpDependencies\Analyser\StaticAnalyser;
use Mihaeu\PhpDependencies\Analyser\XDebugFunctionTraceAnalyser;
use Mihaeu\PhpDependencies\Dependencies\DependencyFactory;
use Mihaeu\PhpDependencies\Dependencies\DependencyFilter;
use Mihaeu\PhpDependencies\OS\PhpFileFinder;

/**
 * @covers Mihaeu\PhpDependencies\DI\DI
 */
class DITest extends \PHPUnit\Framework\TestCase
{
    public function testCreatesDependencyFilter()
    {
        $this->assertInstanceOf(DependencyFilter::class, (new DI([]))->dependencyFilter());
    }
    
    public function testCreatesPhpFileFinder()
    {
        $this->assertInstanceOf(PhpFileFinder::class, (new DI([]))->phpFileFinder());
    }

    public function testCreatesParser()
    {
        $this->assertInstanceOf(Parser::class, (new DI([]))->parser());
    }

    public function testCreatesStaticAnalyser()
    {
        $this->assertInstanceOf(StaticAnalyser::class, (new DI([]))->staticAnalyser());
    }

    public function testCreatesDefaultDependencyFactory()
    {
        $this->assertInstanceOf(DependencyFactory::class, (new DI([]))->dependencyFactory());
    }

    public function testCreatesDynamicAnalyser()
    {
        $this->assertInstanceOf(XDebugFunctionTraceAnalyser::class, (new DI([]))->xDebugFunctionTraceAnalyser());
    }
}
