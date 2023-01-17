<?php

namespace Ethio\Covid19Bundle\Security;

use Ethio\Covid19Bundle\Entity\Office;
use OST\UABundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class OfficeVoter extends Voter {

    private $decisionManager;

    // these strings are just invented: you can use anything
    const VIEW_OFFICE = 'VIEW_OFFICE';
    const EDIT_OFFICE = 'EDIT_OFFICE';
    const DELETE_OFFICE = 'DELETE_OFFICE';

    public function __construct(AccessDecisionManagerInterface $decisionManager) {
        $this->decisionManager = $decisionManager;
    }

    protected function supports($attribute, $subject) {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, array(self::VIEW_OFFICE, self::EDIT_OFFICE, self::DELETE_OFFICE))) {
            return false;
        }

        // only vote on MISQuery objects inside this voter
        if (!$subject instanceof Office) {
            return false;
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
        // you know $subject is a Post object, thanks to supports
        /** @var Item $Office */
        $Office = $subject;

        switch ($attribute) {
            case self::VIEW_OFFICE:
                $permission = "VIEW_OFFICE";
                return $this->checkAuthorization($Office, $user, $permission);

            case self::EDIT_OFFICE:
                $permission = "EDIT_OFFICE";
                return $this->canEditDelete($Office, $user, $permission);

            case self::DELETE_OFFICE:
                $permission = "DELETE_OFFICE";
                return $this->canEditDelete($Office, $user, $permission);
        }

        throw new \LogicException('This code should not be reached!');
    }

    private function checkAuthorization(Office $Office, User $user, $permission) {
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

    private function canEditDelete(Office $office, User $user, $permission) {

        if ($this->checkAuthorization($office, $user, $permission)) {
//            if ($office->getIsRequestedForApproval() || $office->getIsApprovedByPao() || $office->getIsApprovedByPao() || $office->getIsApprovedByStockClerk()) {
//                return FALSE;
//            }
            return $user === $office->getCreatedBy();
        } else {
            return FALSE;
        }
    }

}
