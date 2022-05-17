<?php

namespace CarloNicora\Minimalism\Interfaces\User\Interfaces;

interface UserInterface
{
    /**
     * @param int $id
     * @param string $userName
     * @param string $email
     * @param array $attributes
     */
    public function __construct(
        int    $id,
        string $userName,
        string $email,
        array  $attributes = [],
    );

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getUserName(): string;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @param string $attributeName
     * @return mixed
     */
    public function getAttribute(string $attributeName): mixed;

}