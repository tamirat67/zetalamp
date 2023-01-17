<?php

namespace Ethio\Covid19Bundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ethio\Covid19Bundle\Entity\AboutUs;

class AboutUsFixture extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $repository = $manager->getRepository('Gedmo\\Translatable\\Entity\\Translation');
        
  $AboutUs = new AboutUs();
        $AboutUs->setMission("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et");
        $AboutUs->setVision("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et");
        $AboutUs->setStrategicthemes("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et");
$AboutUs->setCoreValues("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et");
             
        $manager->persist($AboutUs);
        $this->addReference('AboutUs', $AboutUs);
        $manager->flush();
 
    }

    public function getOrder() {
        // TODO: Implement getOrder() method.
        return 1;
    }


}

