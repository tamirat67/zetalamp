<?php

namespace OST\UABundle\Security;

use OST\UABundle\Entity\Permission;
use OST\UABundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class PermissionVoter extends Voter
{
    private $decisionManager;

    // these strings are just invented: you can use anything
    const VIEW_PERMISSION = 'VIEW_PERMISSION';
    const EDIT_PERMISSION = 'EDIT_PERMISSION';
    const DELETE_PERMISSION = 'DELETE_PERMISSION';
    public function __construct(AccessDecisionManagerInterface $decisionManager)
    {
        $this->decisionManager = $decisionManager;
    }
    protected function supports($attribute, $subject)
    {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, array(self::VIEW_PERMISSION, self::EDIT_PERMISSION, self::DELETE_PERMISSION))) {
            return false;
        }

        // only vote on Permission objects inside this voter
        if (!$subject instanceof Permission) {
            return false;
        }

        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
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
        /** @var Permission $selectedPermission */
        $selectedPermission = $subject;

        switch ($attribute) {
            case self::VIEW_PERMISSION:
                $permission = "VIEW_PERMISSION";
                return $this->checkAuthorization($selectedPermission, $user, $permission);

            case self::EDIT_PERMISSION:
                $permission = "EDIT_PERMISSION";
                return $this->checkAuthorization($selectedPermission, $user, $permission);

            case self::DELETE_PERMISSION:
                $permission = "DELETE_PERMISSION";
                return $this->checkAuthorization($selectedPermission, $user, $permission);
        }

        throw new \LogicException('This code should not be reached!');
    }

    private function checkAuthorization(Permission $selectedPermission, User $user, $permission)
    {
        $group = $user->getUserGroup();
        if(empty($group)){
            return false;
        }
        $permissions = $group->getPermissions();
        foreach ($permissions as $groupPermission){
            if($groupPermission->getName() === $permission){
                return true;
            }
        }
        return false;
    }
}