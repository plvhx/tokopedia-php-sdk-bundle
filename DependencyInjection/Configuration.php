<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder('tokopedia');

		$treeBuilder
			->getRootNode()
			->addDefaultsIfNotSet()
			->children()
				->scalarNode('fulfillment_service_id')
					->isRequired()
					->cannotBeEmpty()
				->end()
			->end()
			->children()
				->scalarNode('client_id')
					->isRequired()
					->cannotBeEmpty()
				->end()
			->end()
			->children()
				->scalarNode('client_secret')
					->isRequired()
					->cannotBeEmpty()
				->end()
			->end();

		return $treeBuilder;
	}
}
