<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\DoctrineMongoDBBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class YamlMongoDBExtensionTest extends AbstractMongoDBExtensionTest
{
    protected function loadFromFile(ContainerBuilder $container, $file)
    {
        $loadYaml = new YamlFileLoader($container, new FileLocator(__DIR__.'/Fixtures/config/yml'));
        $loadYaml->load($file.'.yml');
    }
}