<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Stock;

class LoadStockData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $stock = new Stock();
        $stock->setItem($this->getReference('chaise'));
        $stock->setSellprice(35);
        $stock->setCurrentstock(10);
        $stock->setMinstock(1);
        $manager->persist($stock);

        $stock = new Stock();
        $stock->setItem($this->getReference('ordinateur-item'));
        $stock->setSellprice(1500);
        $stock->setCurrentstock(10);
        $stock->setMinstock(1);
        $manager->persist($stock);

        $stock = new Stock();
        $stock->setItem($this->getReference('bonbon-item'));
        $stock->setSellprice(2);
        $stock->setCurrentstock(10);
        $stock->setMinstock(1);
        $manager->persist($stock);

        $stock = new Stock();
        $stock->setItem($this->getReference('swag-item'));
        $stock->setSellprice(1000);
        $stock->setCurrentstock(10);
        $stock->setMinstock('1');
        $manager->persist($stock);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}
