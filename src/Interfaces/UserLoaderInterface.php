<?php

namespace CarloNicora\Minimalism\Interfaces\User\Interfaces;

interface UserLoaderInterface
{
    /**
     * @param int $id
     * @return UserInterface|null
     */
    public function byId(int $id): ?UserInterface;

    /**
     * @param string $email
     * @return UserInterface|null
     */
    public function byEmail(string $email): ?UserInterface;

    /**
     * @param string $userName
     * @return UserInterface|null
     */
    public function byUserName(string $userName): ?UserInterface;
}