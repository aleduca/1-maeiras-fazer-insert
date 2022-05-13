<?php

use app\database\Insert;

require '../vendor/autoload.php';

$insert = new Insert;
$insert->setTable('users');
$inserted = $insert->create([
    'firstName' => 'Alexandre',
    'lastName' => 'Cardoso',
    'email' => 'email2@email.com.br',
    'password' => password_hash('123', PASSWORD_DEFAULT)
]);

var_dump($inserted);
