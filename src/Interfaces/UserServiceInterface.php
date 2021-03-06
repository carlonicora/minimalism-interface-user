<?php
namespace CarloNicora\Minimalism\Interfaces\User\Interfaces;

use CarloNicora\Minimalism\Interfaces\ServiceInterface;

interface UserServiceInterface extends ServiceInterface
{
    /**
     *
     */
    public function load(): void;

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * @param string $attributeName
     * @return mixed
     */
    public function getAttribute(string $attributeName): mixed;

    /**
     * @return bool
     */
    public function isVisitor(): bool;
}