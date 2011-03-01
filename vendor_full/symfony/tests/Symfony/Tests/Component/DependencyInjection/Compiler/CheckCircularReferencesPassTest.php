<?php

namespace Symfony\Tests\Component\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Reference;

use Symfony\Component\DependencyInjection\Compiler\CheckCircularReferencesPass;

use Symfony\Component\DependencyInjection\Compiler\AnalyzeServiceReferencesPass;

use Symfony\Component\DependencyInjection\Compiler\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class CheckCircularReferencesPassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \RuntimeException
     */
    public function testProcess()
    {
        $container = new ContainerBuilder();
        $container->register('a')->addArgument(new Reference('b'));
        $container->register('b')->addArgument(new Reference('a'));

        $this->process($container);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testProcessDetectsIndirectCircularReference()
    {
        $container = new ContainerBuilder();
        $container->register('a')->addArgument(new Reference('b'));
        $container->register('b')->addArgument(new Reference('c'));
        $container->register('c')->addArgument(new Reference('a'));

        $this->process($container);
    }

    public function testProcessIgnoresMethodCalls()
    {
        $container = new ContainerBuilder();
        $container->register('a')->addArgument(new Reference('b'));
        $container->register('b')->addMethodCall('setA', array(new Reference('a')));

        $this->process($container);
    }

    protected function process(ContainerBuilder $container)
    {
        $compiler = new Compiler();
        $passConfig = $compiler->getPassConfig();
        $passConfig->setOptimizationPasses(array(
            new AnalyzeServiceReferencesPass(true),
            new CheckCircularReferencesPass(),
        ));
        $passConfig->setRemovingPasses(array());

        $compiler->compile($container);
    }
}