<?php

namespace Ethio\Covid19Bundle\DataFixtures\ORM;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ethio\Covid19Bundle\Entity\Office;

class OfficeFixture extends Fixture {

    public function load(ObjectManager $manager) {
        $repository = $manager->getRepository('Gedmo\\Translatable\\Entity\\Translation');

        $office = new Office();
        $office->setName("Addis Ababa");
        $office->setDescription("addis ababa");

          $repository->translate($office, 'name', 'or', 'Addis Ababa')
                ->translate($office, 'description', 'or', 'addis ababa');
                
        $manager->persist($office);
        $this->addReference('office1', $office);
        $manager->flush();


        $office = new Office();
        $office->setName("Awassa");
        $office->setDescription("awassa");

          $repository->translate($office, 'name', 'or', 'awassa')
                ->translate($office, 'description', 'or', 'awassa');
                
        $manager->persist($office);
        $this->addReference('office2', $office);
        $manager->flush();

      
      }

    public function getOrder() {
        // TODO: Implement getOrder() method.
        return 8;
    }

}
