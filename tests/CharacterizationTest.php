<?php

namespace Gounsch\Test;

use Gounsch\Role;
use Gounsch\User;
use PHPUnit\Framework\TestCase;

class CharacterizationTest extends TestCase
{
    public function test_user_has_role_admin()
    {

        $email = 'admin@test';
        $user = User::create($email);
        $role = Role::create($user);
        self::assertNotNull($user->getUser());
        self::assertEquals($role->role(),'ROLE_ADMIN');
    }

    public function test_user_has_role_unknown()
    {

        $email = 'abc';
        $user = User::create($email);
        $role = Role::create($user);
        self::assertNotNull($user->getUser());
        self::assertEquals($role->role(),'ROLE_UNKNOWN');
    }

    public function test_user_has_role_USER()
    {

        $email = 'abc@test';
        $user = User::create($email);
        $role = Role::create($user);
        self::assertEquals($role->role(),'ROLE_USER');
    }
}
