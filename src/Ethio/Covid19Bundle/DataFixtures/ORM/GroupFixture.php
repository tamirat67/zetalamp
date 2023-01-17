<?php

namespace Ethio\Covid19Bundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use OST\UABundle\Entity\Group;

class GroupFixture extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $repository = $manager->getRepository('Gedmo\\Translatable\\Entity\\Translation');
##################################################SUPPORT_GROUP##############################################
        $group = new Group();
        $group->setName("SUPPORT_GROUP");
        $group->setDescription("Thsi is a group where ICT support staff is associated. This is to deal with user account related problems.");
        
        $group->addPermission($this->getReference('LIST_OFFICE'));
        $group->addPermission($this->getReference('CREATE_OFFICE'));
        $group->addPermission($this->getReference('EDIT_OFFICE'));
        $group->addPermission($this->getReference('VIEW_OFFICE'));
        $group->addPermission($this->getReference('DELETE_OFFICE'));
        
        $group->addPermission($this->getReference('LIST_LOG'));
        $group->addPermission($this->getReference('VIEW_LOG'));
        
        $group->addPermission($this->getReference('LIST_GROUP'));
        $group->addPermission($this->getReference('VIEW_GROUP'));
        $group->addPermission($this->getReference('LIST_PERMISSION'));
        $group->addPermission($this->getReference('VIEW_PERMISSION'));
        $group->addPermission($this->getReference('CREATE_USER'));
        $group->addPermission($this->getReference('VIEW_USER'));
        $group->addPermission($this->getReference('EDIT_USER'));
        $group->addPermission($this->getReference('LIST_USER'));
        $manager->persist($group);
        $this->addReference('SUPPORT_GROUP', $group);
        
