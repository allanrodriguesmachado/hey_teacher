<?php

use Src\db\Connect;

require_once 'vendor/autoload.php';

$connect = new Connect();
$conn = $connect->getInstance();


$insert = sprintf("INSERT INTO users  (first_name, last_name, email, document) VALUES ('%s', '%s',' %s', '%s')",
    'Allan', 'Rodrigues', 'allan@email.com', '2343243');

$select = sprintf("SELECT first_name, last_name FROM users WHERE email = '%s'", 'allan@developer.com.br');

$update = sprintf("UPDATE users SET email = '%s' WHERE first_name = '%s'", 'allan@developer.com.br', 'Allan');

try {
    $stmt = $conn->prepare('INSERT INTO users (first_name, last_name) VALUES (:first_name, :last_name)');
    $values = [
        ':first_name' => 'Teste',
        ':last_name' => 'Meu'
    ];

    $stmt->execute($values);
}catch (Exception $exception) {
    echo $exception->getMessage();
}


