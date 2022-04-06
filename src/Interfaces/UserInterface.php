<?php

namespace CarloNicora\Minimalism\Interfaces\User\Interfaces;

interface UserInterface
{
    /**
     * @param UserRoleInterface $role
     * @param int $id
     * @param string $userName
     * @param string $email
     * @param array $attributes
     */
    public function __construct(
        UserRoleInterface $role,
        int               $id,
        string            $userName,
        string            $email,
        array             $attributes = [],
    );

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getUserName(): int;

    /**
     * @return int
     */
    public function getEmail(): int;

    /**
     * @param string $attributeName
     * @return mixed
     */
    public function getAttribute(string $attributeName): mixed;

    /**
     * @return UserRoleInterface
     */
    public function getRole(): UserRoleInterface;
}