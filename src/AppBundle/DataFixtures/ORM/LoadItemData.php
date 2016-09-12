<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Itemtype;

class LoadItemData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $itemtype = new Itemtype();
        $itemtype->setManufacturer('IKEA');
        $itemtype->setModel('chaise');
        $itemtype->setDescription('chaise en bois de qualité supérieur');
        $manager->persist($itemtype);

        $this->addReference('chaise', $itemtype);

        $itemtype = new Itemtype();
        $itemtype->setManufacturer('ASUS');
        $itemtype->setModel('Xdragon Keke 3000');
        $itemtype->setDescription('super ordinateur de la mort qui tue');
        $manager->persist($itemtype);

        $this->addReference('ordinateur-item', $itemtype);

        $itemtype = new Itemtype();
        $itemtype->setManufacturer('HARIBO');
        $itemtype->setModel('Dragibus');
        $itemtype->setDescription('La vie est plus belle avec des bonbons dragibus');
        $manager->persist($itemtype);

        $this->addReference('bonbon-item', $itemtype);

        $itemtype = new Itemtype();
        $itemtype->setManufacturer('SwagLord.inc');
        $itemtype->setModel('schneckator 3000');
        $itemtype->setDescription('modèle mecanique à induction interne');
        $manager->persist($itemtype);

        $this->addReference('swag-item', $itemtype);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}
