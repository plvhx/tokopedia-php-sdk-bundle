<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Tests;

use Gandung\Tokopedia\TokopediaBundle\TokopediaBundle;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class TokopediaBundleTest extends AbstractTestCase
{
	public function testCanGetInstance()
	{
		$this->assertInstanceOf(TokopediaBundle::class, new TokopediaBundle());
	}
}
