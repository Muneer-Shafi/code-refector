<?php

namespace Gounsch;

class Role
{
    private User $user;

    private function __construct(User $user )
    {
        $this->user = $user;
    }

    public function role(): string
    {
        if ('admin' === $this->user->getUser() && $this->user->isKnown()) {
            return 'ROLE_ADMIN';
        } elseif ($this->user->isKnown()) {
            return 'ROLE_USER';
        } else {
            return 'ROLE_UNKNOWN';
        }
    }

    public static function create(User $user): self
    {
        return new  self($user);

    }
}
