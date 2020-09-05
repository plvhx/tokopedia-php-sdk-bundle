<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Tests;

use Gandung\Tokopedia\TokopediaBundle\DependencyInjection\TokopediaExtension;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use function sha1;
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
			'tokopedia.fulfillment_service_id' => 1337,
			'tokopedia.client_id' => sha1(uniqid()),
			'tokopedia.client_secret' => sha1(uniqid())
		]);
		$container  = new ContainerBuilder($parameters);
		$extension  = new TokopediaExtension();

		$extension->load([], $container);
		$container->registerExtension($extension);

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
