<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Tests;

use Gandung\Tokopedia\TokopediaBundle\DependencyInjection\TokopediaExtension;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

use function sha1;
use function sys_get_temp_dir;
use function uniqid;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
abstract class AbstractTestCase extends BaseTestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     * Configure and create container builder object
     * instance.
     *
     * @return ContainerBuilder
     */
    protected function createContainer()
    {
        $parameters = new ParameterBag([
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.cache_dir' => sys_get_temp_dir(),
            'kernel.environment' => 'test'
        ]);
        $container  = new ContainerBuilder($parameters);
        $extension  = new TokopediaExtension();

        $extension->load(
            [
                'tokopedia' => [
                    'fulfillment_service_id' => 1337,
                    'client_id' => sha1(uniqid()),
                    'client_secret' => sha1(uniqid())
                ]
            ],
            $container
        );
        $container->registerExtension($extension);

        $container->setDefinition(
            CacheItemPoolInterface::class,
            (new Definition(ArrayAdapter::class))->setPublic(true)
        );

        return $container;
    }

    /**
     * Set container builder.
     *
     * @param ContainerBuilder $container
     * @return void
     */
    public function setContainer(ContainerBuilder $container)
    {
        $this->container = $container;
    }

    /**
     * Get associated container builder.
     *
     * @return ContainerBuilder
     */
    public function getContainer()
    {
        return $this->container;
    }
}
