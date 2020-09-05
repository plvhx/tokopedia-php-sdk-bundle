<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Tests;

use Gandung\Tokopedia\TokopediaBundle\TokopediaBundle;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class TokopediaBundleTest extends AbstractTestCase
{
	use TestCaseTrait;

	public function testCanGetInstance()
	{
		$this->assertInstanceOf(TokopediaBundle::class, new TokopediaBundle());
	}

	public function testCanBuildToGivenContainer()
	{
		$bundle = new TokopediaBundle();
		$this->assertInstanceOf(TokopediaBundle::class, $bundle);

		$bundle->build($this->getContainer());
	}
}
