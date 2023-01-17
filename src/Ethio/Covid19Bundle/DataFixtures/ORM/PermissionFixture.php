<?php

namespace Ethio\Covid19Bundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use OST\UABundle\Entity\Permission;

class PermissionFixture extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $repository = $manager->getRepository('Gedmo\\Translatable\\Entity\\Translation');
        //###########################OFFICE CONTROLLER ROLES######################################
        $permission = new Permission();
        $permission->setName("LIST_OFFICE");
        $permission->setDescription("Diplay list Office");
        $this->addReference('LIST_OFFICE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_OFFICE");
        $permission->setDescription("Create new Office");
        $this->addReference('CREATE_OFFICE', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("VIEW_OFFICE");
        $permission->setDescription("Show detail information of Office");
        $this->addReference('VIEW_OFFICE', $permission);
        $manager->persist($permission);
        
        $permission = new Permission();
        $permission->setName("EDIT_OFFICE");
        $permission->setDescription("Modify an existing of office");

        $this->addReference('EDIT_OFFICE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_OFFICE");
        $permission->setDescription("Remove an existing Office");
        $this->addReference('DELETE_OFFICE', $permission);
        $manager->persist($permission);


// LOG PERMISSIONS
        $permission = new Permission();
        $permission->setName("LIST_LOG");
        $manager->persist($permission);
        $manager->flush();
        $this->addReference('LIST_LOG', $permission);

        $permission = new Permission();
        $permission->setName("VIEW_LOG");
        $manager->persist($permission);
        $manager->flush();
        $this->addReference('VIEW_LOG', $permission);

        
   ####################COMMAN SENSE#################################################
        $permission = new Permission();
        $permission->setName("LIST_CLIENT");
        $permission->setDescription("Display list of CLIENT.");
        $this->addReference('LIST_CLIENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_CLIENT");
        $permission->setDescription("Create new CLIENT record.");
        $this->addReference('CREATE_CLIENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_CLIENT");
        $permission->setDescription("Show detail information of CLIENT.");
        $this->addReference('VIEW_CLIENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_CLIENT");
        $permission->setDescription("Modify an existing CLIENT record.");
        $this->addReference('EDIT_CLIENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_CLIENT");
        $permission->setDescription("Remove CLIENT record.");
        $this->addReference('DELETE_CLIENT', $permission);
        $manager->persist($permission);
      
        $permission = new Permission();
        $permission->setName("LIST_GAURANTEE_TYPE");
        $permission->setDescription("Display list of GAURANTEE_TYPE.");
        $this->addReference('LIST_GAURANTEE_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_GAURANTEE_TYPE");
        $permission->setDescription("Create new GAURANTEE_TYPE record.");
        $this->addReference('CREATE_GAURANTEE_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_GAURANTEE_TYPE");
        $permission->setDescription("Show detail information of GAURANTEE_TYPE.");
        $this->addReference('VIEW_GAURANTEE_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_GAURANTEE_TYPE");
        $permission->setDescription("Modify an existing GAURANTEE_TYPE record.");
        $this->addReference('EDIT_GAURANTEE_TYPE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_GAURANTEE_TYPE");
        $permission->setDescription("Remove GAURANTEE_TYPE record.");
        $this->addReference('DELETE_GAURANTEE_TYPE', $permission);
        $manager->persist($permission);
 
        $permission = new Permission();
        $permission->setName("LIST_GROUP");
        $permission->setDescription("Display list of group");
        $this->addReference('LIST_GROUP', $permission);
        $manager->persist($permission);
        $permission = new Permission();
        $permission->setName("CREATE_GROUP");
        $permission->setDescription("Create new Group");
        $manager->persist($permission);
        $this->addReference('CREATE_GROUP', $permission);
        $permission = new Permission();
        $permission->setName("EDIT_GROUP");
        $permission->setDescription("Modify an exist Group");
        $manager->persist($permission);
        $this->addReference('EDIT_GROUP', $permission);
        $permission = new Permission();
        $permission->setName("DELETE_GROUP");
        $permission->setDescription("Remove an existing of group");
        $manager->persist($permission);
        $this->addReference('DELETE_GROUP', $permission);
        $permission = new Permission();
        $permission->setName("VIEW_GROUP");
        $permission->setDescription("Show Detail information of existing group");
        $manager->persist($permission);
        $this->addReference('VIEW_GROUP', $permission);
        $permission = new Permission();
        $permission->setName("LIST_PERMISSION");
        $permission->setDescription("Display list of Permission");
        $this->addReference('LIST_PERMISSION', $permission);
        $manager->persist($permission);
        $permission = new Permission();
        $permission->setName("CREATE_PERMISSION");
        $permission->setDescription("Create new Permission");
        $manager->persist($permission);
        $this->addReference('CREATE_PERMISSION', $permission);
        $permission = new Permission();
        $permission->setName("VIEW_PERMISSION");
        $permission->setDescription("Show Detail information of Permission");
        $manager->persist($permission);
        $this->addReference('VIEW_PERMISSION', $permission);

        $permission = new Permission();
        $permission->setName("EDIT_PERMISSION");
        $permission->setDescription("Modify an existing permission");
        $manager->persist($permission);
        $this->addReference('EDIT_PERMISSION', $permission);
        $permission = new Permission();
        $permission->setName("DELETE_PERMISSION");
        $permission->setDescription("Remove an existing of permission");
        $manager->persist($permission);
        $this->addReference('DELETE_PERMISSION', $permission);
        $permission = new Permission();
        $permission->setName("LIST_USER");
        $permission->setDescription("Display list User ");
        $this->addReference('LIST_USER', $permission);
        $manager->persist($permission);
        $permission = new Permission();
        $permission->setName("CREATE_USER");
        $permission->setDescription("Create new User");
        $manager->persist($permission);
        $this->addReference('CREATE_USER', $permission);
        $permission = new Permission();
        $permission->setName("VIEW_USER");
        $permission->setDescription("Show Detail information of User");
        $manager->persist($permission);
        $this->addReference('VIEW_USER', $permission);
        $permission = new Permission();
        $permission->setName("EDIT_USER");
        $permission->setDescription("Modify an an existing of User");
        $manager->persist($permission);
        $this->addReference('EDIT_USER', $permission);
        $permission = new Permission();
        $permission->setName("DELETE_USER");
        $permission->setDescription("Remove existing User");
        $manager->persist($permission);
        $this->addReference('DELETE_USER', $permission);
 
  $permission = new Permission();
        $permission->setName("LIST_WOREDA");
        $permission->setDescription("Display list of WOREDA.");
        $this->addReference('LIST_WOREDA', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_WOREDA");
        $permission->setDescription("Create new WOREDA record.");
        $this->addReference('CREATE_WOREDA', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_WOREDA");
        $permission->setDescription("Show detail information of WOREDA.");
        $this->addReference('VIEW_WOREDA', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_WOREDA");
        $permission->setDescription("Modify an existing WOREDA record.");
        $this->addReference('EDIT_WOREDA', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_WOREDA");
        $permission->setDescription("Remove WOREDA record.");
        $this->addReference('DELETE_WOREDA', $permission);
        $manager->persist($permission);
  
 
   $permission = new Permission();
        $permission->setName("LIST_KETEMA_KEBELE");
        $permission->setDescription("Display list of KETEMA_KEBELE.");
        $this->addReference('LIST_KETEMA_KEBELE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_KETEMA_KEBELE");
        $permission->setDescription("Create new KETEMA_KEBELE record.");
        $this->addReference('CREATE_KETEMA_KEBELE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_KETEMA_KEBELE");
        $permission->setDescription("Show detail information of KETEMA_KEBELE.");
        $this->addReference('VIEW_KETEMA_KEBELE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_KETEMA_KEBELE");
        $permission->setDescription("Modify an existing KETEMA_KEBELE record.");
        $this->addReference('EDIT_KETEMA_KEBELE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_KETEMA_KEBELE");
        $permission->setDescription("Remove KETEMA_KEBELE record.");
        $this->addReference('DELETE_KETEMA_KEBELE', $permission);
        $manager->persist($permission);
      
       $permission = new Permission();
        $permission->setName("LIST_PAYMENT_ROUND");
        $permission->setDescription("Display list of PAYMENT_ROUND.");
        $this->addReference('LIST_PAYMENT_ROUND', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_PAYMENT_ROUND");
        $permission->setDescription("Create new PAYMENT_ROUND record.");
        $this->addReference('CREATE_PAYMENT_ROUND', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_PAYMENT_ROUND");
        $permission->setDescription("Show detail information of PAYMENT_ROUND.");
        $this->addReference('VIEW_PAYMENT_ROUND', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_PAYMENT_ROUND");
        $permission->setDescription("Modify an existing PAYMENT_ROUND record.");
        $this->addReference('EDIT_PAYMENT_ROUND', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_PAYMENT_ROUND");
        $permission->setDescription("Remove PAYMENT_ROUND record.");
        $this->addReference('DELETE_PAYMENT_ROUND', $permission);
        $manager->persist($permission);
       
         $permission = new Permission();
        $permission->setName("LIST_PROJECT_TYPE");
        $permission->setDescription("Display list of PROJECT_TYPE.");
        $this->addReference('LIST_PROJECT_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_PROJECT_TYPE");
        $permission->setDescription("Create new PROJECT_TYPE record.");
        $this->addReference('CREATE_PROJECT_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_PROJECT_TYPE");
        $permission->setDescription("Show detail information of PROJECT_TYPE.");
        $this->addReference('VIEW_PROJECT_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_PROJECT_TYPE");
        $permission->setDescription("Modify an existing PROJECT_TYPE record.");
        $this->addReference('EDIT_PROJECT_TYPE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_PROJECT_TYPE");
        $permission->setDescription("Remove PROJECT_TYPE record.");
        $this->addReference('DELETE_PROJECT_TYPE', $permission);
        $manager->persist($permission);
       
         $permission = new Permission();
        $permission->setName("LIST_SERVICE_PAYMENT");
        $permission->setDescription("Display list of SERVICE_PAYMENT.");
        $this->addReference('LIST_SERVICE_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_SERVICE_PAYMENT");
        $permission->setDescription("Create new SERVICE_PAYMENT record.");
        $this->addReference('CREATE_SERVICE_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_SERVICE_PAYMENT");
        $permission->setDescription("Show detail information of SERVICE_PAYMENT.");
        $this->addReference('VIEW_SERVICE_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_SERVICE_PAYMENT");
        $permission->setDescription("Modify an existing SERVICE_PAYMENT record.");
        $this->addReference('EDIT_SERVICE_PAYMENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_SERVICE_PAYMENT");
        $permission->setDescription("Remove SERVICE_PAYMENT record.");
        $this->addReference('DELETE_SERVICE_PAYMENT', $permission);
        $manager->persist($permission); 
       
 ###########################BUILDING_PROJECT CONTROLLER ROLES######################################
        $permission = new Permission();
        $permission->setName("LIST_BUILDING_PROJECT");
        $permission->setDescription("Display list of PROJECTS.");
        $this->addReference('LIST_BUILDING_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_BUILDING_PROJECT");
        $permission->setDescription("Create new PROJECT record.");
        $this->addReference('CREATE_BUILDING_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_BUILDING_PROJECT");
        $permission->setDescription("Show detail information of PROJECT.");
        $this->addReference('VIEW_BUILDING_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_BUILDING_PROJECT");
        $permission->setDescription("Modify an existing PROJECT record.");
        $this->addReference('EDIT_BUILDING_PROJECT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_BUILDING_PROJECT");
        $permission->setDescription("Remove PROJECT record.");
        $this->addReference('DELETE_BUILDING_PROJECT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_BUILDING_PAYMENT");
        $permission->setDescription("Display list of BUILDING_PAYMENTS.");
        $this->addReference('LIST_BUILDING_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_BUILDING_PAYMENT");
        $permission->setDescription("Create new BUILDING_PAYMENT record.");
        $this->addReference('CREATE_BUILDING_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_BUILDING_PAYMENT");
        $permission->setDescription("Show detail information of BUILDING_PAYMENT.");
        $this->addReference('VIEW_BUILDING_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_BUILDING_PAYMENT");
        $permission->setDescription("Modify an existing BUILDING_PAYMENT record.");
        $this->addReference('EDIT_BUILDING_PAYMENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_BUILDING_PAYMENT");
        $permission->setDescription("Remove BUILDING_PAYMENT record.");
        $this->addReference('DELETE_BUILDING_PAYMENT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_BUILDING_JOB_OPPORTUNITY");
        $permission->setDescription("Display list of BUILDING_JOB_OPPORTUNITIES.");
        $this->addReference('LIST_BUILDING_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_BUILDING_JOB_OPPORTUNITY");
        $permission->setDescription("Create new BUILDING_JOB_OPPORTUNITY record.");
        $this->addReference('CREATE_BUILDING_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_BUILDING_JOB_OPPORTUNITY");
        $permission->setDescription("Show detail information of BUILDING_JOB_OPPORTUNITY.");
        $this->addReference('VIEW_BUILDING_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_BUILDING_JOB_OPPORTUNITY");
        $permission->setDescription("Modify an existing BUILDING_JOB_OPPORTUNITY record.");
        $this->addReference('EDIT_BUILDING_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_BUILDING_JOB_OPPORTUNITY");
        $permission->setDescription("Remove BUILDING_JOB_OPPORTUNITY record.");
        $this->addReference('DELETE_BUILDING_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

      $permission = new Permission();
        $permission->setName("LIST_BUILDING_PROJECT_DESIGN");
        $permission->setDescription("Display list of BUILDING_PROJECT_DESIGN.");
        $this->addReference('LIST_BUILDING_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_BUILDING_PROJECT_DESIGN");
        $permission->setDescription("Create new BUILDING_PROJECT_DESIGN record.");
        $this->addReference('CREATE_BUILDING_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_BUILDING_PROJECT_DESIGN");
        $permission->setDescription("Show detail information of BUILDING_PROJECT_DESIGN.");
        $this->addReference('VIEW_BUILDING_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_BUILDING_PROJECT_DESIGN");
        $permission->setDescription("Modify an existing BUILDING_PROJECT_DESIGN record.");
        $this->addReference('EDIT_BUILDING_PROJECT_DESIGN', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_BUILDING_PROJECT_DESIGN");
        $permission->setDescription("Remove BUILDING_PROJECT_DESIGN record.");
        $this->addReference('DELETE_BUILDING_PROJECT_DESIGN', $permission);
        $manager->persist($permission);


       $permission = new Permission();
        $permission->setName("LIST_BUILDIND_EXPERTS");
        $permission->setDescription("Display list of BUILDIND_EXPERTS.");
        $this->addReference('LIST_BUILDIND_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_BUILDIND_EXPERTS");
        $permission->setDescription("Create new BUILDIND_EXPERTS record.");
        $this->addReference('CREATE_BUILDIND_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_BUILDIND_EXPERTS");
        $permission->setDescription("Show detail information of BUILDIND_EXPERTS.");
        $this->addReference('VIEW_BUILDIND_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_BUILDIND_EXPERTS");
        $permission->setDescription("Modify an existing BUILDIND_EXPERTS record.");
        $this->addReference('EDIT_BUILDIND_EXPERTS', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_BUILDIND_EXPERTS");
        $permission->setDescription("Remove BUILDIND_EXPERTS record.");
        $this->addReference('DELETE_BUILDIND_EXPERTS', $permission);
        $manager->persist($permission);

   $permission = new Permission();
        $permission->setName("LIST_BUILDIND_PROJECT_GAURANTEE");
        $permission->setDescription("Display list of BUILDIND_PROJECT_GAURANTEE.");
        $this->addReference('LIST_BUILDIND_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_BUILDIND_PROJECT_GAURANTEE");
        $permission->setDescription("Create new BUILDIND_PROJECT_GAURANTEE record.");
        $this->addReference('CREATE_BUILDIND_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_BUILDIND_PROJECT_GAURANTEE");
        $permission->setDescription("Show detail information of BUILDIND_PROJECT_GAURANTEE.");
        $this->addReference('VIEW_BUILDIND_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_BUILDIND_PROJECT_GAURANTEE");
        $permission->setDescription("Modify an existing BUILDIND_PROJECT_GAURANTEE record.");
        $this->addReference('EDIT_BUILDIND_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_BUILDIND_PROJECT_GAURANTEE");
        $permission->setDescription("Remove BUILDIND_PROJECT_GAURANTEE record.");
        $this->addReference('DELETE_BUILDIND_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);


      ###########################ROAD_GROUP CONTROLLER ROLES######################################
        $permission = new Permission();
        $permission->setName("LIST_ROAD_PROJECT");
        $permission->setDescription("Display list of PROJECTS.");
        $this->addReference('LIST_ROAD_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_ROAD_PROJECT");
        $permission->setDescription("Create new PROJECT record.");
        $this->addReference('CREATE_ROAD_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_ROAD_PROJECT");
        $permission->setDescription("Show detail information of PROJECT.");
        $this->addReference('VIEW_ROAD_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_ROAD_PROJECT");
        $permission->setDescription("Modify an existing PROJECT record.");
        $this->addReference('EDIT_ROAD_PROJECT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_ROAD_PROJECT");
        $permission->setDescription("Remove PROJECT record.");
        $this->addReference('DELETE_ROAD_PROJECT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_ROAD_PAYMENT");
        $permission->setDescription("Display list of ROAD_PAYMENTS.");
        $this->addReference('LIST_ROAD_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_ROAD_PAYMENT");
        $permission->setDescription("Create new ROAD_PAYMENT record.");
        $this->addReference('CREATE_ROAD_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_ROAD_PAYMENT");
        $permission->setDescription("Show detail information of ROAD_PAYMENT.");
        $this->addReference('VIEW_ROAD_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_ROAD_PAYMENT");
        $permission->setDescription("Modify an existing ROAD_PAYMENT record.");
        $this->addReference('EDIT_ROAD_PAYMENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_ROAD_PAYMENT");
        $permission->setDescription("Remove ROAD_PAYMENT record.");
        $this->addReference('DELETE_ROAD_PAYMENT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_ROAD_JOB_OPPORTUNITY");
        $permission->setDescription("Display list of ROAD_JOB_OPPORTUNITY.");
        $this->addReference('LIST_ROAD_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_ROAD_JOB_OPPORTUNITY");
        $permission->setDescription("Create new ROAD_JOB_OPPORTUNITY record.");
        $this->addReference('CREATE_ROAD_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_ROAD_JOB_OPPORTUNITY");
        $permission->setDescription("Show detail information of ROAD_JOB_OPPORTUNITY.");
        $this->addReference('VIEW_ROAD_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_ROAD_JOB_OPPORTUNITY");
        $permission->setDescription("Modify an existing ROAD_JOB_OPPORTUNITY record.");
        $this->addReference('EDIT_ROAD_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_ROAD_JOB_OPPORTUNITY");
        $permission->setDescription("Remove ROAD_JOB_OPPORTUNITY record.");
        $this->addReference('DELETE_ROAD_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);
        
         $permission = new Permission();
        $permission->setName("LIST_ROAD_EXPERTS");
        $permission->setDescription("Display list of ROAD_EXPERTS.");
        $this->addReference('LIST_ROAD_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_ROAD_EXPERTS");
        $permission->setDescription("Create new ROAD_EXPERTS record.");
        $this->addReference('CREATE_ROAD_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_ROAD_EXPERTS");
        $permission->setDescription("Show detail information of ROAD_EXPERTS.");
        $this->addReference('VIEW_ROAD_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_ROAD_EXPERTS");
        $permission->setDescription("Modify an existing ROAD_EXPERTS record.");
        $this->addReference('EDIT_ROAD_EXPERTS', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_ROAD_EXPERTS");
        $permission->setDescription("Remove ROAD_EXPERTS record.");
        $this->addReference('DELETE_ROAD_EXPERTS', $permission);
        $manager->persist($permission);

       $permission = new Permission();
        $permission->setName("LIST_ROAD_PROJECT_DESIGN");
        $permission->setDescription("Display list of ROAD_PROJECT_DESIGN.");
        $this->addReference('LIST_ROAD_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_ROAD_PROJECT_DESIGN");
        $permission->setDescription("Create new ROAD_PROJECT_DESIGN record.");
        $this->addReference('CREATE_ROAD_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_ROAD_PROJECT_DESIGN");
        $permission->setDescription("Show detail information of ROAD_PROJECT_DESIGN.");
        $this->addReference('VIEW_ROAD_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_ROAD_PROJECT_DESIGN");
        $permission->setDescription("Modify an existing ROAD_PROJECT_DESIGN record.");
        $this->addReference('EDIT_ROAD_PROJECT_DESIGN', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_ROAD_PROJECT_DESIGN");
        $permission->setDescription("Remove ROAD_PROJECT_DESIGN record.");
        $this->addReference('DELETE_ROAD_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

           $permission = new Permission();
        $permission->setName("LIST_ROAD_PROJECT_GAURANTEE");
        $permission->setDescription("Display list of ROAD_PROJECT_GAURANTEE.");
        $this->addReference('LIST_ROAD_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_ROAD_PROJECT_GAURANTEE");
        $permission->setDescription("Create new ROAD_PROJECT_GAURANTEE record.");
        $this->addReference('CREATE_ROAD_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_ROAD_PROJECT_GAURANTEE");
        $permission->setDescription("Show detail information of ROAD_PROJECT_GAURANTEE.");
        $this->addReference('VIEW_ROAD_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_ROAD_PROJECT_GAURANTEE");
        $permission->setDescription("Modify an existing ROAD_PROJECT_GAURANTEE record.");
        $this->addReference('EDIT_ROAD_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_ROAD_PROJECT_GAURANTEE");
        $permission->setDescription("Remove ROAD_PROJECT_GAURANTEE record.");
        $this->addReference('DELETE_ROAD_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);


      ###########################WATER_AND_IRRIGATION_GROUP CONTROLLER ROLES######################################
        $permission = new Permission();
        $permission->setName("LIST_WATER_PROJECT");
        $permission->setDescription("Display list of WATER_PROJECTS.");
        $this->addReference('LIST_WATER_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_WATER_PROJECT");
        $permission->setDescription("Create new WATER_PROJECT record.");
        $this->addReference('CREATE_WATER_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_WATER_PROJECT");
        $permission->setDescription("Show detail information of WATER_PROJECT.");
        $this->addReference('VIEW_WATER_PROJECT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_WATER_PROJECT");
        $permission->setDescription("Modify an existing WATER_PROJECT record.");
        $this->addReference('EDIT_WATER_PROJECT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_WATER_PROJECT");
        $permission->setDescription("Remove WATER_PROJECT record.");
        $this->addReference('DELETE_WATER_PROJECT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_WATER_PAYMENT");
        $permission->setDescription("Display list of WATER_PAYMENTS.");
        $this->addReference('LIST_WATER_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_WATER_PAYMENT");
        $permission->setDescription("Create new WATER_PAYMENT record.");
        $this->addReference('CREATE_WATER_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_WATER_PAYMENT");
        $permission->setDescription("Show detail information of WATER_PAYMENT.");
        $this->addReference('VIEW_WATER_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_WATER_PAYMENT");
        $permission->setDescription("Modify an existing WATER_PAYMENT record.");
        $this->addReference('EDIT_WATER_PAYMENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_WATER_PAYMENT");
        $permission->setDescription("Remove WATER_PAYMENT record.");
        $this->addReference('DELETE_WATER_PAYMENT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_WATER_JOB_OPPORTUNITY");
        $permission->setDescription("Display list of WATER_JOB_OPPORTUNITY.");
        $this->addReference('LIST_WATER_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_WATER_JOB_OPPORTUNITY");
        $permission->setDescription("Create new WATER_JOB_OPPORTUNITY record.");
        $this->addReference('CREATE_WATER_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_WATER_JOB_OPPORTUNITY");
        $permission->setDescription("Show detail information of WATER_JOB_OPPORTUNITY.");
        $this->addReference('VIEW_WATER_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_WATER_JOB_OPPORTUNITY");
        $permission->setDescription("Modify an existing WATER_JOB_OPPORTUNITY record.");
        $this->addReference('EDIT_WATER_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_WATER_JOB_OPPORTUNITY");
        $permission->setDescription("Remove WATER_JOB_OPPORTUNITY record.");
        $this->addReference('DELETE_WATER_JOB_OPPORTUNITY', $permission);
        $manager->persist($permission);


       $permission = new Permission();
        $permission->setName("LIST_WATER_EXPERTS");
        $permission->setDescription("Display list of WATER_EXPERTS.");
        $this->addReference('LIST_WATER_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_WATER_EXPERTS");
        $permission->setDescription("Create new WATER_EXPERTS record.");
        $this->addReference('CREATE_WATER_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_WATER_EXPERTS");
        $permission->setDescription("Show detail information of WATER_EXPERTS.");
        $this->addReference('VIEW_WATER_EXPERTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_WATER_EXPERTS");
        $permission->setDescription("Modify an existing WATER_EXPERTS record.");
        $this->addReference('EDIT_WATER_EXPERTS', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_WATER_EXPERTS");
        $permission->setDescription("Remove WATER_EXPERTS record.");
        $this->addReference('DELETE_WATER_EXPERTS', $permission);
        $manager->persist($permission);

 $permission = new Permission();
        $permission->setName("LIST_WATER_PROJECT_DESIGN");
        $permission->setDescription("Display list of WATER_PROJECT_DESIGN.");
        $this->addReference('LIST_WATER_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_WATER_PROJECT_DESIGN");
        $permission->setDescription("Create new WATER_PROJECT_DESIGN record.");
        $this->addReference('CREATE_WATER_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_WATER_PROJECT_DESIGN");
        $permission->setDescription("Show detail information of WATER_PROJECT_DESIGN.");
        $this->addReference('VIEW_WATER_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_WATER_PROJECT_DESIGN");
        $permission->setDescription("Modify an existing WATER_PROJECT_DESIGN record.");
        $this->addReference('EDIT_WATER_PROJECT_DESIGN', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_WATER_PROJECT_DESIGN");
        $permission->setDescription("Remove WATER_PROJECT_DESIGN record.");
        $this->addReference('DELETE_WATER_PROJECT_DESIGN', $permission);
        $manager->persist($permission);

         $permission = new Permission();
        $permission->setName("LIST_WATER_PROJECT_GAURANTEE");
        $permission->setDescription("Display list of WATER_PROJECT_GAURANTEE.");
        $this->addReference('LIST_WATER_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_WATER_PROJECT_GAURANTEE");
        $permission->setDescription("Create new WATER_PROJECT_GAURANTEE record.");
        $this->addReference('CREATE_WATER_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_WATER_PROJECT_GAURANTEE");
        $permission->setDescription("Show detail information of WATER_PROJECT_GAURANTEE.");
        $this->addReference('VIEW_WATER_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_WATER_PROJECT_GAURANTEE");
        $permission->setDescription("Modify an existing WATER_PROJECT_GAURANTEE record.");
        $this->addReference('EDIT_WATER_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_WATER_PROJECT_GAURANTEE");
        $permission->setDescription("Remove WATER_PROJECT_GAURANTEE record.");
        $this->addReference('DELETE_WATER_PROJECT_GAURANTEE', $permission);
        $manager->persist($permission);
        
      ###########################HRM_EMPLOYEE_GROUP CONTROLLER ROLES######################################
        $permission = new Permission();
        $permission->setName("LIST_EMPLOYEE");
        $permission->setDescription("Display list of EMPLOYEE.");
        $this->addReference('LIST_EMPLOYEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_EMPLOYEE");
        $permission->setDescription("Create new EMPLOYEE record.");
        $this->addReference('CREATE_EMPLOYEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_EMPLOYEE");
        $permission->setDescription("Show detail information of EMPLOYEE.");
        $this->addReference('VIEW_EMPLOYEE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_EMPLOYEE");
        $permission->setDescription("Modify an existing EMPLOYEE record.");
        $this->addReference('EDIT_EMPLOYEE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_EMPLOYEE");
        $permission->setDescription("Remove EMPLOYEE record.");
        $this->addReference('DELETE_EMPLOYEE', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_PROPERTY");
        $permission->setDescription("Display list of PROPERTY.");
        $this->addReference('LIST_PROPERTY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_PROPERTY");
        $permission->setDescription("Create new PROPERTY record.");
        $this->addReference('CREATE_PROPERTY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_PROPERTY");
        $permission->setDescription("Show detail information of PROPERTY.");
        $this->addReference('VIEW_PROPERTY', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_PROPERTY");
        $permission->setDescription("Modify an existing PROPERTY record.");
        $this->addReference('EDIT_PROPERTY', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_PROPERTY");
        $permission->setDescription("Remove PROPERTY record.");
        $this->addReference('DELETE_PROPERTY', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_TRANING");
        $permission->setDescription("Display list of TRANING.");
        $this->addReference('LIST_TRANING', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_TRANING");
        $permission->setDescription("Create new TRANING record.");
        $this->addReference('CREATE_TRANING', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_TRANING");
        $permission->setDescription("Show detail information of TRANING.");
        $this->addReference('VIEW_TRANING', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_TRANING");
        $permission->setDescription("Modify an existing TRANING record.");
        $this->addReference('EDIT_TRANING', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_TRANING");
        $permission->setDescription("Remove TRANING record.");
        $this->addReference('DELETE_TRANING', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_TRANSFER");
        $permission->setDescription("Display list of TRANSFER.");
        $this->addReference('LIST_TRANSFER', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_TRANSFER");
        $permission->setDescription("Create new TRANSFER record.");
        $this->addReference('CREATE_TRANSFER', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_TRANSFER");
        $permission->setDescription("Show detail information of TRANSFER.");
        $this->addReference('VIEW_TRANSFER', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_TRANSFER");
        $permission->setDescription("Modify an existing TRANSFER record.");
        $this->addReference('EDIT_TRANSFER', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_TRANSFER");
        $permission->setDescription("Remove TRANSFER record.");
        $this->addReference('DELETE_TRANSFER', $permission);
        $manager->persist($permission);
        ###########################EVALUATION_GROUP CONTROLLER ROLES######################################
        $permission = new Permission();
        $permission->setName("LIST_EVALUATION");
        $permission->setDescription("Display list of EVALUATION.");
        $this->addReference('LIST_EVALUATION', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_EVALUATION");
        $permission->setDescription("Create new EVALUATION record.");
        $this->addReference('CREATE_EVALUATION', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_EVALUATION");
        $permission->setDescription("Show detail information of EVALUATION.");
        $this->addReference('VIEW_EVALUATION', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_EVALUATION");
        $permission->setDescription("Modify an existing EVALUATION record.");
        $this->addReference('EDIT_EVALUATION', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_EVALUATION");
        $permission->setDescription("Remove EVALUATION record.");
        $this->addReference('DELETE_EVALUATION', $permission);
        $manager->persist($permission);      

      ###########################INDUSTRY_GROUP CONTROLLER ROLES######################################
        $permission = new Permission();
        $permission->setName("LIST_CONTRACTORS_IMX");
        $permission->setDescription("Display list of CONTRACTORS_IMX.");
        $this->addReference('LIST_CONTRACTORS_IMX', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_CONTRACTORS_IMX");
        $permission->setDescription("Create new CONTRACTORS_IMX record.");
        $this->addReference('CREATE_CONTRACTORS_IMX', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_CONTRACTORS_IMX");
        $permission->setDescription("Show detail information of CONTRACTORS_IMX.");
        $this->addReference('VIEW_CONTRACTORS_IMX', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_CONTRACTORS_IMX");
        $permission->setDescription("Modify an existing CONTRACTORS_IMX record.");
        $this->addReference('EDIT_CONTRACTORS_IMX', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_CONTRACTORS_IMX");
        $permission->setDescription("Remove CONTRACTORS_IMX record.");
        $this->addReference('DELETE_CONTRACTORS_IMX', $permission);
        $manager->persist($permission);

 $permission = new Permission();
        $permission->setName("LIST_CONTRACTOR");
        $permission->setDescription("Display list of CONTRACTOR.");
        $this->addReference('LIST_CONTRACTOR', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_CONTRACTOR");
        $permission->setDescription("Create new CONTRACTOR record.");
        $this->addReference('CREATE_CONTRACTOR', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_CONTRACTOR");
        $permission->setDescription("Show detail information of CONTRACTOR.");
        $this->addReference('VIEW_CONTRACTOR', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_CONTRACTOR");
        $permission->setDescription("Modify an existing CONTRACTOR record.");
        $this->addReference('EDIT_CONTRACTOR', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_CONTRACTOR");
        $permission->setDescription("Remove CONTRACTOR record.");
        $this->addReference('DELETE_CONTRACTOR', $permission);
        $manager->persist($permission);


 $permission = new Permission();
        $permission->setName("LIST_CONTRACTORS_IMX_RENEWED_PAYMENT");
        $permission->setDescription("Display list of CONTRACTORS_IMX_RENEWED_PAYMENT.");
        $this->addReference('LIST_CONTRACTORS_IMX_RENEWED_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT");
        $permission->setDescription("Create new CONTRACTORS_IMX_RENEWED_PAYMENT record.");
        $this->addReference('CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_CONTRACTORS_IMX_RENEWED_PAYMENT");
        $permission->setDescription("Show detail information of CONTRACTORS_IMX_RENEWED_PAYMENT.");
        $this->addReference('VIEW_CONTRACTORS_IMX_RENEWED_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_CONTRACTORS_IMX_RENEWED_PAYMENT");
        $permission->setDescription("Modify an existing CONTRACTORS_IMX_RENEWED_PAYMENT record.");
        $this->addReference('EDIT_CONTRACTORS_IMX_RENEWED_PAYMENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_CONTRACTORS_IMX_RENEWED_PAYMENT");
        $permission->setDescription("Remove CONTRACTORS_IMX_RENEWED_PAYMENT record.");
        $this->addReference('DELETE_CONTRACTORS_IMX_RENEWED_PAYMENT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_NAME_MSE");
        $permission->setDescription("Display list of NAME_MSE.");
        $this->addReference('LIST_NAME_MSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_NAME_MSE");
        $permission->setDescription("Create new NAME_MSE record.");
        $this->addReference('CREATE_NAME_MSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_NAME_MSE");
        $permission->setDescription("Show detail information of NAME_MSE.");
        $this->addReference('VIEW_NAME_MSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_NAME_MSE");
        $permission->setDescription("Modify an existing NAME_MSE record.");
        $this->addReference('EDIT_NAME_MSE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_NAME_MSE");
        $permission->setDescription("Remove NAME_MSE record.");
        $this->addReference('DELETE_NAME_MSE', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_MSE_MEMBERS");
        $permission->setDescription("Display list of MSE_MEMBERS.");
        $this->addReference('LIST_MSE_MEMBERS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_MSE_MEMBERS");
        $permission->setDescription("Create new MSE_MEMBERS record.");
        $this->addReference('CREATE_MSE_MEMBERS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_MSE_MEMBERS");
        $permission->setDescription("Show detail information of MSE_MEMBERS.");
        $this->addReference('VIEW_MSE_MEMBERS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_MSE_MEMBERS");
        $permission->setDescription("Modify an existing MSE_MEMBERS record.");
        $this->addReference('EDIT_MSE_MEMBERS', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_MSE_MEMBERS");
        $permission->setDescription("Remove MSE_MEMBERS record.");
        $this->addReference('DELETE_MSE_MEMBERS', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_PROFESSIONAL_LICENSE");
        $permission->setDescription("Display list of PROFESSIONAL_LICENSE.");
        $this->addReference('LIST_PROFESSIONAL_LICENSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_PROFESSIONAL_LICENSE");
        $permission->setDescription("Create new PROFESSIONAL_LICENSE record.");
        $this->addReference('CREATE_PROFESSIONAL_LICENSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_PROFESSIONAL_LICENSE");
        $permission->setDescription("Show detail information of PROFESSIONAL_LICENSE.");
        $this->addReference('VIEW_PROFESSIONAL_LICENSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_PROFESSIONAL_LICENSE");
        $permission->setDescription("Modify an existing PROFESSIONAL_LICENSE record.");
        $this->addReference('EDIT_PROFESSIONAL_LICENSE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_PROFESSIONAL_LICENSE");
        $permission->setDescription("Remove PROFESSIONAL_LICENSE record.");
        $this->addReference('DELETE_PROFESSIONAL_LICENSE', $permission);
        $manager->persist($permission);
  
        $permission = new Permission();
        $permission->setName("LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT");
        $permission->setDescription("Display list of PROFESSIONAL_CERT_RENEWAL_PAYMENT.");
        $this->addReference('LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT");
        $permission->setDescription("Create new PROFESSIONAL_CERT_RENEWAL_PAYMENT record.");
        $this->addReference('CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_PROFESSIONAL_CERT_RENEWAL_PAYMENT");
        $permission->setDescription("Show detail information of PROFESSIONAL_CERT_RENEWAL_PAYMENT.");
        $this->addReference('VIEW_PROFESSIONAL_CERT_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_PROFESSIONAL_CERT_RENEWAL_PAYMENT");
        $permission->setDescription("Modify an existing PROFESSIONAL_CERT_RENEWAL_PAYMENT record.");
        $this->addReference('EDIT_PROFESSIONAL_CERT_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_PROFESSIONAL_CERT_RENEWAL_PAYMENT");
        $permission->setDescription("Remove PROFESSIONAL_CERT_RENEWAL_PAYMENT record.");
        $this->addReference('DELETE_PROFESSIONAL_CERT_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);
  
  
   $permission = new Permission();
        $permission->setName("LIST_LICENSE");
        $permission->setDescription("Display list of LICENSE.");
        $this->addReference('LIST_LICENSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_LICENSE");
        $permission->setDescription("Create new _LICENSE record.");
        $this->addReference('CREATE_LICENSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_LICENSE");
        $permission->setDescription("Show detail information of _LICENSE.");
        $this->addReference('VIEW_LICENSE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_LICENSE");
        $permission->setDescription("Modify an existing _LICENSE record.");
        $this->addReference('EDIT_LICENSE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_LICENSE");
        $permission->setDescription("Remove _LICENSE record.");
        $this->addReference('DELETE_LICENSE', $permission);
        $manager->persist($permission);
        
        $permission = new Permission();
        $permission->setName("LIST_RENEWAL_PAYMENT");
        $permission->setDescription("Display list of RENEWAL_PAYMENT.");
        $this->addReference('LIST_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_RENEWAL_PAYMENT");
        $permission->setDescription("Create new RENEWAL_PAYMENT record.");
        $this->addReference('CREATE_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_RENEWAL_PAYMENT");
        $permission->setDescription("Show detail information of RENEWAL_PAYMENT.");
        $this->addReference('VIEW_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_RENEWAL_PAYMENT");
        $permission->setDescription("Modify an existing RENEWAL_PAYMENT record.");
        $this->addReference('EDIT_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_RENEWAL_PAYMENT");
        $permission->setDescription("Remove RENEWAL_PAYMENT record.");
        $this->addReference('DELETE_RENEWAL_PAYMENT', $permission);
        $manager->persist($permission);
  
  
        $permission = new Permission();
        $permission->setName("LIST_CONTRACTORS");
        $permission->setDescription("Display list of CONTRACTORS.");
        $this->addReference('LIST_CONTRACTORS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_CONTRACTORS");
        $permission->setDescription("Create new CONTRACTORS record.");
        $this->addReference('CREATE_CONTRACTORS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_CONTRACTORS");
        $permission->setDescription("Show detail information of CONTRACTORS.");
        $this->addReference('VIEW_CONTRACTORS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_CONTRACTORS");
        $permission->setDescription("Modify an existing CONTRACTORS record.");
        $this->addReference('EDIT_CONTRACTORS', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_CONTRACTORS");
        $permission->setDescription("Remove CONTRACTORS record.");
        $this->addReference('DELETE_CONTRACTORS', $permission);
        $manager->persist($permission);      

    $permission = new Permission();
        $permission->setName("LIST_CONSULTANT");
        $permission->setDescription("Display list of CONSULTANT.");
        $this->addReference('LIST_CONSULTANT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_CONSULTANT");
        $permission->setDescription("Create new CONSULTANT record.");
        $this->addReference('CREATE_CONSULTANT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_CONSULTANT");
        $permission->setDescription("Show detail information of CONSULTANT.");
        $this->addReference('VIEW_CONSULTANT', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_CONSULTANT");
        $permission->setDescription("Modify an existing CONSULTANT record.");
        $this->addReference('EDIT_CONSULTANT', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_CONSULTANT");
        $permission->setDescription("Remove CONSULTANT record.");
        $this->addReference('DELETE_CONSULTANT', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_CONSULTANTS");
        $permission->setDescription("Display list of CONSULTANTS.");
        $this->addReference('LIST_CONSULTANTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_CONSULTANTS");
        $permission->setDescription("Create new CONSULTANTS record.");
        $this->addReference('CREATE_CONSULTANTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_CONSULTANTS");
        $permission->setDescription("Show detail information of CONSULTANTS.");
        $this->addReference('VIEW_CONSULTANTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_CONSULTANTS");
        $permission->setDescription("Modify an existing CONSULTANTS record.");
        $this->addReference('EDIT_CONSULTANTS', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_CONSULTANTS");
        $permission->setDescription("Remove CONSULTANTS record.");
        $this->addReference('DELETE_CONSULTANTS', $permission);
        $manager->persist($permission);

  $permission = new Permission();
        $permission->setName("LIST_PAYMENT_ALLOWED_CONSULTANTS");
        $permission->setDescription("Display list of PAYMENT_ALLOWED_CONSULTANTS.");
        $this->addReference('LIST_PAYMENT_ALLOWED_CONSULTANTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_PAYMENT_ALLOWED_CONSULTANTS");
        $permission->setDescription("Create new PAYMENT_ALLOWED_CONSULTANTS record.");
        $this->addReference('CREATE_PAYMENT_ALLOWED_CONSULTANTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_PAYMENT_ALLOWED_CONSULTANTS");
        $permission->setDescription("Show detail information of PAYMENT_ALLOWED_CONSULTANTS.");
        $this->addReference('VIEW_PAYMENT_ALLOWED_CONSULTANTS', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_PAYMENT_ALLOWED_CONSULTANTS");
        $permission->setDescription("Modify an existing PAYMENT_ALLOWED_CONSULTANTS record.");
        $this->addReference('EDIT_PAYMENT_ALLOWED_CONSULTANTS', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_PAYMENT_ALLOWED_CONSULTANTS");
        $permission->setDescription("Remove PAYMENT_ALLOWED_CONSULTANTS record.");
        $this->addReference('DELETE_PAYMENT_ALLOWED_CONSULTANTS', $permission);
        $manager->persist($permission);


        $permission = new Permission();
        $permission->setName("LIST_COC_INFO");
        $permission->setDescription("Display list of COC_INFO.");
        $this->addReference('LIST_COC_INFO', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_COC_INFO");
        $permission->setDescription("Create new COC_INFO record.");
        $this->addReference('CREATE_COC_INFO', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_COC_INFO");
        $permission->setDescription("Show detail information of COC_INFO.");
        $this->addReference('VIEW_COC_INFO', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_COC_INFO");
        $permission->setDescription("Modify an existing COC_INFO record.");
        $this->addReference('EDIT_COC_INFO', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_COC_INFO");
        $permission->setDescription("Remove COC_INFO record.");
        $this->addReference('DELETE_COC_INFO', $permission);
        $manager->persist($permission);
  
       $permission = new Permission();
        $permission->setName("LIST_COC_EVALUATION");
        $permission->setDescription("Display list of COC_EVALUATION.");
        $this->addReference('LIST_COC_EVALUATION', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_COC_EVALUATION");
        $permission->setDescription("Create new COC_EVALUATION record.");
        $this->addReference('CREATE_COC_EVALUATION', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_COC_EVALUATION");
        $permission->setDescription("Show detail information of COC_EVALUATION.");
        $this->addReference('VIEW_COC_EVALUATION', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_COC_EVALUATION");
        $permission->setDescription("Modify an existing COC_EVALUATION record.");
        $this->addReference('EDIT_COC_EVALUATION', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_COC_EVALUATION");
        $permission->setDescription("Remove COC_EVALUATION record.");
        $this->addReference('DELETE_COC_EVALUATION', $permission);
        $manager->persist($permission);
  
        $permission = new Permission();
        $permission->setName("LIST_LICENSE_TYPE");
        $permission->setDescription("Display list of LICENSE_TYPE.");
        $this->addReference('LIST_LICENSE_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_LICENSE_TYPE");
        $permission->setDescription("Create new LICENSE_TYPE record.");
        $this->addReference('CREATE_LICENSE_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_LICENSE_TYPE");
        $permission->setDescription("Show detail information of LICENSE_TYPE.");
        $this->addReference('VIEW_LICENSE_TYPE', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_LICENSE_TYPE");
        $permission->setDescription("Modify an existing LICENSE_TYPE record.");
        $this->addReference('EDIT_LICENSE_TYPE', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_LICENSE_TYPE");
        $permission->setDescription("Remove LICENSE_TYPE record.");
        $this->addReference('DELETE_LICENSE_TYPE', $permission);
        $manager->persist($permission);      
      
     $permission = new Permission();
        $permission->setName("LIST_LICENSE_LEVEL");
        $permission->setDescription("Display list of LICENSE_LEVEL.");
        $this->addReference('LIST_LICENSE_LEVEL', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_LICENSE_LEVEL");
        $permission->setDescription("Create new LICENSE_LEVEL record.");
        $this->addReference('CREATE_LICENSE_LEVEL', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_LICENSE_LEVEL");
        $permission->setDescription("Show detail information of LICENSE_LEVEL.");
        $this->addReference('VIEW_LICENSE_LEVEL', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_LICENSE_LEVEL");
        $permission->setDescription("Modify an existing LICENSE_LEVEL record.");
        $this->addReference('EDIT_LICENSE_LEVEL', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_LICENSE_LEVEL");
        $permission->setDescription("Remove LICENSE_LEVEL record.");
        $this->addReference('DELETE_LICENSE_LEVEL', $permission);
        $manager->persist($permission);      
         
         
       $permission = new Permission();
        $permission->setName("LIST_BID");
        $permission->setDescription("Display list of BID.");
        $this->addReference('LIST_BID', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("CREATE_BID");
        $permission->setDescription("Create new BID record.");
        $this->addReference('CREATE_BID', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("VIEW_BID");
        $permission->setDescription("Show detail information of BID.");
        $this->addReference('VIEW_BID', $permission);
        $manager->persist($permission);

        $permission = new Permission();
        $permission->setName("EDIT_BID");
        $permission->setDescription("Modify an existing BID record.");
        $this->addReference('EDIT_BID', $permission);
        $manager->persist($permission);
                
        $permission = new Permission();
        $permission->setName("DELETE_BID");
        $permission->setDescription("Remove BID record.");
        $this->addReference('DELETE_BID', $permission);
        $manager->persist($permission);      
   
   
        $manager->flush();
    }

    public function getOrder() {
        // TODO: Implement getOrder() method.
        return 0;
    }

}
