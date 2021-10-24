<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';

$user =[
    'id' => '',
    'name' =>'',
    'username' =>'',
    'email' =>'',
    'phone' =>'',
    'website' =>''
];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = createUser ($_POST);

    header("Location: index.php");
}

include 'form.php';