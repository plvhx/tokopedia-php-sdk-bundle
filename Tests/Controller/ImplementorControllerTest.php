<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Tests\Controller;

use Gandung\Tokopedia\ServiceInterface;
use Gandung\Tokopedia\TokopediaBundle\Controller\ServiceControllerTrait;
use Gandung\Tokopedia\TokopediaBundle\Tests\AbstractTestCase;
use Gandung\Tokopedia\TokopediaBundle\Tests\TestCaseTrait;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class ImplementorControllerTest extends AbstractTestCase
{
	use ServiceControllerTrait, TestCaseTrait;

	public function testCanGetAndSetService()
	{
		$this->setService($this->getContainer()->get('tokopedia.sdk.service.campaign'));
		$this->assertInstanceOf(ServiceInterface::class, $this->getService());
	}
}
