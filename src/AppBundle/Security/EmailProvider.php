<?php

namespace AppBundle\Security;

use FOS\UserBundle\Security\UserProvider;

class EmailProvider extends UserProvider
{
    protected function findUser($username)
    {
        return $this->userManager->findUserByEmail($username);
    }
}