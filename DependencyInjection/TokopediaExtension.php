<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class TokopediaExtension extends Extension
{
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new XmlFileLoader(
			$container,
			new FileLocator(__DIR__ . DIRECTORY_SEPARATOR . '../Resources/config')
		);

		$loader->load('services.xml');

		$processor = new Processor();
		$configuration = new Configuration();
		$config = $processor->processConfiguration($configuration, $configs);

		$container->setParameter('tokopedia.fulfillment_service_id', $config['fulfillment_service_id']);
		$container->setParameter('tokopedia.client_id', $config['client_id']);
		$container->setParameter('tokopedia.client_secret', $config['client_secret']);
	}
}
