<?php
namespace CarloNicora\Minimalism\Interfaces\User\Interfaces;

interface UserRoleInterface
{
    /**
     * @return bool
     */
    public function isVisitor(): bool;
}