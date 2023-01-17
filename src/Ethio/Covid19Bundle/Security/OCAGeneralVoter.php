<?php

namespace Ethio\Covid19Bundle\Security;

use OST\UABundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class OCAGeneralVoter extends Voter {

    private $decisionManager;

    // these strings are just invented: you can use anything
    const ADMIN_GROUP = 'ADMIN_GROUP';
     const LIST_OFFICE = 'LIST_OFFICE';
     const CREATE_OFFICE = 'CREATE_OFFICE'; 
     const EDIT_OFFICE = 'EDIT_OFFICE';
     const DELETE_OFFICE = 'DELETE_OFFICE'; 
     const VIEW_OFFICE = 'VIEW_OFFICE'; 
         
     const LIST_CLIENT = 'LIST_CLIENT';
     const CREATE_CLIENT = 'CREATE_CLIENT'; 
     const LIST_GAURANTEE_TYPE = 'LIST_GAURANTEE_TYPE';
     const CREATE_GAURANTEE_TYPE = 'CREATE_GAURANTEE_TYPE'; 
     const LIST_KETEMA_KEBELE = 'LIST_KETEMA_KEBELE';
     const CREATE_KETEMA_KEBELE = 'CREATE_KETEMA_KEBELE';
     const LIST_PAYMENT_ROUND = 'LIST_PAYMENT_ROUND';
     const CREATE_PAYMENT_ROUND = 'CREATE_PAYMENT_ROUND';
     const LIST_PROJECT_TYPE = 'LIST_PROJECT_TYPE';
     const CREATE_PROJECT_TYPE = 'CREATE_PROJECT_TYPE';
    
     
   const BUILDING_GROUP = 'BUILDING_GROUP';
    const LIST_BUILDING_PROJECT = 'LIST_BUILDING_PROJECT';
    const CREATE_BUILDING_PROJECT = 'CREATE_BUILDING_PROJECT';
    const LIST_BUILDING_PAYMENT = 'LIST_BUILDING_PAYMENT';
    const CREATE_BUILDING_PAYMENT = 'CREATE_BUILDING_PAYMENT';
    const LIST_BUILDING_JOB_OPPORTUNITY = 'LIST_BUILDING_JOB_OPPORTUNITY';
    const CREATE_BUILDING_JOB_OPPORTUNITY = 'CREATE_BUILDING_JOB_OPPORTUNITY';
    const LIST_BUILDING_PROJECT_DESIGN = 'LIST_BUILDING_PROJECT_DESIGN';
    const CREATE_BUILDING_PROJECT_DESIGN = 'CREATE_BUILDING_PROJECT_DESIGN';
    const LIST_BUILDIND_EXPERTS = 'LIST_BUILDIND_EXPERTS';
    const CREATE_BUILDIND_EXPERTS = 'CREATE_BUILDIND_EXPERTS';
    const LIST_BUILDIND_PROJECT_GAURANTEE = 'LIST_BUILDIND_PROJECT_GAURANTEE';
    const CREATE_BUILDIND_PROJECT_GAURANTEE = 'CREATE_BUILDIND_PROJECT_GAURANTEE';
    const LIST_SERVICE_PAYMENT = 'LIST_SERVICE_PAYMENT';
    const CREATE_SERVICE_PAYMENT = 'CREATE_SERVICE_PAYMENT';
    
   const ROAD_GROUP = 'ROAD_GROUP';
    const LIST_ROAD_PROJECT = 'LIST_ROAD_PROJECT';
    const CREATE_ROAD_PROJECT = 'CREATE_ROAD_PROJECT';    
    const LIST_ROAD_PAYMENT = 'LIST_ROAD_PAYMENT';
    const CREATE_ROAD_PAYMENT = 'CREATE_ROAD_PAYMENT';
    const LIST_ROAD_JOB_OPPORTUNITY = 'LIST_ROAD_JOB_OPPORTUNITY';
    const CREATE_ROAD_JOB_OPPORTUNITY = 'CREATE_ROAD_JOB_OPPORTUNITY';
    const LIST_ROAD_EXPERTS = 'LIST_ROAD_EXPERTS';
    const CREATE_ROAD_EXPERTS = 'CREATE_ROAD_EXPERTS';
    const LIST_ROAD_PROJECT_DESIGN = 'LIST_ROAD_PROJECT_DESIGN';
    const CREATE_ROAD_PROJECT_DESIGN = 'CREATE_ROAD_PROJECT_DESIGN';
    const LIST_ROAD_PROJECT_GAURANTEE = 'LIST_ROAD_PROJECT_GAURANTEE';
    const CREATE_ROAD_PROJECT_GAURANTEE = 'CREATE_ROAD_PROJECT_GAURANTEE';
    
   const WATER_AND_IRRIGATION_GROUP = 'WATER_AND_IRRIGATION_GROUP';
    const LIST_WATER_PROJECT = 'LIST_WATER_PROJECT';
    const CREATE_WATER_PROJECT = 'CREATE_WATER_PROJECT';
    const LIST_WATER_PAYMENT = 'LIST_WATER_PAYMENT';
    const CREATE_WATER_PAYMENT = 'CREATE_WATER_PAYMENT';
    const LIST_WATER_JOB_OPPORTUNITY = 'LIST_WATER_JOB_OPPORTUNITY';
    const CREATE_WATER_JOB_OPPORTUNITY = 'CREATE_WATER_JOB_OPPORTUNITY';
    const LIST_WATER_EXPERTS = 'LIST_WATER_EXPERTS';
    const CREATE_WATER_EXPERTS = 'CREATE_WATER_EXPERTS';
    const LIST_WATER_PROJECT_DESIGN = 'LIST_WATER_PROJECT_DESIGN';
    const CREATE_WATER_PROJECT_DESIGN = 'CREATE_WATER_PROJECT_DESIGN';
    const LIST_WATER_PROJECT_GAURANTEE = 'LIST_WATER_PROJECT_GAURANTEE';
    const CREATE_WATER_PROJECT_GAURANTEE = 'CREATE_WATER_PROJECT_GAURANTEE';
    
    
    const INDUSTRY_GROUP = 'INDUSTRY_GROUP';
        const LIST_COC_EVALUATION = 'LIST_COC_EVALUATION';
        const CREATE_COC_EVALUATION = 'CREATE_COC_EVALUATION';
        const LIST_COC_INFO = 'LIST_COC_INFO';
        const CREATE_COC_INFO = 'CREATE_COC_INFO';
        const LIST_CONSULTANT = 'LIST_CONSULTANT';
        const CREATE_CONSULTANT = 'CREATE_CONSULTANT';
        const LIST_CONSULTANTS = 'LIST_CONSULTANTS';
        const CREATE_CONSULTANTS = 'CREATE_CONSULTANTS';
           
        const LIST_CONTRACTOR = 'LIST_CONTRACTOR';
        const CREATE_CONTRACTOR = 'CREATE_CONTRACTOR';
        const LIST_CONTRACTORS = 'LIST_CONTRACTORS';
        const CREATE_CONTRACTORS = 'CREATE_CONTRACTORS';
        const LIST_CONTRACTORS_IMX = 'LIST_CONTRACTORS_IMX';
        const CREATE_CONTRACTORS_IMX = 'CREATE_CONTRACTORS_IMX';
        const LIST_CONTRACTORS_IMX_RENEWED_PAYMENT = 'LIST_CONTRACTORS_IMX_RENEWED_PAYMENT';
        const CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT = 'CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT';
        const LIST_LICENSE_TYPE = 'LIST_LICENSE_TYPE';
        const CREATE_LICENSE_TYPE = 'CREATE_LICENSE_TYPE';
        const LIST_LICENSE = 'LIST_LICENSE';
        const CREATE_LICENSE = 'CREATE_LICENSE';
        const LIST_LICENSE_LEVEL = 'LIST_LICENSE_LEVEL';
        const CREATE_LICENSE_LEVEL = 'CREATE_LICENSE_LEVEL';
        
        const LIST_NAME_MSE = 'LIST_NAME_MSE';
        const CREATE_NAME_MSE = 'CREATE_NAME_MSE';
        const LIST_MSE_MEMBERS = 'LIST_MSE_MEMBERS';
        const CREATE_MSE_MEMBERS = 'CREATE_MSE_MEMBERS';
        const LIST_PAYMENT_ALLOWED_CONSULTANTS = 'LIST_PAYMENT_ALLOWED_CONSULTANTS';
        const CREATE_PAYMENT_ALLOWED_CONSULTANTS = 'CREATE_PAYMENT_ALLOWED_CONSULTANTS';
        const LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT = 'LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT';
        const CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT = 'CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT';
        const LIST_PROFESSIONAL_LICENSE = 'LIST_PROFESSIONAL_LICENSE';
        const CREATE_PROFESSIONAL_LICENSE = 'CREATE_PROFESSIONAL_LICENSE';
      const LIST_BID = 'LIST_BID';
        const CREATE_BID = 'CREATE_BID';
       
    const HRM_EMPLOYEE = 'HRM_EMPLOYEE';   
      const LIST_EMPLOYEE = 'LIST_EMPLOYEE';   
      const CREATE_EMPLOYEE = 'CREATE_EMPLOYEE';   
      const LIST_PROPERTY = 'LIST_PROPERTY';   
      const CREATE_PROPERTY = 'CREATE_PROPERTY';   
      const LIST_TRANING = 'LIST_TRANING';   
      const CREATE_TRANING = 'CREATE_TRANING';   
      const LIST_TRANSFER = 'LIST_TRANSFER';   
      const CREATE_TRANSFER = 'CREATE_TRANSFER';   

      const LIST_LOG = 'LIST_LOG';   
      const VIEW_LOG = 'VIEW_LOG';   

    public function __construct(AccessDecisionManagerInterface $decisionManager) {
        $this->decisionManager = $decisionManager;
    }

    protected function supports($attribute, $subject) {
        // if the attribute isn't one we support, return false

        if (!in_array($attribute, array(
                   self::ADMIN_GROUP,
                    self::LIST_OFFICE,
                    self::CREATE_OFFICE,
                    self::EDIT_OFFICE,
                    self::DELETE_OFFICE,
                    self::VIEW_OFFICE,
                    self::LIST_LOG,
                    self::VIEW_LOG,
                    
                    self::LIST_CLIENT,
                    self::CREATE_CLIENT,
                    self::LIST_GAURANTEE_TYPE,
                    self::CREATE_GAURANTEE_TYPE,
                    self::LIST_KETEMA_KEBELE,
                    self::CREATE_KETEMA_KEBELE,
                    self::LIST_PAYMENT_ROUND,
                    self::CREATE_PAYMENT_ROUND,
                    self::LIST_PROJECT_TYPE,
                    self::CREATE_PROJECT_TYPE,

                  self::BUILDING_GROUP,
                    self::LIST_BUILDING_PROJECT,
                    self::CREATE_BUILDING_PROJECT,
                    self::LIST_BUILDING_PAYMENT,
                    self::CREATE_BUILDING_PAYMENT,
                    self::LIST_BUILDING_JOB_OPPORTUNITY,
                    self::CREATE_BUILDING_JOB_OPPORTUNITY,
                    self::LIST_BUILDING_PROJECT_DESIGN,
                    self::CREATE_BUILDING_PROJECT_DESIGN,
                    self::LIST_BUILDIND_EXPERTS,
                    self::CREATE_BUILDIND_EXPERTS,
                    self::LIST_BUILDIND_PROJECT_GAURANTEE,
                    self::CREATE_BUILDIND_PROJECT_GAURANTEE,
                    self::LIST_SERVICE_PAYMENT,
                    self::CREATE_SERVICE_PAYMENT,
                  
                  self::ROAD_GROUP,
                    self::LIST_ROAD_PROJECT,
                    self::CREATE_ROAD_PROJECT,
                    self::LIST_ROAD_PAYMENT,
                    self::CREATE_ROAD_PAYMENT,
                    self::LIST_ROAD_JOB_OPPORTUNITY,
                    self::CREATE_ROAD_JOB_OPPORTUNITY,
                    self::LIST_ROAD_EXPERTS,
                    self::CREATE_ROAD_EXPERTS,
                    self::LIST_ROAD_PROJECT_DESIGN,
                    self::CREATE_ROAD_PROJECT_DESIGN,
                    self::LIST_ROAD_PROJECT_GAURANTEE,
                    self::CREATE_ROAD_PROJECT_GAURANTEE,
                   
                   
                  self::WATER_AND_IRRIGATION_GROUP,
                    self::LIST_WATER_PROJECT,
                    self::CREATE_WATER_PROJECT,
                    self::LIST_WATER_PAYMENT,
                    self::CREATE_WATER_PAYMENT,
                    self::LIST_WATER_JOB_OPPORTUNITY,
                    self::CREATE_WATER_JOB_OPPORTUNITY,
                    self::LIST_WATER_EXPERTS,
                    self::CREATE_WATER_EXPERTS,
                    self::LIST_WATER_PROJECT_DESIGN,
                    self::CREATE_WATER_PROJECT_DESIGN,
                    self::LIST_WATER_PROJECT_GAURANTEE,
                    self::CREATE_WATER_PROJECT_GAURANTEE,
                   
                 self::INDUSTRY_GROUP,
                   self::LIST_COC_EVALUATION,
                   self::CREATE_COC_EVALUATION,
                   self::LIST_COC_INFO,
                   self::CREATE_COC_INFO,
                   self::LIST_CONSULTANT,
                   self::CREATE_CONSULTANT,
                   self::LIST_CONSULTANTS,
                   self::CREATE_CONSULTANTS,
                   self::LIST_CONTRACTORS,
                   self::CREATE_CONTRACTORS,
                   self::LIST_CONTRACTOR,
                   self::CREATE_CONTRACTOR,
              self::LIST_BID,
                   self::CREATE_BID,
                  
                   self::LIST_CONTRACTORS_IMX,
                   self::CREATE_CONTRACTORS_IMX,
                   self::LIST_CONTRACTORS_IMX_RENEWED_PAYMENT,
                   self::CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT,
                   self::LIST_LICENSE_TYPE,
                   self::CREATE_LICENSE_TYPE,
                   self::LIST_LICENSE,
                   self::CREATE_LICENSE,
                   self::LIST_LICENSE_LEVEL,
                   self::CREATE_LICENSE_LEVEL,    
                   self::LIST_NAME_MSE,
                   self::CREATE_NAME_MSE,
                   self::LIST_MSE_MEMBERS,
                   self::CREATE_MSE_MEMBERS,
                   self::LIST_PAYMENT_ALLOWED_CONSULTANTS,
                   self::CREATE_PAYMENT_ALLOWED_CONSULTANTS,
                   self::LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT,
                   self::CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT,
                   self::LIST_PROFESSIONAL_LICENSE,
                   self::CREATE_PROFESSIONAL_LICENSE,
                  
              
                 self::HRM_EMPLOYEE,
                    self::LIST_EMPLOYEE,
                    self::CREATE_EMPLOYEE,
                    self::LIST_PROPERTY,
                    self::CREATE_PROPERTY,
                    self::LIST_TRANING,
                    self::CREATE_TRANING,
                    self::LIST_TRANSFER,
                    self::CREATE_TRANSFER,
                   
                   
                ))) {
            return FALSE;
        }

        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token) {
        $user = $token->getUser();

        if (!$user instanceof User) {
            // the user must be logged in; if not, deny access
            return false;
        }

        // ROLE_SUPER_ADMIN can do anything! The power!
        if ($this->decisionManager->decide($token, array('ROLE_SUPER_ADMIN'))) {
            return true;
        }

        switch ($attribute) {
            case self::ADMIN_GROUP:
                $permission = "ADMIN_GROUP";
                return $this->checkAuthorization($user, $permission);
              case self::LIST_OFFICE:
                $permission = "LIST_OFFICE";
                return $this->checkAuthorization($user, $permission);
              case self::CREATE_OFFICE:
                $permission = "CREATE_OFFICE";
                return $this->checkAuthorization($user, $permission);
             case self::EDIT_OFFICE:
                $permission = "EDIT_OFFICE";
                return $this->checkAuthorization($user, $permission);
              case self::DELETE_OFFICE:
                $permission = "DELETE_OFFICE";
                return $this->checkAuthorization($user, $permission);
              case self::VIEW_OFFICE:
                $permission = "VIEW_OFFICE";
                return $this->checkAuthorization($user, $permission);
             
             case self::LIST_LOG:
                $permission = "LIST_LOG";
                return $this->checkAuthorization($user, $permission);
              case self::VIEW_LOG:
                $permission = "VIEW_LOG";
                return $this->checkAuthorization($user, $permission);
 
              case self::LIST_CLIENT:
                $permission = "LIST_CLIENT";
                return $this->checkAuthorization($user, $permission);
              case self::CREATE_CLIENT:
                $permission = "CREATE_CLIENT"; 
                return $this->checkAuthorization($user, $permission);
              case self::LIST_GAURANTEE_TYPE:
                $permission = "LIST_GAURANTEE_TYPE";
                return $this->checkAuthorization($user, $permission);
              case self::CREATE_GAURANTEE_TYPE:
                $permission = "CREATE_GAURANTEE_TYPE";
                return $this->checkAuthorization($user, $permission);
              case self::LIST_KETEMA_KEBELE:
                $permission = "LIST_KETEMA_KEBELE";
                return $this->checkAuthorization($user, $permission);
              case self::CREATE_KETEMA_KEBELE:
                $permission = "CREATE_KETEMA_KEBELE";
                return $this->checkAuthorization($user, $permission);
              case self::LIST_PAYMENT_ROUND:
                $permission = "LIST_PAYMENT_ROUND";
                return $this->checkAuthorization($user, $permission);
              case self::CREATE_PAYMENT_ROUND:
                $permission = "CREATE_PAYMENT_ROUND";
                return $this->checkAuthorization($user, $permission);
              case self::LIST_PROJECT_TYPE:
                $permission = "LIST_PROJECT_TYPE";
                return $this->checkAuthorization($user, $permission);
              case self::CREATE_PROJECT_TYPE:
                $permission = "CREATE_PROJECT_TYPE";
                return $this->checkAuthorization($user, $permission);

          
          case self::BUILDING_GROUP:
                $permission = "BUILDING_GROUP";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_BUILDING_PROJECT:
                $permission = "LIST_BUILDING_PROJECT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_BUILDING_PROJECT:
                $permission = "CREATE_BUILDING_PROJECT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_BUILDING_PAYMENT:
                $permission = "LIST_BUILDING_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_BUILDING_PAYMENT:
                $permission = "CREATE_BUILDING_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_BUILDING_JOB_OPPORTUNITY:
                $permission = "LIST_BUILDING_JOB_OPPORTUNITY";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_BUILDING_JOB_OPPORTUNITY:
                $permission = "CREATE_BUILDING_JOB_OPPORTUNITY";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_BUILDING_PROJECT_DESIGN:
                $permission = "LIST_BUILDING_PROJECT_DESIGN";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_BUILDING_PROJECT_DESIGN:
                $permission = "CREATE_BUILDING_PROJECT_DESIGN";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_BUILDIND_EXPERTS:
                $permission = "LIST_BUILDIND_EXPERTS";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_BUILDING_PROJECT_DESIGN:
                $permission = "CREATE_BUILDIND_EXPERTS";
                return $this->checkAuthorization($user, $permission);                
            case self::LIST_BUILDIND_PROJECT_GAURANTEE:
                $permission = "LIST_BUILDIND_PROJECT_GAURANTEE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_BUILDIND_PROJECT_GAURANTEE:
                $permission = "CREATE_BUILDIND_PROJECT_GAURANTEE";
                return $this->checkAuthorization($user, $permission);
           case self::LIST_SERVICE_PAYMENT:
                $permission = "LIST_SERVICE_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_SERVICE_PAYMENT:
                $permission = "CREATE_SERVICE_PAYMENT";
                return $this->checkAuthorization($user, $permission);
         
         case self::ROAD_GROUP:
                $permission = "ROAD_GROUP";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_ROAD_PROJECT:
                $permission = "LIST_ROAD_PROJECT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_ROAD_PROJECT:
                $permission = "CREATE_ROAD_PROJECT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_ROAD_PAYMENT:
                $permission = "LIST_ROAD_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_ROAD_PAYMENT:
                $permission = "CREATE_ROAD_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_ROAD_JOB_OPPORTUNITY:
                $permission = "LIST_ROAD_JOB_OPPORTUNITY";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_ROAD_JOB_OPPORTUNITY:
                $permission = "CREATE_ROAD_JOB_OPPORTUNITY";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_ROAD_EXPERTS:
                $permission = "LIST_ROAD_EXPERTS";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_ROAD_EXPERTS:
                $permission = "CREATE_ROAD_EXPERTS";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_ROAD_PROJECT_DESIGN:
                $permission = "LIST_ROAD_PROJECT_DESIGN";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_ROAD_PROJECT_DESIGN:
                $permission = "CREATE_ROAD_PROJECT_DESIGN";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_ROAD_PROJECT_GAURANTEE:
                $permission = "LIST_ROAD_PROJECT_GAURANTEE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_ROAD_PROJECT_GAURANTEE:
                $permission = "CREATE_ROAD_PROJECT_GAURANTEE";
                return $this->checkAuthorization($user, $permission);
          
                
         case self::WATER_AND_IRRIGATION_GROUP:
                $permission = "WATER_AND_IRRIGATION_GROUP";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_WATER_PROJECT:
                $permission = "LIST_WATER_PROJECT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_WATER_PROJECT:
                $permission = "CREATE_WATER_PROJECT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_WATER_PAYMENT:
                $permission = "LIST_WATER_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_WATER_PAYMENT:
                $permission = "CREATE_WATER_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_WATER_JOB_OPPORTUNITY:
                $permission = "LIST_WATER_JOB_OPPORTUNITY";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_WATER_JOB_OPPORTUNITY:
                $permission = "CREATE_WATER_JOB_OPPORTUNITY";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_WATER_EXPERTS:
                $permission = "LIST_WATER_EXPERTS";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_WATER_EXPERTS:
                $permission = "CREATE_WATER_EXPERTS";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_WATER_PROJECT_DESIGN:
                $permission = "LIST_WATER_PROJECT_DESIGN";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_WATER_PROJECT_DESIGN:
                $permission = "CREATE_WATER_PROJECT_DESIGN";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_WATER_PROJECT_GAURANTEE:
                $permission = "LIST_WATER_PROJECT_GAURANTEE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_WATER_PROJECT_GAURANTEE:
                $permission = "CREATE_WATER_PROJECT_GAURANTEE";
                return $this->checkAuthorization($user, $permission);

       case self::INDUSTRY_GROUP:
                $permission = "INDUSTRY_GROUP";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_COC_EVALUATION:
                $permission = "LIST_COC_EVALUATION";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_COC_EVALUATION:
                $permission = "CREATE_COC_EVALUATION";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_COC_INFO:
                $permission = "LIST_COC_INFO";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_COC_INFO:
                $permission = "CREATE_COC_INFO";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_CONSULTANT:
                $permission = "LIST_CONSULTANT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_CONSULTANT:
                $permission = "CREATE_CONSULTANT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_CONSULTANTS:
                $permission = "LIST_CONSULTANTS";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_CONSULTANTS:
                $permission = "CREATE_CONSULTANTS";
                return $this->checkAuthorization($user, $permission);
           
            case self::LIST_CONTRACTORS:
                $permission = "LIST_CONTRACTORS";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_CONTRACTORS:
                $permission = "CREATE_CONTRACTORS";
                return $this->checkAuthorization($user, $permission);
 case self::LIST_CONTRACTOR:
                $permission = "LIST_CONTRACTOR";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_CONTRACTOR:
                $permission = "CREATE_CONTRACTOR";
                return $this->checkAuthorization($user, $permission);
           
            case self::LIST_CONTRACTORS_IMX:
                $permission = "LIST_CONTRACTORS_IMX";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_CONTRACTORS_IMX:
                $permission = "CREATE_CONTRACTORS_IMX";
                return $this->checkAuthorization($user, $permission);
           case self::LIST_CONTRACTORS_IMX_RENEWED_PAYMENT:
                $permission = "LIST_CONTRACTORS_IMX_RENEWED_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT:
                $permission = "CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_LICENSE_TYPE:
                $permission = "LIST_LICENSE_TYPE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_LICENSE_TYPE:
                $permission = "CREATE_LICENSE_TYPE";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_LICENSE:
                $permission = "LIST_LICENSE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_LICENSE:
                $permission = "CREATE_LICENSE";
                return $this->checkAuthorization($user, $permission);
      case self::LIST_LICENSE_LEVEL:
                $permission = "LIST_LICENSE_LEVEL";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_LICENSE_LEVEL:
                $permission = "CREATE_LICENSE_LEVEL";
                return $this->checkAuthorization($user, $permission);
                      
             case self::LIST_NAME_MSE:
                $permission = "LIST_NAME_MSE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_NAME_MSE:
                $permission = "CREATE_NAME_MSE";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_MSE_MEMBERS:
                $permission = "LIST_MSE_MEMBERS";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_MSE_MEMBERS:
                $permission = "CREATE_MSE_MEMBERS";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_PAYMENT_ALLOWED_CONSULTANTS:
                $permission = "LIST_PAYMENT_ALLOWED_CONSULTANTS";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_PAYMENT_ALLOWED_CONSULTANTS:
                $permission = "CREATE_PAYMENT_ALLOWED_CONSULTANTS";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT:
                $permission = "LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT:
                $permission = "CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_PROFESSIONAL_LICENSE:
                $permission = "LIST_PROFESSIONAL_LICENSE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_PROFESSIONAL_LICENSE:
                $permission = "CREATE_PROFESSIONAL_LICENSE";
                return $this->checkAuthorization($user, $permission);
            
         case self::LIST_BID:
                $permission = "LIST_BID";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_BID:
                $permission = "CREATE_BID";
                return $this->checkAuthorization($user, $permission);
    
            
                   
        case self::HRM_EMPLOYEE:
                $permission = "HRM_EMPLOYEE";
                return $this->checkAuthorization($user, $permission);
           case self::LIST_EMPLOYEE:
                $permission = "LIST_EMPLOYEE";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_EMPLOYEE:
                $permission = "CREATE_EMPLOYEE";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_PROPERTY:
                $permission = "LIST_PROPERTY";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_PROPERTY:
                $permission = "CREATE_PROPERTY";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_TRANING:
                $permission = "LIST_TRANING";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_TRANING:
                $permission = "CREATE_TRANING";
                return $this->checkAuthorization($user, $permission);
            case self::LIST_TRANSFER:
                $permission = "LIST_TRANSFER";
                return $this->checkAuthorization($user, $permission);
            case self::CREATE_TRANSFER:
                $permission = "CREATE_TRANSFER";
                return $this->checkAuthorization($user, $permission);
            

   

        }
        throw new \LogicException('This code should not be reached!');
    }

    private function checkAuthorization(User $user, $permission) {
        $roles = $user->getRoles();
        foreach ($roles as $role) {
            if ($role === $permission) {
                return true;
            }
        }
        $groups = $user->getGroups();
        foreach ($groups as $group) {
            $permissions = $group->getPermissions();
            foreach ($permissions as $groupPermission) {
                if ($groupPermission->getName() === $permission) {
                    return true;
                }
            }
        }
        return false;
    }

}
