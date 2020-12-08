<?php

declare(strict_types=1);

namespace Gandung\Tokopedia\TokopediaBundle\Tests;

use Gandung\Tokopedia\ServiceFactory;
use Gandung\Tokopedia\Auth\AuthorizationInterface;
use Gandung\Tokopedia\Service\Campaign;
use Gandung\Tokopedia\Service\Category;
use Gandung\Tokopedia\Service\Encryption;
use Gandung\Tokopedia\Service\Interaction;
use Gandung\Tokopedia\Service\Logistic;
use Gandung\Tokopedia\Service\Order;
use Gandung\Tokopedia\Service\Product;
use Gandung\Tokopedia\Service\Shop;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class FetchServiceTest extends AbstractTestCase
{
    use TestCaseTrait;

    public function testCanGetAuthorizationObject()
    {
        $this->assertInstanceOf(
            AuthorizationInterface::class,
            $this->getContainer()->get(AuthorizationInterface::class)
        );
    }

    public function testCanGetServiceFactoryObject()
    {
        $this->assertInstanceOf(
            ServiceFactory::class,
            $this->getContainer()->get(ServiceFactory::class)
        );
    }

    public function testCanGetCampaignServiceObject()
    {
        $this->assertInstanceOf(
            Campaign::class,
            $this->getContainer()->get(Campaign::class)
        );
    }

    public function testCanGetCategoryServiceObject()
    {
        $this->assertInstanceOf(
            Category::class,
            $this->getContainer()->get(Category::class)
        );
    }

    public function testCanGetEncryptionServiceObject()
    {
        $this->assertInstanceOf(
            Encryption::class,
            $this->getContainer()->get(Encryption::class)
        );
    }

    public function testCanGetInteractionServiceObject()
    {
        $this->assertInstanceOf(
            Interaction::class,
            $this->getContainer()->get(Interaction::class)
        );
    }

    public function testCanGetLogisticServiceObject()
    {
        $this->assertInstanceOf(
            Logistic::class,
            $this->getContainer()->get(Logistic::class)
        );
    }

    public function testCanGetOrderServiceObject()
    {
        $this->assertInstanceOf(
            Order::class,
            $this->getContainer()->get(Order::class)
        );
    }

    public function testCanGetProductServiceObject()
    {
        $this->assertInstanceOf(
            Product::class,
            $this->getContainer()->get(Product::class)
        );
    }

    public function testCanGetShopServiceObject()
    {
        $this->assertInstanceOf(
            Shop::class,
            $this->getContainer()->get(Shop::class)
        );
    }
}
