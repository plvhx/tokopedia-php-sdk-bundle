<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Tests;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
trait TestCaseTrait
{
    /**
     * {@inheritdoc}
     */
    public function setUp(): void
    {
        $this->setContainer($this->createContainer());
    }

    /**
     * {@inheritdoc}
     */
    public function tearDown(): void
    {
    }
}
