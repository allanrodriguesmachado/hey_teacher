<?php

use Src\db\Connect;

require_once 'vendor/autoload.php';

$user = new \Src\Models\User();

$loadUser = $user->load('1');
dd($loadUser);