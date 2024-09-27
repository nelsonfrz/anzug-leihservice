<?php

require __DIR__ . '/vendor/autoload.php';

use controllers\UserController;

$controller = new UserController();
$controller->registerUser("hello", "test@gmail.com", "password123");
