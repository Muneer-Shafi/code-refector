<?php

namespace Gounsch;

class User
{
    const KNOWN_DOMAINS = ['test'];

    private static string $email;
    public function getUser(): string
    {
        return explode('@', self::$email)[0];
    }

    public function isKnown(): bool
    {
        $domain = explode('@', self::$email);
        if (count($domain) > 1) {
            if (in_array($domain[1], self::KNOWN_DOMAINS)) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public static function create(string $email): self
    {
        self::$email = $email;
        return new self();
    }
}
