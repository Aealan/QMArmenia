<?php

namespace Quindimotos\ProyectoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Quindimotos\ProyectoBundle\Entity\Role;
use Quindimotos\ProyectoBundle\Form\RoleType;

class UserBundle extends Bundle
{
    public function getParent() {
       
        return 'FOSUserBundle';
    }
}
