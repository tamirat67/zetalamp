<?php

namespace Ethio\Covid19Bundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use OST\UABundle\Entity\User;
use OST\UABundle\Report\AuthenticationListener;
use Gedmo\Mapping\Annotation\Translatable;
class UserFixture extends Fixture {

    public function load(ObjectManager $manager) {
        $repository = $manager->getRepository('Gedmo\\Translatable\\Entity\\Translation');
        
        $user_1 = new User();
        $user_1->setFirstName("admin");
        $user_1->setMiddleName("admin");
        $user_1->setGender("M");
        $user_1->setUsername("admin");
        $user_1->setEmail("admin@gmail.com");
        $user_1->setPlainPassword("12345678");
        $user_1->setRoles(array("ROLE_ADMIN","ROLE_SUPER_ADMIN"));
        $user_1->setEnabled(TRUE);
        $user_1->setSuperAdmin(TRUE);
        $user_1->addGroup($this->getReference('admin_group'));
        $manager->persist($user_1);
        $manager->flush();
        $this->addReference('user_1', $user_1);
        
        ###############################Creating user one for USER #############
        $tame = new User();
        $tame->setFirstName("Tame");
        $tame->setMiddleName("Tanga");
        $tame->setGender("M");
        $tame->setUsername("tame");
        $tame->setEmail("tame@gmail.com");
        $tame->setPlainPassword("12345678");
        $tame->addRole("ROLE_ADMIN");
        $tame->setEnabled(TRUE);
        $manager->persist($tame);
        $manager->flush();
        $this->addReference('tame', $tame);

  ###############################Creating user one for SUPPORT_GROUP#############

        $supgroup = new User();
        $supgroup->setFirstName("Support Group");
        $supgroup->setMiddleName("Goup Support");
        $supgroup->setGender("M");
        $supgroup->setUsername("supportgroup");
        $supgroup->setEmail("supportgroup@gmail.com");
        $supgroup->setPlainPassword("12345678");
        $supgroup->setEnabled(TRUE);

        $supgroup->addGroup($this->getReference('SUPPORT_GROUP'));
        $manager->persist($supgroup);
        $manager->flush();
        $this->addReference('supportgroup', $supgroup);

        ###############################Creating user one for BUILDING_GROUP #############

        $building = new User();
        $building->setFirstName("Building");
        $building->setMiddleName("Building");
        $building->setGender("M");
        $building->setUsername("building");
        $building->setEmail("building@gmail.com");
        $building->setPlainPassword("12345678");
        $building->setEnabled(TRUE);
        $building->addGroup($this->getReference('BUILDING_GROUP'));
        $manager->persist($building);
        $manager->flush();
        $this->addReference('building', $building);


        ###############################Creating user two for ROAD_GROUP #############

        $road = new User();
        $road->setFirstName("Road");
        $road->setMiddleName("Road");
        $road->setGender("M");
        $road->setUsername("road");
        $road->setEmail("road@gmail.com");
        $road->setPlainPassword("12345678");
        $road->setEnabled(TRUE);
        $road->addGroup($this->getReference('ROAD_GROUP'));
        $manager->persist($road);
        $manager->flush();
        $this->addReference('road', $road);

        ###############################Creating user two for WATER_AND_IRRIGATION_GROUP #############
        $water = new User();
        $water->setFirstName("Water");
        $water->setMiddleName("Water");
        $water->setGender("M");
        $water->setUsername("water");
        $water->setEmail("water@gmail.com");
        $water->setPlainPassword("12345678");
        $water->setEnabled(TRUE);
        $water->addGroup($this->getReference('WATER_AND_IRRIGATION_GROUP'));
        $manager->persist($water);
        $manager->flush();
        $this->addReference('water', $water);
        
         ###############################Creating user for INDUSTRY_GROUP #############
        $industry = new User();
        $industry->setFirstName("Industry");
        $industry->setMiddleName("Industry");
        $industry->setGender("M");
        $industry->setUsername("industry");
        $industry->setEmail("industry@gmail.com");
        $industry->setPlainPassword("12345678");
        $industry->setEnabled(TRUE);
        $industry->addGroup($this->getReference('INDUSTRY_GROUP'));
        $manager->persist($industry);
        $manager->flush();
        $this->addReference('industry', $industry);
        
                 ###############################Creating user for HRM_EMPLOYEE_GROUP #############
        $employee = new User();
        $employee->setFirstName("Employee");
        $employee->setMiddleName("Employee");
        $employee->setGender("M");
        $employee->setUsername("employee");
        $employee->setEmail("employee@gmail.com");
        $employee->setPlainPassword("12345678");
        $employee->setEnabled(TRUE);
        $employee->addGroup($this->getReference('HRM_EMPLOYEE_GROUP'));
        $manager->persist($employee);
        $manager->flush();
        $this->addReference('employee', $employee);

    }

    public function getOrder() {
        // TODO: Implement getOrder() method.
        return 2;
    }

}
