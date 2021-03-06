<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;


/**
 * appTestDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appTestDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }

    /**
     * Gets the 'b982863c094943515670dad8e0aaa33d_1' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Gherkin\Loader\GherkinFileLoader A Behat\Gherkin\Loader\GherkinFileLoader instance.
     */
    protected function getB982863c094943515670dad8e0aaa33d1Service()
    {
        return $this->services['b982863c094943515670dad8e0aaa33d_1'] = new \Behat\Gherkin\Loader\GherkinFileLoader($this->get('gherkin.parser'));
    }

    /**
     * Gets the 'b982863c094943515670dad8e0aaa33d_2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Gherkin\Lexer A Behat\Gherkin\Lexer instance.
     */
    protected function getB982863c094943515670dad8e0aaa33d2Service()
    {
        return $this->services['b982863c094943515670dad8e0aaa33d_2'] = new \Behat\Gherkin\Lexer($this->get('gherkin.keywords'));
    }

    /**
     * Gets the 'b982863c094943515670dad8e0aaa33d_3' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\Definition\Loader\PhpFileLoader A Behat\Behat\Definition\Loader\PhpFileLoader instance.
     */
    protected function getB982863c094943515670dad8e0aaa33d3Service()
    {
        return $this->services['b982863c094943515670dad8e0aaa33d_3'] = new \Behat\Behat\Definition\Loader\PhpFileLoader($this->get('behat.definition_dispatcher'));
    }

    /**
     * Gets the 'b982863c094943515670dad8e0aaa33d_4' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\Hook\Loader\PhpFileLoader A Behat\Behat\Hook\Loader\PhpFileLoader instance.
     */
    protected function getB982863c094943515670dad8e0aaa33d4Service()
    {
        return $this->services['b982863c094943515670dad8e0aaa33d_4'] = new \Behat\Behat\Hook\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'b982863c094943515670dad8e0aaa33d_5' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\MessageSelector A Symfony\Component\Translation\MessageSelector instance.
     */
    protected function getB982863c094943515670dad8e0aaa33d5Service()
    {
        return $this->services['b982863c094943515670dad8e0aaa33d_5'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /**
     * Gets the 'b982863c094943515670dad8e0aaa33d_6' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getB982863c094943515670dad8e0aaa33d6Service()
    {
        return $this->services['b982863c094943515670dad8e0aaa33d_6'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'behat.definition_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\Definition\DefinitionDispatcher A Behat\Behat\Definition\DefinitionDispatcher instance.
     */
    protected function getBehat_DefinitionDispatcherService()
    {
        $this->services['behat.definition_dispatcher'] = $instance = new \Behat\Behat\Definition\DefinitionDispatcher($this->get('behat.translator'));

        $instance->addLoader('php', $this->get('b982863c094943515670dad8e0aaa33d_3'));

        return $instance;
    }

    /**
     * Gets the 'behat.definition_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\Definition\DefinitionDumper A Behat\Behat\Definition\DefinitionDumper instance.
     */
    protected function getBehat_DefinitionDumperService()
    {
        return $this->services['behat.definition_dumper'] = new \Behat\Behat\Definition\DefinitionDumper($this->get('behat.definition_dispatcher'), $this->get('behat.translator'));
    }

    /**
     * Gets the 'behat.environment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\BehatBundle\Environment\SymfonyBrowserEnvironment A Behat\BehatBundle\Environment\SymfonyBrowserEnvironment instance.
     */
    protected function getBehat_EnvironmentService()
    {
        return $this->services['behat.environment'] = new \Behat\BehatBundle\Environment\SymfonyBrowserEnvironment($this);
    }

    /**
     * Gets the 'behat.environment_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\Environment\EnvironmentBuilder A Behat\Behat\Environment\EnvironmentBuilder instance.
     */
    protected function getBehat_EnvironmentBuilderService()
    {
        return $this->services['behat.environment_builder'] = new \Behat\Behat\Environment\EnvironmentBuilder($this);
    }

    /**
     * Gets the 'behat.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\EventDispatcher\EventDispatcher A Behat\Behat\EventDispatcher\EventDispatcher instance.
     */
    protected function getBehat_EventDispatcherService()
    {
        return $this->services['behat.event_dispatcher'] = new \Behat\Behat\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the 'behat.hook_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\Hook\HookDispatcher A Behat\Behat\Hook\HookDispatcher instance.
     */
    protected function getBehat_HookDispatcherService()
    {
        $this->services['behat.hook_dispatcher'] = $instance = new \Behat\Behat\Hook\HookDispatcher();

        $instance->addLoader('php', $this->get('b982863c094943515670dad8e0aaa33d_4'));

        return $instance;
    }

    /**
     * Gets the 'behat.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Behat\DataCollector\LoggerDataCollector A Behat\Behat\DataCollector\LoggerDataCollector instance.
     */
    protected function getBehat_LoggerService()
    {
        return $this->services['behat.logger'] = new \Behat\Behat\DataCollector\LoggerDataCollector();
    }

    /**
     * Gets the 'behat.tester.background' service.
     *
     * @return Behat\Behat\Tester\BackgroundTester A Behat\Behat\Tester\BackgroundTester instance.
     */
    protected function getBehat_Tester_BackgroundService()
    {
        return new \Behat\Behat\Tester\BackgroundTester($this);
    }

    /**
     * Gets the 'behat.tester.feature' service.
     *
     * @return Behat\Behat\Tester\FeatureTester A Behat\Behat\Tester\FeatureTester instance.
     */
    protected function getBehat_Tester_FeatureService()
    {
        return new \Behat\Behat\Tester\FeatureTester($this);
    }

    /**
     * Gets the 'behat.tester.outline' service.
     *
     * @return Behat\Behat\Tester\OutlineTester A Behat\Behat\Tester\OutlineTester instance.
     */
    protected function getBehat_Tester_OutlineService()
    {
        return new \Behat\Behat\Tester\OutlineTester($this);
    }

    /**
     * Gets the 'behat.tester.scenario' service.
     *
     * @return Behat\Behat\Tester\ScenarioTester A Behat\Behat\Tester\ScenarioTester instance.
     */
    protected function getBehat_Tester_ScenarioService()
    {
        return new \Behat\Behat\Tester\ScenarioTester($this);
    }

    /**
     * Gets the 'behat.tester.step' service.
     *
     * @return Behat\Behat\Tester\StepTester A Behat\Behat\Tester\StepTester instance.
     */
    protected function getBehat_Tester_StepService()
    {
        return new \Behat\Behat\Tester\StepTester($this);
    }

    /**
     * Gets the 'behat.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Translator A Symfony\Component\Translation\Translator instance.
     */
    protected function getBehat_TranslatorService()
    {
        $this->services['behat.translator'] = $instance = new \Symfony\Component\Translation\Translator('en', $this->get('b982863c094943515670dad8e0aaa33d_5'));

        $instance->addLoader('xliff', $this->get('b982863c094943515670dad8e0aaa33d_6'));
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Behat/i18n/en.xliff', 'en', 'behat');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Behat/i18n/ru.xliff', 'ru', 'behat');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Behat/i18n/fr.xliff', 'fr', 'behat');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Behat/i18n/id.xliff', 'id', 'behat');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Behat/i18n/pt.xliff', 'pt', 'behat');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Behat/i18n/de.xliff', 'de', 'behat');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/en.xliff', 'en', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/ar.xliff', 'ar', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/bg.xliff', 'bg', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/ca.xliff', 'ca', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/cy-GB.xliff', 'cy-GB', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/cs.xliff', 'cs', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/da.xliff', 'da', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/de.xliff', 'de', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/en-au.xliff', 'en-au', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/en-lol.xliff', 'en-lol', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/en-pirate.xliff', 'en-pirate', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/en-Scouse.xliff', 'en-Scouse', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/en-tx.xliff', 'en-tx', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/eo.xliff', 'eo', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/es.xliff', 'es', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/et.xliff', 'et', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/fi.xliff', 'fi', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/fr.xliff', 'fr', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/he.xliff', 'he', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/hr.xliff', 'hr', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/hu.xliff', 'hu', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/id.xliff', 'id', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/it.xliff', 'it', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/ja.xliff', 'ja', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/ko.xliff', 'ko', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/lt.xliff', 'lt', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/lu.xliff', 'lu', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/lv.xliff', 'lv', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/nl.xliff', 'nl', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/no.xliff', 'no', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/pl.xliff', 'pl', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/pt.xliff', 'pt', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/ro.xliff', 'ro', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/ru.xliff', 'ru', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/sv.xliff', 'sv', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/sk.xliff', 'sk', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/sr-Latn.xliff', 'sr-Latn', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/sr-Cyrl.xliff', 'sr-Cyrl', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/tr.xliff', 'tr', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/uk.xliff', 'uk', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/uz.xliff', 'uz', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/vi.xliff', 'vi', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/zh-CN.xliff', 'zh-CN', 'gherkin');
        $instance->addResource('xliff', '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n/zh-TW.xliff', 'zh-TW', 'gherkin');

        return $instance;
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassMapCacheWarmer($this), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router.real')), 2 => new \Symfony\Bundle\DoctrineMongoDBBundle\CacheWarmer\ProxyCacheWarmer($this), 3 => new \Symfony\Bundle\DoctrineMongoDBBundle\CacheWarmer\HydratorCacheWarmer($this)));
    }

    /**
     * Gets the 'debug.toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\WebDebugToolbarListener instance.
     */
    protected function getDebug_ToolbarService()
    {
        return $this->services['debug.toolbar'] = new \Symfony\Bundle\WebProfilerBundle\WebDebugToolbarListener($this->get('http_kernel'), $this->get('templating'), false);
    }

    /**
     * Gets the 'doctrine.odm.mongodb.cache.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrine_Odm_Mongodb_Cache_ArrayService()
    {
        return $this->services['doctrine.odm.mongodb.cache.array'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the 'doctrine.odm.mongodb.default_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\MongoDB\Configuration A Doctrine\ODM\MongoDB\Configuration instance.
     */
    protected function getDoctrine_Odm_Mongodb_DefaultConfigurationService()
    {
        $a = $this->get('doctrine.odm.mongodb.metadata.annotation_reader');

        $b = new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver($a, array('Sensio\\HelloBundle\\Document' => '/home/lelo/projects/symfony.dev/src/Sensio/HelloBundle/Document', 0 => '/home/lelo/projects/symfony.dev/src/Sensio/HelloBundle/Document'));

        $c = new \Doctrine\ODM\MongoDB\Mapping\Driver\DriverChain();
        $c->addDriver($b, 'Sensio\\HelloBundle\\Document');
        $c->addDriver($b, 'Sensio\\HelloBundle\\Document');

        $this->services['doctrine.odm.mongodb.default_configuration'] = $instance = new \Doctrine\ODM\MongoDB\Configuration();

        $instance->setDocumentNamespaces(array('HelloBundle' => 'Sensio\\HelloBundle\\Document'));
        $instance->setMetadataCacheImpl($this->get('doctrine.odm.mongodb.default_metadata_cache'));
        $instance->setMetadataDriverImpl($c);
        $instance->setProxyDir('/home/lelo/projects/symfony.dev/app/cache/test/doctrine/odm/mongodb/Proxies');
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(false);
        $instance->setHydratorDir('/home/lelo/projects/symfony.dev/app/cache/test/doctrine/odm/mongodb/Hydrators');
        $instance->setHydratorNamespace('Hydrators');
        $instance->setAutoGenerateHydratorClasses(true);
        $instance->setDefaultDB('symfony_test');
        $instance->setLoggerCallable(array(0 => $this->get('doctrine.odm.mongodb.logger'), 1 => 'logQuery'));

        return $instance;
    }

    /**
     * Gets the 'doctrine.odm.mongodb.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\MongoDB\Connection A Doctrine\MongoDB\Connection instance.
     */
    protected function getDoctrine_Odm_Mongodb_DefaultConnectionService()
    {
        return $this->services['doctrine.odm.mongodb.default_connection'] = new \Doctrine\MongoDB\Connection(NULL, array(), $this->get('doctrine.odm.mongodb.default_configuration'));
    }

    /**
     * Gets the 'doctrine.odm.mongodb.default_document_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\MongoDB\DocumentManager A Doctrine\ODM\MongoDB\DocumentManager instance.
     */
    protected function getDoctrine_Odm_Mongodb_DefaultDocumentManagerService()
    {
        return $this->services['doctrine.odm.mongodb.default_document_manager'] = call_user_func(array('Doctrine\\ODM\\MongoDB\\DocumentManager', 'create'), $this->get('doctrine.odm.mongodb.default_connection'), $this->get('doctrine.odm.mongodb.default_configuration'), $this->get('doctrine.odm.mongodb.event_manager'));
    }

    /**
     * Gets the 'doctrine.odm.mongodb.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrine_Odm_Mongodb_DefaultMetadataCacheService()
    {
        return $this->services['doctrine.odm.mongodb.default_metadata_cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the 'doctrine.odm.mongodb.event_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\EventManager A Doctrine\Common\EventManager instance.
     */
    protected function getDoctrine_Odm_Mongodb_EventManagerService()
    {
        return $this->services['doctrine.odm.mongodb.event_manager'] = new \Doctrine\Common\EventManager();
    }

    /**
     * Gets the 'doctrine.odm.mongodb.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\DoctrineMongoDBBundle\Logger\DoctrineMongoDBLogger A Symfony\Bundle\DoctrineMongoDBBundle\Logger\DoctrineMongoDBLogger instance.
     */
    protected function getDoctrine_Odm_Mongodb_LoggerService()
    {
        return $this->services['doctrine.odm.mongodb.logger'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Logger\DoctrineMongoDBLogger($this->get('logger'));
    }

    /**
     * Gets the 'doctrine.odm.mongodb.metadata.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver A Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver instance.
     */
    protected function getDoctrine_Odm_Mongodb_Metadata_AnnotationService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.annotation'] = new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver($this->get('doctrine.odm.mongodb.metadata.annotation_reader'), array());
    }

    /**
     * Gets the 'doctrine.odm.mongodb.metadata.annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance.
     */
    protected function getDoctrine_Odm_Mongodb_Metadata_AnnotationReaderService()
    {
        $this->services['doctrine.odm.mongodb.metadata.annotation_reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader($this->get('doctrine.odm.mongodb.cache.array'));

        $instance->setAnnotationNamespaceAlias('Doctrine\\ODM\\MongoDB\\Mapping\\', 'mongodb');

        return $instance;
    }

    /**
     * Gets the 'doctrine.odm.mongodb.metadata.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\MongoDB\Mapping\Driver\DriverChain A Doctrine\ODM\MongoDB\Mapping\Driver\DriverChain instance.
     */
    protected function getDoctrine_Odm_Mongodb_Metadata_ChainService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.chain'] = new \Doctrine\ODM\MongoDB\Mapping\Driver\DriverChain();
    }

    /**
     * Gets the 'doctrine.odm.mongodb.metadata.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\MongoDB\Mapping\Driver\XmlDriver A Doctrine\ODM\MongoDB\Mapping\Driver\XmlDriver instance.
     */
    protected function getDoctrine_Odm_Mongodb_Metadata_XmlService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.xml'] = new \Doctrine\ODM\MongoDB\Mapping\Driver\XmlDriver(array());
    }

    /**
     * Gets the 'doctrine.odm.mongodb.metadata.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\MongoDB\Mapping\Driver\YamlDriver A Doctrine\ODM\MongoDB\Mapping\Driver\YamlDriver instance.
     */
    protected function getDoctrine_Odm_Mongodb_Metadata_YmlService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.yml'] = new \Doctrine\ODM\MongoDB\Mapping\Driver\YamlDriver(array());
    }

    /**
     * Gets the 'doctrine_odm.mongodb.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\DoctrineMongoDBBundle\Validator\Constraints\UniqueValidator A Symfony\Bundle\DoctrineMongoDBBundle\Validator\Constraints\UniqueValidator instance.
     */
    protected function getDoctrineOdm_Mongodb_Validator_UniqueService()
    {
        return $this->services['doctrine_odm.mongodb.validator.unique'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Validator\Constraints\UniqueValidator($this);
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Debug\EventDispatcher A Symfony\Bundle\FrameworkBundle\Debug\EventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Bundle\FrameworkBundle\Debug\EventDispatcher($this, $this->get('logger'));

        $instance->registerKernelListeners(array('core.request' => array(0 => array(0 => array(0 => 'request_listener', 1 => 'handle'))), 'core.response' => array(0 => array(0 => array(0 => 'response_listener', 1 => 'filter'), 1 => array(0 => 'profiler_listener', 1 => 'handleResponse')), -128 => array(0 => array(0 => 'test.session.listener', 1 => 'filter'))), 'core.exception' => array(-128 => array(0 => array(0 => 'exception_listener', 1 => 'handle')), 0 => array(0 => array(0 => 'profiler_listener', 1 => 'handleException')))));

        return $instance;
    }

    /**
     * Gets the 'exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\ExceptionListener A Symfony\Component\HttpKernel\Debug\ExceptionListener instance.
     */
    protected function getExceptionListenerService()
    {
        return $this->services['exception_listener'] = new \Symfony\Component\HttpKernel\Debug\ExceptionListener('Symfony\\Bundle\\FrameworkBundle\\Controller\\ExceptionController::showAction', $this->get('logger'));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Util\Filesystem A Symfony\Bundle\FrameworkBundle\Util\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Bundle\FrameworkBundle\Util\Filesystem();
    }

    /**
     * Gets the 'form.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormContext A Symfony\Component\Form\FormContext instance.
     */
    protected function getForm_ContextService()
    {
        return $this->services['form.context'] = new \Symfony\Component\Form\FormContext(array('validator' => $this->get('validator'), 'validation_groups' => 'Default', 'field_factory' => $this->get('form.field_factory'), 'csrf_protection' => true, 'csrf_field_name' => '_token', 'csrf_provider' => $this->get('form.csrf_provider')));
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\CsrfProvider\SessionCsrfProvider A Symfony\Component\Form\CsrfProvider\SessionCsrfProvider instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\CsrfProvider\SessionCsrfProvider($this->get('session'), 'xxxxxxxxxx');
    }

    /**
     * Gets the 'form.field_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FieldFactory\FieldFactory A Symfony\Component\Form\FieldFactory\FieldFactory instance.
     */
    protected function getForm_FieldFactoryService()
    {
        return $this->services['form.field_factory'] = new \Symfony\Component\Form\FieldFactory\FieldFactory(array(0 => new \Symfony\Component\Form\FieldFactory\ValidatorFieldFactoryGuesser($this->get('validator.mapping.class_metadata_factory'))));
    }

    /**
     * Gets the 'gherkin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Gherkin\Gherkin A Behat\Gherkin\Gherkin instance.
     */
    protected function getGherkinService()
    {
        $this->services['gherkin'] = $instance = new \Behat\Gherkin\Gherkin();

        $instance->addLoader($this->get('b982863c094943515670dad8e0aaa33d_1'));

        return $instance;
    }

    /**
     * Gets the 'gherkin.keywords' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Gherkin\Keywords\SymfonyTranslationKeywords A Behat\Gherkin\Keywords\SymfonyTranslationKeywords instance.
     */
    protected function getGherkin_KeywordsService()
    {
        return $this->services['gherkin.keywords'] = new \Behat\Gherkin\Keywords\SymfonyTranslationKeywords($this->get('behat.translator'));
    }

    /**
     * Gets the 'gherkin.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Behat\Gherkin\Parser A Behat\Gherkin\Parser instance.
     */
    protected function getGherkin_ParserService()
    {
        return $this->services['gherkin.parser'] = new \Behat\Gherkin\Parser($this->get('b982863c094943515670dad8e0aaa33d_2'));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\HttpKernel A Symfony\Bundle\FrameworkBundle\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        $this->services['http_kernel'] = $instance = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('logger')));

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\ZendBundle\Logger\Logger A Symfony\Bundle\ZendBundle\Logger\Logger instance.
     */
    protected function getLoggerService()
    {
        $a = new \Zend\Log\Filter\Priority(7);

        $b = new \Zend\Log\Writer\Stream('/home/lelo/projects/symfony.dev/app/logs/test.log');
        $b->addFilter($a);
        $b->setFormatter(new \Zend\Log\Formatter\Simple('%timestamp% %priorityName%: %message%
'));

        $c = new \Symfony\Bundle\ZendBundle\Logger\DebugLogger();
        $c->addFilter($a);

        $this->services['logger'] = $instance = new \Symfony\Bundle\ZendBundle\Logger\Logger();

        $instance->addWriter($b);
        $instance->addWriter($c);

        return $instance;
    }

    /**
     * Gets the 'mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getMailerService()
    {
        require_once '/home/lelo/projects/symfony.dev/vendor/swiftmailer/lib/swift_init.php';

        return $this->services['mailer'] = new \Swift_Mailer($this->get('swiftmailer.transport'));
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new \RuntimeException('You cannot create a service ("profiler") of an inactive scope ("request").');
        }

        $a = $this->get('logger');
        $b = $this->get('kernel');

        $c = new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector();
        $c->setEventDispatcher($this->get('event_dispatcher'));

        $this->services['profiler'] = $this->scopedServices['request']['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\SqliteProfilerStorage('/home/lelo/projects/symfony.dev/app/cache/test/profiler.db', 86400), $a);

        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector($b));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add($c);
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\TimerDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Bundle\DoctrineMongoDBBundle\DataCollector\DoctrineMongoDBDataCollector($this->get('doctrine.odm.mongodb.logger')));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Profiler\ProfilerListener A Symfony\Bundle\FrameworkBundle\Profiler\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Bundle\FrameworkBundle\Profiler\ProfilerListener($this, NULL, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws \RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new \RuntimeException('You cannot create a service ("request") of an inactive scope ("request").');
        }

        throw new \RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\RequestListener A Symfony\Bundle\FrameworkBundle\RequestListener instance.
     */
    protected function getRequestListenerService()
    {
        return $this->services['request_listener'] = new \Symfony\Bundle\FrameworkBundle\RequestListener($this, $this->get('router.real'), $this->get('logger'));
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\ResponseListener A Symfony\Component\HttpKernel\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router.cached' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\CachedRouter A Symfony\Bundle\FrameworkBundle\Routing\CachedRouter instance.
     */
    protected function getRouter_CachedService()
    {
        return $this->services['router.cached'] = new \Symfony\Bundle\FrameworkBundle\Routing\CachedRouter('/home/lelo/projects/symfony.dev/app/cache/test', 'apptestUrlMatcher', 'apptestUrlGenerator');
    }

    /**
     * Gets the 'router.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\Router A Symfony\Component\Routing\Router instance.
     */
    protected function getRouter_RealService()
    {
        return $this->services['router.real'] = new \Symfony\Component\Routing\Router(new \Symfony\Bundle\FrameworkBundle\Routing\LazyLoader($this, 'routing.loader.real'), '/home/lelo/projects/symfony.dev/app/config/routing_dev.yml', array('cache_dir' => '/home/lelo/projects/symfony.dev/app/cache/test', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'apptestUrlGenerator', 'matcher_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher', 'matcher_base_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'apptestUrlMatcher', 'resource_type' => ''));
    }

    /**
     * Gets the 'routing.loader.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_Loader_RealService()
    {
        $a = $this->get('kernel');

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator($a);

        $c = new \Symfony\Component\Config\Loader\LoaderResolver();
        $c->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $c->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $c->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));

        return $this->services['routing.loader.real'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('logger'), $c);
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session A Symfony\Component\HttpFoundation\Session instance.
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session($this->get('session.storage'), array('default_locale' => 'en'));

        $instance->start();

        return $instance;
    }

    /**
     * Gets the 'session.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\SessionStorage\ArraySessionStorage A Symfony\Component\HttpFoundation\SessionStorage\ArraySessionStorage instance.
     */
    protected function getSession_StorageService()
    {
        return $this->services['session.storage'] = new \Symfony\Component\HttpFoundation\SessionStorage\ArraySessionStorage(array('lifetime' => 3600));
    }

    /**
     * Gets the 'swiftmailer.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_TransportService()
    {
        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername(NULL);
        $instance->setPassword(NULL);
        $instance->setAuthMode(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('twig.globals'));
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('request'), array(), NULL);
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/home/lelo/projects/symfony.dev/app');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form'));

        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($a);
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router.real'));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'test.client' service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Client A Symfony\Bundle\FrameworkBundle\Client instance.
     */
    protected function getTest_ClientService()
    {
        return new \Symfony\Bundle\FrameworkBundle\Client($this->get('kernel'), array(), new \Symfony\Component\BrowserKit\History(), new \Symfony\Component\BrowserKit\CookieJar());
    }

    /**
     * Gets the 'test.client.cookiejar' service.
     *
     * @return Symfony\Component\BrowserKit\CookieJar A Symfony\Component\BrowserKit\CookieJar instance.
     */
    protected function getTest_Client_CookiejarService()
    {
        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /**
     * Gets the 'test.client.history' service.
     *
     * @return Symfony\Component\BrowserKit\History A Symfony\Component\BrowserKit\History instance.
     */
    protected function getTest_Client_HistoryService()
    {
        return new \Symfony\Component\BrowserKit\History();
    }

    /**
     * Gets the 'test.session.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\HttpFoundation\SessionListener A Symfony\Bundle\FrameworkBundle\HttpFoundation\SessionListener instance.
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->services['test.session.listener'] = new \Symfony\Bundle\FrameworkBundle\HttpFoundation\SessionListener();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\IdentityTranslator A Symfony\Component\Translation\IdentityTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator($this->get('translator.selector'));
    }

    /**
     * Gets the 'translator.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_RealService()
    {
        $this->services['translator.real'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('cache_dir' => '/home/lelo/projects/symfony.dev/app/cache/test/translations', 'debug' => true), $this->get('session'));

        $instance->setFallbackLocale('en');

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'cache' => '/home/lelo/projects/symfony.dev/app/cache/test/twig', 'charset' => 'UTF-8'));

        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\TransExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\TemplatingExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\FormExtension(array(0 => 'TwigBundle::form.html.twig')));

        return $instance;
    }

    /**
     * Gets the 'twig.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\GlobalVariables A Symfony\Bundle\TwigBundle\GlobalVariables instance.
     */
    protected function getTwig_GlobalsService()
    {
        return $this->services['twig.globals'] = new \Symfony\Bundle\TwigBundle\GlobalVariables($this);
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        return $this->services['twig.loader'] = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('doctrine_odm.mongodb.unique' => 'doctrine_odm.mongodb.validator.unique')));
    }

    /**
     * Gets the debug.event_dispatcher service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Debug\EventDispatcher An instance of the event_dispatcher service
     */
    protected function getDebug_EventDispatcherService()
    {
        return $this->get('event_dispatcher');
    }

    /**
     * Gets the doctrine.odm.mongodb.cache service alias.
     *
     * @return Doctrine\Common\Cache\ArrayCache An instance of the doctrine.odm.mongodb.cache.array service
     */
    protected function getDoctrine_Odm_Mongodb_CacheService()
    {
        return $this->get('doctrine.odm.mongodb.cache.array');
    }

    /**
     * Gets the doctrine.odm.mongodb.document_manager service alias.
     *
     * @return Doctrine\ODM\MongoDB\DocumentManager An instance of the doctrine.odm.mongodb.default_document_manager service
     */
    protected function getDoctrine_Odm_Mongodb_DocumentManagerService()
    {
        return $this->get('doctrine.odm.mongodb.default_document_manager');
    }

    /**
     * Gets the router service alias.
     *
     * @return Symfony\Component\Routing\Router An instance of the router.real service
     */
    protected function getRouterService()
    {
        return $this->get('router.real');
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'), $this->get('logger'));
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/home/lelo/projects/symfony.dev/app');
    }

    /**
     * Gets the 'translator.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Translation\MessageSelector A Symfony\Component\Translation\MessageSelector instance.
     */
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader(array('validation' => 'Symfony\\Component\\Validator\\Constraints\\', 'mongodb' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Validator\\Constraints\\')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader('loadValidatorMetadata'), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/home/lelo/projects/symfony.dev/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/DependencyInjection/../../../Component/Form/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!array_key_exists($name, $this->parameters)) {
            throw new \InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new \LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/home/lelo/projects/symfony.dev/app',
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/home/lelo/projects/symfony.dev/app/cache/test',
            'kernel.logs_dir' => '/home/lelo/projects/symfony.dev/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'ZendBundle' => 'Symfony\\Bundle\\ZendBundle\\ZendBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Symfony\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMongoDBBundle' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\DoctrineMongoDBBundle',
                'BehatBundle' => 'Behat\\BehatBundle\\BehatBundle',
                'HelloBundle' => 'Sensio\\HelloBundle\\HelloBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'request_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\RequestListener',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\ResponseListener',
            'exception_listener.class' => 'Symfony\\Component\\HttpKernel\\Debug\\ExceptionListener',
            'exception_listener.controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ExceptionController::showAction',
            'form.field_factory.class' => 'Symfony\\Component\\Form\\FieldFactory\\FieldFactory',
            'form.field_factory.validator_guesser.class' => 'Symfony\\Component\\Form\\FieldFactory\\ValidatorFieldFactoryGuesser',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\CsrfProvider\\SessionCsrfProvider',
            'form.context.class' => 'Symfony\\Component\\Form\\FormContext',
            'form.csrf_protection.enabled' => true,
            'form.csrf_protection.field_name' => '_token',
            'form.csrf_protection.secret' => 'xxxxxxxxxx',
            'form.validation_groups' => 'Default',
            'event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'error_handler.class' => 'Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler',
            'error_handler.level' => NULL,
            'filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Util\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_warmer.autoloader_map.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ClassMapCacheWarmer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translator.fallback_locale' => 'en',
            'debug.event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\Debug\\EventDispatcher',
            'kernel.cache_warmup' => false,
            'test.client.class' => 'Symfony\\Bundle\\FrameworkBundle\\Client',
            'test.client.parameters' => array(

            ),
            'test.client.history.class' => 'Symfony\\Component\\BrowserKit\\History',
            'test.client.cookiejar.class' => 'Symfony\\Component\\BrowserKit\\CookieJar',
            'test.session.listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpFoundation\\SessionListener',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler.storage.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\SqliteProfilerStorage',
            'profiler.storage.file' => '/home/lelo/projects/symfony.dev/app/cache/test/profiler.db',
            'profiler.storage.lifetime' => 86400,
            'profiler_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\Profiler\\ProfilerListener',
            'profiler_listener.only_exceptions' => false,
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.timer.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\TimerDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'router.class' => 'Symfony\\Component\\Routing\\Router',
            'router.cached.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\CachedRouter',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'apptestUrlMatcher',
            'router.options.generator.cache_class' => 'apptestUrlGenerator',
            'router.options.resource_type' => '',
            'routing.resource' => '/home/lelo/projects/symfony.dev/app/config/routing_dev.yml',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session',
            'session.default_locale' => 'en',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\NativeSessionStorage',
            'session.storage.native.options' => array(

            ),
            'session.storage.pdo.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\PdoSessionStorage',
            'session.storage.pdo.options' => array(

            ),
            'session.storage.array.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\ArraySessionStorage',
            'session.storage.array.options' => array(
                'lifetime' => 3600,
            ),
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.locator.cached.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\CachedTemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.assets.version' => NULL,
            'templating.assets.base_urls' => array(

            ),
            'debug.file_link_format' => NULL,
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.debugger.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Debugger',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_file_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFileLoader',
            'validator.mapping.loader.yaml_file_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFileLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.mapping.loader.static_method_loader.method_name' => 'loadValidatorMetadata',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.annotations.namespaces' => array(
                'validation' => 'Symfony\\Component\\Validator\\Constraints\\',
                'mongodb' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Validator\\Constraints\\',
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.globals.class' => 'Symfony\\Bundle\\TwigBundle\\GlobalVariables',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'templating.cache_warmer.templates_cache.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.form.resources' => array(
                0 => 'TwigBundle::form.html.twig',
            ),
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'cache' => '/home/lelo/projects/symfony.dev/app/cache/test/twig',
                'charset' => 'UTF-8',
            ),
            'zend.logger.class' => 'Symfony\\Bundle\\ZendBundle\\Logger\\Logger',
            'zend.logger.log_errors' => true,
            'zend.logger.writer.debug.class' => 'Symfony\\Bundle\\ZendBundle\\Logger\\DebugLogger',
            'zend.logger.writer.filesystem.class' => 'Zend\\Log\\Writer\\Stream',
            'zend.formatter.filesystem.class' => 'Zend\\Log\\Formatter\\Simple',
            'zend.formatter.filesystem.format' => '%timestamp% %priorityName%: %message%
',
            'zend.logger.priority' => 7,
            'zend.logger.path' => '/home/lelo/projects/symfony.dev/app/logs/test.log',
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.init_file' => '/home/lelo/projects/symfony.dev/vendor/swiftmailer/lib/swift_init.php',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.base_dir' => '/home/lelo/projects/symfony.dev/vendor/swiftmailer/lib',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.transport.name' => 'smtp',
            'swiftmailer.transport.smtp.encryption' => NULL,
            'swiftmailer.transport.smtp.port' => 25,
            'swiftmailer.transport.smtp.host' => 'localhost',
            'swiftmailer.transport.smtp.username' => NULL,
            'swiftmailer.transport.smtp.password' => NULL,
            'swiftmailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.single_address' => NULL,
            'doctrine.odm.mongodb.default_document_manager' => 'default',
            'doctrine.odm.mongodb.default_connection' => 'default',
            'doctrine.odm.mongodb.default_database' => 'symfony_test',
            'doctrine.odm.mongodb.metadata_cache_driver' => 'array',
            'doctrine.odm.mongodb.connection_class' => 'Doctrine\\MongoDB\\Connection',
            'doctrine.odm.mongodb.configuration_class' => 'Doctrine\\ODM\\MongoDB\\Configuration',
            'doctrine.odm.mongodb.document_manager_class' => 'Doctrine\\ODM\\MongoDB\\DocumentManager',
            'doctrine.odm.mongodb.logger_class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Logger\\DoctrineMongoDBLogger',
            'doctrine.odm.mongodb.data_collector_class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\DataCollector\\DoctrineMongoDBDataCollector',
            'doctrine.odm.mongodb.event_manager_class' => 'Doctrine\\Common\\EventManager',
            'doctrine.odm.mongodb.proxy_namespace' => 'Proxies',
            'doctrine.odm.mongodb.proxy_dir' => '/home/lelo/projects/symfony.dev/app/cache/test/doctrine/odm/mongodb/Proxies',
            'doctrine.odm.mongodb.auto_generate_proxy_classes' => false,
            'doctrine.odm.mongodb.hydrator_namespace' => 'Hydrators',
            'doctrine.odm.mongodb.hydrator_dir' => '/home/lelo/projects/symfony.dev/app/cache/test/doctrine/odm/mongodb/Hydrators',
            'doctrine.odm.mongodb.auto_generate_hydrator_classes' => true,
            'doctrine.odm.mongodb.cache.array_class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.odm.mongodb.cache.apc_class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.odm.mongodb.cache.memcache_class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.odm.mongodb.cache.memcache_host' => 'localhost',
            'doctrine.odm.mongodb.cache.memcache_port' => 11211,
            'doctrine.odm.mongodb.cache.memcache_instance_class' => 'Memcache',
            'doctrine.odm.mongodb.cache.xcache_class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.odm.mongodb.metadata.driver_chain_class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\DriverChain',
            'doctrine.odm.mongodb.metadata.annotation_class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.odm.mongodb.metadata.annotation_reader_class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'doctrine.odm.mongodb.metadata.xml_class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\XmlDriver',
            'doctrine.odm.mongodb.metadata.yml_class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\YamlDriver',
            'doctrine.odm.mongodb.mapping_dirs' => array(

            ),
            'doctrine.odm.mongodb.xml_mapping_dirs' => array(

            ),
            'doctrine.odm.mongodb.yml_mapping_dirs' => array(

            ),
            'doctrine.odm.mongodb.document_dirs' => array(

            ),
            'doctrine.odm.mongodb.security.user.provider.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Security\\DocumentUserProvider',
            'doctrine.odm.mongodb.proxy_cache_warmer.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine.odm.mongodb.hydrator_cache_warmer.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\CacheWarmer\\HydratorCacheWarmer',
            'doctrine_odm.mongodb.validator.unique.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Validator\\Constraints\\UniqueValidator',
            'doctrine.odm.mongodb.document_managers' => array(
                0 => 'default',
            ),
            'gherkin.paths.lib' => '/home/lelo/projects/symfony.dev/vendor/Gherkin',
            'behat.paths.lib' => '/home/lelo/projects/symfony.dev/vendor/Behat',
            'gherkin.paths.i18n' => '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n',
            'behat.paths.i18n' => '/home/lelo/projects/symfony.dev/vendor/Behat/i18n',
            'behat.paths.base' => 'BEHAT_WORK_PATH/Features',
            'behat.paths.features' => 'BEHAT_WORK_PATH/Features',
            'behat.paths.steps' => array(
                0 => 'BEHAT_WORK_PATH/Features/steps',
                1 => 'BEHAT_BUNDLE_PATH/Resources/features/steps',
            ),
            'behat.paths.steps.i18n' => array(
                0 => 'BEHAT_WORK_PATH/Features/steps/i18n',
                1 => 'BEHAT_BUNDLE_PATH/Resources/features/steps/i18n',
            ),
            'behat.paths.support' => 'BEHAT_WORK_PATH/Features/support',
            'behat.paths.bootstrap' => array(
                0 => 'BEHAT_WORK_PATH/Features/support/bootstrap.php',
                1 => 'BEHAT_BUNDLE_PATH/Resources/features/support/bootstrap.php',
            ),
            'behat.paths.environment' => 'BEHAT_WORK_PATH/Features/support/env.php',
            'behat.paths.hooks' => 'BEHAT_WORK_PATH/Features/support/hooks.php',
            'behat.formatter.name' => 'pretty',
            'behat.formatter.decorated' => NULL,
            'behat.formatter.verbose' => false,
            'behat.formatter.time' => true,
            'behat.formatter.language' => 'en',
            'behat.formatter.output_path' => NULL,
            'behat.formatter.multiline_arguments' => true,
            'behat.formatter.parameters' => array(

            ),
            'gherkin.filter.name' => NULL,
            'gherkin.filter.tags' => NULL,
            'gherkin.class' => 'Behat\\Gherkin\\Gherkin',
            'gherkin.parser.class' => 'Behat\\Gherkin\\Parser',
            'gherkin.lexer.class' => 'Behat\\Gherkin\\Lexer',
            'gherkin.loader.gherkin.class' => 'Behat\\Gherkin\\Loader\\GherkinFileLoader',
            'gherkin.keywords.class' => 'Behat\\Gherkin\\Keywords\\SymfonyTranslationKeywords',
            'gherkin.keywords.path' => '/home/lelo/projects/symfony.dev/vendor/Gherkin/i18n',
            'behat.definition_dispatcher.class' => 'Behat\\Behat\\Definition\\DefinitionDispatcher',
            'behat.definition.loader.php.class' => 'Behat\\Behat\\Definition\\Loader\\PhpFileLoader',
            'behat.definition_dumper.class' => 'Behat\\Behat\\Definition\\DefinitionDumper',
            'behat.hook_dispatcher.class' => 'Behat\\Behat\\Hook\\HookDispatcher',
            'behat.hook.loader.php.class' => 'Behat\\Behat\\Hook\\Loader\\PhpFileLoader',
            'behat.environment_builder.class' => 'Behat\\Behat\\Environment\\EnvironmentBuilder',
            'behat.environment.class' => 'Behat\\BehatBundle\\Environment\\SymfonyBrowserEnvironment',
            'behat.tester.feature.class' => 'Behat\\Behat\\Tester\\FeatureTester',
            'behat.tester.background.class' => 'Behat\\Behat\\Tester\\BackgroundTester',
            'behat.tester.scenario.class' => 'Behat\\Behat\\Tester\\ScenarioTester',
            'behat.tester.outline.class' => 'Behat\\Behat\\Tester\\OutlineTester',
            'behat.tester.step.class' => 'Behat\\Behat\\Tester\\StepTester',
            'behat.translator.class' => 'Symfony\\Component\\Translation\\Translator',
            'behat.translator.message_selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'behat.translator.xliff_loader.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'behat.event_dispatcher.class' => 'Behat\\Behat\\EventDispatcher\\EventDispatcher',
            'behat.logger.class' => 'Behat\\Behat\\DataCollector\\LoggerDataCollector',
            'debug.toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\WebDebugToolbarListener',
            'debug.toolbar.intercept_redirects' => false,
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => 'WebProfilerBundle:Collector:config',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => 'WebProfilerBundle:Collector:request',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => 'WebProfilerBundle:Collector:exception',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => 'WebProfilerBundle:Collector:events',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => 'WebProfilerBundle:Collector:logger',
                ),
                'data_collector.timer' => array(
                    0 => 'timer',
                    1 => 'WebProfilerBundle:Collector:timer',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => 'WebProfilerBundle:Collector:memory',
                ),
                'doctrine.odm.mongodb.data_collector' => array(
                    0 => 'mongodb',
                    1 => 'DoctrineMongoDBBundle:Collector:mongodb',
                ),
            ),
            'kernel.compiled_classes' => array(
                0 => 'Symfony\\Component\\Routing\\RouterInterface',
                1 => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
                2 => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher',
                3 => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
                4 => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
                5 => 'Symfony\\Component\\Routing\\Router',
                6 => 'Symfony\\Component\\HttpFoundation\\Session',
                7 => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\SessionStorageInterface',
                9 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface',
                10 => 'Symfony\\Component\\Templating\\TemplateNameParserInterface',
                11 => 'Symfony\\Component\\Templating\\TemplateNameParser',
                12 => 'Symfony\\Component\\Templating\\EngineInterface',
                13 => 'Symfony\\Component\\Config\\FileLocatorInterface',
                14 => 'Symfony\\Component\\Templating\\TemplateReferenceInterface',
                15 => 'Symfony\\Component\\Templating\\TemplateReference',
                16 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference',
                17 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
                18 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
                19 => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
                20 => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                21 => 'Symfony\\Component\\HttpFoundation\\Request',
                22 => 'Symfony\\Component\\HttpFoundation\\Response',
                23 => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
                24 => 'Symfony\\Component\\HttpKernel\\HttpKernel',
                25 => 'Symfony\\Component\\HttpKernel\\ResponseListener',
                26 => 'Symfony\\Component\\HttpKernel\\Controller\\ControllerResolver',
                27 => 'Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface',
                28 => 'Symfony\\Bundle\\FrameworkBundle\\RequestListener',
                29 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
                30 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
                31 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller',
                32 => 'Symfony\\Component\\EventDispatcher\\EventInterface',
                33 => 'Symfony\\Component\\EventDispatcher\\Event',
                34 => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
                35 => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
                36 => 'Symfony\\Bundle\\FrameworkBundle\\EventDispatcher',
                37 => 'Twig_Environment',
                38 => 'Twig_ExtensionInterface',
                39 => 'Twig_Extension',
                40 => 'Twig_Extension_Core',
                41 => 'Twig_Extension_Escaper',
                42 => 'Twig_Extension_Optimizer',
                43 => 'Twig_LoaderInterface',
                44 => 'Twig_Markup',
                45 => 'Twig_TemplateInterface',
                46 => 'Twig_Template',
            ),
            'kernel.autoload_classes' => array(

            ),
            'translation.loaders' => array(
                'translation.loader.php' => 'php',
                'translation.loader.yml' => 'yml',
                'translation.loader.xliff' => 'xliff',
            ),
        );
    }
}
