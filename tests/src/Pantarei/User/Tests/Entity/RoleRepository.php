<?php

/**
 * This file is part of the pantarei/user package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\User\Tests\Entity;

use Doctrine\ORM\EntityRepository;
use Pantarei\User\Model\RoleInterface;
use Pantarei\User\Model\RoleManagerInterface;

/**
 * RoleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoleRepository extends EntityRepository implements RoleManagerInterface
{
    public function getClass()
    {
        return $this->getClassName();
    }

    public function createRole()
    {
        $class = $this->getClass();
        return new $class();
    }

    public function deleteRole(RoleInterface $role)
    {
        $this->getEntityManager()->remove($role);
        $this->getEntityManager()->flush();
    }

    public function reloadRole(RoleInterface $role)
    {
        $this->getEntityManager->refresh($role);
    }

    public function updateRole(RoleInterface $role)
    {
        $this->getEntityManager()->presist($role);
        $this->getEntityManager()->flush();
    }

    public function findRoles()
    {
        return $this->findAll();
    }
}