##################################################ADMIN_GROUP##############################################
        $group = new Group();
        $group->setName("ADMIN_GROUP");
        $group->setDescription("admin group");
        $group->addPermission($this->getReference('LIST_OFFICE'));
        $group->addPermission($this->getReference('CREATE_OFFICE'));
        $group->addPermission($this->getReference('EDIT_OFFICE'));
        $group->addPermission($this->getReference('VIEW_OFFICE'));
        $group->addPermission($this->getReference('DELETE_OFFICE'));
        
        $group->addPermission($this->getReference('LIST_LOG'));
        $group->addPermission($this->getReference('VIEW_LOG'));
  
  
        $group->addPermission($this->getReference('LIST_GROUP'));
        $group->addPermission($this->getReference('CREATE_GROUP'));
        $group->addPermission($this->getReference('EDIT_GROUP'));
        $group->addPermission($this->getReference('DELETE_GROUP'));
        $group->addPermission($this->getReference('VIEW_GROUP'));
        
        $group->addPermission($this->getReference('LIST_PERMISSION'));
        $group->addPermission($this->getReference('CREATE_PERMISSION'));
        $group->addPermission($this->getReference('VIEW_PERMISSION'));
        $group->addPermission($this->getReference('EDIT_PERMISSION'));
        $group->addPermission($this->getReference('DELETE_PERMISSION'));
        
        $group->addPermission($this->getReference('LIST_USER'));
        $group->addPermission($this->getReference('CREATE_USER'));
        $group->addPermission($this->getReference('VIEW_USER'));
        $group->addPermission($this->getReference('EDIT_USER'));
        $group->addPermission($this->getReference('DELETE_USER'));
        
    #############################COMMAN SENSE ##########################################
        $group->addPermission($this->getReference('LIST_CLIENT'));
        $group->addPermission($this->getReference('CREATE_CLIENT'));
        $group->addPermission($this->getReference('VIEW_CLIENT'));
        $group->addPermission($this->getReference('EDIT_CLIENT'));
        $group->addPermission($this->getReference('DELETE_CLIENT'));
 
        $group->addPermission($this->getReference('LIST_GAURANTEE_TYPE'));
        $group->addPermission($this->getReference('CREATE_GAURANTEE_TYPE'));
        $group->addPermission($this->getReference('VIEW_GAURANTEE_TYPE'));
        $group->addPermission($this->getReference('EDIT_GAURANTEE_TYPE'));
        $group->addPermission($this->getReference('DELETE_GAURANTEE_TYPE'));
     
       $group->addPermission($this->getReference('LIST_KETEMA_KEBELE'));
        $group->addPermission($this->getReference('CREATE_KETEMA_KEBELE'));
        $group->addPermission($this->getReference('VIEW_KETEMA_KEBELE'));
        $group->addPermission($this->getReference('EDIT_KETEMA_KEBELE'));
        $group->addPermission($this->getReference('DELETE_KETEMA_KEBELE'));
     
      $group->addPermission($this->getReference('LIST_WOREDA'));
        $group->addPermission($this->getReference('CREATE_WOREDA'));
        $group->addPermission($this->getReference('VIEW_WOREDA'));
        $group->addPermission($this->getReference('EDIT_WOREDA'));
        $group->addPermission($this->getReference('DELETE_WOREDA'));
     
      $group->addPermission($this->getReference('LIST_PAYMENT_ROUND'));
        $group->addPermission($this->getReference('CREATE_PAYMENT_ROUND'));
        $group->addPermission($this->getReference('VIEW_PAYMENT_ROUND'));
        $group->addPermission($this->getReference('EDIT_PAYMENT_ROUND'));
        $group->addPermission($this->getReference('DELETE_PAYMENT_ROUND'));
        
       $group->addPermission($this->getReference('LIST_PROJECT_TYPE'));
        $group->addPermission($this->getReference('CREATE_PROJECT_TYPE'));
        $group->addPermission($this->getReference('VIEW_PROJECT_TYPE'));
        $group->addPermission($this->getReference('EDIT_PROJECT_TYPE'));
        $group->addPermission($this->getReference('DELETE_PROJECT_TYPE'));
     
     
        $manager->persist($group);
        $this->addReference('admin_group', $group);
        
 #############################BUILDING_GROUP###################
        $group = new Group();
        $group->setName("BUILDING_GROUP");
        $group->setDescription("building_grourp");
       // $group->addPermission($this->getReference('LIST_OFFICE'));
       // $group->addPermission($this->getReference('VIEW_OFFICE'));
        
        $group->addPermission($this->getReference('LIST_BUILDING_PROJECT'));
        $group->addPermission($this->getReference('CREATE_BUILDING_PROJECT'));
        $group->addPermission($this->getReference('VIEW_BUILDING_PROJECT'));
        $group->addPermission($this->getReference('EDIT_BUILDING_PROJECT'));
        $group->addPermission($this->getReference('DELETE_BUILDING_PROJECT'));
                        
        $group->addPermission($this->getReference('LIST_BUILDING_PAYMENT'));
        $group->addPermission($this->getReference('CREATE_BUILDING_PAYMENT'));
        $group->addPermission($this->getReference('VIEW_BUILDING_PAYMENT'));
        $group->addPermission($this->getReference('EDIT_BUILDING_PAYMENT'));
        $group->addPermission($this->getReference('DELETE_BUILDING_PAYMENT'));

        $group->addPermission($this->getReference('LIST_BUILDING_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('CREATE_BUILDING_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('VIEW_BUILDING_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('EDIT_BUILDING_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('DELETE_BUILDING_JOB_OPPORTUNITY'));

        $group->addPermission($this->getReference('LIST_BUILDING_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('CREATE_BUILDING_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('VIEW_BUILDING_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('EDIT_BUILDING_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('DELETE_BUILDING_PROJECT_DESIGN'));
        
             $group->addPermission($this->getReference('LIST_BUILDIND_EXPERTS'));
        $group->addPermission($this->getReference('CREATE_BUILDIND_EXPERTS'));
        $group->addPermission($this->getReference('VIEW_BUILDIND_EXPERTS'));
        $group->addPermission($this->getReference('EDIT_BUILDIND_EXPERTS'));
        $group->addPermission($this->getReference('DELETE_BUILDIND_EXPERTS'));
   
        $group->addPermission($this->getReference('LIST_BUILDIND_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('CREATE_BUILDIND_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('VIEW_BUILDIND_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('EDIT_BUILDIND_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('DELETE_BUILDIND_PROJECT_GAURANTEE'));
   
        $group->addPermission($this->getReference('LIST_SERVICE_PAYMENT'));
        $group->addPermission($this->getReference('CREATE_SERVICE_PAYMENT'));
        $group->addPermission($this->getReference('VIEW_SERVICE_PAYMENT'));
        $group->addPermission($this->getReference('EDIT_SERVICE_PAYMENT'));
        $group->addPermission($this->getReference('DELETE_SERVICE_PAYMENT'));
     
        $manager->persist($group);
        $this->addReference('BUILDING_GROUP', $group);
 #############################ROAD_GROUP###################
        $group = new Group();
        $group->setName("ROAD_GROUP");
        $group->setDescription("road_grourp");
     // $group->addPermission($this->getReference('LIST_OFFICE'));
       // $group->addPermission($this->getReference('VIEW_OFFICE'));
        
       $group->addPermission($this->getReference('LIST_ROAD_PROJECT'));
        $group->addPermission($this->getReference('CREATE_ROAD_PROJECT'));
        $group->addPermission($this->getReference('VIEW_ROAD_PROJECT'));
        $group->addPermission($this->getReference('EDIT_ROAD_PROJECT'));
        $group->addPermission($this->getReference('DELETE_ROAD_PROJECT'));

        $group->addPermission($this->getReference('LIST_ROAD_PAYMENT'));
        $group->addPermission($this->getReference('CREATE_ROAD_PAYMENT'));
        $group->addPermission($this->getReference('VIEW_ROAD_PAYMENT'));
        $group->addPermission($this->getReference('EDIT_ROAD_PAYMENT'));
        $group->addPermission($this->getReference('DELETE_ROAD_PAYMENT'));
        
        $group->addPermission($this->getReference('LIST_ROAD_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('CREATE_ROAD_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('VIEW_ROAD_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('EDIT_ROAD_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('DELETE_ROAD_JOB_OPPORTUNITY'));
        
        $group->addPermission($this->getReference('LIST_ROAD_EXPERTS'));
        $group->addPermission($this->getReference('CREATE_ROAD_EXPERTS'));
        $group->addPermission($this->getReference('VIEW_ROAD_EXPERTS'));
        $group->addPermission($this->getReference('EDIT_ROAD_EXPERTS'));
        $group->addPermission($this->getReference('DELETE_ROAD_EXPERTS'));
   
       $group->addPermission($this->getReference('LIST_ROAD_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('CREATE_ROAD_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('VIEW_ROAD_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('EDIT_ROAD_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('DELETE_ROAD_PROJECT_DESIGN'));
        
         $group->addPermission($this->getReference('LIST_ROAD_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('CREATE_ROAD_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('VIEW_ROAD_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('EDIT_ROAD_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('DELETE_ROAD_PROJECT_GAURANTEE'));
   
   
        $manager->persist($group);
        $this->addReference('ROAD_GROUP', $group);
#############################WATER_AND_IRRIGATION_GROUP###################
        $group = new Group();
        $group->setName("WATER_AND_IRRIGATION_GROUP");
        $group->setDescription("water_and_irrigation_grourp");
      // $group->addPermission($this->getReference('LIST_OFFICE'));
       // $group->addPermission($this->getReference('VIEW_OFFICE'));
        
        $group->addPermission($this->getReference('LIST_WATER_PROJECT'));
        $group->addPermission($this->getReference('CREATE_WATER_PROJECT'));
        $group->addPermission($this->getReference('VIEW_WATER_PROJECT'));
        $group->addPermission($this->getReference('EDIT_WATER_PROJECT'));
        $group->addPermission($this->getReference('DELETE_WATER_PROJECT'));

        $group->addPermission($this->getReference('LIST_WATER_PAYMENT'));
        $group->addPermission($this->getReference('CREATE_WATER_PAYMENT'));
        $group->addPermission($this->getReference('VIEW_WATER_PAYMENT'));
        $group->addPermission($this->getReference('EDIT_WATER_PAYMENT'));
        $group->addPermission($this->getReference('DELETE_WATER_PAYMENT'));
        
        $group->addPermission($this->getReference('LIST_WATER_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('CREATE_WATER_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('VIEW_WATER_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('EDIT_WATER_JOB_OPPORTUNITY'));
        $group->addPermission($this->getReference('DELETE_WATER_JOB_OPPORTUNITY'));
       
       $group->addPermission($this->getReference('LIST_WATER_EXPERTS'));
        $group->addPermission($this->getReference('CREATE_WATER_EXPERTS'));
        $group->addPermission($this->getReference('VIEW_WATER_EXPERTS'));
        $group->addPermission($this->getReference('EDIT_WATER_EXPERTS'));
        $group->addPermission($this->getReference('DELETE_WATER_EXPERTS'));
   
       $group->addPermission($this->getReference('LIST_WATER_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('CREATE_WATER_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('VIEW_WATER_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('EDIT_WATER_PROJECT_DESIGN'));
        $group->addPermission($this->getReference('DELETE_WATER_PROJECT_DESIGN'));
      
      $group->addPermission($this->getReference('LIST_WATER_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('CREATE_WATER_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('VIEW_WATER_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('EDIT_WATER_PROJECT_GAURANTEE'));
        $group->addPermission($this->getReference('DELETE_WATER_PROJECT_GAURANTEE'));
     
        $manager->persist($group);
        $this->addReference('WATER_AND_IRRIGATION_GROUP', $group);

#################################INDUSTRY_GROUP#################################
        $group = new Group();
        $group->setName("INDUSTRY_GROUP");
        $group->setDescription("industry_group");
        //$group->addPermission($this->getReference('LIST_OFFICE'));
        //$group->addPermission($this->getReference('VIEW_OFFICE'));
        
      $group->addPermission($this->getReference('LIST_CONTRACTOR'));
        $group->addPermission($this->getReference('CREATE_CONTRACTOR'));
        $group->addPermission($this->getReference('VIEW_CONTRACTOR'));
        $group->addPermission($this->getReference('EDIT_CONTRACTOR'));
        $group->addPermission($this->getReference('DELETE_CONTRACTOR'));
     
        $group->addPermission($this->getReference('LIST_CONTRACTORS_IMX'));
        $group->addPermission($this->getReference('CREATE_CONTRACTORS_IMX'));
        $group->addPermission($this->getReference('VIEW_CONTRACTORS_IMX'));
        $group->addPermission($this->getReference('EDIT_CONTRACTORS_IMX'));
        $group->addPermission($this->getReference('DELETE_CONTRACTORS_IMX'));

       $group->addPermission($this->getReference('LIST_CONTRACTORS_IMX_RENEWED_PAYMENT'));
        $group->addPermission($this->getReference('CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT'));
        $group->addPermission($this->getReference('VIEW_CONTRACTORS_IMX_RENEWED_PAYMENT'));
        $group->addPermission($this->getReference('EDIT_CONTRACTORS_IMX_RENEWED_PAYMENT'));
        $group->addPermission($this->getReference('DELETE_CONTRACTORS_IMX_RENEWED_PAYMENT'));

        $group->addPermission($this->getReference('LIST_NAME_MSE'));
        $group->addPermission($this->getReference('CREATE_NAME_MSE'));
        $group->addPermission($this->getReference('VIEW_NAME_MSE'));
        $group->addPermission($this->getReference('EDIT_NAME_MSE'));
        $group->addPermission($this->getReference('DELETE_NAME_MSE'));
        
        $group->addPermission($this->getReference('LIST_MSE_MEMBERS'));
        $group->addPermission($this->getReference('CREATE_MSE_MEMBERS'));
        $group->addPermission($this->getReference('VIEW_MSE_MEMBERS'));
        $group->addPermission($this->getReference('EDIT_MSE_MEMBERS'));
        $group->addPermission($this->getReference('DELETE_MSE_MEMBERS'));

        $group->addPermission($this->getReference('LIST_PROFESSIONAL_LICENSE'));
        $group->addPermission($this->getReference('CREATE_PROFESSIONAL_LICENSE'));
        $group->addPermission($this->getReference('VIEW_PROFESSIONAL_LICENSE'));
        $group->addPermission($this->getReference('EDIT_PROFESSIONAL_LICENSE'));
        $group->addPermission($this->getReference('DELETE_PROFESSIONAL_LICENSE'));

       $group->addPermission($this->getReference('LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('VIEW_PROFESSIONAL_CERT_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('EDIT_PROFESSIONAL_CERT_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('DELETE_PROFESSIONAL_CERT_RENEWAL_PAYMENT'));

      $group->addPermission($this->getReference('LIST_LICENSE'));
        $group->addPermission($this->getReference('CREATE_LICENSE'));
        $group->addPermission($this->getReference('VIEW_LICENSE'));
        $group->addPermission($this->getReference('EDIT_LICENSE'));
        $group->addPermission($this->getReference('DELETE_LICENSE'));
        
      $group->addPermission($this->getReference('LIST_LICENSE_LEVEL'));
        $group->addPermission($this->getReference('CREATE_LICENSE_LEVEL'));
        $group->addPermission($this->getReference('VIEW_LICENSE_LEVEL'));
        $group->addPermission($this->getReference('EDIT_LICENSE_LEVEL'));
        $group->addPermission($this->getReference('DELETE_LICENSE_LEVEL'));
     
     $group->addPermission($this->getReference('LIST_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('CREATE_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('VIEW_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('EDIT_RENEWAL_PAYMENT'));
        $group->addPermission($this->getReference('DELETE_RENEWAL_PAYMENT'));

        $group->addPermission($this->getReference('LIST_CONTRACTORS'));
        $group->addPermission($this->getReference('CREATE_CONTRACTORS'));
        $group->addPermission($this->getReference('VIEW_CONTRACTORS'));
        $group->addPermission($this->getReference('EDIT_CONTRACTORS'));
        $group->addPermission($this->getReference('DELETE_CONTRACTORS'));
        
       $group->addPermission($this->getReference('LIST_CONSULTANT'));
        $group->addPermission($this->getReference('CREATE_CONSULTANT'));
        $group->addPermission($this->getReference('VIEW_CONSULTANT'));
        $group->addPermission($this->getReference('EDIT_CONSULTANT'));
        $group->addPermission($this->getReference('DELETE_CONSULTANT'));
        
       $group->addPermission($this->getReference('LIST_CONSULTANTS'));
        $group->addPermission($this->getReference('CREATE_CONSULTANTS'));
        $group->addPermission($this->getReference('VIEW_CONSULTANTS'));
        $group->addPermission($this->getReference('EDIT_CONSULTANTS'));
        $group->addPermission($this->getReference('DELETE_CONSULTANTS'));

        $group->addPermission($this->getReference('LIST_PAYMENT_ALLOWED_CONSULTANTS'));
        $group->addPermission($this->getReference('CREATE_PAYMENT_ALLOWED_CONSULTANTS'));
        $group->addPermission($this->getReference('VIEW_PAYMENT_ALLOWED_CONSULTANTS'));
        $group->addPermission($this->getReference('EDIT_PAYMENT_ALLOWED_CONSULTANTS'));
        $group->addPermission($this->getReference('DELETE_PAYMENT_ALLOWED_CONSULTANTS'));

        $group->addPermission($this->getReference('LIST_COC_INFO'));
        $group->addPermission($this->getReference('CREATE_COC_INFO'));
        $group->addPermission($this->getReference('VIEW_COC_INFO'));
        $group->addPermission($this->getReference('EDIT_COC_INFO'));
        $group->addPermission($this->getReference('DELETE_COC_INFO'));

      $group->addPermission($this->getReference('LIST_COC_EVALUATION'));
        $group->addPermission($this->getReference('CREATE_COC_EVALUATION'));
        $group->addPermission($this->getReference('VIEW_COC_EVALUATION'));
        $group->addPermission($this->getReference('EDIT_COC_EVALUATION'));
        $group->addPermission($this->getReference('DELETE_COC_EVALUATION'));

        $group->addPermission($this->getReference('LIST_LICENSE_TYPE'));
        $group->addPermission($this->getReference('CREATE_LICENSE_TYPE'));
        $group->addPermission($this->getReference('VIEW_LICENSE_TYPE'));
        $group->addPermission($this->getReference('EDIT_LICENSE_TYPE'));
        $group->addPermission($this->getReference('DELETE_LICENSE_TYPE'));

        $manager->persist($group);
        $this->addReference('INDUSTRY_GROUP', $group);

#############################HRM_EMPLOYEE_GROUP###################
        $group = new Group();
        $group->setName("HRM_EMPLOYEE_GROUP");
        $group->setDescription("employee HRM_EMPLOYEE_GROUP description");
        //$group->addPermission($this->getReference('LIST_OFFICE'));
        //$group->addPermission($this->getReference('VIEW_OFFICE'));
        
        $group->addPermission($this->getReference('LIST_EMPLOYEE'));
        $group->addPermission($this->getReference('CREATE_EMPLOYEE'));
        $group->addPermission($this->getReference('VIEW_EMPLOYEE'));
        $group->addPermission($this->getReference('EDIT_EMPLOYEE'));
        $group->addPermission($this->getReference('DELETE_EMPLOYEE'));

        $group->addPermission($this->getReference('LIST_PROPERTY'));
        $group->addPermission($this->getReference('CREATE_PROPERTY'));
        $group->addPermission($this->getReference('VIEW_PROPERTY'));
        $group->addPermission($this->getReference('EDIT_PROPERTY'));
        $group->addPermission($this->getReference('DELETE_PROPERTY'));
        
        $group->addPermission($this->getReference('LIST_TRANING'));
        $group->addPermission($this->getReference('CREATE_TRANING'));
        $group->addPermission($this->getReference('VIEW_TRANING'));
        $group->addPermission($this->getReference('EDIT_TRANING'));
        $group->addPermission($this->getReference('DELETE_TRANING'));

        $group->addPermission($this->getReference('LIST_TRANSFER'));
        $group->addPermission($this->getReference('CREATE_TRANSFER'));
        $group->addPermission($this->getReference('VIEW_TRANSFER'));
        $group->addPermission($this->getReference('EDIT_TRANSFER'));
        $group->addPermission($this->getReference('DELETE_TRANSFER'));

        $group->addPermission($this->getReference('LIST_EVALUATION'));
        $group->addPermission($this->getReference('CREATE_EVALUATION'));
        $group->addPermission($this->getReference('VIEW_EVALUATION'));
        $group->addPermission($this->getReference('EDIT_EVALUATION'));
        $group->addPermission($this->getReference('DELETE_EVALUATION'));
  
  
        $manager->persist($group);
        $this->addReference('HRM_EMPLOYEE_GROUP', $group);



        $manager->flush();
    }

    public function getOrder() {
        // TODO: Implement getOrder() method.
        return 1;
    }

}
