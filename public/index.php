<?php

use Gounsch\Role;
use Gounsch\User;

require dirname(__DIR__).'/vendor/autoload.php';


$email = $_GET['email'] ?? 'email';

$user =  User::create($email);
$role = Role::create($user);

exit(sprintf("User '%s' has role %s", $user->getUser(), $role->role()));
