<?php

namespace AppBundle\Entity\User;

/**
 * Roles helper displays roles set in config.
 */
class Role
{

    private $rolesHierarchy;

    public function __construct($rolesHierarchy)
    {
        $this->rolesHierarchy = $rolesHierarchy;
    }

    /**
     * Return roles.
     *
     * @return array
     */
    public function getRoles()
    {
        $roles = array_combine(array_keys($this->rolesHierarchy), array_keys($this->rolesHierarchy));
        return array_unique($roles);
    }

}
