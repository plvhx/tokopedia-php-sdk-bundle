<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Controller;

use Gandung\Tokopedia\ServiceInterface;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
trait ServiceControllerTrait
{
	/**
	 * @var ServiceInterface
	 */
	private $service;

	/**
	 * Get associated service object.
	 *
	 * @return ServiceInterface
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * Set service object.
	 *
	 * @param ServiceInterface $service
	 * @return void
	 */
	public function setService(ServiceInterface $service)
	{
		$this->service = $service;
	}
}
